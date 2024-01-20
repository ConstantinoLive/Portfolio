/*******************Contacto*************************** */

const button = document.querySelector('#botonMovable');

function areFieldsIncomplete() {
    const formulario = document.getElementById('Formulario');
    const camposInputs = formulario.querySelectorAll('input');
    const camposInput_text = formulario.querySelectorAll('textaera');

    for (const input of camposInputs) {
        if (input.value === '') {
            return true;
        }
    }

    for (const textaera of camposInput_text) {
        if (textaera.value === '') {
            return true;
        }
    }

    return false;
}

document.addEventListener('mousemove', (event) => {
    if (areFieldsIncomplete()) {
        const radius = Math.max(
            button.offsetWidth * 0.75,
            button.offsetHeight * 0.75,
            100
        );
        const wrapper = button.parentNode;
        const bx = wrapper.offsetLeft + button.offsetLeft + button.offsetWidth / 2;
        const by = wrapper.offsetTop + button.offsetTop + button.offsetHeight / 2;
        const { clientX, clientY } = event;
        const dist = distanceBetween(clientX, clientY, bx, by);
        const angle = Math.atan2(clientY - by, clientX - bx);
        const ox = -1 * Math.cos(angle) * Math.max(radius - dist, 0);
        const oy = -1 * Math.sin(angle) * Math.max(radius - dist, 0);
        const rx = oy / 2;
        const ry = -ox / 2;

        button.style.transform = `translate(${ox}px, ${oy}px) rotateX(${rx}deg) rotateY(${ry}deg)`;
        button.style.boxShadow = `0px ${Math.abs(oy)}px ${Math.abs(oy) / radius * 40} rgba(0,0,0,0.15)`;
    }
});

const distanceBetween = (p1x, p1y, p2x, p2y) => {
    const dx = p1x - p2x;
    const dy = p1y - p2y;
    return Math.sqrt(dx * dx + dy * dy);
};

/************************************************************/

/************************Trabajo****************************/

/*
const buttons = document.querySelectorAll(".card-buttons button");
const sections = document.querySelectorAll(".card-section");
const card = document.querySelector(".card");
const handleButtonClick = e => {
    const targetSection = e.target.getAttribute("data-section");
    const section = document.querySelector(targetSection);
    targetSection !== "#about" ? card.classList.add("is-active") : card.classList.remove("is-active");
    card.setAttribute("data-state", targetSection);
    sections.forEach(s => s.classList.remove("is-active"));
    buttons.forEach(b => b.classList.remove("is-active"));
    e.target.classList.add("is-active");
    section.classList.add("is-active");
};
buttons.forEach(btn => {
    btn.addEventListener("click", handleButtonClick);
});*/

/*
FUNCION PARA GIRAR EL CARRUSEL CON EL MOUSE

var angle=0;
function galleryspin(sing){
spinner=document.querySelector('#spinner');
if(!sing){
    angle=angle+45;
}
else {
angle=angle-45;
}
spinner.setAttribute("style","-webkit-transform:rotateY("+angle+"deg)")
}
*/

/*FUNCION PARA QUE GIRE SOLO EL CARRUSEL*/

var angle = 0;
var rotationInterval;

function startRotation() {
    rotationInterval = setInterval(function () {
        angle -= 45;
        rotateCarousel();
    }, 1500); // velocidad de rotación
}

function stopRotation() {
    clearInterval(rotationInterval);
}

function rotateCarousel() {
    var spinner = document.querySelector('#spinner');
    spinner.style.transform = 'rotateY(' + angle + 'deg)';
}

// Iniciar la rotación automáticamente al cargar la página
document.addEventListener('DOMContentLoaded', function () {
    startRotation();
});

// Detener la rotación cuando el mouse entra en el área del carrusel
document.querySelector('#carousel').addEventListener('mouseenter', function () {
    stopRotation();
});

// Reiniciar la rotación cuando el mouse sale del área del carrusel
document.querySelector('#carousel').addEventListener('mouseleave', function () {
    startRotation();
});



/************************************************************/

/*
document.getElementById('carousel').addEventListener('mousemove', function (e) {
    // Calcula el centro del carrusel
    var centerX = this.offsetLeft + this.offsetWidth / 2;
    // Calcula la distancia desde el mouse hasta el centro del carrusel
    var distance = Math.abs(e.clientX - centerX);

    // Obtiene todas las imágenes dentro del carrusel
    var images = document.querySelectorAll('#spinner img');

    // Quita la clase 'enfocada' de todas las imágenes
    images.forEach(function (image) {
        image.classList.remove('enfocada');
    });

    // Encuentra la imagen más cercana al centro y agrégale la clase 'enfocada'
    var closestImage = Array.from(images).reduce(function (prev, current) {
        var prevDistance = Math.abs(prev.offsetLeft + prev.offsetWidth / 2 - centerX);
        var currentDistance = Math.abs(current.offsetLeft + current.offsetWidth / 2 - centerX);
        return (prevDistance < currentDistance ? prev : current);
    });

    closestImage.classList.add('enfocada');
});
*/





