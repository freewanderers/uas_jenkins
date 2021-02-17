[x] docker image ls
[x] docker ps -a
[x] docker build -t trucorp-web-2.0 .
[x] docker run -dit --name=trucorp-2.0 -p 8000:80 trucorp-web-2.0
[x] docker network ls

[x] docker network create --driver bridge trucorp-2.0
[x] docker build -t trucorp-db ./db
[x] docker run -dit --name trucorp-db trucorp-db
[x] docker network connect trucorp-2.0 trucorp-db
[x] docker inspect trucorp-2.0
[x] docker inspect trucorp-db