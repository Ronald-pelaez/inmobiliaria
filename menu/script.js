// Obtener los elementos del DOM
const openFormBtn = document.getElementById('openFormBtn');
const closeFormBtn = document.getElementById('closeFormBtn');
const contactForm = document.getElementById('contactForm');

// Función para abrir el formulario
openFormBtn.addEventListener('click', () => {
    contactForm.style.display = 'block';
});

// Función para cerrar el formulario
closeFormBtn.addEventListener('click', () => {
    contactForm.style.display = 'none';
});

// Cerrar el formulario al hacer clic fuera de él
window.addEventListener('click', (event) => {
    if (event.target == contactForm) {
        contactForm.style.display = 'none';
    }
});
