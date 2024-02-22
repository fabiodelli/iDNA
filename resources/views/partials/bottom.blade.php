<div class="contact_us">CONTACT US</div>

<div class="container-fluid d-flex justify-content-around">

    <div class="bottom_container d-flex justify-content-evenly">

        <div class="bottom_left d-flex flex-column align-items-center">

            <img class="w-100" src="images/bottom-img.png" alt="">

            <div class="bg-white w-100 d-flex align-items-center p-3">

                <span class="pe-2">
                    <img src="images/instagram.png" alt="">
                </span>

                <span class="fs-4 text-info me-2">Follow Us</span>

                <span>@Surfersco</span>

            </div>

        </div>

        <div class="bottom_right">

            <form id="formDati">
                @csrf
                <!-- Campo nome utente -->
                <input class="mb-3 p-2 w-100" type="text" id="name" name="name" placeholder="Nome" required>
                <br>

                <!-- Campo email con validazione -->
                <input class="mb-3 w-100 p-2" type="email" id="email" name="email" placeholder="Email" <br>


                <div class="mb-3 d-flex justify-content-between">
                    <!-- Campo luogo di nascita -->
                    <input class="w-50 mr-3 p-2" type="text" id="birthplace" name="birthplace"
                        placeholder="Luogo di nascita" required> <br>

                    <!-- Campo data di nascita -->
                    <input class="w-50 ms-3 p-2" type="date" id="birthday" name="birthday"
                        placeholder="Giorno di nascita" required> <br>
                </div>

                <div class="mb-3 d-flex justify-content-between">
                    <!-- Campo numero di telefono con validazione -->
                    <input class="w-50 mr-3 p-2" type="tel" id="phone" name="phone"
                        placeholder="Numero di telefono">


                    <!-- Campo compagnia -->
                    <input class="w-50 ms-3 p-2" type="text" id="company" name="company" placeholder="Compagnia">
                    <br>
                </div>

                <!-- Campo messaggio -->
                <textarea class="mb-3 w-100 p-2" id="message" name="message" rows="4" placeholder="Messaggio" required></textarea> <br>

                <!-- Accettazione privacy -->
                <input class="mb-3 p-2" type="checkbox" id="privacy" name="privacy" required>
                <label class="mb-3 p-2" for="privacy">Accetto l'informativa sulla privacy</label> <br>

                <!-- Pulsante di invio -->
                <button class="w-25 border-0 bg-info text-white p-2" type="submit">INVIA</button>
            </form>


        </div>

    </div>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
    $(document).ready(function() {
        $('#formDati').on('submit', function(e) {
            e.preventDefault(); // Blocca il submit tradizionale del form

            // Controlla la validità del form prima dell'invio
            if (validateForm()) {
                // Invio dati form via AJAX se valido
                $.ajax({
                    type: "POST",
                    url: "/salva-dati",
                    data: $(this).serialize(),
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        alert('Dati inviati con successo!');
                    },
                    error: function(xhr, status, error) {
                        alert('Errore nell\'invio dati');
                    }
                });
            } else {
                // Gestione errore validazione
                alert('Errore nei dati inseriti.');
            }
        });
    });

    function validateForm() {
        let isValid = true;

        // Validazione email
        const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

        const email = $('#email').val();
        if (!emailPattern.test(email)) {
            alert('Indirizzo email non valido.');
            isValid = false;
        }

        // Validazione numero di telefono
        const phonePattern = /^\+?[0-9]{1,3}?[-. ]?[0-9]{2,3}?[-. ]?[0-9]{4,6}$/;

        const phoneNumber = $('#phone').val();
        if (phoneNumber && !phonePattern.test(phoneNumber)) {
            alert('Numero di telefono non valido.');
            isValid = false;
        }

        return isValid;
    }
</script>
