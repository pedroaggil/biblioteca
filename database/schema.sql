CREATE DATABASE library;
USE library;

-- Two types of user:
    -- Common: can access the book catalog and browse your products
    -- Administrator: you can access all the project's features, such as registering a new book, updating your information, adding new administrators, etc.

CREATE TABLE tb_user (
    id_user INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    nm_name VARCHAR(100) NOT NULL,
    ds_mail VARCHAR(150) NOT NULL,
    pw_password VARCHAR(16) NOT NULL
);

-- Table responsible for storing books in the system

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
    dt_translate_date VARCHAR(20),
    nm_reviewer VARCHAR(100),
    nr_isbn VARCHAR(13),
    ds_genre VARCHAR(100) NOT NULL,
    st_availability VARCHAR(3) NOT NULL,
    il_image BLOB
);

INSERT INTO tb_user VALUES
    (null, 'Pedro Gil', 'pedroaggil@gmail.com', 'senhasegura', 1);

INSERT INTO tb_book VALUES 
    (null, 'O Nome do Vento', 'Patrick Rothfuss', 'Arqueiro', 'A Crônica do Matador do Rei', 'Primeiro Dia', 'Texto', 'Vera Ribeiro', '2007', 'The Name of the Wind', '2009', 'Anna Grillo et al', '9788599296493', 'Romance', 'Sim', null);