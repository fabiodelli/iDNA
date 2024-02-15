document.addEventListener('DOMContentLoaded', function () {
    // Configurazione iniziale delle tab per ciascuno slider
    const sliders = document.querySelectorAll('.slider_container .w-50.p-5');
    sliders.forEach(slider => setupTabs(slider));

    // Nascondi tutti gli slider tranne il primo
    sliders.forEach((slider, index) => {
        slider.style.display = index === 0 ? 'block' : 'none';
    });

    // Logica per mostrare lo slider specifico
    const prevButton = document.querySelector('.slide-prev');
    const nextButton = document.querySelector('.slide-next');
    let currentSliderIndex = 0; // Indice dello slider attuale

    function showSlider(index) {
        sliders.forEach((slider, i) => {
            slider.style.display = i === index ? 'block' : 'none';
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

    function setupTabs(slider) {
        const tabs = slider.querySelectorAll('.tab-link');
        const contents = slider.querySelectorAll('.tab-content');

        tabs.forEach(tab => {
            tab.addEventListener('click', function () {
                const target = this.getAttribute('data-target');

                tabs.forEach(t => { t.classList.remove('active'); });
                contents.forEach(c => { c.style.display = 'none'; });

                this.classList.add('active');
                slider.querySelector(`#${target}`).style.display = 'block';
            });
        });

        // Attiva la prima tab di ogni slider
        if (tabs.length > 0) {
            tabs[0].click();
        }
    }
});
