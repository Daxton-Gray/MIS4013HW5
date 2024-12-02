<?php
$pageTitle = "Home";
include "view-header.php";
?>
      
      <h1>Page 1</h1>

<button onclick="toggleTheme()">Toggle Theme</button>

function toggleTheme() {
    const body = document.body;
    body.classList.toggle('dark-mode');
    const themeText = document.getElementById('theme-text');
    themeText.innerText = body.classList.contains('dark-mode') ? "Dark Mode" : "Light Mode";
}
      
<?php
include "view-footer.php";
?>
