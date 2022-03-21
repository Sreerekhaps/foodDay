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
    <link rel="icon" type="image/png" href="{{asset('assets/images/favicon.png')}}">
    <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}">
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
                            <a class="nav-link" href="home.html">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="restaurant-listing.html">Restaurants</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="login.html">Sign In</a>
                        </li>

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
        <div class="container cart-page-new">
            <div class="row cuisine-dish-wrap">
                <div class="col-lg-8 cuisine-col">
               

                    <div class="rest-menus" id="rest-menus">


                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                aria-labelledby="pills-home-tab">

                                <div class="food-item-cards-wrap">
                                    <div class="sub-cat mt-0" id="sub-cat1">
                                        
                                        <h4 class="mb-4 mt-0">Your order</h4>
                                        <div class="row">
                                            <div class="col-lg-12">
                                            @php $total = 0 @endphp
        @if(session('cart'))
            @foreach(session('cart') as $id => $details)
                @php 
                $total=0;
                $total += $details['rate'] * $details['quantity'] @endphp
                                                <div class="food-item-card">
                                                    <div class="food-item-img ct-img" style="
                                background-image: url('assets/images/img2.jpg');
                              "></div>
                                                    <div class="food-item-body">

                                                        <h5 class="card-title">
                                                        {{ $details['food_item'] }}
                                                        </h5>
                                                        <p class="description">description
                                                            Lorem ipsum dolor sit amet consectetur
                                                            adipisicing elit. Expedita?
                                                        </p>
                                                        <div class="pricing">
                                                            <span class="price">${{ $details['rate'] }}</span>
                                                            <div class="add-remove-button">
                                                                <div class="input-group">
                                                                <a href="{{route('removeFromCart',$id)}}" class="number-button  minus">-</a>
                                                                    <input type="number"  step="1" max="" value="{{ $details['quantity'] }}"
                                                                        name="quantity" class="quantity-field" min="1"/>
                                                                        <a href="{{route('addToCart',$id)}}" class="number-button  plus">+</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                      
                                                        <p class="text-to-kitchen">
                                                            Text to kitchen. Delete this if you are not using.
                                                            adipisicing elit. Enim illum adipisci natus ducimus,
                                                            voluptatem
                                                        </p>
                                                        

                                                    </div>
                                                    
                                                </div>
                                                
</div>
@endforeach
                       @endif               
                                            
                                            
                                           
                                           
                                               
                                            </div>
                                            
                                            
                                            </div>
</div>
</div>
                        

                                     

                                
                            <!-- <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                aria-labelledby="pills-profile-tab">
                                <ul class="nav sub-cat-nav">
                                    <li class="nav-item">
                                        <a class="nav-link js-scroll-trigger active" href="#sub-cat11">Most Popular</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link js-scroll-trigger" href="#sub-cat12">Burgers</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link js-scroll-trigger" href="#sub-cat13">Pizza</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link js-scroll-trigger" href="#sub-cat14">Burgers</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link js-scroll-trigger" href="#sub-cat15">Pizza</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link js-scroll-trigger" href="#sub-cat16">Burgers</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link js-scroll-trigger" href="#sub-cat17">Pizza</a>
                                    </li>
                                </ul>

                                Lunch details goes here Lorem ipsum, dolor sit amet
                                consectetur adipisicing elit. Nostrum alias at molestiae autem
                                libero harum ratione modi eius dolor esse, consectetur dolore
                                quibusdam, voluptatum id veniam expedita asperiores itaque hic
                                quo debitis quae nihil in non! Sit possimus repudiandae cum
                                commodi? Dolorum excepturi ad adipisci ducimus deleniti ab
                                vitae aliquam. Corporis reiciendis dolorum inventore corrupti
                                molestiae fugiat maiores ullam veritatis dolorem
                                exercitationem magni, et quisquam expedita ipsam dolores
                                deleniti quis aperiam tempore nihil animi beatae cupiditate
                                unde! Amet architecto dolor laudantium nostrum, sed
                                necessitatibus doloremque error qui porro reiciendis itaque
                                molestiae voluptatibus tempore consectetur impedit iure culpa
                                aperiam perspiciatis nihil?
                            </div>
                            <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                                aria-labelledby="pills-contact-tab">
                                <ul class="nav sub-cat-nav">
                                    <li class="nav-item">
                                        <a class="nav-link js-scroll-trigger active" href="#sub-cat21">Most Popular</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link js-scroll-trigger" href="#sub-cat22">Burgers</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link js-scroll-trigger" href="#sub-cat23">Pizza</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link js-scroll-trigger" href="#sub-cat24">Burgers</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link js-scroll-trigger" href="#sub-cat25">Pizza</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link js-scroll-trigger" href="#sub-cat26">Burgers</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link js-scroll-trigger" href="#sub-cat27">Pizza</a>
                                    </li>
                                </ul>

                                Dinner info goes here Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Quaerat quas ea soluta in adipisci explicabo
                                perspiciatis ipsam molestias modi nulla accusamus corrupti
                                quibusdam, odio eum necessitatibus sed! Porro ipsa praesentium
                                magnam eaque neque. Qui commodi necessitatibus adipisci fugiat
                                debitis quasi voluptas nisi quas, sint ex unde vero ipsum
                                veniam modi. Ipsam dicta deleniti similique dolores
                                exercitationem est ex, nihil voluptate quo ducimus alias
                                accusamus reprehenderit molestias suscipit animi cumque
                                perferendis provident sapiente magnam vitae repellendus natus
                                ipsa temporibus dolorem. Eaque labore aperiam illo ut ipsum
                                totam delectus soluta nam earum facilis. Iusto earum doloribus
                                excepturi minima est, sint eligendi quos.
                            </div> -->
                        </div>
                    </div>
                
                <div class="col-lg-4 cart-col">
                    <div class="cart">
                        <div class="cart-head">
                            <span>Price Details</span>
                        </div>

                        <div class="cart-footer mt-4">
                        @php $total = 0 @endphp
                            @foreach((array) session('cart') as $id => $details)
                                @php $total += $details['rate'] * $details['quantity'] @endphp
                            @endforeach
                            <ul>
                                <li>
                                    <h5>
                                        <span>SubTotal</span>
                                        <span class="float-right">${{$total}}</span>
                                    </h5>
                                </li>
                                <li>
                                    <p>
                                        <span>Delivery fre</span>
                                        <span class="float-right">$0.00</span>
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <span>Tax</span> <span class="float-right">$0.00</span>
                                    </p>
                                </li>
                                <li>
                                    <h4>
                                        <span>Total</span>
                                        <span class="float-right">${{$total}}</span>
                                    </h4>
                                </li>
                                <button class="btn btn-primary mt-3 w-100"
                                    onclick="window.location.href='/checkout';">Checkout</button>
                            </ul>
                        </div>
                    </div>

                    <!-- Empty cart. Use this when the cart is empty -->

                    <!-- <div class="cart">
                        <div class="empty-cart">
                            <h4>Your cart is empty</h4>
                            <p class="mb-0">Add items to get started.</p>
                        </div>
                    </div> -->

                    <!-- Empty cart end  -->
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
    <script src="{{asset('assets/js/custom.js')}}"></script>
</body>

</html>