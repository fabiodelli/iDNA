@component('mail::message')
# Nuova Sottomissione Form

Hai ricevuto una nuova sottomissione form.

**Nome:** {{ $data['name'] }}

**Email:** {{ $data['email'] }}

**Luogo di nascita:** {{ $data['birthplace'] }}

**Data di nascita:** {{ $data['birthday'] }}

@if(!empty($data['phone']))
**Telefono:** {{ $data['phone'] }}
@endif

@if(!empty($data['company']))
**Compagnia:** {{ $data['company'] }}
@endif

@if(!empty($data['message']))
**Messaggio:** {{ $data['message'] }}
@endif

@component('mail::button', ['url' => 'https://www.esempio.com'])
Visita il Sito
@endcomponent

Grazie,<br>
{{ config('app.name') }}
@endcomponent
