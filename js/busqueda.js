/*
 * Esta rutina se ejecuta cuando JQuery está listo para trabajar
 */
$(function() 
{
	// Configuramos el control para realizar la busqueda 
	$("#pais").autocomplete({
		source: "_lib/buscar.php", 	// Fuente que realiza la busqueda
		minLength: 3,				// Cantidad mínima de caracteres para empezar a buscar
		select: itemSeleccionado,	// Rutina que extrae la información del registro seleccionado
		focus: itemFoco				// Rutina que se ejecuta cuando un ítem de la lista obtiene el foco
	});
});

/*
 * Tras seleccionar un país, completamos el nombre y código ISO
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