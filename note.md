
C:\Users\User\Documents\Kuliah\Semester 5\Server Administration\UAS>docker ps -a
CONTAINER ID   IMAGE          COMMAND                  CREATED          STATUS          PORTS                  NAMES
f0cb61ecaf59   trucorp-db     "docker-entrypoint.s…"   10 minutes ago   Up 10 minutes   3306/tcp, 33060/tcp    trucorp-db
e109031a28b3   f68b44e9efb9   "docker-php-entrypoi…"   10 minutes ago   Up 10 minutes   0.0.0.0:8127->80/tcp   trucorp-web

C:\Users\User\Documents\Kuliah\Semester 5\Server Administration\UAS>docker stop f0c
f0c

C:\Users\User\Documents\Kuliah\Semester 5\Server Administration\UAS>focker rm f0c
'focker' is not recognized as an internal or external command,
operable program or batch file.

C:\Users\User\Documents\Kuliah\Semester 5\Server Administration\UAS>docker rm f0c
f0c

C:\Users\User\Documents\Kuliah\Semester 5\Server Administration\UAS>docker stop e10
e10

C:\Users\User\Documents\Kuliah\Semester 5\Server Administration\UAS>docker rm e10
e10

C:\Users\User\Documents\Kuliah\Semester 5\Server Administration\UAS>docker image ls
REPOSITORY        TAG          IMAGE ID       CREATED              SIZE
trucorp-web-2.0   latest       906483f0c585   About a minute ago   432MB
<none>            <none>       c04f1b027e65   3 minutes ago        432MB
<none>            <none>       f68b44e9efb9   16 minutes ago       432MB
<none>            <none>       26ee85b02892   20 minutes ago       432MB
<none>            <none>       5c317d4ae184   42 minutes ago       432MB
<none>            <none>       263f9ff685d9   43 minutes ago       432MB
<none>            <none>       77af1d29d992   56 minutes ago       432MB
<none>            <none>       fb6db426454c   25 hours ago         432MB
trucorp-db        latest       9a159f9ec2a1   25 hours ago         545MB
<none>            <none>       a12e1a7e084f   25 hours ago         545MB
<none>            <none>       de6d3e023c42   29 hours ago         432MB
<none>            <none>       7dead75c2587   31 hours ago         545MB
netdb             latest       b7950072f97a   3 months ago         414MB
docker_web        latest       a087dea883e4   3 months ago         414MB
trucorp-web       latest       37d7f56d77d7   3 months ago         432MB
mysql             latest       db2b37ec6181   3 months ago         545MB
php               7.4-apache   aaf1fe8553ca   4 months ago         414MB
httpd             latest       3dd970e6b110   4 months ago         138MB

C:\Users\User\Documents\Kuliah\Semester 5\Server Administration\UAS>docker image rm c04
Deleted: sha256:c04f1b027e65e00033701ce6a4cc882b26cb8b90f3231b5998ee102508c1f99a

C:\Users\User\Documents\Kuliah\Semester 5\Server Administration\UAS>docker image rm f68
Deleted: sha256:f68b44e9efb912659b0c8832d60ae7a7169ea1ad479cdb1e7b6a358c0c2ecc71

C:\Users\User\Documents\Kuliah\Semester 5\Server Administration\UAS>docker image rm 26ee
Deleted: sha256:26ee85b02892effb0a31ced3261dd492e5273368f3cb8f324c1ffaf90d9bfcc2

C:\Users\User\Documents\Kuliah\Semester 5\Server Administration\UAS>docker image rm 5c31
Deleted: sha256:5c317d4ae18436152edbad025154be1ecd2b403adbd6388cef0dc78bd712a4e6

C:\Users\User\Documents\Kuliah\Semester 5\Server Administration\UAS>docker image rm 263
Deleted: sha256:263f9ff685d99259f198fda071b33bdb0b80d6adf137c78670c6d8d34a876280

C:\Users\User\Documents\Kuliah\Semester 5\Server Administration\UAS>docker image rm 77a
Deleted: sha256:77af1d29d9924f06d7e2c4da049f5a2b341f729d2ac7086c19e5d2fbd537ea02

C:\Users\User\Documents\Kuliah\Semester 5\Server Administration\UAS>docker image ls
REPOSITORY        TAG          IMAGE ID       CREATED         SIZE
trucorp-web-2.0   latest       906483f0c585   2 minutes ago   432MB
<none>            <none>       fb6db426454c   25 hours ago    432MB
trucorp-db        latest       9a159f9ec2a1   25 hours ago    545MB
<none>            <none>       a12e1a7e084f   25 hours ago    545MB
<none>            <none>       de6d3e023c42   29 hours ago    432MB
<none>            <none>       7dead75c2587   31 hours ago    545MB
netdb             latest       b7950072f97a   3 months ago    414MB
docker_web        latest       a087dea883e4   3 months ago    414MB
trucorp-web       latest       37d7f56d77d7   3 months ago    432MB
mysql             latest       db2b37ec6181   3 months ago    545MB
php               7.4-apache   aaf1fe8553ca   4 months ago    414MB
httpd             latest       3dd970e6b110   4 months ago    138MB

C:\Users\User\Documents\Kuliah\Semester 5\Server Administration\UAS>docker image rm 906
Untagged: trucorp-web-2.0:latest
Deleted: sha256:906483f0c58561f5223c4d93a712244c757b62d457e36c2d3a570c3255338509

