
CREATE DATABASE login DEFAULT CHARACTER SET utf8 ;

CREATE TABLE IF NOT EXISTS logins (
  idlogins INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  loginName VARCHAR(45) NOT NULL,
  loginSurname VARCHAR(45) NOT NULL,
  loginUsername VARCHAR(45) NOT NULL,
  loginPassw VARCHAR(45) NOT NULL,
  rName VARCHAR(45) NOT NULL,
  UNIQUE INDEX loginUsername_UNIQUE(loginUsername)
);

CREATE TABLE request (
  idrequest INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  salt INT NOT NULL,
  time_up INT NOT NULL,
  logins_idlogins INT,
  CONSTRAINT fk_logins FOREIGN KEY
  (logins_idlogins) REFERENCES logins(idlogins),
  UNIQUE INDEX salt_UNIQUE(salt)
);

INSERT INTO logins (loginName, loginSurname, loginUsername, loginPassw, rName) VALUES ('Admin', 'Admin','4e7afebcfbae000b22c7c85e5560f89a2a0280b4', 'd0eebf7a2886bca8d6977a01411c1a6ac117f2a5', 'admin');