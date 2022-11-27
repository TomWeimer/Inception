#----------------------------------------------------------------------
# -> MariaDB dockerfile
FROM alpine:3.15
LABEL description="MariadDB Database"
#----------------------------------------------------------------------

# &&  apk add --no-cache tini\
VOLUME /var/lib/mysql
#	update the container if needed
RUN apk update && apk upgrade\
#	install mariaDB and its dependencies
	&& apk add mariadb mariadb-common mariadb-client mariadb-server-utils\
#	add the needed rights of the docker volume
	&& chmod 755 /var/lib/mysql\
# delete the mariadb config files
	&& rm -f /etc/my.cnf.d/mariadb-server.cnf /etc/my.cnf.d/my.cnf

# replace mariadb config files
COPY conf/my.cnf /etc/my.cnf.d/my.cnf
# getting script to create the database
COPY tool/create_db.sh create_db.sh

EXPOSE 3306

CMD ["sh", "create_db.sh"]

