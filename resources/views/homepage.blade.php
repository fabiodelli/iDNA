<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Il mio sito</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="homepage.css">
</head>

<body>

    @include('layout.header')

    @include('partials.top')

    @include('partials.slider', ['sliders' => $sliders])
    
    @include('partials.middle')

    @include('partials.bottom')

    @include('layout.footer')

</body>

</html>
