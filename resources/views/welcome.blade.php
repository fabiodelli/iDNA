<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Il mio sito</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="app.css">
</head>

<body>

    {{-- Background top ----------------------------------------------------------------------------------- --}}

    <img src="images/surfing.png" class="img-fluid position-absolute top-0 start-0 " alt="">

    {{-- Header --------------------------------------------------------------------------------------- --}}

    <nav class=" w-100 h-100 p-3">
        <div class="container d-flex justify-content-between align-item-center mb-5">
            <div>Surfers & Co</div>
            <div class=" w-50 d-flex justify-content-around">
                <div>Boards</div>
                <div>Accessories</div>
                <div>Blog</div>
                <div>Tecnology</div>
                <div>Team</div>
                <div>Dealers</div>
            </div>
            <div class="d-flex justify-content-between">
                <div>Social</div>
                <div>Social</div>
                <div>Social</div>
            </div>
        </div>
    </nav>

    {{-- Jumbo Text --------------------------------------------------------------------------------------- --}}

    <div class="w-100 d-flex flex-column align-items-center mt-5">
        <h2 class="">Ride every wave as if it's your last</h2>
        <span class="text-white mb-5">We love the motion of the ocean</span>
    </div>

    {{-- Slider --------------------------------------------------------------------------------------- --}}

    <div class="container-fluid d-flex justify-content-around mt-5">

        <div class="slider_container d-flex">

            <div class="d-flex align-items-center w-50">
                <div class="corner"></div>
                <img class="z_20 position-relative" src="images/board.png" alt="">
            </div>

            <div class="w-50 p-5">

                <h4>JR Surfboards The Donny Stoker <br>
                    Yellow/Green Rail Fade</h4>
                <div class="stars">stelline</div>

                <div class="info mt-5 mb-5">
                    <div class="info_type w-100 d-flex justify-content-between">
                        <span>Description</span>
                        <span>Features</span>
                        <span>Dimension</span>
                    </div>
                    <p class="mt-4">Easy to ride, care free surfing craft that's fun for everyone, paddles well, super
                        fast down the line and great for any level of surfing depending on who rides it. The Donny
                        Stoker, a rework on design from stokesys first ever pro model. A super easy to surf and fun
                        board. The Donny Stoker is a board for total freesurfing expression.</p>
                    <span class="price fw-bold">$499.99</span>
                    <span class="btn-info">BUY NOW</span>
                </div>

                <a class="mt-5" href="">View all boards</a>

            </div>
        </div>
    </div>

    {{-- background middle  --------------------------------------------------------------------------------------- --}}

    <img src="images/photo.png" class="img-fluid background-middle" alt="">

    {{-- content middle  --------------------------------------------------------------------------------------- --}}

    <div class="container-fluid d-flex justify-content-around">

        <div class="middle_container d-flex justify-content-around">

            <div class="w-50 p-5 d-flex justify-content-center bg-white">

                <div class="w-50">

                    <h3>WE ARE SURFERS CO.</h3>
                    <span class="mx-auto">X</span>
                    <p>Lorem ipsum dolor sit amet, aeneam consectetur adipiscing elit. Fusce iaculis feugiat arcunum
                        fermentum hendrerit. Suspendisse auctor labor nisi, et interdum diam facilisis, aliquam pulvinar
                        semi egetis belle sollicitudin ut. Nullam tincidun finibustus scelerisque.
                    </p>
                    <a class="info" href="">Read more</a>

                </div>

            </div>

            <div class="w-50 d-flex align-items-end">
                <div class="video" id="player"></div>
            </div>

        </div>

    </div>

    {{-- content bottom  --------------------------------------------------------------------------------------- --}}

    <div class="container-fluid d-flex justify-content-around">

        <div class="bottom_container d-flex justify-content-evenly">

            <div class="w-50 d-flex flex-column align-items-center">


                <img class="w-100" src="images/bottom-img.png" alt="">
                <div class="bg-white w-100 p-3">
                    <span class="pe-2">
                        <img src="images/instagram.png" alt="">
                    </span>
                    <span class="fs-1 text-info">Follow Us</span>
                    <span>@Surfersco</span>
                </div>


            </div>

            <div class="w-50 pl-5 pr-5 ">
                <form action="#" method="post">
                    <input class="mb-3 p-2 w-100" type="text" id="name" name="name" placeholder="Nome" required> <br>
                    
                    <input class="mb-3 w-100 p-2" type="email" id="email" name="email" placeholder="Email" required> <br>

                    <div class="mb-3 d-flex justify-content-between">
                        
                        <input class="w-50 mr-3 p-2" type="text" id="birthplace" name="birthplace" placeholder="Luogo di nascita" required>
                        
                        <input class="w-50 ms-3 p-2" type="date" id="birthday" name="birthday" placeholder="Compleanno" required> <br>

                    </div>

                    <div class="mb-3 d-flex justify-content-between">

                        <input class="w-50 mr-3 p-2" type="tel" id="phone" name="phone" placeholder="Numero di telefono">
                    
                        <input class="w-50 ms-3 p-2" type="text" id="company" name="company" placeholder="Compagnia"> <br>

                    </div>  
                    
                    <textarea class="mb-3 w-100 p-2" id="message" name="message" rows="4" placeholder="Messaggio" required></textarea> <br>
                    
                    <input class="mb-3 p-2" type="checkbox" id="privacy" name="privacy" required> 

                    <label class="mb-3 p-2" for="privacy">Accetto l'informativa sulla privacy</label> <br>
                    
                    <button class="w-25 border-0 bg-info text-white p-2" type="submit">SEND</button>
                </form>
            </div>

        </div>

    </div>

    <div class="footer">ciao</div>

    <script src="{{ asset('Youtube.js') }}"></script>

</body>

</html>
