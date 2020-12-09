FROM node:12-alpine

ENV TERM=linux

EXPOSE 6666

# RUN sleep 5; ln -sf /dev/stdout /srv/app/storage/logs/ws/stdout.log \
#     && ln -sf /dev/stderr /srv/app/storage/logs/ws/stderr.log

RUN npm i -g nodemon

CMD nodemon ./echo/echo.js --watch ./echo/
