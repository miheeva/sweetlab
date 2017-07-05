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
                <div class="carousel-caption d-none d-md-block" data-paroller-factor="0.1" data-paroller-type="foreground" data-paroller-direction="vertical">
                    <h3>Это маленькая кондитерская в самом сердце города</h3>
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
    <div class="wrapper section-menu" data-paroller-factor="0.5" data-paroller-type="foreground" data-paroller-direction="vertical">
        <div class="after" data-paroller-factor="-0.15" data-paroller-type="foreground" data-paroller-direction="vertical"></div>
        <div class="container">
            <div class="offset-2 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 text-content no-offset">
                <h2 class="section-header">Меню Sweet Lab</h2>
                <p class="section-description">Каждый день мы печем кексы, брауни, маффины, попкейки, морковные пироги.</p>
                <a href="#" class="section-button">посмотреть меню</a>
                <div class="little-img lMenu"></div>
            </div>
            <div class="col-xl-5 col-lg-5 col-md-5 hidden-sm-down hidden-sm-up hidden-xs-down hidden-xs-up"></div>

        </div>
    </div>
    <div class="section-catering" data-paroller-factor="0.15" data-paroller-type="foreground" data-paroller-direction="vertical">
        <div class="text-content">
            <h2 class="section-header">Кейтеринг</h2>
            <p class="section-description">Мы рады сделать ваше торжество слаще</p>
            <a href="#" class="section-button white-btn">подробнее</a>
            <div class="little-img lCatering"></div>
        </div>
        <div class="subsection-catering container" data-paroller-factor="0.15" data-paroller-type="background" data-paroller-direction="vertical">
            <div class="text-content hidden-mobile">
                <h2 class="section-header">Кейтеринг</h2>
                <p class="section-description">Мы рады сделать ваше торжество слаще</p>
                <a href="#" class="section-button white-btn">подробнее</a>
                <div class="little-img lCatering"></div>
            </div>
        </div>
    </div>
    <div class="wrapper section-corporate" data-paroller-factor="0.5" data-paroller-type="foreground" data-paroller-direction="vertical">
        <div class="after" data-paroller-factor="-0.05" data-paroller-type="foreground" data-paroller-direction="vertical"></div>
        <div class="container">
            <div class="offset-2 col-xl-7 col-lg-7 col-md-7 col-sm-12 col-xs-12 text-content no-offset">
                <h2 class="section-header">Корпоративные заказы</h2>
                <p style="width: 80%" class="section-description">С нами подарки вашим клиентам и партнерам станут самым легким процессом. </p>
                <a href="#" class="section-button">подробнее</a>
                <div class="little-img lCorporate"></div>
            </div>
            <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-xs-5 hidden-mobile"></div>
        </div>
    </div>
    <div class="section-organic" data-paroller-factor="0.15" data-paroller-type="foreground" data-paroller-direction="vertical">
        <div class="text-content">
            <h2 class="section-header">Organic food</h2>
            <p class="section-description">Мы заботимся о вас</p>
            <a href="#" class="section-button white-btn">посмотреть меню</a>
            <div class="little-img lOrganic"></div>
        </div>
        <div class="subsection-organic container" data-paroller-factor="0.15" data-paroller-type="background" data-paroller-direction="vertical">
            <div class="text-content hidden-mobile">
                <h2 class="section-header">Organic food</h2>
                <p class="section-description">Мы заботимся о вас</p>
                <a href="#" class="section-button white-btn">посмотреть меню</a>
                <div class="little-img lOrganic"></div>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php' ?>


</body>
</html>