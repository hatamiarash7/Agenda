<div class="register_system">
    <div class="clearfix container">
        <h2>Agenda</h2>
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="signin">
                            <div class="signin">
                                <h3><i class="icon ion-locked"></i> Sign in</h3>
                                <form method="post" action="{{ url('authanticate/login') }}">
                                    <div class="feedback"></div>
                                    {{ csrf_field() }}
                                    <div class="form-group has-feedback">
                                        <input type="email" class="form-control" name="email" placeholder="Enter your email" required>
                                        <i class="icon ion-email form-control-feedback"></i>
                                    </div>
                                    <div class="form-group has-feedback">
                                        <input type="password" class="form-control" name="password" placeholder="Enter your password" required data-parsley-minlength="6">
                                        <i class="icon ion-key form-control-feedback"></i>
                                    </div>
                                    <div class="remember">
                                        <input type="checkbox" name="rememberme" id="rememberme" class="css-checkbox" checked />
                                        <label for="rememberme" class="css-label">Remember me</label>
                                    </div>
                                    <button type="submit" class="btn btn-primary" id="signin_btn">Sign in</button>
                                    <span class="clearfix"></span>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
