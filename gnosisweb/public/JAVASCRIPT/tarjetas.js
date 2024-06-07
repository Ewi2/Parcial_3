function openModal(cardNumber) {
    const modalImage = document.getElementById('modal-image');
    const modalTitle = document.getElementById('modal-title');
    const modalText = document.getElementById('modal-text');

    switch(cardNumber) {
        case 1:
            modalImage.src = 'public/IMAGENES/personaje1.jpg';
            modalTitle.textContent = 'Protagonista';
            modalText.textContent = 'Este es el concepto de lo que sera el o la protagonista del juego, las ilustraciones se estan llevando a cabo y mejorando.';
            break;
        case 2:
            modalImage.src = 'public/IMAGENES/personaje2.jpg';
            modalTitle.textContent = 'Enemigo 1';
            modalText.textContent = 'Este enemigo es un escarabajo. Se le implementará una animación cómica y también un ataque impactante para el jugador.';
            break;
        case 3:
            modalImage.src = 'public/IMAGENES/personaje3.jpg';
            modalTitle.textContent = 'Enemigo 2';
            modalText.textContent = 'Este es el concepto de otro enemigo, este es una abeja y su proceso de animación va por buen camino. Las abejas son amables en el mundo de la naturaleza, pero, ¿lo serán contigo?';
            break;
    }

    document.getElementById('modal').style.display = 'block';
}

function closeModal() {
    document.getElementById('modal').style.display = 'none';
}

window.onclick = function(event) {
    if (event.target == document.getElementById('modal')) {
        closeModal();
    }
}

function redirectToPage(selectElement) {
    var selectedValue = selectElement.value;
    if (selectedValue) {
        window.location.href = selectedValue;
    }
}