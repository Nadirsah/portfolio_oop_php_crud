<?php include('../layouts/admin/head.php') ?>
<div class="wrapper">
  <!-- Sidebar -->
  <?php include('../layouts/admin/sidebar.php') ?>
  <!-- End Sidebar -->

  <div class="main-panel">
    <?php include('../layouts/admin/header.php') ?>

    <div class="container">
      <div class="page-inner">
        <div class="card">
          <div class="card-header">
            <div class="card-title">Tənzimləmələr</div>
          </div>
          <form action="" method="post">
            <div class="card-body">
              <div class="row">
                <div class="col-md-6 col-lg-4">
                  <div class="form-group">
                    <label for="title">Başlıq</label>
                    <input
                      type="email"
                      class="form-control"
                      id="title"
                      name="title"
                      placeholder="Yazın.." />
                  </div>
                  <div class="form-group">
                    <label for="email">E-poçt</label>
                    <input
                      type="email"
                      class="form-control"
                      id="email"
                      name="email"
                      placeholder="Yazın.." />
                  </div>

                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="form-group">
                    <label for="adress">Ünvan</label>
                    <input
                      type="email"
                      class="form-control"
                      id="adress"
                      name="adress"
                      placeholder="Yazın.." />
                  </div>
                  <div class="form-group">
                    <label for="phone">Telefon nomrəsi</label>
                    <input
                      type="email"
                      class="form-control"
                      id="phone"
                      name="phone"
                      placeholder="Yazın.." />
                  </div>
                </div>
              </div>
            </div>
            <div class="card-action text-center">
              <button class="btn btn-success " name="submit_setting">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>


  </div>

  <!-- Custom template | don't include it in your project! -->

  <!-- End Custom template -->
</div>
<!--   Core JS Files   -->
<?php include('../layouts/admin/script.php') ?>