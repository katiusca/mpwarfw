# mpwar-fw-katy
-Para usar esta pequeña aplicación usando la plantilla Smarty la ruta debe ser /homeSmarty/index.
-Para usar una salida en formato json se usa la ruta /homeJson/mostrar.
-Tendra la opción de listar los usuarios de la tabla users o de insertar un nuevo registro.
-Para usar el modelo con la template Twig la ruta es /homeTwig/index (No esta funcionando actualmente).
-El framework tiene una restricción de que todo los servicios que se vayan a crear con dependencias de alguna clases,
tendra un atributo público para hacer la referencia en el fichero json de la configuración del container, además que todos
los servicios deben tener un constructor vacio.
-Tiene la posibilidad de realizar juegos con la url, ya que proporciona una clase con los métodos adecuados para tratarla.