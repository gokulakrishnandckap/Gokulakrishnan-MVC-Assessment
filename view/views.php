<!DOCTYPE html>
<html lang="en">
<head>
    <title>cal</title>
    <link href="view/style.css" rel="stylesheet">
</head>
<body>
<table>
    <tr>
        <th colspan="8"> Product Details</th>
    </tr>
     <tr>
         <th rowspan>id</th>
         <th>Name</th>
         <th>image</th>
         <th>SKU</th>
         <th>price</th>
         <th>Brand</th>
         <th>Actions</th>
     </tr>

    <?php foreach($user as $key=>$users):?>
        <?php if($users["available_stock"] < 10){ ?>
            <tr style="background-color:yellow;">
            <td><?php echo $key+1?></td>
            <td><?php echo $users["name"]?></td>
            <td><img src=<?php echo $users["image"]?> width="75px" height="75px"></td>
            <td><?php echo $users["sku"]?></td>
            <td> ₹<?php echo $users["price"]?></td>
            <td><?php echo $users["brand"]?></td>

            <td>
                <form method="post" action="/edit">
                <button type="submit" value="<?=$users["id"];?>" class="edit" name="edit">Edit</button>
                </form><br>
                <form method="post" action="/delete">
                <button type="submit" value="<?=$users["id"];?>" name="delete" class="delete" class="del">Delete</button>
                </form>
            </td>
        </tr> 
        <?php }
        else{ ?>
            <tr>
            <td><?php echo $key+1?></td>
            <td><?php echo $users["name"]?></td>
            <td><img src=<?php echo $users["image"]?> width="75px" height="75px"></td>
            <td><?php echo $users["sku"]?></td>
            <td>₹<?php echo $users["price"]?></td>
            <td><?php echo $users["brand"]?></td>

            <td>
                <form method="post" action="/edit">
                <button type="submit" value="<?=$users["id"];?>" class="edit" name="edit">Edit</button>
                </form><br>
                <form method="post" action="/delete">
                <button type="submit" value="<?=$users["id"];?>" name="delete" class="delete" class="del">Delete</button>
                </form>
            </td>
        </tr>
        <?php } ?>
      
     <?php endforeach;?>
 </table>

        <a href="/">Back</a>
</body>
</html>