C:\Users\User\Documents\Kuliah\Semester 5\Server Administration\UAS>docker network ls
NETWORK ID     NAME                    DRIVER    SCOPE
239c27ad69ca   ServerAdmin             bridge    local
c55bab735e74   UASServAdmin            bridge    local
0fb0b165cb15   bridge                  bridge    local
e8ce1209e1c3   docker_UASServAdmin     bridge    local
371ed8932be8   docker_default          bridge    local
cd3224dbe0a8   docker_uasserveradmin   bridge    local
9db1647e4aa1   host                    host      local
e29a0055447e   none                    null      local
f51b8d971a14   trucorp-2.0             bridge    local
e123abd12d16   trucorp-2.0-a           bridge    local

C:\Users\User\Documents\Kuliah\Semester 5\Server Administration\UAS>docker network rm e123
e123

C:\Users\User\Documents\Kuliah\Semester 5\Server Administration\UAS>docker ps -a
CONTAINER ID   IMAGE          COMMAND                  CREATED         STATUS         PORTS                  NAMES
7b91fa6cbf0e   trucorp-db     "docker-entrypoint.s…"   4 minutes ago   Up 4 minutes   3306/tcp, 33060/tcp    trucorp-db
f136a3bfc63c   906483f0c585   "docker-php-entrypoi…"   4 minutes ago   Up 4 minutes   0.0.0.0:7466->80/tcp   trucorp-web

C:\Users\User\Documents\Kuliah\Semester 5\Server Administration\UAS>docker stop 7b9
7b9

C:\Users\User\Documents\Kuliah\Semester 5\Server Administration\UAS>docker rm 7b9
7b9

C:\Users\User\Documents\Kuliah\Semester 5\Server Administration\UAS>docker stop f136
f136

C:\Users\User\Documents\Kuliah\Semester 5\Server Administration\UAS>docker rm f136
f136

C:\Users\User\Documents\Kuliah\Semester 5\Server Administration\UAS>docker image ls
REPOSITORY        TAG          IMAGE ID       CREATED         SIZE
trucorp-web-2.0   latest       74a92895a21a   4 minutes ago   432MB
<none>            <none>       906483f0c585   8 minutes ago   432MB
<none>            <none>       fb6db426454c   25 hours ago    432MB
<none>            <none>       a12e1a7e084f   26 hours ago    545MB
trucorp-db        latest       9a159f9ec2a1   26 hours ago    545MB
<none>            <none>       de6d3e023c42   29 hours ago    432MB
<none>            <none>       7dead75c2587   31 hours ago    545MB
netdb             latest       b7950072f97a   3 months ago    414MB
docker_web        latest       a087dea883e4   3 months ago    414MB
trucorp-web       latest       37d7f56d77d7   3 months ago    432MB
mysql             latest       db2b37ec6181   3 months ago    545MB
php               7.4-apache   aaf1fe8553ca   4 months ago    414MB
httpd             latest       3dd970e6b110   4 months ago    138MB

C:\Users\User\Documents\Kuliah\Semester 5\Server Administration\UAS>docker rm 906
Error: No such container: 906

C:\Users\User\Documents\Kuliah\Semester 5\Server Administration\UAS>docker image rm 906
Deleted: sha256:906483f0c58561f5223c4d93a712244c757b62d457e36c2d3a570c3255338509

C:\Users\User\Documents\Kuliah\Semester 5\Server Administration\UAS>docker image rm 74a
Untagged: trucorp-web-2.0:latest
Deleted: sha256:74a92895a21aa98534bfcceda0c764001fa2a38ab9d29aed763fd253c975021e

C:\Users\User\Documents\Kuliah\Semester 5\Server Administration\UAS>docker network ls
NETWORK ID     NAME                    DRIVER    SCOPE
239c27ad69ca   ServerAdmin             bridge    local
c55bab735e74   UASServAdmin            bridge    local
0fb0b165cb15   bridge                  bridge    local
e8ce1209e1c3   docker_UASServAdmin     bridge    local
371ed8932be8   docker_default          bridge    local
cd3224dbe0a8   docker_uasserveradmin   bridge    local
9db1647e4aa1   host                    host      local
e29a0055447e   none                    null      local
f51b8d971a14   trucorp-2.0             bridge    local
7620c68a6c53   trucorp-2.0-a           bridge    local

C:\Users\User\Documents\Kuliah\Semester 5\Server Administration\UAS>docker network rm 7620
7620

C:\Users\User\Documents\Kuliah\Semester 5\Server Administration\UAS>docker network create --driver bridge trucorp-demo
191d9f6b4cbdfd1a6de643bb0e67a272f3d0d9e88421d101a685b11121f97987

C:\Users\User\Documents\Kuliah\Semester 5\Server Administration\UAS>docker image ls
REPOSITORY    TAG          IMAGE ID       CREATED        SIZE
<none>        <none>       fb6db426454c   25 hours ago   432MB
trucorp-db    latest       9a159f9ec2a1   26 hours ago   545MB
<none>        <none>       a12e1a7e084f   26 hours ago   545MB
<none>        <none>       de6d3e023c42   29 hours ago   432MB
<none>        <none>       7dead75c2587   31 hours ago   545MB
netdb         latest       b7950072f97a   3 months ago   414MB
docker_web    latest       a087dea883e4   3 months ago   414MB
trucorp-web   latest       37d7f56d77d7   3 months ago   432MB
mysql         latest       db2b37ec6181   3 months ago   545MB
php           7.4-apache   aaf1fe8553ca   4 months ago   414MB
httpd         latest       3dd970e6b110   4 months ago   138MB

C:\Users\User\Documents\Kuliah\Semester 5\Server Administration\UAS>docker image rm fb6
Deleted: sha256:fb6db426454ccdd69b7cd8f44dad2758f30eee121f158e35caeea79116e8f093

