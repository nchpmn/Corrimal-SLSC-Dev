<?php

/*

---------------------------------------
License Setup
---------------------------------------

Please add your license key, which you've received
via email after purchasing Kirby on http://getkirby.com/buy

It is not permitted to run a public website without a
valid license key. Please read the End User License Agreement
for more information: http://getkirby.com/license

*/

c::set('license', '');

/*

---------------------------------------
Kirby Configuration
---------------------------------------

By default you don't have to configure anything to
make Kirby work. For more fine-grained configuration
of the system, please check out http://getkirby.com/docs/advanced/options

*/

/* Run config on "remote" server */
c::set('panel.install', true);

/* Set Markdown Extra as default editor */
c::set('markdown.extra', true);

/* Enable Debus Mode */
c::set('debug', true);

/* Disable Caching on Development */
c::set('cache',false);


/*

---------------------------------------
StaticBuilder Configuation
https://github.com/fvsch/kirby-staticbuilder
---------------------------------------

*/

/* Enable Kirby StaticBuilder locally */
c::set('staticbuilder', true);

/* Copy page files */
c::set([
    'staticbuilder'            => true,
    'staticbuilder.extension'  => '/index.html',
    'staticbuilder.withfiles' => true
]);

// If hosting in a subfolder
c::set('staticbuilder.baseurl', './');