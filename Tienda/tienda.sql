
CREATE TABLE Productos (
ID_PRODUCTO VARCHAR(5) PRIMARY KEY NOT NULL,
PRODUCTO VARCHAR(40) NOT NULL,
PRECIO VARCHAR(6) NOT NULL,
EXISTENCIAS VARCHAR(4) NOT NULL
);

CREATE TABLE Tickets (
ID_TICKET VARCHAR (5) PRIMARY KEY NOT NULL,
FECHA VARCHAR (20) NOT NULL,
HORA_VENTA VARCHAR(5) NOT NULL,
CANTIDAD_PRODUCTO VARCHAR(4) NOT NULL,
PRODUCTO VARCHAR(40) NOT NULL,
TOTAL_PRODUCTO VARCHAR(6) NOT NULL
);

INSERT INTO Productos(ID_PRODUCTO, PRODUCTO, PRECIO, EXISTENCIAS) values("P001", "CR7 Drive", "563", "8" )