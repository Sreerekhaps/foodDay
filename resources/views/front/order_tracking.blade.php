<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" type="image/png" href="assets/images/favicon.png">
    <link rel="stylesheet" href="assets/css/styles.css">
    <title>FoodDay - Order Summery</title>
</head>

<body>

    <!-- header -->
    <header>
        <div class="container-fluid">
            <nav id="navbar_top" class="navbar navbar-expand-lg navbar-light fixed-top">
                <a class="navbar-brand" href="home.html"><img src="assets/images/logo.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="home.html">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="restaurant-listing.html">Restaurants</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="login.html">Sign In</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="my-account.html">
                                <i class='bx bx-user mr-1'></i>
                                My Account</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="cart.html">
                                <span class="cart-badge-wrap">
                                    <span class="cart-badge">9</span>
                                    <i class='bx bx-shopping-bag mr-1'></i>
                                </span>
                                Cart</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!-- Header -->

    <div class="search-nav">
        <div class="container">
            <h3 class="mb-0">Order Tracking</h3>
        </div>
    </div>

    <section class="py-60">
        <div class="container">

            <div class="row cuisine-dish-wrap">

                <div class="col-lg-8 w-100 cuisine-col">

                    <div class="order-status">


                        <div class="order-tracking-status-head">
                            <p class="mb-0">Your order has been confirmed. The restaurant will deliver your order by
                                11.22PM.</p>
                            <span>For any questions, reach out to us on hello@foodday.co</span>
                            <h6 class="mt-3">Delivery Address</h6>
                            <div class="card address-card">
                                <div class="card-body deliverable">
                                    <div class="delivery">
                                        <i class="bx bxs-check-circle"></i>
                                        <h5 class="card-title">Home</h5>
                                    </div>
                                    <h6>John Doe, 7845 155 555,</h6>
                                    <p class="card-text">
                                        7th Street, Downtown, West Avenue, London, United Kingodom,
                                        784512.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- <div class="status-or-info-div">
                            <h4>Congratulations! Your order is placed!</h4>
                            <p>Your order number is <strong>#123456</strong>. The restaurant will deliver your order by
                                <strong>11.22PM.</strong>
                            </p>
                            <p>You can view your order on your account page, when you are logged in.</p>
                            <p>For any questions, reach out to us on hello@foodday.co</p>
                            <a href="home.html" class="btn btn-primary mt-3">Return to Restaurants</a>
                        </div> -->

                        <div class="map-wrap">
                            <iframe width="100%" height="330" class="map"
                                src="https://maps.google.com/maps?q=cedex%20technologies&amp;t=&amp;z=17&amp;ie=UTF8&amp;iwloc=&amp;output=embed"
                                frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                        </div>

                        <ul class="timeline">
                            <li class="previous">
                                <div class="timeline-item">
                                    <h6>Order received</h6>
                                    <p>The shipment have been successsfully delivered.</p>
                                    <p class="location">Delhi</p>
                                    <div class="delivery-date">
                                        <span class="date">01.01.2021</span>
                                        <span class="time">06:00 AM</span>
                                    </div>
                                </div>
                            </li>
                            <li class="previous">
                                <div class="timeline-item">
                                    <h6>Order Packed</h6>
                                    <p>The shipment have been successsfully delivered.</p>
                                    <p class="location">Delhi</p>
                                    <div class="delivery-date">
                                        <span class="date">01.01.2021</span>
                                        <span class="time">06:00 AM</span>
                                    </div>
                                </div>
                            </li>
                            <li class="active">
                                <div class="timeline-item">
                                    <h6>Order Shipped</h6>
                                    <p>The shipment have been successsfully delivered.</p>
                                    <p class="location">Delhi</p>
                                    <div class="delivery-date">
                                        <span class="date">01.01.2021</span>
                                        <span class="time">06:00 AM</span>
                                    </div>
                                </div>
                            </li>
                            <li class="next">
                                <div class="timeline-item">
                                    <h6>Order delivered</h6>
                                    <p>The shipment have been successsfully delivered.</p>
                                    <p class="location">Delhi</p>
                                    <div class="delivery-date">
                                        <span class="date">01.01.2021</span>
                                        <span class="time">06:00 AM</span>
                                    </div>
                                </div>
                            </li>
                            <li class="next">
                                <div class="timeline-item">
                                    <h6>Order delivered</h6>
                                    <p>The shipment have been successsfully delivered.</p>
                                    <p class="location">Delhi</p>
                                    <div class="delivery-date">
                                        <span class="date">01.01.2021</span>
                                        <span class="time">06:00 AM</span>
                                    </div>
                                </div>
                            </li>

                        </ul>

                        <!-- 
                        <h3>Order Status</h3> -->

                        <!-- Order status bar  -->

                        <!-- <div class="checkout-wrap">
                            <ul class="checkout-bar">

                                <li class="visited first">
                                    <a href="#">Sent</a>
                                </li>
                                <li class="visited">Confirmed</li>
                                <li class="active">On the way</li>
                                <li class="next last">Delivered</li>

                            </ul>
                        </div> -->

                        <!-- Order status bar end  -->


                    </div>

                </div>

                <div class="col-lg-4 cuisine-col">

                    <div class="cart">
                        <div class="cart-head">
                            <span>Your order</span>
                        </div>
                        <div class="cart-body">

                            <div class="cart-item">
                                <div class="details">
                                    <h6>Spicy Beetroot & Potato Burger</h6>
                                    <p class="text-to-kitchen">Text to kitchen. Delete this if you are not using.
                                        adipisicing elit. Enim illum adipisci natus ducimus, voluptatem</p>
                                    <ul class="modifiers">
                                        <h6>Toppings</h6>
                                        <li>Extra chease <span>$5.00</span></li>
                                        <li>Drinks <span>$6.00</span></li>
                                        <li>Butter <span>$7.00</span></li>
                                    </ul>
                                </div>
                                <div class="price">
                                    <h6>$12.99</h6>
                                    <div class="add-remove-button">
                                        <div class="input-group">
                                            <input type="button" value="-" class="button-minus" data-field="quantity">
                                            <input type="number" step="1" max="" value="1" name="quantity"
                                                class="quantity-field">
                                            <input type="button" value="+" class="button-plus" data-field="quantity">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="cart-item">
                                <div class="details">
                                    <h6>Spicy Beetroot & Potato Burger</h6>
                                    <ul class="modifiers">
                                        <h6>Toppings</h6>
                                        <li>Extra chease <span>$5.00</span></li>
                                        <li>Drinks <span>$6.00</span></li>
                                        <li>Butter <span>$7.00</span></li>
                                    </ul>
                                </div>
                                <div class="price">
                                    <h6>$12.99</h6>
                                    <div class="add-remove-button">
                                        <div class="input-group">
                                            <input type="button" value="-" class="button-minus" data-field="quantity">
                                            <input type="number" step="1" max="" value="1" name="quantity"
                                                class="quantity-field">
                                            <input type="button" value="+" class="button-plus" data-field="quantity">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="cart-item">
                                <div class="details">
                                    <h6>Spicy Beetroot & Potato Burger</h6>
                                </div>
                                <div class="price">
                                    <h6>$12.99</h6>
                                    <div class="add-remove-button">
                                        <div class="input-group">
                                            <input type="button" value="-" class="button-minus" data-field="quantity">
                                            <input type="number" step="1" max="" value="1" name="quantity"
                                                class="quantity-field">
                                            <input type="button" value="+" class="button-plus" data-field="quantity">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="cart-item">
                                <div class="details">
                                    <h6>Spicy Beetroot & Potato Burger</h6>
                                    <ul class="modifiers">
                                        <h6>Addons</h6>
                                        <li>Extra chease</li>
                                        <li>Drinks</li>
                                        <li>Butter</li>
                                    </ul>
                                </div>
                                <div class="price">
                                    <h6>$12.99</h6>
                                    <div class="add-remove-button">
                                        <div class="input-group">
                                            <input type="button" value="-" class="button-minus" data-field="quantity">
                                            <input type="number" step="1" max="" value="1" name="quantity"
                                                class="quantity-field">
                                            <input type="button" value="+" class="button-plus" data-field="quantity">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="cart-item">
                                <div class="details">
                                    <h6>Spicy Beetroot & Potato Burger</h6>
                                </div>
                                <div class="price">
                                    <h6>$12.99</h6>
                                    <div class="add-remove-button">
                                        <div class="input-group">
                                            <input type="button" value="-" class="button-minus" data-field="quantity">
                                            <input type="number" step="1" max="" value="1" name="quantity"
                                                class="quantity-field">
                                            <input type="button" value="+" class="button-plus" data-field="quantity">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="cart-footer">
                            <ul>
                                <li>
                                    <h5><span>SubTotal</span> <span class="float-right">$121.99</span></h5>
                                </li>
                                <li>
                                    <p><span>Delivery fre</span> <span class="float-right">$20.00</span></p>
                                </li>
                                <li>
                                    <p><span>Tax</span> <span class="float-right">$18.00</span></p>
                                </li>
                                <li>
                                    <h4><span>Total</span> <span class="float-right">$159.99</span>
                                    </h4>
                                </li>
                            </ul>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </section>

    <!-- footer -->

    <footer>
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <h3>Quick links</h3>
                        <ul>
                            <li><a href="home.html">Home</a></li>
                            <li><a href="restaurant-listing.html">Restaurants</a></li>
                            <li><a href="about-us.html">About us</a></li>
                            <li><a href="contact-us.html">Contact</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h3>Quick links</h3>
                        <ul>

                            <li><a href="enrol-delivery-boy.html">Enroll Delivery Boy</a></li>
                            <li><a href="faq.html">FAQ</a></li>
                            <li><a href="terms-and-conditions.html">Terms and Conditions</a></li>
                            <li><a href="privacy-policy.html">Privacy Policy</a></li>
                            <li><a href="enrol-your-restaurant.html">Enroll Your Restaurant</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <h3>Subscribe to newsletter</h3>
                        <p>Join our newsletter to keep be informed about offers and news.</p>
                        <form action="">
                            <div class="input-group newsletter-group">
                                <input type="text" class="form-control" placeholder="Enter your email" aria-label=""
                                    aria-describedby="button-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button" id="find-food-btn"><i
                                            class='bx bx-send'></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h3>Contact us</h3>
                        <ul class="contact">
                            <li><i class='bx bx-location-plus'></i><span>Down Town Building, MG Road, Toronto, Canada,
                                    784578</span></li>
                            <li><i class='bx bx-mail-send'></i><span>hello@cedextech.com</span></li>
                            <li><i class='bx bx-phone'></i><span>+91-8129881750</span></li>
                        </ul>
                        <div class="social">
                            <i class='bx bxl-facebook-circle'></i>
                            <i class='bx bxl-twitter'></i>
                            <i class='bx bxl-youtube'></i>
                            <i class='bx bxl-instagram-alt'></i>
                        </div>
                    </div>
                </div><!-- End row -->
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">

                <div class="text-center">
                    <p class="mb-0 copy-right">© 2021 FoodDay All Rights Reserved</p>
                </div>
            </div>
        </div>

        <!-- mobile footer -->

        <div class="mobile-footer">
            <div class="row">
                <div class="col-4 item">
                    <a href="home.html">
                        <i class='bx bx-search'></i>
                        <span>Search</span>
                    </a>
                </div>
                <div class="col-4 item">
                    <a href="cart.html">
                        <i class='bx bx-cart'><span class="badge badge-light">22</span></i>
                        <span>Cart</span>
                    </a>
                </div>
                <div class="col-4 item">
                    <a href="my-account.html">
                        <i class='bx bx-user'></i>
                        <span>Account</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- mobile footer end -->

    </footer>

    <!-- footer end -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
        </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
        </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
        </script>
    <script src="assets/js/custom.js"></script>
</body>

</html>