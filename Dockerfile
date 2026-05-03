FROM wordpress:php8.2-apache

RUN apt-get update && apt-get install -y jpegoptim optipng pngquant && rm -rf /var/lib/apt/lists/*

RUN curl -o /usr/local/bin/wp https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar \
    && chmod +x /usr/local/bin/wp

COPY . /var/www/html/
COPY docker-entrypoint-custom.sh /usr/local/bin/docker-entrypoint-custom.sh
RUN chmod +x /usr/local/bin/docker-entrypoint-custom.sh

RUN find /var/www/html/wp-content/uploads -type f -iname "*.jpg" -o -iname "*.jpeg" | xargs -r jpegoptim --max=75 --strip-all \
    && find /var/www/html/wp-content/uploads -type f -iname "*.png" | xargs -r pngquant --force --quality=65-80 --ext .png --skip-if-larger

RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html/wp-content

ENTRYPOINT ["docker-entrypoint-custom.sh"]
CMD ["apache2-foreground"]
