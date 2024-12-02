<?php
$pageTitle = "Home";
include "view-header.php";
?>
      
<h1>Random Quote</h1>
<p id="quote-display">Click the button for a random quote!</p>
<button class="btn btn-warning" onclick="generateRandomQuote()">Get Quote</button>

<script>
      function generateRandomQuote() {
          const quotes = [
              "The best way to predict the future is to create it.",
              "Success is not the key to happiness. Happiness is the key to success.",
              "Do what you can with what you have where you are.",
              "The only limit to our realization of tomorrow is our doubts of today."
          ];
          const randomIndex = Math.floor(Math.random() * quotes.length);
          document.getElementById('quote-display').innerText = quotes[randomIndex];
      }

</script>

<?php
include "view-footer.php";
?>
