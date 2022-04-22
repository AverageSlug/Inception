FROM debian:buster
RUN apt-get update
RUN apt-get install -y php7.3 php-fpm php-mysqli mariadb-client
COPY www.conf /etc/php/7.3/fpm/pool.d/
ADD https://wordpress.org/latest.tar.gz /var/www/
RUN cd /var/www && tar xvf latest.tar.gz
RUN rm -f /var/www/latest.tar.gz
RUN rm -f /var/www/wordpress/wp-config-sample.php
COPY wp-config.php var/www/wordpress/
RUN mkdir /run/php
CMD /usr/sbin/php-fpm7.3 -F