# Repositorio-del-Parcial---Programaci-n-
Parcial II - Programación Computacional IV

Integrantes:
Astrid Marcela Arguello Guzman - SMSS039224
Karen Beatriz Jandres Chavez - SMSSS013424
Yessica Raquel Reyes Juarez - SMSS042624

Para ingresar al sistema debe escribir en el campo de nombre y contraseña segun sea el rol,
que desee manejar dentro de la app web de Farmacias "La Buena":
admin 1234
visitante 1234

Preguntas y Respuestas:
1 - ¿Cómo manejan la conexión a la BD y qué pasa si algunos de los datos son incorrectos?
Justifiquen la manera de validación de la conexión.
R// La conexión a la base de datos se maneja utilizando PHP con mysqli en un archivo separado (conexion.php). En este archivo se definen los datos del servidor como el host, usuario, contraseña y nombre de la base de datos. Si alguno de estos datos es incorrecto, la conexión falla y se muestra un mensaje de error usando connect_error. Esto permite detectar el problema y evitar que la aplicación continúe funcionando sin conexión. Se valida la conexión con una condición que verifica si existe error, de esta forma se asegura que el sistema solo funcione cuando la conexión es correcta.

2 - ¿Cuál es la diferencia entre $_GET y $_POST en PHP? ¿Cuándo es más apropiado usar
cada uno? Da un ejemplo real de tu proyecto.
R// La diferencia es que:
$_GET envía los datos a través de la URL
$_POST envía los datos de forma oculta
$_POST es más seguro y se utiliza cuando se manejan datos importantes o sensibles, como formularios.
Usamos $_POST para el login y para registrar pacientes, porque son datos importantes
Usamos $_GET para eliminar registros (?eliminar=id), ya que es una acción simple que se puede pasar por la URL

3 - Tu app va a usarse en una empresa de la zona oriental. ¿Qué riesgos de seguridad
identificas en una app web con BD que maneja datos de los usuarios? ¿Cómo los
mitigarían? 
R// En una aplicación web que maneja datos de usuarios existen varios riesgos:
Inyección SQL = cuando alguien intenta manipular las consultas
Acceso no autorizado = usuarios sin permisos
Robo de datos = si no hay seguridad en el sistema
Para mitigarlos: Hay que validar los datos antes de enviarlos a la base de datos
Usar consultas preparadas (prepared statements)
Manejar sesiones para controlar el acceso
Limitar acciones según el rol del usuario (admin o visitante)

Tabla Usuarios


Columna	Tipo de dato	Límite	¿Es nulo?	Descripción
identificación	INT	-	No	Identificador único del usuario
usuario	VARCHAR	50	No	Nombre de usuario
contraseña	VARCHAR	50	No	Contraseña de usuario
rol	VARCHAR	50	No	Tipo de usuario (admin o visitante)



| Columna  | Tipo de dato | Límite | ¿Es nulo? | Descripción                         |
| -------- | ------------ | ------ | --------- | ----------------------------------- |
| id       | INT          | -      | No        | Identificador único del usuario     |
| usuario  | VARCHAR      | 50     | No        | Nombre de usuario                   |
| password | VARCHAR      | 50     | No        | Contraseña del usuario              |
| rol      | VARCHAR      | 20     | No        | Tipo de usuario (admin o visitante) |

tabla pacientes

| Columna       | Tipo de dato | Límite | ¿Es nulo? | Descripción                              |
| ------------- | ------------ | ------ | --------- | ---------------------------------------- |
| id            | INT          | -      | No        | Identificador del paciente               |
| nombre        | VARCHAR      | 50     | No        | Nombre del paciente                      |
| enfermedad    | VARCHAR      | 50     | No        | Enfermedad del paciente                  |
| tipo_atencion | VARCHAR      | 20     | No        | Tipo de atención (consulta o emergencia) |
| urgente       | BOOLEAN      | -      | No        | Indica si es urgente                     |
| observacion   | VARCHAR      | 100    | Sí        | Comentarios adicionales                  |
| usuario_id    | INT          | -      | No        | Relación con el usuario que registró     |


