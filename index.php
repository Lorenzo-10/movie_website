<?php include 'session.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MDH - High Definition Movies</title>
    <!--link to css-->
    <link rel="stylesheet" href="css/style.css">
    <!--link swipper css-->
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <!--fav icon-->
    <link rel="shortcut icon" href="img/fav-icon.png" type="image/x-icon">
    <!--Box icons-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
<a href="signup.php" class="signup-btn">Sign Up</a>
<a href="signin.php" class="signin-btn">Sign In</a>
<a href="logout.php" class="logout-btn">Logout</a>

    <!-- header -->
     <header>
        <!-- Nav-->
         <div class="nav container">
            <!--logo-->
            <a href="index.html" class="logo">
                Movie<span>.hd</span>
            </a>
            <!-- Search Box-->
             <div class="search-box">
                <input type="search" name="" id="search-input" placeholder="Search Movie">
                <i class='bx bx-search'></i>
             </div>
              <!-- NavBar-->
               <div class="navbar">
                <a href="#home" class="navbar-link nav-active">
                    <i class='bx bx-home'></i>
                    <span class="nav-link-title">Home</span>
                </a>
                <a href="#popular" class="navbar-link">
                    <i class='bx bxs-hot' ></i>
                    <span class="nav-link-title">Trending</span>
                </a>
                <a href="#movies" class="navbar-link">
                    <i class='bx bx-compass' ></i>
                    <span class="nav-link-title">Explore</span>
                </a>
                <a href="play-page.html" class="navbar-link">
                    <i class='bx bx-tv' ></i>
                    <span class="nav-link-title">Movies</span>
                </a>
                <a href="#home" class="navbar-link">
                    <i class='bx bx-heart' ></i>
                    <span class="nav-link-title">Favourite</span>
                </a>
               </div>
         </div>
     </header>
     <!--Home-->
     <section class="home container" id="home">
        <!--Home Image-->
        <img src="img/home-background.png" alt="" class="home-img">
        <!--Home Text-->
        <div class="home-text">
            <h1 class="home-title">Hitman's Wife's <br> Bodyguard</h1>
            <p>Realising 10 April</p>
            <a href="#" class="watch-btn">
                <i class='bx bx-right-arrow'></i>
                <span>Watch The Trailer</span>
            </a>
            </h1>
        </div>
     </section>
     <!--Home End-->
     <!--Popular section start-->
     <section class="popular container" id="popular">
        <!--heading-->
        <div class="heading">
            <h2 class="heading-title">Popular Movies</h2>
            <!--Swiper Buttons-->
            <div class="swiper-btn">
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
        <!--Content-->
        <div class="popular-content swiper">
            <div class="swiper-wrapper">
                <!--Movies Box1-->
                <div class="movie-box">
                    <img src="img/popular-movie-1.jpg" alt="" class="movie-box-img">
                    <div class="box-text">
                        <h2 class="movie-title">Spider-Man: No Way Home</h2>
                        <span class="movie-type">Action</span>
                        <a href="#" class="watch-btn play-btn">
                            <i class='bx bx-right-arrow'></i>
                        </a>
                    </div>
                </div>

                <!--Movies Box2-->
                <div class="swiper-slide">Slide 2</div>
                <div class="movie-box">
                    <img src="img/popular-movie-2.jpg" alt="" class="movie-box-img">
                    <div class="box-text">
                        <h2 class="movie-title">Jungle Cruise</h2>
                        <span class="movie-type">Action/Adventure</span>
                        <a href="#" class="watch-btn play-btn">
                            <i class='bx bx-right-arrow'></i>
                        </a>
                    </div>
                </div>

                <!--Movies Box3-->
                <div class="swiper-slide">Slide 3</div>
                <div class="movie-box">
                    <img src="img/popular-movie-3.jpg" alt="" class="movie-box-img">
                    <div class="box-text">
                        <h2 class="movie-title">Looki</h2>
                        <span class="movie-type">Action</span>
                        <a href="#" class="watch-btn play-btn">
                            <i class='bx bx-right-arrow'></i>
                        </a>
                    </div>
                </div>

                <!--Movies Box4-->
                <div class="swiper-slide">Slide 4</div>
                <div class="movie-box">
                    <img src="img/popular-movie-4.jpg" alt="" class="movie-box-img">
                    <div class="box-text">
                        <h2 class="movie-title">Squid Game</h2>
                        <span class="movie-type">Action/Drama</span>
                        <a href="#" class="watch-btn play-btn">
                            <i class='bx bx-right-arrow'></i>
                        </a>
                    </div>
                </div>

                <!--Movies Box5-->
                <div class="swiper-slide">Slide 5</div>
                <div class="movie-box">
                    <img src="img/popular-movie-5.jpg" alt="" class="movie-box-img">
                    <div class="box-text">
                        <h2 class="movie-title">The falcon And winter Soldier</h2>
                        <span class="movie-type">Action</span>
                        <a href="#" class="watch-btn play-btn">
                            <i class='bx bx-right-arrow'></i>
                        </a>
                    </div>
                </div>

                <!--Movies Box6-->
                <div class="swiper-slide">Slide 6</div>
                <div class="movie-box">
                    <img src="img/popular-movie-6.jpg" alt="" class="movie-box-img">
                    <div class="box-text">
                        <h2 class="movie-title">Hawkeye</h2>
                        <span class="movie-type">Action</span>
                        <a href="#" class="watch-btn play-btn">
                            <i class='bx bx-right-arrow'></i>
                        </a>
                    </div>
                </div>

                <!--Movies Box7-->
                <div class="swiper-slide">Slide 7</div>
                <div class="movie-box">
                    <img src="img/popular-movie-7.jpg" alt="" class="movie-box-img">
                    <div class="box-text">
                        <h2 class="movie-title">Agent Of S.H.I.E.L.D</h2>
                        <span class="movie-type">Action</span>
                        <a href="#" class="watch-btn play-btn">
                            <i class='bx bx-right-arrow'></i>
                        </a>
                    </div>
                </div>

                <!--Movies Box8-->
                <div class="swiper-slide">Slide 8</div>
                <div class="movie-box">
                    <img src="img/popular-movie-8.jpg" alt="" class="movie-box-img">
                    <div class="box-text">
                        <h2 class="movie-title">The Flash</h2>
                        <span class="movie-type">Action/Sci-fi</span>
                        <a href="#" class="watch-btn play-btn">
                            <i class='bx bx-right-arrow'></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>
     </section>
     <!--Popular section End-->
     <!--Movies section start-->
        <section class="movies container" id="movies">
          <!--heading-->
            <div class="heading">
              <h2 class="heading-title">Movies And Shows</h2>
            </div>
          <!-- Movies Content-->
            <div class="movies-content">
                <!--Movies Box1-->
                <div class="movie-box">
                    <img src="img/movie-1.jpg" alt="" class="movie-box-img">
                    <div class="box-text">
                        <h2 class="movie-title">Jumanji: Welcome to the Jungle</h2>
                        <span class="movie-type">Action</span>
                        <a href="play-page.php" class="watch-btn play-btn">
                            <i class='bx bx-right-arrow'></i>
                        </a>
                    </div>
                </div>

                <!--Movies Box2-->
                <div class="movie-box">
                    <img src="img/movie-2.jpg" alt="" class="movie-box-img">
                    <div class="box-text">
                        <h2 class="movie-title">Hitman's Wife's Bodyguard</h2>
                        <span class="movie-type">Action/Comedy</span>
                        <a href="hitman.html" class="watch-btn play-btn">
                            <i class='bx bx-right-arrow'></i>
                        </a>
                    </div>
                </div>

                <!--Movies Box3-->
                <div class="movie-box">
                    <img src="img/movie-3.jpg" alt="" class="movie-box-img">
                    <div class="box-text">
                        <h2 class="movie-title">Shang-Chi</h2>
                        <span class="movie-type">Action/Sci-fi</span>
                        <a href="#" class="watch-btn play-btn">
                            <i class='bx bx-right-arrow'></i>
                        </a>
                    </div>
                </div>

                <!--Movies Box4-->
                <div class="movie-box">
                    <img src="img/movie-4.jpg" alt="" class="movie-box-img">
                    <div class="box-text">
                        <h2 class="movie-title">Eternals</h2>
                        <span class="movie-type">Action/Sci-fi</span>
                        <a href="#" class="watch-btn play-btn">
                            <i class='bx bx-right-arrow'></i>
                        </a>
                    </div>
                </div>

                <!--Movies Box5-->
                <div class="movie-box">
                    <img src="img/movie-5.jpg" alt="" class="movie-box-img">
                    <div class="box-text">
                        <h2 class="movie-title">Spectre</h2>
                        <span class="movie-type">Action</span>
                        <a href="#" class="watch-btn play-btn">
                            <i class='bx bx-right-arrow'></i>
                        </a>
                    </div>
                </div>

                <!--Movies Box6-->
                <div class="movie-box">
                    <img src="img/movie-6.jpg" alt="" class="movie-box-img">
                    <div class="box-text">
                        <h2 class="movie-titlw">Money Heist</h2>
                        <span class="movie-type">Action/Sci-fi</span>
                        <a href="#" class="watch-btn play-btn">
                            <i class='bx bx-right-arrow'></i>
                        </a>
                    </div>
                </div>

                <!--Movies Box7-->
                <div class="movie-box">
                    <img src="img/movie-7.jpg" alt="" class="movie-box-img">
                    <div class="box-text">
                        <h2 class="movie-title">The Wolverine</h2>
                        <span class="movie-type">Action/Sci-fi</span>
                        <a href="#" class="watch-btn play-btn">
                            <i class='bx bx-right-arrow'></i>
                        </a>
                    </div>
                </div>

                <!--Movies Box8-->
                <div class="movie-box">
                    <img src="img/movie-8.jpg" alt="" class="movie-box-img">
                    <div class="box-text">
                        <h2 class="movie-titlw">Johnny English</h2>
                        <span class="movie-type">Action/Comedy</span>
                        <a href="#" class="watch-btn play-btn">
                            <i class='bx bx-right-arrow'></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>
     <!--Movies section End-->
     <!--Next Page-->
     <div class="next-page">
        <a href="#" class="next-btn">Next Page</a>
     </div>
     <!-- Copyright -->
      <div class="copyright">
        <p>&copy; 2025 All Rights Reserved | Designed By Olympus</p>
      </div>
     <!--link swiper JS-->
     <script src="js/swiper-bundle.min.js"></script>
    <!--link to JS-->
    <script src="js/main.js"></script>
</body>
</html>
