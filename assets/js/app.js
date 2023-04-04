const filter = document.querySelector('.filter');
const showFilterBtn = document.querySelector('#show-filter-btn');

let svg = `<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
<path d="M16 18V20H5V18H16ZM21 11V13H3V11H21ZM19 4V6H8V4H19Z" fill="#000"></path>
</svg>`;

showFilterBtn.addEventListener('click', () => {
    filter.classList.toggle('hide');
    if (filter.classList.contains('hide')) {
        showFilterBtn.innerHTML = svg;
    } else {
        showFilterBtn.innerHTML = svg;
    }
});

// Ocultar el filtro cuando la ventana es más pequeña que 970px
window.addEventListener('resize', () => {
    if (window.innerWidth < 970) {
        filter.classList.add('hide');
        showFilterBtn.innerHTML = svg;
    } else {
        filter.classList.remove('hide');
        showFilterBtn.innerHTML = svg;
    }
});