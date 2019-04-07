<?php
class util 
{
	static function render_json($datos)
	{
		echo '[';
		$contador = 0;
		foreach ($datos as $valor) 
		{
			if ($contador++ > 0) {
				// agregamos esta linea porque cada elemento debe estar separado por una coma
				print ", "; 
			}
			$nombre = $valor['nombre'];
			$codigo_iso = $valor['codigo_iso'];
			print "{ \"label\" : \"$nombre\", \"value\" : {  \"nombre\" : \"$nombre\", \"codigo_iso\" : \"$codigo_iso\" } }";
		} 
		echo ']';
	}
	
	static function capitalizar($cadena)
	{
		return mb_convert_case($cadena, MB_CASE_TITLE, 'utf-8');
	}
	
	static function a_minusculas($cadena)
	{
		return mb_convert_case($cadena, MB_CASE_LOWER, 'utf-8');
	}
	
	static function a_mayusculas($cadena)
	{
		return mb_convert_case($cadena, MB_CASE_UPPERLOWER, 'utf-8');
	}
}
?>