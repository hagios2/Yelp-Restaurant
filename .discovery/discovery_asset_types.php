<?php
return array (
  'botman/driver-config' => 
  array (
    0 => 
    array (
      'value' => 'stubs/botframework.php',
      'package' => 'botman/driver-botframework',
      'packageDir' => 'vendor/botman/driver-botframework/',
      'priority' => 0.0,
      'metadata' => 
      array (
      ),
    ),
    1 => 
    array (
      'value' => 'stubs/web.php',
      'package' => 'botman/driver-web',
      'packageDir' => 'vendor/botman/driver-web/',
      'priority' => 0.0,
      'metadata' => 
      array (
      ),
    ),
  ),
  'botman/driver' => 
  array (
    0 => 
    array (
      'value' => 'BotMan\\Drivers\\BotFramework\\BotFrameworkDriver',
      'package' => 'botman/driver-botframework',
      'packageDir' => 'vendor/botman/driver-botframework/',
      'priority' => 0.0,
      'metadata' => 
      array (
      ),
    ),
    1 => 
    array (
      'value' => 'BotMan\\Drivers\\BotFramework\\BotFrameworkImageDriver',
      'package' => 'botman/driver-botframework',
      'packageDir' => 'vendor/botman/driver-botframework/',
      'priority' => 0.0,
      'metadata' => 
      array (
      ),
    ),
    2 => 
    array (
      'value' => 'BotMan\\Drivers\\Web\\WebDriver',
      'package' => 'botman/driver-web',
      'packageDir' => 'vendor/botman/driver-web/',
      'priority' => 0.0,
      'metadata' => 
      array (
      ),
    ),
  ),
);
