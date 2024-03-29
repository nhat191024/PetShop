    <nav class="navbar navbar-expand-lg bg-info bg-gradient fs-5 fw-bold px-5">
        <div class="container-fluid">
            <a class="navbar-brand " href="#">
                <img src="/assets/PetShop.svg" alt="Logo" width="40" height="40" class="d-inline-block align-text-top">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Product</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Pet Category
                        </a>
                        <ul class="dropdown-menu text-center">
                            <?php foreach ($listPetCategory as $x) : ?>
                                <li><a class="dropdown-item" href="#"><?= $x['name'] ?></a></li>
                                <hr class="dropdown-divider">
                            <?php endforeach; ?>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Product Category
                        </a>
                        <ul class="dropdown-menu text-center">
                            <?php foreach ($listProductCategory as $x) : ?>
                                <li><a class="dropdown-item" href="#"><?= $x['name'] ?></a></li>
                                <hr class="dropdown-divider">
                            <?php endforeach; ?>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Introduce</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
                <div class="d-flex gap-3 ">
                    <div class="dropdown">
                        <button class="btn btn-info bg-gradient border border-2 border-black" data-bs-toggle="dropdown" style="width:60px;">
                            <i class="fa-solid fa-user" style="color: #000000;"></i>
                        </button>
                        <ul class="dropdown-menu text-center mt-2">
                            <?php
                            if (isset($_SESSION['loggedIn'])) { ?>
                                <li>
                                    <p>Welcome <strong><?= $_SESSION["username"] ?></strong></p>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <?php if ($_SESSION['role'] == '1') : ?>
                                    <li><a class="dropdown-item" href="/admin">Admin Dashboard</a></li>
                                <?php endif;
                            } else { ?>
                                <li>
                                    <a type="button" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#LoginModal">
                                        SignIn
                                    </a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">SignUp</a></li>
                            <?php } ?>
                        </ul>
                    </div>
                    <div class="dropdown">
                        <button class="btn btn-info bg-gradient border border-2 border-black" style="width:60px;" data-bs-toggle="dropdown">
                            <i class="fa-solid fa-cart-shopping" style="color: #000000;"></i>
                        </button>
                        <ul class="dropdown-menu text-center mt-1">
                            <li>cart item</li>
                        </ul>
                    </div>
                    <div class="dropstart">
                        <button class="btn btn-info bg-gradient border border-2 border-black" style="width:60px;" data-bs-toggle="dropdown">
                            <i class="fa-solid fa-calendar-days" style="color: #000000;"></i>
                        </button>
                        <ul class="dropdown-menu text-center mt-5">
                            <li>Your Schedule</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <?php
    require_once "./views/components/LoginForm.php";
    ?>