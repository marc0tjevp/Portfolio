FROM mhart/alpine-node:latest

RUN apk add --update nginx nodejs yarn

RUN mkdir -p /tmp/nginx/portfolio
RUN mkdir -p /var/log/nginx
RUN mkdir -p /var/www/html

COPY nginx_config/nginx.conf /etc/nginx/nginx.conf
COPY nginx_config/default.conf /etc/nginx/conf.d/default.conf

WORKDIR /tmp/nginx/portfolio
COPY . .
RUN yarn install

RUN yarn build
RUN cp -r dist/* /var/www/html
RUN chown nginx:nginx /var/www/html

CMD ["nginx", "-g", "daemon off;"]
