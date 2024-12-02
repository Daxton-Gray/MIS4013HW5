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

      #drag-items {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
            justify-content: center;
        }

        .drag-item {
            width: 100px;
            height: 100px;
            background-color: red;
            text-align: center;
            line-height: 100px;
            color: white;
            font-weight: bold;
            cursor: grab;
        }

        #drop-area {
            width: 200px;
            height: 200px;
            border: 2px dashed #000;
            margin: 20px auto;
            text-align: center;
            line-height: 200px;
            color: #666;
            font-size: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
            gap: 10px;
        }

        .drag-item.small {
            width: 80px;
            height: 80px;
            line-height: 80px;
            font-size: 14px;
        }

        #drop-area.hover {
            border-color: green;
            color: green;
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
                <a class="nav-link" href="page4.php">Page 4</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="page5.php">Page 5</a>
              </li>
              
            </ul>
          </div>
        </div>
      </nav>
