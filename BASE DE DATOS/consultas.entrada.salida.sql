//Consultas//
//inserta una pregunta basica hecha por un estudiante//
//DATOS DE ENTRADA: VALORES//
//DATOS DE SALIDA: REGISTRO//
INSERT into pregunta (descripcion, titulo) values ('ayuda','¿cómo puedo iniciar en php?')

//selecciona el nombre, titulo y la hora en que el estudienta hace una pregunta//
//DATOS DE ENTRADA: HORA//
//DATOS DE SALIDA: NOMBRE, TITULO, HORA//
SELECT estudiante.nombre, pregunta.titulo, fecha.hora FROM estudiante, pregunta, fecha WHERE fecha.hora= '3:04:04'

//actualiza la pregunta de un estudiante//
//DATOS DE ENTRADA: VALORES DE ACTUALIZACION//
//DATOS DE SALIDA: REGISTRO ACTUALIZADO//
UPDATE pregunta set titulo='ayuda x2', descripcion='necesito saber sobre historia' where id = 1

//borra las preguntas que tienen una vigencia de un dia//
//DATOS DE ENTRADA: ID//
//DATOS DE SALIDA: ELIMINACION DE PREGUNTA//
DELETE FROM pregunta WHERE pregunta.id = '1'
