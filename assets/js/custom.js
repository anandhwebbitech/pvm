new WOW().init();

 let mybutton = document.getElementById("myBtn");

 window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

 function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}


// cursor animation  //

const dot = document.querySelector('.cursor-dot');
const circle = document.querySelector('.cursor-circle');

let mouseX = 0, mouseY = 0;
let circleX = 0, circleY = 0;

document.addEventListener('mousemove', (e) => {
    mouseX = e.clientX;
    mouseY = e.clientY;

    dot.style.left = mouseX + 'px';
    dot.style.top = mouseY + 'px';
});

function animateCursor() {
    circleX += (mouseX - circleX) * 0.15;
    circleY += (mouseY - circleY) * 0.15;

    circle.style.left = circleX + 'px';
    circle.style.top = circleY + 'px';

    requestAnimationFrame(animateCursor);
}
animateCursor();

document.addEventListener('mousedown', () => {
    circle.style.transform = 'translate(-50%, -50%) scale(2)';
});
document.addEventListener('mouseup', () => {
    circle.style.transform = 'translate(-50%, -50%) scale(1)';
});   


 new bootstrap.Carousel(document.querySelector('#heroCarousel'), {
    interval: 5000,
    ride: 'carousel',
    pause: false
});

