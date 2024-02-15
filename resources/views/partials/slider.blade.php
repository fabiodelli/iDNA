<div class="container-fluid d-flex justify-content-around mt-5">
    <div class="slider_container d-flex">
        <div class="slider-navigation">
            <button class="slide-prev btn btn-warning">&#10094;</button>
            <button class="slide-next btn btn-warning">&#10095;</button>
        </div>
        <div class="d-flex align-items-center w-50">
            <div class="corner"></div>
            <img class="z_20 position-relative" src="images/board.png" alt="">
        </div>

        <div class="w-50 p-5">
            <h4>JR Surfboards The Donny Stoker <br> Yellow/Green Rail Fade</h4>
            <div class="stars">stelline</div>

            <div class="info mt-5 mb-5">
                <div class="info_type w-100 d-flex justify-content-between">
                    <span class="tab-link active" data-target="description">Description</span>
                    <span class="tab-link" data-target="features">Features</span>
                    <span class="tab-link" data-target="dimension">Dimension</span>
                </div>

                <div class="tab-content active" id="description">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas asperiores delectus officiis
                        magnam perspiciatis quos, alias consectetur a culpa tenetur. Aliquid ab et hic iure?</p>
                </div>
                <div class="tab-content" id="features" style="display:none;">
                    <p>Features content goes here.</p>
                </div>
                <div class="tab-content" id="dimension" style="display:none;">
                    <p>Dimension content goes here.</p>
                </div>

                <span class="price fw-bold">$499.99</span>
                <span class="btn-info">BUY NOW</span>
            </div>

            <a class="mt-5" href="">View all boards</a>
        </div>
    </div>
</div>

<script src="{{ asset('slider.js') }}"></script>
