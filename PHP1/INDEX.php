
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <H1>Final price calculator </H1>
        <form action="calculate.php" method="POST">  
            <label for="price">Original Price</label>     <!-- name is important in php -->
            <input type="number" id ="price" name="price" required><br>

            <label for="discount">Discount Amount </label>
            <input type="number" id ="discount" name="discount" required><br>

            <label for="tax">Tax Rate</label>
            <input type="number" id ="tax" name="tax" required><br>
            <button type="submit">calculate </button>

        </form>
    </div>
    
</body>
</html>