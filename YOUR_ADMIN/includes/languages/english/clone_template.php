<?php
// -----
// Part of the "Clone Template" plugin for Zen Cart v1.5.0 or later
//
// Copyright (c) 2016, Vinos de Frutas Tropicales (lat9)
//
if (!defined ('CLONE_TEMPLATE_VERSION')) define ('CLONE_TEMPLATE_VERSION', 'v1.0.0');
define ('HEADING_TITLE', 'Clone a Template <span style="font-size: smaller;">(' . CLONE_TEMPLATE_VERSION . ')</span>');
define ('TEXT_INSTRUCTIONS', 'This tool enables you to &quot;clone&quot; an <em>existing</em> template for your store.  When a template is &quot;cloned&quot;, all <em>template-override</em> files associated with the source template are copied to folders for the new template and entries for the source template\'s <b>Layout Boxes Controller</b> settings are copied to for the new template.');

define ('TEXT_TEMPLATE_SOURCE', 'Source Template: ');
define ('TEXT_NEW_TEMPLATE_NAME', 'Target Template: ');

define ('CLONE_TEMPLATE_GO_ALT', 'Click here to clone this template');
define ('TC_TEXT_BACK', 'Back');

define ('MESSAGE_BLANK_CLONED_NAME', 'The <b>Target Template</b> cannot be blank; please re-enter.');
define ('MESSAGE_DUPLICATE_CLONED_NAME', 'The <b>Target Template</b> cannot be one of the existing templates; please re-enter.');
define ('MESSAGE_INVALID_CHARS_CLONED_NAME', 'The <b>Target Template</b> must contain only alphanumeric (a-z, A-Z, 0-9) characters or underscores (_); please re-enter.');

define ('MESSAGE_COPYING_FILES', 'Copying files from %1$s to %2$s');

define ('MESSAGE_FILE_LOG', '&nbsp;&nbsp;&nbsp;Actions taken by this processing are logged in %s.');

define ('JS_CONFIRMATION_MESSAGE', 'This action will overwrite any files of the same name in the target-template folders.  Continue?');

// -----
// These constants are used to log (both on display and to file) the files copied by the plugin.
//
define ('LOG_FOLDER_FILES_FOUND', 'Copying %1$u file(s) from folder %2$s ...');   //-%1$u (number of files), %2$s (folder name), 
define ('LOG_FOLDER_CREATED', '&nbsp;&nbsp;&nbsp;Creating directory %s');   //-%s (folder name)
define ('LOG_COPYING_FILE', '&nbsp;&nbsp;&nbsp;Copying %1$s to %2$s.');     //-%1$s (source file), %2$s (target file)