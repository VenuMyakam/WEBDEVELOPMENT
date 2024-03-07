<?php include('server.php') ?>
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
        <div class="text-center my-3">
            <img class="img-fluid" src="https://zeevector.com/wp-content/uploads/LOGO/Amazon-India-Logo-PNG-HD.png" width="130" alt="">
        </div>

        <div class="row g-0 justify-content-center">
            <div class="col-lg-4">
                <div class="card info-bg-card needs-validation" novalidate>
                    <div class="p-4">
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
                        <div class="col-12">
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                            <label class="form-check-label" for="invalidCheck">
                                Keep me signed in. 
                                <a class="text-decoration-none" data-bs-toggle="popover" data-bs-placement="top" data-bs-custom-class="custom-popover" data-bs-title="Keep Me Signed In Checkbox" data-bs-content='Choosing "Keep me signed in" reduces the number of times you re asked to Sign-In on this device. To keep your account secure, use this option only on your personal devices.' aria-describedby="popover337583">
                                    Details &nbsp;<i class="fa-solid fa-caret-down text-black small"></i>
                                </a>
                            </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-center my-4 new-user">
                    <p class="small text-secondary">New to Amazon?</p>
                </div>
                <a href="register.php" class="btn border text-dark col-md-12 shadow-sm rounded-3">Create your Amazon account</a>  
            </div>
        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.0/slick.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>