C:\Users\User\Documents\Kuliah\Semester 5\Server Administration\UAS>docker image rm a12
Deleted: sha256:a12e1a7e084f47d60da67c2fac31db5d49e12112848aee6896e213ef0e51d876

C:\Users\User\Documents\Kuliah\Semester 5\Server Administration\UAS>docker image rm de6
Deleted: sha256:de6d3e023c427ef976eb40c0de64cd17c2f388271ad0af250429b66a13d5d0bc

C:\Users\User\Documents\Kuliah\Semester 5\Server Administration\UAS>docker image rm 7dead
Deleted: sha256:7dead75c2587d3ec0ee68b367c70474944542e94760269c2a9624eb24c7b9511

C:\Users\User\Documents\Kuliah\Semester 5\Server Administration\UAS>docker image rm 9a15
Untagged: trucorp-db:latest
Deleted: sha256:9a159f9ec2a1028d30a76de2948992796bd1edbdb8aff81b1536851d8f594744

C:\Users\User\Documents\Kuliah\Semester 5\Server Administration\UAS>docker build -t trucorp-demo-web ./main/
[+] Building 0.2s (11/11) FINISHED
 => [internal] load build definition from Dockerfile                                                        0.0s
 => => transferring dockerfile: 32B                                                                         0.0s
 => [internal] load .dockerignore                                                                           0.0s
 => => transferring context: 2B                                                                             0.0s
 => [internal] load metadata for docker.io/library/php:7.4-apache                                           0.0s
 => [1/6] FROM docker.io/library/php:7.4-apache                                                             0.0s
 => [internal] load build context                                                                           0.0s
 => => transferring context: 969B                                                                           0.0s
 => CACHED [2/6] RUN apt-get update                                                                         0.0s
 => CACHED [3/6] RUN docker-php-ext-install mysqli                                                          0.0s
 => CACHED [4/6] COPY /code /var/www/html                                                                   0.0s
 => CACHED [5/6] RUN chown www-data /var/www/html                                                           0.0s
 => CACHED [6/6] RUN chmod o-wx /var/www/html                                                               0.0s
 => exporting to image                                                                                      0.1s
 => => exporting layers                                                                                     0.0s
 => => writing image sha256:f68b44e9efb912659b0c8832d60ae7a7169ea1ad479cdb1e7b6a358c0c2ecc71                0.0s
 => => naming to docker.io/library/trucorp-demo-web                                                         0.0s

C:\Users\User\Documents\Kuliah\Semester 5\Server Administration\UAS>docker build -t docker-demo-db ./db/
[+] Building 0.1s (7/7) FINISHED
 => [internal] load build definition from Dockerfile                                                        0.0s
 => => transferring dockerfile: 579B                                                                        0.0s
 => [internal] load .dockerignore                                                                           0.0s
 => => transferring context: 2B                                                                             0.0s
 => [internal] load metadata for docker.io/library/mysql:latest                                             0.0s
 => [internal] load build context                                                                           0.0s
 => => transferring context: 865B                                                                           0.0s
 => [1/2] FROM docker.io/library/mysql:latest                                                               0.0s
 => CACHED [2/2] COPY ./trucorp-db.sql ./docker-entrypoint-initdb.d/                                        0.0s
 => exporting to image                                                                                      0.0s
 => => exporting layers                                                                                     0.0s
 => => writing image sha256:9a159f9ec2a1028d30a76de2948992796bd1edbdb8aff81b1536851d8f594744                0.0s
 => => naming to docker.io/library/docker-demo-db                                                           0.0s

C:\Users\User\Documents\Kuliah\Semester 5\Server Administration\UAS>docker run -dit --name=trucorp-web -p 7466:80 trucorp-demo-web
953375b6c422030adc1034bd7fca9b0fb5f85abdc1013137d9b526d5b393b3ad

C:\Users\User\Documents\Kuliah\Semester 5\Server Administration\UAS>docker run -dit --name=trucorp-db trucorp-demo-db
Unable to find image 'trucorp-demo-db:latest' locally

C:\Users\User\Documents\Kuliah\Semester 5\Server Administration\UAS>dock^X
'dock↑' is not recognized as an internal or external command,
operable program or batch file.

C:\Users\User\Documents\Kuliah\Semester 5\Server Administration\UAS>
C:\Users\User\Documents\Kuliah\Semester 5\Server Administration\UAS>^X
C:\Users\User\Documents\Kuliah\Semester 5\Server Administration\UAS>docker run -dit --name=trucorp-db docker-demo-db
bc6f405661805e686b1de0c5e6c84981b27c27d3c9782c04a0c8b2b69e14e4ff

C:\Users\User\Documents\Kuliah\Semester 5\Server Administration\UAS>docker network connect trucorp-demo trucorp-demo-web
Error response from daemon: No such container: trucorp-demo-web

C:\Users\User\Documents\Kuliah\Semester 5\Server Administration\UAS>docker network connect trucorp-demo trucorp-web

C:\Users\User\Documents\Kuliah\Semester 5\Server Administration\UAS>docker network connect trucorp-demo trucorp-db

C:\Users\User\Documents\Kuliah\Semester 5\Server Administration\UAS>docker ps -a
CONTAINER ID   IMAGE              COMMAND                  CREATED              STATUS              PORTS                  NAMES
bc6f40566180   docker-demo-db     "docker-entrypoint.s…"   54 seconds ago       Up 52 seconds       3306/tcp, 33060/tcp    trucorp-db
953375b6c422   trucorp-demo-web   "docker-php-entrypoi…"   About a minute ago   Up About a minute   0.0.0.0:7466->80/tcp   trucorp-web

