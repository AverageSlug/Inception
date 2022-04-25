FROM debian:buster
RUN apt-get update
RUN apt-get install -y mariadb-server
COPY 50-server.cnf /etc/mysql/mariadb.conf.d/
COPY mysqlfile.sql /
RUN service mysql start && mysql < mysqlfile.sql
RUN rm mysqlfile.sql
CMD /usr/bin/mysqld_safe