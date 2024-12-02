<?php
$pageTitle = "Home";
include "view-header.php";
?>

<body>
      <div id="drag-item" draggable="true" ondragstart="drag(event)" style="width: 100px; height: 100px; background: red;"></div>
      <div ondrop="drop(event)" ondragover="allowDrop(event)" style="width: 200px; height: 200px; border: 1px dashed #000; margin-top: 20px;"></div>

      <script>
      function allowDrop(event) {
          event.preventDefault();
      }

      function drag(event) {
          event.dataTransfer.setData("text", event.target.id);
      }

      function drop(event) {
          event.preventDefault();
          const data = event.dataTransfer.getData("text");
          event.target.appendChild(document.getElementById(data));
      }

      </script>
</body>

<?php
include "view-footer.php";
?>
