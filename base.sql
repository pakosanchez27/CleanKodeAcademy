-- Tabla: Users
CREATE TABLE Users (
    idUsers INT PRIMARY KEY,
    username VARCHAR(255),
    nombre VARCHAR(255),
    apellido VARCHAR(255),
    genero VARCHAR(255),
    email VARCHAR(255),
    pass VARCHAR(255),
    fechaNa DATE,
    foto VARCHAR(255),
    acerca TEXT,
    titulo VARCHAR(255),
    idrol INT,
    idsuscripcion INT,
    FOREIGN KEY (idrol) REFERENCES Rol(idRol),
    FOREIGN KEY (idsuscripcion) REFERENCES Suscripcion(idSuscripcion)
);

-- Tabla: Rol
CREATE TABLE Rol (
    idRol INT PRIMARY KEY,
    nomRol VARCHAR(255)
);

-- Tabla: Suscripcion
CREATE TABLE Suscripcion (
    idSuscripcion INT PRIMARY KEY,
    fechaIni DATE,
    fechaFin DATE,
    idtiposuscripcion INT,
    idstatusSuscripcion INT,
    FOREIGN KEY (idtiposuscripcion) REFERENCES TipoSuscripcion(idtiposuscripcion),
    FOREIGN KEY (idstatusSuscripcion) REFERENCES StatusSuscrip(idSatatusSuscrip)
);

-- Tabla: TipoSuscripcion
CREATE TABLE TipoSuscripcion (
    idtiposuscripcion INT PRIMARY KEY,
    nomSuscrip VARCHAR(255),
    precSuscrip INT
);

-- Tabla: StatusSuscrip
CREATE TABLE StatusSuscrip (
    idSatatusSuscrip INT PRIMARY KEY,
    nombStatus VARCHAR(255)
);

-- Tabla: Curso
CREATE TABLE Curso (
    idCurso INT PRIMARY KEY,
    nombreCurso VARCHAR(255),
    descripcionCurso TEXT,
    FotoCurso VARCHAR(255),
    videoIntro VARCHAR(255),
    idCategoria INT,
    FOREIGN KEY (idCategoria) REFERENCES Categoria(idCategoria)
 
);

-- Tabla: Categoria
CREATE TABLE Categoria (
    idCategoria INT PRIMARY KEY,
    nomCategoria VARCHAR(255)
);

-- Tabla: Valoracion
CREATE TABLE Valoracion (
    idValoracion INT PRIMARY KEY,
    caliValoracion INT,
    idUsers INT,
    idCurso INT,
    FOREIGN KEY (idUsers) REFERENCES Users(idUsers),
    FOREIGN KEY (idCurso) REFERENCES Curso(idCurso)
);

-- Tabla: CleankodersCursos
CREATE TABLE CleankodersCursos (
    idCleankoders INT,
    idCurso INT,
    FechaIni DATE, 
    FechaFin DATE,
    PRIMARY KEY (idCleankoders, idCurso),
    FOREIGN KEY (idCleankoders) REFERENCES Users(idUsers),
    FOREIGN KEY (idCurso) REFERENCES Curso(idCurso)
);

-- Tabla: CodeMasterCursos
CREATE TABLE CodeMasterCursos (
    idCodeMaster INT,
    idCurso INT,
    fechaCreacion DATE,
    PRIMARY KEY (idCodeMaster, idCurso),
    FOREIGN KEY (idCodeMaster) REFERENCES Users(idUsers),
    FOREIGN KEY (idCurso) REFERENCES Curso(idCurso)
);

-- Tabla: ComentariosCurso
CREATE TABLE ComentariosCurso (
    idComentario INT PRIMARY KEY,
    idCurso INT,
    idUsuario INT,
    fechaComentario DATE,
    contenido TEXT,
    idComentarioPadre INT,
    FOREIGN KEY (idCurso) REFERENCES Curso(idCurso),
    FOREIGN KEY (idUsuario) REFERENCES Users(idUsers),
    FOREIGN KEY (idComentarioPadre) REFERENCES ComentariosCurso(idComentario)
);

-- Tabla: CursosFavoritos
CREATE TABLE CursosFavoritos (
    idUser INT,
    idCurso INT,
    fechaGuardado DATE,
    PRIMARY KEY (idUser, idCurso),
    FOREIGN KEY (idUser) REFERENCES Users(idUsers),
    FOREIGN KEY (idCurso) REFERENCES Curso(idCurso)
);

-- Tabla: ClasesCurso
CREATE TABLE ClasesCurso (
    idClaseCurso INT PRIMARY KEY,
    nombreClase VARCHAR(255),
    descripClase TEXT,
    VideoClase VARCHAR(255),
    duracionClase INT,
    idCurso INT,
    FOREIGN KEY (idCurso) REFERENCES Curso(idCurso)
);

-- Tabla: Recurso
CREATE TABLE Recurso (
    idrecurso INT PRIMARY KEY,
    nombreRecur VARCHAR(255),
    TipoRecur VARCHAR(255),
    RutaRecur VARCHAR(255),
    idClase INT,
    FOREIGN KEY (idClase) REFERENCES ClasesCurso(idClaseCurso)
);


