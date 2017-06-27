<?php include ('header.php')?>
<div class="container-fluid no_boot">
    <div id="indexSlider" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#indexSlider" data-slide-to="0" class="active"></li>
            <li data-target="#indexSlider" data-slide-to="1"></li>
            <li data-target="#indexSlider" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">

            <div class="carousel-item active">
                <div class="overlay"></div>
                <div class="carousel-caption d-none d-md-block">
                    <h3>Это маленькая кондитерская в самом центре города</h3>
                    <p>Каждый день мы придумываем для вас что-то новое, эксперементируем и сами наслаждаемся процессом</p>
                </div>
            </div>

        </div>
        <a class="carousel-control-prev carousel-controls" href="#indexSlider" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon carousel-arrow" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next carousel-controls" href="#indexSlider" role="button" data-slide="next">
            <span class="carousel-control-next-icon carousel-arrow" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<div class="sections">
    <div class="wrapper section-menu">
        <div class="container">
            <div class="offset-2 col-xl-5 col-lg-5 col-md-5 col-sm-5 col-xs-5 text-content">
                <h2 class="section-header">Меню Sweet Lab</h2>
                <p class="section-description">Каждый день мы печем кексы, брауни, маффины, попкейки, морковные пироги.</p>
                <a href="#" class="section-button">посмотреть меню</a>
            </div>
            <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-xs-5"></div>

        </div>
    </div>
    <div class="section-catering">
        <div class="offset-2 col-xl-5 col-lg-5 col-md-5 col-sm-5 col-xs-5 text-content">
            <h2 class="section-header">Кейтеринг</h2>
            <p class="section-description">Мы рады сделать ваше торжество слаще</p>
            <a href="#" class="section-button">подробнее</a>
        </div>
        <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-xs-5"></div>
        <div class="subsection-catering container">

        </div>
    </div>
    <div class="wrapper section-corporate">
        <div class="container">
            <div class="offset-2 col-xl-5 col-lg-5 col-md-5 col-sm-5 col-xs-5 text-content">
                <h2 class="section-header">Корпоративные заказы</h2>
                <p class="section-description">С нами подарки вашим клиентам и партнерам станут самым легким процессом. </p>
                <a href="#" class="section-button">подробнее</a>
            </div>
            <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-xs-5"></div>

        </div>
    </div>
    <div class="section-organic">
        <div class="offset-2 col-xl-5 col-lg-5 col-md-5 col-sm-5 col-xs-5 text-content">
            <h2 class="section-header">Organic food</h2>
            <p class="section-description">Мы заботимся о вас</p>
            <a href="#" class="section-button">посмотреть меню</a>
        </div>
        <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-xs-5"></div>
        <div class="subsection-organic container">

        </div>
    </div>
</div>
<?php include 'footer.php' ?>


</body>
</html>