document.addEventListener('DOMContentLoaded', function() {
    const mensaje = document.getElementById('mensaje-agregado');
    if (mensaje) {
        setTimeout(() => {
            mensaje.classList.add('hidden');
        }, 2000);
    }
});
