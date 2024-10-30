
FROM debian:bullseye

EXPOSE 3306

RUN		apt-get update \
		&& apt-get install -y mariadb-server \
		&& rm -rf /var/lib/apt/lists/* \
		&& apt-get clean

RUN mkdir -p /var/run/mysqld && \
	chown -R mysql:mysql /var/run/mysqld && \
	chown -R mysql:mysql /var/lib/mysql

COPY 	./conf/50-server.cnf /etc/mysql/mariadb.conf.d/
COPY	./tools/script.sh /bin/

RUN     chmod +x /bin/script.sh


CMD		["script.sh", "mysqld_safe"]