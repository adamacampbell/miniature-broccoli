FROM nginx:alpine

COPY vhost.conf /etc/nginx/conf.d/default.conf
RUN mkdir -p /var/www/cinema-api/public
RUN touch /var/www/cinema-api/public/index.php

RUN ln -sf /dev/stdout /var/log/nginx/access.log
RUN ln -sf /dev/stderr /var/log/nginx/error.log