For any cache bin use this backend by adding it into settings file

e.g.

$settings['cache']['bins']['stock'] = 'cache.backend.permanent_database';


To clear permanent cache

drush pcbf [bin]

e.g. drush pcbf stock
