  <!-- Login Sign Up Modal -->
  <div class="modal fade" id="login-signup-model">
    <div class="modal-dialog">
      <div class="modal-content">
          <button type="button" class="close aon-login-close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
          </button>
          <div class="modal-body">

              <div class="sf-custom-tabs sf-custom-new aon-logon-sign-area p-3">

                  <!--Tabs-->
                  <ul class="nav nav-tabs nav-table-cell">
                      <li><a data-toggle="tab" href="#Upcoming" class="active">Login</a></li>
                      <li><a data-toggle="tab" href="#Past">Sign up</a></li>
                  </ul>
                  <!--Tabs Content-->
                  <div class="tab-content">

                      <!--Login Form-->
                      <div id="Upcoming" class="tab-pane active">
                          <div class="sf-tabs-content">
                              <form class="aon-login-form" action="{{route('login')}}" method="post">
                              @csrf
                                  <div class="row">
                                      <div class="col-md-12">
                                          <div class="form-group">
                                              <div class="aon-inputicon-box">
                                                  <input class="form-control sf-form-control" name="email" type="text" placeholder="User Name">
                                                  <i class="aon-input-icon fa fa-user"></i>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-md-12">
                                          <div class="form-group">
                                              <div class="aon-inputicon-box">
                                                  <input class="form-control sf-form-control" name="password" type="password" placeholder="Password">
                                                  <i class="aon-input-icon fa fa-lock"></i>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-md-12">
                                          <div class="form-group d-flex aon-login-option justify-content-between">
                                              <div class="aon-login-opleft">
                                                   <div class="checkbox sf-radio-checkbox">
                                                      <input id="td2_2" name="abc" value="five" type="checkbox">
                                                      <label for="td2_2">Keep me logged</label>
                                                  </div>
                                              </div>
                                              <div class="aon-login-opright">
                                                  <a href="#">Forget Password</a>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-md-12">
                                          <button type="submit" class="site-button w-100">Submit <i class="feather-arrow-right"></i> </button>
                                      </div>

                                  </div>
                              </form>
                          </div>
                      </div>

                      <!--Sign up Form-->
                      <div id="Past" class="tab-pane">
                          <div class="sf-tabs-content">
                              <form class="aon-login-form" action="{{route('register')}}" method="POST">
                                  @csrf
                                  <div class="row">
                                      <div class="col-md-12">
                                          <div class="form-group">
                                              <div class="aon-inputicon-box">
                                                  <input class="form-control sf-form-control" name="name" type="text" placeholder="Full Name">
                                                  <i class="aon-input-icon fa fa-user"></i>
                                              </div>
                                          </div>
                                      </div>

                                      <div class="col-md-12">
                                          <div class="form-group">
                                              <div class="aon-inputicon-box">
                                                  <input class="form-control sf-form-control" name="mobille" type="tel" pattern="\d{10}" maxlength="10" placeholder="Phone">
                                                  <i class="aon-input-icon fa fa-phone"></i>
                                              </div>
                                          </div>
                                      </div>

                                      <div class="col-md-12">
                                          <div class="form-group">
                                              <div class="aon-inputicon-box">
                                                  <input class="form-control sf-form-control" name="email" type="email" placeholder="Email">
                                                  <i class="aon-input-icon fa fa-envelope-o"></i>
                                              </div>
                                          </div>
                                      </div>

                                      <div class="col-md-12">
                                          <div class="form-group">
                                              <div class="aon-inputicon-box">
                                                  <input class="form-control sf-form-control" name="password" type="password" placeholder="Password">
                                                  <i class="aon-input-icon fa fa-lock"></i>
                                              </div>
                                          </div>
                                      </div>

                                       <div class="col-md-12">
                                          <div class="form-group">
                                              <div class="aon-inputicon-box">
                                                  <input class="form-control sf-form-control" name="password_confirmation" type="password" placeholder="Confirm Password">
                                                  <i class="aon-input-icon fa fa-lock"></i>
                                              </div>
                                          </div>
                                      </div>

                                      <div class="col-md-12">
                                          <div class="form-group sign-term-con">
                                              <div class="checkbox sf-radio-checkbox">
                                                  <input id="td33" name="abc" value="five" type="checkbox">
                                                  <label for="td33">I've read and agree with your <a href="#">Privacy Policy</a> and <a href="#">Terms & Conditions</a> </label>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-md-12">
                                          <button type="submit" class="site-button w-100">Submit <i class="feather-arrow-right"></i> </button>
                                      </div>

                                  </div>
                              </form>
                          </div>
                      </div>

                  </div>

              </div>

          </div>
      </div>
    </div>
  </div>
  <!-- Login Sign Up Modal -->
