CREATE TABLE liste(
    type CHAR(1),
    refID VARCHAR(20),
    tonerID INT PRIMARY KEY AUTO_INCREMENT,
    hplaser INT,
    hpink INT,
    nonhplaser INT,
    nonhpink INT,
    others INT,
    samsunglaser INT
);