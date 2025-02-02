<?php
if (isset($_GET['input'])) {
    $name = $_GET['input'];  // No sanitization = Vulnerable to XSS
} else {
    $name = "Guest";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Vulnerable Reflected XSS Lab</title>
</head>
<body>
    <h2>Welcome, <?php echo $name; ?>!</h2>  <!-- Vulnerable to XSS -->
    <p>Try visiting: <code>?name=&lt;script&gt;alert('XSS')&lt;/script&gt;</code></p>
</body>
</html>
