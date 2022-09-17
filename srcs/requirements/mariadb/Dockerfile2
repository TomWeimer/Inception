#----------------------------------------------------------------------
# -> MariaDB dockerfile
FROM alpine:3.15
LABEL description="MariadDB Database"
#----------------------------------------------------------------------

VOLUME /var/lib/mysql

# &&  apk add --no-cache tini\
#	Update the container if needed
RUN apk update && apk upgrade\
#	Install mariaDB and its dependencies
	&& apk add mariadb mariadb-common mariadb-client mariadb-server-utils\
#	Add the needed rights of the docker volume
	&& chmod 755 /var/lib/mysql\
# delete the init file
	&& rm -f /etc/my.cnf.d/mariadb-server.cnf /etc/my.cnf.d/my.cnf

COPY conf/my.cnf /etc/my.cnf.d/my.cnf
COPY conf/start.sh start.sh

EXPOSE 3306

CMD ["sh", "start.sh"]


