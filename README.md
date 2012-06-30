habari-socialite
================

Habari plugin using [Socialite](https://github.com/dbushell/Socialite) to add social sharing buttons.

Currently supports Twitter, Google+, Facebook and LinkedIn. Future version will add additional buttons, and option to selectively display buttons.

All credit goes to David Bushell [http://dbushell.com](http://dbushell.com/) [@dbushell](http://twitter.com/dbushell/)

Socialite is distributed under [BSD or MIT License](http://socialitejs.com/license.txt)

### Usage ###

There currently is only one option, the Twitter username you would like the via attribution for. Only needs the username, not the full path to the account.

To display the buttons on your site, simply add `<?php echo $theme->display('socialite'); ?>` where you want them to appear.

The plugin adds basic CSS for the buttons. The buttons are list items in an unordered list with the class of .social-buttons. The list is wrapped in a div with the class of .socialize.

If you want to customize the buttons template, copy socialite.php to your theme directory and modify.

If you have any questions or need to report a bug, vist the [issue tracker](https://github.com/miklb/habari-socialite/issues)