C:\Users\User\Documents\Kuliah\Semester 5\Server Administration\UAS>docker inspect trucorp-demo
[
    {
        "Name": "trucorp-demo",
        "Id": "191d9f6b4cbdfd1a6de643bb0e67a272f3d0d9e88421d101a685b11121f97987",
        "Created": "2021-02-17T15:09:47.9529291Z",
        "Scope": "local",
        "Driver": "bridge",
        "EnableIPv6": false,
        "IPAM": {
            "Driver": "default",
            "Options": {},
            "Config": [
                {
                    "Subnet": "172.27.0.0/16",
                    "Gateway": "172.27.0.1"
                }
            ]
        },
        "Internal": false,
        "Attachable": false,
        "Ingress": false,
        "ConfigFrom": {
            "Network": ""
        },
        "ConfigOnly": false,
        "Containers": {
            "953375b6c422030adc1034bd7fca9b0fb5f85abdc1013137d9b526d5b393b3ad": {
                "Name": "trucorp-web",
                "EndpointID": "136ee24dfef5f25d1364f834cf007dc6bdf21670661254a14f3af8af624e90fd",
                "MacAddress": "02:42:ac:1b:00:02",
                "IPv4Address": "172.27.0.2/16",
                "IPv6Address": ""
            },
            "bc6f405661805e686b1de0c5e6c84981b27c27d3c9782c04a0c8b2b69e14e4ff": {
                "Name": "trucorp-db",
                "EndpointID": "69bff70dd0e20664018d18a68dec9a5cc5fae870fc51cdee878b8cd23fe88de8",
                "MacAddress": "02:42:ac:1b:00:03",
                "IPv4Address": "172.27.0.3/16",
                "IPv6Address": ""
            }
        },
        "Options": {},
        "Labels": {}
    }
]

[+] Building 0.9s (11/11) FINISHED
 => [internal] load build definition from Dockerfile                                                                            0.0s
 => => transferring dockerfile: 32B                                                                                             0.0s
 => [internal] load .dockerignore                                                                                               0.0s
 => => transferring context: 2B                                                                                                 0.0s
 => [internal] load metadata for docker.io/library/php:7.4-apache                                                               0.0s
 => [1/6] FROM docker.io/library/php:7.4-apache                                                                                 0.0s
 => [internal] load build context                                                                                               0.0s
 => => transferring context: 969B                                                                                               0.0s
 => CACHED [2/6] RUN apt-get update                                                                                             0.0s
 => CACHED [3/6] RUN docker-php-ext-install mysqli                                                                              0.0s
 => [4/6] COPY /code /var/www/html                                                                                              0.0s
 => [5/6] RUN chown www-data /var/www/html                                                                                      0.3s
 => [6/6] RUN chmod o-wx /var/www/html                                                                                          0.4s
 => exporting to image                                                                                                          0.1s
 => => exporting layers                                                                                                         0.1s
 => => writing image sha256:887aa94c7ee0b26dc7d2c6aff0a29507cff1458ed5ef314227a26c376a41835b                                    0.0s
 => => naming to docker.io/library/trucorp-demo-web                                                                             0.0s

C:\Users\User\Documents\Kuliah\Semester 5\Server Administration\UAS>docker run -dit --name=trucorp-web -p 7466:80 trucorp-demo-web
docker: Error response from daemon: Conflict. The container name "/trucorp-web" is already in use by container "953375b6c422030adc1034bd7fca9b0fb5f85abdc1013137d9b526d5b393b3ad". You have to remove (or rename) that container to be able to reuse that name.
See 'docker run --help'.

C:\Users\User\Documents\Kuliah\Semester 5\Server Administration\UAS>docker ps -a
CONTAINER ID   IMAGE            COMMAND                  CREATED         STATUS         PORTS                  NAMES
bc6f40566180   docker-demo-db   "docker-entrypoint.s…"   2 minutes ago   Up 2 minutes   3306/tcp, 33060/tcp    trucorp-db
953375b6c422   f68b44e9efb9     "docker-php-entrypoi…"   3 minutes ago   Up 3 minutes   0.0.0.0:7466->80/tcp   trucorp-web

C:\Users\User\Documents\Kuliah\Semester 5\Server Administration\UAS>docker stop 95
95

C:\Users\User\Documents\Kuliah\Semester 5\Server Administration\UAS>docker rm 95
95

C:\Users\User\Documents\Kuliah\Semester 5\Server Administration\UAS>docker run -dit --name=trucorp-web -p 7466:80 trucorp-demo-web
74972d73bbed4aa564551ad5ac8341a1a529b61a370d4d662ddd6056d5d1dc47

C:\Users\User\Documents\Kuliah\Semester 5\Server Administration\UAS>docker network connect trucorp-demo trucorp-web

