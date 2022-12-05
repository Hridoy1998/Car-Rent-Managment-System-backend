<!DOCTYPE html>
<html >
<head>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Car Rent System</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>bs4 search Bar - Bootdey.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
    .intro{
            width: 300px;
            height: 680px;
            background-color:whitesmoke;
            overflow-x: hidden; /* Hide horizontal scrollbar */
            overflow-y: scroll; /* Add vertical scrollbar */
        }

</style>
<body >

  <div class="container py-5">

    <div class="row">

      <div class=""style = "position:relative; left:-270px;">

        <h5 class="font-weight-bold mb-3 text-center text-lg-start">Admin DashBoard</h5>

        <div class="intro">
            <div class="card" >
            <div class="card-body" >

            <ul class="list-unstyled mb-0" >
              <li class="p-2 border-bottom" style="background-color: #eee;">
                  <div class="d-flex flex-row">

                    <div class="pt-1">
                    <a class="nav-link" href="{{ route('admin dashboard') }}">Profile</a>
                    </div>
                  </div>
              </li>
              <li class="p-2 border-bottom">

                  <div class="d-flex flex-row">

                    <div class="pt-1">
                    <a class="nav-link" href="{{ route('admin block users list') }}">Block Users List</a>
                    </div>
                  </div>

              </li>
              <li class="p-2 border-bottom">

                  <div class="d-flex flex-row">

                    <div class="pt-1">
                    <a class="nav-link" href="{{ route('users add by admin') }}">Users Add By Admin</a>
                    </div>
                  </div>
                  <div class="pt-1">

                  </div>

              </li>
              <li class="p-2 border-bottom">

                  <div class="d-flex flex-row">

                    <div class="pt-1">
                    <a class="nav-link" href="{{ route('admin renter list') }}">Renter List</a>
                    </div>
                  </div>
                  <div class="pt-1">

                  </div>

              </li>
              <li class="p-2 border-bottom">

                  <div class="d-flex flex-row">

                    <div class="pt-1">
                    <a class="nav-link" href="{{ route('admin custorans list') }}">Customers List</a>
                    </div>
                  </div>
                  <div class="pt-1">

                  </div>

              </li>
              <li class="p-2 border-bottom">

                  <div class="d-flex flex-row">

                    <div class="pt-1">
                    <a class="nav-link" href="{{ route('add car by admin') }}">Add New Car</a>
                    </div>
                  </div>
                  <div class="pt-1">

                  </div>

              </li>
              <li class="p-2 border-bottom">

                  <div class="d-flex flex-row">

                    <div class="pt-1">
                    <a class="nav-link" href="{{ route('cars list') }}">Car List</a>
                    </div>
                  </div>
                  <div class="pt-1">

                  </div>

              </li>
              <li class="p-2 border-bottom">

                  <div class="d-flex flex-row">

                    <div class="pt-1">
                    <a class="nav-link" href="{{ route('admin approval') }}">Approval</a>
                    </div>
                  </div>
                  <div class="pt-1">

                  </div>

              </li>
              <li class="p-2 border-bottom">

                  <div class="d-flex flex-row">

                    <div class="pt-1">
                    <a class="nav-link" href="{{ route('rent history') }}">Rent History</a>
                    </div>
                  </div>
                  <div class="pt-1">

                  </div>
              </li>
              <li class="p-2 border-bottom">

                  <div class="d-flex flex-row">

                    <div class="pt-1">
                    <a class="nav-link" href="{{ route('admin notice') }}">Notice</a>
                    </div>
                  </div>
                  <div class="pt-1">

                  </div>

              </li>
              <li class="p-2 border-bottom">

                  <div class="d-flex flex-row">

                    <div class="pt-1">
                    <a class="nav-link" href="{{ route('notice view') }}">Notice List</a>
                    </div>
                  </div>
                  <div class="pt-1">

                  </div>

              </li>
              <li class="p-2 border-bottom">

                  <div class="d-flex flex-row">

                    <div class="pt-1">

                    </div>
                  </div>
                  <div class="pt-1">
                  <a class="nav-link" href="{{ route('admin message list') }}">Messages</a>
                  </div>

              </li>
              <li class="p-2 border-bottom">

                  <div class="d-flex flex-row">

                    <div class="pt-1">

                    </div>
                  </div>
                  <div class="pt-1">
                  <a class="nav-link" href="{{ route('posts mannage') }}">Post Manage</a>
                  </div>

              </li>
              <li class="p-2 border-bottom">

                  <div class="d-flex flex-row">

                    <div class="pt-1">

                    </div>
                  </div>
                  <div class="pt-1">
                  <a class="nav-link" href="{{ route('reviews manage') }}">Reviews Manage</a>
                  </div>

                </li>
                </ul>

                </div>
            </div>

        </div>
              <div class="d-flex flex-row">

                <div class="pt-1">
                    <br>
                <a class="btn btn-primary me-3" href="{{ route('logout') }}">Logout</a>
                </div>
              </div>
              <div class="pt-1">

              </div>
            </a>
          </li>

        </div>


            <div class="col-md-6 col-lg-7 col-xl-8" style = "position:relative; left:-180px;" >
                @yield("admin_main")

             </div>


        </div>

    </div>
