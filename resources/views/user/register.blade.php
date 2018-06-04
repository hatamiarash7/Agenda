<div class="register_system">
    <div class="clearfix container">
        <h2>Agenda</h2>
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="signup">
                            <div class="signup">
                                <h3><i class="icon ion-person-add"></i> Sign up</h3>
                                <form method="post" action="{{ url('authanticate/register') }}"
                                      enctype="multipart/form-data">
                                    <div class="feedback"></div>
                                    {{ csrf_field() }}
                                    <div class="form-group has-feedback">
                                        <input type="text" class="form-control" name="name"
                                               placeholder="Enter your name" required>
                                        <i class="icon ion-person form-control-feedback"></i>
                                    </div>
                                    <div class="form-group has-feedback">
                                        <input type="email" class="form-control" name="email"
                                               placeholder="Enter your email" required>
                                        <i class="icon ion-email form-control-feedback"></i>
                                    </div>
                                    <div class="form-group has-feedback">
                                        <input type="password" class="form-control" name="password" id="password"
                                               placeholder="Enter your password" minlength="6" required>
                                        <i class="icon ion-key form-control-feedback"></i>
                                    </div>
                                    <div class="form-group has-feedback">
                                        <input type="password" class="form-control" name="password_confirm"
                                               data-parsley-equalto="#password" placeholder="Confirm your password"
                                               minlength="6" required>
                                        <i class="icon ion-android-done form-control-feedback"></i>
                                    </div>
                                    <div class="form-control file_input">
                                        <label>your photo: </label>
                                        <input type="file" name="photo"/>
                                    </div>
                                    <button type="submit" class="btn btn-primary" id="signup_btn">Sign up</button>
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