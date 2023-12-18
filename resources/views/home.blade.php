<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyCafe</title>

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap" rel="stylesheet">
    <!-- google font -->

    <!-- Feather icon -->
    <script src="https://unpkg.com/feather-icons"></script>
    <!-- Feather icon -->

    <!-- Tambahkan stylesheet Owl Carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    <!-- Tambahkan script jQuery (diperlukan oleh Owl Carousel) -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <!-- Tambahkan script Owl Carousel -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>



    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body >
         <!-- Navbar -->
         <nav class="navbar">
            <a href="#" class="navbar-logo"><span>MY</span>Times</a>
            <div class="navbar-nav">
                <a href="/">Home</a>
                <a href="Menu">Menu</a>
                <a href="#info">About</a>
                <a href="/Checkout">Cart</a>
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
         <!-- Content -->

         <!-- Menu -->
         <section id="pilihan" class="about">
             <h2><span>Customer</span> Favourites</h2>
             
            <div class="row">
                <div class="owl-carousel">
                    <!-- 1 card -->
                    @foreach($data_products as $items)
                    <div class="card" style="width: 18rem;">
                    <img src="{{$items['image']}}" alt="Photo" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h1 class="card-text">{{$items['nama_produk']}}</h1>
                            <p class="card-text">{{$items['deskripsi']}}</p>
                            <p class= "Harga">Rp. {{$items['Harga']}}</p>
                            <button>add</button>
                        </div>
                    </div>
                    @endforeach
                    <!-- 1 card -->
                </div>
                <a href="Menu">View All -></a>
            </div>
         </section>
         <!-- Menu -->

         <!-- About -->
         <Section id="info" class="info">
            <div class="card-info">
                <h2>About Us</h2>
                <div class="container">
                <div class="col1">
                    <h1>Why Choose us</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At labore sit, dolorum reprehenderit est voluptate dicta. Distinctio numquam quisquam consequatur quos dolor enim quae sunt.</p>
                    <div class="info-body">
                        <div class="col-1">
                            <p class="icon"><i data-feather="trash-2" ></i> Cleanliness</p>
                            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, maxime?</p>

                            <p class="icon"><i data-feather="truck" ></i> Delivery</p>
                            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, maxime?</p>
                        </div>
                        <div class="col-2">
                            <p class="icon"><i data-feather="map-pin" ></i> Location</p>
                            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, maxime?</p>

                            <p class="icon"><i data-feather="award" ></i> Acivment</p>
                            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, maxime?</p>
                        </div>
                    </div>
                </div>
                <div class="col2">
                    <img src="img/Abot1.jpeg" alt="Photo" class="card-img-top" alt="...">
                </div>
                </div>
            </div>
         </Section>
         <!-- About -->

         <!-- footer -->
         <footer id="footer" class="footer">
            <p>&copy; 2023 Nama Perusahaan. All rights reserved.</p>
         </footer>
         <!-- footer -->

    <!-- Feather icon -->
    <script>
      feather.replace();
    </script>
    <!-- Feather icon -->

    <!-- owl Carousel -->
    <script>
        $(document).ready(function(){
            $(".owl-carousel").owlCarousel({
                items: 4, // Jumlah item yang ditampilkan
                loop: true, // Mengaktifkan mode loop
                margin: 10, // Jarak antar item
                autoplay: true, // Menjalankan otomatis
                autoplayTimeout: 7000, // Waktu tampilan setiap item (ms)
                responsive: {
                0: {
                    items: 2 // Jumlah item pada layar kurang dari 600px
                },
                600: {
                    items: 3 // Jumlah item pada layar 600px atau lebih besar
                },
                1024: {
                    items: 4 // Jumlah item pada layar 600px atau lebih besar
                }
                // Tambahkan aturan responsif lainnya sesuai kebutuhan
            }
            });
        });
    </script>
    <!-- owl Carousel -->


    <!-- js -->
    <script src="js/script.js"></script>

    <!-- bootstrap -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script> -->
    <!-- bootstrap -->
</body>
</html>