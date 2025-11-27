<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luxe Stay Admin</title>
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body>

    <!-- SIDEBAR -->
    <x-sidebar></x-sidebar>

    <!-- CONTENT -->
    <div class="content">
        {{ $slot }}
    </div>


</body>
</html>
