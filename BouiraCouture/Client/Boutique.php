<?php include ('layout/Header.php'); ?>
<div class="container my-5">
    <!-- Header Section -->
    <div class="row align-items-center justify-content-center text-center">
        <div class="col-12 col-md-5 mb-3 mb-md-0">
            <h1 class="display-4 text-center fw-bold mb-4">Nos Produits</h1>
        </div>
        <div class="col-12 col-md-5">
            <h1 class="display-4 text-center fw-bold mb-4">منتجاتنا</h1>
        </div>
        <hr class="my-4" style="width: 60%; margin: auto; border-top: 2px solid #000;" />
    </div>
    <p class="lead text-center">Découvrez notre large gamme de machines à coudre et accessoires / اكتشف مجموعة واسعة من آلات الخياطة والإكسسوارات</p>

    <!-- Search and Filter Section -->
    <div class="d-flex justify-content-between mb-4">
        <div>
            <label for="filter" class="form-label me-2">Catégories:</label>
            <select id="filter" class="form-select d-inline w-auto">
                <option value="all">Tous</option>
                <option value="sewing-machines">Machines à Coudre</option>
                <option value="accessories">Accessoires</option>
            </select>
            <label for="sort" class="form-label ms-3 me-2">Trier par:</label>
            <select id="sort" class="form-select d-inline w-auto">
                <option value="popularity">Popularité</option>
                <option value="price-low-high">Prix: Bas à Haut</option>
                <option value="price-high-low">Prix: Haut à Bas</option>
            </select>
        </div>
        
    </div>
    

    <!-- Product Section -->
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

    <!-- Quick View Modal 
    <div class="modal fade" id="quickViewModal" tabindex="-1" aria-labelledby="quickViewLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="quickViewLabel">Détails du produit</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="Public/image/product1.jpg" class="img-fluid mb-3" alt="Product Image">
                    <h5>Machine à Coudre Gemsy</h5>
                    <p>Une machine professionnelle pour tous vos projets de couture.</p>
                    <span class="text-muted">€499.99</span>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                    <button type="button" class="btn btn-outline-dark">Ajouter au panier</button>
                </div>
            </div>
        </div>
    </div>-->
</div>

    
<?php include ('layout/footer.php'); ?>
