<?php
$pageTitle = "Home";
include "view-header.php";
?>

<body class="text-center p-5">
    <h1>Drag and Drop Box</h1>
    <p>Drag items into the box. You can drag them back out!</p>

    <div id="drag-items">
        <div class="drag-item" draggable="true" id="item1" ondragstart="drag(event)">Item 1</div>
        <div class="drag-item" draggable="true" id="item2" ondragstart="drag(event)">Item 2</div>
        <div class="drag-item" draggable="true" id="item3" ondragstart="drag(event)">Item 3</div>
    </div>

    <div id="drop-area" ondragover="allowDrop(event)" ondrop="drop(event)" ondragenter="addHover(event)" ondragleave="removeHover(event)">
        Drop items here
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

            draggedElement.classList.add('small');
            
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
