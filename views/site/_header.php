<header id="header"> 
    <div class="container main-menu ">
        <div class="row align-items-center justify-content-between d-flex">
            <div id="logo">
                <img src="<?= Yii::$app->urlManager->baseUrl ?>/resources/backend/img/logo.png" width="50" height="50">
                <a href="#" class="hmo-name">
                    <?= $name[0]->description ?>
                </a>
            </div>
            <nav id="nav-menu-container">
                <ul class="nav-menu" >
                    <li><a href="#">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#act">Activities</a></li>
                    <li><a href="#med">Medical Staffs</a></li>
                    <li><a href="#contact">Contact Us</a></li>
                    <li>
                        <a href="#book" class="primary-btn btn-book-appointment">
                            Book an Appointment
                        </a>
                    </li>
                </ul>
            </nav>                   
        </div>
    </div>
</header>