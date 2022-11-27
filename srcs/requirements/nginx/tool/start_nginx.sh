#!/bin/sh
# Create a self-signed certificate
openssl req -newkey rsa:4096 -x509 -sha256 -days 365 -nodes\
		-out $CERT\
		-keyout $KEY\
		-subj "/C=CH/ST=Vaud/L=Lausanne/O=wordpress/CN=$DOMAIN_NAME";
# Put the content of the env variables in the config files
sed  's|CERT|'"$CERT"'|g' -i /etc/nginx/http.d/my_nginx.conf;
sed  's|KEY|'"$KEY"'|g' -i /etc/nginx/http.d/my_nginx.conf;
sed  's|WEBSITE_FOLDER|'"$WEBSITE_FOLDER"'|g' -i /etc/nginx/http.d/my_nginx.conf;
sed  's|SERVER_NAME|'"$SERVER_NAME"'|g' -i  /etc/nginx/http.d/my_nginx.conf;

nginx -g 'daemon off;';
