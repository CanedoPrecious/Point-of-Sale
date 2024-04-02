
<?php
include('./config/database.php');

if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    $sql="DELETE FROM `pos_categori` WHERE c_id=$id";
    $result=mysqli_query($conn, $sql);

    if ($result) {
        header("Location: category.php?msg=Successfully Deleted");
      }else {
        echo "Failed: ". mysqli_error($conn);
      }
}
?>