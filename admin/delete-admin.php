<?php
     


    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "food-order";
  

   
    
    $id = $_GET['id'];

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    $sql = "DELETE FROM tbl_admin WHERE id=$id";
    // Check connection
    $res = mysqli_query($conn, $sql);


    if($res==true)
    {
        //Query Executed Successully and Admin Deleted
        echo "Admin Deleted";
        //Create SEssion Variable to Display Message
        //$_SESSION['delete'] = "<div class='success'>Admin Deleted Successfully.</div>";
        //Redirect to Manage Admin Page
         //header('location:'.SITEURL.'admin/manage-admin.php');
        //header("location:admin/manage-admin.php");
    }
    else
    {
        //Failed to Delete Admin
        echo "Failed to Delete Admin";

        //$_SESSION['delete'] = "<div class='error'>Failed to Delete Admin. Try Again Later.</div>";
        //header('location:'.SITEURL.'admin/manage-admin.php');
        //header("location:admin/manage-admin.php");
    }

    //3. Redirect to Manage Admin page with message (success/error)

    
   

?>
