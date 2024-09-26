class App {
    constructor() {
        this.track = document.querySelector('.carrusel-track');
        this.carruselItems = document.querySelectorAll('.carrusel-item');
        this.totalItems = this.carruselItems.length;
        this.index = 0;
        this.intervalDuration = 2000; // 2000 milisegundos (2 segundos)
        this.startAutoScroll();
    }

    showNextImage() {
        this.index = (this.index + 1) % this.totalItems; // Cicla a la siguiente imagen
        this.track.style.transform = `translateX(-${this.index * 100}%)`; // Aplica la transformación para mostrar la siguiente imagen
    }

    startAutoScroll() {
        this.interval = setInterval(() => {
            this.showNextImage(); // Llama a la función para mostrar la siguiente imagen
        }, this.intervalDuration);
    }
}

document.addEventListener("DOMContentLoaded", () => {
    new App(); // Inicializa el carrusel cuando el DOM esté completamente cargado
});
