<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap" rel="stylesheet">
    <!-- google font -->

    <!-- Feather icon -->
    <script src="https://unpkg.com/feather-icons"></script>
    <!-- Feather icon -->


    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> -->
    <link rel="stylesheet" href="css/style_checkout.css">
</head>
<body >
         <!-- Navbar -->
         <nav class="navbar">
            <a href="#" class="navbar-logo"><span>MY</span>Times</a>
            <div class="navbar-nav">
                <a href="/">Home</a>
                <a href="/Menu">Menu</a>
                <a href="/#info">About</a>
                <a href="/CheckOut">Cart</a>
            </div>
            <div class="nav-search">
                <a href="#" id="search"><i data-feather="search"></i></a>
                <a href="#" id="shopping-cart"><i data-feather="shopping-cart"></i></a>
                <a href="#" id="menu"><i data-feather="menu"></i></a>
            </div>
         </nav>
         <!-- Navbar -->

         <!-- Content start -->
         <section class="content" id="home">
            <main class="main-content">
                <h1>Tradisional Artisan Bakery</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas sint animi saepe optio ad. Voluptatibus laudantium labore voluptate quisquam est qui vero dolorem, sequi nostrum.</p>
                <a href="#" class="cta">Shop Now</a>
            </main>
         </section>
         <!-- Content end -->

         <!-- Shoping cart start -->
         <section class="shoping-cart">
             <div class="container">
                 <div class="row">
                     <div class="col-1">
                        <h1 class="judul">Your Bil</h1>
                        <!-- cart -->
                        <div class="cart-body">
                            <div class="bil-1">
                                <img src="img/menu3.jpeg" alt="Photo" class="card-img-top" alt="...">
                            </div>
                            <div class="bil-2">
                                <h1 class="card-text">Cheesecake</h1>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, veniam.</p>
                            </div>
                            <div class="bil-3" >Rp.20000</div>
                            <div class="bil-4" id="item-count">2x</div>
                            <div class="bil-5">
                                <div class="min">
                                    <button>-</button>
                                </div>
                                <div class="plus">
                                    <button>+</button>
                                </div>
                            </div>
                        </div>
                        <!-- cart -->
                        <!-- cart -->
                        <div class="cart-body">
                            <div class="bil-1">
                                <img src="img/menu2.jpeg" alt="Photo" class="card-img-top" alt="...">
                            </div>
                            <div class="bil-2">
                                <h1 class="card-text">Cheesecake</h1>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, veniam.</p>
                            </div>
                            <div class="bil-3" >Rp.20000</div>
                            <div class="bil-4" id="item-count">2x</div>
                            <div class="bil-5">
                                <div class="min">
                                    <button>-</button>
                                </div>
                                <div class="plus">
                                    <button>+</button>
                                </div>
                            </div>
                        </div>
                        <!-- cart -->
                        <!-- cart -->
                        <div class="cart-body">
                            <div class="bil-1">
                                <img src="img/menu4.jpeg" alt="Photo" class="card-img-top" alt="...">
                            </div>
                            <div class="bil-2">
                                <h1 class="card-text">Cheesecake</h1>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, veniam.</p>
                            </div>
                            <div class="bil-3" >Rp.20000</div>
                            <div class="bil-4" id="item-count">2x</div>
                            <div class="bil-5">
                                <div class="min">
                                    <button>-</button>
                                </div>
                                <div class="plus">
                                    <button>+</button>
                                </div>
                            </div>
                        </div>
                        <!-- cart -->
                    </div>
                    <div class="col-2">
                        <h1 class="judul">Payment</h1>
                        <div class="payment-details">

                            <div class="subtotal">
                                <span>Sub Total Pesanan</span>
                                <span>Rp. 50,000</span>
                            </div>

                            <div class="pajak">
                                <span>Pajak</span>
                                <span>Rp. 30,000</span>
                            </div>

                            <div class="diskon">
                                <span>Diskon</span>
                                <span>Rp. 20,000</span>
                            </div>

                            <div class="total">
                                <span>Total : </span>
                                <span>Rp. 100,000</span> 
                            </div>
                            <button>Bayar</button>
                        </div>
                    </div>
                </div>
            </div>
         </section>
         <!-- Shoping cart end -->

         <!-- footer -->
         <footer id="footer" class="footer">
            <!-- <p>&copy; 2023 Nama Perusahaan. All rights reserved.</p> -->
            <div class="container">
                <!-- <div class="row"> -->
                    <div class="col-1">
                        <div class="row">
                            <div class="colm-1">
                                <img src="img/logo.jpeg" alt="Photo" class="card-img-top" alt="...">
                                <p href=""><i data-feather="instagram" ></i></p>
                                <p href=""><i data-feather="phone" ></i></p>
                                <p href=""><i data-feather="youtube" ></i></p>
                            </div>
                            <div class="colm-2">
                            <p>MyCafe</p>
                            <p href="">@My_Cafe</p>
                            <p href="">083291275245</p>
                            <p href="">MyCafe_</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-1">
                        <p>contact us</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, quibusdam!</p>
                    </div>
                    <div class="col-2">
                        <!-- <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div> -->
                    </div>
                <!-- </div> -->
            </div>
         </footer>
         <!-- footer -->

    <!-- Feather icon -->
    <script>
      feather.replace();
    </script>
    <!-- Feather icon -->

    <!-- js -->
    <script src="js/script.js"></script>

</body>
</html>