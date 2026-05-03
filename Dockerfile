FROM wordpress:php8.2-apache

RUN curl -o /usr/local/bin/wp https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar \
    && chmod +x /usr/local/bin/wp

COPY . /var/www/html/
COPY docker-entrypoint-custom.sh /usr/local/bin/docker-entrypoint-custom.sh
RUN chmod +x /usr/local/bin/docker-entrypoint-custom.sh

RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html/wp-content

ENTRYPOINT ["docker-entrypoint-custom.sh"]
CMD ["apache2-foreground"]
