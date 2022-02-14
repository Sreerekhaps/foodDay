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
    <title>FoodDay - My Account</title>
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
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="restaurant-listing.html">Restaurants</a>
                        </li> -->

                        <!-- <li class="nav-item">
                            <a class="nav-link" href="login.html">Sign In</a>
                        </li> -->

                        <li class="nav-item">
                            <a class="nav-link" href="/myaccount">
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
            <h3 class="mb-0">My Account</h3>
        </div>
    </div>

    <section class="py-60">
        <div class="container">

            <div class="row">

                <div class="col-lg-3">

                    <div class="my-account-menu">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                            aria-orientation="vertical">
                            <a class="nav-link active" id="v-pills-profile-tab" data-toggle="pill"
                                href="#v-pills-orders" role="tab" aria-controls="v-pills-profile"
                                aria-selected="false"><i class='bx bxs-cart'></i> Orders</a>
                            <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-wishlist"
                                role="tab" aria-controls="v-pills-messages" aria-selected="false"><i
                                    class='bx bxs-heart'></i> Wishlist</a>
                            <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-address"
                                role="tab" aria-controls="v-pills-messages" aria-selected="false"><i
                                    class='bx bxs-home-smile'></i> Addresses</a>
                            <a class="nav-link"  id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-account"
                                role="tab" aria-controls="v-pills-settings" aria-selected="false"><i
                                    class='bx bxs-user-rectangle'></i> Account Details</a>
                            <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-password"
                                role="tab" aria-controls="v-pills-settings" aria-selected="false"><i
                                    class='bx bxs-wallet-alt'></i> Change Password</a>
                            <a class="nav-link"  href="/logoutuser"
                                role="tab" aria-controls="v-pills-settings" aria-selected="false"><i
                                    class='bx bxs-log-out'></i> Logout</a>
                            <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-no-orders"
                                role="tab" aria-controls="v-pills-settings" aria-selected="false"><i
                                    class='bx bxs-log-out'></i> No Orders</a>
                        </div>
                    </div>

                </div>

                <div class="col-lg-9">
                    <div class="account-menu-items">
                        <div class="tab-content" id="v-pills-tabContent">

                            <div class="tab-pane fade show active" id="v-pills-orders" role="tabpanel"
                                aria-labelledby="v-pills-profile-tab">
                                <div class="my-account-content">
                                    <h4>Order History</h4>

                                    <div class="row">

                                        <div class="col-md-12">
                                            <div class="card order-card">
                                                <div class="card-body">
                                                    <div class="rest-delivery">
                                                        <h5>Down Town Restaurant</h5>
                                                        <h6>Delivered on Oct 12, 7:28 PM</h6>
                                                    </div>
                                                    <p class="rest-address">
                                                        <i class="bx bx-location-plus"></i> 7th Street, Downtown, West
                                                        Avenue, London, United Kingodom, 784512.
                                                    </p>
                                                    <div class="order-id-time">
                                                        <p>Order #245458745454</p>
                                                        <p>Oct 12, 7:00 PM</p>
                                                    </div>
                                                    <p class="items">Veg Masala roll, Veg burger, Veg special
                                                        spicy noodles</p>
                                                    <div class="total-buttons">
                                                        <h5>Total Paid: $199.00</h5>
                                                        <div class="button-wrap">
                                                            <button type="button"
                                                                class="btn btn-outline-primary btn-sm"><i
                                                                    class="bx bx-star"></i>
                                                                Rate</button>
                                                            <button type="button" data-toggle="modal"
                                                                class="btn btn-outline-primary btn-sm"
                                                                data-target="#exampleModal2">
                                                                Details</button>
                                                            <button class="btn btn-primary btn-sm"><i
                                                                    class="bx bx-download align-middle mr-1"></i>
                                                                Download</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="card order-card">
                                                <div class="card-body">
                                                    <div class="rest-delivery">
                                                        <h5>Down Town Restaurant</h5>
                                                        <h6>Delivered on Oct 12, 7:28 PM</h6>
                                                    </div>
                                                    <p class="rest-address">
                                                        <i class="bx bx-location-plus"></i> 7th Street, Downtown, West
                                                        Avenue, London, United Kingodom, 784512.
                                                    </p>
                                                    <div class="order-id-time">
                                                        <p>Order #245458745454</p>
                                                        <p>Oct 12, 7:00 PM</p>
                                                    </div>
                                                    <p class="items">Veg Masala roll, Veg burger, Veg special
                                                        spicy noodles</p>
                                                    <div class="total-buttons">
                                                        <h5>Total Paid: $199.00</h5>
                                                        <div class="button-wrap">
                                                            <button type="button"
                                                                class="btn btn-outline-primary btn-sm"><i
                                                                    class="bx bx-star"></i>
                                                                Rate</button>
                                                            <button type="button" data-toggle="modal"
                                                                class="btn btn-outline-primary btn-sm"
                                                                data-target="#exampleModal2">
                                                                Details</button>
                                                            <button class="btn btn-primary btn-sm"><i
                                                                    class="bx bx-download align-middle mr-1"></i>
                                                                Download</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="card order-card">
                                                <div class="card-body">
                                                    <div class="rest-delivery">
                                                        <h5>Down Town Restaurant</h5>
                                                        <h6>Delivered on Oct 12, 7:28 PM</h6>
                                                    </div>
                                                    <p class="rest-address">
                                                        <i class="bx bx-location-plus"></i> 7th Street, Downtown, West
                                                        Avenue, London, United Kingodom, 784512.
                                                    </p>
                                                    <div class="order-id-time">
                                                        <p>Order #245458745454</p>
                                                        <p>Oct 12, 7:00 PM</p>
                                                    </div>
                                                    <p class="items">Veg Masala roll, Veg burger, Veg special
                                                        spicy noodles</p>
                                                    <div class="total-buttons">
                                                        <h5>Total Paid: $199.00</h5>
                                                        <div class="button-wrap">
                                                            <button type="button"
                                                                class="btn btn-outline-primary btn-sm"><i
                                                                    class="bx bx-star"></i>
                                                                Rate</button>
                                                            <button type="button" data-toggle="modal"
                                                                class="btn btn-outline-primary btn-sm"
                                                                data-target="#exampleModal2">
                                                                Details</button>
                                                            <button class="btn btn-primary btn-sm"><i
                                                                    class="bx bx-download align-middle mr-1"></i>
                                                                Download</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="card order-card">
                                                <div class="card-body">
                                                    <div class="rest-delivery">
                                                        <h5>Down Town Restaurant</h5>
                                                        <h6>Delivered on Oct 12, 7:28 PM</h6>
                                                    </div>
                                                    <p class="rest-address">
                                                        <i class="bx bx-location-plus"></i> 7th Street, Downtown, West
                                                        Avenue, London, United Kingodom, 784512.
                                                    </p>
                                                    <div class="order-id-time">
                                                        <p>Order #245458745454</p>
                                                        <p>Oct 12, 7:00 PM</p>
                                                    </div>
                                                    <p class="items">Veg Masala roll, Veg burger, Veg special
                                                        spicy noodles</p>
                                                    <div class="total-buttons">
                                                        <h5>Total Paid: $199.00</h5>
                                                        <div class="button-wrap">
                                                            <button type="button"
                                                                class="btn btn-outline-primary btn-sm"><i
                                                                    class="bx bx-star"></i>
                                                                Rate</button>
                                                            <button type="button" data-toggle="modal"
                                                                class="btn btn-outline-primary btn-sm"
                                                                data-target="#exampleModal2">
                                                                Details</button>
                                                            <button class="btn btn-primary btn-sm"><i
                                                                    class="bx bx-download align-middle mr-1"></i>
                                                                Download</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="card order-card">
                                                <div class="card-body">
                                                    <div class="rest-delivery">
                                                        <h5>Down Town Restaurant</h5>
                                                        <h6>Delivered on Oct 12, 7:28 PM</h6>
                                                    </div>
                                                    <p class="rest-address">
                                                        <i class="bx bx-location-plus"></i> 7th Street, Downtown, West
                                                        Avenue, London, United Kingodom, 784512.
                                                    </p>
                                                    <div class="order-id-time">
                                                        <p>Order #245458745454</p>
                                                        <p>Oct 12, 7:00 PM</p>
                                                    </div>
                                                    <p class="items">Veg Masala roll X 1, Veg burger x 2, Veg special
                                                        spicy noodles x 2</p>
                                                    <div class="total-buttons">
                                                        <h5>Total Paid: $199.00</h5>
                                                        <div class="button-wrap">
                                                            <button type="button"
                                                                class="btn btn-outline-primary btn-sm"><i
                                                                    class="bx bx-star"></i>
                                                                Rate</button>
                                                            <button type="button" data-toggle="modal"
                                                                class="btn btn-outline-primary btn-sm"
                                                                data-target="#exampleModal2">
                                                                Details</button>
                                                            <button class="btn btn-primary btn-sm"><i
                                                                    class="bx bx-download align-middle mr-1"></i>
                                                                Download</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="card order-card">
                                                <div class="card-body">
                                                    <div class="rest-delivery">
                                                        <h5>Down Town Restaurant</h5>
                                                        <h6>Delivered on Oct 12, 7:28 PM</h6>
                                                    </div>
                                                    <p class="rest-address">
                                                        <i class="bx bx-location-plus"></i> 7th Street, Downtown, West
                                                        Avenue, London, United Kingodom, 784512.
                                                    </p>
                                                    <div class="order-id-time">
                                                        <p>Order #245458745454</p>
                                                        <p>Oct 12, 7:00 PM</p>
                                                    </div>
                                                    <p class="items">Veg Masala roll, Veg burger, Veg special
                                                        spicy noodles</p>
                                                    <div class="total-buttons">
                                                        <h5>Total Paid: $199.00</h5>
                                                        <div class="button-wrap bd-example">
                                                            <button type="button"
                                                                class="btn btn-outline-primary btn-sm"><i
                                                                    class="bx bx-star"></i>
                                                                Rate</button>
                                                            <button type="button" data-toggle="modal"
                                                                class="btn btn-outline-primary btn-sm"
                                                                data-target="#exampleModal2">
                                                                Details</button>
                                                            <button class="btn btn-primary btn-sm"><i
                                                                    class="bx bx-download align-middle mr-1"></i>
                                                                Download</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>



                                    </div>

                                </div>
                            </div>


                            <div class="tab-pane fade" id="v-pills-wishlist" role="tabpanel"
                                aria-labelledby="v-pills-messages-tab">
                                <div class="my-account-content">
                                    <h4>Wishlist</h4>
                                    <div class="table-responsive-lg">
                                        <table class="wishlist-table table mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Product</th>
                                                    <th>Price</th>
                                                    <th>Quantity</th>
                                                    <th>Total</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <tr>
                                                    <td class="product-item">
                                                        <div class="dish-image">
                                                            <a href="#"><img src="assets/images/img1.jpg"
                                                                    alt="product"></a>
                                                        </div>
                                                        <div class="product-name">
                                                            <a href="#">Spicy Beetroot &amp; Potato Burger</a>
                                                        </div>
                                                    </td>
                                                    <td>$250</td>
                                                    <td>
                                                        <div class="add-remove-button">
                                                            <div class="input-group">
                                                                <input type="button" value="-" class="button-minus"
                                                                    data-field="quantity">
                                                                <input type="number" step="1" max="" value="1"
                                                                    name="quantity" class="quantity-field">
                                                                <input type="button" value="+" class="button-plus"
                                                                    data-field="quantity">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn-link">
                                                            <i class='bx bx-cart'></i>Add to cart</button>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="float-right"><i class="bx bx-trash"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="product-item">
                                                        <div class="dish-image">
                                                            <a href="#"><img src="assets/images/img2.jpg"
                                                                    alt="product"></a>
                                                        </div>
                                                        <div class="product-name">
                                                            <a href="#">Spicy Beetroot &amp; Potato Burger</a>
                                                        </div>
                                                    </td>
                                                    <td>$250</td>
                                                    <td>
                                                        <div class="add-remove-button">
                                                            <div class="input-group">
                                                                <input type="button" value="-" class="button-minus"
                                                                    data-field="quantity">
                                                                <input type="number" step="1" max="" value="1"
                                                                    name="quantity" class="quantity-field">
                                                                <input type="button" value="+" class="button-plus"
                                                                    data-field="quantity">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn-link">
                                                            <i class='bx bx-cart'></i>Add to cart</button>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="float-right"><i class="bx bx-trash"></i></a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="product-item">
                                                        <div class="dish-image">
                                                            <a href="#"><img src="assets/images/img3.jpg"
                                                                    alt="product"></a>
                                                        </div>
                                                        <div class="product-name">
                                                            <a href="#">Spicy Beetroot &amp; Potato Burger</a>
                                                        </div>
                                                    </td>
                                                    <td>$250</td>
                                                    <td>
                                                        <div class="add-remove-button">
                                                            <div class="input-group">
                                                                <input type="button" value="-" class="button-minus"
                                                                    data-field="quantity">
                                                                <input type="number" step="1" max="" value="1"
                                                                    name="quantity" class="quantity-field">
                                                                <input type="button" value="+" class="button-plus"
                                                                    data-field="quantity">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn-link">
                                                            <i class='bx bx-cart'></i>Add to cart</button>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="float-right"><i class="bx bx-trash"></i></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>


                            <div class="tab-pane fade" id="v-pills-address" role="tabpanel"
                                aria-labelledby="v-pills-messages-tab">
                                <div class="my-account-content food-item-cards-wrap">
                                    <h4>Manage Addresses</h4>
                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="card address-card">
                                                <div class="card-body">
                                                    <h5 class="card-title">Home</h5>
                                                    <h6>John Doe, 7845 155 555,</h6>
                                                    <p class="card-text">
                                                        7th Street, Downtown, West Avenue, London, United Kingodom,
                                                        784512.
                                                    </p>
                                                    <button type="button" class="btn-link" data-toggle="modal"
                                                        data-target="#exampleModal">
                                                        <i class='bx bx-edit'></i>Edit</button>
                                                    <button class="btn-link"><i class='bx bx-trash'></i>Delete</button>
                                                    <button class="btn-link"><i class='bx bx-location-plus'></i>Set as
                                                        default</button>

                                                    <!-- <a href="#" class=""><i class='bx bx-trash' ></i>Delete</a> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="card address-card">
                                                <div class="card-body">
                                                    <h5 class="card-title">Home</h5>
                                                    <h6>John Doe, 7845 155 555,</h6>
                                                    <p class="card-text">
                                                        7th Street, Downtown, West Avenue, London, United Kingodom,
                                                        784512.
                                                    </p>
                                                    <button type="button" class="btn-link" data-toggle="modal"
                                                        data-target="#exampleModal">
                                                        <i class='bx bx-edit'></i>Edit</button>
                                                    <button class="btn-link"><i class='bx bx-trash'></i>Delete</button>
                                                    <button class="btn-link"><i class='bx bx-location-plus'></i>Set as
                                                        default</button>
                                                    <!-- <a href="#" class=""><i class='bx bx-trash' ></i>Delete</a> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="card address-card">
                                                <div class="card-body">
                                                    <h5 class="card-title">Home</h5>
                                                    <h6>John Doe, 7845 155 555,</h6>
                                                    <p class="card-text">
                                                        7th Street, Downtown, West Avenue, London, United Kingodom,
                                                        784512.
                                                    </p>
                                                    <button type="button" class="btn-link" data-toggle="modal"
                                                        data-target="#exampleModal">
                                                        <i class='bx bx-edit'></i>Edit</button>
                                                    <button class="btn-link"><i class='bx bx-trash'></i>Delete</button>
                                                    <button class="btn-link"><i class='bx bx-location-plus'></i>Set as
                                                        default</button>
                                                    <!-- <a href="#" class=""><i class='bx bx-trash' ></i>Delete</a> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="card address-card">
                                                <div class="card-body">
                                                    <h5 class="card-title">Home</h5>
                                                    <h6>John Doe, 7845 155 555,</h6>
                                                    <p class="card-text">
                                                        7th Street, Downtown, West Avenue, London, United Kingodom,
                                                        784512.
                                                    </p>
                                                    <button type="button" class="btn-link" data-toggle="modal"
                                                        data-target="#exampleModal">
                                                        <i class='bx bx-edit'></i>Edit</button>
                                                    <button class="btn-link"><i class='bx bx-trash'></i>Delete</button>
                                                    <button class="btn-link"><i class='bx bx-location-plus'></i>Set as
                                                        default</button>
                                                    <!-- <a href="#" class=""><i class='bx bx-trash' ></i>Delete</a> -->
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#exampleModal">Add Address</button>

                                </div>
                            </div>

                            <div class="tab-pane fade" id="v-pills-account" role="tabpanel"
                                aria-labelledby="v-pills-settings-tab">
                                <div class="my-account-content">
                                    <h4>Account Details</h4>
                                    <form method="post" action="{{route('profile_update',$LoggedUserInfo->id)}}">
                                    @csrf
                                    @method('PATCH')
                                        <div class="form-row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="First Name" value="{{$LoggedUserInfo['first_name']}}">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Last Name" value="{{$LoggedUserInfo['last_name']}}">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Email" value="{{$LoggedUserInfo['email']}}">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Mobile" value="{{$LoggedUserInfo['mobile']}}">
                                                </div>
                                                <div class="form-group  mb-0">
                                                    <button class="btn btn-primary">Save Changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>


                            <div class="tab-pane fade" id="v-pills-password" role="tabpanel"
                                aria-labelledby="v-pills-settings-tab">
                                <div class="my-account-content">
                                    <h4>Change Password</h4>
                                    <form>
                                        <div class="form-row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control"
                                                        placeholder="Current Password">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="New Password">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control"
                                                        placeholder="Confirm New Password">
                                                </div>
                                                <div class="form-group  mb-0">
                                                    <button class="btn btn-primary">Save Changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="v-pills-no-orders" role="tabpanel"
                                aria-labelledby="v-pills-settings-tab">
                                <div class="my-account-content">
                                    <h4>Order History</h4>
                                    <div class="empty-orders-div ">
                                        <!-- <img src="assets/images/cart.svg" alt=""> -->
                                        <i class="bx bx-shopping-bag"></i>
                                        <p class="mb-1">Look like you haven't made any orders yet.</p>
                                        <p class="mb-0">Click <a href="">here</a> to continue shopping.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

                <!-- View Orders Modal -->
                <div class="modal fade address-model view-orders-model" id="exampleModal2" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <div class="text-center w-100">
                                    <h5 class="modal-title" id="exampleModalLabel">Order #29687</h5>
                                    <h6>September 07 2019, 09:08 AM</h6>
                                </div>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <i class="bx bx-x btn-close"></i>
                                </button>
                            </div>
                            <div class="modal-body">

                                <table class="table table-striped">
                                    <tbody>
                                        <tr>
                                            <td>Order status</td>
                                            <td>Pending</td>
                                        </tr>
                                        <tr>
                                            <td>Total amount</td>
                                            <td>$20.00</td>
                                        </tr>
                                        <tr>
                                            <td>Total discount</td>
                                            <td>$0.00</td>
                                        </tr>
                                        <tr>
                                            <td>Delivery charge</td>
                                            <td>$5.00</td>
                                        </tr>
                                        <tr>
                                            <td>Amount Paid</td>
                                            <td>$25.63</td>
                                        </tr>
                                    </tbody>
                                </table>

                                <table class="table table-striped table-responsive mt-5 mb-0">
                                    <thead>
                                        <tr>
                                            <th scope="col">Ordered Items</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1 x Chicken spring rolls
                                                <h6 class="my-2">Modifiers</h6>
                                                <ul class="modifiers">
                                                    <h6>Sauce</h6>
                                                    <li>
                                                        <div class="items-list"><span>Tomato
                                                            </span><span>$12.00</span></div>
                                                    </li>
                                                    <li>
                                                        <div class="items-list"><span>Chilly
                                                            </span><span>$12.00</span></div>
                                                    </li>
                                                    <h6 class="my-2">Mayonnaise</h6>
                                                    <li>
                                                        <div class="items-list"><span>mayonnaise
                                                                with olive oil</span> <span>$1.00</span></div>
                                                    </li>
                                                </ul>
                                                <h6 class=" my-2">Size</h6>
                                                <ul class="modifiers">
                                                    <li>
                                                        <div class="items-list"><span>Large
                                                            </span><span>$1.00</span>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <h6 class="my-2">Addons</h6>
                                                <ul class="modifiers">
                                                    <li>
                                                        <div class="items-list"><span>Fries</span>
                                                            <span>$34.00</span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="items-list">
                                                            <span>Chocolate</span>
                                                            Brownie <span>$3.00</span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>$19.00</td>
                                            <td>$19.00</td>
                                        </tr>
                                        <tr>
                                            <td>1 x Chicken spring rolls
                                                <h6 class="my-2">Modifiers</h6>
                                                <ul class="modifiers">
                                                    <h6>Sauce</h6>
                                                    <li>
                                                        <div class="items-list"><span>Tomato
                                                            </span><span>$12.00</span></div>
                                                    </li>
                                                    <li>
                                                        <div class="items-list"><span>Chilly
                                                            </span><span>$12.00</span></div>
                                                    </li>
                                                    <h6 class="my-2">Mayonnaise</h6>
                                                    <li>
                                                        <div class="items-list"><span>mayonnaise
                                                                with olive oil</span> <span>$1.00</span></div>
                                                    </li>
                                                </ul>
                                                <h6 class=" my-2">Size</h6>
                                                <ul class="modifiers">
                                                    <li>
                                                        <div class="items-list"><span>Large
                                                            </span><span>$1.00</span>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <h6 class="my-2">Addons</h6>
                                                <ul class="modifiers">
                                                    <li>
                                                        <div class="items-list"><span>Fries</span>
                                                            <span>$34.00</span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="items-list">
                                                            <span>Chocolate</span>
                                                            Brownie <span>$3.00</span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>$20.00</td>
                                            <td>$40.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- View Orders Modal End -->


                <!-- Address Modal -->
                <div class="modal fade address-model" id="exampleModal" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <i class="bx bx-x btn-close"></i>
                                </button>
                                <h5 class="mb-4">Add Delivery Address</h5>
                                <form>
                                    <div class="form-row">

                                        <div class="form-group col-lg-12">
                                            <input type="text" class="form-control" placeholder="Address Type">
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <input type="text" class="form-control" placeholder="First Name">
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <input type="text" class="form-control" placeholder="Last Name">
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <input type="text" class="form-control" placeholder="Email">
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <input type="text" class="form-control" placeholder="Mobile">
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <input type="text" class="form-control" placeholder="City">
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <input type="text" class="form-control" placeholder="Zip Code">
                                        </div>
                                        <div class="form-group col-lg-12">
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                                placeholder="Adress"></textarea>
                                        </div>

                                        <div class="form-group col-md-6 mb-md-0 d-none d-md-block">
                                            <button type="button" class="btn btn-outline-primary w-100"
                                                data-dismiss="modal" aria-label="Close">Close</button>
                                        </div>
                                        <div class="form-group col-md-6 mb-0">
                                            <button class="btn btn-secondary w-100">Save changes</button>
                                        </div>

                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Address Modal End -->

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