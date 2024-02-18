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

            // Rimuove la classe 'active-tab-link' da tutti i tab
            tabs.forEach(t => t.classList.remove('active-tab-link'));
            // Nasconde tutti i contenuti delle tab
            contents.forEach(c => c.style.display = 'none');

            // Aggiunge la classe 'active-tab-link' al tab cliccato
            this.classList.add('active-tab-link');
            // Mostra il contenuto della tab selezionata
            slider.querySelector(`#${target}`).style.display = 'flex';
        });
    });

    // Simula il click sul primo tab per renderlo attivo all'avvio
    if (tabs.length > 0) {
        tabs[0].click();
    }
}


// Funzione per configurare il click sulle immagini secondarie
function setupImageSwitch(slider) {
    const mainImage = slider.querySelector('.w-75 img'); // Seleziona l'immagine principale
    const secondaryImagesContainers = slider.querySelectorAll('.secondary_images'); // Seleziona tutti i <div> che contengono le immagini secondarie

    secondaryImagesContainers.forEach(container => {
        const image = container.querySelector('img'); // Seleziona l'immagine all'interno del container
        image.addEventListener('click', function() {
            const newImagePath = this.getAttribute('src'); // Ottieni il percorso dell'immagine cliccata
            mainImage.setAttribute('src', newImagePath); // Cambia il percorso dell'immagine principale

            // Rimuovi la classe 'active' da tutti i container delle immagini secondarie
            secondaryImagesContainers.forEach(cont => cont.classList.remove('active_image'));

            // Aggiungi la classe 'active' al container dell'immagine cliccata
            container.classList.add('active_image');

        });
    });

     // Assicurati che la prima immagine secondaria abbia la classe 'active_image' al caricamento della pagina
     if (secondaryImagesContainers.length > 0) {
        secondaryImagesContainers[0].classList.add('active_image');
    }
}




