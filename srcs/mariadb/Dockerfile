FROM debian:buster
RUN apt-get update
RUN apt-get install -y mariadb-server
COPY srcs/mysqlfile .
RUN service mysql start && cat mysqlfile | mariadb -u root
RUN rm mysqlfile
CMD /usr/bin/mysqld_safe