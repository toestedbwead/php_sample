# Use official PHP image with Apache
FROM php:8.1-apache

# Enable Apache rewrite module (optional)
RUN a2enmod rewrite

# Set working directory
WORKDIR /var/www/html

# Copy your PHP code to Apache web root
COPY . /var/www/html/

RUN chown -R www-data:www-data /var/www/html \
 && chmod -R 755 /var/www/html

# Expose the port (required by Render)
EXPOSE 80

# Start Apache (default for this image)
CMD ["apache2-foreground"]
