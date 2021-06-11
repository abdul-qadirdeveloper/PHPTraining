DROP DATABASE nednftp1;
CREATE DATABASE nednftp1;
CREATE TABLE class
(
    id int,
    name varchar(50),
    year varchar(50),
    CONSTRAINT PK_Class_id PRIMARY KEY (id)
);


SELECT * 
FROM class;

SELECT id,name, year
From class;

SELECT DISTINCT name
FROM class;

SELECT *
FROM class
where name = 'Programming PHP'
