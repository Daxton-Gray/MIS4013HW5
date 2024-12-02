<?php
$pageTitle = "Home";
include "view-header.php";
?>

<body class="text-center p-5">
    <h1>Drag and Drop</h1>
    <p>Drag the red box into the dashed drop area.</p>
    
    <div id="drag-item" draggable="true" ondragstart="drag(event)">Drag Me</div>
    
    <div id="drop-area" ondragover="allowDrop(event)" ondrop="drop(event)" ondragenter="addHover(event)" ondragleave="removeHover(event)">
        Drop Here
    </div>

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
            const draggedElement = document.getElementById(data);
            event.target.appendChild(draggedElement);

            event.target.classList.remove('hover');
        }

        function addHover(event) {
            event.target.classList.add('hover');
        }

        function removeHover(event) {
            event.target.classList.remove('hover');
        }
    </script>
</body>

<?php
include "view-footer.php";
?>
