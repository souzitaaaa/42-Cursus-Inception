#!/bin/bash

CERTIFY_DIR="/etc/ssl/private"

mkdir -p $CERTIFY_DIR

openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout $CERTIFY_DIR/$DOMAIN.key -out $CERTIFY_DIR/$DOMAIN.crt \
    -subj "/C=$COUNTRY/ST=$STATE/L=$LOCALITY/O=$ORGANIZATION/OU=$UNIT/CN=$DOMAIN"

sed -i "s/\$DOMAIN/$DOMAIN/g" /etc/nginx/sites-available/default

nginx -g 'daemon off;'