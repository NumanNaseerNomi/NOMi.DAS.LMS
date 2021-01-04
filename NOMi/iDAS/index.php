<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS File - Start -->
    <link rel="stylesheet" type="text/css" href="assets\plugins\bootstrap\css\bootstrap.min.css">
    <!-- Bootstrap CSS File - End -->
    <!-- Font Awesome CSS File - Start -->
    <link rel="stylesheet" type="text/css" href="assets\plugins\fontAwesome\css\fontAwesomeAll.min.css">
    <!-- Font Awesome CSS File - End -->
    <title>Hello, world!</title>

<style>
  .red { color: red; }
  .bold { font-weight: bold; }
  .nClasses {  }
</style>

<?php define('DangerText','red bold nClasses'); ?>


  </head>
  <body>
    <!-- Navigation Bar - Start -->
    <header class="fixed-top p-0 fs-4    border-bottom shadow ">
      <nav class="navbar p-0">
        <div class="container-fluid p-0">
          <div class="dropdown" id="preventDropdown">
            <a class="dropdown-toggle" title="Menu" role="button" id="menuDropdownButton" data-bs-toggle="dropdown" aria-expanded="false"><i class="far fa-bars"></i></a>
            <div class="dropdown-menu dropdown-menu-start" aria-labelledby="menuDropdownButton">
              <div><a class="dropdown-item" href="">Action</a></div>
              <div><a class="dropdown-item" href="">Another action</a></div>
              <hr class="dropdown-divider"/>
              <div class="accordion" id="menuAccordion">
                <a class="dropdown-item menuHeadingOne" type="button" data-bs-toggle="collapse" data-bs-target="#menuCollapseOne" aria-expanded="true" aria-controls="menuCollapseOne"><i class="fas fa-bell"></i>Collapsible #1</a>
                <div id="menuCollapseOne" class="collapse" aria-labelledby="menuHeadingOne" data-bs-parent="#menuAccordion">
                  <div><a class="dropdown-item active" href="">Action</a></div>
                  <div><a class="dropdown-item" href="">Action</a></div>
                </div>
                <a class="dropdown-item menuHeadingTwo" type="button" data-bs-toggle="collapse" data-bs-target="#menuCollapseTwo" aria-expanded="false" aria-controls="menuCollapseTwo"><i class="fas fa-user"></i>Collapsible #2</a>
                <div id="menuCollapseTwo" class="collapse" aria-labelledby="menuHeadingTwo" data-bs-parent="#menuAccordion">
                  <div><a class="dropdown-item" href="">Action</a></div>
                  <div><a class="dropdown-item" href="">Action</a></div>
                </div>
              </div>
            </div>
          </div>
          <div>
            <a href=""><b class="d-none d-sm-block">DAR-E-ARQAM</b><b class="d-block d-sm-none">DAS</b></a>
          </div>
          <div>
            <div class="btn-group">
              <div class="dropdown">
                <a class="dropdown-toggle" title="My TO-DOs" role="button" id="myToDos" data-bs-toggle="dropdown" aria-expanded="false"><i class="far fa-tasks"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="myToDos">
                  <li><a class="dropdown-item" href="">Action</a></li>
                  <li><a class="dropdown-item" href="">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="">Something else here</a></li>
                </ul>
              </div>
            </div>
            <div class="btn-group">
              <div class="dropdown">
                <a class="dropdown-toggle" title="Notifications" role="button" id="Notifications" data-bs-toggle="dropdown" aria-expanded="false"><i class="far fa-bell"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="Notifications">
                  <li><a class="dropdown-item" href="">Action</a></li>
                  <li><a class="dropdown-item" href="">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="">Something else here</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </header>
    <!-- Navigation Bar - End -->
    <!-- Main Container - Start -->
    <div class="container-fluid pt-5">
      <h1>Heading H1</h1>
    </div>
    <!-- Main Container - End -->
    <h1>Hello, world!</h1>


    <p class="fs-1">.fs-1 text</p>
<p class="fs-2">.fs-2 text</p>
<p class="fs-3">.fs-3 text</p>
<p class="fs-4">.fs-4 text</p>
<p class="fs-5">.fs-5 text</p>
<p class="fs-6">.fs-6 text</p>

<span class="<?php echo DangerText ?>"> Le Champion est Ici </span>
    <?php require 'components\footer.php'; ?>