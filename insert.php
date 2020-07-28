<?php
session_start();

if (!isset($_SESSION['login_success'])) {
    $_SESSION['login_error'] = "Please Login First";
    header('Location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

        <title>Insert Data</title>
    </head>

    <body>
        <div class="container pt-5">
            <div class="row">
                <!-- Column Two -->
                <div class="col-md-2">
                    <a href="index.php" class="btn btn-info px-4 rounded-pill">All Students</a>
                </div>

                <!-- Column Five -->
                <div class="offset-md-1 col-md-5">
                    <!-- Heading -->
                    <div class="heading border-bottom mb-3">
                        <h3>Add New Student</h3>
                    </div>

                    <!-- Student List Table -->
                    <form action="store.php" method="POST">
                        <div class="form-group">
                            <label class="font-weight-bold" for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control rounded-pill"
                                placeholder="Enter Full Name" required>
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold" for="age">Age</label>
                            <input type="text" name="age" id="age" class="form-control rounded-pill"
                                placeholder="Enter Age" required>
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold" for="roll">Roll</label>
                            <input type="text" name="roll" id="roll" class="form-control rounded-pill"
                                placeholder="Enter Roll" required>
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold" for="phone">Phone</label>
                            <input type="text" name="phone" id="phone" class="form-control rounded-pill"
                                placeholder="Enter Phone Number" required>
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold" for="address">Address</label>
                            <input type="text" name="address" id="address" class="form-control rounded-pill"
                                placeholder="Enter Parmanent Address" required>
                        </div>
                        <div class="form-btn pt-3">
                            <button type="submit" class="btn btn-primary px-5 rounded-pill">Submit</button>
                        </div>
                    </form>

                    <!-- Optional JavaScript -->
                    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
                    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
                    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
                    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    </body>

</html>