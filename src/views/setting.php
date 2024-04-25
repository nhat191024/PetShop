<div class="w-100 vh-100 d-flex justify-content-center align-items-center">
    <div class="container bg-white rounded-2 p-5">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">Account Setting</h1>
                <hr>
            </div>
        </div>
        <div class="w-100 row">
            <div class="col-4">
                <h3>Avatar</h3>
                <img src="<?= $account['avatar'] ?>" alt="avatar" class="img-thumbnail">
            </div>
            <div class="row col-8">
                <div class="col-12">
                    <form action="/controllers/account/update.php" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username" value="<?= $_SESSION['username'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="<?= $account['email'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                        <div class="mb-3">
                            <label for="confirmPassword" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" id="confirmPassword" name="confirmPassword">
                        </div>
                        <div class="mb-3">
                            <label for="avatar" class="form-label">Avatar</label>
                            <input type="file" class="form-control" id="avatar" name="avatar">
                        </div>
                        <button type="submit" class="btn btn-primary" name="update">Update</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>