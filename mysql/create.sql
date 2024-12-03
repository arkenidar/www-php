CREATE DATABASE php_www DEFAULT CHARACTER SET = 'utf8mb4';

USE php_www;

-- php_www.person definition

CREATE TABLE person (
    id bigint unsigned NOT NULL AUTO_INCREMENT,
    nickname varchar(20) NOT NULL,
    password varchar(20) NOT NULL,
    PRIMARY KEY (id),
    UNIQUE KEY person_unique_nickname (nickname)
);

INSERT INTO
    person (nickname, password)
VALUES ('dario', 'bliss'),
    ('root', 'strong-password');