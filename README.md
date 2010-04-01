## Usage ##

Installing the module will override all HtmlTextFields with ShowdownTextField.
To display the content correctly, you will also need to adjust the templates.

**themes/THEME/templates/Layout/Page.ss**

    $Content.Parse(MarkDown) 


