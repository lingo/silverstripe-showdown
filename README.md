## Usage ##

Installing the module will by default override all HtmlTextFields with ShowdownTextField and will override $Content in templates to display correctly.

However, you may edit the _config.php so that this does not occur; you may then simply use the ShowdownPage type.

To display other fields correctly on the front-end, you will need to adjust the templates manually.

### Example ###
**themes/THEME/templates/Layout/Page.ss**

    $OtherField.Parse(MarkDown) 


See also ShowdownPage.php