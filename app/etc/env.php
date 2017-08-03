<?php
return array (
  'backend' => 
  array (
    'frontName' => 'admin',
  ),
  'crypt' => 
  array (
    'key' => '8ab0513e5ad8d8a7c1d173ffd32577a1',
  ),
  'session' => 
  array (
    'save' => 'files',
  ),
  'db' => 
  array (
    'table_prefix' => 'st_',
    'connection' => 
    array (
      'default' => 
      array (
        'host' => 'localhost',
        'dbname' => 'magent_db',
        'username' => 'admin_st',
        'password' => '',
        'active' => '1',
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
  'MAGE_MODE' => 'developer',
  'cache_types' => 
  array (
    'config' => 1,
    'layout' => 1,
    'block_html' => 1,
    'collections' => 1,
    'reflection' => 1,
    'db_ddl' => 1,
    'eav' => 1,
    'customer_notification' => 1,
    'full_page' => 1,
    'config_integration' => 1,
    'config_integration_api' => 1,
    'translate' => 1,
    'config_webservice' => 1,
  ),
  'install' => 
  array (
    'date' => 'Wed, 02 Aug 2017 00:33:30 +0000',
  ),
);
