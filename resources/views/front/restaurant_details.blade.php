<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
  <link rel="icon" type="image/png" href="{{asset('assets/images/favicon.png')}}">
    <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}">
    <title>FoodDay - Restaurant Page</title>
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
                            <a class="nav-link" href="/my_home">Home <span class="sr-only">(current)</span></a>
                        </li>
                    

                        <li class="nav-item">
                            <a class="nav-link" href="/sign_in">Sign In</a>
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

    <div class="search-nav restaurant-head">
        <div class="container">
            <div class="rest-info-wrap">
                <div class="rest-logo" style="
            background-image: url('{{$restaurant->banner}}');
          "></div>
                <div>
                    <h3>{{$restaurant->name}}</h3>
                    <!-- <span class="rest-unserviceable">Restaurant Unserviceable</span> -->
                    
                    <div class="cuisines">
                                <span>
                                @foreach($cuisines as $cuisine)
                                 @if($restaurant->cuisines->contains($cuisine->id))
                                  {{$cuisine->name}},
                                 @endif               
                                @endforeach 
                                </span>
                            </div>
                    <p><i class="bx bx-location-plus"></i> {{$restaurant->address}}</p>
                </div>
            </div>
            <div class="details">
                <div class="detail-block">
                    <h5><i class="bx bxs-star"></i> 4.2</h5>
                    <span>25+ Ratings</span>
                </div>
                <div class="detail-block">
                    <h5>{{$restaurant->default_preparation_time}} Hours</h5>
                    <span>Delivery Time</span>
                </div>
                <div class="detail-block">
                    <h5>${{$restaurant->cost_for_two_people}}</h5>
                    <span>Cost For Two</span>
                </div>
                <div class="detail-block">
                    <h5>${{$restaurant->min_order_value}}</h5>
                    <span>Minimum Order Amount</span>
                </div>
                <div class="detail-block">
                    @if($restaurant->allow_pickup==1)
                    <h5><i class="bx bx-walk"></i>Pick Up</h5>
                                  <span>Pick Up Available</span>

                               @else
                               <h5><i class="bx bx-walk"></i> No Pick Up</h5>
                                  <span>Pick Up Not Available</span>
                                @endif
                    
                   
                </div>
                
            </div>

        </div>
    </div>

    <section class="py-60">
        <div class="container">
            <div class="row cuisine-dish-wrap">
                <div class="col-lg-8 cuisine-col">
                    <div class="rest-menus" id="rest-menus">
                     
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                aria-labelledby="pills-home-tab">
                                <ul class="nav sub-cat-nav">
                                  @foreach($itemfoods as $item)
                                  @if($restaurant->itemfoods->contains($item->id))
                                    <li class="nav-item">
                                        <a class="nav-link js-scroll-trigger" href="#sub-cat2">{{$item->food_item}}</a>
                                    </li>
                                    @endif
                                    @endforeach
                                </ul>

                                <div class="food-item-cards-wrap">
                                    <div class="sub-cat mt-0" id="sub-cat1">
                                        <h4 class="mb-4">Most Popular</h4>
                                       
                                        <div class="row">
                                        @foreach($itemfoods as $item)
                                        @if($restaurant->itemfoods->contains($item->id))
                                            <div class="col-lg-6">
                                                <div class="food-item-card">
                                                    <div class="food-item-img" style="
                                background-image: url({{asset('assets/images/img2.jpg')}});
                              "></div>
                                                    <div class="food-item-body">
                                                        <h5 class="card-title">
                                                            {{$item->food_item}}
                                                        </h5>
                                                        <p class="description">
                                                           {{$item->description}}
                                                        </p>
                                                        <div class="pricing">
                                                            <div class="price-wrap">
                                                                <div class="non-div food-type-div">
                                                                    <i class="bx bxs-circle"></i>
                                                                </div>
                                                                <span class="price">{{$item->rate}}</span>
                                                                <span class="actual-price">$110.99</span>
                                                            </div>
                                                            
                                                            <div class="add-remove-button">
                                                                <div class="input-group">
                                                                    <input type="button" value="-" class="button-minus"
                                                                        data-field="quantity" />
                                                                    <input type="number" step="1" max="" value="0"
                                                                        name="quantity" class="quantity-field" />
                                                                    <input type="button" value="+" class="button-plus"
                                                                        data-field="quantity" data-toggle="modal"
                                                                        data-target="#add-repeat" />
                                                                </div>
                                                               
                                                          
                                                            </div>
                                                            
                                                        </div>
                                                       
                                                    </div>
                                                   
                                                </div>
                                                </div>
                                                   
                                                   
                                           
                                            @endif
                                            @endforeach  
                                            </div>
                                                               
                                                          
                                        </div>
                                                               
                                     </div>
                                                          
                                    </div>
                                                      
                                </div>           
                                
                                </div>
                        </div>                             
   
                        
                                             
                       
                
                <div class="col-lg-4 cart-col">
                    <div class="cart d-none d-md-block">
                        
                        <div class="cart-body">
                            
                        </div>

                       
                    </div>

                    <!-- Empty cart. Use this when the cart is empty -->

                    <div class="cart">
                        <div class="empty-cart text-center">
                            <h4>Your cart is empty</h4>
                            <p class="mb-0">Add items to get started.</p>
                        </div>
                    </div>

                    <!-- Empty cart end  -->
                </div>
                
            </div>
            
        </div>
         
    </section>
    <!-- modal -->

    <!-- Modal -->
    <div class="modal fade dish-modal" id="dishModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="dish-modal-head">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <!-- <span aria-hidden="true">&times;</span> -->
                            <i class='bx bx-x btn-close'></i>
                        </button>
                        <h5>Spicy Beetroot & Potato Burger</h5>
                    </div>
                    <div class="dish-modal-content">
                        <div class="modifiers">
                            <h5>Salad dressings</h5>
                            <h6>
                                Select minimum 2
                                <span class="badge badge-light float-right">Required</span>
                            </h6>
                            <ul>
                                <li>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1" />
                                        <label class="form-check-label" for="exampleCheck1">Chilly
                                            Sause<span>+$2.50</span></label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck2" />
                                        <label class="form-check-label" for="exampleCheck2">Tomato
                                            Sause<span>+$2.50</span></label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck2" />
                                        <label class="form-check-label" for="exampleCheck2">Tomato
                                            Sause<span>+$2.50</span></label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck2" />
                                        <label class="form-check-label" for="exampleCheck2">Tomato
                                            Sause<span>+$2.50</span></label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck2" />
                                        <label class="form-check-label" for="exampleCheck2">Tomato
                                            Sause<span>+$2.50</span></label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck2" />
                                        <label class="form-check-label" for="exampleCheck2">Tomato
                                            Sause<span>+$2.50</span></label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck2" />
                                        <label class="form-check-label" for="exampleCheck2">Tomato
                                            Sause<span>+$2.50</span></label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck2" />
                                        <label class="form-check-label" for="exampleCheck2">Tomato
                                            Sause<span>+$2.50</span></label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck2" />
                                        <label class="form-check-label" for="exampleCheck2">Tomato
                                            Sause<span>+$2.50</span></label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck3" />
                                        <label class="form-check-label" for="exampleCheck3">Soya
                                            Sause<span>+$2.50</span></label>
                                    </div>
                                </li>
                            </ul>
                            <h5>People also added</h5>
                            <h6>
                                Select upto 5
                                <span class="badge badge-light float-right">Optional</span>
                            </h6>
                            <ul>
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios"
                                            id="exampleRadios1" value="option1" checked />
                                        <label class="form-check-label" for="exampleRadios1">
                                            Thick Crust<span>+$2.50</span>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios"
                                            id="exampleRadios2" value="option2" />
                                        <label class="form-check-label" for="exampleRadios2">
                                            Thin Crust<span>+$2.50</span>
                                        </label>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="text-to-kitchen">
                            <div class="form-group">
                                <textarea class="form-control" id="exampleFormControlTextarea1"
                                    placeholder="Enter additional information about your order" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="add-button-block dish-modal-footer">
                        <span>Item total: <span class="amount">$39</span></span>
                        <button type="button" class="btn btn-primary ">
                            Add Item
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--cart modal popup button-->
    <!-- <div class="popup-cart d-md-none">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#cartmodal">
            <i class="bx bx-cart"></i>
            <span>2</span>
        </button>
    </div> -->


    <!-- modal add or Repeat item -->
    <!-- <div class="modal fade dish-modal" id="add-repeat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class=" mb-0">Repeat Last Used Customization</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class='bx bx-x btn-close'></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="menu-list">
                        <div class="row">

                            <div class="col-md-12 col-12">

                                <h5 class=" ">
                                    Spicy Beetroot
                                </h5>
                                <p class="mb-0">Tomato sauce
                                </p>
                                <p class="mb-0">Onion sauce
                                </p>

                                <div class="d-flex align-items-center justify-content-between mt-3">
                                    <a href="#" data-target="#add-repeat-2" data-toggle="modal" data-dismiss="modal">Add
                                        More</a>
                                    <button type="button" class="btn btn-primary-1 repeat-btn ml-3">
                                        Repeat Last
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- modal repeat item-->
    <!-- modal Add Repeat-2 item -->
    <div class="modal fade dish-modal" id="add-repeat-2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">

                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class='bx bx-x btn-close'></i>
                    </button>

                    <div class="item-details mb-0">
                        <h4>Remove Your Items</h4>

                    </div>

                    <div class="repeat-item">
                        <div class="left">
                            <h5 class="mb-2">Spicy Beetroot</h5>
                            <h6>Size</h6>
                            <p>Medium</p>
                            <h6>Modifier</h6>
                            <p>Tomato sauce</p>
                            <p>Onion Sprinkled</p>
                        </div>
                        <div class="right">
                            <div class="add-remove-button">
                                <div class="input-group">
                                    <input type="button" value="-" class="button-minus" data-field="quantity">
                                    <input type="number" step="1" max="" value="0" name="quantity"
                                        class="quantity-field">
                                    <input type="button" value="+" class="button-plus" data-field="quantity"
                                        data-toggle="modal" data-target="">
                                </div>
                            </div>
                            <h6 class="text-right">$566</h6>
                        </div>
                    </div>
                    <div class="repeat-item">
                        <div class="left">
                            <h5 class="mb-2">Spicy Beetroot</h5>
                            <h6>Size</h6>
                            <p>Medium</p>
                            <h6>Modifier</h6>
                            <p>Tomato sauce</p>
                            <p>Onion Sprinkled</p>
                        </div>
                        <div class="right">
                            <div class="add-remove-button">
                                <div class="input-group">
                                    <input type="button" value="-" class="button-minus" data-field="quantity">
                                    <input type="number" step="1" max="" value="0" name="quantity"
                                        class="quantity-field">
                                    <input type="button" value="+" class="button-plus" data-field="quantity"
                                        data-toggle="modal" data-target="">
                                </div>
                            </div>
                            <h6 class="text-right">$566</h6>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="mobile-footer">
        <div class="row">
            <div class="col-7 item d-flex align-items-center pr-0">
                <div class="mobile-left">
                    <i class="bx bx-cart mob-space bx-sm pl-0"></i>
                    <p class="mob-space">10 Items</p>
                    <h6 class="mob-space">$356.56</h6>
                </div>
            </div>
            <div class="col-5 item text-right">
                <button class="btn btn-primary mob-btn" data-toggle="modal" data-target="#cartmodal">View Cart</button>
            </div>
        </div>
    </div>

    <!--cart modal-->
    <div class="modal fade" id="cartmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog  modal-dialog-scrollable" role="document">
            <div class="modal-content">

                <div class="cart">
                    <div class="cart-head">
                        <span>Your order</span>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class='bx bx-x btn-close'></i>
                        </button>
                    </div>
                    <div class="cart-body">
                        <div class="cart-item">
                            <div class="details">
                                <h6>Spicy Beetroot & Potato Burger</h6>
                                <p class="text-to-kitchen">
                                    Text to kitchen. Delete this if you are not using.
                                    adipisicing elit. Enim illum adipisci natus ducimus,
                                    voluptatem
                                </p>
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
                                        <input type="button" value="-" class="button-minus" data-field="quantity" />
                                        <input type="number" step="1" max="" value="1" name="quantity"
                                            class="quantity-field" />
                                        <input type="button" value="+" class="button-plus" data-field="quantity" />
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
                                        <input type="button" value="-" class="button-minus" data-field="quantity" />
                                        <input type="number" step="1" max="" value="1" name="quantity"
                                            class="quantity-field" />
                                        <input type="button" value="+" class="button-plus" data-field="quantity" />
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
                                        <input type="button" value="-" class="button-minus" data-field="quantity" />
                                        <input type="number" step="1" max="" value="1" name="quantity"
                                            class="quantity-field" />
                                        <input type="button" value="+" class="button-plus" data-field="quantity" />
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
                                        <input type="button" value="-" class="button-minus" data-field="quantity" />
                                        <input type="number" step="1" max="" value="1" name="quantity"
                                            class="quantity-field" />
                                        <input type="button" value="+" class="button-plus" data-field="quantity" />
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
                                        <input type="button" value="-" class="button-minus" data-field="quantity" />
                                        <input type="number" step="1" max="" value="1" name="quantity"
                                            class="quantity-field" />
                                        <input type="button" value="+" class="button-plus" data-field="quantity" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cart-footer">
                        <ul>
                            <li>
                                <h5>
                                    <span>SubTotal</span>
                                    <span class="float-right">$121.99</span>
                                </h5>
                            </li>
                            <li>
                                <p>
                                    <span>Delivery fre</span>
                                    <span class="float-right">$20.00</span>
                                </p>
                            </li>
                            <li>
                                <p>
                                    <span>Tax</span> <span class="float-right">$18.00</span>
                                </p>
                            </li>
                            <li>
                                <h4>
                                    <span>Total</span>
                                    <span class="float-right">$159.99</span>
                                </h4>
                            </li>
                            <!-- <li>
                                <button class="btn btn-primary" onclick="window.location.href='cart.html';">
                                    Proceed to Buy
                                </button>
                            </li> -->
                        </ul>
                    </div>
                </div>


            </div>
        </div>
    </div>

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
                            <li>
                                <a href="enrol-delivery-boy.html">Enroll Delivery Boy</a>
                            </li>
                            <li><a href="faq.html">FAQ</a></li>
                            <li>
                                <a href="terms-and-conditions.html">Terms and Conditions</a>
                            </li>
                            <li><a href="privacy-policy.html">Privacy Policy</a></li>
                            <li>
                                <a href="enrol-your-restaurant.html">Enroll Your Restaurant</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <h3>Subscribe to newsletter</h3>
                        <p>
                            Join our newsletter to keep be informed about offers and news.
                        </p>
                        <form action="">
                            <div class="input-group newsletter-group">
                                <input type="text" class="form-control" placeholder="Enter your email" aria-label=""
                                    aria-describedby="button-addon2" />
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button" id="find-food-btn">
                                        <i class="bx bx-send"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h3>Contact us</h3>
                        <ul class="contact">
                            <li>
                                <i class="bx bx-location-plus"></i><span>Down Town Building, MG Road, Toronto, Canada,
                                    784578</span>
                            </li>
                            <li>
                                <i class="bx bx-mail-send"></i><span>hello@cedextech.com</span>
                            </li>
                            <li><i class="bx bx-phone"></i><span>+91-8129881750</span></li>
                        </ul>
                        <div class="social">
                            <i class="bx bxl-facebook-circle"></i>
                            <i class="bx bxl-twitter"></i>
                            <i class="bx bxl-youtube"></i>
                            <i class="bx bxl-instagram-alt"></i>
                        </div>
                    </div>
                </div>
                <!-- End row -->
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

        <!-- <div class="mobile-footer">
            <div class="row">
                <div class="col-4 item">
                    <a href="home.html">
                        <i class="bx bx-search"></i>
                        <span>Search</span>
                    </a>
                </div>
                <div class="col-4 item">
                    <a href="cart.html">
                        <i class="bx bx-cart"><span class="badge badge-light">22</span></i>
                        <span>Cart</span>
                    </a>
                </div>
                <div class="col-4 item">
                    <a href="my-account.html">
                        <i class="bx bx-user"></i>
                        <span>Account</span>
                    </a>
                </div>
            </div>
        </div> -->

        <!-- mobile footer end -->
    </footer>

    <!-- footer end -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="{{asset('assets/js/custom.js')}}"></script>
</body>

</html>