<?php include('layout/header.php'); ?>

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-6">
            <!-- Login Form Header -->
            <h1 class="text-center fw-bold mb-4">Se Connecter / تسجيل الدخول</h1>

            <!-- Login Form -->
            <form>
                <!-- Email or Username -->
                <div class="mb-3">
                    <label for="emailOrUsername" class="form-label">
                        <i class="fas fa-user"></i> Email ou Nom d'Utilisateur / البريد الإلكتروني أو اسم المستخدم
                    </label>
                    <input type="text" class="form-control" id="emailOrUsername" placeholder="Entrez votre email ou nom d'utilisateur / أدخل بريدك الإلكتروني أو اسم المستخدم" required>
                </div>

                <!-- Password -->
                <div class="mb-3">
                    <label for="password" class="form-label">
                        <i class="fas fa-lock"></i> Mot de Passe / كلمة السر
                    </label>
                    <input type="password" class="form-control" id="password" placeholder="Entrez votre mot de passe / أدخل كلمة المرور" required>
                </div>

                <!-- Forgot Password -->
                <div class="mb-3 text-end">
                    <a href="#" class="text-primary">Mot de Passe Oublié ?</a> / 
                    <a href="#" class="text-primary">نسيت كلمة السر؟</a>
                </div>

                <!-- Login Button -->
                <div class="d-grid">
                    <button type="submit" class="btn btn-dark btn-lg">
                        <i class="fas fa-sign-in-alt"></i> Se Connecter / تسجيل الدخول
                    </button>
                </div>

                <!-- Signup Link -->
                <div class="text-center mt-3">
                    <p>
                        <i class="fas fa-question-circle"></i> Pas encore inscrit ? 
                        <a href="signup.php" class="text-primary">Créez un compte</a> / 
                        <a href="signup.php" class="text-primary">أنشئ حسابًا</a>
                    </p>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include('layout/footer.php'); ?>
