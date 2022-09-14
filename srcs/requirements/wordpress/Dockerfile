#----------------------------------------------------------------------
# -> Wordpress dockerfile
FROM alpine:3.15
LABEL version="3.15"
LABEL description="Wordpress Container"
#----------------------------------------------------------------------

# update the platform if needed
RUN apk update && apk upgrade

#installing php
RUN apk add php7-fpm php7 php-phar php-mysqli php7-json

#installing wordpress
RUN	mkdir -p /var/www && chmod 777 /var/www\
	&& wget http://wordpress.org/latest.tar.gz\
	&& wget https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar\
	&& chmod +x wp-cli.phar\
	&& mv wp-cli.phar /usr/local/bin/wp\
	&& tar -xzvf latest.tar.gz\
	&& mv wordpress /var/www

EXPOSE 9000

# replace the config file by a custom one
RUN  rm -f /var/www/wordpress/wp-include/wp-config.php /etc/php7/php-fpm.d/www.conf
COPY conf/wp-config.php /var/www/wordpress/wp-config.php
COPY conf/www.conf /etc/php7/php-fpm.d/www.conf
# wp plugin install [plugin] --activate

CMD ["/usr/sbin/php-fpm7", "-F"]
