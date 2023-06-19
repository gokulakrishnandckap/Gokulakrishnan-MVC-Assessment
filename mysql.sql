
--creating a database
Create database Products;


---creating a table for products
create table users(
    id int not null AUTO_INCREMENT,
    name varchar(255),
    image varchar(255),
    sku varchar(255) UNIQUE,
    price int,
    brand varchar(255),
    manufacture_date date,
    available_stock int NUll,
    
    PRIMARY KEY(id)
    );