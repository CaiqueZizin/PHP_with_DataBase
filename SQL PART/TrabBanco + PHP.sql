--  TRABALHO BANCO + PHP



-- Criando Tabelas --

create table usuario 
(
IdUsuario int primary key auto_increment, 
Nome text,
CPF varchar(14),
Dt_Nasc date,
Login text,
Senha text,
Tipo text

);


create table materia 
(
IdMateria int primary key auto_increment,
IdProfessor int,
Materia text,
periodo text

);

create table nota
(
IdNota int primary key auto_increment,
IdAluno int,
IdMAteria int,
Nota int

);



-----------------------








insert into materia values
(
null,
1,
"Portugues",
"1"

);

insert into materia values
(
null,
1,
"Geografia",
"1"

);

insert into materia values
(
null,
2,
"Ingles",
"2"

);







insert into usuario values
(
null,
"kiko",
12345,
"1991-10-11",
"kiko",
"kiko",
"A"

);

insert into usuario values
(
null,
"madruga",
45584,
"1989-11-11",
"madruga",
"madruga",
"A"

);

insert into usuario values
(
null,
"chaves",
17252,
"1990-11-12",
"chaves",
"chaves",
"A"
);

insert into usuario values
(
null,
"Girafales",
87954,
"1990-01-02",
"girafales",
"girafales",
"P"
);


insert into usuario values
(
null,
"Barriga",
78945,
"1990-12-12",
"barriga",
"barriga",
"P"
);

insert into usuario values
(
null,
"jaiminho",
79621,
"1992-11-12",
"jaiminho",
"jaiminho",
"P"
);




insert into nota values 
(
null,
1,
1,
100
);

insert into nota values 
(
null,
2,
1,
89
);

insert into nota values 
(
null,
3,
1,
90
);


------------------------------
-- Inserindo chaves Estrangeiras 

alter table nota add foreign key (idAluno) references usuario(idusuario);
alter table nota add foreign key (idMateria) references materia(idmateria);

alter table materia add foreign key (idProfessor) references usuario(idusuario);











