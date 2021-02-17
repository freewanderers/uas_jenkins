# menggunakan docker image mysql dengan versi latest
FROM mysql:latest

# men-set root password dengan value Iw0nDer15Th1sTru3?
ENV MYSQL_ROOT_PASSWORD Iw0nDer15Th1sTru3?
# memberikan nama database trucorp_db
ENV MYSQL_DATABASE trucorp_db
# men-set nama user menjadi user_trucorp
ENV MYSQL_USER user_trucorp
# men-set password user dengan value ItH1nlcIt5Tru3!
ENV MYSQL_PASSWORD ItH1nlcIt5Tru3!

# menyalin file trucorp-db.sql ke docker-entrypoint-initdb.d/
COPY ./trucorp-db.sql ./docker-entrypoint-initdb.d/

EXPOSE 3306
