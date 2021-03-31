<?= view('frontend/layout/header_view') ?>

  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
    <?= view('frontend/layout/navbar_view') ?>
    <?= view('frontend/layout/sidebar_view') ?>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
         

          <div class="row">
            <div class="col-lg-8">
              <div class="card">
                <div class="card-header">
                  <h4>Home Dashboard</h4>
                </div>
                <div class="card-body">
                 <p>Welcome at home page, you login success</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card gradient-bottom">
                <div class="card-header">
                  <h4>Side Menu</h4>
                </div>
                <div class="card-body" id="top-5-scroll">
                  <ul>
                    <li>Option satu</li>
                  </ul>
                </div>
                
              </div>
            </div>
          </div>
        </section>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad Nauval Azhar</a> Backend By <a href="http://dev.nagara.my.id/" target="_blank">Eka Jaya Nagara</a>
        </div>
        <div class="footer-right">
          2.3.0
        </div>
      </footer>
    </div>
  </div>

<?= view('frontend/layout/footer_view')   ?>