</body>
<body>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />
    <footer class="bg-dark-gradient footer">
        <div class="footer-top">
            <div class="container">
                <div class="footer-border-bottom pb-6 mb-5">
                    <div class="row">
                        <div class="col-lg-4 col-xl-3">
                            <h4 class="text-white">
                                Sign up to Get Latest Updates
                            </h4>
                        </div>
                        <div class="col-lg-4 col-xl-6">
                            <form class="d-flex flex-row mb-2 p-1 bg-white input-group">
                                <input type="email" class="form-control rounded-0 border-0" placeholder="you@yoursite.com">
                                <button class="btn btn-secondary rounded-0 flex-shrink-0" type="submit">Subscribe</button>
                            </form>
                        </div>
                        <div class="col-lg-4 col-xl-3">
                            <div class="text-lg-end text-white">
                                <span class="h6">Call Us On</span><br>
                                <span class="h3">1-800-222-000</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-lg-3 my-4">
                        <div class="mb-4">
                            <img src="static/img/logo-light.svg" title="" alt="">
                        </div>
                        <div class="text-white-65 mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</div>
                        <div class="nav footer-socila-icon">
                            <a href="#">
    <i class="fab fa-facebook-f"></i>
    </a>
                            <a href="#">
    <i class="fab fa-twitter"></i>
    </a>
                            <a href="#">
    <i class="fab fa-instagram"></i>
    </a>
                            <a href="#">
    <i class="fab fa-linkedin-in"></i>
    </a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-2 my-4">
                        <h5 class="text-white h6 mb-4">Customer</h5>
                        <ul class="list-unstyled white-link footer-links">
                            <li>
                                <a href="#">Get Corpo</a>
                            </li>
                            <li>
                                <a href="#">Documentation</a>
                            </li>
                            <li>
                                <a href="#">Help center</a>
                            </li>
                            <li>
                                <a href="#">Pricing</a>
                            </li>
                            <li>
                                <a href="#">Contact us</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-lg-2 my-4">
                        <h5 class="text-white h6 mb-4">Product</h5>
                        <ul class="list-unstyled white-link footer-links">
                            <li>
                                <a href="#">Portfolio</a>
                            </li>
                            <li>
                                <a href="#">Blog</a>
                            </li>
                            <li>
                                <a href="#">Join our team</a>
                            </li>
                            <li>
                                <a href="#">Elements</a>
                            </li>
                            <li>
                                <a href="#">Products</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-lg-2 my-4">
                        <h5 class="text-white h6 mb-4">Company</h5>
                        <ul class="list-unstyled white-link footer-links">
                            <li>
                                <a href="#">About</a>
                            </li>
                            <li>
                                <a href="#">Careers</a>
                            </li>
                            <li>
                                <a href="#">Legal &amp; Security</a>
                            </li>
                            <li>
                                <a href="#">Terms of use</a>
                            </li>
                            <li>
                                <a href="#">We're hiring!</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-lg-3 my-4">
                        <h5 class="text-white h6 mb-4">Company</h5>
                        <div class="white-link">
                            <div class="d-flex pb-3">
                                <div class="avatar avatar-lg rounded">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png" title="" alt="">
                                </div>
                                <div class="col ps-3">
                                    <small class="text-white-65">29 March 2021</small>
                                    <h6 class="font-w-500 h6 m-0"><a class="text-white" href="#">Markdown Language Sample Blog Post Styling</a></h6>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="avatar avatar-lg rounded">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar2.png" title="" alt="">
                                </div>
                                <div class="col ps-3">
                                    <small class="text-white-65">29 March 2021</small>
                                    <h6 class="font-w-500 h6 m-0"><a class="text-white" href="#">Markdown Language Sample Blog Post Styling</a></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom footer-border-top light py-3">
            <div class="container text-center">
                <p class="m-0">© 2021 copyright <a href="#" class="text-reset">pxdraft</a></p>
            </div>
        </div>
    </footer>

    <style type="text/css">
     body {
         margin-top: 20px;
     }

     .footer .footer-socila-icon a {
         width: 30px;
         height: 30px;
         display: inline-flex;
         align-items: center;
         justify-content: center;
         background: #F84E77;
         color: #ffffff;
         border-radius: 50%;
         margin-right: 8px;
         font-size: 15px;
     }

     .footer .footer-socila-icon a:hover {
         background: #1baaa0;
     }

     .footer .footer-links {
         margin: 0;
     }

     .footer .footer-links li+li {
         padding-top: 10px;
     }

     .footer .footer-links li a {
         position: relative;
     }

     .footer .footer-links li a:after {
         content: "";
         position: absolute;
         width: 0px;
         left: auto;
         right: 0;
         bottom: 0;
         height: 1px;
         transition: ease all 0.35s;
         background: #F84E77;
     }

     .footer .footer-links li a:hover:after {
         width: 100%;
         left: 0;
         right: auto;
     }

     .footer .footer-top {
         padding-top: 1rem;
         padding-bottom: 1rem;
     }

     .footer .footer-top h5,
     .footer .footer-top .h5 {
         position: relative;
         font-size: 1.2rem;
         text-transform: uppercase;
     }

     @media (min-width: 768px) {
         .footer .footer-top {
             padding-top: 2rem;
             padding-bottom: 1rem;
         }
     }

     @media (min-width: 992px) {
         .footer .footer-top {
             padding-top: 3rem;
             padding-bottom: 2rem;
         }
     }

     .footer .footer-border-top {
         border-top: 1px solid rgba(255, 255, 255, 0.1);
     }

     .footer .footer-border-top.dark {
         border-top: 1px solid rgba(16, 16, 16, 0.1);
     }

     .footer .footer-border-bottom {
         border-bottom: 1px solid rgba(255, 255, 255, 0.1);
     }

     .footer .footer-border-bottom.dark {
         border-bottom: 1px solid rgba(16, 16, 16, 0.1);
     }

     .bg-dark-gradient {
         background: linear-gradient( 180deg, #101010 50%, black 100%) repeat-x !important;
     }

     .white-link a {
         color: rgba(255, 255, 255, 0.65);
     }

     a {
         text-decoration: none
     }

     .avatar-lg img {
        width:90px;
        height:90px;
    }
    </style>

    <script type="text/javascript">

    </script>
    </body>
</html>
