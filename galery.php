<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Hotel Template">
    <meta name="keywords" content="Hotel, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Europa Hotel & Spa | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <?php include 'includes/header.php' ?>

    <!-- Hero Area Section Begin -->
    <div class="hero-area set-bg other-page" data-setbg="img/about_bg.jpg">
    </div>
    <!-- Hero Area Section End -->

    <!-- Search Filter Section Begin -->
    <section class="search-filter other-page-filter">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <form action="#" class="check-form">
                        <h4>Check Availability</h4>
                        <div class="datepicker">
                            <p>From</p>
                            <input type="text" class="datepicker-1" value="dd / mm / yyyy">
                            <img src="img/calendar.png" alt="">
                        </div>
                        <div class="datepicker">
                            <p>To</p>
                            <input type="text" class="datepicker-2" value="dd / mm / yyyy">
                            <img src="img/calendar.png" alt="">
                        </div>
                        <div class="room-quantity">
                            <div class="single-quantity">
                                <p>Adults</p>
                                <div class="pro-qty"><input type="text" value="0"></div>
                            </div>
                            <div class="single-quantity">
                                <p>Children</p>
                                <div class="pro-qty"><input type="text" value="0"></div>
                            </div>
                            <div class="single-quantity last">
                                <p>Rooms</p>
                                <div class="pro-qty"><input type="text" value="0"></div>
                            </div>
                        </div>
                        <div class="room-selector">
                            <p>Room</p>
                            <select class="suit-select">
                                <option>Eg. Master suite</option>
                                <option value="">Double Room</option>
                                <option value="">Single Room</option>
                                <option value="">Special Room</option>
                            </select>
                        </div>
                        <button type="submit">Go</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Search Filter Section End -->

    <!-- Blog Section Begin -->
    <section class="blog-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog-item">
                        <div class="bi-pic">
                            <img src="img/blog-1.jpg" alt="">
                        </div>
                        <div class="bi-text">
                            <div class="bi-title">
                                <div class="blog-time">April 15, 2019</div>
                                <h3>Tips to have the perfect holliday</h3>
                                <span>Holliday, trip, Hotel, Fun</span>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Lorem ipsum
                                dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                                et dolore.</p>
                        </div>
                    </div>
                    <div class="blog-item">
                        <div class="bi-pic">
                            <img src="img/blog-2.jpg" alt="">
                        </div>
                        <div class="bi-text">
                            <div class="bi-title">
                                <div class="blog-time">April 15, 2019</div>
                                <h3>10 Places you need to visit this summer</h3>
                                <span>Holliday, trip, Hotel, Fun</span>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Lorem ipsum
                                dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                                et dolore.</p>
                        </div>
                    </div>
                    <div class="blog-item">
                        <div class="bi-pic">
                            <img src="img/blog-3.jpg" alt="">
                        </div>
                        <div class="bi-text">
                            <div class="bi-title">
                                <div class="blog-time">April 15, 2019</div>
                                <h3>The most amazing pools is the world</h3>
                                <span>Holliday, trip, Hotel, Fun</span>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Lorem ipsum
                                dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                                et dolore.</p>
                        </div>
                    </div>
                    <div class="blog-pagination">
                        <a href="#">01.</a>
                        <a href="#">02.</a>
                        <a href="#">03.</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-right">
                        <form action="#" class="blog-search">
                            <input type="text">
                            <button type="submit">Search</button>
                        </form>
                        <div class="blog-widget">
                            <div class="bw-item">
                                <h4>Categories</h4>
                                <ul>
                                    <li>Holliday <span>(22)</span></li>
                                    <li>Fun Facts <span>(28)</span></li>
                                    <li>Planning a Trip <span>(18)</span></li>
                                    <li>Uncategorized <span>(19)</span></li>
                                </ul>
                            </div>
                            <div class="bw-item">
                                <h4>Archive</h4>
                                <ul>
                                    <li>April 2019</li>
                                    <li>March 2019</li>
                                    <li>February 2019</li>
                                    <li>January 2019</li>
                                    <li>December 2018</li>
                                </ul>
                            </div>
                        </div>
                        <div class="blog-add set-bg" data-setbg="img/blog-add.jpg">
                            <h4>Book Your Next <br />Vacation</h4>
                            <a href="#" class="primary-btn">Make a Reservation</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->

    <?php include 'includes/footer.php' ?>

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>