#!/bin/bash

wp core download --allow-root --path="/var/www/html"
cp /wp-config.php /var/www/html/wp-config.php
wp core install --allow-root --url="${DOMAIN}" --title="Inception" --admin_user="${WP_ADMIN_USR}" --admin_password="${WP_ADMIN_PASSW}" --admin_email="${WP_ADMIN_EMAIL}" --path="/var/www/html" --skip-email
wp user create "${WP_NORMAL_USR}" "${WP_NORMAL_EMAIL}" --allow-root --role="author" --user_pass="${WP_NORMAL_PASSW}" --path="/var/www/html"

exec php-fpm82 -F