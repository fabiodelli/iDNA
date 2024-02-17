import axios from 'axios';


$(document).ready(function() {
    $('#formDati').submit(function(e) {
        e.preventDefault(); // Previene il comportamento di default del form

        $.ajax({
            type: "POST",
            url: "{{ route('form') }}", // URL a cui inviare i dati del form
            data: $(this).serialize(), // Serializza i valori del form
            success: function(response) {
                // Azioni da eseguire in caso di successo (ad esempio, mostrare un messaggio di conferma)
                alert('Dati inviati con successo!');
            },
            error: function(xhr, status, error) {
                // Gestisci qui eventuali errori
                alert('Si è verificato un errore nell\'invio dei dati');
            }
        });
    });
});