C:\Users\User\Documents\Kuliah\Semester 5\Server Administration\UAS>docker inspect trucorp-demo
[
    {
        "Name": "trucorp-demo",
        "Id": "191d9f6b4cbdfd1a6de643bb0e67a272f3d0d9e88421d101a685b11121f97987",
        "Created": "2021-02-17T15:09:47.9529291Z",
        "Scope": "local",
        "Driver": "bridge",
        "EnableIPv6": false,
        "IPAM": {
            "Driver": "default",
            "Options": {},
            "Config": [
                {
                    "Subnet": "172.27.0.0/16",
                    "Gateway": "172.27.0.1"
                }
            ]
        },
        "Internal": false,
        "Attachable": false,
        "Ingress": false,
        "ConfigFrom": {
            "Network": ""
        },
        "ConfigOnly": false,
        "Containers": {
            "74972d73bbed4aa564551ad5ac8341a1a529b61a370d4d662ddd6056d5d1dc47": {
                "Name": "trucorp-web",
                "EndpointID": "1c3ae1a2bb9b443744032e0710178c63f39998b82ba05e8defe979502380ddcb",
                "MacAddress": "02:42:ac:1b:00:02",
                "IPv4Address": "172.27.0.2/16",
                "IPv6Address": ""
            },
            "bc6f405661805e686b1de0c5e6c84981b27c27d3c9782c04a0c8b2b69e14e4ff": {
                "Name": "trucorp-db",
                "EndpointID": "69bff70dd0e20664018d18a68dec9a5cc5fae870fc51cdee878b8cd23fe88de8",
                "MacAddress": "02:42:ac:1b:00:03",
                "IPv4Address": "172.27.0.3/16",
                "IPv6Address": ""
            }
        },
        "Options": {},
        "Labels": {}
    }
]

C:\Users\User\Documents\Kuliah\Semester 5\Server Administration\UAS>docker ps -a
CONTAINER ID   IMAGE              COMMAND                  CREATED          STATUS          PORTS                  NAMES
74972d73bbed   trucorp-demo-web   "docker-php-entrypoi…"   19 seconds ago   Up 17 seconds   0.0.0.0:7466->80/tcp   trucorp-web
bc6f40566180   docker-demo-db     "docker-entrypoint.s…"   3 minutes ago    Up 3 minutes    3306/tcp, 33060/tcp    trucorp-db

C:\Users\User\Documents\Kuliah\Semester 5\Server Administration\UAS>docker exec -it trucorp-db bash
root@bc6f40566180:/# exit
exit

C:\Users\User\Documents\Kuliah\Semester 5\Server Administration\UAS>docker build -t docker-demo-db ./db/
[+] Building 0.1s (7/7) FINISHED
 => [internal] load build definition from Dockerfile                                                                            0.0s
 => => transferring dockerfile: 32B                                                                                             0.0s
 => [internal] load .dockerignore                                                                                               0.0s
 => => transferring context: 2B                                                                                                 0.0s
 => [internal] load metadata for docker.io/library/mysql:latest                                                                 0.0s
 => [internal] load build context                                                                                               0.0s
 => => transferring context: 36B                                                                                                0.0s
 => [1/2] FROM docker.io/library/mysql:latest                                                                                   0.0s
 => CACHED [2/2] COPY ./trucorp-db.sql ./docker-entrypoint-initdb.d/                                                            0.0s
 => exporting to image                                                                                                          0.0s
 => => exporting layers                                                                                                         0.0s
 => => writing image sha256:9a159f9ec2a1028d30a76de2948992796bd1edbdb8aff81b1536851d8f594744                                    0.0s
 => => naming to docker.io/library/docker-demo-db                                                                               0.0s

C:\Users\User\Documents\Kuliah\Semester 5\Server Administration\UAS>docker run -dit --name=trucorp-db trucorp-demo-db
Unable to find image 'trucorp-demo-db:latest' locally

C:\Users\User\Documents\Kuliah\Semester 5\Server Administration\UAS>docker run -dit --name=trucorp-db docker-demo-db
docker: Error response from daemon: Conflict. The container name "/trucorp-db" is already in use by container "bc6f405661805e686b1de0c5e6c84981b27c27d3c9782c04a0c8b2b69e14e4ff". You have to remove (or rename) that container to be able to reuse that name.
See 'docker run --help'.

C:\Users\User\Documents\Kuliah\Semester 5\Server Administration\UAS>docker ps -a
CONTAINER ID   IMAGE              COMMAND                  CREATED         STATUS         PORTS                  NAMES
74972d73bbed   trucorp-demo-web   "docker-php-entrypoi…"   5 minutes ago   Up 5 minutes   0.0.0.0:7466->80/tcp   trucorp-web
bc6f40566180   docker-demo-db     "docker-entrypoint.s…"   8 minutes ago   Up 8 minutes   3306/tcp, 33060/tcp    trucorp-db

C:\Users\User\Documents\Kuliah\Semester 5\Server Administration\UAS>docker stop bc
bc

C:\Users\User\Documents\Kuliah\Semester 5\Server Administration\UAS>docker rm bc
bc

C:\Users\User\Documents\Kuliah\Semester 5\Server Administration\UAS>docker run -dit --name=trucorp-db docker-demo-db
df6d831d8c01cab59b03788e9e3b6930e125cdf5cec89c4288418e4ad7c2583f

C:\Users\User\Documents\Kuliah\Semester 5\Server Administration\UAS>docker network connect trucorp-demo trucorp-db

