CREATE TABLE usuarios (
  id INT PRIMARY KEY AUTO_INCREMENT,
  login VARCHAR(50) NOT NULL,
  senha VARCHAR(50) NOT NULL
);
INSERT INTO usuarios (login, senha)
VALUES ('birazn', '1234');

