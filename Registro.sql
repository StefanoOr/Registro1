DROP DATABASE IF EXISTS Registro;
create database Registro ;

use Registro

CREATE TABLE Studenti (ID int NOT NULL AUTO_INCREMENT,Cognome varchar (30), Nome varchar(30),Primary Key (ID) );

INSERT INTO Studenti (ID,Cognome,Nome) VALUES   (NULL,'Antonelli','Nicola'),(NULL,'Bellanova','Alessandro'),(NULL,'Cabras','Manuel'),
                                                (NULL,'Canetto','Fabio'),   (NULL,'Cantarelli','Roberto'),  (NULL,'Casti','Simone'),
					        (NULL,'Concas','Emanuele'), (NULL,'Corda','Federico'),      (NULL,'Curreli','Stefano'),
					        (NULL,'Fruttu','Luca'),     (NULL,'Lai','Roberto'),         (NULL,'Lilliu','Giacomo'),
					        (NULL,'Marongiu','Mattia'), (NULL,'Murano','Luca'),         (NULL,'Orru','Stefano'),
						(NULL,'Monni','Gabriele');
												   
												   
