<div class="burger__menu" id="burgerm">
            <div class="burger__menu-container">
                <div class="search">
                    <form action="">
                        <img src="./assets/img/search.svg" alt="">
                        <input type="text" placeholder="SEARCH">
                    </form>
                </div>
                <ul>
                    <li><a href="mens_news.php">NEW</a></li>
                    <li><a href="mens_news.php">MEN'S</a></li>
                    <li><a href="mens_news.php">WOMEN'S</a></li>
                    <li><a href="mens_news.php">PACKS & BAGS</a></li>
                    <li><a href="mens_news.php">FOOTWEAR</a></li>
                    <li><a href="mens_news.php">ACCESSORIES</a></li>
                </ul>
                
            </div>
        </div>

        <footer>
            <div class="container">
                <div class="top">
                    <div class="left">
                        <div class="logo">D-TAC</div>
                        <div class="icons">
                            <div class="icon">
                                <a href="#">
                                    <img src="./assets/img/facebook.svg" alt="">
                                </a>
                            </div>
                            <div class="icon">
                                <a href="#">
                                    <img src="./assets/img/instagram.svg" alt="">
                                </a>
                            </div>
                            <div class="icon">
                                <a href="#">
                                    <img src="./assets/img/tiktok.svg" alt="">
                                </a>
                            </div>
                            <div class="icon">
                                <a href="#">
                                    <img src="./assets/img/youtube.svg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="right">
                        <ul>
                            <li><a href="#">NEW</a></li>
                            <li><a href="#">MEN'S</a></li>
                            <li><a href="#">WOMEN'S</a></li>
                        </ul>
                        <ul>
                            <li><a href="#">PACKS & BAGS</a></li>
                            <li><a href="#">FOOTWEAR</a></li>
                            <li><a href="#">ACCESSORIES</a></li>
                        </ul>
                    </div>
                </div>
                <div class="bot">
                    <span>© 2023 D-TAC, Inc. All rights reserved</span>
                </div>
            </div>
        </footer>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="./assets/css/animate.css" type="text/css" />
    <!-- FOR MODAL -->
    <script src="./assets/js/classie.js"></script>
    <script src="./assets/js/modalEffects.js"></script>
    <script src="./assets/js/cssParser.js"></script>
    <!-- FOR MODAL -->

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="./assets/js/jquery.validate.min.js"></script>
    <script src="./assets/js/jquery.maskedinput.js"></script>
    <script src="./assets/js/wow.min.js"></script>

    <!-- https://github.com/verlok/vanilla-lazyload#-getting-started---html -->
    <script src="./assets/js/lazyload.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Counter -->
    <script src="./assets/js/counter/jquery.cookie.js"></script>
    <script src="./assets/js/counter/jquery.plugin.js"></script>
    <script src="./assets/js/counter/jquery.countdown.js"></script>
    <script src="./assets/js/counter/jquery.countdown-ru.js"></script>
    <script>
        var endDateTime = new Date();
        var nowDateTime = new Date(3600 * 24 * 1000);
    </script>
    <!-- End Counter -->
    <script src="https://www.youtube.com/iframe_api"></script>
    <script src="./assets/js/script.js"></script>

    <link rel="stylesheet" href="./assets/css/swiper/swiper-bundle.min.css">
    <script src="./assets/js/swiper/swiper-bundle.min.js"></script>
    <script type="module" src="./app.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper9", {
            slidesPerView: 3,
            spaceBetween: 40,
            slidesPerGroup: 4,
            pagination: {
                el: ".swiper-pagination",
                clickable: true
            },
            breakpoints: {
                835: {
                
                slidesPerView: 2,
                spaceBetween: 40
                },
                1199: {
                    slidesPerView: 3,
                }
            }
        });
    </script>
    <script>
        window.addEventListener('scroll', function() {
            const header2 = document.getElementById('header2');
            const sec1 = document.getElementById('sec1');
            const sec6 = document.getElementById('sec6');
            const sec7 = document.getElementById('sec7');
            const sec13 = document.getElementById('sec13');
            if (header2) {
                if (window.scrollY >= 50) {
                    header2.style.position = 'fixed';
                    header2.style.filter = 'invert(100%)';
                } else {
                    header2.style.position = 'unset';
                    header2.style.filter = 'none';
                }
            }

            if (sec1) {
                if (window.scrollY >= 50) {
                    sec1.style.marginTop = '64.5px';
                } else {
                    sec1.style.marginTop = '0';
                }
            }
            if (sec6) {
                if (window.scrollY >= 50) {
                    sec6.style.marginTop = '64.5px';
                } else {
                    sec6.style.marginTop = '0';
                }
            }
            if (sec7) {
                if (window.scrollY >= 50) {
                    sec7.style.marginTop = '64.5px';
                } else {
                    sec7.style.marginTop = '0';
                }
            }
            if (sec13) {
                if (window.scrollY >= 50) {
                    sec7.style.marginTop = '64.5px';
                } else {
                    sec7.style.marginTop = '0';
                }
            }
        });
    </script>




    <script>
        var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        /* Toggle between adding and removing the "active" class,
        to highlight the button that controls the panel */
        this.classList.toggle("active");

        /* Toggle between hiding and showing the active panel */
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
            panel.style.display = "none";
        } else {
            panel.style.display = "block";
        }
    });
}
    </script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            
        loop: true,
        spaceBetween: 10,
        slidesPerView: 4,
        freeMode: true,
        watchSlidesProgress: true,
        });
        var swiper2 = new Swiper(".mySwiper2", {
            pagination: {
                el: ".swiper-pagination",
            },
        loop: true,
        spaceBetween: 10,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        thumbs: {
            swiper: swiper,
        },
        });
    </script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $('.size_but').click(function() {
            $('.size_but').removeClass('active');
            $(this).addClass('active');
        });

        $('.size_but_cancel').click(function() {
            $('.size_but').removeClass('active');
        });
    </script>
    <script>
        $('.color_but').click(function() {
            $('.color_but').removeClass('active');
            $(this).addClass('active');
        });

        $('.color_but_cancel').click(function() {
            $('.color_but').removeClass('active');
        });
    </script>
    <script>
        $('.menu-btn').on('click', function (e) {
        e.preventDefault;
        $(this).toggleClass('menu-btn_active');
        });
    </script>
    <script>
        $('.menu-btn').click(function() {
            $('.burger__menu').toggleClass('activee');
        });
    </script>
<script>
    $('.md-open').click(function() {
        $(".modal_window").css('display', 'flex');
    });

    $('.md_close').click(function() {
        $(".modal_window").css('display', 'none');
    });

        var swiper = new Swiper(".mySwiper4", {
            
            loop: true,
            spaceBetween: 10,
            slidesPerView: 4,
            freeMode: true,
            watchSlidesProgress: true,
            });
            var swiper2 = new Swiper(".mySwiper3", {
                pagination: {
                    el: ".swiper-pagination",
                },
            loop: true,
            spaceBetween: 10,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            thumbs: {
                swiper: swiper,
            },
            });
</script>
<script>
    $('.ff1').click(function() {
        $(this).toggleClass('active');
        
    });
    $(".ff1").click(function() {
        if ($(".da").is(":hidden")) {
            $(".da").slideDown("slow,swing");
        } else {
            $(".da").slideUp("slow,swing");
        }
    });
</script>
        </div>
    </body>
</html>