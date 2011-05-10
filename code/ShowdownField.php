<?php

/**
 * Extension of HtmlEditorField to provide two side-by-side views; one view is the editor window,
 * the other is the preview.
 * Javascript is used to provide a live-update of the preview, and on the front-end
 * a silverstripe parser is used to convert the stored Markdown into HTML for display.
 * @see parsers/MarkDown.php
 */
class ShowdownField extends HtmlEditorField {

	public function Field() {
		Requirements::javascript('showdown/javascript/showdown.js');
		#Requirements::javascript(THIRDPARTY_DIR . '/jquery-ui/ui.core.js');
		#Requirements::javascript(THIRDPARTY_DIR . '/jquery-ui/ui.resizable.js');
		Requirements::javascript('showdown/javascript/ShowdownField.js');
		Requirements::css('showdown/css/ShowdownField.css');
		return $this->renderWith('ShowdownField');
	}

	public function XML_val($field, $arguments = null, $cache = false) {
		$result = $this->obj($field, $arguments, false, $cache);
		return is_object($result) ? $result->forTemplate() : $result;
	}
}

?>
