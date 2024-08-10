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
    </style>
</head>
@extends('partials.nav')
<body>
    <div class="container my-5">
        <div class="row">
            <!-- Card 1 -->
            <div class="col-md-4 mb-4">
                <div class="card p-3">
                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Card Image">
                    <div class="card-body">
                        <h5 class="card-title">Rs 200 1</h5>
                        <p class="card-text">Some quick example text to build on the Rs 200 and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Update</a>
                    </div>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="col-md-4 mb-4">
                <div class="card p-3">
                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Card Image">
                    <div class="card-body">
                        <h5 class="card-title">Rs 200 2</h5>
                        <p class="card-text">Some quick example text to build on the Rs 200 and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Update</a>
                    </div>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="col-md-4 mb-4">
                <div class="card p-3">
                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Card Image">
                    <div class="card-body">
                        <h5 class="card-title">Rs 200</h5>
                        <p class="card-text">Some quick example text to build on the Rs 200 and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Update</a>
                    </div>
                </div>
            </div>
            <!-- Add more cards as needed -->
        </div>
    </div>
    
    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
