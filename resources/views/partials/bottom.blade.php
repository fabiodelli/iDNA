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

            <form action="{{ route('form') }}" method="post">
                @csrf
                
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