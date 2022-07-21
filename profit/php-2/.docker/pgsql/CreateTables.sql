CREATE TABLE products(
    id SERIAL,
    title VARCHAR(255),
    price INT
);
CREATE TABLE services(
    id SERIAL,
    title VARCHAR(255),
    price INT
);
CREATE TABLE users(
    id SERIAL,
    email VARCHAR(255),
    phone INT
);
-- Insert user
INSERT INTO users(
    email,
    phone
) VALUES('test@test.ru', 111);
INSERT INTO users(
    email,
    phone
) VALUES('test@test.ru', 111);
-- Insert products
INSERT INTO products(
    title,
    price
) VALUES('MacAir', 94999);
INSERT INTO products(
    title,
    price
) VALUES('Iphone', 39999);
-- Insert services
INSERT INTO services(
    title,
    price
) VALUES('Install windows', 500);
INSERT INTO services(
    title,
    price
) VALUES('Install linux', 500);
