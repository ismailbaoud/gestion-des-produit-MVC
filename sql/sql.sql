create database produit;

use produit;

create table produit(id int auto_increment primary key,
nom varchar(25) not null,
prix int not null,
description varchar(150) not null
);
