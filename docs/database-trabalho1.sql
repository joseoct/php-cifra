CREATE TABLE users (
	user_id  NOT NULL AUTO_INCREMENT,
	nome varchar NOT NULL,
	senha varchar NOT NULL,
  	PRIMARY KEY (user_id)
);


CREATE TABLE cifras (
  cifra_id AUTO_INCREMENT NOT NULL,
	nome_musica varchar NOT NULL,
	nome_autor varchar NOT null,
	estilo varchar NOT null,
	conteudo varchar NOT null,
	primary key (cifra_id)
);

CREATE TABLE users_cifras (
  users_cifras_id AUTO_INCREMENT NOT NULL,
  user_id int,
	FOREIGN KEY (user_id) REFERENCES users(user_id),
	cifra_id int,
	FOREIGN KEY (cifra_id) REFERENCES cifras(cifra_id),
	primary key (users_cifras_id)
);
