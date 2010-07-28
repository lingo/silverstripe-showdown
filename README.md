## Usage ##

Installing the module will override all HtmlTextFields with ShowdownTextField and will override $Content in templates to display correctly.

To display other fields correctly on the front-end, you will need to adjust the templates manually.

### Example ###
**themes/THEME/templates/Layout/Page.ss**

    $OtherField.Parse(MarkDown) 


