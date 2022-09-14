#----------------------------------------------------------------------
# -> NGINX dockerfile
FROM alpine:3.15
LABEL version="3.15"
LABEL description="NGINX Container"
#----------------------------------------------------------------------

# update the platform if needed
RUN apk update && apk upgrade\
	&& apk add nginx openssl

# replace the config file by a custom one
COPY conf/my_nginx.conf /etc/nginx/http.d/my_nginx.conf

EXPOSE 443

RUN openssl req -newkey rsa:4096 -x509 -sha256 -days 365 -nodes \
		-out /etc/ssl/nginx.pem \
		-keyout /etc/ssl/nginx.key \
		-subj "/C=CH/ST=Vaud/L=Lausanne/O=wordpress/CN=$DOMAIN_NAME";

CMD ["nginx", "-g", "daemon off;"]