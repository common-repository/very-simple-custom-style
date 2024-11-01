=== Very Simple Custom Style ===
Contributors: Guido07111975
Version: 2.8
License: GNU General Public License v3 or later
License URI: http://www.gnu.org/licenses/gpl-3.0.html
Requires at least: 3.7
Tested up to: 4.9
Stable tag: trunk
Tags: simple, style, stylesheet, css, editor


This is a very simple plugin to add Custom CSS to change your theme or plugin layout.


== Description ==
= About =
This is a very simple plugin to add Custom CSS to change your theme or plugin layout.

= NOTICE = 
This plugin will be removed from repository. Main reasons are the new custom CSS page in customizer and the small number of active installs.

You can keep using plugin, but without updates and without support from author.

= How to use =
After installation go to Settings > Custom Style and enter your custom CSS.

Example: `#header {padding:20px 0; background:#000; color:#fff;}`

In some cases you should use the `!important` declaration to overwrite parent style.

Example: `#header {padding:20px 0 !important;}`

If you want to change the layout of your theme or plugin you should look for the element you want to change.

So first you should inspect your theme or plugin.

= Question? =
Please take a look at the FAQ section.

= Translation =
Not included but plugin supports WordPress language packs.

More [translations](https://translate.wordpress.org/projects/wp-plugins/very-simple-custom-style) are very welcome!

= Credits =
Without the WordPress codex and help from the WordPress community I was not able to develop this plugin, so: thank you!

Enjoy!


== Installation ==
Please check Description section for installation info.


== Frequently Asked Questions ==
= How do I set plugin language? =
Plugin will use the site language, set in Settings > General.

If plugin isn't translated into this language, language fallback will be English.

= Why did you set the max. amount on 2500 characters? =
You should use this plugin for minor CSS changes only. That's why I have set the max. amount on 2500 characters.

For major CSS changes I recommend using a [Child Theme](https://developer.wordpress.org/themes/advanced-topics/child-themes).

= Can I make notes in my CSS code? =
Yes, this is possible.

You should do it like this:

`/* Notes about your CSS code */`

= How can I make a donation? =
You like my plugin and you're willing to make a donation? Nice! There's a PayPal donate link at my website.

= Other question or comment? =
Please open a topic in plugin forum.


== Changelog ==
= Version 2.8 =
* readme file: removed donate link
* updated theme author info

= Version 2.7 =
* last update: this plugin will be removed from repository
* main reasons are the new custom CSS page in customizer and the small number of active installs
* you can keep using plugin, but without updates and without support from author
* updated readme file

= Version 2.6 =
* best practice: removed closing PHP tag from most files
* best practice: added newline at end of most files

= Version 2.5 =
* file vscs: disable direct access to file
* updated file uninstall

= Version 2.4 =
* added link to settingspage

For all versions please check file changelog.


== Screenshots == 
1. Very Simple Custom Style (dashboard).