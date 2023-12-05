<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="theme-name" content="mono" />

  <title>Eduardo's Admin</title>

  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700|Roboto" rel="stylesheet">
  <link href="public/plugins/material/css/materialdesignicons.min.css" rel="stylesheet" />
  <link href="public/plugins/simplebar/simplebar.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
  <!-- public/PLUGINS CSS STYLE -->
  <link href="<?= base_url() ?>public/plugins/nprogress/nprogress.css" rel="stylesheet" />




  <link href="<?= base_url() ?>public/plugins/DataTables/DataTables-1.10.18/css/jquery.dataTables.min.css"
    rel="stylesheet" />



  <link href="<?= base_url() ?>public/plugins/jvectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" />



  <link href="<?= base_url() ?>public/plugins/daterangepicker/daterangepicker.css" rel="stylesheet" />



  <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">



  <link href="<?= base_url() ?>public/plugins/toaster/toastr.min.css" rel="stylesheet" />


  <!-- MONO CSS -->
  <link id="main-css-href" rel="stylesheet" href="<?= base_url() ?>public/css/admin.css" />




  <!-- FAVICON -->
  <link href="<?= base_url() ?>public/public/images/favicon.png" rel="shortcut icon" />

  <!--
    HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
  -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <script src="<?= base_url() ?>public/plugins/nprogress/nprogress.js"></script>

  <style>
    .app-brand a img {
      width: 60px;
      /* Adjust the width as needed */
      height: auto;
      /* Automatically adjusts the height to maintain aspect ratio */
      display: inline-block;
      /* Ensures the image is displayed as an inline block */
    }
  </style>
</head>


