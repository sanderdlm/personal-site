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

c::set('license', 'put your license key here');

c::set('languages', array(
  array(
    'code'    => 'nl',
    'name'    => 'Nederlands',
    'default' => true,
    'locale'  => 'nl_BE',
    'url'     => '/',
  ),
  array(
    'code'    => 'en',
    'name'    => 'English',
    'locale'  => 'en_US',
    'url'     => '/en',
  ),
));

c::set('language.detect', true);

/*

---------------------------------------
Kirby Configuration
---------------------------------------

By default you don't have to configure anything to
make Kirby work. For more fine-grained configuration
of the system, please check out http://getkirby.com/docs/advanced/options

*/

c::set('debug', true);
c::set('markdown.extra',true);

c::set('panel.widgets', array(
  'pages'    => true,
  'site'     => true,
  'account'  => true,
  'history'  => true,
  'seo-checklist' => true,
  'license' => false
));