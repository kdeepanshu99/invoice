<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Form</title>
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <meta name="description" content="" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>
  <div class="container">
    <form method="post" action="invoice.php">
        <input type="text" name="name" id="name" placeholder="Name of the buyer">
        <input type="text" name="product" id="product" placeholder="Name of the product">
        <input type="text" name="price" id="price" placeholder="Price">
        <button type="submit" name="submit">Generate</button>
    </form>
  </div>
</body>
</html>
