# Use the official PHP image
FROM php:8.2-apache

# Copy everything to Apache's web root
COPY . /var/www/html/

# Expose port 10000 (Render requires it)
EXPOSE 10000

# Start PHP built-in server
CMD ["php", "-S", "0.0.0.0:10000", "-t", "/var/www/html"]
