let counter = 1;
const slider = document.querySelector('.slider');
const sliderItems = document.querySelectorAll('.slider img');
const sliderLength = sliderItems.length;

function nextSlide() {
  if (counter < sliderLength) {
    counter++;
  } else {
    counter = 1;
  }
  updateSlider();
}

function prevSlide() {
  if (counter > 1) {
    counter--;
  } else {
    counter = sliderLength;
  }
  updateSlider();
}

function updateSlider() {
  slider.style.transition = 'transform 0.5s ease-in-out';
  slider.style.transform = `translateX(${-100 * (counter - 1)}%)`;
}
