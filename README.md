# SilverStripe - ShowDown #

## Installation ##
Place these files in your silverstripe directory, in a directory called showdown/

## Usage ##

This module lets you edit page content using the Markdown text-processing system.   A live preview is shown using the Showdown javascript library.

Installing the module will by default provide a ShowdownPage type.

However, you may wish to simply override all HtmlTextFields with ShowdownTextField, in which case you may un-comment the line in _config.php.
This will also override $Content in templates to display correctly.

To display fields other than Content correctly on the front-end, you will need to adjust the templates manually, as shown below:

### Example of template display. ###
**themes/THEME/templates/Layout/Page.ss**

    $OtherField.Parse(MarkDown) 

See also ShowdownPage.php
