#----------------------------------------------------------------------
# -> NGINX dockerfile
FROM alpine:3.15
LABEL version="3.15"
LABEL description="NGINX Container"
#----------------------------------------------------------------------

# update and install nginx, openssl
RUN apk update\
 	&& apk upgrade\
	&& apk add nginx openssl

# replace nginx config file
COPY conf/my_nginx.conf		/etc/nginx/http.d/my_nginx.conf
COPY tool/start_nginx.sh	start_nginx.sh

EXPOSE 443

CMD ["sh", "start_nginx.sh"]