C:\Users\User\Documents\Kuliah\Semester 5\Server Administration\UAS>docker inspect trucorp-demo
[
    {
        "Name": "trucorp-demo",
        "Id": "191d9f6b4cbdfd1a6de643bb0e67a272f3d0d9e88421d101a685b11121f97987",
        "Created": "2021-02-17T15:09:47.9529291Z",
        "Scope": "local",
        "Driver": "bridge",
        "EnableIPv6": false,
        "IPAM": {
            "Driver": "default",
            "Options": {},
            "Config": [
                {
                    "Subnet": "172.27.0.0/16",
                    "Gateway": "172.27.0.1"
                }
            ]
        },
        "Internal": false,
        "Attachable": false,
        "Ingress": false,
        "ConfigFrom": {
            "Network": ""
        },
        "ConfigOnly": false,
        "Containers": {
            "74972d73bbed4aa564551ad5ac8341a1a529b61a370d4d662ddd6056d5d1dc47": {
                "Name": "trucorp-web",
                "EndpointID": "1c3ae1a2bb9b443744032e0710178c63f39998b82ba05e8defe979502380ddcb",
                "MacAddress": "02:42:ac:1b:00:02",
                "IPv4Address": "172.27.0.2/16",
                "IPv6Address": ""
            },
            "df6d831d8c01cab59b03788e9e3b6930e125cdf5cec89c4288418e4ad7c2583f": {
                "Name": "trucorp-db",
                "EndpointID": "7b55a64c82fbfffb882bea2309472f44e98e31130dff7cc9da4d0a1d3913c31b",
                "MacAddress": "02:42:ac:1b:00:03",
                "IPv4Address": "172.27.0.3/16",
                "IPv6Address": ""
            }
        },
        "Options": {},
        "Labels": {}
    }
]

C:\Users\User\Documents\Kuliah\Semester 5\Server Administration\UAS>docker ps -a
CONTAINER ID   IMAGE              COMMAND                  CREATED          STATUS          PORTS                  NAMES
df6d831d8c01   docker-demo-db     "docker-entrypoint.s…"   25 minutes ago   Up 25 minutes   3306/tcp, 33060/tcp    trucorp-db
74972d73bbed   trucorp-demo-web   "docker-php-entrypoi…"   31 minutes ago   Up 31 minutes   0.0.0.0:7466->80/tcp   trucorp-web

C:\Users\User\Documents\Kuliah\Semester 5\Server Administration\UAS>docker rm trucorp-db
Error response from daemon: You cannot remove a running container df6d831d8c01cab59b03788e9e3b6930e125cdf5cec89c4288418e4ad7c2583f. Stop the container before attempting removal or force remove

C:\Users\User\Documents\Kuliah\Semester 5\Server Administration\UAS>docker stop trucorp-db
trucorp-db

C:\Users\User\Documents\Kuliah\Semester 5\Server Administration\UAS>docker rm trucorp-db
trucorp-db

C:\Users\User\Documents\Kuliah\Semester 5\Server Administration\UAS>docker image ls
REPOSITORY         TAG          IMAGE ID       CREATED             SIZE
trucorp-demo-web   latest       887aa94c7ee0   32 minutes ago      432MB
<none>             <none>       f68b44e9efb9   About an hour ago   432MB
docker-demo-db     latest       9a159f9ec2a1   26 hours ago        545MB
netdb              latest       b7950072f97a   3 months ago        414MB
docker_web         latest       a087dea883e4   3 months ago        414MB
trucorp-web        latest       37d7f56d77d7   3 months ago        432MB
mysql              latest       db2b37ec6181   3 months ago        545MB
php                7.4-apache   aaf1fe8553ca   4 months ago        414MB
httpd              latest       3dd970e6b110   4 months ago        138MB

C:\Users\User\Documents\Kuliah\Semester 5\Server Administration\UAS>docker image rm f68
Deleted: sha256:f68b44e9efb912659b0c8832d60ae7a7169ea1ad479cdb1e7b6a358c0c2ecc71

C:\Users\User\Documents\Kuliah\Semester 5\Server Administration\UAS>docker image rm 9a
Untagged: docker-demo-db:latest
Deleted: sha256:9a159f9ec2a1028d30a76de2948992796bd1edbdb8aff81b1536851d8f594744

C:\Users\User\Documents\Kuliah\Semester 5\Server Administration\UAS>docker build -t trucorp-demo-db
"docker build" requires exactly 1 argument.
See 'docker build --help'.

Usage:  docker build [OPTIONS] PATH | URL | -

Build an image from a Dockerfile

C:\Users\User\Documents\Kuliah\Semester 5\Server Administration\UAS>docker ps -a
CONTAINER ID   IMAGE              COMMAND                  CREATED          STATUS          PORTS                  NAMES
74972d73bbed   trucorp-demo-web   "docker-php-entrypoi…"   32 minutes ago   Up 32 minutes   0.0.0.0:7466->80/tcp   trucorp-web

C:\Users\User\Documents\Kuliah\Semester 5\Server Administration\UAS>docker stop 749
749

C:\Users\User\Documents\Kuliah\Semester 5\Server Administration\UAS>dcoekr rm 749
'dcoekr' is not recognized as an internal or external command,
operable program or batch file.

C:\Users\User\Documents\Kuliah\Semester 5\Server Administration\UAS>docker rm 749
749

C:\Users\User\Documents\Kuliah\Semester 5\Server Administration\UAS>docker image ls
REPOSITORY         TAG          IMAGE ID       CREATED          SIZE
trucorp-demo-web   latest       887aa94c7ee0   33 minutes ago   432MB
netdb              latest       b7950072f97a   3 months ago     414MB
docker_web         latest       a087dea883e4   3 months ago     414MB
trucorp-web        latest       37d7f56d77d7   3 months ago     432MB
mysql              latest       db2b37ec6181   3 months ago     545MB
php                7.4-apache   aaf1fe8553ca   4 months ago     414MB
httpd              latest       3dd970e6b110   4 months ago     138MB

C:\Users\User\Documents\Kuliah\Semester 5\Server Administration\UAS>docker image rm 887
Untagged: trucorp-demo-web:latest
Deleted: sha256:887aa94c7ee0b26dc7d2c6aff0a29507cff1458ed5ef314227a26c376a41835b

