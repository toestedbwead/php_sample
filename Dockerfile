# Use official PHP image with Apache
FROM php:8.1-apache

# Copy all project files into the Apache server root
COPY . /var/www/html/

# Enable mod_rewrite if needed
RUN a2enmod rewrite

# Expose port 80
EXPOSE 80
