@extends('partials.nav')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farming Equipment</title>
    <!-- Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-white">

    <!-- Hero Section -->
    <header class="bg-cover bg-center h-screen text-white flex items-center justify-center" style="background-image: url('https://example.com/hero-image.jpg'); background-color: #4CAF50;">
        <div class="text-center">
            <h1 class="text-5xl font-bold">Welcome to Farming Equipments</h1>
            <p class="text-2xl mt-4">Find the best farming equipment for your needs</p>
            <a href="#buy" class="btn btn-lg btn-warning mt-8">Get Started</a>
        </div>
    </header>

    <!-- Buy Section -->
    <section id="buy" class="py-20 bg-light text-center">
        <div class="container">
            <h2 class="text-4xl font-bold text-success mb-8">Buy Farming Equipments</h2>
            <p class="mb-8">Explore our wide range of farming equipment available for purchase.</p>
            <a href="buyer/product.php" class="btn btn-primary btn-lg">Explore Products</a>
        </div>
    </section>

    <!-- Rent Section -->
    <section id="rent" class="py-20 text-center" style="background-color: #FFEB3B;">
        <div class="container">
            <h2 class="text-4xl font-bold text-dark mb-8">Rent Farming Equipments</h2>
            <p class="mb-8">Need equipment for a short period? Rent the best tools for your farm.</p>
            <a href="renter/rentform.php" class="btn btn-dark btn-lg">Explore Rental Options</a>
        </div>
    </section>
    <!-- Bootstrap JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
