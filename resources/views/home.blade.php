@extends('layouts.main')

@section('container')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang Di Faris GunShop</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f8f8;
            margin: 0;
            padding: 0;
            text-align: center;
            color: #333;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 1rem;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            margin-top: 20px;
            max-width: 400px; /* Set a specific width for the image */
        }
    </style>
</head>
<body>

    <header>
        <h1>Selamat Datang Di Faris GunShop </h1>
    </header>

    <div class="container">
        <img src="{{('image/man and gun.jpeg') }}" alt="Image">
    </div>

</body>
</html>

@endsection