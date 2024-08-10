<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card View Example</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .card {
            border: 1px solid #ddd;
            border-radius: 0.5rem;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .card-img-top {
            height: 200px; /* Adjust height as needed */
            object-fit: cover; /* Ensure images cover the area without distortion */
        }
        .card-body {
            text-align: center;
        }
    </style>
</head>
@extends('partials.nav')
<body>
    <div class="container my-5">
        <div class="row">
            <!-- Loop through the data -->
            @foreach($buydata as $buydataa)
                @if($loop->index % 3 == 0 && $loop->index != 0)
                    </div><div class="row">
                @endif
                <div class="col-md-4 mb-4">
                    <div class="card p-3">
                        <img src="{{ asset('storage/' . $buydataa->photo_path) }}" class="card-img-top" alt="Card Image">
                        <div class="card-body">
                            <h5 class="card-title">Rs. {{$buydataa->rental_price}}</h5>
                            <p class="card-text">{{$buydataa->description}}</p>
                            <a href="#" class="btn btn-success">Rent</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    
    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
