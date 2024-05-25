<!DOCTYPE html>
<html>
<head>
     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تحت الانشاء</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: rgb(198, 198, 146);
        }
      
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .spinner-border {
            width: 5rem;
            height: 5rem;
        }

        .spinner-border.custom-animation {
            animation: spin 3s linear infinite;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>
</head>
<body>
   
    <div class="container">
       <div class="row"></div>
        <div class="spinner-border custom-animation text-primary" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
        <h1 class="display-4 text-primary px-4">Website Under Construction</h1>
       
    </div>
    
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLeSaAA55NdzOxhy9GkcIdslK1eHn7nK6x7" crossorigin="anonymous"></script>
</body>
</html>