<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">

    <title>SUCCESS PAGE</title>

    <style>
        body{
            padding: 20px;
        }
        
        .container{
            margin-inline: auto;
            background: green;
            padding: 40px;
            color: #fff;
            text-align: center;
            border-radius: 20px;
        }

        .con2{
            border-radius: 0px;
            background: rgb(174, 174, 174);
        }

    </style>
</head>
<body>
    <div class="container">
        <h3>Your form has been submitted "SUCCESSFULLY!"</h3>
    </div><br><br>

    <div class="container con2">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        <h4>Kindly search for registered persons in the search box below.</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">
                                <form action="" method="get">
                                    <div class="input-group mb-3">
                                        <input type="text" name="search"
                                        value="<?php if(isset($_GET['search'])){
                                                    echo $_GET['search'];
                                                } 
                                        ?>" 
                                        class="form-control" placeholder="Search data">
                                        <button type="submit" class="btn btn-primary">Search</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Full Name</th>
                                    <th>Email Address</th>
                                    <th>Phone Number</th>
                                    <th>Gender</th>
                                    <th>Language</th>
                                    <th>Zipcode</th>
                                    <th>About</th>
                                </tr>
                            </thead>

                            <tbody>
                                    <?php
                                        // Connect to database
                                        $mysqli = new mysqli("localhost", "root", "", "formbackend");
                                        if (isset($_GET["search"])){
                                            $filtervalues = $_GET["search"];
                                            $query = "SELECT * FROM datainput WHERE CONCAT(Full_Name,Email,Phone_Number,Gender,Lang,Zipcode,About) LIKE '%$filtervalues%'";
                                            $query_run = mysqli_query($mysqli, $query);

                                            if (mysqli_num_rows($query_run) > 0){
                                                foreach ($query_run as $items){
                                                    ?>
                                                        <tr>
                                                            <td><?= $items['id']?></td>
                                                            <td><?= $items['Full_Name']?></td>
                                                            <td><?= $items['Email']?></td>
                                                            <td><?= $items['Phone_Number']?></td>
                                                            <td><?= $items['Gender']?></td>
                                                            <td><?= $items['Lang']?></td>
                                                            <td><?= $items['Zipcode']?></td>
                                                            <td><?= $items['About']?></td>
                                                        </tr>
                                                    <?php

                                                }
                                            } else {
                                    ?>
                                                <tr>
                                                    <td colspan="4">No record found.</td>
                                                </tr>
                                                <?php
                                                
                                            }
                                        }
                                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- bootstrap javascript CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>