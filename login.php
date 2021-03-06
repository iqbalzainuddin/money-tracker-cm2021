<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Money Tracker | Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="js/app.js"></script>
</head>
<body>
    <div class="container">
        <div class="mt-5">
            <div class="text-center w-100 d-flex justify-content-center">
                <form class="card w-25 py-5 px-3" action="" method="post">
                    <h1 class="h4 mb-3 fw-normal">Welcome! Login Here.</h1>

                    <div class="form-floating my-2">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating my-2">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" required>
                        <label for="floatingPassword">Password</label>
                    </div>

                    <button class="w-100 btn btn-lg btn-success" type="submit">Log in</button>
                    <a class="my-2 text-primary" href="register.php">Don't have account? Register here</a>
                    <p class="mt-4 mb-2 text-muted">&copy; 2021</p>
                </form>
            </div>
        </div>
    </div>
</body>
</html>