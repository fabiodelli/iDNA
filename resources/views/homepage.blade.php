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
    <img src="images/surfing.png" class="img-fluid position-absolute top-0 start-0 " alt="">

    @include('partials.header')

    @include('partials.jumbo')

    @include('partials.slider')

    <img src="images/photo.png" class="img-fluid background-middle" alt="">
    
    @include('partials.middle')

    @include('partials.bottom')

    @include('partials.footer')

</body>

</html>
