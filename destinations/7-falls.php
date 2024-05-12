<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
        <link rel="stylesheet" href="../assets/css/swiper-bundle.min.css">
        <link rel="stylesheet" href="../assets/css/header.css">
        <link rel="stylesheet" href="../assets/css/style.css">
        <link rel="stylesheet" href="../assets/css/destination-min.css">
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


        <title>Responsive Landing Page Islands</title>
    </head>
    <body id="top">

        <header class="header" data-header>

    <div class="overlay" data-overlay></div>
    <div class="header-top">
      <div class="container">
        <div class="toggle-switch">
          <input type="checkbox" id="mode-switch" onclick="toggleMode()">
          <label for="mode-switch"></label>
        </div>
        <ul class="social-list">
          <li>
            <a href="#" class="logo-lm">
              <img src="../assets/images/logoLM.png" alt="Lakbay Marista" data-original-src="./assets/images/logoLM.png">
            </a>

          </li>
        </ul>

        <nav class="navbar" data-navbar>
          <div class="navbar-top">
            <a href="#" class="logo">
              <img src="./assets/images/logo-text-v2.png" alt="Lakbay Marista">
            </a>
            <button class="nav-close-btn" aria-label="Close Menu" data-nav-close-btn>
              <ion-icon name="close-outline"></ion-icon>
            </button>
          </div>
          <ul class="navbar-list">
            <li>
              <a href="#home" class="navbar-link" data-nav-link>home</a>
            </li>
            <li>
              <a href="gallery.php" class="navbar-link" data-nav-link>gallery</a>
            </li>
            <li>
              <a href="destination.php" class="navbar-link" data-nav-link>destinations</a>
            </li>
            <li>
              <a href="#contact" class="navbar-link" data-nav-link>contact us</a>
            </li>
            <?php if (isset($_SESSION['loggedin']) && $_SESSION['access_level'] >= 20) : ?>
              <li>
                <div class="dropdown">
                  <a href="#" class="navbar-link dropdown-toggle">
                    <div class="profile"><ion-icon name="person-circle-outline"></ion-icon></div>
                  </a>
                  <div class="dropdown-menu">
                    <a href="profile.php" class="dropdown-item">Profile</a>
                    <a href="activity.php" class="dropdown-item">Activity</a>
                    <a href="membership.php" class="dropdown-item">Membership</a>
                    <a href="dashboard.php" class="dropdown-item">Dashboard</a>
                    <a href="logout.php" class="dropdown-item">Logout</a>
                  </div>
                </div>
              </li>
            <?php elseif (isset($_SESSION['loggedin'])) : ?>
              <li>
                <div class="dropdown">
                  <a href="#" class="navbar-link dropdown-toggle">
                    <div class="profile"><ion-icon name="person-circle-outline"></ion-icon></div>
                  </a>
                  <div class="dropdown-menu">
                    <a href="profile.php" class="dropdown-item">Profile</a>
                    <a href="activity.php" class="dropdown-item">Activity</a>
                    <a href="membership.php" class="dropdown-item">Membership</a>
                    <a href="logout.php" class="dropdown-item">Logout</a>
                  </div>
                </div>
              </li>
            <?php else : ?>
              <li>
                <div class="login"> <a href="login.php" class="btn btn-primary">Login</a></div>
              </li>
            <?php endif; ?>
          </ul>
        </nav>



        <div class="header-btn-group">

          <button class="nav-open-btn" aria-label="Open Menu" data-nav-open-btn>
            <ion-icon name="menu-outline"></ion-icon>
          </button>

        </div>

      </div>
    </div>

    <div class="header-bottom">
      <div class="container">

      </div>
    </div>

  </header>

        <!--========== MAIN ==========-->
        <main class='main'>
            <div class="swiper-container gallery-top">
                <div class="swiper-wrapper">
                    <!--========== ISLANDS 1 ==========-->
                    <section class="islands swiper-slide">
                        <img src="../destinations/7-falls/bali.jpg" alt="" class="islands__bg">

                        <div class="islands__container bd-container">
                            <div class="islands__data">
                                <h2 class="islands__subtitle">Islands</h2>
                                <h1 class="islands__title">Bora Bora</h1>
                                <p class="islands__description">Small South Pacific island northwest of Tahiti in French Polynesia, surrounded by motus.</p>
                                <a href="#" class="islands__button">See Locations <i class='bx bx-right-arrow-alt islands__button-icon'></i></a>
                            </div>
                        </div>
                    </section>
        
                    <!--========== ISLANDS 2 ==========-->
                    <section class="islands swiper-slide">
                        <img src="../destinations/7-falls/borabora.jpg" alt="" class="islands__bg">

                        <div class="islands__container bd-container">
                            <div class="islands__data">
                                <h2 class="islands__subtitle">Islands</h2>
                                <h1 class="islands__title">Bali</h1>
                                <p class="islands__description">It is an Indonesian island known and beautiful for its lush active volcanic mountains.</p>
                                <a href="#" class="islands__button">See Locations <i class='bx bx-right-arrow-alt islands__button-icon'></i></a>
                            </div>
                        </div>
                    </section>
                    
                    <!--========== ISLANDS 3 ==========-->
                    <section class="islands swiper-slide">
                        <img src="../destinations/7-falls/palawan.jpg" alt="" class="islands__bg">

                        <div class="islands__container bd-container">
                            <div class="islands__data">
                                <h2 class="islands__subtitle">Islands</h2>
                                <h1 class="islands__title">Palawan</h1>
                                <p class="islands__description">Also known as La Paragua, it is the largest island in the province of Palawan.</p>
                                <a href="#" class="islands__button">See Locations <i class='bx bx-right-arrow-alt islands__button-icon'></i></a>
                            </div> 
                        </div>
                    </section>
                    </div>
                </div>
            </div>

            <!--========== CONTROLS ==========-->
            <div class="controls gallery-thumbs">
                <div class="controls__container swiper-wrapper">
                    <img src="../destinations/7-falls/bali.jpg" alt="" class="controls__img swiper-slide">
                    <img src="../destinations/7-falls/borabora.jpg" alt="" class="controls__img swiper-slide">
                    <img src="../destinations/7-falls/palawan.jpg" alt="" class="controls__img swiper-slide">
                </div>
            </div>
        </main>

        <link rel="stylesheet" href="../assets/css/destination-min.css">

