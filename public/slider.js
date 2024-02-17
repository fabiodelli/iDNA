document.addEventListener('DOMContentLoaded', function () {
    const sliders = document.querySelectorAll('.slider_inner');

    sliders.forEach(slider => {
        setupTabs(slider);
        setupImageSwitch(slider); // Aggiungi la configurazione per lo switch delle immagini
    });

    sliders.forEach((slider, index) => {
        slider.style.display = index === 0 ? 'flex' : 'none';
    });

    const prevButton = document.querySelector('.slide-prev');
    const nextButton = document.querySelector('.slide-next');
    let currentSliderIndex = 0;

    function showSlider(index) {
        sliders.forEach((slider, i) => {
            slider.style.display = i === index ? 'flex' : 'none';
        });
    }

    prevButton.addEventListener('click', function () {
        currentSliderIndex = currentSliderIndex > 0 ? currentSliderIndex - 1 : sliders.length - 1;
        showSlider(currentSliderIndex);
    });

    nextButton.addEventListener('click', function () {
        currentSliderIndex = currentSliderIndex < sliders.length - 1 ? currentSliderIndex + 1 : 0;
        showSlider(currentSliderIndex);
    });
});

function setupTabs(slider) {
    const tabs = slider.querySelectorAll('.tab-link');
    const contents = slider.querySelectorAll('.tab-content');

    tabs.forEach(tab => {
        tab.addEventListener('click', function () {
            const target = this.getAttribute('data-target');

            tabs.forEach(t => t.classList.remove('active'));
            contents.forEach(c => c.style.display = 'none');

            this.classList.add('active');
            slider.querySelector(`#${target}`).style.display = 'flex';
        });
    });

    if (tabs.length > 0) {
        tabs[0].click();
    }
}

// Funzione per configurare il click sulle immagini secondarie
function setupImageSwitch(slider) {
    const mainImage = slider.querySelector('.w-75 img'); // Seleziona l'immagine principale
    const secondaryImages = slider.querySelectorAll('.secondary_images img'); // Seleziona tutte le immagini secondarie

    secondaryImages.forEach(image => {
        image.addEventListener('click', function() {
            const newImagePath = this.getAttribute('src'); // Ottieni il percorso dell'immagine cliccata
            mainImage.setAttribute('src', newImagePath); // Cambia il percorso dell'immagine principale
        });
    });
}
