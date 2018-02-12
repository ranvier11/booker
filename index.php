<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css\bootstrap.min.css">
    <link rel="stylesheet" href="css\bootstrap-table.min.css">
    <link rel="stylesheet" href="css\style.css">
    <script src="js\jquery.slim.min.js"></script>
    <script src="js\popper.min.js"></script>
    <script src="js\bootstrap.min.js"></script>
    <script src="js\bootstrap-table.js"></script>
    <title>Booker</title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center top-margin">
            <div class="col-sm-4">
                <form action="login.php" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>