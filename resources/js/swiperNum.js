
import Swiper from 'swiper/bundle';
import 'swiper/css/bundle';

document.addEventListener('DOMContentLoaded', () => {
  document.querySelectorAll('.swiper-num').forEach((el) => {
    new Swiper(el, {
      direction: 'horizontal',
      loop: true,

      pagination: {
        el: el.querySelector('.swiper-pagination'),
        clickable: true,
        renderBullet(index, className) {
          return `<span class="${className}">${index + 1}</span>`;
        },
        renderCustom(swiper, current, total) {
          return `${current} of ${total}`;
        },
      },

      navigation: {
        nextEl: el.querySelector('.swiper-button-next'),
        prevEl: el.querySelector('.swiper-button-prev'),
      },
    });
  });
});
