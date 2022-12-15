<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PeerStep</title>
    <!-- include font service -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <!-- include Bootstrap (before all other stylesheets to load our CSS) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@700&display=optional" rel="stylesheet" />
    <!-- include styles -->
    <!-- <link rel="stylesheet" href="css/normalize.css" /> -->
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    <!-- navigation bar -->
    <nav class="navbar navbar-expand-lg justify-content-center fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">PeerStep</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">HOME</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            DESTINATIONS
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Japan</a></li>
                            <li><a class="dropdown-item" href="#">Vietnam</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">SHOP</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            CONTACT US
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Share your trip</a></li>
                            <li><a class="dropdown-item" href="#">Request a post</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">PROFILE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">CART</a>
                    </li>
                    <form class="d-flex search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
                        <button class="btn btn-outline-success" type="submit">
                            Search
                        </button>
                    </form>
                </ul>
            </div>
        </div>
    </nav>

    <!-- introduction -->
    <section class="introduction p-5 text-center">
        <div class="container">
            <div class="row">
                <img class="img-fluid w-80 peerstep-intro" src="images/introduction_resize.png" alt="" />
            </div>
        </div>
    </section>

    <!-- destinations -->
    <section class="destinations">
        <h2>EXPLORE BY DESTINATIONS</h2>
        <div class="container-fluid d-flex">
            <div class="col-md-2 destinations-list">
                <ul>
                    <li>Japan</li>
                    <li>Vietnam</li>
                    <li>Thailand</li>
                </ul>
            </div>
            <div class="col-md-10">
                <img id="map" src="images/map.png" alt="Map" />
            </div>
        </div>
    </section>

    <!-- most viewed posts -->
    <section class="most-viewed-posts">
        <h2>MOST VIEWED POSTS</h2>
        <div class="container-fluid d-flex">
            <div class="col-md-6">
                <div class="container">
                    <div class="row">
                        <img src="/images/most viewd posts/chiangmai.png" alt="Chiang Mai" />
                    </div>
                    <div class="row">
                        <h3>Chiang Mai, Thailand</h3>
                        <p>
                            A province with beautiful nature blended with Lanna Culture and
                            colours of contemporary
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="container">
                    <div class="row">
                        <img src="/images/most viewd posts/hongyacave.png" alt="Hongya Cave" />
                    </div>
                    <div class="row">
                        <h3>Hongya Cave, China</h3>
                        <p>
                            Only fragments remain of Chongqing’s once-magnificent Ming
                            dynasty city wall.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="container">
                    <div class="row">
                        <img src="/images/most viewd posts/hoian.png" alt="Hoi An" />
                    </div>
                    <div class="row">
                        <h3>Hoi An, Vietnam</h3>
                        <p>
                            Well-preserved example of a South-East Asian trading port dating
                            from the 15th to the 19th century.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Latest posts -->
    <section class="latest-posts">
        <h2>LATEST POSTS</h2>
        <div class="container-fluid d-flex">
            <div class="col-md-6">
                <div class="container">
                    <div class="row">
                        <img src="/images/latest posts/thulusdhoo.png" alt="Thulusdhoo" />
                    </div>
                    <div class="row">
                        <h3>Thulusdhoo, Maldives</h3>
                        <p>
                            Thulusdhoo has traditionally been an industrious island, known
                            for manufacturing of bodu beru (big drums).
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="container">
                    <div class="row">
                        <img src="/images/latest posts/fuji.png" alt="Mountain Fuji" />
                    </div>
                    <div class="row">
                        <h3>Mountain Fuji, Japan</h3>
                        <p>
                            The most revered and timeless attractions, the inspiration for
                            generations of poets and the focus of countless artworks.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="container">
                    <div class="row">
                        <img src="/images/latest posts/trangan.png" alt="Trang An" />
                    </div>
                    <div class="row">
                        <h3>Trang An, Vietnam</h3>
                        <p>
                            It is surrounded by incredible towering limestone cliffs, Ninh
                            Binh province is a place you definitely dont want to miss out on
                            your Vietnam itinerary.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- shop -->
    <section class="shop-contact">
        <h2>SHOP & CONTACT</h2>
        <div class="container-fluid shop">
            <div class="row">
                <div class="col-sm-4">
                    <div class="view-shop">
                        <h3>Our destination guides</h3>
                        <br />
                        <p>
                            Whether you’re interested in traveling to a new city, going on a
                            cruise, or cooking a new dish — we’re committed to inspiring you
                            to experience travel in a whole new way. Additionally, PeerStep
                            provides multiple presets to apply on your beautiful pictures
                            and share them to your family, friends,... what you’ve
                            experienced.
                        </p>
                        <button type="button" class="btn btn-outline-light">
                            View all books
                        </button>
                    </div>
                    <div class="subcribe">
                        <h3>Subcribe & Get 20% off</h3>
                        <p>
                            Join our newsletter and discover new destinations to inspire the
                            traveler within. Plus, get 20% off at our online shop. Every
                            week you’ll receive expert advice, tips, exclusive offers, and
                            much more.
                        </p>
                        <button type="button" class="btn btn-outline-light">
                            Subcribe
                        </button>
                    </div>
                    <div class="contact">
                        <h3>Support Our Community</h3>
                        <p>
                            For more, you can support our community by requesting a
                            destination and sharing travel experience.
                        </p>
                        <button type="button" class="btn btn-outline-light">
                            Contact
                        </button>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="container-fluid d-flex">
                        <div class="row">
                            <div class="col-xl-6 shop-image">
                                <img src="images/shop/bali.png" alt="Bali" />
                            </div>
                            <div class="col-xl-6 shop-image">
                                <img src="images/shop/bali.png" alt="Bali" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>