<?php
$pageTitle = "Color Picker";
include "view-header.php";
?>

<body class="text-center p-5">
      <H1>Color Picker</H1>
      <input type="color" id="color-picker" class="form-control" onchange="changeBackgroundColor()">
      <div id="color-box" style="border: 1px solid #000; margin-top: 10px;"></div>

      <script>
      function changeBackgroundColor() {
          const color = document.getElementById('color-picker').value;
          document.getElementById('color-box').style.backgroundColor = color;
      }
      </script>
</body>

<?php
include "view-footer.php";
?>
