<?php
$pageTitle = "Light/Dark";
include "view-header.php";
?>

<body class="text-center p-5">
    <h1>Toggle Light/Dark Mode</h1>
    <p>Current Theme: <span id="theme-text">Light Mode</span></p>
    <button class="btn btn-primary mt-3" onclick="toggleTheme()">Toggle Theme</button>

    <script>
        function toggleTheme() {
            const body = document.body;
            body.classList.toggle('dark-mode');
            const themeText = document.getElementById('theme-text');
            themeText.innerText = body.classList.contains('dark-mode') ? "Dark Mode" : "Light Mode";
        }
    </script>
</body>
      
<?php
include "view-footer.php";
?>
