<!-- Header Section Begin -->
<header class="header-section">
    <div class="container-fluid">
        <div class="inner-header">
            <!-- <div class="logo">
                    <a href="./index.html"><img src="img/logo.png" alt=""></a>
                </div> -->
            <div class="logo"><a href="index.php">Art Hotel</a></div>

            <div class="nav-right">
                <a href="#" class="primary-btn">Забронировать</a>
            </div>
            <nav class="main-menu mobile-menu">
                <ul>
                    <li <?php if($page == 'Главная') echo 'class="active"'; ?> ><a href="index.php">Главная</a></li>
                    <li <?php if($page == 'Номера') echo 'class="active"'; ?> ><a href="rooms.php">Номера</a></li>
                    <li <?php if($page == 'Галерея') echo 'class="active"'; ?> ><a href="galery.php">Галерея</a></li>
                    <li <?php if($page == 'Контакты') echo 'class="active"'; ?> ><a href="contact.php">Контакты</a></li>
                </ul>
            </nav>
            <div id="mobile-menu-wrap"></div>
        </div>
    </div>
</header>
<!-- Header End -->