<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Hotel Template">
    <meta name="keywords" content="Hotel, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Art Hotel</title>

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
    
    <?php 
    $page = 'Главная';
    
    include 'includes/preloader.php';
    include 'includes/header.php';
    ?>

    <!-- Hero Area Section Begin -->
    <section class="hero-area set-bg" data-setbg="img/banner/25.jpeg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="hero-text">
                        <!-- <h1>Роскошный отдых
                        </h1> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Area Section End -->

    <!-- Search Filter Section Begin -->
    <section class="search-filter">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <form action="#" class="check-form">
                        <h4>Выберите период</h4>
                        <div class="datepicker">
                            <p>Дата въезда</p>
                            <input type="text" class="datepicker-1" value="dd / mm / yyyy">
                            <img src="img/icon/calendar.png" alt="">
                        </div>
                        <div class="datepicker">
                            <p>Дата выезда</p>
                            <input type="text" class="datepicker-2" value="dd / mm / yyyy">
                            <img src="img/icon/calendar.png" alt="">
                        </div>
                        <!-- <div class="room-quantity">
                            <div class="single-quantity">
                                <p>Люди</p>
                                <div class="pro-qty"><input type="text" value="0"></div>
                            </div>
                            <div class="single-quantity">
                                <p>Дети</p>
                                <div class="pro-qty"><input type="text" value="0"></div>
                            </div>
                            <div class="single-quantity last">
                                <p>Номера</p>
                                <div class="pro-qty"><input type="text" value="0"></div>
                            </div>
                        </div> -->
                        <div class="room-selector">
                            <p>Номер</p>
                            <select class="suit-select">
                                <option>Выберите номер</option>
                                <option value="">Две кровати</option>
                                <option value="">Двуспальная кровать</option>
                                <option value="">Двуспальный люкс</option>
                            </select>
                        </div>
                        <button type="submit">Забронировать</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Search Filter Section End -->

    <!-- Intro Text Section Begin -->
    <section class="intro-section spad">
        <div class="container">
            <div class="row intro-text">
                <div class="col-lg-6">
                    <div class="intro-left">
                        <div class="section-title">
                            <span></span>
                            <h2>Отличный отдых<br /> в современном отеле.</h2>
                        </div>
                        <p>Отель располагается в городе Ессентуки, в 20 км от курортного города Кисловодск. На территории отеля действует Wi-Fi, имеется частная парковка, также допускается размещение с домашними животными.
                        </p>
                        <p>Гости могут посещать бар и ресторан отеля, в котором представлен широкий ассортимент блюд и напитков.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="intro-right">
                        <p>Рядом с отелем располагаются продуктовые магазины, фитнес-центр, аптеки и кафе. Проезд до железнодорожного вокзала займет 3 минуты, до аэропорта Минеральные Воды полчаса езды.</p>
                        <a href="#" class="primary-btn">Связаться с нами</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Intro Text Section End -->

    <!-- Facilities Section Begin -->
    <section class="facilities-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="facilities-item set-bg" data-setbg="img/faci-1.jpg">
                        <div class="fi-title">
                            <h2>Роскошный люкс</h2>
                            <p>- 3700р</p>
                        </div>
                        <div class="fi-features">
                            <div class="fi-info">
                                <i class="flaticon-019-television"></i>
                                <p>Телевизор</p>
                            </div>
                            <div class="fi-info">
                                <i class="flaticon-029-wifi"></i>
                                <p>Wi-Fi</p>
                            </div>
                            <div class="fi-info">
                                <i class="flaticon-003-air-conditioner"></i>
                                <p>Сплит</p>
                            </div>
                            <div class="fi-info">
                                <i class="flaticon-036-parking"></i>
                                <p>Парковка</p>
                            </div>
                            <div class="fi-info">
                                <i class="flaticon-007-swimming-pool"></i>
                                <p>Трансфер</p>
                            </div>
                        </div>
                        <a href="#" class="primary-btn">Забронировать</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="facilities-item set-bg fi-right" data-setbg="img/galery/2.jpeg">
                        <div class="fi-title fi-title-bg">
                            <h2>Сервисы</h2>
                            <p>Камера хранения багажа</p>
                            <p>Парикмахерская/салон красоты</p>
                            <p>Номера для некурящих</p>
                            <p>Мини-маркет на территории</p>
                            <p>Ежедневная уборка номера</p>
                            <p>Места для курения</p>
                            <p>Ресторан</p>
                            <p>Охраняемая территория</p>
                            <p>Охранная сигнализация</p>
                            <p>Звукоизолированные номера</p>
                            <p>Трансфер от/до аэропорта</p>
                        </div>
                        <!-- <a href="#" class="primary-btn">Make a Reservation</a> -->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="facilities-item set-bg" data-setbg="img/rooms/22.jpeg">
                        <div class="fi-title-bg">
                            <div class="fi-title ">
                            <h2>Дабл</h2>
                            <p>- 2200</p>
                            </div>
                            <div class="fi-features ">
                                <div class="fi-info">
                                    <i class="flaticon-019-television"></i>
                                    <p>Телевизор</p>
                                </div>
                                <div class="fi-info">
                                    <i class="flaticon-029-wifi"></i>
                                    <p>Wi-Fi</p>
                                </div>
                                 <div class="fi-info">
                                    <i class="flaticon-003-air-conditioner"></i>
                                    <p>Сплит</p>
                                </div>
                                <div class="fi-info">
                                    <i class="flaticon-036-parking"></i>
                                    <p>Парковка</p>
                                </div>
                                <div class="fi-info">
                                    <i class="flaticon-007-swimming-pool"></i>
                                    <p>Трансфер</p>
                                </div>
                            </div>
                            <a href="#" class="primary-btn">Забронировать</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="facilities-item set-bg" data-setbg="img/rooms/13.jpg">
                        <div class="fi-title-bg">
                            <div class="fi-title ">
                            <h2>Твин</h2>
                            <p>- 2200</p>
                            </div>
                            <div class="fi-features ">
                                <div class="fi-info">
                                    <i class="flaticon-019-television"></i>
                                    <p>Телевизор</p>
                                </div>
                                <div class="fi-info">
                                    <i class="flaticon-029-wifi"></i>
                                    <p>Wi-Fi</p>
                                </div>
                                 <div class="fi-info">
                                    <i class="flaticon-003-air-conditioner"></i>
                                    <p>Сплит</p>
                                </div>
                                <div class="fi-info">
                                    <i class="flaticon-036-parking"></i>
                                    <p>Парковка</p>
                                </div>
                                <div class="fi-info">
                                    <i class="flaticon-007-swimming-pool"></i>
                                    <p>Трансфер</p>
                                </div>
                            </div>
                            <a href="#" class="primary-btn">Забронировать</a>
                        </div>
                    </div>
            </div>
        </div>
    </section>
    <!-- Facilities Section End -->

    <!-- Testimonial Section Begin -->
    <section class="testimonial-section spad">
        <div class="container">
            <div class="row">
                <div class="section-title">
                    <h2>Гостевая книга</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="testimonial-item">
                        <div class="ti-time">
                            17 / 11 / 2017
                        </div>
                        <h4>Великолепно</h4>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <p>Небольшой уютный отель,Хорошее месторасположение,Чистые комфортные номера,Отзывчивый персонал.p>
                        <div class="ti-author">
                            <div class="author-pic">
                                <img src="img/icon/user.jpeg" alt="">
                            </div>
                            <div class="author-text">
                                <h6>Сергей <span>Самара</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="testimonial-item">
                        <div class="ti-time">
                            08 / 10 / 2018
                        </div>
                        <h4>10 баллов</h4>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <p>Отель нам очень понравился, современный, чистый и отлично расположен. Недалеко от него есть очень красивый парк, мы ходили гулять, воздух чудесный в этих краях. Персонал в отеле приятный, вежливый, всегда уточняет наши пожелания. Мы остались довольны.p>
                        <div class="ti-author">
                            <div class="author-pic">
                                <img src="img/icon/user.jpeg" alt="">
                            </div>
                            <div class="author-text">
                                <h6>Иван <span>Санкт-Петербург</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial Section End -->

    <!-- Video Section Begin -->
    <div class="video-section">
        <div class="video-bg set-bg" data-setbg="img/video-bg.jpg"></div>
        <div class="container">
            <div class="video-text set-bg" data-setbg="img/galery/10.jpeg">
                <!-- <a href="https://www.youtube.com/watch?v=j56YlCXuPFU" class="pop-up"><i class="fa fa-play"></i></a> -->
            </div>
        </div>
    </div>
    <!-- Video Section End -->

    <!-- Home Page About Section Begin -->
    <section class="homepage-about spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-text">
                        <div class="section-title">
                            <h2>“Клиенты любят<br />наши удобства”</h2>
                        </div>
                        <p>
                            Все номера оснащены сплит-системой, комфортабельной мебелью, собственной ванной комнатой с душем, туалетом, раковиной, набором полотенец и феном. Также гостям предоставляются одноразовые тапочки и набор туалет-косметических принадлежностей. </p>
                        <a href="#" class="primary-btn">Позвонить</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="about-img">
                                <img src="img/galery/5.jpeg" alt="">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="about-img">
                                <img src="img/galery/6.jpeg" alt="">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="about-img">
                                <img src="img/galery/8.jpeg" alt="">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="about-img">
                                <img src="img/galery/9.jpeg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Home Page About Section End -->

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