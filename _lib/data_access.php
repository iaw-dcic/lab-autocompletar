<?php
class data_access 
{
	protected $xml;
	
	function __construct() 
	{
		$this->xml = simplexml_load_file('..//data//paises.xml');
	}
	
	function filtrar($criterio)
	{
		// Armamos la cosnulta en xml
		$query = "/paises/pais[contains(nombre, '$criterio')]";

		// La ejecutamos y obtenemos un objeto 'simplexmlelement'
		$datos = $this->xml->xpath($query);
		
		/**
		 * Convertimos la respuesta a un arreglo asociativo, capitalizando el 
		 * campo 'nombre'
		 */
		$salida = array();
		foreach ($datos as $dato) {
			$dato = (array)$dato;
			$dato['nombre'] = $this->capitalizar($dato['nombre']);
			$salida[] = (array)$dato;
		}
		
		return $salida;
	}
	
	protected function capitalizar($cadena)
	{
		return mb_convert_case($cadena, MB_CASE_TITLE, 'utf-8');
	}
}
?>
