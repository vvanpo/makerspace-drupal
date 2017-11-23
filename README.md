## Prerequisites

* Install packages for nginx, php-fpm, php-pgsql, postgresql-server, composer, and drush.
* Enable and start nginx, php-fpm, and postgresql `sudo systemctl enable nginx php-fpm postgresql && sudo systemctl start nginx php-fpm postgresql`.
* Download Drupal core files with `git clone https://github.com/drupal/drupal.git`.
* Grab external dependencies by running `cd drupal && composer install`.
* Clone this repository into `sites/makerspace.ca`.
* Configure multi-site by creating `sites/sites.php` with the line `$sites['localhost'] = 'makerspace.ca';`.
* Create the files directory `cd sites/makerspace.ca && mkdir files && chown user:apache files`.
* Create and install nginx.conf into the nginx configuration directory (i.e. `sudo cp nginx.conf /etc/nginx/conf.d/makerspace.conf && sudo systemctl reload nginx`).
* Allow nginx to read user content: `sudo setsebool -P httpd_read_user_content=1 httpd_enable_homedirs=1`.
* Create an empty database `createdb makerspace-drupal && echo ALTER DATABASE \"makerspace-drupal\" SET bytea_output=\'escape\' | psql makerspace-drupal`.

To update drupal, go to the root drupal directory and run `git pull && composer update`.
