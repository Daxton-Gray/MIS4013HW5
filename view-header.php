<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$pageTitle?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      body.dark-mode {
          background-color: #121212;
          color: white;
      }

      body {
          font-family: Arial, sans-serif;
          background-color: white;
          color: black;
          transition: background-color 0.3s, color 0.3s;
      }

      #countdown-display {
            font-size: 2em;
            font-weight: bold;
            margin: 20px 0;
        }

      #color-box {
            width: 150px;
            height: 150px;
            border: 2px solid #000;
            margin-top: 20px;
            text-align: center;
            background-color: #000;
        }

      .hover-effect {
        transition: transform 0.3s ease-in-out;
    }

    .hover-effect:hover {
        transform: scale(1.2);
    }
    </style>
  </head>
  
  <body>
    <div class="container">
      <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          
          <a class="navbar-brand" href="#">Navbar</a>
          
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">Home</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="light-dark.php">Light/Dark Mode</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="random-quote.php">Random Quote</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="timer.php">Timer</a>
              </li> 
              
              <li class="nav-item">
                <a class="nav-link" href="color-picker.php">Color Picker</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="image-zoom.php">Image Zoom</a>
              </li>
              
            </ul>
          </div>
        </div>
      </nav>
