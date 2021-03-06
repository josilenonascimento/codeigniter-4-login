<div class="container">
    <div class="row">
        <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 mt-5 pt-3 pb-3 bg-white custom-from-wrapper">
            <div class="container">
                <h3><?= $user['firstname'].' '.$user['lastname'] ?></h3>
                <hr>
                <?php if (session()->get('success')): ?>
                    <div class="alert alert-success">
                        <?= session()->get('success') ?>
                    </div>
                <?php endif; ?>
                <form action="/profile" method="post">
                    <div class="row">
                        <div class="form-group col-12 col-sm-6">
                            <label for="firstname">First Name</label>
                            <input type="text" class="form-control" name="firstname" id="firstname" value="<?= set_value('firstname', $user['firstname']) ?>">

                            <?= isset($validation)? $validation->showError('firstname'): '' ?>
                        </div>
                        <div class="form-group col-12 col-sm-6">
                            <label for="lastname">Last Name</label>
                            <input type="text" class="form-control" name="lastname" id="lastname" value="<?= set_value('lastname', $user['lastname']) ?>">

                            <?= isset($validation)? $validation->showError('lastname'): '' ?>
                        </div>
                        <div class="form-group col-12 col-sm-6">
                            <label for="email">E-mail address</label>
                            <input type="text" class="form-control" name="email" id="email" value="<?= set_value('email', $user['email']) ?>" readonly>

                            <?= isset($validation)? $validation->showError('email'): '' ?>
                        </div>
                        <div class="form-group col-12 col-sm-6">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" id="password">
                            <?= isset($validation)? $validation->showError('password'): '' ?>
                        </div>
                        <div class="form-group col-12 col-sm-6">
                            <label for="password_confirm">Confirm Password</label>
                            <input type="password" class="form-control" name="password_confirm" id="password_confirm">
                            <?= isset($validation)? $validation->showError('password_confirm'): '' ?>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-12 col-sm-4">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>