const formulario = document.querySelector('.formulario');
const cedula = document.getElementById('cedula');
const nombre = document.getElementById('nombre');
const nombre2 = document.getElementById('nombre2');
const apellido = document.getElementById('apellido');
const apellido2 = document.getElementById('apellido2');
const fecha = document.getElementById('fecha');
const telefono = document.getElementById('telefono');
const sexo = document.getElementById('sexo');
const estado = document.getElementById('estado');

cedula.value
nombre.value
nombre2.value
apellido.value
apellido2.value
fecha.value
telefono.value
sexo.value
estado.value

const SalidaCedula = document.getElementById('salidaCedula');
const SalidaNombre = document.getElementById('salidaNombre');
const SalidaNombre2 = document.getElementById('salidaNombre2');
const SalidaApellido = document.getElementById('salidaApellido');
const SalidaApellido2 = document.getElementById('salidaApellido2');
const SalidaFecha = document.getElementById('salidaFecha');
const SalidaTelefono = document.getElementById('salidaTelefono');
const SalidaSexo = document.getElementById('salidaSexo');
const SalidaEstado = document.getElementById('salidaEstado');

cedula.addEventListener('input', function(e) {
    SalidaCedula.innerText = e.target.value;
});

nombre.addEventListener('input', function(e) {
    SalidaNombre.innerText = e.target.value;
});

nombre2.addEventListener('input', function(e) {
    SalidaNombre2.innerText = e.target.value;
});

apellido.addEventListener('input', function(e) {
    SalidaApellido.innerText = e.target.value;
});

apellido2.addEventListener('input', function(e) {
    SalidaApellido2.innerText = e.target.value;
});

fecha.addEventListener('input', function(e) {
    SalidaFecha.innerText = e.target.value;
});

telefono.addEventListener('input', function(e) {
    SalidaTelefono.innerText = e.target.value;
});

sexo.addEventListener('input', function(e) {
    SalidaSexo.innerText = e.target.value;
});

estado.addEventListener('input', function(e) {
    SalidaEstado.innerText = e.target.value;
});