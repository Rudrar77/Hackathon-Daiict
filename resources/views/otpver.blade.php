<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTP Verification</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Include Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Custom CSS for additional styling */
        body {
            background-image: url('images/farmer.jpeg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            margin: 0;
            padding: 0;
            font-family: 'Montserrat', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .otp-input {
            width: 3rem;
            height: 3rem;
            text-align: center;
            font-size: 1.5rem;
            border-radius: 0.5rem;
            border: 1px solid #ccc;
            margin: 0 0.5rem;
        }

        .otp-input:focus {
            outline: none;
            border-color: #6366f1;
            box-shadow: 0 0 5px rgba(99, 102, 241, 0.5);
        }

        .resend-link {
            color: #6366f1;
            font-weight: 500;
            cursor: pointer;
            transition: color 0.3s;
        }

        .resend-link:hover {
            color: #4f46e5;
        }
    </style>
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="bg-white p-8 rounded-lg shadow-lg max-w-md w-full">
        <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">OTP Verification</h2>
        <p class="text-center text-gray-600 mb-4">Enter the OTP sent to your registered mobile number</p>

        <form action="#" method="POST" class="text-center">
            <div class="flex justify-center mb-6">
                <input type="text" maxlength="1" class="otp-input" />
                <input type="text" maxlength="1" class="otp-input" />
                <input type="text" maxlength="1" class="otp-input" />
                <input type="text" maxlength="1" class="otp-input" />
            </div>

            <button type="submit" class="w-full bg-indigo-600 text-white py-2 rounded-md shadow-md hover:bg-indigo-500 transition">
                Verify OTP
            </button>

            <p class="mt-4 text-gray-600">Didn't receive the code? 
                <span class="resend-link">Resend OTP</span>
            </p>
        </form>
    </div>

    <!-- Include Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
