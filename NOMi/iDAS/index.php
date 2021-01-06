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
    <link rel="stylesheet" type="text/css" href="assets\css\iStyle.css">
    <title>iDAS LMS</title>
    <?php define('DangerText','fs-1 text-danger'); ?>
  </head>
  <body>
    <!-- Navigation Bar - Start -->
    <header class="fixed-top p-0 fs-4 shadow">
      <nav class="navbar p-0">
        <div class="container-fluid p-0">
          <div>
            <!-- Side Navigation Bar - Start -->
            <div class="dropdown ms-2" id="preventDropdown">
              <a title="Menu" role="button" id="menuDropdownButton" data-bs-toggle="dropdown" aria-expanded="false"><i class="far fa-bars"></i></a>
              <div class="dropdown-menu dropdown-menu-dark dropdown-menu-start shadow" aria-labelledby="menuDropdownButton">
                <a class="dropdown-item" href=""><i class="far fa-home"></i>Home</a>
                <a class="dropdown-item" href=""><i class="far fa-chart-bar"></i>Grade Book</a>
                <a class="dropdown-item" href=""><i class="far fa-file-invoice-dollar"></i>Account Book</a>
                <a class="dropdown-item" href=""><i class="far fa-calendar-alt"></i>Time Table</a>
                <hr class="dropdown-divider"/>
                <div class="accordion" id="menuAccordion">
                  <a class="dropdown-item menuHeadingOne" type="button" data-bs-toggle="collapse" data-bs-target="#menuCollapseOne" aria-expanded="true" aria-controls="menuCollapseOne">-<i class="far fa-bell"></i>Collapsible #1</a>
                  <div id="menuCollapseOne" class="collapse" aria-labelledby="menuHeadingOne" data-bs-parent="#menuAccordion">
                    <a class="dropdown-item" href="">--<i class="far fa-user"></i>Action</a>
                    <a class="dropdown-item" href="">--<i class="far fa-user"></i>Action</a>
                    <a class="dropdown-item" href="">--<i class="far fa-language"></i>Action</a>
                  </div>
                  <a class="dropdown-item menuHeadingTwo" type="button" data-bs-toggle="collapse" data-bs-target="#menuCollapseTwo" aria-expanded="false" aria-controls="menuCollapseTwo">-<i class="far fa-user"></i>Collapsible #2</a>
                  <div id="menuCollapseTwo" class="collapse" aria-labelledby="menuHeadingTwo" data-bs-parent="#menuAccordion">
                    <a class="dropdown-item" href="">--<i class="far fa-user"></i>Action</a>
                    <a class="dropdown-item" href="">--<i class="far fa-user"></i>Action</a>
                    <a class="dropdown-item" href="">--<i class="far fa-language"></i>Action</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- Side Navigation Bar - End -->
          </div>
          <div>
            <b class="d-none d-sm-block">DAR-E-ARQAM</b>
            <b class="d-block d-sm-none">DAS</b>
          </div>
          <div>
            <!-- My TO-DOs - Start -->
            <div class="btn-group me-2">
              <div class="dropdown">
                <a title="My TO-DOs" role="button" id="myToDos" data-bs-toggle="dropdown" aria-expanded="false"><i class="far fa-tasks"></i></a>
                <div class="dropdown-menu dropdown-menu-dark dropdown-menu-end shadow" aria-labelledby="myToDos">
                  <a class="dropdown-item" href="">Action</a>
                  <a class="dropdown-item" href="">Another action</a>
                  <hr class="dropdown-divider"/>
                  <a class="dropdown-item" href="">Something else here</a>
                </div>
              </div>
            </div>
            <!-- My TO-DOs - End -->
            <!-- My Notifications - Start -->
            <div class="btn-group me-2">
              <div class="dropdown">
                <a title="My Notifications" role="button" id="myNotifications" data-bs-toggle="dropdown" aria-expanded="false"><i class="far fa-bell"></i></a>
                <div class="dropdown-menu dropdown-menu-dark dropdown-menu-end" aria-labelledby="myNotifications">
                  <a class="dropdown-item" href="">Action</a>
                  <a class="dropdown-item" href="">Another action</a>
                  <hr class="dropdown-divider"/>
                  <a class="dropdown-item" href="">Something else here</a>
                </div>
              </div>
            </div>
            <!-- My Notifications - End -->
            <!-- Profile Setting - Start -->
            <div class="btn-group me-2">
              <div class="dropdown">
                <a title="My Profile" role="button" id="myProfile" data-bs-toggle="dropdown" aria-expanded="false"><i class="far fa-user"></i></a>
                <div class="dropdown-menu dropdown-menu-dark dropdown-menu-end" aria-labelledby="myProfile">
                  <a class="dropdown-item text-center" href="" title="My Profile">
                    <p class="m-0">#Name of user</p>
                    <p class="small m-0">#Role</p>
                    <p class="m-0">#if std class</p>
                  </a>
                  <hr class="dropdown-divider"/>
                  <a class="dropdown-item" href=""><i class="far fa-cogs"></i>Settings</a>
                  <hr class="dropdown-divider"/>
                  <a class="dropdown-item" href=""><i class="far fa-power-off"></i>Log Out</a>
                </div>
              </div>
            </div>
            <!-- Profile Setting - End -->
          </div>
        </div>
      </nav>
    </header>
    <!-- Navigation Bar - End -->
    <!-- Main Container - Start -->
    <div class="container-fluid pt-5">
 <?php require 'components\subjectCard.php'; ?>
    </div>
    <!-- Main Container - End -->
    <span class="<?php echo DangerText ?>"> Le Champion est Ici </span>
    <?php require 'components\footer.php'; ?>