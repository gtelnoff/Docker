#!bin/sh

# Create and place the wpress directory.
mkdir -p /var/www/html/wpress
cp -r wordpress/* /var/www/html/wpress
chown -R www-data /var/www/html/wpress
chmod -R 755 /var/www/html/wpress

# Insatll wp-cli, using for create the wp-config.php and the final install of WordPress.
curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
chmod +x wp-cli.phar
mv wp-cli.phar /usr/local/bin/wp

# Wait mariadb service.
sleep 10

cp  ./wp-config.php ./var/www/html/wpress

# Create the DB for WordPress.
sed -i 's/REPLACE_DB_NAME/'$DB_NAME'/g' /var/www/html/wpress/wp-config.php
sed -i 's/REPLACE_DB_USER/'$DB_USER'/g' /var/www/html/wpress/wp-config.php
sed -i 's/REPLACE_DB_PASSWORD/'$DB_PASSWORD'/g' /var/www/html/wpress/wp-config.php
sed -i 's/REPLACE_DB_HOST/'$DB_HOST'/g' /var/www/html/wpress/wp-config.php

# Final install for WordPress.
wp core install --url=https://gtelnoff.42.fr --title="Marketplace" --admin_user=$ROOT_NAME --admin_password=$ROOT_PASSWORD --admin_email=$ROOT_MAIL --allow-root --path=/var/www/html/wpress

# Create the USER: Gaspard.
wp user create $USER_NAME $USER_MAIL --user_pass=$USER_PASSWORD --role=subscriber --allow-root --path=/var/www/html/wpress

#wp search-replace http://localhost https://gtelnoff.42.fr --allow-root --path=/var/www/html/wpress

/usr/sbin/php-fpm7.3 -F -R