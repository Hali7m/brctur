<?php include ('layout/Header.php'); ?>
<hr class="my-6" >

<div id="modernCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#modernCarousel" data-bs-slide-to="0" class="active rounded-indicator" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#modernCarousel" data-bs-slide-to="1" class="rounded-indicator" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#modernCarousel" data-bs-slide-to="2" class="rounded-indicator" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner" style="height: auto;">
        <div class="carousel-item active">
            <img src="Public/image/slide1.jpg" class="d-block w-100" alt="Slide 1" style="height: 400px; object-fit: cover;">
            <div class="carousel-caption d-md-block">
                <h5>ماكينات خياطة أنيقة</h5>
                <p>استكشف مجموعتنا من الماكينات عالية الجودة.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="Public/image/slide2.jpg" class="d-block w-100" alt="Slide 2" style="height: 400px; object-fit: cover;">
            <div class="carousel-caption d-md-block ">
                <h5>خدمات إصلاح احترافية</h5>
                <p>إصلاح وصيانة خبراء لماكيناتك.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="Public/image/slide3.jpg" class="d-block w-100" alt="Slide 3" style="height: 400px; object-fit: cover;">
            <div class="carousel-caption d-md-block">
                <h5>إكسسوارات عالية الجودة</h5>
                <p>جميع الإكسسوارات التي تحتاجها لخياطة مثالية.</p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#modernCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#modernCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
    </button>
</div>

<hr class="my-4" style="width: 60%; margin: auto; border-top: 2px solid #000;"/>
            <section class="text-center my-5">
                <h1 class="display-5 fw-bold">Bienvenue chez BouiraCouture</h1>
                <p class="lead">Votre destination unique pour l'achat et la réparation de machines à coudre et accessoires.</p>
                <p class="lead"><span>.</span>وجهتك الوحيدة لشراء وإصلاح آلات الخياطة والإكسسوارات<p>
                <a href="Boutique.php" class="btn btn-dark btn-lg"><i class="fas fa-shopping-bag me-2"></i>Visitez notre boutique</a>
            </section>
<hr class="my-5" style="width: 50%; margin: auto;">

<div class="container my-5">
    <!-- Paragraphs with vertical line in between -->
    <div class="row align-items-center justify-content-center text-center">
        <div class="col-12 col-md-5 mb-3 mb-md-0">
            <p class="lead">BouiraCouture est une entreprise spécialisée dans la vente et la réparation de machines à coudre, offrant une large gamme de produits qui répondent aux normes les plus élevées de qualité et de performance. Nos services de réparation sont assurés par des techniciens expérimentés et dévoués, qui prennent soin de chaque détail pour garantir une durabilité et une satisfaction maximale. Que vous soyez un amateur de couture ou un professionnel, notre objectif est de fournir un service exceptionnel pour que vos projets de couture soient réalisés sans accroc.</p>
        </div>

        <!-- Vertical line -->
        <div class="col-1 d-none d-md-block">
            <div class="vertical-line"></div>
        </div>

        <!-- Arabic paragraph (mirror of the French one) -->
        <div class="col-12 col-md-5">
            <p class="lead">بويرة كوتور هي شركة متخصصة في بيع وإصلاح ماكينات الخياطة، حيث نقدم مجموعة واسعة من المنتجات التي تلبي أعلى معايير الجودة والأداء. يتم تقديم خدمات الإصلاح لدينا بواسطة فنيين محترفين يتمتعون بخبرة كبيرة واهتمام بالغ بالتفاصيل لضمان المتانة والرضا التام. سواء كنت من هواة الخياطة أو من المحترفين، فإن هدفنا هو تقديم خدمة استثنائية لضمان إنجاز مشاريعك في الخياطة دون أي مشاكل.</p>
        </div>
    </div>
</div>


<hr class="my-5" style="width: 50%; margin: auto;">
<hr class="my-5" style="width: 50%; margin: auto;">


<div class="container my-5">
    <div class="row align-items-center justify-content-center text-center">
        <div class="col-12 col-md-5 mb-3 mb-md-0">
            <h1 class="lead fw-bold">Nos Marques</h1>
        </div>

        <!-- Vertical line -->
        <div class="col-1 d-none d-md-block">
            <div class="vertical-line"></div>
        </div>

        <div class="col-12 col-md-5">
            <h1 class="lead fw-bold">علاماتنا التجارية</h1>
        </div>
    </div>

    <hr class="my-5" style="width: 50%; margin: auto;">

    <!-- Brands Carousel -->
    <div id="brandsCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <!-- Brand Item 1 -->
            <div class="carousel-item active">
                <div class="row justify-content-center">
                    <div class="col-6 col-md-3">
                        <img src="Public/image/gemsy.jpg" alt="Brand 1" class="img-fluid">
                    </div>
                    <div class="col-6 col-md-3">
                        <img src="Public/image/jack.jpg" alt="Brand 3" class="img-fluid"> 
                    </div>
                    <div class="col-6 col-md-3">
                        <img src="Public/image/singer.jpg" alt="Brand 2" class="img-fluid">

                    </div>
                    <div class="col-6 col-md-3">
                        <img src="Public/image/comel.jpg" alt="Brand 4" class="img-fluid">
                    </div>
                </div>
            </div>
            <!-- Brand Item 2 -->
            <div class="carousel-item">
                <div class="row justify-content-center">
                    <div class="col-6 col-md-3">
                        <img src="Public/image/baoyu2.jpg" alt="Brand 5" class="img-fluid">
                    </div>
                    <div class="col-6 col-md-3">
                        <img src="Public/image/comel.jpg" alt="Brand 6" class="img-fluid">
                    </div>
                    <div class="col-6 col-md-3">
                        <img src="Public/image/sunsir.jpg" alt="Brand 7" class="img-fluid">
                    </div>
                    <div class="col-6 col-md-3">
                        <img src="Public/image/precious.jpg" alt="Brand 8" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#brandsCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#brandsCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div> 
</div>

<hr class="my-5" style="width: 80%; margin: auto;">

<div class="container my-5">
    <div class="row align-items-center justify-content-start">
        <!-- Google Map Column (on the left) -->
        <div class="col-12 col-md-6">
            <div class="mapouter">
                <div class="gmap_canvas">
                    <iframe 
                        id="gmap_canvas" 
                        src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d803.1161025801179!2d3.897219100690237!3d36.373749999999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMzbCsDIyJzI1LjUiTiAzwrA1Myc1My4xIkU!5e0!3m2!1sen!2sdz!4v1731525482799!5m2!1sen!2sdz"  
                        frameborder="0" 
                        scrolling="no" 
                        marginheight="0" 
                        marginwidth="0" 
                        style="width: 90%; height: 60vh; border: none; border-radius: 15px; box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.3); transition: all 0.5s ease;">
                    </iframe>
                </div>
            </div>
        </div>

        <!-- Text Content Column (on the right) -->
        <div class="col-12 col-md-6 text-center">
            <h2 class="fw-bold text-center">Nous Localiser</h2>
            <p class="lead text-center">Trouvez-nous facilement grâce à notre carte interactive. Nous sommes situés au cœur d'Alger et prêts à vous servir avec des produits et services de qualité.</p>
            <h2 class="fw-bold text-center">موقعنا</h2>         
            <p class="lead text-center">تجدنا بسهولة من خلال خريطتنا التفاعلية. نحن في قلب الجزائر جاهزون لخدمتك مع منتجات وخدمات عالية الجودة.</p>
        </div>
    </div>
</div>

<?php include ('layout/Footer.php'); ?>