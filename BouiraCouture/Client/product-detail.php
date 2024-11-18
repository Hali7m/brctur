<?php include('layout/header.php'); ?>

<div class="container my-5">
    <!-- Page Header -->
    <div class="text-center mb-5">
        <h1 class="fw-bold">Détails du Produit / تفاصيل المنتج</h1>
    </div>

    <!-- Product Details Section -->
    <div class="row align-items-center">
        <!-- Product Image -->
        <div class="col-12 col-md-6 text-center">
            <img src="Public/image/product1.jpg" alt="Product Image" class="img-fluid rounded" style="max-height: 400px;">
        </div>

        <!-- Product Information -->
        <div class="col-12 col-md-6">
            <h2 class="fw-bold">Machine à Coudre XYZ / ماكينة خياطة XYZ</h2>
            <p class="lead text-muted">Catégorie : Machines à Coudre / فئة: آلات الخياطة</p>
            <p class="text-success fw-bold">Prix : 20,000 DA</p>
            <p>
                <strong>Description :</strong> Cette machine à coudre est idéale pour les amateurs et les professionnels. 
                Elle est robuste, facile à utiliser, et offre une grande précision dans vos travaux de couture.
                <br>
                <strong>الوصف:</strong> هذه ماكينة خياطة مثالية للهواة والمحترفين. إنها متينة وسهلة الاستخدام وتوفر دقة عالية في أعمال الخياطة الخاصة بك.
            </p>
            <ul>
                <li>Nombre de points : 50 / عدد الغرز: 50</li>
                <li>Type : Électrique / النوع: كهربائي</li>
                <li>Garantie : 2 ans / الضمان: سنتان</li>
            </ul>
            <a href="contact.php" class="btn btn-dark btn-lg">Acheter Maintenant / شراء الآن</a>
        </div>
    </div>

    <!-- Additional Information -->
    <div class="row my-5">
        <div class="col-12">
            <h3 class="fw-bold">Caractéristiques / الخصائص</h3>
            <p>
                La machine est livrée avec plusieurs accessoires pour améliorer votre expérience de couture, notamment des aiguilles, des pieds presseurs, et un manuel d'utilisation détaillé.
                <br>
                يتم توفير الماكينة مع العديد من الملحقات لتحسين تجربة الخياطة الخاصة بك، بما في ذلك الإبر وأقدام الضاغط ودليل مستخدم مفصل.
            </p>
        </div>
    </div>

    <!-- Related Products Section -->
    <div class="row my-5">
        <div class="col-12">
            <h3 class="fw-bold text-center">Produits Connexes / منتجات ذات صلة</h3>
        </div>
        <!-- Related Product 1 -->
        <div class="col-12 col-md-4 text-center">
            <div class="card h-100">
                <img src="Public/image/product1.jpg" class="card-img-top" alt="Related Product">
                <div class="card-body">
                    <h5 class="card-title">Machine à Coudre ABC / ماكينة خياطة ABC</h5>
                    <p class="text-success fw-bold">Prix : 15,000 DA</p>
                    <a href="product-detail.php" class="btn btn-dark btn-sm">Voir Plus / عرض المزيد</a>
                </div>
            </div>
        </div>
        <!-- Related Product 2 -->
        <div class="col-12 col-md-4 text-center">
            <div class="card h-100">
                <img src="Public/image/product1.jpg" class="card-img-top" alt="Related Product">
                <div class="card-body">
                    <h5 class="card-title">Machine à Coudre DEF / ماكينة خياطة DEF</h5>
                    <p class="text-success fw-bold">Prix : 18,000 DA</p>
                    <a href="product-detail.php" class="btn btn-dark btn-sm">Voir Plus / عرض المزيد</a>
                </div>
            </div>
        </div>
        <!-- Related Product 3 -->
        <div class="col-12 col-md-4 text-center">
            <div class="card h-100">
                <img src="Public/image/product1.jpg" class="card-img-top" alt="Related Product">
                <div class="card-body">
                    <h5 class="card-title">Machine à Coudre GHI / ماكينة خياطة GHI</h5>
                    <p class="text-success fw-bold">Prix : 22,000 DA</p>
                    <a href="product-detail.php" class="btn btn-dark btn-sm">Voir Plus / عرض المزيد</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('layout/footer.php'); ?>
