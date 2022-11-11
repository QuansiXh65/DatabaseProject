DROP DATABASE IF EXISTS basiccrud;

CREATE DATABASE basiccrud;

USE basiccrud;


DROP TABLE IF EXISTS student;

CREATE TABLE student (

                         id INT NOT NULL AUTO_INCREMENT,

                         voornaam VARCHAR(50),

                         achternaam VARCHAR(50),

                         straatnaam VARCHAR(50),

                         huisnummer INT,

                         woonplaats VARCHAR(50),



                         PRIMARY KEY (id)

);