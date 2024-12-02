<?php
$pageTitle = "Quotes";
include "view-header.php";
?>
      
<body class="text-center p-5">
   <h1>Random Quote</h1>
      <p id="quote-display">Click the button for a random quote!</p>
      <button class="btn btn-warning" onclick="generateRandomQuote()">Get Quote</button>

      <script>
            function generateRandomQuote() {
                const quotes = [
                  "The best way to predict the future is to create it.",
                  "Success is not the key to happiness. Happiness is the key to success.",
                  "Do what you can with what you have where you are.",
                  "The only limit to our realization of tomorrow is our doubts of today.",
                  "Defining and analyzing humor is a pastime of humorless people.",
                  "The most important thing in communication is to hear what isn't being said."
                ];
                const randomIndex = Math.floor(Math.random() * quotes.length);
                document.getElementById('quote-display').innerText = quotes[randomIndex];
            }
      </script>   
</body>


<?php
include "view-footer.php";
?>
