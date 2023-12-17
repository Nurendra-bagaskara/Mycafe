// toggle class active
const navbarNav = document.querySelector('.navbar-nav');

// ketika icon menu di klik
document.querySelector('#menu').onclick = () => {
    navbarNav.classList.toggle('active');
};

// close sidebar (klik dimana saja)
const menu = document.querySelector('#menu');

document.addEventListener('click', function(e) {
    if(!menu.contains(e.target) && !navbarNav.contains(e.target)){
        navbarNav.classList.remove('active');
    }
})

// owl carousel
// $(document).ready(function(){
//     $(".owl-carousel").owlCarousel({
//        items: 3,
//        loop: true,
//        margin: 10,
//        autoplay: true,
//        autoplayTimeout: 2000,
//        responsive: {
//           0: {
//              items: 1
//           },
//           600: {
//              items: 3
//           },
//           1000: {
//              items: 5
//           }
//        }
//     });
//  });

{/* <script> */}
    document.addEventListener("DOMContentLoaded", function () {
        // Dapatkan elemen-elemen yang diperlukan
        const itemCountElement = document.getElementById("item-count");
        const decreaseButton = document.getElementById("decrease");
        const increaseButton = document.getElementById("increase");

        // Fungsi untuk mengurangi jumlah item
        const decreaseItem = () => {
            let itemCount = parseInt(itemCountElement.innerText);
            if (itemCount > 1) {
                itemCount--;
                itemCountElement.innerText = itemCount + "x";
            }
        };

        // Fungsi untuk menambah jumlah item
        const increaseItem = () => {
            let itemCount = parseInt(itemCountElement.innerText);
            itemCount++;
            itemCountElement.innerText = itemCount + "x";
        };

        // Tambahkan event listener untuk tombol decrease
        decreaseButton.addEventListener("click", decreaseItem);

        // Tambahkan event listener untuk tombol increase
        increaseButton.addEventListener("click", increaseItem);
    });
// </script>

 