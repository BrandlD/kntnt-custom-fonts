# Kntnt Custom Fonts

WordPress plugin that provides a custom fonts with support for
Beaver Builder Plugin and Beaver Builder Theme.

## Description

Create a directory `fonts` in `wp-content`, create a subdirectory for each font
family (e.g. `Helvetica Neue`), and create within these a subdirectory for each
numeral weight (e.g. `400` and `700`), and create within these a subdirectory
for  each style (e.g. `normal` and `italic`), and drop within these the
corresponding woff and/or woff2 font file(s). The name of the font family
directory will be used as display name.

Example: 

    wp-contents
    |
    +--fonts
       |
       +--Helvetica Neue
          |
          +--400
          |  |
          |  +--Normal
          |  |  |
          |  |  +--HelveticaNeueLTPro-Roman.woff
          |  |  |
          |  |  +--HelveticaNeueLTPro-Roman.woff2
          |  |
          |  +--Italic
          |     |
          |     +--HelveticaNeueLTPro-It.woff
          |     |
          |     +--HelveticaNeueLTPro-It.woff2
          |
          +--700
             |
             +--Normal
             |  |
             |  +--HelveticaNeueLTPro-Bd.woff
             |  |
             |  +--HelveticaNeueLTPro-Bd.woff2
             |
             +--Italic
                |
                +--HelveticaNeueLTPro-BdIt.woff
                |
                +--HelveticaNeueLTPro-BdIt.woff2
             
You can name `fonts` whatever you want and place it wherever you want relative
WordPress root directory as long as you update the settings accordingly.

The plugin generates the CSS file wp-content/uploads/kntnt-custom-fonts.css.
This is created when the plugin is enabled, recreated when the settings are
saved, and deleted when the plugin is disabled.

## Installation

Install the plugin [the usually way](https://codex.wordpress.org/Managing_Plugins#Installing_Plugins).

You can also install it with [*GitHub Updater*](https://github.com/afragen/github-updater/archive/develop.zip), which gives you the additional benefit of keeping the plugin up to date from within its administrative interface (i.e. the usually way). Please visit its [wiki](https://github.com/afragen/github-updater/wiki) for more information. 

## Frequently Asked Questions

### Where is the setting page?

Look for `Custom Fonts` in the Settings menu.

### How do I know if there is a new version?

This plugin is currently [hosted on GitHub](https://github.com/Kntnt/kntnt-custom-fonts); one way would be to ["watch" the repository](https://help.github.com/articles/watching-and-unwatching-repositories/).

If you prefer WordPress to nag you about an update and let you update from within its administrative interface (i.e. the usually way) you must [download *GitHub Updater*](https://github.com/afragen/github-updater/archive/develop.zip) and install and activate it the usually way. Please visit its [wiki](https://github.com/afragen/github-updater/wiki) for more information. 

### How can I get help?

If you have a questions about the plugin, and cannot find an answer here, start by looking at [issues](https://github.com/Kntnt/kntnt-custom-fonts/issues) and [pull requests](https://github.com/Kntnt/kntnt-custom-fonts/pulls). If you still cannot find the answer, feel free to ask in the the plugin's [issue tracker](https://github.com/Kntnt/kntnt-custom-fonts/issues) at Github.

### How can I report a bug?

If you have found a potential bug, please report it on the plugin's [issue tracker](https://github.com/Kntnt/kntnt-custom-fonts/issues) at Github.

### How can I contribute?

Contributions to the code or documentation are much appreciated.

If you are unfamiliar with Git, please date it as a new issue on the plugin's [issue tracker](https://github.com/Kntnt/kntnt-custom-fonts/issues) at Github.

If you are familiar with Git, please do a pull request.

## Changelog

### 1.0.0

Initial release. Fully functional plugin.
