#!/bin/bash
set -e

# Run original wordpress entrypoint
source /usr/local/bin/docker-entrypoint.sh

# Wait for DB
sleep 5

# Search replace old URL with new
if [ -n "$WP_HOME" ]; then
    wp search-replace 'https://localhost/wordpress' "$WP_HOME" --allow-root --path=/var/www/html
    wp search-replace 'http://localhost/wordpress' "$WP_HOME" --allow-root --path=/var/www/html
fi

exec "$@"
