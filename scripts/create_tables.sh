#!/bin/bash
set -e

mysql -uroot -prootpass -e "use demo;
CREATE TABLE reviews (id INT AUTO_INCREMENT NOT NULL, comment VARCHAR(255) NOT NULL, author VARCHAR(30) NOT NULL, location VARCHAR(20) NOT NULL, PRIMARY KEY(id));
CREATE TABLE demo (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(50) NOT NULL, email VARCHAR(50) NOT NULL, city VARCHAR(20) NOT NULL, PRIMARY KEY(id));"