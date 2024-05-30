<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تحت الانشاء</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            background-color: black;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            text-align: center;
            padding: 2rem;
        }

        .spinner-border {
            width: 3rem;
            height: 3rem;
            margin-bottom: 1rem;
        }

        .spinner-border.custom-animation {
            animation: spin 3s linear infinite;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        @media (max-width: 767px) {
            .spinner-border {
                width: 2.5rem;
                height: 2.5rem;
            }

            .display-4 {
                font-size: 1.8rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="spinner-border custom-animation text-yellow-500 " role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
        <h1 class="display-4 text-yellow-500 ">Website Under Construction</h1>
        <div class="mt-8">
            <a href="{{ url('/admin') }}" class="bg-yellow-500 text-black font-bold py-2 px-4 rounded">
                Go to Admin
            </a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLeSaAA55NdzOxhy9GkcIdslK1eHn7nK6x7" crossorigin="anonymous"></script>
</body>
</html>