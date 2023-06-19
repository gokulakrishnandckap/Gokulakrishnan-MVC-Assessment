<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="view/style.css" rel="stylesheet">
</head>
<body class="main">
<h2>Create Products</h2>
    <div class="container">

  
        <form action="/store" method="POST" enctype="multipart/form-data" class="filling">
            <div class="inp1">
                <label for="">Name</label>
                <input type="text" placeholder="product Name" class="inpname" name="product_name">
            </div>
            <div class="inp1">
                <label for="">SKU</label>
                <input type="text" placeholder="code" name="SKU" class="inp" required>
            </div>
            <div class="inp1">
                <label for="">Price</label>
                <input type="number" name="price" placeholder="Price" class="inp" required >
            </div>
            <div class="inp1">
                <label for="">Brand</label>
                <select name="brand" id="">
                    <option>none</option>
                    <option>Apple</option>
                    <option>Dell</option>
                    <option>HP</option>
                    <option>Thinkpad</option>
                    <option>Lenovo</option>
                </select>
            </div>
            <div class="inp1">
                <label for="">Image</label>
                <input type="file" placeholder="image" name="image" class="images" required>
            </div>
            <div class="inp1">
                 
                <label for="">Manufacture Date</label>
                <input type="date"  name="Manufacture_date" min="<?php echo date("Y-m-d"); ?>"  class="manufacture">
            </div>
            <div class="inp1">
                <label for="">Available Stock</label>
                <input type="number" placeholder="Available Stock" class="avail" name="Available_stocks">
            </div>
            <button type="submit" class="btn">Submit</button>
        </form>

    </div>
</body>
</html>

