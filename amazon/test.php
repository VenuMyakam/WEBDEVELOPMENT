<?php 
  session_start();

  if (!isset($_SESSION['email'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['email']);
	header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page | Amazon</title>
    <!-- <title>A7ACB2</title> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.0/slick.min.css" />
    <link rel='stylesheet' id='font-awesome-css-css' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css?ver=1.1' type='text/css' media='all' />
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/home.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand " href="userhome.php">
                <img class="img-fluid" src="assets/img/amazon-white-logo.png" width="110" alt=""><span class="text-white">.in</span>
            </a>
            <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button> -->
            <div class="collapse navbar-collapse justify-content-evenly align-items-center" id="navbarSupportedContent">
                <div class="row">
                    <div class="input-group border-0">
                        <span class="input-group-text p-0" id="basic-addon1">
                            <select class="form-select border-0"  aria-label="Default select example">
                                <option selected>All &nbsp;<i class="fa-solid fa-caret-down text-black small"></i></option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </span>
                        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                        <span class="input-group-text border-0 info-btn-orange p-0" id="basic-addon1">
                            <button class="btn  border-0" type="submit">
                                <i class="fa-solid fa-magnifying-glass fs-5"></i>
                            </button>
                        </span>
                    </div>
                </div>
                <div>
                    <ul class="menu navbar-nav ms-auto mb-2  mb-lg-0 align-items-center">
                        <li class="nav-item">
                            <ul class="position-relative">
                                <?php  if (isset($_SESSION['email'])) : ?>
                                    <a class="text-white text-decoration-none" href="#">
                                        <p class="mb-0 small">Hello, <?php echo $_SESSION['email']; ?></p>
                                        <h6 class="fw-semibold">Accounts & Lists &nbsp;<span><i class="fa-solid fa-caret-down small" style="color: #a7acb2;"></i></span></h6>
                                    </a>
                                <?php endif ?>
                                <li class="submenu">
                                    <div class="card p-3">
                                            <div class="row g-0">
                                                <div class="col-md-12 text-center">
                                                    <div class="info-green-bg rounded">
                                                        <div class="row g-0 align-items-center">
                                                            <div class="col-md-7">
                                                                <p class="small m-0">Who is shopping? Select a profile.</p>
                                                            </div>
                                                            <div class="col-md-5">
                                                                <a class="text-decoration-none small border-0 info-green-bg" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Manage Profiles <i class="fa-solid fa-angle-right"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                </div>
                                            </div> 
                                       
                                        
                                        <div class="row g-0 justify-content-between">
                                            <div class="col-md-5">
                                                <ul class="list-unstyled">
                                                    <li>
                                                        <h6>Your Lists</h6>
                                                    </li>
                                                    <li>
                                                        <a href="#">Create a Wish List</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Wish from Any Website</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Baby Wishlist</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Discover Your Style</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Explore Showroom</a>
                                                    </li>
                                                    
                                                </ul>
                                            </div>
                                            <div class="col-md-6">
                                                <ul class="list-unstyled info-border-left-line">
                                                    <li>
                                                        <h6>Your Account</h6>
                                                    </li>
                                                    <li>
                                                        <a href="#">Your Account</a>
                                                    </li>    
                                                    <li>
                                                        <a href="#">Your Orders</a>
                                                    </li>    
                                                    <li>
                                                        <a href="#">Your Wish List</a>
                                                    </li>    
                                                    <li>
                                                        <a href="#">Your Recommendations</a>
                                                    </li>    
                                                    <li>
                                                        <a href="#">Your Prime Membership</a>
                                                    </li>    
                                                    <li>
                                                        <a href="#">Your Prime Video</a>
                                                    </li>    
                                                    <li>
                                                        <a href="#">Your Subscribe & Save Items</a>
                                                    </li>    
                                                    <li>
                                                        <a href="#">Memberships & Subscriptions</a>
                                                    </li>    
                                                    <li>
                                                        <a href="#">Your Seller Account</a>
                                                    </li>    
                                                    <li>
                                                        <a href="#">Manage Your Content and Devices</a>
                                                    </li>    
                                                    <li>
                                                        <a href="#">Your Free Amazon Business Account</a>
                                                    </li>
                                                    <hr>
                                                    <li>
                                                        <a href="#">Switch Accounts</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <?php  if (isset($_SESSION['email'])) : ?>
                                                            <p> 
                                                                <a href="login.php?logout='1'">Sign Out</a> 
                                                            </p>
                                                        <?php endif ?>  
                                                    </li> 
                                                </ul>
                                            </div>
                                        </div> 
                                    </div>
                                </li>
                            </ul>
                        </li>
                      </ul>
                </div>
              </div>
        </div>
    </nav>


    <section>

    </section>



    
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Who is shopping?</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-md-12">
                  <div class="card bg-light border-0 rounded-3 p-2">
                    <div class="row g-0 align-items-center justify-content-center">
                      <div class="col-md-8">
                        <div>
                          <div class="card-body card-pd-left">
                            <?php  if (isset($_SESSION['email'])) : ?>
                                <h6 class="card-title m-0"><?php echo $_SESSION['email']; ?></h6>
                                <p class="card-text"><small class="text-body-secondary text-muted">Account holder</small></p>
                            <?php endif ?>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="card-body">
                          <p class="text-end">
                            <a class="text-decoration-none" href="#">View</a>
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="info-profile-img">
                      <!-- <img class="img-fluid rounded-circle" width="60px" src="https://dummyimage.com/100x100/red/ffffff" alt=""> -->
                        <?php  if (isset($_SESSION['email'])) : ?>
                            <img class="img-fluid rounded-circle" width="60px" src="assets/img/<?php echo $image; ?>">
                        <?php endif ?>
                        <img class="img-fluid rounded-circle" width="60px" src="assets/img/<?php echo $image; ?>">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer justify-content-start align-items-center">
              <a class="d-flex align-items-center text-decoration-none" href="#">
                <i class="fa-solid fa-circle-plus fs-1"></i> &emsp;Add profile
              </a>
            </div>
          </div>
        </div>
      </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.0/slick.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script>
        
        const myModal = document.getElementById('myModal')
        const myInput = document.getElementById('myInput')

        myModal.addEventListener('shown.bs.modal', () => {
        myInput.focus()
        })
    </script>
</body>
</html>