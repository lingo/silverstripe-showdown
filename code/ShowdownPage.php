<?php

/**
 * Implements a simple page type, which replaces the Content HTMLField with a 
 * ShowdownField in the admin UI.
 */
class ShowdownPage extends Page {

	public static $db = array();

	public static $has_one = array();

    public function getCMSFields() {
        $fields = parent::getCMSFields();
        $fields->removeByName('Root.Content');
        $fields->addFieldToTab('Root.Content.Main', new ShowdownField('Content', 'Content'));
        return $fields;
    }
}

class ShowdownPage_Controller extends Page_Controller {
}


?>
