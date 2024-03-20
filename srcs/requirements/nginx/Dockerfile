FROM alpine:3.19

RUN apk update && apk upgrade && apk add --no-cache nginx

COPY ./conf/default.conf /etc/nginx/http.d/default.conf
COPY ./conf/srv.key /etc/nginx/ssl/srv.key
COPY ./conf/srv.crt /etc/nginx/ssl/srv.crt

EXPOSE 443
ENTRYPOINT ["nginx", "-g", "daemon off;"]