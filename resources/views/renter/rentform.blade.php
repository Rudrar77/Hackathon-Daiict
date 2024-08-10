<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equipment Rental Form</title>
    <!-- Bootstrap CSS CDN -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f9fafb;
            font-family: 'Arial', sans-serif;
            background-image: url('../pictures/farmer.jpeg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
        }
        .container {
            background-color: #ffffff;
            padding: 2rem;
            border-radius: 0.5rem;
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
            max-width: 700px;
        }
        .form-group label {
            font-weight: 600;
            color: #4a5568;
        }
        .form-control {
            border-radius: 0.375rem;
            border: 1px solid #cbd5e0;
            padding: 0.5rem 1rem;
        }
        .form-control:focus {
            border-color: #4299e1;
            box-shadow: 0 0 0 0.2rem rgba(66, 153, 225, 0.25);
        }
        .btn-primary {
            background-color: #4299e1;
            border: none;
            padding: 0.75rem 1.5rem;
            border-radius: 0.375rem;
            transition: background-color 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #3182ce;
        }
        .card {
            border-radius: 0.75rem;
            border: none;
        }
        .card-header {
            background-color: #4299e1;
            color: white;
            border-radius: 0.75rem 0.75rem 0 0;
        }
        .card-body {
            padding: 2rem;
        }
    </style>
</head>
<body>
@extends('partials.nav')
    <div class="container mt-5">
        <div class="card">
            <div class="card-header text-center">
                <h2 class="mb-0">Equipment Rental Form</h2>
            </div>
            <div class="card-body">
            <form id="rentalForm" action="{{ route('equipment.store') }}" method="post" enctype="multipart/form-data">
            @csrf
                    <div class="form-group">
                        <label for="equipmentName">Equipment Name</label>
                        <input type="text" class="form-control" name="equipmentName" id="equipmentName" placeholder="Enter equipment name" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" name="description" id="description" rows="4" placeholder="Describe the equipment" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="equipment-photo">Equipment Photo</label>
                        <input type="file" class="form-control" name="equipment-photo" id="equipment-photo" accept="image/jpeg" required>
                    </div>
                    <div class="form-group">
                        <label for="rentalPrice">Rental Price (per day)</label>
                        <input type="number" class="form-control" name="rentalPrice" id="rentalPrice" placeholder="Enter rental price" required>
                    </div>
                    <div class="form-group">
                        <label for="availability">Availability</label>
                        <input type="text" class="form-control" name="availability" id="availability" placeholder="Enter availability (e.g., dates or 'always')" required>
                    </div>
                    <div class="form-group">
                        <label for="contactInfo">Contact Information</label>
                        <input type="text" class="form-control" name="contactInfo" id="contactInfo" placeholder="Enter your contact information" required>
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS CDN -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>