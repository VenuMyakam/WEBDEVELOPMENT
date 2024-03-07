<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page | Amazon</title>
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
                    <form class="row g-3 needs-validation" method="post" action="register.php" novalidate>
                    <?php include('errors.php'); ?>
                            <h1 class="fs-3 mb-4">Create Account</h1>

                        <div class="col-md-12">
                            <label for="validationCustom01" class="form-label fs-6 fw-semibold">Username</label>
                            <input type="text" class="form-control" name="username" value="<?php echo $username; ?>" placeholder="Username" required autofocus>
                            <div class="invalid-feedback">
                                Enter your Username
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="validationCustom02" class="form-label fs-6 fw-semibold">Email</label>
                            <input type="email" class="form-control" name="email" value="<?php echo $email; ?>" placeholder="Email" required>
                            <div class="invalid-feedback">
                                Enter your Email
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="validationCustom03" class="form-label fs-6 fw-semibold">Password</label>
                            <input type="password" class="form-control" id="validationCustom03" name="password_1" placeholder="At least 6 characters" required>
                            <div class="invalid-feedback">
                                Enter Password
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="validationCustom04" class="form-label fs-6 fw-semibold">Confirm Password</label>
                            <input type="password" class="form-control" id="validationCustom04" name="password_2" placeholder="confirm password" required>
                            <div class="invalid-feedback">
                                Enter Confirm Password
                            </div>
                        </div>
                        
                        <div class="col-12">
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                            <label class="form-check-label small" for="invalidCheck">
                                Agree to terms and conditions
                            </label>
                            <div class="invalid-feedback">
                                You must agree before submitting.
                            </div>
                            </div>
                        </div>
                        <div class="my-4">
                            <p class="small">To verify your number, we will send you a text message with a temporary code. Message and data rates may apply.</p>
                        </div>
                        <div class="col-12 mb-4">
                            <button type="submit" class="btn info-btn-yellow col-md-12" name="reg_user">Create Account</button>  
                            <!-- <button class="btn btn-primary" name="reg_user" type="submit">Register</button> -->
                        </div>
                        <hr>
                        <p class="small">
                            Already have an account? <a class="text-decoration-none" href="login.php">Sign in <i class="fa-solid fa-caret-right small"></i></a>
                        </p>
        </form>
                    </div>
                </div>
            </div>
        <div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.0/slick.min.js"></script>
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (() => {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        const forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
            }

            form.classList.add('was-validated')
            }, false)
        })
        })()
    </script>
</body>
</html>