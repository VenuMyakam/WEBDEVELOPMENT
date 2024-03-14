<?php include('testing-server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page | Amazon</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.0/slick.min.css" />
    <link rel='stylesheet' id='font-awesome-css-css' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css?ver=1.1' type='text/css' media='all' />
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="container">
        <form class="info-card-content needs-validation" novalidate method="post" action="login.php">
            <?php include('errors.php'); ?>
                <h1 class="fs-3 mb-4">Sign in</h1>
                
                <div class="col mb-3">
                    <label for="validationCustom01" class="form-label fs-6 fw-semibold">Email or mobile phone number</label>
                    <input type="text" class="form-control" name="email" required autofocus>
                    <div class="invalid-feedback">
                        Enter your email or mobile phone number
                    </div>
                </div>
                <div class="col mb-3">
                    <label for="validationCustom02" class="form-label fs-6 fw-semibold">Password</label>
                    <input type="password" class="form-control" name="password" required>
                    <div class="invalid-feedback">
                        Your password is incorrect
                    </div>
                </div>
                <div class="col mb-3">
                    <button type="submit" class="btn info-btn-yellow col-md-12" name="login_user">Sign in</button>  
                </div>
        </form>
    </div>
                


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.0/slick.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>