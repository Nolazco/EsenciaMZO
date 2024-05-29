create database if not exists esenciamzo;

use esenciamzo;

create table if not exists users(
    id int auto_increment primary key,
    name varchar(20) not null,
    last_name varchar(50) not null,
    nickname varchar(20) default null unique,
    email varchar(100) unique,
    bio varchar(255) default null,
    password varchar(60) not null,
    role enum('1', '2', '3') default '3' not null,
    avatar varchar(128) default null
)engine=innodb;

insert into users(name, last_name, email, bio, password, role) values('Admin', 'Mzo', 'admin@mzo.mx', 'Administrador de Esencia de Manzanillo', '$2y$10$p3nW5zOhP/Dq/eSn4hubEOdXyot7MjawQd8bM2IINRIJFuBmOpsWO', '1');

create table if not exists gastro(
    id int auto_increment primary key,
    name varchar(100) not null,
    author int(1) not null,
    logo varchar(128) default null,
    description text not null,
    body text not null,
    delivery enum('1', '2') default '2' not null,
    phone varchar(15) default null,
    menu varchar(128) default null,
    location varchar(255) not null,
    date varchar(20) not null
)engine=innodb;

create table if not exists turismo(
    id int auto_increment primary key,
    name varchar(100) not null,
    author int(1) not null,
    description text not null,
    body text not null,
    location varchar(255) not null,
    photo varchar (128) default null,
    date varchar(20) not null
)engine=innodb;

 create table if not exists eventos(
    id int auto_increment primary key,
    name varchar(100) not null,
    author int(1) not null,
    description text not null,
    body text not null,
    location varchar(255) not null,
    attach varchar(255) not null,
    category int(1) default 1,
    date varchar(20) not null,
    dateOfEvent varchar(20) not null
)engine=innodb;

create table if not exists blogs(
    id int auto_increment primary key,
    id_author int not null,
    id_post int not null,
    type enum('1', '2', '3') not null,
    title varchar(50) not null,
    body text not null,
    likes int default '0'
)engine=innodb;

create table if not exists comments(
    id int auto_increment primary key,
    id_post int not null,
    id_author int not null,
    body text
)engine=innodb;

create table if not exists tags(
    id int auto_increment primary key,
    tag varchar(20)
)engine=innodb;

create table if not exists tags_in_post(
    id_tag int not null,
    id_post int not null
)engine=innodb;

create table if not exists images(
    id int auto_increment primary key,
    route varchar(128) default null,
    id_post int not null,
    category enum('1', '2', '3') not null default '1'
)engine=innodb;
