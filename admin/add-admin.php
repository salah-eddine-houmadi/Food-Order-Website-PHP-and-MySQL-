<?php include("partials/menu.php"); ?>
<style>
  
            .btn-secondary{
                background-color:#7bed9f;
                padding: 1%;
                color:#000;
                text-decoration:none;
                font-weight:bold;
            }
            .btn-secondary:hover{
                background-color:#7bed9f;
            }
    

       </style>



        <div class="main-content">
                    <div class="wrapper">
                        <h1>ADD Admin</h1>

                        <?php 
                            if(isset($_SESSION['add'])) //Checking whether the SEssion is Set of Not
                            {
                                echo $_SESSION['add']; //Display the SEssion Message if SEt
                                unset($_SESSION['add']); //Remove Session Message
                            }
                        ?>
                        
                        <br />
                        <br />
                        <br />

                        <form class="" method="POST">
                             <table class="tbl-30">
                                 <tr>
                                     <td>Full Name:</td>
                                     <td><input type="text" name="Full_Name" placeholder="enter your Name"></td>
                                </tr>
                                <tr>
                                     <td>Username:</td>
                                     <td><input type="text" name="Username" placeholder="enter your Username"></td>
                                </tr>
                                <tr>
                                     <td>Password:</td>
                                     <td><input type="Password" name="Password" placeholder="enter your Password"></td>
                                </tr>
                                <tr>
                                     
                                     <td colspan="2"><input type="submit" name="submit" value="ADD Admin" class="btn-secondary"></td>
                                </tr>
                                
                            
                            </table>
                        
                        </form>
  
                    </div>
        </div>
        <?php include("partials/footer.php"); ?>



<?php 
    //Process the Value from Form and Save it in Database

    //Check whether the submit button is clicked or not

    if(isset($_POST['submit']))
    {
        // Button Clicked
        //echo "Button Clicked";
        $Full_Name= $_POST["Full_Name"];
        $Username= $_POST["Username"];
        $Password= md5($_POST["Password"]);

       $sql = "INSERT INTO tbl_admin SET
           full_name='$Full_Name',
           username='$Username',
           password='$Password'
       
        ";
 
        //3. Executing Query and Saving Data into Datbase
        $res = mysqli_query($conn, $sql) or die(mysqli_error());

        //4. Check whether the (Query is Executed) data is inserted or not and display appropriate message
        if($res==TRUE)
        {
            //Data Inserted
            //echo "Data Inserted";
            //Create a Session Variable to Display Message
            $_SESSION['add'] = "<div class='success'>Admin Added Successfully.</div>";
            //Redirect Page to Manage Admin
            header("location:".SITEURL.'admin/manage-admin.php');
        }
        else
        {
            //FAiled to Insert DAta
            //echo "Faile to Insert Data";
            //Create a Session Variable to Display Message
            $_SESSION['add'] = "<div class='error'>Failed to Add Admin.</div>";
            //Redirect Page to Add Admin
            header("location:".SITEURL.'admin/add-admin.php');
        }

    }
    
?>