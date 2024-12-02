<?php
$pageTitle = "Clock";
include "view-header.php";
?>
      
<body class="text-center p-5">
      <H>Countdown Timer</H>
      <input type="number" id="countdown-time" class="form-control" placeholder="Enter seconds">
      <button class="btn btn-danger mt-2" onclick="startCountdown()">Start Countdown</button>
      <p id="countdown-timer"></p>

      <script>
      function startCountdown() {
          let time = parseInt(document.getElementById('countdown-time').value);
          const timer = document.getElementById('countdown-timer');
          const interval = setInterval(() => {
              if (time <= 0) {
                  clearInterval(interval);
                  timer.innerText = "Time's up!";
              } else {
                  timer.innerText = `Time left: ${time--} seconds`;
              }
          }, 1000);
      }
      </script>
</body>


<?php
include "view-footer.php";
?>
