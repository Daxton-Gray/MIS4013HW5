<?php
$pageTitle = "Home";
include "view-header.php";
?>

<body>
    <h1 style="text-align: center;">Reusable Drag and Drop</h1>
    <p style="text-align: center;">Drag items into the box. You can drag them back out!</p>

    <!-- Draggable Items -->
    <div id="drag-items">
        <div class="drag-item" draggable="true" id="item1" ondragstart="drag(event)">Item 1</div>
        <div class="drag-item" draggable="true" id="item2" ondragstart="drag(event)">Item 2</div>
        <div class="drag-item" draggable="true" id="item3" ondragstart="drag(event)">Item 3</div>
    </div>

    <!-- Drop Area -->
    <div id="drop-area" ondragover="allowDrop(event)" ondrop="drop(event)" ondragenter="addHover(event)" ondragleave="removeHover(event)">
        Drop items here
    </div>

    <script>
        // Allow the drop event
        function allowDrop(event) {
            event.preventDefault();
        }

        // Handle the drag start
        function drag(event) {
            event.dataTransfer.setData("text", event.target.id);
        }

        // Handle the drop
        function drop(event) {
            event.preventDefault();

            const data = event.dataTransfer.getData("text");
            const draggedElement = document.getElementById(data);

            // Append the dragged item to the new parent
            event.target.appendChild(draggedElement);

            // Adjust styles to fit the new container
            draggedElement.classList.add('small');
            
            // Remove hover effect
            event.target.classList.remove('hover');
        }

        // Add hover effect
        function addHover(event) {
            event.target.classList.add('hover');
        }

        // Remove hover effect
        function removeHover(event) {
            event.target.classList.remove('hover');
        }
    </script>
</body>

<?php
include "view-footer.php";
?>
