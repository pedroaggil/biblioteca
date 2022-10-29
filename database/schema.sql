CREATE DATABASE library;
USE library;

CREATE TABLE tb_user (
    id_user INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    nm_name VARCHAR(100) NOT NULL,
    ds_mail VARCHAR(150) NOT NULL,
    pw_password VARCHAR(16) NOT NULL,
    st_level INT NOT NULL
);

CREATE TABLE tb_book (
    id_book INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    nm_title VARCHAR(100) NOT NULL,
    nm_author VARCHAR(100) NOT NULL,
    ds_publisher VARCHAR(50),
    ds_collection VARCHAR(100),
    nm_subtitle VARCHAR(150),
    ds_synopsis TEXT NOT NULL,
    nm_translator VARCHAR(100),
    dt_launch VARCHAR(20) NOT NULL, -- it was supposed to be DATE, but ignore
    nm_original_title VARCHAR(100),
    dt_translate_date DATE,
    nm_reviewer VARCHAR(100),
    nr_isbn INT,
    ds_genre VARCHAR(100) NOT NULL,
    st_availability INT NOT NULL,
    il_image BLOB NOT NULL
);