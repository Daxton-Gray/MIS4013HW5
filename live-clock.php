<?php
$pageTitle = "Home";
include "view-header.php";
?>
      
<body class="text-center p-5">
   <h1>Live Clock</h1>
      <p>Current Time: <span id="clock"></span></p>
      <script>startClock();</script>

      <script>
            function startClock() {
                  const clock = document.getElementById('clock');
                  setInterval(() => {
                        const now = new Date();
                        clock.innerText = now.toLocaleTimeString();
                  }, 1000);
            }
      </script>   
</body>


<?php
include "view-footer.php";
?>
