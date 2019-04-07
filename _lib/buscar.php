<?php
require_once './data_access.php';
require_once './util.php';

/**
 * Recuperamos el criterio de la busqueda. 
 * Se obtiene por GET, en el índice 'term'
 */
$criterio = util::a_minusculas($_GET["term"]);

if ($criterio) {
	// Si recuperamos un criterio de búsqueda, filtramos en los datos

	/**
	 * Creamos un objeto data_access, que encapsula el acceso a datos
	 */
	$da = new data_access();

	/**
	 * Filtramos los datos
	 */
	$datos = $da->filtrar($criterio);

	/**
	 * Construimos un objeto JSON con los resultados, donde cada elemento 
	 * debe tener la forma:
	 * { label : "lo que quieras que aparezca escrito", value: { datos } }
	 */
	util::render_json($datos);
}
?>