<div class="blox mlb kln">
    <script async data-cfasync="false" src="https://platform.bidgear.com/pubbidgear-ad.js" type="text/javascript"></script>
    <div id="bg-ssp-8979">
        <script>
            var bg_id = document.getElementById('bg-ssp-8979');
            bg_id.id = 'bg-ssp-8979-' + Math.floor(Math.random() * Date.now());
            window.pubbidgeartag = window.pubbidgeartag || [];
            window.pubbidgeartag.push({zoneid: 8979, id: bg_id.id, wu: window.location.href})
        </script>
    </div>

    <div id="pf-7903-1">
        <script>
            window.pubfuturetag = window.pubfuturetag || [];
            window.pubfuturetag.push({unit: "65df0316c47f9b49e4b06000", id: "pf-7903-1"})
        </script>
    </div>
</div>

<div id="content">
    <div class="wrapper">
        <div class="postbody">
            <article id="post-40871" class="post-40871 hentry" itemscope="itemscope" itemtype="http://schema.org/CreativeWorkSeries">
                <div class="ts-breadcrumb bixbox">
                    <ol itemscope="" itemtype="http://schema.org/BreadcrumbList">
                        <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                            <a itemprop="item" href="https://asuracomic.net/"><span itemprop="name">Asura Scans</span></a>
                            <meta itemprop="position" content="1">
                        </li>
                        ›
                        <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                            <a itemprop="item" href="https://asuracomic.net/manga/1908287720-return-of-the-mount-hua-sect/"><span itemprop="name">Return of the Mount Hua Sect</span></a>
                            <meta itemprop="position" content="2">
                        </li>
                    </ol>
                </div>
                <div class="bixbox animefull">
                    <div class="bigcontent nobigcover">
                        <div class="thumbook">
                            <div class="thumb" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
                                <img class="wp-post-image" src="https://img.asuracomics.com/unsafe/fit-in/720x936/https://asuracomic.net/wp-content/uploads/2021/03/cover.jpg" title="" alt="asura scans manhwa comic" decoding="async" itemprop="image" fetchpriority="high">
                            </div>
                            <div class="rt">
                                <div data-id="40871" class="bookmark"><i class="far fa-bookmark" aria-hidden="true"></i> Bookmark </div>
                                <div class="bmc">Followed by 249147 people</div>
                                <div class="rating">
                                    <div class="rating-prc" itemscope="itemscope" itemprop="aggregateRating" itemtype="//schema.org/AggregateRating">
                                        <meta itemprop="worstRating" content="1">
                                        <meta itemprop="bestRating" content="10">
                                        <meta itemprop="ratingCount" content="10">
                                        <div class="rtp">
                                            <div class="rtb"><span style="width:100%"></span></div>
                                        </div>
                                        <div class="num" itemprop="ratingValue" content="10">10</div>
                                    </div>
                                </div>
                                <div class="tsinfo">
                                    <div class="imptdt">
                                        Status <i>Ongoing</i>
                                    </div>
                                    <div class="imptdt">
                                        Type <a href="/manga/?order=title&type=Manhwa">Manhwa</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="infox">
                            <h1 class="entry-title" itemprop="name">Return of the Mount Hua Sect</h1>
                            <div class='socialts'>
                                <a href="https://www.facebook.com/sharer/sharer.php?u=https://asuracomic.net/manga/1908287720-return-of-the-mount-hua-sect/&t=Return of the Mount Hua Sect" target="_blank" class="fb">
                                    <i class="fab fa-facebook-f"></i>
                                    <span>Facebook</span>
                                </a>
                                <a href="https://www.twitter.com/intent/tweet?url=https://asuracomic.net/manga/1908287720-return-of-the-mount-hua-sect/&text=Return of the Mount Hua Sect" target="_blank" class="twt">
                                    <i class="fab fa-twitter"></i>
                                    <span>Twitter</span>
                                </a>
                                <a href="whatsapp://send?text=Return of the Mount Hua Sect https://asuracomic.net/manga/1908287720-return-of-the-mount-hua-sect/" target="_blank" class="wa">
                                    <i class="fab fa-whatsapp"></i>
                                    <span>WhatsApp</span>
                                </a>
                                <a href="https://pinterest.com/pin/create/button/?url=https://asuracomic.net/manga/1908287720-return-of-the-mount-hua-sect/&media=https://asuracomic.net/wp-content/uploads/2021/03/cover.jpg&description=Return of the Mount Hua Sect" target="_blank" class="pntrs">
                                    <i class="fab fa-pinterest-p"></i>
                                    <span>Pinterest</span>
                                </a>
                            </div>
                            <div class="wd-full">
                                <b>Alternative Titles</b>
                                <span>Return of the Blossoming Blade</span>
                            </div>    
                            <div class="wd-full">
                                <h2>Synopsis Return of the Mount Hua Sect</h2>
                                <div class="entry-content entry-content-single" itemprop="description">
                                    <p>Chung Myung, The 13th Disciple of the Mount Hua Sect, One of the 3 Great Swordsmen, Plum Blossom Sword Saint, defeated Chun Ma, who brought destruction and disarray onto the world. After the battle, he breathes his last breath on top of the headquarter mountain of the Heavenly Demon Sect. He is reborn after 100 years in the body of a child. &#8230;&#8230;What? The Mount Hua Sect has fallen? What kind of nonsense is that!?</p>
                                    <p>&nbsp;</p>
                                    <p>&nbsp;</p>
                                    <p>&nbsp;</p>
                                    <p>&nbsp;</p>
                                </div>
                            </div>
                            <div class="flex-wrap">
                                <div class="fmed">
                                    <b>Released</b>
                                    <span>
                                        asurascans.com
                                    </span>
                                </div>
                                <div class="fmed">
                                    <b>Author</b>
                                    <span>
                                        Biga
                                    </span>
                                </div>
                            </div>
                            <div class="flex-wrap">
                                <div class="fmed">
                                    <b>Artist</b>
                                    <span>
                                        LICO
                                    </span>
                                </div>
                            </div>
                            <div class="flex-wrap">
                                <div class="fmed">
                                    <b>Serialization</b>
                                    <span>
                                        -
                                    </span>
                                </div>
                                <div class="fmed">
                                    <b>Posted By</b>
                                    <span itemprop="author" itemscope itemtype="https://schema.org/Person" class="author vcard">
                                        <i itemprop="name">asura</i>
                                    </span>
                                </div>
                            </div>    
                            <div class="flex-wrap">
                                <div class="fmed">
                                    <b>Posted On</b>
                                    <span>
                                        <time itemprop="datePublished" datetime="2021-03-23T19:16:32+00:00">March 23, 2021</time>
                                    </span>
                                </div>
                                <div class="fmed">
                                    <b>Updated On</b>
                                    <span>
                                        <time itemprop="dateModified" datetime="2024-05-11T08:25:49+00:00">May 11, 2024</time>
                                    </span>
                                </div>
                            </div>
                            <div class="wd-full">
                                <b>Genres</b>
                                <span class="mgen">
                                    <a href="https://asuracomic.net/genres/action/" rel="tag">Action</a>
                                    <a href="https://asuracomic.net/genres/adventure/" rel="tag">Adventure</a>
                                    <a href="https://asuracomic.net/genres/comedy/" rel="tag">Comedy</a>
                                    <a href="https://asuracomic.net/genres/fantasy/" rel="tag">Fantasy</a>
                                    <a href="https://asuracomic.net/genres/martial-arts/" rel="tag">Martial Arts</a>
                                    <a href="https://asuracomic.net/genres/rebirth/" rel="tag">Rebirth</a>
                                    <a href="https://asuracomic.net/genres/shounen/" rel="tag">Shounen</a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </div>
</div>


        <!--========== GSAP ==========-->
        <script src="../assets/js/gsap.min.js"></script>

        <!--========== SWIPER JS ==========-->
        <script src="../assets/js/swiper-bundle.min.js"></script>

        <!--========== MAIN JS ==========-->
        <script src="../assets/js/main.js"></script>
    </body>
    
</html>