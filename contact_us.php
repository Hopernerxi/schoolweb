<!DOCTYPE html>
    <html>
        <head>
            <title>Contact_us</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
            
        </head>
        <body>

            <header>
            </header>

            <main>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Fullname</th>
                                        <th>Email</th>
                                        <th>Phone number</th>
                                        <th>Password</th>
                                        <th>Confirm Password</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    require_once("connection.php");
                                    $sql="SELECT * FROM `contact_us`";
                                    $result=mysqli_query($conn,$sql);
                                    ?>
                                    <?php while ($row=mysqli_fetch_assoc($result)) {?>
                                     <tr>
                                        <td><?php echo$row["ID"]?></td>
                                        <td><?php echo$row["fullname"]?></td>
                                        <td><?php echo$row["email"]?></td>
                                        <td><?php echo$row["phonenumber"]?></td>
                                        <td><?php echo$row["password"]?></td>
                                        <td><?php echo$row["cpassword"]?></td>
                                     </tr>

                                     <?php }?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>

            <footer>
            </footer>
        </body>
    </html>