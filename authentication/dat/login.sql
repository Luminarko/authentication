
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
  logins_idlogins INT,
  CONSTRAINT fk_logins FOREIGN KEY
  (logins_idlogins) REFERENCES logins(idlogins),
  UNIQUE INDEX salt_UNIQUE(salt)
);

INSERT INTO logins (loginName, loginSurname, loginUsername, loginPassw, rName) VALUES ('Albert', 'Hersch','d033e22ae348aeb5660fc2140aec35850c4da997', '7b2e9f54cdff413fcde01f330af6896c3cd7e6cd', 'admin');