<body class="navbar-fixed sidebar-fixed" id="body">
  <script>
    NProgress.configure({ showSpinner: false });
    NProgress.start();
  </script>


  <div id="toaster"></div>


  <!-- ====================================
    ——— WRAPPER
    ===================================== -->
  <div class="wrapper">


    <!-- ====================================
          ——— LEFT SIDEBAR WITH OUT FOOTER
        ===================================== -->
    <aside class="left-sidebar sidebar-dark" id="left-sidebar">
      <div id="sidebar" class="sidebar sidebar-with-footer">
        <!-- Aplication Brand -->
        <div class="app-brand">
          <a href="/index.html">
            <img src="<?= base_url() ?>public/img/logo.png">
            <span class="brand-name">Eduardo's Resort</span>
          </a>
        </div>
        <!-- begin sidebar scrollbar -->
        <div class="sidebar-left" data-simplebar style="height: 100%;">
          <!-- sidebar menu -->
          <ul class="nav sidebar-inner" id="sidebar-menu">



            <li class="active">
              <a class="sidenav-item-link nav-link active" href="<?= site_url('/admin'); ?>">
                <i class="mdi mdi-briefcase-account-outline"></i>
                <span class="nav-text">Admin Dashboard</span>
              </a>
            </li>





            <li>
              <a class="sidenav-item-link nav-link" href="<?= site_url('/bookingDashboard'); ?>">
                <i class="mdi mdi-chart-line"></i>
                <span class="nav-text">Booking Dashboard</span>
              </a>
            </li>





            <li class="section-title">
              Apps
            </li>





            <li>
              <a class="sidenav-item-link" href="<?= site_url('/getFeed'); ?>">
                <i class="mdi mdi-wechat"></i>
                <span class="nav-text">Chat</span>
              </a>
            </li>








        </div>
        <div class="sidebar-footer">
          <div class="sidebar-footer-content">
            <ul class="d-flex">
              <li>
                <button class="btn btn-primary text-dark logout-logo-btn">
                  <i class="fas fa-power-off logout-icon"><a href="<?= site_url('/logout'); ?>">Logout</a>
                  </i>
                </button>

            </ul>
          </div>
        </div>
      </div>

    </aside>



    <!-- ====================================
      ——— PAGE WRAPPER
      ===================================== -->
    <div class="page-wrapper">

      <!-- Header -->
      <header class="main-header" id="header">
        <nav class="navbar navbar-expand-lg navbar-light" id="navbar">
          <!-- Sidebar toggle button -->
          <button id="sidebar-toggler" class="sidebar-toggle">
            <span class="sr-only">Toggle navigation</span>
          </button>

          <span class="page-title">dashboard</span>

          <div class="navbar-right ">

            <!-- search form -->
            <div class="search-form">
              <form action="index.html" method="get">
                <div class="input-group input-group-sm" id="input-group-search">
                  <input type="text" autocomplete="off" name="query" id="search-input" class="form-control"
                    placeholder="Search..." />
                  <div class="input-group-append">
                    <button class="btn" type="button">/</button>
                  </div>
                </div>
              </form>
              <ul class="dropdown-menu dropdown-menu-search">

                <li class="nav-item">
                  <a class="nav-link" href="index.html">Morbi leo risus</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="index.html">Dapibus ac facilisis in</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="index.html">Porta ac consectetur ac</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="index.html">Vestibulum at eros</a>
                </li>

              </ul>

            </div>

            <ul class="nav navbar-nav">
              <!-- Offcanvas -->
              <li class="custom-dropdown">
                <a class="offcanvas-toggler active custom-dropdown-toggler" data-offcanvas="contact-off"
                  href="javascript:">
                  <i class="mdi mdi-contacts icon"></i>
                </a>
              </li>
              <li class="custom-dropdown">
                <button class="notify-toggler custom-dropdown-toggler">
                  <i class="mdi mdi-bell-outline icon"></i>
                  <span class="badge badge-xs rounded-circle">21</span>
                </button>
                <div class="dropdown-notify">

                  <header>
                    <div class="nav nav-underline" id="nav-tab" role="tablist">
                      <a class="nav-item nav-link active" id="all-tabs" data-toggle="tab" href="#all" role="tab"
                        aria-controls="nav-home" aria-selected="true">All (5)</a>
                      <a class="nav-item nav-link" id="message-tab" data-toggle="tab" href="#message" role="tab"
                        aria-controls="nav-profile" aria-selected="false">Msgs (4)</a>
                      <a class="nav-item nav-link" id="other-tab" data-toggle="tab" href="#other" role="tab"
                        aria-controls="nav-contact" aria-selected="false">Others (3)</a>
                    </div>
                  </header>

                  <div class="" data-simplebar style="height: 325px;">
                    <div class="tab-content" id="myTabContent">

                      <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tabs">

                        <div class="media media-sm bg-warning-10 p-4 mb-0">
                          <div class="media-sm-wrapper">
                            <a href="user-profile.html">
                              <img src="<?= base_url() ?>public/images/user/user-sm-02.jpg" alt="User Image">
                            </a>
                          </div>
                          <div class="media-body">
                            <a href="user-profile.html">
                              <span class="title mb-0">John Doe</span>
                              <span class="discribe">Extremity sweetness difficult behaviour he of. On disposal of as
                                landlord horrible. Afraid at highly months do things on at.</span>
                              <span class="time">
                                <time>Just now</time>...
                              </span>
                            </a>
                          </div>
                        </div>

                        <div class="media media-sm p-4 bg-light mb-0">
                          <div class="media-sm-wrapper bg-primary">
                            <a href="user-profile.html">
                              <i class="mdi mdi-calendar-check-outline"></i>
                            </a>
                          </div>
                          <div class="media-body">
                            <a href="user-profile.html">
                              <span class="title mb-0">New event added</span>
                              <span class="discribe">1/3/2014 (1pm - 2pm)</span>
                              <span class="time">
                                <time>10 min ago...</time>...
                              </span>
                            </a>
                          </div>
                        </div>

                        <div class="media media-sm p-4 mb-0">
                          <div class="media-sm-wrapper">
                            <a href="user-profile.html">
                              <img src="<?= base_url() ?>public/images/user/user-sm-03.jpg" alt="User Image">
                            </a>
                          </div>
                          <div class="media-body">
                            <a href="user-profile.html">
                              <span class="title mb-0">Sagge Hudson</span>
                              <span class="discribe">On disposal of as landlord Afraid at highly months do things on
                                at.</span>
                              <span class="time">
                                <time>1 hrs ago</time>...
                              </span>
                            </a>
                          </div>
                        </div>

                        <div class="media media-sm p-4 mb-0">
                          <div class="media-sm-wrapper bg-info-dark">
                            <a href="user-profile.html">
                              <i class="mdi mdi-account-multiple-check"></i>
                            </a>
                          </div>
                          <div class="media-body">
                            <a href="user-profile.html">
                              <span class="title mb-0">Add request</span>
                              <span class="discribe">Add Dany Jones as your contact.</span>
                              <div class="buttons">
                                <a href="#" class="btn btn-sm btn-success shadow-none text-white">accept</a>
                                <a href="#" class="btn btn-sm shadow-none">delete</a>
                              </div>
                              <span class="time">
                                <time>6 hrs ago</time>...
                              </span>
                            </a>
                          </div>
                        </div>

                        <div class="media media-sm p-4 mb-0">
                          <div class="media-sm-wrapper bg-info">
                            <a href="user-profile.html">
                              <i class="mdi mdi-playlist-check"></i>
                            </a>
                          </div>
                          <div class="media-body">
                            <a href="user-profile.html">
                              <span class="title mb-0">Task complete</span>
                              <span class="discribe">Afraid at highly months do things on at.</span>
                              <span class="time">
                                <time>1 hrs ago</time>...
                              </span>
                            </a>
                          </div>
                        </div>

                      </div>

                      <div class="tab-pane fade" id="message" role="tabpanel" aria-labelledby="message-tab">

                        <div class="media media-sm p-4 mb-0">
                          <div class="media-sm-wrapper">
                            <a href="user-profile.html">
                              <img src="<?= base_url() ?>public/images/user/user-sm-01.jpg" alt="User Image">
                            </a>
                          </div>
                          <div class="media-body">
                            <a href="user-profile.html">
                              <span class="title mb-0">Selena Wagner</span>
                              <span class="discribe">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
                              <span class="time">
                                <time>15 min ago</time>...
                              </span>
                            </a>
                          </div>
                        </div>

                        <div class="media media-sm p-4 mb-0">
                          <div class="media-sm-wrapper">
                            <a href="user-profile.html">
                              <img src="<?= base_url() ?>public/images/user/user-sm-03.jpg" alt="User Image">
                            </a>
                          </div>
                          <div class="media-body">
                            <a href="user-profile.html">
                              <span class="title mb-0">Sagge Hudson</span>
                              <span class="discribe">On disposal of as landlord Afraid at highly months do things on
                                at.</span>
                              <span class="time">
                                <time>1 hrs ago</time>...
                              </span>
                            </a>
                          </div>
                        </div>

                        <div class="media media-sm bg-warning-10 p-4 mb-0">
                          <div class="media-sm-wrapper">
                            <a href="user-profile.html">
                              <img src="<?= base_url() ?>public/images/user/user-sm-02.jpg" alt="User Image">
                            </a>
                          </div>
                          <div class="media-body">
                            <a href="user-profile.html">
                              <span class="title mb-0">John Doe</span>
                              <span class="discribe">Extremity sweetness difficult behaviour he of. On disposal of as
                                landlord horrible. Afraid
                                at highly months do things on at.</span>
                              <span class="time">
                                <time>Just now</time>...
                              </span>
                            </a>
                          </div>
                        </div>

                        <div class="media media-sm p-4 mb-0">
                          <div class="media-sm-wrapper">
                            <a href="user-profile.html">
                              <img src="<?= base_url() ?>public/images/user/user-sm-04.jpg" alt="User Image">
                            </a>
                          </div>
                          <div class="media-body">
                            <a href="user-profile.html">
                              <span class="title mb-0">Albrecht Straub</span>
                              <span class="discribe"> Beatae quia natus assumenda laboriosam, nisi perferendis aliquid
                                consectetur expedita non tenetur.</span>
                              <span class="time">
                                <time>Just now</time>...
                              </span>
                            </a>
                          </div>
                        </div>

                      </div>
                      <div class="tab-pane fade" id="other" role="tabpanel" aria-labelledby="contact-tab">

                        <div class="media media-sm p-4 bg-light mb-0">
                          <div class="media-sm-wrapper bg-primary">
                            <a href="user-profile.html">
                              <i class="mdi mdi-calendar-check-outline"></i>
                            </a>
                          </div>
                          <div class="media-body">
                            <a href="user-profile.html">
                              <span class="title mb-0">New event added</span>
                              <span class="discribe">1/3/2014 (1pm - 2pm)</span>
                              <span class="time">
                                <time>10 min ago...</time>...
                              </span>
                            </a>
                          </div>
                        </div>

                        <div class="media media-sm p-4 mb-0">
                          <div class="media-sm-wrapper bg-info-dark">
                            <a href="user-profile.html">
                              <i class="mdi mdi-account-multiple-check"></i>
                            </a>
                          </div>
                          <div class="media-body">
                            <a href="user-profile.html">
                              <span class="title mb-0">Add request</span>
                              <span class="discribe">Add Dany Jones as your contact.</span>
                              <div class="buttons">
                                <a href="#" class="btn btn-sm btn-success shadow-none text-white">accept</a>
                                <a href="#" class="btn btn-sm shadow-none">delete</a>
                              </div>
                              <span class="time">
                                <time>6 hrs ago</time>...
                              </span>
                            </a>
                          </div>
                        </div>

                        <div class="media media-sm p-4 mb-0">
                          <div class="media-sm-wrapper bg-info">
                            <a href="user-profile.html">
                              <i class="mdi mdi-playlist-check"></i>
                            </a>
                          </div>
                          <div class="media-body">
                            <a href="user-profile.html">
                              <span class="title mb-0">Task complete</span>
                              <span class="discribe">Afraid at highly months do things on at.</span>
                              <span class="time">
                                <time>1 hrs ago</time>...
                              </span>
                            </a>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>

                  <footer class="border-top dropdown-notify-footer">
                    <div class="d-flex justify-content-between align-items-center py-2 px-4">
                      <span>Last updated 3 min ago</span>
                      <a id="refress-button" href="javascript:" class="btn mdi mdi-cached btn-refress"></a>
                    </div>
                  </footer>
                </div>
              </li>
              <!-- User Account -->
              <li class="dropdown user-menu">
                <button class="dropdown-toggle nav-link" data-toggle="dropdown">
                  <img src="<?= base_url() ?>public/images/user/user-xs-01.jpg" class="user-image rounded-circle"
                    alt="User Image" />
                  <span class="d-none d-lg-inline-block">John Doe</span>
                </button>

                <ul class="dropdown-menu dropdown-menu-right">

                  <li>
                    <a class="dropdown-link-item" href="user-profile.html">
                      <i class="mdi mdi-account-outline"></i>
                      <span class="nav-text">My Profile</span>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-link-item" href="email-inbox.html">
                      <i class="mdi mdi-email-outline"></i>
                      <span class="nav-text">Message</span>
                      <span class="badge badge-pill badge-primary">24</span>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-link-item" href="user-activities.html">
                      <i class="mdi mdi-diamond-stone"></i>
                      <span class="nav-text">Activitise</span></a>
                  </li>
                  <li>
                    <a class="dropdown-link-item" href="user-account-settings.html">
                      <i class="mdi mdi-settings"></i>
                      <span class="nav-text">Account Setting</span>
                    </a>
                  </li>

                  <li class="dropdown-footer">
                    <a class="dropdown-link-item" href="sign-in.html"> <i class="mdi mdi-logout"></i> Log Out </a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>


      </header>

      <!-- ====================================
        ——— CONTENT WRAPPER
        ===================================== -->
      <div class="content-wrapper">
        <div class="content">
          <!-- Top Statistics -->
          <div class="row">
            <div class="col-xl-3 col-sm-6">
              <div class="card card-default card-mini">
                <div class="card-header">
                  <h2>$18,699</h2>
                  <div class="dropdown">
                    <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink"
                      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
                  <div class="sub-title">
                    <span class="mr-1">Sales of this year</span> |
                    <span class="mx-1">45%</span>
                    <i class="mdi mdi-arrow-up-bold text-success"></i>
                  </div>
                </div>
                <div class="card-body">
                  <div class="chart-wrapper">
                    <div>
                      <div id="spline-area-1"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6">
              <div class="card card-default card-mini">
                <div class="card-header">
                  <h2>$14,500</h2>
                  <div class="dropdown">
                    <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink"
                      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
                  <div class="sub-title">
                    <span class="mr-1">Expense of this year</span> |
                    <span class="mx-1">50%</span>
                    <i class="mdi mdi-arrow-down-bold text-danger"></i>
                  </div>
                </div>
                <div class="card-body">
                  <div class="chart-wrapper">
                    <div>
                      <div id="spline-area-2"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6">
              <div class="card card-default card-mini">
                <div class="card-header">
                  <h2>$4199</h2>
                  <div class="dropdown">
                    <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink"
                      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
                  <div class="sub-title">
                    <span class="mr-1">Profit of this year</span> |
                    <span class="mx-1">20%</span>
                    <i class="mdi mdi-arrow-down-bold text-danger"></i>
                  </div>
                </div>
                <div class="card-body">
                  <div class="chart-wrapper">
                    <div>
                      <div id="spline-area-3"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6">
              <div class="card card-default card-mini">
                <div class="card-header">
                  <h2>$20,199</h2>
                  <div class="dropdown">
                    <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink"
                      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
                  <div class="sub-title">
                    <span class="mr-1">Revenue of this year</span> |
                    <span class="mx-1">35%</span>
                    <i class="mdi mdi-arrow-up-bold text-success"></i>
                  </div>
                </div>
                <div class="card-body">
                  <div class="chart-wrapper">
                    <div>
                      <div id="spline-area-4"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>


          <div class="row">
            <div class="col-xl-8">

              <!-- Income and Express -->
              <div class="card card-default">
                <div class="card-header">
                  <h2>Income And Expenses</h2>
                  <div class="dropdown">
                    <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink"
                      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>

                </div>
                <div class="card-body">
                  <div class="chart-wrapper">
                    <div id="mixed-chart-1"></div>
                  </div>
                </div>

              </div>


            </div>
            <div class="col-xl-4">
              <!-- Current Users  -->
              <div class="card card-default">
                <div class="card-header">
                  <h2>Current Users</h2>
                  <span>Realtime</span>
                </div>
                <div class="card-body">
                  <div id="barchartlg2"></div>
                </div>
                <div class="card-footer bg-white py-4">
                  <a href="#" class="text-uppercase">Current Users Overview</a>
                </div>
              </div>
            </div>
          </div>



          <!-- Table Product -->
          <div class="row">
            <div class="col-12">
              <div class="card card-default">
                <div class="card-header">
                  <h2>Manifest Inventory</h2>
                  <div class="dropdown">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                      aria-haspopup="true" aria-expanded="false"> Yearly Chart
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <table id="productsTable" class="table table-hover table-product" style="width:100%">
                    <thead>
                      <tr>

                        <th>Name/Age</th>

                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($sched_data as $datas): ?>

                        <tr>

                          <td>
                            <?= $datas['manifest'] ?>
                          </td>

                        </tr>

                      </tbody>
                    <?php endforeach; ?>

                  </table>


                </div>
              </div>
            </div>
          </div>

          <div class="row">
    <div class="card-body">
        <div class="mb-3">
            <a href="<?= site_url('/admin/addStaffForm') ?>" class="btn btn-primary">Add Staff</a>
        </div>
        <table class="table table-hover table-product" style="width:100%">
            <thead>
                <tr>
                    <th>Staff</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $LAVA =& lava_instance(); ?>
                <?php $LAVA->call->model('Staff_Model'); ?>

                <?php
                $staff_data = $LAVA->Staff_Model->getStaff(); // Replace with your actual method
                foreach ($staff_data as $datas) {
                    echo "<tr>";

                    echo "<td>{$datas['staff_id']}</td>";
                    echo "<td><img src='../public/Uploads/{$datas['staff_image']}'></td>";
                    echo "<td>{$datas['staff_name']}</td>";

                    echo "<td>";
                    // Form inside the loop so that each row has its own form
                    echo "<form method='post' action='" . site_url('index.php/admin/deleteStaff/' . $datas['staff_id']) . "'>";
                    echo "<button type='submit' class='btn btn-danger'>Delete</button>";
                    echo "<a href='" . site_url('index.php/admin/updateStaffPage/' . $datas['staff_id']) . "' class='btn btn-warning'>Update</a>";
                    echo "</form>";
                    echo "</td>";

                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>




          <div class="row">
            <div class="col-xl-8">

              <!-- Sales by Product -->
              <div class="card card-default">
                <div class="card-header align-items-center">
                  <h2 class="">Sales by Product</h2>
                  <a href="#" class="btn btn-primary btn-pill" data-toggle="modal" data-target="#modal-stock">Add
                    Stock</a>
                </div>
                <div class="card-body">
                  <div class="tab-content">
                    <table id="product-sale" class="table table-product " style="width:100%">
                      <thead>
                        <tr>
                          <th>Product Name</th>
                          <th>Unit</th>
                          <th>Amount</th>
                          <th>%sold</th>
                          <th class="th-width-250"></th>
                        </tr>
                      </thead>
                      <tbody>

                        <tr>
                          <td>Coach Swagger</td>
                          <td>134</td>
                          <td>$24541</td>
                          <td>35.28%</td>
                          <td>
                            <div class="progress progress-md rounded-0">
                              <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="70%"
                                aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                        </tr>

                        <tr>
                          <td>Toddler Shoes</td>
                          <td>119</td>
                          <td>$20225</td>
                          <td>27.05%</td>
                          <td>
                            <div class="progress progress-md rounded-0">
                              <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55%"
                                aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                        </tr>

                        <tr>
                          <td>Hat Black Suits</td>
                          <td>101</td>
                          <td>$17,290</td>
                          <td>20.25%</td>
                          <td>
                            <div class="progress progress-md rounded-0">
                              <div class="progress-bar" role="progressbar" style="width: 45%" aria-valuenow="45%"
                                aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                        </tr>

                        <tr>
                          <td>Backpack Gents</td>
                          <td>59</td>
                          <td>$1150</td>
                          <td>12.50%</td>
                          <td>
                            <div class="progress progress-md rounded-0">
                              <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25%"
                                aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                        </tr>

                        <tr>
                          <td>Speed 500 Ignite</td>
                          <td>25</td>
                          <td>$590</td>
                          <td>02.10%</td>
                          <td>
                            <div class="progress progress-md rounded-0">
                              <div class="progress-bar" role="progressbar" style="width: 10%" aria-valuenow="10%"
                                aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                        </tr>

                        <tr>
                          <td>Earphone & Headphone</td>
                          <td>23</td>
                          <td>$450</td>
                          <td>02%</td>
                          <td>
                            <div class="progress progress-md rounded-0">
                              <div class="progress-bar" role="progressbar" style="width: 8%" aria-valuenow="8%"
                                aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                        </tr>

                        <tr>
                          <td>Gucci Watch</td>
                          <td>32</td>
                          <td>$554</td>
                          <td>8%</td>
                          <td>
                            <div class="progress progress-md rounded-0">
                              <div class="progress-bar" role="progressbar" style="width: 8%" aria-valuenow="8%"
                                aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

            </div>
            <div class="col-xl-4">

              <!-- Chat -->
              <div class="card card-default chat">
                <div class="card-header">
                  <h2>Selena Wagner</h2>
                  <div class="dropdown dropdown-chat-state">
                    <button class="dropdown-toggle btn btn-primary btn-rounded-circle" type="button"
                      id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                      data-display="static">
                      <i class="mdi mdi-account-alert"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                      <li>
                        <a href="#" class="user-link">
                          <img src="<?= base_url() ?>public/images/user/user-sm-01.jpg" alt="User Image">
                          <span class="username">anna patuary
                            <span class="badge badge-secondary">18</span>
                          </span>
                          <span class="state active">
                            <i class="mdi mdi-circle-medium"></i>
                          </span>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="user-link">
                          <img src="<?= base_url() ?>public/images/user/user-sm-02.jpg" alt="User Image">
                          <span class="username">riman Ghose
                            <span class="badge badge-secondary">18</span>
                          </span>
                          <span class="state">
                            1hrs
                          </span>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="user-link">
                          <img src="<?= base_url() ?>public/images/user/user-sm-03.jpg" alt="User Image">
                          <span class="username">riman Ghose
                            <span class="badge badge-secondary">18</span>
                          </span>
                          <span class="state">
                            1hrs
                          </span>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="user-link">
                          <img src="<?= base_url() ?>public/images/user/user-sm-04.jpg" alt="User Image">
                          <span class="username">riman Ghose
                            <span class="badge badge-secondary">18</span>
                          </span>
                          <span class="state">
                            1hrs
                          </span>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="user-link">
                          <img src="<?= base_url() ?>public/images/user/user-sm-05.jpg" alt="User Image">
                          <span class="username">riman Ghose</span>
                          <span class="state">15min</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="card-body pb-0" data-simplebar style="height: 363px;">
                  <!-- Media Chat Left -->
                  <div class="media media-chat">
                    <img src="<?= base_url() ?>public/images/user/user-sm-01.jpg" class="rounded-circle"
                      alt="Avata Image">
                    <div class="media-body">
                      <div class="text-content">
                        <span class="message">Hello my name is anna.</span>
                        <time class="time">5 mins ago</time>
                      </div>
                    </div>
                  </div>

                  <!-- Media Chat Right -->
                  <div class="media media-chat media-chat-right">
                    <div class="media-body">
                      <div class="text-content">
                        <span class="message">Hello i am Riman.</span>
                        <time class="time">4 mins ago</time>
                      </div>
                      <div class="text-content">
                        <span class="message">I want to know about yourself</span>
                        <time class="time">3 mins ago</time>
                      </div>
                    </div>
                    <img src="<?= base_url() ?>public/images/user/user-sm-02.jpg" class="rounded-circle"
                      alt="Avata Image">
                  </div>

                  <!-- Media Chat Left -->
                  <div class="media media-chat">
                    <img src="<?= base_url() ?>public/images/user/user-sm-01.jpg" class="rounded-circle"
                      alt="Avata Image">
                    <div class="media-body">
                      <div class="text-content">
                        <span class="message">Its had resolving otherwise she contented therefore.</span>
                        <time class="time">1 mins ago</time>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="chat-footer">
                  <form>
                    <div class="input-group input-group-chat">
                      <div class="input-group-prepend">
                        <span class="emoticon-icon mdi mdi-emoticon-happy-outline"></span>
                      </div>
                      <input type="text" class="form-control" aria-label="Text input with dropdown button">
                    </div>
                  </form>
                </div>
              </div>

            </div>
          </div>

          <!-- Stock Modal -->
          <div class="modal fade modal-stock" id="modal-stock" aria-labelledby="modal-stock" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
              <form action="#">
                <div class="modal-content">
                  <div class="modal-header align-items-center p3 p-md-5">
                    <h2 class="modal-title" id="exampleModalGridTitle">Add Stock</h2>
                    <div>
                      <button type="button" class="btn btn-light btn-pill mr-1 mr-md-2" data-dismiss="modal"> cancel
                      </button>
                      <button type="submit" class="btn btn-primary  btn-pill" data-dismiss="modal"> save </button>
                    </div>

                  </div>
                  <div class="modal-body p3 p-md-5">
                    <div class="row">
                      <div class="col-lg-8">
                        <h3 class="h5 mb-5">Product Information</h3>
                        <div class="form-group mb-5">
                          <label for="new-product">Product Title</label>
                          <input type="text" class="form-control" id="new-product" placeholder="Add Product">
                        </div>
                        <div class="form-row mb-4">
                          <div class="col">
                            <label for="price">Price</label>
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">$</span>
                              </div>
                              <input type="text" class="form-control" id="price" placeholder="Price" aria-label="Price"
                                aria-describedby="basic-addon1">
                            </div>
                          </div>
                          <div class="col">
                            <label for="sale-price">Sale Price</label>
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">$</span>
                              </div>
                              <input type="text" class="form-control" id="sale-price" placeholder="Sale Price"
                                aria-label="SalePrice" aria-describedby="basic-addon1">
                            </div>
                          </div>
                        </div>

                        <div class="product-type mb-3 ">
                          <label class="d-block" for="sale-price">Product Type <i
                              class="mdi mdi-help-circle-outline"></i> </label>
                          <div>

                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                              <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input"
                                checked="checked">
                              <label class="custom-control-label" for="customRadio1">Physical Good</label>
                            </div>

                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                              <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                              <label class="custom-control-label" for="customRadio2">Digital Good</label>
                            </div>

                            <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                              <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
                              <label class="custom-control-label" for="customRadio3">Service</label>
                            </div>

                          </div>
                        </div>

                        <div class="editor">
                          <label class="d-block" for="sale-price">Description <i
                              class="mdi mdi-help-circle-outline"></i></label>
                          <div id="standalone">
                            <div id="toolbar">
                              <span class="ql-formats">
                                <select class="ql-font"></select>
                                <select class="ql-size"></select>
                              </span>
                              <span class="ql-formats">
                                <button class="ql-bold"></button>
                                <button class="ql-italic"></button>
                                <button class="ql-underline"></button>
                              </span>
                              <span class="ql-formats">
                                <select class="ql-color"></select>
                              </span>
                              <span class="ql-formats">
                                <button class="ql-blockquote"></button>
                              </span>
                              <span class="ql-formats">
                                <button class="ql-list" value="ordered"></button>
                                <button class="ql-list" value="bullet"></button>
                                <button class="ql-indent" value="-1"></button>
                                <button class="ql-indent" value="+1"></button>
                              </span>
                              <span class="ql-formats">
                                <button class="ql-direction" value="rtl"></button>
                                <select class="ql-align"></select>
                              </span>
                            </div>
                          </div>
                          <div id="editor"></div>

                          <div class="custom-control custom-checkbox d-inline-block mt-2">
                            <input type="checkbox" class="custom-control-input" id="customCheck2">
                            <label class="custom-control-label" for="customCheck2">Hide product from published
                              site</label>
                          </div>

                        </div>

                      </div>
                      <div class="col-lg-4">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="customFile" placeholder="please imgae here">
                          <span class="upload-image">Click here to <span class="text-primary">add product image.</span>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </form>
            </div>
          </div>
        </div>

      </div>

      <!-- Footer -->
      <footer class="footer mt-auto">
        <div class="copyright bg-white">
          <p>
            &copy; <span id="copy-year"></span> Copyright Mono Dashboard Bootstrap Template by <a class="text-primary"
              href="http://www.iamabdus.com/" target="_blank">Abdus</a>.
          </p>
        </div>
        <script>
          var d = new Date();
          var year = d.getFullYear();
          document.getElementById("copy-year").innerHTML = year;
        </script>
      </footer>

    </div>
  </div>

  <!-- Card Offcanvas -->
  <div class="card card-offcanvas" id="contact-off">
    <div class="card-header">
      <h2>Contacts</h2>
      <a href="#" class="btn btn-primary btn-pill px-4">Add New</a>
    </div>
    <div class="card-body">

      <div class="mb-4">
        <input type="text" class="form-control form-control-lg form-control-secondary rounded-0"
          placeholder="Search contacts...">
      </div>

      <div class="media media-sm">
        <div class="media-sm-wrapper">
          <a href="user-profile.html">
            <img src="<?= base_url() ?>public/images/user/user-sm-01.jpg" alt="User Image">
            <span class="active bg-primary"></span>
          </a>
        </div>
        <div class="media-body">
          <a href="user-profile.html">
            <span class="title">Selena Wagner</span>
            <span class="discribe">Designer</span>
          </a>
        </div>
      </div>

      <div class="media media-sm">
        <div class="media-sm-wrapper">
          <a href="user-profile.html">
            <img src="<?= base_url() ?>public/images/user/user-sm-02.jpg" alt="User Image">
            <span class="active bg-primary"></span>
          </a>
        </div>
        <div class="media-body">
          <a href="user-profile.html">
            <span class="title">Walter Reuter</span>
            <span>Developer</span>
          </a>
        </div>
      </div>

      <div class="media media-sm">
        <div class="media-sm-wrapper">
          <a href="user-profile.html">
            <img src="<?= base_url() ?>public/images/user/user-sm-03.jpg" alt="User Image">
          </a>
        </div>
        <div class="media-body">
          <a href="user-profile.html">
            <span class="title">Larissa Gebhardt</span>
            <span>Cyber Punk</span>
          </a>
        </div>
      </div>

      <div class="media media-sm">
        <div class="media-sm-wrapper">
          <a href="user-profile.html">
            <img src="<?= base_url() ?>public/images/user/user-sm-04.jpg" alt="User Image">
          </a>

        </div>
        <div class="media-body">
          <a href="user-profile.html">
            <span class="title">Albrecht Straub</span>
            <span>Photographer</span>
          </a>
        </div>
      </div>

      <div class="media media-sm">
        <div class="media-sm-wrapper">
          <a href="user-profile.html">
            <img src="<?= base_url() ?>public/images/user/user-sm-05.jpg" alt="User Image">
            <span class="active bg-danger"></span>
          </a>
        </div>
        <div class="media-body">
          <a href="user-profile.html">
            <span class="title">Leopold Ebert</span>
            <span>Fashion Designer</span>
          </a>
        </div>
      </div>

      <div class="media media-sm">
        <div class="media-sm-wrapper">
          <a href="user-profile.html">
            <img src="<?= base_url() ?>public/images/user/user-sm-06.jpg" alt="User Image">
            <span class="active bg-primary"></span>
          </a>
        </div>
        <div class="media-body">
          <a href="user-profile.html">
            <span class="title">Selena Wagner</span>
            <span>Photographer</span>
          </a>
        </div>
      </div>

    </div>
  </div>




  <script src="<?= base_url() ?>public/plugins/jquery/jquery.min.js"></script>
  <script src="<?= base_url() ?>public/plugins/bootstrap/public/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url() ?>public/plugins/simplebar/simplebar.min.js"></script>
  <script src="https://unpkg.com/hotkeys-public/js/dist/hotkeys.min.js"></script>



  <script src="<?= base_url() ?>public/plugins/apexcharts/apexcharts.js"></script>



  <script
    src="<?= base_url() ?>public/plugins/DataTables/DataTables-1.10.18/public/js/jquery.dataTables.min.js"></script>



  <script src="<?= base_url() ?>public/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
  <script src="<?= base_url() ?>public/plugins/jvectormap/jquery-jvectormap-world-mill.js"></script>
  <script src="<?= base_url() ?>public/plugins/jvectormap/jquery-jvectormap-us-aea.js"></script>



  <script src="<?= base_url() ?>public/plugins/daterangepicker/moment.min.js"></script>
  <script src="<?= base_url() ?>public/plugins/daterangepicker/daterangepicker.js"></script>
  <script>
    jQuery(document).ready(function () {
      jQuery('input[name="dateRange"]').daterangepicker({
        autoUpdateInput: false,
        singleDatePicker: true,
        locale: {
          cancelLabel: 'Clear'
        }
      });
      jQuery('input[name="dateRange"]').on('apply.daterangepicker', function (ev, picker) {
        jQuery(this).val(picker.startDate.format('MM/DD/YYYY'));
      });
      jQuery('input[name="dateRange"]').on('cancel.daterangepicker', function (ev, picker) {
        jQuery(this).val('');
      });
    });
  </script>



  <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>



  <script src="<?= base_url() ?>public/plugins/toaster/toastr.min.js"></script>



  <script src="<?= base_url() ?>public/js/mono.js"></script>
  <script src="<?= base_url() ?>public/js/chart.js"></script>
  <script src="<?= base_url() ?>public/js/map.js"></script>
  <script src="<?= base_url() ?>public/js/custom.js"></script>




  <!--  -->


</body>

</html>