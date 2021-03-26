
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin Dashboard</title>
  <!-- Favicon -->
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" type="text/css">
  <!-- Page plugins -->
  <!-- Admin CSS -->
  <link rel="stylesheet" href="<?= WEBROOT ?>assets/styles/admin.css?v=1.2.0" type="text/css">
</head>

<body>
  <!-- Sidenav -->
 <?= $this->loadParts("admin-nav") ?>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <ul class="navbar-nav align-items-center  ml-md-auto ">
            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>
          
           
            
          </ul>


            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0"><?= $this->getTitle() ?></h6>
              <?= $this->loadParts("breadcrumb-admin", $this->getTitleExplode()) ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Header -->
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col-xl-12">
           
        </div>
      </div>
    <!-- End Page content -->
      <!-- Footer -->
      <?= $this->loadParts("admin-footer") ?>
    </div>
  </div>
</body>

</html>
