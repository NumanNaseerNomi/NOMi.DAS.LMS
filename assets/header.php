<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">-->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="assets/css/iStyle.css">
    <title>Hello, world!</title>
  </head>
  <body>
    <!-- Header start -->
    <header class="fixed-top header-dark p-0">
      <nav class="navbar p-0">
        <div class="container-fluid p-0">
          <div class="dropdown" id="preventDropdown">
            <a class="nav-link dropdown-toggle navbar-brand" href="#" title="Menu" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-bars"></i></a>
            <ul class="dropdown-menu menuDropdown" aria-labelledby="dropdownMenuLink">
              <li class="accordion" id="menuAccordion">
                <a class="dropdown-item menuHeadingOne" type="button" data-toggle="collapse" data-target="#menuCollapseOne" aria-expanded="true" aria-controls="menuCollapseOne"><i class="fas fa-bell"></i>Collapsible #1</a>
                <div id="menuCollapseOne" class="collapse" aria-labelledby="menuHeadingOne" data-parent="#menuAccordion">
                  <ul>
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Action</a></li>
                  </ul>
                </div>
                <a class="dropdown-item menuHeadingTwo" type="button" data-toggle="collapse" data-target="#menuCollapseTwo" aria-expanded="false" aria-controls="menuCollapseTwo"><i class="fas fa-user"></i>Collapsible #2</a>
                <div id="menuCollapseTwo" class="collapse" aria-labelledby="menuHeadingTwo" data-parent="#menuAccordion">
                  <ul>
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Action</a></li>
                  </ul>
                </div>
                <a class="dropdown-item menuHeadingThree active" type="button" data-toggle="collapse" data-target="#menuCollapseThree" aria-expanded="false" aria-controls="menuCollapseThree"><i class="fas fa-tasks"></i>Collapsible #3</a>
                <div id="menuCollapseThree" class="collapse" aria-labelledby="menuHeadingThree" data-parent="#menuAccordion">
                  <ul>
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Action</a></li>
                  </ul>
                </div>
                <a class="dropdown-item" href="#"><i class="fas fa-language"></i>NOMi</a>
                <a class="dropdown-item menuHeadingFour" type="button" data-toggle="collapse" data-target="#menuCollapseFour" aria-expanded="false" aria-controls="menuCollapseFour"><i class="fas fa-bell"></i>Collapsible #4</a>
                <div id="menuCollapseFour" class="collapse" aria-labelledby="menuHeadingFour" data-parent="#menuAccordion">
                  <ul>
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Action</a></li>
                  </ul>
                </div>
              </li>
            </ul>
          </div>
          <div>
            <a class="navbar-brand d-none d-sm-block" href="#"><b>DAR-E-ARQAM</b></a>
            <a class="navbar-brand d-block d-sm-none" href="#"><b>DAS</b></a>
          </div>
          <div>
            <div class="btn-group">
              <a class="dropdown-toggle navbar-brand" title="My TO-DOs" role="button" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-tasks"></i></a>
              <ul class="dropdown-menu dropdown-menu-right">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Separated link</a></li>
              </ul>
            </div>
            <div class="btn-group">
              <a class="dropdown-toggle navbar-brand" title="Notifications" role="button" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-bell"></i></a>
              <ul class="dropdown-menu dropdown-menu-right">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Separated link</a></li>
              </ul>
            </div>
            <div class="btn-group">
              <a class="dropdown-toggle navbar-brand" title="My Account" role="button" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-user"></i></a>
              <ul class="dropdown-menu dropdown-menu-right">
                <li class="iProfileHead">
                  <a class="dropdown-item text-center m-0 p-0 iProfileHead" href="#" title="My Profile">
                    <img src="assets\icon\avatar-2.jpg" class="rounded" alt="Profile Image">
                    <p class="m-0">#Name of user</p>
                    <p class="m-0">#Role</p>
                    <p class="m-0">#if std class</p>
                  </a>
                </li>
                <li><hr class="dropdown-divider mt-0"></li>
                <li><a class="dropdown-item" href="#"><i class="fas fa-cogs"></i>Settings</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt"></i>Log Out</a></li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
    </header>
    <!-- Header end -->