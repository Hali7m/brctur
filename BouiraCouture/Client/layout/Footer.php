<hr class="my-5" style="width: 80%; margin: auto;">
<div class="container my-5">
    <div class="row text-center justify-content-center">
        <!-- Delivery Info -->
        <div class="col-12 col-md-4 d-flex align-items-center flex-column mb-4 mb-md-0 text-center">
            <i class="fas fa-truck fa-2x mb-2 text-secondary"></i>
            <div>
                <h5 class="fw-bold mb-0">Livraison 58 wilayas</h5>
                <p class="text-muted mb-0">التوصيل إلى 58 ولاية</p>
            </div>
        </div>

        <!-- Support Info -->
        <div class="col-12 col-md-4 d-flex align-items-center flex-column mb-4 mb-md-0 text-center">
            <i class="fas fa-comments fa-2x mb-2 text-secondary"></i>
            <div>
                <h5 class="fw-bold mb-0">Support</h5>
                <p class="text-muted mb-0">خدمة العملاء 24/7</p>
            </div>
        </div>

        <!-- Payment Info -->
        <div class="col-12 col-md-4 d-flex align-items-center flex-column text-center">
            <i class="fas fa-hand-holding-usd fa-2x mb-2 text-secondary"></i>
            <div>
                <h5 class="fw-bold mb-0">Payment à la livraison</h5>
                <p class="text-muted mb-0">الدفع عند التسليم</p>
            </div>
        </div>
    </div>
</div>
<hr class="my-5" style="width: 80%; margin: auto;">

<!-- Footer -->
<footer class="text-center text-lg-start text-dark mt-3" style="background-color: #ffffff">
    <!-- Section: Social media -->
<!-- Social Media Links -->
<div class="text-center my-4 social-icons">
    <a href="#" class="facebook me-3"><i class="fab fa-facebook fa-2x"></i></a>
    <a href="#" class="instagram me-3"><i class="fab fa-instagram fa-2x"></i></a>
    <a href="#" class="twitter"><i class="fab fa-twitter fa-2x"></i></a>
</div>

    </section>

    <!-- Section: Links -->
    <section>
        <div class="container text-center text-md-start mt-5">
            <div class="row mt-3">
                <!-- Column 1 -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <img src="Public/image/sans titre.png" alt="Bouira Couture Logo" draggable="false" style="height: 100px; transition: transform 0.3s;">
                </div>
                <!-- Column 2 -->
                <!-- Column 3 -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <h6 class="text-uppercase fw-bold">Useful Links</h6>
                    <hr class="mb-4 mt-0 d-inline-block mx-auto " style="width: 70px; background-color: ; height: 2px">
                    <p><a href="profil.php" class="text-dark">Mon Profil</a></p>
                    <p><a href="#!" class="text-dark">Become an Affiliate</a></p>
                    <p><a href="#!" class="text-dark">Shipping Rates</a></p>
                    <p><a href="#!" class="text-dark">Help</a></p>
                </div>
                <!-- Column 4 -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <h6 class="text-uppercase fw-bold">Contact</h6>
                    <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 70px; background-color: ; height: 2px">
                    <p><i class="fas fa-home me-3"></i> Bouira, 16200 DZ</p>
                    <p><i class="fas fa-envelope me-3"></i> contact@bouiracouture.dz</p>
                    <p><i class="fas fa-phone me-3"></i> +(213) 21 82 38 38</p>
                    <p><i class="fas fa-print me-3"></i> +(213) 21 82 38 39</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Copyright -->
    <div class="text-center text-white p-3" style="background-color: #000000;">
        © 2024 Copyright:
        <a class="text-white" href="https://www.bouiracouture.dz">BouiraCouture.dz</a>
    </div>
</footer>
<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://kit.fontawesome.com/2afbb65f79.js" crossorigin="anonymous"></script>
</body>
</html>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Get the current URL
        const currentPage = window.location.pathname.split("/").pop();

        // Get all nav links
        const navLinks = document.querySelectorAll(".nav-link");

        // Loop through each nav link
        navLinks.forEach(link => {
            // Get the href attribute of the link
            const page = link.getAttribute("href");

            // Check if it matches the current page
            if (currentPage === page) {
                // Add 'active' class to the parent <li>
                link.parentElement.classList.add("active");
            } else {
                // Remove 'active' class from non-active links
                link.parentElement.classList.remove("active");
            }
        });
    });
</script>
