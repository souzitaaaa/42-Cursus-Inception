FROM debian:bullseye

EXPOSE 443

RUN apt update && \ 
    apt install -y \
    nginx \
    openssl

COPY /tools/script.sh /tmp/script.sh
COPY /conf/nginx.conf /etc/nginx/sites-available/default

RUN chmod +x /tmp/script.sh

CMD ["/tmp/script.sh"]

