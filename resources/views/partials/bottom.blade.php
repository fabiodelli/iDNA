<div class="container-fluid d-flex justify-content-around">

    <div class="bottom_container d-flex justify-content-evenly">

        <div class="w-50 d-flex flex-column align-items-center">

            <img class="w-100" src="images/bottom-img.png" alt="">

            <div class="bg-white w-100 d-flex align-items-center p-3">

                <span class="pe-2">
                    <img src="images/instagram.png" alt="">
                </span>

                <span class="fs-4 text-info me-2">Follow Us</span>

                <span>@Surfersco</span>

            </div>

        </div>

        <div class="w-50 ps-5 ">

            <form id="formDati">
                <!-- Token CSRF per la sicurezza (dipende dal framework backend) -->
                @csrf

                <!-- Nome: Campo obbligatorio -->
                <input class="mb-3 p-2 w-100" type="text" id="name" name="name" placeholder="Nome" required>
                <br>

                <!-- Email: Campo obbligatorio con validazione formato email -->
                <input class="mb-3 w-100 p-2" type="email" id="email" name="email" placeholder="Email" required
                    pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"> <br>

                <div class="mb-3 d-flex justify-content-between">
                    <!-- Luogo di Nascita: Campo obbligatorio -->
                    <input class="w-50 mr-3 p-2" type="text" id="birthplace" name="birthplace"
                        placeholder="Luogo di nascita" required> <br>

                    <!-- Data di Nascita: Campo obbligatorio -->
                    <input class="w-50 ms-3 p-2" type="date" id="birthday" name="birthday"
                        placeholder="giorno di nascita" required> <br>

                </div>

                <div class="mb-3 d-flex justify-content-between">
                    <!-- Luogo di Nascita: Campo obbligatorio -->
                    <!-- Numero di Telefono: Validazione opzionale con regex per formati internazionali -->
                    <input class="w-50 mr-3 p-2" type="tel" id="phone" name="phone"
                        placeholder="Numero di telefono" pattern="\+?[0-9]{1,3}?[-. ]?[0-9]{2,3}?[-. ]?[0-9]{4,6}"> <br>

                    <!-- Compagnia: Campo non obbligatorio, nessuna validazione specifica -->
                    <input class="w-50 ms-3 p-2" type="text" id="company" name="company" placeholder="Compagnia">
                    <br>

                </div>

                <!-- Messaggio: Campo obbligatorio -->
                <textarea class="mb-3 w-100 p-2" id="message" name="message" rows="4" placeholder="Messaggio" required></textarea> <br>

                <!-- Privacy: Checkbox obbligatorio -->
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
        // Attiva la validazione al blur
        $('#formDati input, #formDati textarea').blur(function() {
            validateField(this);
        });

        $('#formDati').submit(function(e) {
            e.preventDefault();
            let isFormValid = true;

            // Valida tutti i campi al submit
            $('#formDati input, #formDati textarea').each(function() {
                isFormValid = validateField(this) && isFormValid;
            });

            if (isFormValid) {
                // Se la validazione passa, esegui la chiamata AJAX
                $.ajax({
                    type: "POST",
                    url: "{{ route('form.salvaDati') }}",
                    data: $(this).serialize(),
                    success: function(response) {
                        alert('Dati inviati con successo!');
                    },
                    error: function(xhr, status, error) {
                        alert('Si è verificato un errore: ' + error);
                    }
                });
            } else {
                // Mostra un messaggio generico o esegui altre azioni se la validazione fallisce
                console.log('Si prega di correggere gli errori nel form prima di inviarlo.');
            }
        });
    });


    function validateField(element) {
        let isValid = true;
        const $element = $(element);
        const errorMessage = "Questo campo è obbligatorio"; // Messaggio generico, personalizza per ogni validazione

        // Rimuovi precedenti tooltip di errore
        $element.removeClass('error').next('.error-tooltip').remove();

        // Esempio di validazione
        if ($element.val().trim() === '') {
            // Aggiungi la classe di errore all'input
            $element.addClass('error');

            // Crea e aggiungi il tooltip di errore
            const $errorTooltip = $(`<div class="error-tooltip">${errorMessage}</div>`);
            $element.after($errorTooltip);

            isValid = false;
        }

        return isValid;
    }
</script>
