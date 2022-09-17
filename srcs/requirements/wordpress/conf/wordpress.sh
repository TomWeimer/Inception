sed -i "s/username_here/$MYSQL_USER/g" wp-config.php;
sed -i "s/password_here/$MYSQL_PASSWORD/g" wp-config.php;
sed -i "s/db_host_here/$DB_HOST/g" wp-config.php;
sed -i "s/database_name_here/$DATABASE_NAME/g" wp-config.php;

mv wp-config.php /var/www/tweimer.42.fr/html/wp-config.php;

/usr/sbin/php-fpm7 -F;
