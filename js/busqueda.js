/*
 * Esta rutina se ejecuta cuando JQuery est� listo para trabajar
 */
$(function() 
{
	// Configuramos el control para realizar la busqueda 
	$("#pais").autocomplete({
		source: "_lib/buscar.php", 	// Fuente que realiza la busqueda
		minLength: 3,				// Cantidad m�nima de caracteres para empezar a buscar
		select: itemSeleccionado,	// Rutina que extrae la informaci�n del registro seleccionado
		focus: itemFoco				// Rutina que se ejecuta cuando un �tem de la lista obtiene el foco
	});
});

/*
 * Tras seleccionar un pa�s, completamos el nombre y c�digo ISO
 */
function itemSeleccionado(event, ui)
{
	var pais = ui.item.value;
	$("#codigo_iso").text(pais.codigo_iso);
	$("#pais").val(pais.nombre);
	event.preventDefault();
}

function itemFoco(event, ui)
{
    var pais = ui.item.value;
	$("#pais").val(pais.nombre);
	event.preventDefault();
}