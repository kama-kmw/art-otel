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
    $page = 'Номера';
    
    include 'includes/preloader.php';
    include 'includes/header.php';
    ?>

    <!-- Hero Area Section Begin -->
    <div class="hero-area set-bg other-page" data-setbg="img/banner/29.jpeg">
    </div>
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

    <!-- Room Section Begin -->
    <section class="room-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="ri-slider-item">
                        <div class="ri-sliders owl-carousel">
                            <div class="single-img set-bg" data-setbg="img/rooms/11.jpg"></div>
                            <div class="single-img set-bg" data-setbg="img/rooms/12.jpg"></div>
                            <div class="single-img set-bg" data-setbg="img/rooms/13.jpg"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ri-text">
                        <div class="section-title">
                            <div class="section-title">
                                <span>номер двухместный</span>
                                <h2>Твин</h2>
                            </div>
                            <p>В красивом современном и просторном номере есть все необходимое для комфортного отдыха. Много света, приятный вид из большого окна и располагающий к отдыху интерьер — сюда так приятно возвращаться после прогулок. Прекрасно подходит для семейной пары возможно с ребенком </p>
                            <p>Во всех номерах: кондиционер, холодильник, сейф, телевизор с плоским экраном, фен.звукоизоляция</p>

                            <div class="ri-features">
                                <div class="ri-info">
                                    <i class="flaticon-019-television"></i>
                                    <p>Телевизор</p>
                                </div>
                                <div class="ri-info">
                                    <i class="flaticon-029-wifi"></i>
                                    <p>Wi-Fi</p>
                                </div>
                                <div class="ri-info">
                                    <i class="flaticon-003-air-conditioner"></i>
                                    <p>Сплит</p>
                                </div>
                                <div class="ri-info">
                                    <i class="flaticon-036-parking"></i>
                                    <p>Парковка</p>
                                </div>
                                <div class="ri-info">
                                    <i class="flaticon-007-swimming-pool"></i>
                                    <p>Трансфер</p>
                                </div>
                            </div>
                            <a href="#" class="primary-btn">Забронировать</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 order-lg-2">
                    <div class="ri-slider-item">
                        <div class="ri-sliders owl-carousel">
                            <div class="single-img set-bg" data-setbg="img/rooms/14.jpg"></div>
                            <div class="single-img set-bg" data-setbg="img/rooms/15.jpg"></div>
                            <div class="single-img set-bg" data-setbg="img/rooms/16.jpg"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="ri-text left-side">
                        <div class="section-title">
                            <div class="section-title">
                                <span>номер двухместный</span>
                                <h2>Стандарт с большой 2х спальной кроватью</h2>
                            </div>
                            <p>Просторный однокомнатный номер с большой двуспальной кроватью, собственной ванной комнатой. Прекрасно подойдет для полноценного отдыха после увлекательных прогулок по курортному маршруту </p>
                            <p>Во всех номерах: кондиционер, холодильник, сейф, телевизор с плоским экраном, фен.звукоизоляция</p>
                            <div class="ri-features">
                                <div class="ri-info">
                                    <i class="flaticon-019-television"></i>
                                    <p>Телевизор</p>
                                </div>
                                <div class="ri-info">
                                    <i class="flaticon-029-wifi"></i>
                                    <p>Wi-Fi</p>
                                </div>
                                <div class="ri-info">
                                    <i class="flaticon-003-air-conditioner"></i>
                                    <p>Сплит</p>
                                </div>
                                <div class="ri-info">
                                    <i class="flaticon-036-parking"></i>
                                    <p>Парковка</p>
                                </div>
                                <div class="ri-info">
                                    <i class="flaticon-007-swimming-pool"></i>
                                    <p>Трансфер</p>
                                </div>
                            </div>
                            <a href="#" class="primary-btn">Забронировать</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="ri-slider-item">
                        <div class="ri-sliders owl-carousel">
                            <div class="single-img set-bg" data-setbg="img/rooms/17.jpg"></div>
                            <div class="single-img set-bg" data-setbg="img/rooms/18.jpg"></div>
                            <div class="single-img set-bg" data-setbg="img/rooms/19.jpg"></div>
                            <div class="single-img set-bg" data-setbg="img/rooms/20.jpg"></div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ri-text">
                        <div class="section-title">
                            <div class="section-title">
                                <span>номер двухместный</span>
                                <h2>Люкс</h2>
                            </div>
                            <p>Идеальное решение для семьи или небольшой компании. Стильное обширное пространство номера разделено на светлую гостиную  и уютную спальню — для душевного общения и комфортного сна. Авторский дизайн интерьеров, выполненные на заказ предметы мебели и декора подчеркнут особенную атмосферу вашего отдыха. Подарите себе отдых в кругу самых близких </p>
                            <p>Во всех номерах: кондиционер, холодильник, сейф, телевизор с плоским экраном, фен.звукоизоляция</p>
                            <div class="ri-features">
                                <div class="ri-info">
                                    <i class="flaticon-019-television"></i>
                                    <p>Телевизор</p>
                                </div>
                                <div class="ri-info">
                                    <i class="flaticon-029-wifi"></i>
                                    <p>Wi-Fi</p>
                                </div>
                                <div class="ri-info">
                                    <i class="flaticon-003-air-conditioner"></i>
                                    <p>Сплит</p>
                                </div>
                                <div class="ri-info">
                                    <i class="flaticon-036-parking"></i>
                                    <p>Парковка</p>
                                </div>
                                <div class="ri-info">
                                    <i class="flaticon-007-swimming-pool"></i>
                                    <p>Трансфер</p>
                                </div>
                            </div>
                            <a href="#" class="primary-btn">Забронировать</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="row">
                <div class="col-lg-6 order-lg-2">
                    <div class="ri-slider-item">
                        <div class="ri-sliders owl-carousel">
                            <div class="single-img set-bg" data-setbg="img/galery/room-4.jpg"></div>
                            <div class="single-img set-bg" data-setbg="img/galery/room-3.jpg"></div>
                            <div class="single-img set-bg" data-setbg="img/galery/room-2.jpg"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="ri-text left-side">
                        <div class="section-title">
                            <div class="section-title">
                                <span>a memorable holliday</span>
                                <h2>Twin Room With Seaview</h2>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo
                                viverra maecenas. Donec in sodales dui, a blandit nunc. Pellentesque id eros venenatis,
                                sollicitudin neque sodales, vehicula nibh. Nam massa odio, porttitor vitae efficitur
                                non, ultricies volutpat tellus.</p>
                            <div class="ri-features">
                                <div class="ri-info">
                                    <i class="flaticon-019-television"></i>
                                    <p>Smart TV</p>
                                </div>
                                <div class="ri-info">
                                    <i class="flaticon-029-wifi"></i>
                                    <p>High Wi-fii</p>
                                </div>
                                <div class="ri-info">
                                    <i class="flaticon-003-air-conditioner"></i>
                                    <p>AC</p>
                                </div>
                                <div class="ri-info">
                                    <i class="flaticon-036-parking"></i>
                                    <p>Parking</p>
                                </div>
                                <div class="ri-info">
                                    <i class="flaticon-007-swimming-pool"></i>
                                    <p>Pool</p>
                                </div>
                            </div>
                            <a href="#" class="primary-btn">Make a Reservation</a>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </section>
    <!-- Room Section End -->

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