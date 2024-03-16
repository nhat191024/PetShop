    <nav class="navbar navbar-expand-lg bg-body-tertiary fs-5 px-5">
        <div class="container-fluid">
            <a class="navbar-brand " href="#">
                <img src="/assets/PetShop.svg" alt="Logo" width="70" height="64" class="d-inline-block align-text-top">
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
                    <li class="nav-item">
                        <a class="nav-link" href="#">Introduce</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
                <div class="d-flex gap-3 ">
                    <div class="dropdown">
                        <button class="btn btn-dark" data-bs-toggle="dropdown" style="width:60px;">
                            <i class=" fa-solid fa-user" style="color: #ffffff;"></i>
                        </button>
                        <ul class="dropdown-menu text-center mt-2">
                            <?php
                            if (isset($_COOKIE['loggedIn'])) { ?>
                                <li><p>Welcome <strong><?= $_COOKIE["username"] ?></strong></p></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <?php if ($_COOKIE['role'] == '1') { ?>
                                    <li><a class="dropdown-item" href="/admin">Admin Dashboard</a></li>
                                <?php }
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
                    <div class="dropstart">
                        <button class="btn btn-dark" style="width:60px;" data-bs-toggle="dropdown">
                            <i class="fa-solid fa-cart-shopping" style="color: #ffffff;"></i>
                        </button>
                        <ul class="dropdown-menu text-center mt-5">
                            <li>cart item</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <?php
    require_once "./views/components/LoginForm.php";
    ?>