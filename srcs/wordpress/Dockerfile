FROM debian:buster
RUN apt-get update
RUN apt-get insatll -y php-fpm php-mysql mariadb-client
ADD https://wordpress.org/latest.tar.gz /var/www/
RUN cd /var/www
RUN tar xvf https://wordpress.org/latest.tar.gz
RUN rm https://wordpress.org/latest.tar.gz
COPY wp-config.php /var/www/wordpress
CMD ./usr/sbin/php-fpm7.3 -F