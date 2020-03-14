FROM mariadb

COPY ./1-setup.sql /docker-entrypoint-initdb.d/
COPY ./2-sample-data.sql /docker-entrypoint-initdb.d/
