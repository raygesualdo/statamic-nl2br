#Statamic nl2br Modifier

A Statamic modifier that uses PHP's native nl2br() to convert newlines to &lt;br&gt;

##Installation
1. Download or clone from github and place in the `_addons` directory.
2. Make sure the folder is named `nl2br`.
3. Find a hammock and nap.

##Usage
Add the `nl2br` modifier to any tag of your choice. E.g. `{{ a_string|nl2br }}`

##Parameters
`nl2br` can have the parameter `xml` set to output `<br />` instead of `<br>`. E.g. `{{ a_string|nl2br:xml }}`
__NOTE:__ Contrary to PHP's native nl2br(), this modifier defaults to HTML breaks, not XML breaks.
