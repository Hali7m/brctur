<?php include('layout/header.php'); ?>

<div class="container my-5">
    <!-- Page Header -->
    <div class="text-center mb-5">
        <h1 class="fw-bold">Nos Produits / منتجاتنا</h1>
        <p class="lead">Découvrez notre large gamme de machines à coudre et accessoires / اكتشف مجموعة واسعة من آلات الخياطة والإكسسوارات</p>
    </div>

    <!-- Products Grid -->
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <!-- Product 1 -->
        <div class="col">
            <div class="card h-100">
                <img src="Public/image/product1.jpg" class="card-img-top" alt="Machine à Coudre 1">
                <div class="card-body text-center">
                    <h5 class="card-title">Machine à Coudre 1 / ماكينة خياطة 1</h5>
                    <p class="card-text">Description courte du produit en français et arabe.</p>
                    <p class="text-success fw-bold">Prix : 15,000 DA</p>
                    <a href="product-detail.php" class="btn btn-dark">Voir Plus / عرض المزيد</a>
                </div>
            </div>
        </div>

        <!-- Product 2 -->
        <div class="col">
            <div class="card h-100">
                <img src="path-to-product-image.jpg" class="card-img-top" alt="Machine à Coudre 2">
                <div class="card-body text-center">
                    <h5 class="card-title">Machine à Coudre 2 / ماكينة خياطة 2</h5>
                    <p class="card-text">Description courte du produit en français et arabe.</p>
                    <p class="text-success fw-bold">Prix : 20,000 DA</p>
                    <a href="product-detail.php" class="btn btn-dark">Voir Plus / عرض المزيد</a>
                </div>
            </div>
        </div>

        <!-- Product 3 -->
        <div class="col">
            <div class="card h-100">
                <img src="path-to-product-image.jpg" class="card-img-top" alt="Machine à Coudre 3">
                <div class="card-body text-center">
                    <h5 class="card-title">Machine à Coudre 3 / ماكينة خياطة 3</h5>
                    <p class="card-text">Description courte du produit en français et arabe.</p>
                    <p class="text-success fw-bold">Prix : 25,000 DA</p>
                    <a href="product-detail.php" class="btn btn-dark">Voir Plus / عرض المزيد</a>
                </div>
            </div>
        </div>

        <!-- More Products -->
        <!-- You can duplicate the above "col" structure to add more products -->
    </div>
</div>

<?php include('layout/footer.php'); ?>
