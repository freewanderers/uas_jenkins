# menggunakan docker image php versi 7.4-apache
FROM php:7.4-apache

# melakukan apt-get update pada docker server
RUN apt-get update
# menginstall extension agar dapat menggunakan sqli
RUN docker-php-ext-install mysqli

# menyalin file yang ada pada /code ke /var/www/html
COPY /code /var/www/html

# memberikan hak owner /var/www/html ke www-data
RUN chown www-data /var/www/html
# menghapus ijin write dan execute oleh other pada   /var/www/html
RUN chmod o-wx /var/www/html
# listen pada port 80 saat dijalankan
EXPOSE 80