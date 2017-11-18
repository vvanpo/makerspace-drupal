## Prerequisites

* Install packages for nginx, php-fpm, postgresql-server, composer, and drush.
* Create and install nginx.conf into the nginx configuration directory (i.e. `sudo cp nginx.conf /etc/nginx/conf.d/makerspace.conf`).
* Run `composer update`.
* Allow nginx to read user content: `sudo setsebool -P httpd_read_user_content 1 && sudo setsebool -P httpd_enable_homedirs 1`.

