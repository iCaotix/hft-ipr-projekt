docker run -d -p 5455:3306 -v `pwd`/setup:/docker-entrypoint-initdb.d/ -v `pwd`/mysql-data:/var/lib/mysql -e MYSQL_ROOT_PASSWORD=Test mariadb
