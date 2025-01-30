import './bootstrap.js';
import '../css/app.css';

/**
 * Java script para preloader img del sitio web
 */
window.addEventListener('load', function() {
    setTimeout(() => {
        // Oculta el preloader
        document.getElementById('preloader').style.display = 'none';
        // Muestra el contenido principal
        document.getElementById('content').style.display = 'block';
    }, 5000);
});
/**
 * Fin Preloader javascript preloader
 */

let currentSlide = 1;

/*
* Carrusel
*/
  
  const leftButton = document.querySelector('.btn-nav.left');
  const rightButton = document.querySelector('.btn-nav.right');
  const carousel = document.querySelector('.carousel');

  const cardWidth = carousel.querySelector('.card').offsetWidth + 16; // Ancho de tarjeta + gap

  leftButton.addEventListener('click', () => {
    carousel.scrollBy({ left: -cardWidth * 3, behavior: 'smooth' }); // Mover tres tarjetas hacia la izquierda
  });

  rightButton.addEventListener('click', () => {
    carousel.scrollBy({ left: cardWidth * 3, behavior: 'smooth' }); // Mover tres tarjetas hacia la derecha
  });

/**
 * Fin Carrusel
 */

    function mostrarImagen(slide) {
        const imagen1 = document.querySelector('.imagen1');
        const imagen2 = document.querySelector('.imagen2');
        const texto1 = document.querySelector('.texto .texto1');
        const texto2 = document.querySelector('.texto .texto2');
        const puntos = document.querySelectorAll('.punto');

        // Restablecer el efecto de alejamiento al cambiar de imagen
        [imagen1, imagen2].forEach(img => img.classList.remove('alejamiento'));

        if (slide === 1) {
            imagen1.style.opacity = '1';
            imagen2.style.opacity = '0';
            texto1.textContent = "Descubre el Mundo,";
            texto2.textContent = "Crea Recuerdos!";
            // Añadir el efecto de alejamiento a la imagen mostrada
            imagen1.classList.add('alejamiento');
        } else {
            imagen1.style.opacity = '0';
            imagen2.style.opacity = '1';
            texto1.textContent = "Siente el Viaje,";
            texto2.textContent = "Vive el Momento!";
            // Añadir el efecto de alejamiento a la imagen mostrada
            imagen2.classList.add('alejamiento');
        }

        puntos.forEach((punto, index) => {
            punto.classList.toggle('activo', index + 1 === slide);
        });
    }

    document.querySelector('.flecha-izquierda').addEventListener('click', () => {
        currentSlide = currentSlide === 1 ? 2 : 1;
        mostrarImagen(currentSlide);
    });

    document.querySelector('.flecha-derecha').addEventListener('click', () => {
        currentSlide = currentSlide === 1 ? 2 : 1;
        mostrarImagen(currentSlide);
    });

    mostrarImagen(currentSlide);


    /*
    * Estadisticas
     */

    function startCounters() {
      const counters = document.querySelectorAll('.counter');
      
      counters.forEach(counter => {
          const target = +counter.getAttribute('data-target'); 
          let count = 0;
          const increment = target / 50; // Velocidad del contador

          const updateCounter = () => {
              if (count < target) {
                  count += increment;
                  counter.innerText = Math.ceil(count);
                  setTimeout(updateCounter, 50);
              } else {
                  counter.innerText = target; 
              }
          };

          updateCounter();
      });
  }

  // Detectar cuando los contadores están en la vista
  const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
          if (entry.isIntersecting) {
              startCounters();
              observer.disconnect(); // Se ejecuta una sola vez
          }
      });
  });

  observer.observe(document.querySelector('.counter'));

    /**
     * Fin Estadistica
     */


    /**
     * Productos
     */
    document.addEventListener('DOMContentLoaded', function() {
        const items = document.querySelectorAll('.action-item');
        const contentDisplay = document.getElementById('content-display');

        items.forEach(item => {
            item.addEventListener('click', function() {
                const content = this.getAttribute('data-content');
                contentDisplay.innerHTML = `
                    <h4>${this.textContent}</h4>
                    <p>${content}</p>
                `;
            });
        });
    });
    /**
     * Fin Productos
     */