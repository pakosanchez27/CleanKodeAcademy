-- Tabla: Users
CREATE TABLE USERS (
    IDUSERS INT PRIMARY KEY,
    USERNAME VARCHAR(255),
    NOMBRE VARCHAR(255),
    APELLIDO VARCHAR(255),
    GENERO VARCHAR(255),
    EMAIL VARCHAR(255),
    PASS VARCHAR(255),
    FECHANA DATE,
    FOTO VARCHAR(255),
    ACERCA TEXT,
    TITULO VARCHAR(255),
    IDROL INT,
    IDSUSCRIPCION INT,
    FOREIGN KEY (IDROL) REFERENCES ROL(IDROL),
    FOREIGN KEY (IDSUSCRIPCION) REFERENCES SUSCRIPCION(IDSUSCRIPCION)
);

-- Tabla: Rol
CREATE TABLE ROL (
    IDROL INT PRIMARY KEY,
    NOMROL VARCHAR(255)
);

-- Tabla: Suscripcion
CREATE TABLE SUSCRIPCION (
    IDSUSCRIPCION INT PRIMARY KEY,
    FECHAINI DATE,
    FECHAFIN DATE,
    IDTIPOSUSCRIPCION INT,
    IDSTATUSSUSCRIPCION INT,
    FOREIGN KEY (IDTIPOSUSCRIPCION) REFERENCES TIPOSUSCRIPCION(IDTIPOSUSCRIPCION),
    FOREIGN KEY (IDSTATUSSUSCRIPCION) REFERENCES STATUSSUSCRIP(IDSATATUSSUSCRIP)
);

-- Tabla: TipoSuscripcion
CREATE TABLE TIPOSUSCRIPCION (
    IDTIPOSUSCRIPCION INT PRIMARY KEY,
    NOMSUSCRIP VARCHAR(255),
    PRECSUSCRIP INT
);

-- Tabla: StatusSuscrip
CREATE TABLE STATUSSUSCRIP (
    IDSATATUSSUSCRIP INT PRIMARY KEY,
    NOMBSTATUS VARCHAR(255)
);

-- Tabla: Curso
CREATE TABLE CURSO (
    IDCURSO INT PRIMARY KEY,
    NOMBRECURSO VARCHAR(255),
    DESCRIPCIONCURSO TEXT,
    FOTOCURSO VARCHAR(255),
    VIDEOINTRO VARCHAR(255),
    IDCATEGORIA INT,
    FOREIGN KEY (IDCATEGORIA) REFERENCES CATEGORIA(IDCATEGORIA)

);

CREATE TABLE capitulos (
    idCapitulo int AUTO_INCREMENT PRIMARY KEY,
    nombreCapitulo VARCHAR(255),
    idCurso int unsigned,
    FOREIGN KEY (idCurso) REFERENCES cursos(idCurso)
);

CREATE TABLE clases (
    idClase int AUTO_INCREMENT PRIMARY KEY,
    nombreClase VARCHAR(255),
    duracionClase DECIMAL(8, 2),
    descripcionClase TEXT,
    videoClase VARCHAR(255),
    recursoClase VARCHAR(255),
    idCapitulo int ,
    FOREIGN KEY (idCapitulo) REFERENCES capitulos(idCapitulo)
);

CREATE TABLE ESTADOCURSO (
    idEstado INT PRIMARY KEY,
    estado VARCHAR(255)
);

-- Tabla: Categoria
CREATE TABLE CATEGORIA (
    IDCATEGORIA INT PRIMARY KEY,
    NOMCATEGORIA VARCHAR(255)
);

-- Tabla: Valoracion
CREATE TABLE VALORACION (
    IDVALORACION INT PRIMARY KEY,
    CALIVALORACION INT,
    IDUSERS INT,
    IDCURSO INT,
    FOREIGN KEY (IDUSERS) REFERENCES USERS(IDUSERS),
    FOREIGN KEY (IDCURSO) REFERENCES CURSO(IDCURSO)
);

-- Tabla: CleankodersCursos
CREATE TABLE CLEANKODERSCURSOS (
    IDCLEANKODERS INT,
    IDCURSO INT,
    FECHAINI DATE,
    FECHAFIN DATE,
    PRIMARY KEY (IDCLEANKODERS, IDCURSO),
    FOREIGN KEY (IDCLEANKODERS) REFERENCES USERS(IDUSERS),
    FOREIGN KEY (IDCURSO) REFERENCES CURSO(IDCURSO)
);

-- Tabla: CodeMasterCursos
CREATE TABLE CODEMASTERCURSOS (
    IDCODEMASTER INT,
    IDCURSO INT,
    FECHACREACION DATE,
    PRIMARY KEY (IDCODEMASTER, IDCURSO),
    FOREIGN KEY (IDCODEMASTER) REFERENCES USERS(IDUSERS),
    FOREIGN KEY (IDCURSO) REFERENCES CURSO(IDCURSO)
);

-- Tabla: ComentariosCurso
CREATE TABLE COMENTARIOSCURSO (
    IDCOMENTARIO INT PRIMARY KEY,
    IDCURSO INT,
    IDUSUARIO INT,
    FECHACOMENTARIO DATE,
    CONTENIDO TEXT,
    IDCOMENTARIOPADRE INT,
    FOREIGN KEY (IDCURSO) REFERENCES CURSO(IDCURSO),
    FOREIGN KEY (IDUSUARIO) REFERENCES USERS(IDUSERS),
    FOREIGN KEY (IDCOMENTARIOPADRE) REFERENCES COMENTARIOSCURSO(IDCOMENTARIO)
);

-- Tabla: CursosFavoritos
CREATE TABLE CURSOSFAVORITOS (
    IDUSER INT,
    IDCURSO INT,
    FECHAGUARDADO DATE,
    PRIMARY KEY (IDUSER, IDCURSO),
    FOREIGN KEY (IDUSER) REFERENCES USERS(IDUSERS),
    FOREIGN KEY (IDCURSO) REFERENCES CURSO(IDCURSO)
);

-- Tabla: ClasesCurso
CREATE TABLE CLASESCURSO (
    IDCLASECURSO INT PRIMARY KEY,
    NOMBRECLASE VARCHAR(255),
    DESCRIPCLASE TEXT,
    VIDEOCLASE VARCHAR(255),
    DURACIONCLASE INT,
    IDCURSO INT,
    FOREIGN KEY (IDCURSO) REFERENCES CURSO(IDCURSO)
);

-- Tabla: Recurso
CREATE TABLE RECURSO (
    IDRECURSO INT PRIMARY KEY,
    NOMBRERECUR VARCHAR(255),
    TIPORECUR VARCHAR(255),
    RUTARECUR VARCHAR(255),
    IDCLASE INT,
    FOREIGN KEY (IDCLASE) REFERENCES CLASESCURSO(IDCLASECURSO)
);