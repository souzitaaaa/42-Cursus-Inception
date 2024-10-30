FROM debian:bullseye

EXPOSE 9000

RUN apt update && \
    apt install -y \
    ca-certificates \
    php7.4-fpm \
    php7.4-mysql \
    wget \
    tar

COPY /conf/www.conf /etc/php/7.4/fpm/pool.d/.

RUN	wget --no-check-certificate https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar && \
        chmod +x wp-cli.phar && \
        mv wp-cli.phar /usr/local/bin/wp

RUN mkdir -p /run/php/ && \
    mkdir -p /var/run/php && \
    mkdir -p /var/www/inception

RUN chown -R www-data:www-data /var/www/inception/

COPY ./conf/wp-config.php /tmp/
COPY ./tools/script.sh /bin/

RUN chmod +x /bin/script.sh

CMD ["script.sh", "php-fpm7.4", "--nodaemonize"]

