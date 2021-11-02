<div class="container">
    <div class="row">
        <div class="col col-sm-4 offset-sm-4">
            <h3>Login</h3>
            <form action="<?php echo App\helper\Url::get('user/login'); ?>" method="post">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" name="username" id="username">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="password">
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>    
</div>