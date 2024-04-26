<div class="w-100 vh-100 d-flex justify-content-center align-items-center">
    <div class="container rounded-2 p-5">
        <div class="w-100 row">
            <div class="col-4">
                <h3>Avatar</h3>
                <img src="../../../<?= $account['avatar'] ?>" alt="avatar" class="img-thumbnail">
            </div>
            <div class="row col-8">
                <div class="col-12">
                    <form action="./controllers/account/update.php" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?= $account['id'] ?>">
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username" value="<?= $account['username'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="<?= $account['email'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="role" class="form-label">Role</label>
                            <select class="form-select" id="role" name="role">
                                <option value="1" <?php if ($account['role'] == 1) {
                                                        echo "selected";
                                                    } ?>>Admin</option>
                                <option value="2" <?php if ($account['role'] == 2) {
                                                        echo "selected";
                                                    } ?>>User</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="avatar" class="form-label">Avatar</label>
                            <input type="file" class="form-control" id="avatar" name="avatar">
                        </div>
                        <div class="float-end">
                            <a href="/admin/?view=Accounts" class="btn btn-secondary">Close</a>
                            <button type="submit" class="btn btn-primary" name="update">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>