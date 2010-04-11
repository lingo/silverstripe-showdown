<?php

class ShowdownField extends HtmlEditorField {

	public function Field() {
		Requirements::javascript('showdown/javascript/showdown.js');
		Requirements::javascript(THIRDPARTY_DIR . '/jquery-ui/ui.core.js');
		Requirements::javascript(THIRDPARTY_DIR . '/jquery-ui/ui.resizable.js');
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
