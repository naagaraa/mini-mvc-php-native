<?= view('frontend/layout/header_view') ?>
<div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <?= view('frontend/layout/navbar_view') ?>
      <?= view('frontend/layout/sidebar_view') ?>

      <!-- Main Content -->
    <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Profile</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item">Profile</div>
            </div>
          </div>
          <div class="section-body">
            <h2 class="section-title">Hi, Miyuki!</h2>
            <p class="section-lead">
              Change information about yourself on this page.
            </p>

            <div class="row mt-sm-4">
              <div class="col-12 col-md-12 col-lg-5">
                <div class="card profile-widget">
                  <div class="profile-widget-header">
                    <img alt="image" src="<?= asset('stisla/') ?>img/avatar/avatar-1.png" class="rounded-circle profile-widget-picture">
                  
                  </div>
                  <div class="profile-widget-description">
                    <div class="profile-widget-name">Miyuki Nagara <div class="text-muted d-inline font-weight-normal"><div class="slash"></div> Junior Web Programmer</div></div>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam laborum maiores deserunt, praesentium quasi rerum dolorum vel assumenda similique earum vero nobis suscipit doloribus nemo delectus! Fuga blanditiis suscipit vitae?
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-12 col-lg-7">
                <div class="card">
                  <form method="post" class="needs-validation" novalidate="">
                    <div class="card-header">
                      <h4>Edit Profile</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                          <div class="form-group col-md-6 col-12">
                            <label>First Name</label>
                            <input type="text" class="form-control" value="Miyuki" required="">
                            <div class="invalid-feedback">
                              Please fill in the first name
                            </div>
                          </div>
                          <div class="form-group col-md-6 col-12">
                            <label>Last Name</label>
                            <input type="text" class="form-control" value="Nagara" required="">
                            <div class="invalid-feedback">
                              Please fill in the last name
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="form-group col-md-7 col-12">
                            <label>Email</label>
                            <input type="email" class="form-control" value="example@mail.com" required="">
                            <div class="invalid-feedback">
                              Please fill in the email
                            </div>
                          </div>
                          <div class="form-group col-md-5 col-12">
                            <label>Phone</label>
                            <input type="tel" class="form-control" value="">
                          </div>
                        </div>
                        <div class="row">
                          <div class="form-group col-12">
                            <label>Bio</label>
                            <textarea class="form-control summernote-simple" style="height: 10rem;" > Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam laborum maiores deserunt, praesentium quasi rerum dolorum vel assumenda similique earum vero nobis suscipit doloribus nemo delectus! Fuga blanditiis suscipit vitae?</textarea>
                          </div>
                        </div>
                        
                    </div>
                    <div class="card-footer text-right">
                      <button class="btn btn-primary">Save Changes</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
</div>
 
      
<?= view('frontend/layout/footer_view')   ?>