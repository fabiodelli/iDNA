<!-- Container principale con padding top e display flex per centrare gli slider -->
<div class="container-fluid d-flex justify-content-around mt-5">
    <div class="slider_container d-flex">
        <!-- Navigazione slider: bottoni per scorrere le immagini -->
        <div class="slider-navigation">
            <button class="slide-prev btn btn-warning">&#10094;</button>
            <button class="slide-next btn btn-warning">&#10095;</button>
        </div>

        <!-- Placeholder per eventuali elementi aggiuntivi o di design -->
        <div class="corner"></div>

        <!-- Loop attraverso gli slider disponibili per mostrarli -->
        @foreach ($sliders as $index => $slider)
            <div class="slider_inner">
                <!-- Recupera la prima immagine dello slider o un'immagine predefinita se non presente -->
                @php
                    $firstImage = $slider->images->first();
                    $imagePath = $firstImage ? asset($firstImage->image_path) : asset('percorso/immagine/predefinita.jpg');
                @endphp

                <!-- Contenitore per l'immagine principale e le immagini secondarie -->
                <div class="w_60 d-flex image_container">
                    <!-- Immagine principale dello slider -->
                    <div class="h-100 d-flex align-items-center image_container">
                        <img class="main-image z_20 position-relative" src="{{ $imagePath }}" alt="">
                    </div>
                    <div class="d-flex justify-content-center align-items-center z_20 images_container">
                        <!-- Mostra le immagini secondarie escludendo la prima -->
                        @foreach ($slider->images as $image)
                            <div class="secondary_images">
                                <img src="{{ asset($image->image_path) }}" alt="" class="secondary-image"
                                    style="width: 100%; object-fit: cover; cursor: pointer;">
                            </div>
                        @endforeach
                    </div>
                    <!-- Contenitore per le immagini secondarie -->
                </div>
                <!-- Sezione dettagli dello slider (titolo, rating, ecc.) -->
                <div class="info_container z_20">
                    <h4>{{ $slider->title }}</h4>
                    <!-- Visualizzazione del rating sotto forma di stelle -->
                    <div>
                        @for ($i = 0; $i < 5; $i++)
                            @if ($i < $slider->rating)
                                <span class="fa fa-star star"></span> <!-- Stelle piene per il rating -->
                            @else
                                <span class="fa fa-star no_star"></span> <!-- Stelle vuote per il rating -->
                            @endif
                        @endfor

                        <span class="ms-1">({{ $slider->rating }})</span>

                    </div>

                    <!-- Informazioni addizionali con tab per descrizione, caratteristiche e dimensioni -->
                    <div class="info mt-5 mb-5">
                        <div class=" d-flex info_type justify-content-start mb-3">
                            <span class="tab-link " data-target="description{{ $index }}">DESCRIPTION</span>
                            <span class="tab-link " data-target="features{{ $index }}">FEATURES</span>
                            <span class="tab-link " data-target="dimension{{ $index }}">DIMENSIONS</span>
                        </div>

                        <!-- Contenuto delle tab -->
                        <div class="tab-content" id="description{{ $index }}" style="display:block;">
                            <p>{{ $slider->description }}</p>
                        </div>
                        <div class="tab-content" id="features{{ $index }}" style="display:none;">
                            <p>{{ $slider->features }}</p>
                        </div>
                        <div class="tab-content" id="dimension{{ $index }}" style="display:none;">
                            <p>{{ $slider->dimension }}</p>
                        </div>
                        <!-- Prezzo e bottone per l'acquisto -->
                        <span class="price fw-bold fs-4 me-5">$ {{ $slider->price }}</span>

                        <a class="buy bg-info text-white text-decoration-none fw-bold p-3 px-4" href="">BUY NOW</a>

                        <div class="id_counter">{{ $slider->id }}/{{ $sliders->last()->id }}</div>

                    </div>
                    <!-- Link per visualizzare tutti gli slider -->
                    <a class="mt-5" href="">View all boards</a>
                </div>
            </div>
        @endforeach
    </div>
</div>

<!-- Collegamento allo script JavaScript per la logica dello slider -->
<script src="{{ asset('slider.js') }}"></script>
