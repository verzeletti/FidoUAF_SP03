<?php
# This file was automatically generated by the MediaWiki 1.24.0
# installer. If you make manual changes, please keep track in case you
# need to recreate them later.
#
# See includes/DefaultSettings.php for all configurable settings
# and their default values, but don't forget to make changes in _this_
# file, not there.
#
# Further documentation for configuration settings may be found at:
# https://www.mediawiki.org/wiki/Manual:Configuration_settings

# Protect against web entry
if ( !defined( 'MEDIAWIKI' ) ) {
	exit;
}

## Uncomment this to disable output compression
# $wgDisableOutputCompression = true;

$wgSitename = "mID-BR (SP03)";
$wgMetaNamespace = "MID-BR_(SP03)";

## The URL base path to the directory containing the wiki;
## defaults for all runtime URL paths are based off of this.
## For more information on customizing the URLs
## (like /w/index.php/Page_title to /wiki/Page_title) please see:
## https://www.mediawiki.org/wiki/Manual:Short_URL
$wgScriptPath = "";
$wgScriptExtension = ".php";

## The protocol and server name to use in fully-qualified URLs
$wgServer = "https://sp03.redes.eng.br";

## The relative URL path to the skins directory
$wgStylePath = "$wgScriptPath/skins";

## The relative URL path to the logo.  Make sure you change this from the default,
## or else you'll overwrite your logo when you upgrade!
$wgLogo = "$wgScriptPath/images/LogoWiki.png";

## UPO means: this is also a user preference option

$wgEnableEmail = true;
$wgEnableUserEmail = false; # UPO

$wgEmergencyContact = "apache@sp03.redes.eng.br";
$wgPasswordSender = "apache@sp03.redes.eng.br";

$wgEnotifUserTalk = false; # UPO
$wgEnotifWatchlist = false; # UPO
$wgEmailAuthentication = false;

## Database settings
$wgDBtype = "mysql";
$wgDBserver = "localhost";
$wgDBname = "wiki_sp03";
$wgDBuser = "user";
$wgDBpassword = "user-password";

# MySQL specific settings
$wgDBprefix = "";

# MySQL table options to use during installation or update
$wgDBTableOptions = "ENGINE=InnoDB, DEFAULT CHARSET=binary";

# Experimental charset support for MySQL 5.0.
$wgDBmysql5 = true;

## Shared memory settings
$wgMainCacheType = CACHE_NONE;
$wgMemCachedServers = array();

## To enable image uploads, make sure the 'images' directory
## is writable, then set this to true:
$wgEnableUploads = false;
#$wgUseImageMagick = true;
#$wgImageMagickConvertCommand = "/usr/bin/convert";

# InstantCommons allows wiki to use images from http://commons.wikimedia.org
$wgUseInstantCommons = false;

## If you use ImageMagick (or any other shell command) on a
## Linux server, this will need to be set to the name of an
## available UTF-8 locale
$wgShellLocale = "C.UTF-8";

## If you want to use image uploads under safe mode,
## create the directories images/archive, images/thumb and
## images/temp, and make them all writable. Then uncomment
## this, if it's not already uncommented:
#$wgHashedUploadDirectory = false;

## Set $wgCacheDirectory to a writable directory on the web server
## to make your wiki go slightly faster. The directory should not
## be publically accessible from the web.
#$wgCacheDirectory = "$IP/cache";

# Site language code, should be one of the list in ./languages/Names.php
$wgLanguageCode = "pt-br";

$wgSecretKey = "c3506266dd078f0c566c09d48ab5192a9cb3f01797b9f9cde8da833cabc1325b";

# Site upgrade key. Must be set to a string (default provided) to turn on the
# web installer while LocalSettings.php is in place
$wgUpgradeKey = "55ed6497c050d921";

## For attaching licensing metadata to pages, and displaying an
## appropriate copyright notice / icon. GNU Free Documentation
## License and Creative Commons licenses are supported so far.
$wgRightsPage = ""; # Set to the title of a wiki page that describes your license/copyright
$wgRightsUrl = "";
$wgRightsText = "";
$wgRightsIcon = "";

# Path to the GNU diff3 utility. Used for conflict resolution.
$wgDiff3 = "/usr/bin/diff3";

# The following permissions were set based on your choice in the installer
$wgGroupPermissions['*']['createaccount'] = false;
$wgGroupPermissions['*']['edit'] = false;
$wgGroupPermissions['*']['read'] = false;

## Default skin: you can change the default skin. Use the internal symbolic
## names, ie 'vector', 'monobook':
$wgDefaultSkin = "wptouch";

# Enabled skins.
# The following skins were automatically enabled:
require_once "$IP/skins/CologneBlue/CologneBlue.php";
require_once "$IP/skins/Modern/Modern.php";
require_once "$IP/skins/MonoBook/MonoBook.php";
require_once "$IP/skins/Vector/Vector.php";
require_once "$IP/skins/WPtouch/WPtouch.php";


# End of automatically generated settings.
# Add more configuration options below.

require_once "$IP/extensions/SimpleSamlAuth/SimpleSamlAuth.php";
  $wgSessionName = ini_get('session.name');
  // SAML_OPTIONAL // SAML_LOGIN_ONLY // SAML_REQUIRED //
  $wgSamlRequirement = SAML_REQUIRED;
  // Should users be created if they don't exist in the database yet?
  $wgSamlCreateUser = true;
  $wgSamlConfirmMail = false;
  // SAML attributes
  //$wgSamlUsernameAttr = 'uid';
  //$wgSamlRealnameAttr = 'commonName';
  //$wgSamlMailAttr = 'mail';
  //(UID)- $wgSamlUsernameAttr = "urn:oid:0.9.2342.19200300.100.1.1";
  //(Sobrenome) - $wgSamlUsernameAttr = "urn:oid:2.5.4.4";
  // (uidMD5) - $wgSamlUsernameAttr = "urn:oid:0.9.2342.19200300.100.1.2";
  // (eduPersonTargetedID) - $wgSamlUsernameAttr = "urn:oid:1.3.6.1.4.1.5923.1.1.1.10";
  // (username) $wgSamlUsernameAttr = "urn:oid:0.9.2342.19200300.100.1.2";
  $wgSamlUsernameAttr = "urn:oid:0.9.2342.19200300.100.1.1";
  // $wgSamlRealnameAttr = "urn:oid:2.5.4.3";
  // $wgSamlMailAttr = "urn:oid:0.9.2342.19200300.100.1.3";
  //$wgSamlSchacProjectSpecificRoleAttr = "urn:oid:1.3.6.1.4.1.25178.1.2.21";
  //$wgSamlIsMemberOfAttr = "urn:oid:1.3.6.1.4.1.5923.1.5.1.1";
  //$wgSamlDisplayNameAttr = "urn:oid:2.16.840.1.113730.3.1.241";
  // SimpleSamlPhp settings
  $wgSamlSspRoot = '/var/www/simplesamlphp';
  $wgSamlAuthSource = 'default-sp';
  $wgSamlPostLogoutRedirect = NULL;
  // Array: [MediaWiki group][SAML attribute name][SAML expected value]
  // If the SAML assertion matches, the user is added to the MediaWiki group
  $wgSamlGroupMap = array(
        'sysop' => array(
                'groups' => array('admin'),
        ),
  );
