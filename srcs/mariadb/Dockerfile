FROM debian:buster
RUN apt-get update
RUN apt-get install -y mariadb-server
COPY 50-server.cnf /etc/mysql/mariadb.conf.d/
COPY mysqlfile .
RUN service mysql start && mysql < mysqlfile
RUN rm mysqlfile
CMD /usr/bin/mysqld_safe