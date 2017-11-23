<?php

$databases['default']['default'] = array (
  'database' => 'makerspace-drupal',
  'username' => 'apache',
  'password' => '',
  'prefix' => '',
  'host' => '/var/run/postgresql',
  'port' => '',
  'namespace' => 'Drupal\\Core\\Database\\Driver\\pgsql',
  'driver' => 'pgsql',
);

$config_directories['sync'] = 'sites/makerspace.ca/files/config_oigFooiY4RlxTTjxK6CgS61WJWdtlxRif87irpqFNMLOvdY9noj91dwzhOP4GTldnwTq7ZuePQ/sync';

$settings['install_profile'] = 'standard';

$settings['hash_salt'] = file_get_contents($app_root . '/' . $site_path . '/salt.txt');

$settings['update_free_access'] = FALSE;

$settings['container_yamls'][] = $app_root . '/' . $site_path . '/services.yml';

$settings['file_scan_ignore_directories'] = [
  'node_modules',
  'bower_components',
];

$settings['entity_update_batch_size'] = 50;
