<?php
include('./config/database.php');

if(isset($_GET['deleteid'])){
    $code=$_GET['deleteid'];

    $sql="DELETE FROM `pos_product` WHERE P_code=$code";
    $result=mysqli_query($conn, $sql);

    if ($result) {
        header("Location: product.php?msg=Successfully Deleted");
      }else {
        echo "Failed: ". mysqli_error($conn);
      }
}
?>

