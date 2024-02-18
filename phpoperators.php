<!DOCTYPE html>
<html>
<head>
    <title>Convert Minutes to Hours and Minutes</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Convert Minutes to Hours and Minutes</h1>
    <form method="post">
        <label for="minutes">Enter total minutes:</label>
        <input type="number" id="minutes" name="minutes" required>
        <button type="submit">Convert</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $totalMinutes = $_POST["minutes"];
        $hours = (int)($totalMinutes / 60);
        $remainingMinutes = $totalMinutes % 60;
        echo "<p>$totalMinutes minutes is equal to $hours hours and $remainingMinutes minutes.</p>";
    }
    ?>
</body>
</html>
