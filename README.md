El proyecto fue realizado en laravel 8, haciendo uso de php 7.4, mysql 8.0
El proyecto consiste en sistema de login que consta de una pagina para que el usuario se pueda registrar y otra por la cual el usuario puede acceder al sistema con sus respectivas credenciales.

Al momento del usuario acceder al sistema, cuenta con una ventana principal, la cual consta de una barra superior donde se puede observar el numero de tareas asignadas que tiene el usuario, el nombre del usuario y el rol que este tiene, tambien hay un meno lateral en el cual el usuario encontrara la opcion de volver al inicio y la de acceder a las tareas asignadas, si el usuario tiene el rol de administrador tendra una tercera opcion que es la de poder visualizar los usuarios registrados.

Al acceder a la opcion de tareas el usuario podra registrar una tarea nueva, y dado el caso tenga el rol de administrador podra asignar tareas a los demas usuarios registrados, en la opcion de tareas tambien podra modificar una tarea y eliminarla.

El usuario con rol administrador podra ingresar a la opcion de usuarios en la cual podra observar un listado con los nombres, telefonos, correos y estados de los usuarios registrados en el sistema.

para realizar el despligue de este proyecto debera tener instaladas las tecnologias mencionadas al principio de este documento paso siguiente, debera realizar la creacion y migracion de la base de datos la cual tiene como nombre "torrens".

para realizar la migracion debera abrir una consola en la carpeta del proyecto y escribir el siguiente comando "php artisan migrate", luego de tener la base de datos lista procederemos a iniciar la aplicacion haciendo uso del comando "php artisan serve".

para acceder al sistema el usuario es "Jhonatan@prueba.com" y la contraseña es "Prueba12".