C:\Users\User\Documents\Kuliah\Semester 5\Server Administration\UAS>docker build -t trucorp-demo-web ./main/
[+] Building 0.9s (11/11) FINISHED
 => [internal] load build definition from Dockerfile                                                                            0.0s
 => => transferring dockerfile: 32B                                                                                             0.0s
 => [internal] load .dockerignore                                                                                               0.0s
 => => transferring context: 2B                                                                                                 0.0s
 => [internal] load metadata for docker.io/library/php:7.4-apache                                                               0.0s
 => [1/6] FROM docker.io/library/php:7.4-apache                                                                                 0.0s
 => [internal] load build context                                                                                               0.0s
 => => transferring context: 1.01kB                                                                                             0.0s
 => CACHED [2/6] RUN apt-get update                                                                                             0.0s
 => CACHED [3/6] RUN docker-php-ext-install mysqli                                                                              0.0s
 => [4/6] COPY /code /var/www/html                                                                                              0.0s
 => [5/6] RUN chown www-data /var/www/html                                                                                      0.3s
 => [6/6] RUN chmod o-wx /var/www/html                                                                                          0.4s
 => exporting to image                                                                                                          0.1s
 => => exporting layers                                                                                                         0.1s
 => => writing image sha256:a4c116dc780e7f9da33f8b504d3c3bde9406e69b31237dc495ad3a95c5b3ba89                                    0.0s
 => => naming to docker.io/library/trucorp-demo-web                                                                             0.0s

C:\Users\User\Documents\Kuliah\Semester 5\Server Administration\UAS>docker build -t trucorp-demo-db ./db/
[+] Building 0.1s (7/7) FINISHED
 => [internal] load build definition from Dockerfile                                                                            0.0s
 => => transferring dockerfile: 32B                                                                                             0.0s
 => [internal] load .dockerignore                                                                                               0.0s
 => => transferring context: 2B                                                                                                 0.0s
 => [internal] load metadata for docker.io/library/mysql:latest                                                                 0.0s
 => [internal] load build context                                                                                               0.0s
 => => transferring context: 36B                                                                                                0.0s
 => [1/2] FROM docker.io/library/mysql:latest                                                                                   0.0s
 => CACHED [2/2] COPY ./trucorp-db.sql ./docker-entrypoint-initdb.d/                                                            0.0s
 => exporting to image                                                                                                          0.0s
 => => exporting layers                                                                                                         0.0s
 => => writing image sha256:9a159f9ec2a1028d30a76de2948992796bd1edbdb8aff81b1536851d8f594744                                    0.0s
 => => naming to docker.io/library/trucorp-demo-db                                                                              0.0s

C:\Users\User\Documents\Kuliah\Semester 5\Server Administration\UAS>docker network ls
NETWORK ID     NAME                    DRIVER    SCOPE
239c27ad69ca   ServerAdmin             bridge    local
c55bab735e74   UASServAdmin            bridge    local
0fb0b165cb15   bridge                  bridge    local
e8ce1209e1c3   docker_UASServAdmin     bridge    local
371ed8932be8   docker_default          bridge    local
cd3224dbe0a8   docker_uasserveradmin   bridge    local
9db1647e4aa1   host                    host      local
e29a0055447e   none                    null      local
f51b8d971a14   trucorp-2.0             bridge    local
191d9f6b4cbd   trucorp-demo            bridge    local

C:\Users\User\Documents\Kuliah\Semester 5\Server Administration\UAS>docker network rm 191
191

C:\Users\User\Documents\Kuliah\Semester 5\Server Administration\UAS>docker network create --driver bridge trucorp-demo
3a29fadaa995347cb59b65312c1e8116e8208537c4e68974be0509d246867082

C:\Users\User\Documents\Kuliah\Semester 5\Server Administration\UAS>docker ps
CONTAINER ID   IMAGE     COMMAND   CREATED   STATUS    PORTS     NAMES

C:\Users\User\Documents\Kuliah\Semester 5\Server Administration\UAS>docker run -dit --name=trucorp-web -p 7466:80 trucorp-demo-web
b12e6b5dd7732b589bcaafdf059898ee957f2f10969f1b8606d95d74961f6a2d

C:\Users\User\Documents\Kuliah\Semester 5\Server Administration\UAS>docker stop b12
b12

C:\Users\User\Documents\Kuliah\Semester 5\Server Administration\UAS>docker rm b12
b12

C:\Users\User\Documents\Kuliah\Semester 5\Server Administration\UAS>docker run -dit --name=trucorp-db trucorp-demo-db
6a6e46c4d8c3030e6cf5c47701aa24cea63dcd23e7387c32b33e8c626679c6b0

C:\Users\User\Documents\Kuliah\Semester 5\Server Administration\UAS>docker network connect trucorp-demo trucorp-demo-db
Error response from daemon: No such container: trucorp-demo-db

C:\Users\User\Documents\Kuliah\Semester 5\Server Administration\UAS>docker network connect trucorp-demo trucorp-db

