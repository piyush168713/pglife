CREATE TABLE deposits (
    id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    user_id int(11) NOT NULL,
    Name varchar(255),
    amount int(11) NOT NULL,
    trans_id varchar(100),
    trans_time int,
    status int
); 