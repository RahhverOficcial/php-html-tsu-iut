// Selecciona el botón para abrir el modal
const btnAbrirModal = document.querySelector('#btn-abrir-modal');

// Selecciona el botón para cerrar el modal
const btnCerrarModal = document.querySelector('#btn-cerrar-modal');

// Selecciona el modal
const modal = document.querySelector('#modal');

// Agrega evento para abrir el modal
btnAbrirModal.addEventListener('click', (e) => {
    e.preventDefault();
    modal.classList.add('modal--show');
    modal.showModal(); // Usa showModal() para mostrar el modal
});

// Agrega evento para cerrar el modal
btnCerrarModal.addEventListener('click', () => {
    modal.classList.remove('modal--show');
    modal.close(); // Usa close() para cerrar el modal
});
