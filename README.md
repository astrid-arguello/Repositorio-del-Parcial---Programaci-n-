# Repositorio-del-Parcial---Programaci-n-
Parcial II - Programación Computacional IV





tabla usuarios

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


