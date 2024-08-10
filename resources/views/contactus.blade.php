<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
@extends('partials.nav')
<body class="bg-light">
<section class="bg-white py-5">
    <div class="container py-5">
        <div class="text-center mb-5">
            <h2 class="display-4 font-weight-bold text-dark">Contact Us</h2>
            <p class="lead text-muted">
                Get in touch with us for any inquiries, support, or rental requests.
            </p>
        </div>
        <div class="mx-auto bg-white p-4 rounded-lg shadow-sm" style="max-width: 600px;">
            <form action="{{ route('contact.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name" class="font-weight-bold">Your Name</label>
                    <input type="text" id="name" name="name" required
                        class="form-control" placeholder="Enter your name">
                </div>
                <div class="form-group">
                    <label for="email" class="font-weight-bold">Your Email</label>
                    <input type="email" id="email" name="email" required
                        class="form-control" placeholder="Enter your email">
                </div>
                <div class="form-group">
                    <label for="phone" class="font-weight-bold">Phone Number</label>
                    <input type="tel" id="phone" name="phone" 
                        class="form-control" placeholder="Enter your phone number">
                </div>
                <div class="form-group">
                    <label for="message" class="font-weight-bold">Your Message</label>
                    <textarea id="message" name="message" rows="5" required
                        class="form-control" placeholder="Enter your message"></textarea>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-success btn-lg">
                        Send Message
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
