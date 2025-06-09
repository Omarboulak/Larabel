// Importa el bundle completo (JS + CSS en un solo sitio)
import Swiper from 'swiper/bundle';
import 'swiper/css/bundle';

// Inicialización
document.addEventListener('DOMContentLoaded', () => {
  document.querySelectorAll('.swiper').forEach((el) => {
    new Swiper(el, {
      direction: 'horizontal',
      loop: true,
      pagination: {
        el: el.querySelector('.swiper-pagination'),
      },
      navigation: {
        nextEl: el.querySelector('.swiper-button-next'),
        prevEl: el.querySelector('.swiper-button-prev'),
      },
      scrollbar: {
        el: el.querySelector('.swiper-scrollbar'),
      },
    });
  });
});
