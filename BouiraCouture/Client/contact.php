<?php include('layout/header.php'); ?>

<div class="container my-5">
    <!-- Header Section -->
    <div class="row align-items-center justify-content-center text-center">
        <div class="col-12 col-md-5 mb-3 mb-md-0">
            <h1 class="display-4 text-center fw-bold mb-4">Contactez-nous</h1>
        </div>
        <div class="col-12 col-md-5">
            <h1 class="display-4 text-center fw-bold mb-4">اتصل بنا</h1>
        </div>
        <hr class="my-4" style="width: 60%; margin: auto; border-top: 2px solid #000;" />
    </div>

    <!-- Contact Information Section -->
    <div class="row">
        <div class="col-12 col-md-6">
            <h2 class="h3 fw-bold mb-3 text-center">Nos Coordonnées</h2>
            <p class="text-center"><strong>Adresse:</strong> 123 Rue de la Couture, Bouira, Algérie</p>
            <p class="text-center"><strong>Téléphone:</strong> +213 123 456 789</p>
            <p class="text-center"><strong>Email:</strong> contact@bouiracouture.com</p>
        </div>

        <div class="col-12 col-md-6">
            <h2 class="h3 fw-bold mb-3 text-center">معلومات الاتصال</h2>
            <p class="text-center"><strong>العنوان:</strong> 123 شارع الخياطة، بويرة، الجزائر</p>
            <p class="text-center"><strong>الهاتف:</strong> +213 123 456 789</p>
            <p class="text-center"><strong>البريد الإلكتروني:</strong> contact@bouiracouture.com</p>
        </div>

    </div>
    <hr class="my-4" style="width: 60%; margin: auto; border-top: 2px solid #000;" />


    <!-- Contact Form Section -->
    <div class="row my-5">
        <div class="col-12">
            <h2 class="h3 fw-bold mb-3 text-center">Envoyez-nous un Message / أرسل لنا رسالة</h2>
            <p class="text-center">Si vous avez des questions ou des demandes, n'hésitez pas à nous contacter via le formulaire ci-dessous. Nous vous répondrons dans les plus brefs délais.</p>
            <p class="text-center">إذا كان لديك أي أسئلة أو استفسارات، لا تتردد في الاتصال بنا من خلال النموذج أدناه. سنرد عليك في أقرب وقت ممكن.</p>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-md-6 offset-md-3">
            <form action="submit_contact.php" method="POST">
                <div class="mb-3">
                    <label for="name" class="form-label">Nom</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                </div>
                <button type="submit" class="btn btn-dark btn-lg w-100">Envoyer / إرسال</button>
            </form>
        </div>
    </div>
    <hr class="my-5" style="width: 80%; margin: auto;">
    <!-- Google Map Section -->
    <div class="container my-5">
        <div class="row align-items-center justify-content-start">
            <!-- Google Map Column (on the left) -->
            <div class="container my-5">
    <div class="row align-items-center justify-content-start">
        <!-- Google Map Column (on the left) -->
        <div class="col-12">
            <div class="mapouter">
                <div class="gmap_canvas">
                    <iframe 
                        id="gmap_canvas" 
                        src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d803.1161025801179!2d3.897219100690237!3d36.373749999999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMzbCsDIyJzI1LjUiTiAzwrA1Myc1My4xIkU!5e0!3m2!1sen!2sdz!4v1731525482799!5m2!1sen!2sdz"  
                        frameborder="0" 
                        scrolling="no" 
                        marginheight="0" 
                        marginwidth="0" 
                        style="width: 100vw; height: 80vh; border: none; border-radius: 15px; box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.3); transition: all 0.5s ease;">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</div>

        </div>
    </div>
</div>

<?php include('layout/footer.php'); ?>
