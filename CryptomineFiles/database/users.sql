CREATE TABLE users (
    id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    email varchar(100) NOT NULL,
    password varchar(100) NOT NULL,
    full_name varchar(100) NOT NULL,
    phone varchar(20) NOT NULL,
    gender enum('male', 'female') NOT NULL,
    college_name varchar(100) NOT NULL,
    accountNumber varchar(20),
    ifscCode varchar(50),
    balance int(20)
); 