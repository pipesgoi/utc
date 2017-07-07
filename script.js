//Habilitar nombres de invitados
function habilitar(NumInv) {
			var invi = document.getElementById('NumInv');
			var invi1 = document.getElementById('invitado');
			var invi2 = document.getElementById('invitado2');

			if (invi.value == '0') {
				invi1.disabled = true;
				invi2.disabled = true;
			} 
				else if (invi.value == '1'){
					invi1.disabled = false;
					invi2.disabled = true;
				}
					else if(invi.value == '2'){
						invi1.disabled = false;
						invi2.disabled = false;
					}
		}

//Boton de Registrarse
function mensaje() {

	if (confirm('¿Desea terminar con el registro?')) {
			alert('Felicidades usted se ha registrado exitosamente.' 
				+ ' ' + 'Su horario de entrada es el siguiente:' 
				+ ' ' + 'Le pedimos puntualidad para este evento.');
	}
}
