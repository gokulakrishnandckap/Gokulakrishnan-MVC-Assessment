<?php

require "connection.php";

class UserModel extends Database{
   

    public function create($data) {

            $name = $data["product_name"];
            $sku = $data["SKU"];
            $price = $data["price"];

            // if (preg_match("/^[0-9]+(\.[0-9]{2})?$/", $price)) {
            //    echo "here";  
            // }
            $brand = $data["brand"];
            $Manufacture_date = $data["Manufacture_date"];
            $Available_stocks = $data["Available_stocks"];


            $fileName = $_FILES['image']['name'];
         
            $fileTmpName = $_FILES['image']['tmp_name'];
            $folder = "images/".$fileName;
            move_uploaded_file($fileTmpName,$folder);

            $statement = $this->db->prepare("INSERT INTO products(name,image,sku,price,brand,manufacture_date,available_stock) VALUES('$name','$folder','$sku','$price','$brand','$Manufacture_date','$Available_stocks')");
            $statement->execute();

            header("location:/list");

    }

    public function getAllUsers() {

        $statement = $this->db->prepare("select * from products");
        $statement->execute();
        $users=$statement->fetchAll();
        return $users;
        
    
    }
    public function edit($id) {
        $statement = $this->db->prepare("SELECT *  from products where id =".$id);
        $statement->execute();
        $SingleData=$statement->fetchAll();
        return $SingleData;
        
    }

    public function update($id,$data,$file) {
        $name = $data["product_name"];
        $sku = $data["SKU"];
        $price = $data["price"];
        $brand = $data["brand"];


      if($file['image']['name'] == ""){
        $statement = $this->db->prepare("UPDATE products SET name ='$name',sku='$sku',price='$price',brand='$brand' where id =".$id);
        $statement->execute();
        header("location:/list");

      }
      else
      {
        // $statement = $this->db->prepare("SELECT image  from items where id =".$id);
        // $statement->execute();
        // $SingleDatas=$statement->fetchAll();
        // unlink($SingleDatas[0]['image']);



        $fileName = $_FILES['image']['name'];
         
        $fileTmpName = $_FILES['image']['tmp_name'];
        $folder = "images/".$fileName;
        move_uploaded_file($fileTmpName,$folder);

        $statement = $this->db->prepare("UPDATE products SET name ='$name',image='$folder',sku='$sku',price='$price',brand='$brand',available_stock='$Available_stocks' where id =".$id);
        $statement->execute();
        header("location:/list");

      }

    }

    public function delete($id) {
        // $statement = $this->db->prepare("SELECT image  from items where id =".$id);
        // $statement->execute();
        // $SingleDatas=$statement->fetchAll();
        // unlink($SingleDatas[0]['image']);
        $statement = $this->db->prepare("DELETE from products where id =".$id);
        $statement->execute();
        header("location:/list");
        // Perform database delete operation based on $id
    }

}