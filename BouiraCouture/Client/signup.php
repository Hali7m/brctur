<?php include('layout/header.php'); ?>

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-6">
            <!-- Signup Form Header -->
            <h1 class="text-center fw-bold mb-4">Créer un Compte / إنشاء حساب</h1>

            <!-- Signup Form -->
            <form>
                <!-- First Name -->
                <div class="mb-3">
                    <label for="firstName" class="form-label">
                        <i class="fas fa-user"></i> Prénom / الاسم الأول
                    </label>
                    <input type="text" class="form-control" id="firstName" placeholder="Entrez votre prénom / أدخل اسمك الأول" required>
                </div>

                <!-- Last Name -->
                <div class="mb-3">
                    <label for="lastName" class="form-label">
                        <i class="fas fa-user"></i> Nom de Famille / اسم العائلة
                    </label>
                    <input type="text" class="form-control" id="lastName" placeholder="Entrez votre nom de famille / أدخل اسم عائلتك" required>
                </div>

                <!-- Username -->
                <div class="mb-3">
                    <label for="username" class="form-label">
                        <i class="fas fa-user-circle"></i> Nom d'Utilisateur / اسم المستخدم
                    </label>
                    <input type="text" class="form-control" id="username" placeholder="Choisissez un nom d'utilisateur / اختر اسم مستخدم" required>
                </div>

                <!-- Email -->
                <div class="mb-3">
                    <label for="email" class="form-label">
                        <i class="fas fa-envelope"></i> Email / البريد الإلكتروني
                    </label>
                    <input type="email" class="form-control" id="email" placeholder="Entrez votre email / أدخل بريدك الإلكتروني" required>
                </div>

                <!-- Password -->
                <div class="mb-3">
                    <label for="password" class="form-label">
                        <i class="fas fa-lock"></i> Mot de Passe / كلمة السر
                    </label>
                    <input type="password" class="form-control" id="password" placeholder="Choisissez un mot de passe / اختر كلمة مرور" required>
                </div>

                <!-- Confirm Password -->
                <div class="mb-3">
                    <label for="confirmPassword" class="form-label">
                        <i class="fas fa-lock"></i> Confirmer le Mot de Passe / تأكيد كلمة السر
                    </label>
                    <input type="password" class="form-control" id="confirmPassword" placeholder="Confirmez votre mot de passe / أكد كلمة مرورك" required>
                </div>

                <!-- Signup Button -->
                <div class="d-grid">
                    <button type="submit" class="btn btn-dark btn-lg">
                        <i class="fas fa-user-plus"></i> S'inscrire / تسجيل
                    </button>
                </div>

                <!-- Login Link -->
                <div class="text-center mt-3">
                    <p>
                        <i class="fas fa-question-circle"></i> Déjà inscrit ? 
                        <a href="login.php" class="text-primary">Connectez-vous</a> / 
                        <a href="login.php" class="text-primary">قم بتسجيل الدخول</a>
                    </p>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include('layout/footer.php'); ?>
