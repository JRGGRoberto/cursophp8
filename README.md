# Curso PHP8

## Para o curso crei um ambiente Docker, contendo 3 imagens:
* nginx
* php8.1
* mysql:5.7

## Arquivos de configuração Docker
* docker-compose.yml
* site.conf

## Iniciar o Docker
```docker-compose up -d```

## Listar containers em execução  
```docker ps```
Deverá retornar isto para a configuração atual
```
CONTAINER ID   IMAGE          COMMAND                  CREATED       STATUS          PORTS                               NAMES
172968ef1dc8   nginx:latest   "/docker-entrypoint.…"   6 hours ago   Up 11 minutes   0.0.0.0:80->80/tcp                  nginx
218dd7c15556   php:8.1-fpm    "docker-php-entrypoi…"   6 hours ago   Up 11 minutes   9000/tcp                            php-fpm
ed0109d778cf   mysql:5.7      "docker-entrypoint.s…"   6 hours ago   Up 40 minutes   0.0.0.0:3306->3306/tcp, 33060/tcp   mysql
```

## Para acessar o bash de alguma delas: Ex.: php-fpm
```docker exec -it php-fpm bash```

Feito isto, se necessário instalar algo, como por exemplo o Vim, depois do comando anterior:
```
apt-get update
apt-get install vim
```
