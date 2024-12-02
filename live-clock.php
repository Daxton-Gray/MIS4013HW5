<?php
$pageTitle = "Clock";
include "view-header.php";
?>
      
<body>
    <div class="container">
        <h1>Countdown Timer</h1>
        <p>Enter the countdown time in seconds:</p>
        <input type="number" id="countdown-input" class="form-control" placeholder="Enter seconds" min="1">
        <button class="btn btn-primary" onclick="startCountdown()">Start Countdown</button>
        <div id="countdown-display">Time left: 0 seconds</div>
    </div>

    <script>
        let countdownInterval;

        function startCountdown() {
            clearInterval(countdownInterval);

            const input = document.getElementById('countdown-input');
            let time = parseInt(input.value);

            if (isNaN(time) || time <= 0) {
                alert("Please enter a valid positive number!");
                return;
            }

            const display = document.getElementById('countdown-display');

            countdownInterval = setInterval(() => {
                if (time <= 0) {
                    clearInterval(countdownInterval);
                    display.innerText = "Time's up!";
                } else {
                    display.innerText = `Time left: ${time} seconds`;
                    time--;
                }
            }, 1000);
        }
    </script>
</body>

<?php
include "view-footer.php";
?>
