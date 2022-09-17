#----------------------------------------------------------------------
# -> Wordpress dockerfile
FROM alpine:3.15
LABEL version="3.15"
LABEL description="Wordpress Container"
#----------------------------------------------------------------------

# update the platform if needed
RUN apk update && apk upgrade\
# installing php
	&& apk add php7-fpm php7 php-phar php-mysqli php7-json\
# installing wordpress
	&& wget http://wordpress.org/latest.tar.gz\
# extracting wordpress
	&& tar -xzvf latest.tar.gz\
# creating folder website
	&& mkdir -p /var/www/tweimer.42.fr/html/\
# moving wordpress contents into its folder
	&& mv wordpress/* /var/www/tweimer.42.fr/html/

# replacing wordpress config file
COPY conf/wp-config.php wp-config.php

# replacing a php config file
COPY conf/www.conf /etc/php7/php-fpm.d/www.conf
COPY conf/wordpress.sh wordpress.sh

EXPOSE 9000

CMD ["sh", "wordpress.sh"]
