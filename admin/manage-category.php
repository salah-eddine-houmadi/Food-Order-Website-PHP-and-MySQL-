<?php include("partials/menu.php"); ?>

        <style>
           .tbl-full{
                width: 100%;
            }
            table tr th {
                border-bottom:1px solid black;
                padding:1%;
                text-align:left;
            }
            table tr td {
                padding: 1%;
            }

            .btn-primary{
                background-color:#1e30ff;
                padding: 1%;
                color:#fff;
                text-decoration:none;
                font-weight:bold;
            }
            .btn-primary:hover{
                background-color:#3742fa;
            }
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
            .btn-danger{
                background-color:#ff6b81;
                padding: 1%;
                color:#fff;
                text-decoration:none;
                font-weight:bold;
            }
            .btn-danger:hover{
                background-color:#ff6b81;
            }


       </style>

        <div class="main-content">
                    <div class="wrapper">
                        <h1>Manage category</h1>

                        <br />
                        <br />

                        <a href="add-category.php" class="btn-primary">Add Category</a>
                        <br />
                        <br />
                        <br />
                        <div>
                        <table class="tbl-full">
                            <tr>
                                <th>S.N.</th>
                                <th>Full Name</th>
                                <th>Username</th>
                                <th>Actions</th>
                            </tr>
                            <tr>
                                <td>1.</td>
                                <td>Vijay thapa</td>
                                <td>Vijaythapa</td>
                                <td>
                                    <a href="#" class="btn-secondary">Update Admin</a>
                                    <a href="#" class="btn-danger">Delete Admin</a>

                                </td>
                            </tr>  
                            <tr>
                                <td>2.</td>
                                <td>Vijay thapa</td>
                                <td>Vijaythapa</td>
                                <td>
                                    <a href="#" class="btn-secondary">Update Admin</a>
                                    <a href="#" class="btn-danger">Delete Admin</a>

                                </td>
                            </tr> 
                            <tr>
                                <td>3.</td>
                                <td>Vijay thapa</td>
                                <td>Vijaythapa</td>
                                <td>
                                    <a href="#" class="btn-secondary">Update Admin</a>
                                    <a href="#" class="btn-danger">Delete Admin</a>

                                </td>
                            </tr> 
                            <tr>
                                <td>4.</td>
                                <td>Vijay thapa</td>
                                <td>Vijaythapa</td>
                                <td>
                                    <a href="#" class="btn-secondary">Update Admin</a>
                                    <a href="#" class="btn-danger">Delete Admin</a>

                                </td>
                            </tr> 
                            <tr>
                                <td>5.</td>
                                <td>Vijay thapa</td>
                                <td>Vijaythapa</td>
                                <td>
                                    <a href="#" class="btn-secondary">Update Admin</a>
                                    <a href="#" class="btn-danger">Delete Admin</a>
                                    

                                </td>
                            </tr> 
                            
                        </table>            
                    </div>
        </div>

        <?php include("partials/footer.php"); ?>