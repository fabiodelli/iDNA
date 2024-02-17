<div class="container-fluid d-flex justify-content-around mt-5">
    <div class="slider_container d-flex">
        <div class="slider-navigation">
            <button class="slide-prev btn btn-warning">&#10094;</button>
            <button class="slide-next btn btn-warning">&#10095;</button>
        </div>

        <div class="corner"></div>

        @foreach ($sliders as $index => $slider)
            <div class="slider_inner">
                {{-- Controllo se $slider->images->first() esiste e in caso contrario fornisco un percorso di immagine di fallback --}}
                @php
                    $firstImage = $slider->images->first();
                    $imagePath = $firstImage ? $firstImage->image_path : 'percorso/immagine/predefinita.jpg'; // Sostituire 'percorso/immagine/predefinita.jpg' con il percorso dell'immagine di fallback
                @endphp

                <div class="w-50">
                    <img class="z_20 position-relative" src="{{ $imagePath }}" alt="">
                </div>
                <div class="w-50">
                    <h4>{{ $slider->title }}</h4>
                    <div class="stars">
                        @for ($i = 0; $i < 5; $i++)
                            @if ($i < $slider->rating)
                                <span class="fa fa-star stars"></span> {{-- Stelle piene per il rating --}}
                            @else
                                <span class="fa fa-star no_stars"></span> {{-- Stelle vuote per il rating --}}
                            @endif
                        @endfor
                    </div>

                <div class="info mt-5 mb-5">
                    <div class="info_type d-flex justify-content-start mb-3">
                        <span class="tab-link mr-4" data-target="description{{ $index }}">Description</span>
                        <span class="tab-link mr-4" data-target="features{{ $index }}">Features</span>
                        <span class="tab-link mr-4" data-target="dimension{{ $index }}">Dimension</span>
                    </div>

                    <div class="tab-content" id="description{{ $index }}" style="display:block;">
                        <p>{{ $slider->description }}</p>
                    </div>
                    <div class="tab-content" id="features{{ $index }}" style="display:none;">
                        <p>{{ $slider->features }}</p>
                    </div>
                    <div class="tab-content" id="dimension{{ $index }}" style="display:none;">
                        <p>{{ $slider->dimension }}</p>
                    </div>
                    <span class="price fw-bold">{{ $slider->price }}</span>
                    <span class="btn-info">BUY NOW</span>
                </div>
                <a class="mt-5" href="">View all boards</a>
                </div>           
            </div>
        @endforeach
    </div>
</div>

<script src="{{ asset('slider.js') }}"></script>