C:\Users\User\Documents\Kuliah\Semester 5\Server Administration\UAS>docker inspect trucorp-demo
[
    {
        "Name": "trucorp-demo",
        "Id": "3a29fadaa995347cb59b65312c1e8116e8208537c4e68974be0509d246867082",
        "Created": "2021-02-17T15:49:43.2224482Z",
        "Scope": "local",
        "Driver": "bridge",
        "EnableIPv6": false,
        "IPAM": {
            "Driver": "default",
            "Options": {},
            "Config": [
                {
                    "Subnet": "172.28.0.0/16",
                    "Gateway": "172.28.0.1"
                }
            ]
        },
        "Internal": false,
        "Attachable": false,
        "Ingress": false,
        "ConfigFrom": {
            "Network": ""
        },
        "ConfigOnly": false,
        "Containers": {
            "6a6e46c4d8c3030e6cf5c47701aa24cea63dcd23e7387c32b33e8c626679c6b0": {
                "Name": "trucorp-db",
                "EndpointID": "b7bc43dc8e16aa9a5d9cce9c733eefdb7c03f77749ad72f0046a95e0656dcdf9",
                "MacAddress": "02:42:ac:1c:00:02",
                "IPv4Address": "172.28.0.2/16",
                "IPv6Address": ""
            }
        },
        "Options": {},
        "Labels": {}
    }
]

C:\Users\User\Documents\Kuliah\Semester 5\Server Administration\UAS>docker image ls
REPOSITORY         TAG          IMAGE ID       CREATED         SIZE
trucorp-demo-web   latest       a4c116dc780e   2 minutes ago   432MB
trucorp-demo-db    latest       9a159f9ec2a1   26 hours ago    545MB
netdb              latest       b7950072f97a   3 months ago    414MB
docker_web         latest       a087dea883e4   3 months ago    414MB
trucorp-web        latest       37d7f56d77d7   3 months ago    432MB
mysql              latest       db2b37ec6181   3 months ago    545MB
php                7.4-apache   aaf1fe8553ca   4 months ago    414MB
httpd              latest       3dd970e6b110   4 months ago    138MB

C:\Users\User\Documents\Kuliah\Semester 5\Server Administration\UAS>docker image rm a4c
Untagged: trucorp-demo-web:latest
Deleted: sha256:a4c116dc780e7f9da33f8b504d3c3bde9406e69b31237dc495ad3a95c5b3ba89

C:\Users\User\Documents\Kuliah\Semester 5\Server Administration\UAS>docker build -t docker-demo-web ./main
[+] Building 0.9s (11/11) FINISHED
 => [internal] load build definition from Dockerfile                                                                            0.0s
 => => transferring dockerfile: 580B                                                                                            0.0s
 => [internal] load .dockerignore                                                                                               0.0s
 => => transferring context: 2B                                                                                                 0.0s
 => [internal] load metadata for docker.io/library/php:7.4-apache                                                               0.0s
 => [1/6] FROM docker.io/library/php:7.4-apache                                                                                 0.0s
 => [internal] load build context                                                                                               0.0s
 => => transferring context: 1.01kB                                                                                             0.0s
 => CACHED [2/6] RUN apt-get update                                                                                             0.0s
 => CACHED [3/6] RUN docker-php-ext-install mysqli                                                                              0.0s
 => [4/6] COPY /code /var/www/html                                                                                              0.0s
 => [5/6] RUN chown www-data /var/www/html                                                                                      0.3s
 => [6/6] RUN chmod o-wx /var/www/html                                                                                          0.4s
 => exporting to image                                                                                                          0.1s
 => => exporting layers                                                                                                         0.1s
 => => writing image sha256:d78c7f77ae13a6ff3025cc9c27ee4d1695696db87014ec3406e554d66c51bb6a                                    0.0s
 => => naming to docker.io/library/docker-demo-web                                                                              0.0s

C:\Users\User\Documents\Kuliah\Semester 5\Server Administration\UAS>docker run -dit --name=trucorp-web -p 7466:80 docker-demo-web
0e1b6af6d8db2912bf9ecc70a213d2dfca9b547596fa6154da8bb20dc419cba2

C:\Users\User\Documents\Kuliah\Semester 5\Server Administration\UAS>docker network connect trucorp-demo trucorp-web

C:\Users\User\Documents\Kuliah\Semester 5\Server Administration\UAS>docker inspect trucorp-demo
[
    {
        "Name": "trucorp-demo",
        "Id": "3a29fadaa995347cb59b65312c1e8116e8208537c4e68974be0509d246867082",
        "Created": "2021-02-17T15:49:43.2224482Z",
        "Scope": "local",
        "Driver": "bridge",
        "EnableIPv6": false,
        "IPAM": {
            "Driver": "default",
            "Options": {},
            "Config": [
                {
                    "Subnet": "172.28.0.0/16",
                    "Gateway": "172.28.0.1"
                }
            ]
        },
        "Internal": false,
        "Attachable": false,
        "Ingress": false,
        "ConfigFrom": {
            "Network": ""
        },
        "ConfigOnly": false,
        "Containers": {
            "0e1b6af6d8db2912bf9ecc70a213d2dfca9b547596fa6154da8bb20dc419cba2": {
                "Name": "trucorp-web",
                "EndpointID": "4e3f1180fdb4a14e4360ce5983389b1438fdcf885509efd4ca8779a45f8464d5",
                "MacAddress": "02:42:ac:1c:00:03",
                "IPv4Address": "172.28.0.3/16",
                "IPv6Address": ""
            },
            "6a6e46c4d8c3030e6cf5c47701aa24cea63dcd23e7387c32b33e8c626679c6b0": {
                "Name": "trucorp-db",
                "EndpointID": "b7bc43dc8e16aa9a5d9cce9c733eefdb7c03f77749ad72f0046a95e0656dcdf9",
                "MacAddress": "02:42:ac:1c:00:02",
                "IPv4Address": "172.28.0.2/16",
                "IPv6Address": ""
            }
        },
        "Options": {},
        "Labels": {}
    }
]

C:\Users\User\Documents\Kuliah\Semester 5\Server Administration\UAS>