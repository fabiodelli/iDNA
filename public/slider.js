

/* tab */

document.addEventListener('DOMContentLoaded', function () {
    const tabs = document.querySelectorAll('.tab-link');
    const contents = document.querySelectorAll('.tab-content');

    tabs.forEach(tab => {
        tab.addEventListener('click', function () {
            let target = this.getAttribute('data-target');

            // Rimuovi 'active' da tutti i tabs e contenuti
            tabs.forEach(t => { t.classList.remove('active'); });
            contents.forEach(c => { c.style.display = 'none'; });

            // Aggiungi 'active' al tab cliccato e mostra il contenuto corrispondente
            this.classList.add('active');
            document.getElementById(target).style.display = 'block';
        });
    });
});


/* pulsanti */

document.addEventListener('DOMContentLoaded', function () {
    const prevButton = document.querySelector('.slide-prev');
    const nextButton = document.querySelector('.slide-next');

    let currentSlideIndex = 0; // Indice della slide attuale
    const slides = document.querySelectorAll('.slider_container > div'); // Seleziona le slide

    function showSlide(index) {
        // Nascondi tutte le slide
        slides.forEach(slide => slide.style.display = 'none');
        // Mostra la slide corrente
        slides[index].style.display = 'block';
    }

    prevButton.addEventListener('click', function () {
        currentSlideIndex = (currentSlideIndex > 0) ? currentSlideIndex - 1 : slides.length - 1;
        showSlide(currentSlideIndex);
    });

    nextButton.addEventListener('click', function () {
        currentSlideIndex = (currentSlideIndex < slides.length - 1) ? currentSlideIndex + 1 : 0;
        showSlide(currentSlideIndex);
    });

    // Mostra la prima slide all'inizio
    showSlide(currentSlideIndex);
});
