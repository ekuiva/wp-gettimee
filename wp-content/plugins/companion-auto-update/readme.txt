=== Companion Auto Update ===
Contributors: Papin
Donate link: https://www.paypal.me/dakel/1
Tags: auto, automatic, background, update, updates, updating, automatic updates, automatic background updates, easy update, wordpress update, theme update, plugin update, up-to-date, security, update latest version, update core, update wp, update wp core, major updates, minor updates, update to new version, update core, update plugin, update plugins, update plugins automatically, update theme, plugin, theme, advance, control, mail, notifations, enable
Requires at least: 3.5.0
Tested up to: 4.8
Stable tag: 2.9.6
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

This plugin automatically updates all plugins, all themes and the wordpress core in the background.

== Description ==

= Keep your website safe! =
We understand that you might not always be able to check if your wordpress site has any updates that need to be installed, especially when you maintain multiple websites keeping them up-to-date can be a lot of work.
This plugin enables background auto-updating for all plugins, all themes and the wordpress core (both major and minor updates). 
We give you full control over what is updated and what isn't, via the settings page you can easily disallow auto-updating for either plugins, themes or wordpress core.

= Available settings =
1. Enable/disable updates for plugins (Enabled by default).
1. Enable/disable updates for themes (Enabled by default).
1. Enable/disable updates for minor WordPress updates (Enabled by default).
1. Enable/disable updates for major WordPress updates (Enabled by default).
1. Enable/disable updates for translation files (Enabled by default).

= Email Notifications =
1. Update Available: Sends an email when an update is available and you've disabled auto-updates (Disabled by default).
1. Successful Update: Sends an email when something has been updated (Disabled by default).
1. Core Emails: By default wordpress sends an email when a core update happend, you can now disable this.

= Advanced Controls =
You can control auto-updating per plugin via the plugin filter. 
For example: If you have Woocommerce installed but you do not wan't to have it auto-updated you can now disable auto-updating for Woocommerce only, so your other plugins will continue to be updated.

= Scheduling =
You can change how often the updater runs, it defaults to twice daily but you can change this to hourly or daily.
The same settings can be changed for notifications.

== Installation ==

= Manual install =
1. Download Companion Auto Update.
1. Upload the 'Companion Auto Update' directory to your '/wp-content/plugins/' directory.
1. Activate Companion Auto Update from your Plugins page.

= Via WordPress =
1. Search for 'Companion Auto Update'.
1. Click install.
1. Activate.

= Settings =
Settings can be found trough Tools > Auto Updater

== Frequently Asked Questions ==

= Where can I find the settings? =

You can find the settings under Tools > Auto updating

= How often does this plugin check for updates?  =

The auto-updater is run once twice a day by default, however you can change this to hourly or daily.

= Can I change how often it checks and/or updates?  =

Yes you can. Go to the dashboard > Scheduling

= Can I disable auto updating for certain plugins? =

Yes. You can control auto-updating per plugin via the plugin filter. 

= I'm using cPanel and auto-updating doens't work =
If you launched your website a few years ago using cPanel it could be the case that auto-updating is broken. We've contacted cPanel and they said to remove the "AUTOMATIC_UPDATER_DISABLED" line from your wp-config file.

== Screenshots ==

1. Easily configure what you'd like to auto-update and what not
2. If you have disabled one or multiple auto-updates, we can email you when an update is available.
3. Control how often the updater kicks in.

== Changelog ==

= 2.6.6 (7/11/2017) = 
* Added buttons to help development of this plugin.

= 2.9.5 (6/22/2017) =
* Fixed issue where multiple emailaddresses wouldn't work.

= 2.9.4 (5/31/2017) =
* Security improvements

= 2.9.3 (4/15/2017) =
* Change how often notifications are sent (defaults to daily)

= 2.9.2 (3/18/2017) =
* New: Set how often the auto updater should run (defaults to twice daily)

= 2.9.1 (2/25/2017) = 
* Added a little bit of styling to the plugin filter to make it easier to understand.

= 2.9 (2/24/2017) =
* Advanced Controls: You can control auto-updating per plugin via the plugin filter. 

= 2.8.1 =
* Fixed few typos

= 2.8 =
* Enable/disable updates for translation files (Enabled by default).
* Core Emails: By default wordpress sends an email when a core update happend, you can now disable this.
* Several under-the-hood perfomance improvements and a few minor bug fixes.

= 2.7.7 =
* New: Added site name to e-mail subject. Example: [Qreative-Web] One ore more plugins have been updated.

= 2.7.5 = 
* Fixed: Notice: Undefined variable: charset_collate

= 2.7.4 =
* Fixed: Double e-mail notifications [Read support topic here](https://wordpress.org/support/topic/double-e-mail-notifications/)

= 2.7.3 =
* Fixed: Notifications sending when nothing was updated

= 2.7.2 =
* Fixed: Notifications settings not always updating

= 2.7.0 =
* Better updating: How ironic, this plugin did not handle it's own updates so well (required re-activation etc.) this has been fixed.
* Fixed bug: WordPress updates could not be disabled, this should work now.
* Update Notifications: You can now get an email notification when an plugin has been updated (right now this only works with plugins, themes coming up).
* Minor perfomance improvements.

= 2.5.0 =
* New: If you have disabled one or multiple auto-updates, we can email you when an update is available.

= 2.0 / 2.0.2 / 2.0.4 =
* Fully migrated translations to translate.wordpress.org
* Fixed issue where setting would show up multiple times when re-activating multiple times
* Added settings link to plugin list
* You can now select what to update and what not (plugins, themes, major and minor core updates)

= 1.0 =
* Initital release