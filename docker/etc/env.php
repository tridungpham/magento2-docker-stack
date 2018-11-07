<?php
return array (
  'backend' => 
  array (
    'frontName' => 'admin_utj05p',
  ),
  'crypt' => 
  array (
    'key' => '15f52cf6f7f1ae2557e8b040e5c92fe5',
  ),
  'session' => 
  array (
    'save' => 'redis',
    'redis' => 
    array (
      'host' => '13.238.154.4',
      'port' => '6379',
      'password' => '',
      'timeout' => '2.5',
      'persistent_identifier' => '',
      'database' => '4',
      'compression_threshold' => '2048',
      'compression_library' => 'gzip',
      'log_level' => '1',
      'max_concurrency' => '6',
      'break_after_frontend' => '5',
      'break_after_adminhtml' => '30',
      'first_lifetime' => '600',
      'bot_first_lifetime' => '60',
      'bot_lifetime' => '7200',
      'disable_locking' => '0',
      'min_lifetime' => '60',
      'max_lifetime' => '2592000',
    ),
  ),
  'db' => 
  array (
    'table_prefix' => '',
    'connection' => 
    array (
      'default' => 
      array (
        'host' => '13.238.154.4',
        'dbname' => 'mrt',
        'username' => 'mrt',
        'password' => 'Password123!',
        'model' => 'mysql4',
        'engine' => 'innodb',
        'initStatements' => 'SET NAMES utf8;',
        'active' => '1',
        'driver_options' => 
        array (
          1001 => true,
        ),
      ),
    ),
  ),
  'resource' => 
  array (
    'default_setup' => 
    array (
      'connection' => 'default',
    ),
  ),
  'x-frame-options' => 'SAMEORIGIN',
  'MAGE_MODE' => 'production',
  'cache_types' => 
  array (
    'config' => 1,
    'layout' => 1,
    'block_html' => 1,
    'collections' => 1,
    'reflection' => 1,
    'db_ddl' => 1,
    'eav' => 1,
    'config_integration' => 1,
    'config_integration_api' => 1,
    'full_page' => 1,
    'translate' => 1,
    'config_webservice' => 1,
    'compiled_config' => 0,
    'customer_notification' => 1,
  ),
  'install' => 
  array (
    'date' => 'Wed, 22 Jun 2016 07:29:30 +0000',
  ),
);
