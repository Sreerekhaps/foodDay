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
    <title>FoodDay - Cart</title>
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
                            <a class="nav-link" href="{{route('customer.my_home')}}">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('customer.restaurant_listing')}}">Restaurants</a>
                        </li>

                        <!-- <li class="nav-item">
                            <a class="nav-link" href="{{route('customer.signin')}}">Sign In</a>
                        </li> -->

                        <li class="nav-item">
                            <a class="nav-link" href="{{route('customer.myaccount')}}">
                                <i class='bx bx-user mr-1'></i>
                                My Account</a>
                        </li>
                        @if(count((array) session('cart'))==0)

<a class="nav-link" href="{{route('customer.emptycart')}}">

<span class="cart-badge-wrap">

<span class="cart-badge">{{ count((array) session('cart')) }}</span>

<i class='bx bx-shopping-bag mr-1'></i>

</span>

Cart</a>

@else

<a class="nav-link" href="{{route('customer.cart2')}}">

<span class="cart-badge-wrap">

<span class="cart-badge">{{ count((array) session('cart')) }}</span>

<i class='bx bx-shopping-bag mr-1'></i>

</span>

Cart</a>

@endif
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!-- Header -->

    <div class="search-nav">
        <div class="container">
            <h3 class="mb-0">Cart</h3>
        </div>
    </div>

    <section class="py-60">
        <div class="container cart-page">
            <div class="table-responsive-lg">
                <table class="cart-table table">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                    @php $total = 0 @endphp
        @if(session('cart'))
            @foreach(session('cart') as $id => $details)
                @php 
                $total=0;
                $total += $details['rate'] * $details['quantity'] @endphp

                        <tr data-id="{{ $id }}">
                            <td class="product-item">
                                <div class="dish-image">
                                    <a href="#"><img src="assets/images/img1.jpg" alt="product"></a>
                                </div>
                                <div class="product-name">
                                    <a href="#">{{ $details['food_item'] }}</a>
                                </div>
                            </td>
                            <td>${{ $details['rate'] }}</td>
                            <td>
                                <div class="add-remove-button">
                                    <div class="input-group">
                                    <a href="{{route('removeFromCart',$id)}}" min="0" class="number-button  minus">-</a>
                                        <input type="number" step="1" max="" value="{{ $details['quantity'] }}" name="quantity"
                                            class="quantity-field">
                                        <a href="{{route('addToCart',$id)}}" class="number-button  plus">+</a>
                                    </div>
                                </div>
                            </td>
                            <td>{{$total}}</td>
                            
                            <td class="actions" data-th="">
                            <a href="{{route('remove')}}" class="float-right"><i class='bx bx-trash'></i></a>
                    </td>
                            <!-- <form method="delete" action="{{route('remove',$id)}}">
                            @csrf
                              @method('DELETE')
                                <a href="{{route('remove')}}" class="float-right"><i class='bx bx-trash'></i></a>
                          
                            </form> -->
                            </td>
                        </tr>
                       @endforeach
                       @endif
                    </tbody>
                </table>
            </div>
            <div class="row mt-4">
                <div class="col-lg-6">
                    <form action="">
                        <div class="input-group coupon-group">
                            <input type="text" class="form-control" placeholder="Coupon Code"
                                aria-label="delivery location" aria-describedby="button-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-danger" type="button" id="find-food-btn">Apply Coupon</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6">
                
                    <h4 class="mb-3 mt-4 mt-lg-0">Cart totals</h4>

                    <table class=" table-responsive-sm subtotal-table w-100">
                        <tbody>
                        @php $total = 0 @endphp
                            @foreach((array) session('cart') as $id => $details)
                                @php $total += $details['rate'] * $details['quantity'] @endphp
                            @endforeach
                            <tr>
                                <th>Sub Total</th>
                                <td>{{$total}}</td>
                            </tr>
                            <tr>
                                <th>Tax</th>
                                <td>£ 0.00</td>
                            </tr>
                            <tr>
                                <th>Delivery Charge </th>
                                <td>£ 0.00</td>
                            </tr>
                            <tr>
                                <th>Order Total </th>
                                <td>{{$total}}</td>
                            </tr>
                           
                        </tbody>
                    </table>
                    <a href="login.html" class="btn btn-primary mt-3 float-right check-out-btn">Proceed to
                        checkout</a>

                        
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
                                    <button class="btn btn-danger" type="button" id="find-food-btn"><i
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