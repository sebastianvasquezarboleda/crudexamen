CREATE DATABASE crudexamen;
Use crudexamen;

CREATE TABLE TIPONOVEDAD(
IdTipoNovedad int(2) AUTO_INCREMENT PRIMARY KEY,
Nombre varchar(15) not null
);

CREATE TABLE AMBIENTE(
IdAmbiente int(2) AUTO_INCREMENT PRIMARY KEY,
Descripcion varchar(255) not null,
NumeroComputadores int(2) not null
);

CREATE TABLE NOVEDAD(
	IdReporte int AUTO_INCREMENT PRIMARY KEY,
    IdAmbiente int(2) not null,
    IdTipoNovedad int(2) not null,
    Descripcion text not null,
    FechaRegistro datetime not null,
    FOREIGN KEY (IdAmbiente) REFERENCES AMBIENTE (IdAmbiente),
    FOREIGN KEY (IdTipoNovedad) REFERENCES TIPONOVEDAD (IdTipoNovedad)
);
INSERT INTO TIPONOVEDAD(Nombre) VALUES('DISPONIBLE');
INSERT INTO AMBIENTE(Descripcion,NumeroComputadores) VALUES('AMBIENTE 803','25');
INSERT INTO NOVEDAD(IdAmbiente,IdTipoNovedad,Descripcion,FechaRegistro)
VALUES (1,1,'Éste ambiente está listo pasa su uso','2022-05-20 08:30:50');