CREATE TABLE properties (
    id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    city_id int(11) NOT NULL,
    name varchar(100) NOT NULL,
    address varchar(255) NOT NULL,
    description longtext NOT NULL,
    gender enum('male', 'female', 'unisex') NOT NULL,
    rent int(11) NOT NULL,
    rating_clean float(2,1) NOT NULL,
    rating_food float(2,1) NOT NULL,
    rating_safety float(2,1) NOT NULL
);