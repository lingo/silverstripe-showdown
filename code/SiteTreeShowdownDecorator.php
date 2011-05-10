<?php

/**
 * This decorates SiteTree, so that all HTMLEditorFields are replaced by ShowdownFields.
 */
class SiteTreeShowdownDecorator extends DataObjectDecorator {

	public function updateCMSFields(&$fields) {
		$toreplace = array();
		foreach($fields->dataFields() as $f) {
			if ($f instanceof HtmlEditorField) {
				$toreplace[] = $f;
			}
		}
		foreach($toreplace as $f) {
			$fields->replaceField($f->name,
				new ShowdownField($f->name, $f->title, $f->rows, $f->cols, $f->value, $f->form)
				);
		}
	}
	
}

?>
