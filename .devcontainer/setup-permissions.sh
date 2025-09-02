#!/bin/bash

# Laravel storage permissions setup
if [ -d "/var/www/html/storage" ]; then
    chown -R sail:www-data /var/www/html/storage
    chmod -R 775 /var/www/html/storage
fi

if [ -d "/var/www/html/bootstrap/cache" ]; then
    chown -R sail:www-data /var/www/html/bootstrap/cache
    chmod -R 775 /var/www/html/bootstrap/cache
fi

echo "Storage permissions set successfully"
