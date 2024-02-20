CREATE TABLE new_usuarios (
    'id' int NOT NULL ,
    'nombre' VARCHAR(50) NOT NULL,
    'primer_apellido' VARCHAR(50) NOT NULL,
    'segundo_apellido' VARCHAR(50) NOT NULL,
    'curp' VARCHAR(18) NOT NULL,
    'domicilio' TEXT NOT NULL,
    'padecimiento_medico' VARCHAR(100) NOT NULL,
    'telefono' VARCHAR(15) NOT NULL,
    'telefono_pariente' VARCHAR(15) NOT NULL,
    'email' VARCHAR(100) NOT NULL,
    'actividad' VARCHAR(100) NOT NULL
);

INSERT INTO 'new_usuarios' ('nombre', 'primer_apellido', 'segundo_apellido', 'curp', 'domicilio', 'padecimiento_medico', 'telefono', 'telefono_pariente', 'email', 'actividad')
VALUES
('Eduardo', 'Islas', 'Hernández', 'IAHM030425', 'Cto del Magnecio #119 - Paseos de la Plata', 'Rinitis Alergica', '7713498170', '7711795393', 'e9123263@gmail.com', 'Cachibol');

ALTER TABLE 'new_usuarios'
  ADD PRIMARY KEY ('id');
ALTER TABLE 'new_usuarios'
  MODIFY 'id' int NOT NULL AUTO_INCREMENT;
COMMIT;
