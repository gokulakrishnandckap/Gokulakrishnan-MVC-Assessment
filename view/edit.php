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
<body>
    <h2>Edit page</h2>
    <div class="container">

  
<?php foreach($singledata as $users):?>
    <form action="/update" method="POST" enctype="multipart/form-data" class="filling">

            <div class="inp1">
                        <label for="">Name</label>
                        <input type="text" placeholder="product Name" name="product_name" class="inpname" value =<?php echo $users["name"]?>>
                    </div>
                    <div class="inp1">
                        <label for="">SKU</label>
                        <input type="text" placeholder="code" name="SKU" class="inp" value = <?php echo $users["sku"]?>>
                    </div>
                    <div class="inp1">
                        <label for="">Price</label>
                        <input type="number" name="price" placeholder="Price" class="inp"  value = <?php echo $users["price"]?>>
                    </div>
                    <div class="inp1">
                        <label for="">Brand</label>
                        <select name="brand" id="" >
                            <option> <?php echo $users["brand"]?></option>
                            <option>Apple</option>
                            <option>Del</option>
                            <option>HP</option>
                            <option>Thinkpad</option>
                            <option>Lenovo</option>
                        </select>
                    </div>
                    <div class="inp1">
                        <label for="">Product_image</label>
                        <input type="file" placeholder="image" class="image" name="image" ><img src=<?php echo $users["image"]?> class="img1" width=100px>
                    </div>
                    <button type="submit" class="btn" value = "<?=$users["id"];?>" name="update">Update</button>
            </form>
            <?php endforeach;?>

    </div>
</body>
</html>

