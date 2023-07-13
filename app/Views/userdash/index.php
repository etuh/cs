<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard | Home</title>
    <!-- base:css -->
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap-4/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/vendors/mdi/css/materialdesignicons.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/vendors/base/vendor.bundle.base.css') ?>">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="<?= base_url('assets/css/style2.css') ?>">
    <!-- endinject -->
    <link rel="shortcut icon" href="<?= base_url('assets/images/favicon.png') ?>" />
	
	    <!-- jquery -->
		<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    
    <!-- datatables -->
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js" defer></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">

    <link href="https://cdn.datatables.net/v/dt/dt-1.13.4/af-2.5.3/b-2.3.6/b-colvis-2.3.6/b-html5-2.3.6/b-print-2.3.6/cr-1.6.2/date-1.4.1/fc-4.2.2/fh-3.3.2/kt-2.8.2/r-2.4.1/rg-1.3.1/rr-1.3.3/sc-2.1.1/sb-1.4.2/sp-2.1.2/sl-1.6.2/sr-1.2.2/datatables.min.css" rel="stylesheet"/>
 
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
	<script src="https://cdn.datatables.net/v/bs5/jszip-2.5.0/dt-1.13.4/b-2.3.6/b-html5-2.3.6/b-print-2.3.6/cr-1.6.2/date-1.4.1/fc-4.2.2/fh-3.3.2/rg-1.3.1/rr-1.3.3/sb-1.4.2/sp-2.1.2/sl-1.6.2/sr-1.2.2/datatables.min.js" defer></script>


	<script>
      $(document).ready( function () {
          $('#datatable').DataTable( {
            select: {
                style: 'single',
                toggleable: true
            },
            responsive: true,
            altEditor: true,     // Enable altEditor
            dom: 'Bfrtip',
            buttons: [
                'copy', 'excel', 'pdf',
        {
            extend: 'selected', // Bind to Selected row
            text: 'Edit',
            name: 'edit'        // do not change name
        },
        {
            extend: 'selected', // Bind to Selected row
            text: 'Delete',
            name: 'delete'      // do not change name
        },
        {
            text: 'Refresh',
            name: 'refresh'      // do not change name
        }
            ]
    });
    
      } );
      $('#datatable').dtDateTime();
    </script>
</head>
  <body>
    <div class="container-scroller">
				
		<!-- partial:partials/_horizontal-navbar.html -->
    <div class="horizontal-menu">
      <nav class="navbar top-navbar col-lg-12 col-12 p-0">
        <div class="container-fluid">
          <div class="navbar-menu-wrapper d-flex align-items-center justify-content-between">
            <ul class="navbar-nav navbar-nav-left">
              <li class="nav-item ms-0 me-5 d-lg-flex d-none">
                <a href="#" class="nav-link horizontal-nav-left-menu"><i class="mdi mdi-format-list-bulleted"></i></a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
                  <i class="mdi mdi-bell mx-0"></i>
                  <span class="count bg-success">2</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                  <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                        <div class="preview-icon bg-success">
                          <i class="mdi mdi-information mx-0"></i>
                        </div>
                    </div>
                    <div class="preview-item-content">
                        <h6 class="preview-subject font-weight-normal">Application Error</h6>
                        <p class="font-weight-light small-text mb-0 text-muted">
                          Just now
                        </p>
                    </div>
                  </a>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                        <div class="preview-icon bg-warning">
                          <i class="mdi mdi-settings mx-0"></i>
                        </div>
                    </div>
                    <div class="preview-item-content">
                        <h6 class="preview-subject font-weight-normal">Settings</h6>
                        <p class="font-weight-light small-text mb-0 text-muted">
                          Private message
                        </p>
                    </div>
                  </a>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                        <div class="preview-icon bg-info">
                          <i class="mdi mdi-account-box mx-0"></i>
                        </div>
                    </div>
                    <div class="preview-item-content">
                        <h6 class="preview-subject font-weight-normal">New user registration</h6>
                        <p class="font-weight-light small-text mb-0 text-muted">
                          2 days ago
                        </p>
                    </div>
                  </a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center" id="messageDropdown" href="#" data-bs-toggle="dropdown">
                  <i class="mdi mdi-email mx-0"></i>
                  <span class="count bg-primary">4</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                  <p class="mb-0 font-weight-normal float-left dropdown-header">Messages</p>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                        <img src="images/faces/face4.jpg" alt="image" class="profile-pic">
                    </div>
                    <div class="preview-item-content flex-grow">
                        <h6 class="preview-subject ellipsis font-weight-normal">David Grey
                        </h6>
                        <p class="font-weight-light small-text text-muted mb-0">
                          The meeting is cancelled
                        </p>
                    </div>
                  </a>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                        <img src="images/faces/face2.jpg" alt="image" class="profile-pic">
                    </div>
                    <div class="preview-item-content flex-grow">
                        <h6 class="preview-subject ellipsis font-weight-normal">Tim Cook
                        </h6>
                        <p class="font-weight-light small-text text-muted mb-0">
                          New product launch
                        </p>
                    </div>
                  </a>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                        <img src="images/faces/face3.jpg" alt="image" class="profile-pic">
                    </div>
                    <div class="preview-item-content flex-grow">
                        <h6 class="preview-subject ellipsis font-weight-normal"> <?= $userInfo['user']['name']; ?>
                        </h6>
                        <p class="font-weight-light small-text text-muted mb-0">
                          Upcoming board meeting
                        </p>
                    </div>
                  </a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link count-indicator "><i class="mdi mdi-message-reply-text"></i></a>
              </li>
              <li class="nav-item nav-search d-none d-lg-block ms-3">
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="search">
                        <i class="mdi mdi-magnify"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control" placeholder="search" aria-label="search" aria-describedby="search">
                </div>
              </li>	
            </ul>
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo" href="index.html"><img src="images/logo.svg" alt="logo"/></a>
                <a class="navbar-brand brand-logo-mini" href="index.html"><img src="images/logo-mini.svg" alt="logo"/></a>
            </div>
            <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item dropdown  d-lg-flex d-none">
                  <button type="button" class="btn btn-inverse-primary btn-sm">Product </button>
                </li>
                <li class="nav-item dropdown d-lg-flex d-none">
                  <a class="dropdown-toggle show-dropdown-arrow btn btn-inverse-primary btn-sm" id="nreportDropdown" href="#" data-bs-toggle="dropdown">
                  Reports
                  </a>
                  <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="nreportDropdown">
                      <p class="mb-0 font-weight-medium float-left dropdown-header">Reports</p>
                      <a class="dropdown-item">
                        <i class="mdi mdi-file-pdf text-primary"></i>
                        Pdf
                      </a>
                      <a class="dropdown-item">
                        <i class="mdi mdi-file-excel text-primary"></i>
                        Exel
                      </a>
                  </div>
                </li>
                <li class="nav-item dropdown d-lg-flex d-none">
                  <button type="button" class="btn btn-inverse-primary btn-sm">Settings</button>
                </li>
                <li class="nav-item nav-profile dropdown">
                  <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">
                    <span class="nav-profile-name"><?= $userInfo['user']['name']; ?></span>
                    <span class="online-status"></span>
                    <img src="images/faces/face28.png" alt="profile"/>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                      <a class="dropdown-item">
                        <i class="mdi mdi-settings text-primary"></i>
                        Settings
                      </a>
                      <a class="dropdown-item"  href="<?= route_to('logout') ?>">
                        <i class="mdi mdi-logout text-primary"></i>
                        Logout
                      </a>
                  </div>
                </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="horizontal-menu-toggle">
              <span class="mdi mdi-menu"></span>
            </button>
          </div>
        </div>
      </nav>
      <nav class="bottom-navbar">
        <div class="container">
            <ul class="nav page-navigation">
              <li class="nav-item">
                <a class="nav-link" href="/">
                  <i class="mdi mdi-file-document-box menu-icon"></i>
                  <span class="menu-title">Dashboard</span>
                </a>
              </li>
              <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="mdi mdi-cube-outline menu-icon"></i>
                    <span class="menu-title">Menu</span>
                    <i class="menu-arrow"></i>
                  </a>
                  <div class="submenu">
                      <ul>
                          <li class="nav-item"><a class="nav-link" href="#">Option</a></li>
                          <li class="nav-item"><a class="nav-link" href="#">Two</a></li>
                      </ul>
                  </div>
              </li>
              <!-- <li class="nav-item">
                  <a href="pages/forms/basic_elements.html" class="nav-link">
                    <i class="mdi mdi-chart-areaspline menu-icon"></i>
                    <span class="menu-title">Form Elements</span>
                    <i class="menu-arrow"></i>
                  </a>
              </li>
              <li class="nav-item">
                  <a href="pages/charts/chartjs.html" class="nav-link">
                    <i class="mdi mdi-finance menu-icon"></i>
                    <span class="menu-title">Charts</span>
                    <i class="menu-arrow"></i>
                  </a>
              </li>
              <li class="nav-item">
                  <a href="pages/tables/basic-table.html" class="nav-link">
                    <i class="mdi mdi-grid menu-icon"></i>
                    <span class="menu-title">Tables</span>
                    <i class="menu-arrow"></i>
                  </a>
              </li>
              <li class="nav-item">
                  <a href="pages/icons/mdi.html" class="nav-link">
                    <i class="mdi mdi-emoticon menu-icon"></i>
                    <span class="menu-title">Icons</span>
                    <i class="menu-arrow"></i>
                  </a>
              </li>
              <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="mdi mdi-codepen menu-icon"></i>
                    <span class="menu-title">Sample Pages</span>
                    <i class="menu-arrow"></i>
                  </a>
                  <div class="submenu">
                      <ul class="submenu-item">
                          <li class="nav-item"><a class="nav-link" href="pages/samples/login.html">Login</a></li>
                          <li class="nav-item"><a class="nav-link" href="pages/samples/login-2.html">Login 2</a></li>
                          <li class="nav-item"><a class="nav-link" href="pages/samples/register.html">Register</a></li>
                          <li class="nav-item"><a class="nav-link" href="pages/samples/register-2.html">Register 2</a></li>
                          <li class="nav-item"><a class="nav-link" href="pages/samples/lock-screen.html">Lockscreen</a></li>
                      </ul>
                  </div>
              </li>
              <li class="nav-item">
                  <a href="docs/documentation.html" class="nav-link">
                    <i class="mdi mdi-file-document-box-outline menu-icon"></i>
                    <span class="menu-title">Documentation</span></a>
              </li> -->
            </ul>
        </div>
      </nav>
    </div>
    <!-- partial -->
		<div class="container-fluid page-body-wrapper">
			<div class="main-panel">
				<div class="content-wrapper">
					<div class="row">
						<div class="col-sm-6 mb-4 mb-xl-0">
							<div class="d-lg-flex align-items-center">
								<div>
									<h3 class="text-dark font-weight-bold mb-2">Hi, welcome back <?= $userInfo['user']['name']; ?> !</h3>
									<h6 class="font-weight-normal mb-2">Last login was 23 hours ago. View details</h6>
								</div>
								<div class="ms-lg-5 d-lg-flex d-none">
										<button type="button" class="btn bg-white btn-icon">
											<i class="mdi mdi-view-grid text-success"></i>
									</button>
										<button type="button" class="btn bg-white btn-icon ms-2">
											<i class="mdi mdi-format-list-bulleted font-weight-bold text-primary"></i>
										</button>
								</div>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="d-flex align-items-center justify-content-md-end">
								<div class="pe-1 mb-3 mb-xl-0">
										<button type="button" class="btn btn-outline-inverse-info btn-icon-text">
											Feedback
											<i class="mdi mdi-message-outline btn-icon-append"></i>                          
										</button>
								</div>
								<div class="pe-1 mb-3 mb-xl-0">
										<button type="button" class="btn btn-outline-inverse-info btn-icon-text">
											Help
											<i class="mdi mdi-help-circle-outline btn-icon-append"></i>                          
									</button>
								</div>
								<div class="pe-1 mb-3 mb-xl-0">
										<button type="button" class="btn btn-outline-inverse-info btn-icon-text">
											Print
											<i class="mdi mdi-printer btn-icon-append"></i>                          
										</button>
								</div>
							</div>
						</div>
					</div>
					<div id="user-list" class="row ">
    <div class="col-12 grid-margin">
      <div class="card">
        <div class="card-body">
        <section class="ftco-section">
		<div class="container">

			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">User list</h2>
				</div>
			</div>

      <div class="row justify-content-left">
				<div class="col-md-4 text-center mb-5">
          <a class="nav-link btn btn-success create-new-button" href="/users/register">Add New User +</a>
				</div>
			</div>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Open modal for @mdo</button>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">Open modal for @fat</button>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Open modal for @getbootstrap</button>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Recipient:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div>

<script>
  $('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('whatever') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title').text('New message to ' + recipient)
  modal.find('.modal-body input').val(recipient)
})
</script>


			
        <!DOCTYPE html><!-- This site was created in Webflow. https://www.webflow.com --><!-- Last Published: Fri Jan 21 2022 15:02:47 GMT+0000 (Coordinated Universal Time) --><html data-wf-domain="bird-events.webflow.io" data-wf-page="60847233fbf8fb4a51e28c12" data-wf-site="60847233fbf8fb1ea0e28c0c" data-wf-status="1"><head><meta charset="utf-8"/><title>Business - Webflow HTML website template</title><meta content="Business - Webflow HTML website template" property="og:title"/><meta content="https://uploads-ssl.webflow.com/5c6eb5400253230156de2bd6/5cdc268dd7274d5c05c6009a_Business%20SEO.jpg" property="og:image"/><meta content="Business - Webflow HTML website template" property="twitter:title"/><meta content="https://uploads-ssl.webflow.com/5c6eb5400253230156de2bd6/5cdc268dd7274d5c05c6009a_Business%20SEO.jpg" property="twitter:image"/><meta content="width=device-width, initial-scale=1" name="viewport"/><meta content="Webflow" name="generator"/><link href="https://uploads-ssl.webflow.com/60847233fbf8fb1ea0e28c0c/css/bird-events.webflow.732bfb354.css" rel="stylesheet" type="text/css"/><link href="https://fonts.googleapis.com" rel="preconnect"/><link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous"/><script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script><script type="text/javascript">WebFont.load({  google: {    families: ["Montserrat:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic","Jost:100,200,300,regular,500,600,700,800,900","Oleo Script Swash Caps:regular"]  }});</script><script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script><link href="https://uploads-ssl.webflow.com/img/favicon.ico" rel="shortcut icon" type="image/x-icon"/><link href="https://uploads-ssl.webflow.com/img/webclip.png" rel="apple-touch-icon"/>

<style>
.icon-button {
	pointer-events: none;
}
</style></head><body class="bd-body"><div><div class="bd-nav wf-section"><div data-collapse="small" data-animation="default" data-duration="400" data-easing="ease" data-easing2="ease" role="banner" class="bd-navbar w-nav"><div class="bd-container nav w-container"><a href="/" aria-current="page" class="bd-linkblock logo-button w-nav-brand w--current"><img src="https://uploads-ssl.webflow.com/60847233fbf8fb1ea0e28c0c/6085afc1cb721f47d65eaad6_lorem-lorem-1.svg" loading="lazy" alt="" class="bd-logo"/><div class="bd-logo-text-wrap"><h1 class="bd-logo-text">Bird Events</h1><div class="text-block bd-logo-subtext">Search, filter, browse made-up events!</div></div></a><div class="bd-spacer"></div><nav role="navigation" class="nav-menu w-nav-menu"><a href="#" class="bd-linkblock navlink w-inline-block"><div>Browse Events</div></a><a href="#" class="bd-linkblock navlink w-inline-block"><div>Post an Event</div></a><a href="#" class="bd-linkblock navlink w-inline-block"><div>Join the community</div></a><a href="#" class="bd-linkblock navlink w-inline-block"><div>Login</div></a></nav><div class="bd-menu-button w-nav-button"><div class="bd-hamburger-icon w-icon-nav-menu"></div></div></div></div></div><div class="bd-section nav wf-section"></div><div class="bd-section zero wf-section"><div class="bd-container w-container"></div></div><div class="bd-section dashboard-section wf-section"><div class="bd-container w-container"><div class="bd-div bd-grid main-dahsboard"><div id="w-node-_06d70137-9fd2-c82e-c7ac-c038abdc6d15-51e28c12" class="bd-div filter-container"><div id="w-node-_23fff77e-266c-eaa3-13dd-3d76c5245cf6-51e28c12" class="bd-div"><div class="form-block-2 w-form"><form id="email-form" name="email-form" data-name="Email Form" method="get" class="bd-searchbars-container" data-wf-page-id="60847233fbf8fb4a51e28c12" data-wf-element-id="05226b72-69a7-e6d4-ce22-e87ac7314c98"><div class="bd-searchbar-wrapper filter-search-a"><img src="https://uploads-ssl.webflow.com/60847233fbf8fb1ea0e28c0c/6085bd0d8f1267033207ba11_search.svg" loading="lazy" alt="" class="bd-image search-icon"/><input type="text" class="bd-searchbar w-input" maxlength="256" name="searchbar" filter-by="*" data-name="searchbar" placeholder="Search for anything" id="searchbar" required=""/></div></form><div class="w-form-done"><div>Thank you! Your submission has been received!</div></div><div class="w-form-fail"><div>Oops! Something went wrong while submitting the form.</div></div></div><div class="form-block w-form"><form id="email-form" name="email-form" data-name="Email Form" method="get" class="bd-searchbars-container mobile" data-wf-page-id="60847233fbf8fb4a51e28c12" data-wf-element-id="ac18a758-5160-b1ae-b830-ffcfee49c168"><div class="bd-searchbar-wrapper"><img src="https://uploads-ssl.webflow.com/60847233fbf8fb1ea0e28c0c/6085bd0d8f1267033207ba11_search.svg" loading="lazy" alt="" class="bd-image search-icon"/><input type="text" class="bd-searchbar left w-input" maxlength="256" name="searchbar-3" data-name="Searchbar 3" placeholder="Search for an event" id="searchbar-3" required=""/></div></form><div class="w-form-done"><div>Thank you! Your submission has been received!</div></div><div class="w-form-fail"><div>Oops! Something went wrong while submitting the form.</div></div><div data-w-id="691a9db0-a3b5-de17-3ebd-1c95f9fabf13" class="bd-div filters-button"><img src="https://uploads-ssl.webflow.com/60847233fbf8fb1ea0e28c0c/6089924c1802fa449b185fe0_sliders.svg" loading="lazy" alt="" class="bd-image button-icon"/></div></div></div><div class="bd-div accordian-wrap"><div class="bd-div h-stack accordian-head"><h4 class="bd-heading h4">Locations</h4><img src="https://uploads-ssl.webflow.com/60847233fbf8fb1ea0e28c0c/6085b41bc315c8fa64773f80_up-arrow.svg" loading="lazy" width="14" alt="" class="chevron-icon"/></div><div class="bd-div filter-check-bb"><div class="w-dyn-list"><div role="list" class="w-dyn-items"><div role="listitem" class="w-dyn-item"><div class="bd-checkbox-field"><div class="bd-checkbox-label">India</div><div class="bd-checkbox-metacount">12</div></div></div><div role="listitem" class="w-dyn-item"><div class="bd-checkbox-field"><div class="bd-checkbox-label">San Ramone</div><div class="bd-checkbox-metacount">12</div></div></div><div role="listitem" class="w-dyn-item"><div class="bd-checkbox-field"><div class="bd-checkbox-label">Dublin</div><div class="bd-checkbox-metacount">12</div></div></div><div role="listitem" class="w-dyn-item"><div class="bd-checkbox-field"><div class="bd-checkbox-label">San Jose</div><div class="bd-checkbox-metacount">12</div></div></div><div role="listitem" class="w-dyn-item"><div class="bd-checkbox-field"><div class="bd-checkbox-label">Fremont</div><div class="bd-checkbox-metacount">12</div></div></div></div></div></div></div><a href="#" class="bd-button-secondary w-button">Clear filters</a><div class="bd-div colored-spaced cta-section"><h4 class="bd-heading h4">Stay in the loop</h4><p class="bd-paragraph light">Get notified about new events, discounts, and much more!</p><div class="w-form"><form id="email-form-2" name="email-form-2" data-name="Email Form 2" method="get" data-wf-page-id="60847233fbf8fb4a51e28c12" data-wf-element-id="145644ac-7fcd-7e0a-eeb8-733b9eaa25a6"><input type="email" class="bd-form-field colored w-input" maxlength="256" name="email" data-name="Email" placeholder="your@email.com" id="email" required=""/><input type="submit" value="Create alerts" data-wait="Please wait..." class="bd-button w-button"/></form><div class="w-form-done"><div>Thank you! Your submission has been received!</div></div><div class="w-form-fail"><div>Oops! Something went wrong while submitting the form.</div></div></div></div></div><div><div class="bd-div dashboard-listings-header"><h2 id="w-node-d8bab9cb-5235-0aee-7c2c-f107ffe1c10c-51e28c12" class="bd-heading h2 nospace">Showing<span id="numShownItems" class="text-span">4</span> events</h2><div class="sort-menu"><div sort-by="filter-search-d" class="bd-button secondary-btn clear sort-btn"><div>Date posted (first-last)</div></div><div sort-by=".filter-search-a" class="bd-button secondary-btn clear sort-btn"><div>Name</div></div><div sort-by=".filter-aa" class="bd-button secondary-btn clear sort-btn"><div>Price (small-large)</div></div><div class="bd-button secondary-btn clear sort-btn"><div>Price (large-small)</div></div></div><div><div id="layout-toggle" class="layout-toggle-wrap"><div id="grid-layout-btn" class="icon-button is-selected"><img src="https://uploads-ssl.webflow.com/60847233fbf8fb1ea0e28c0c/61798d67a345b2f40c6b400d_3869876-200.png" loading="lazy" alt="" class="small-icon"/></div><div id="list-layout-btn" class="icon-button"><img src="https://uploads-ssl.webflow.com/60847233fbf8fb1ea0e28c0c/61798d617e24c9b98652a8aa_936865-200.png" loading="lazy" alt="" class="small-icon"/></div></div></div><div class="is-hidden"><div class="bd-textblock sort-by">sort by</div><div data-w-id="d8bab9cb-5235-0aee-7c2c-f107ffe1c110" class="bd-div h-stack categories"><h4 class="bd-heading h4 sort-by">Recently Posted</h4><img src="https://uploads-ssl.webflow.com/60847233fbf8fb1ea0e28c0c/6085b41bc315c8fa64773f80_up-arrow.svg" loading="lazy" width="14" style="-webkit-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(180deg) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(180deg) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(180deg) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(180deg) skew(0, 0)" alt="" class="chevron-icon"/></div></div></div><div id="list" class="is-hidden w-dyn-list"><div role="list" class="bd-list-clist w-dyn-items"><div role="listitem" class="w-dyn-item"><div class="bd-list-item"><img src="https://uploads-ssl.webflow.com/60847233fbf8fbce43e28c2d/6085c1200819813c8ccc90ec_1619378463562-image19.jpg" loading="lazy" width="31" alt="" class="bd-image listing-category"/><div class="bd-div bd-list-item-head-content"><h3 class="bd-heading h3 filter-search-a">Aut</h3></div><div id="w-node-_52cec6a8-6d94-08f7-6146-a162d5de4126-51e28c12" class="bd-div"><div class="bd-textblock listing-tag">Music</div><div class="bd-textblock listing-tag">Min 1 year</div></div><div class="bd-textblock list-item-detail filter-aa">29886.3</div><div class="bd-textblock list-item-detail filter-search-d">3/22/2022</div><div class="bd-textblock list-item-detail filter-search-bb">Fremont</div><div class="bd-list-item-tail"><a href="/events/aut" class="bd-button secondary-btn light w-inline-block"><h4 class="bd-heading h4">Details</h4></a><a href="/events/aut" class="bd-button secondary-btn right w-inline-block"><h4 class="bd-heading h4">Buy now</h4></a></div></div></div><div role="listitem" class="w-dyn-item"><div class="bd-list-item"><img src="https://uploads-ssl.webflow.com/60847233fbf8fbce43e28c2d/6085c1200819813c8ccc90ec_1619378463562-image19.jpg" loading="lazy" width="31" alt="" class="bd-image listing-category"/><div class="bd-div bd-list-item-head-content"><h3 class="bd-heading h3 filter-search-a">Explicabo Consectetur Fugit Corrupti</h3></div><div id="w-node-_52cec6a8-6d94-08f7-6146-a162d5de4126-51e28c12" class="bd-div"><div class="bd-textblock listing-tag">Music</div><div class="bd-textblock listing-tag">Min 1 year</div></div><div class="bd-textblock list-item-detail filter-aa">55257.1</div><div class="bd-textblock list-item-detail filter-search-d">5/2/2022</div><div class="bd-textblock list-item-detail filter-search-bb">San Ramone</div><div class="bd-list-item-tail"><a href="/events/explicabo-consectetur-fugit-corrupti" class="bd-button secondary-btn light w-inline-block"><h4 class="bd-heading h4">Details</h4></a><a href="/events/explicabo-consectetur-fugit-corrupti" class="bd-button secondary-btn right w-inline-block"><h4 class="bd-heading h4">Buy now</h4></a></div></div></div><div role="listitem" class="w-dyn-item"><div class="bd-list-item"><img src="https://uploads-ssl.webflow.com/60847233fbf8fbce43e28c2d/6085c12077a9792aabf33af4_1619378463479-image10.jpg" loading="lazy" width="31" alt="" sizes="100vw" srcset="https://uploads-ssl.webflow.com/60847233fbf8fbce43e28c2d/6085c12077a9792aabf33af4_1619378463479-image10-p-1080.jpeg 1080w, https://uploads-ssl.webflow.com/60847233fbf8fbce43e28c2d/6085c12077a9792aabf33af4_1619378463479-image10.jpg 1300w" class="bd-image listing-category"/><div class="bd-div bd-list-item-head-content"><h3 class="bd-heading h3 filter-search-a">Enim</h3></div><div id="w-node-_52cec6a8-6d94-08f7-6146-a162d5de4126-51e28c12" class="bd-div"><div class="bd-textblock listing-tag">Music</div><div class="bd-textblock listing-tag">Min 1 year</div></div><div class="bd-textblock list-item-detail filter-aa">67453.1</div><div class="bd-textblock list-item-detail filter-search-d">10/29/2020</div><div class="bd-textblock list-item-detail filter-search-bb">India</div><div class="bd-list-item-tail"><a href="/events/enim" class="bd-button secondary-btn light w-inline-block"><h4 class="bd-heading h4">Details</h4></a><a href="/events/enim" class="bd-button secondary-btn right w-inline-block"><h4 class="bd-heading h4">Buy now</h4></a></div></div></div><div role="listitem" class="w-dyn-item"><div class="bd-list-item"><img src="https://uploads-ssl.webflow.com/60847233fbf8fbce43e28c2d/6085c1200819813c8ccc90ec_1619378463562-image19.jpg" loading="lazy" width="31" alt="" class="bd-image listing-category"/><div class="bd-div bd-list-item-head-content"><h3 class="bd-heading h3 filter-search-a">Ut Aliquid Nobis Et</h3></div><div id="w-node-_52cec6a8-6d94-08f7-6146-a162d5de4126-51e28c12" class="bd-div"><div class="bd-textblock listing-tag">Music</div><div class="bd-textblock listing-tag">Min 1 year</div></div><div class="bd-textblock list-item-detail filter-aa">99012.5</div><div class="bd-textblock list-item-detail filter-search-d">2/15/2021</div><div class="bd-textblock list-item-detail filter-search-bb">San Jose</div><div class="bd-list-item-tail"><a href="/events/ut-aliquid-nobis-et" class="bd-button secondary-btn light w-inline-block"><h4 class="bd-heading h4">Details</h4></a><a href="/events/ut-aliquid-nobis-et" class="bd-button secondary-btn right w-inline-block"><h4 class="bd-heading h4">Buy now</h4></a></div></div></div><div role="listitem" class="w-dyn-item"><div class="bd-list-item"><img src="https://uploads-ssl.webflow.com/60847233fbf8fbce43e28c2d/6085c12077a9792aabf33af4_1619378463479-image10.jpg" loading="lazy" width="31" alt="" sizes="100vw" srcset="https://uploads-ssl.webflow.com/60847233fbf8fbce43e28c2d/6085c12077a9792aabf33af4_1619378463479-image10-p-1080.jpeg 1080w, https://uploads-ssl.webflow.com/60847233fbf8fbce43e28c2d/6085c12077a9792aabf33af4_1619378463479-image10.jpg 1300w" class="bd-image listing-category"/><div class="bd-div bd-list-item-head-content"><h3 class="bd-heading h3 filter-search-a">Qui Maiores Sit Sed</h3></div><div id="w-node-_52cec6a8-6d94-08f7-6146-a162d5de4126-51e28c12" class="bd-div"><div class="bd-textblock listing-tag">Music</div><div class="bd-textblock listing-tag">Min 1 year</div></div><div class="bd-textblock list-item-detail filter-aa">96204.8</div><div class="bd-textblock list-item-detail filter-search-d">3/5/2022</div><div class="bd-textblock list-item-detail filter-search-bb">Dublin</div><div class="bd-list-item-tail"><a href="/events/qui-maiores-sit-sed" class="bd-button secondary-btn light w-inline-block"><h4 class="bd-heading h4">Details</h4></a><a href="/events/qui-maiores-sit-sed" class="bd-button secondary-btn right w-inline-block"><h4 class="bd-heading h4">Buy now</h4></a></div></div></div><div role="listitem" class="w-dyn-item"><div class="bd-list-item"><img src="https://uploads-ssl.webflow.com/60847233fbf8fbce43e28c2d/60847233fbf8fb717be28c23_1550760514150-image17.jpg" loading="lazy" width="31" alt="" sizes="100vw" srcset="https://uploads-ssl.webflow.com/60847233fbf8fbce43e28c2d/60847233fbf8fb717be28c23_1550760514150-image17-p-1080.jpeg 1080w, https://uploads-ssl.webflow.com/60847233fbf8fbce43e28c2d/60847233fbf8fb717be28c23_1550760514150-image17.jpg 1300w" class="bd-image listing-category"/><div class="bd-div bd-list-item-head-content"><h3 class="bd-heading h3 filter-search-a">Voluptatem</h3></div><div id="w-node-_52cec6a8-6d94-08f7-6146-a162d5de4126-51e28c12" class="bd-div"><div class="bd-textblock listing-tag">Music</div><div class="bd-textblock listing-tag">Min 1 year</div></div><div class="bd-textblock list-item-detail filter-aa">23795.2</div><div class="bd-textblock list-item-detail filter-search-d">2/18/2022</div><div class="bd-textblock list-item-detail filter-search-bb">Dublin</div><div class="bd-list-item-tail"><a href="/events/voluptatem" class="bd-button secondary-btn light w-inline-block"><h4 class="bd-heading h4">Details</h4></a><a href="/events/voluptatem" class="bd-button secondary-btn right w-inline-block"><h4 class="bd-heading h4">Buy now</h4></a></div></div></div><div role="listitem" class="w-dyn-item"><div class="bd-list-item"><img src="https://uploads-ssl.webflow.com/60847233fbf8fbce43e28c2d/60847233fbf8fb717be28c23_1550760514150-image17.jpg" loading="lazy" width="31" alt="" sizes="100vw" srcset="https://uploads-ssl.webflow.com/60847233fbf8fbce43e28c2d/60847233fbf8fb717be28c23_1550760514150-image17-p-1080.jpeg 1080w, https://uploads-ssl.webflow.com/60847233fbf8fbce43e28c2d/60847233fbf8fb717be28c23_1550760514150-image17.jpg 1300w" class="bd-image listing-category"/><div class="bd-div bd-list-item-head-content"><h3 class="bd-heading h3 filter-search-a">Et Nostrum</h3></div><div id="w-node-_52cec6a8-6d94-08f7-6146-a162d5de4126-51e28c12" class="bd-div"><div class="bd-textblock listing-tag">Music</div><div class="bd-textblock listing-tag">Min 1 year</div></div><div class="bd-textblock list-item-detail filter-aa">12037.7</div><div class="bd-textblock list-item-detail filter-search-d">4/29/2022</div><div class="bd-textblock list-item-detail filter-search-bb">San Jose</div><div class="bd-list-item-tail"><a href="/events/et-nostrum" class="bd-button secondary-btn light w-inline-block"><h4 class="bd-heading h4">Details</h4></a><a href="/events/et-nostrum" class="bd-button secondary-btn right w-inline-block"><h4 class="bd-heading h4">Buy now</h4></a></div></div></div><div role="listitem" class="w-dyn-item"><div class="bd-list-item"><img src="https://uploads-ssl.webflow.com/60847233fbf8fbce43e28c2d/6085c2bddad40d3cf65135aa_1619378875456-image13.jpg" loading="lazy" width="31" alt="" sizes="100vw" srcset="https://uploads-ssl.webflow.com/60847233fbf8fbce43e28c2d/6085c2bddad40d3cf65135aa_1619378875456-image13-p-1080.jpeg 1080w, https://uploads-ssl.webflow.com/60847233fbf8fbce43e28c2d/6085c2bddad40d3cf65135aa_1619378875456-image13.jpg 1300w" class="bd-image listing-category"/><div class="bd-div bd-list-item-head-content"><h3 class="bd-heading h3 filter-search-a">Et</h3></div><div id="w-node-_52cec6a8-6d94-08f7-6146-a162d5de4126-51e28c12" class="bd-div"><div class="bd-textblock listing-tag">Music</div><div class="bd-textblock listing-tag">Min 1 year</div></div><div class="bd-textblock list-item-detail filter-aa">82537.7</div><div class="bd-textblock list-item-detail filter-search-d">11/10/2020</div><div class="bd-textblock list-item-detail filter-search-bb">Fremont</div><div class="bd-list-item-tail"><a href="/events/et" class="bd-button secondary-btn light w-inline-block"><h4 class="bd-heading h4">Details</h4></a><a href="/events/et" class="bd-button secondary-btn right w-inline-block"><h4 class="bd-heading h4">Buy now</h4></a></div></div></div><div role="listitem" class="w-dyn-item"><div class="bd-list-item"><img src="https://uploads-ssl.webflow.com/60847233fbf8fbce43e28c2d/6085c12077a9792aabf33af4_1619378463479-image10.jpg" loading="lazy" width="31" alt="" sizes="100vw" srcset="https://uploads-ssl.webflow.com/60847233fbf8fbce43e28c2d/6085c12077a9792aabf33af4_1619378463479-image10-p-1080.jpeg 1080w, https://uploads-ssl.webflow.com/60847233fbf8fbce43e28c2d/6085c12077a9792aabf33af4_1619378463479-image10.jpg 1300w" class="bd-image listing-category"/><div class="bd-div bd-list-item-head-content"><h3 class="bd-heading h3 filter-search-a">Cum Excepturi Sed</h3></div><div id="w-node-_52cec6a8-6d94-08f7-6146-a162d5de4126-51e28c12" class="bd-div"><div class="bd-textblock listing-tag">Music</div><div class="bd-textblock listing-tag">Min 1 year</div></div><div class="bd-textblock list-item-detail filter-aa">88574.0</div><div class="bd-textblock list-item-detail filter-search-d">10/26/2020</div><div class="bd-textblock list-item-detail filter-search-bb">Dublin</div><div class="bd-list-item-tail"><a href="/events/cum-excepturi-sed" class="bd-button secondary-btn light w-inline-block"><h4 class="bd-heading h4">Details</h4></a><a href="/events/cum-excepturi-sed" class="bd-button secondary-btn right w-inline-block"><h4 class="bd-heading h4">Buy now</h4></a></div></div></div><div role="listitem" class="w-dyn-item"><div class="bd-list-item"><img src="https://uploads-ssl.webflow.com/60847233fbf8fbce43e28c2d/60847233fbf8fb717be28c23_1550760514150-image17.jpg" loading="lazy" width="31" alt="" sizes="100vw" srcset="https://uploads-ssl.webflow.com/60847233fbf8fbce43e28c2d/60847233fbf8fb717be28c23_1550760514150-image17-p-1080.jpeg 1080w, https://uploads-ssl.webflow.com/60847233fbf8fbce43e28c2d/60847233fbf8fb717be28c23_1550760514150-image17.jpg 1300w" class="bd-image listing-category"/><div class="bd-div bd-list-item-head-content"><h3 class="bd-heading h3 filter-search-a">Cum</h3></div><div id="w-node-_52cec6a8-6d94-08f7-6146-a162d5de4126-51e28c12" class="bd-div"><div class="bd-textblock listing-tag">Music</div><div class="bd-textblock listing-tag">Min 1 year</div></div><div class="bd-textblock list-item-detail filter-aa">88755.0</div><div class="bd-textblock list-item-detail filter-search-d">6/1/2021</div><div class="bd-textblock list-item-detail filter-search-bb">San Ramone</div><div class="bd-list-item-tail"><a href="/events/cum" class="bd-button secondary-btn light w-inline-block"><h4 class="bd-heading h4">Details</h4></a><a href="/events/cum" class="bd-button secondary-btn right w-inline-block"><h4 class="bd-heading h4">Buy now</h4></a></div></div></div><div role="listitem" class="w-dyn-item"><div class="bd-list-item"><img src="https://uploads-ssl.webflow.com/60847233fbf8fbce43e28c2d/6085c1200819813c8ccc90ec_1619378463562-image19.jpg" loading="lazy" width="31" alt="" class="bd-image listing-category"/><div class="bd-div bd-list-item-head-content"><h3 class="bd-heading h3 filter-search-a">Dolore</h3></div><div id="w-node-_52cec6a8-6d94-08f7-6146-a162d5de4126-51e28c12" class="bd-div"><div class="bd-textblock listing-tag">Music</div><div class="bd-textblock listing-tag">Min 1 year</div></div><div class="bd-textblock list-item-detail filter-aa">31280.8</div><div class="bd-textblock list-item-detail filter-search-d">7/18/2022</div><div class="bd-textblock list-item-detail filter-search-bb">Fremont</div><div class="bd-list-item-tail"><a href="/events/dolore" class="bd-button secondary-btn light w-inline-block"><h4 class="bd-heading h4">Details</h4></a><a href="/events/dolore" class="bd-button secondary-btn right w-inline-block"><h4 class="bd-heading h4">Buy now</h4></a></div></div></div><div role="listitem" class="w-dyn-item"><div class="bd-list-item"><img src="https://uploads-ssl.webflow.com/60847233fbf8fbce43e28c2d/6085c12077a9792aabf33af4_1619378463479-image10.jpg" loading="lazy" width="31" alt="" sizes="100vw" srcset="https://uploads-ssl.webflow.com/60847233fbf8fbce43e28c2d/6085c12077a9792aabf33af4_1619378463479-image10-p-1080.jpeg 1080w, https://uploads-ssl.webflow.com/60847233fbf8fbce43e28c2d/6085c12077a9792aabf33af4_1619378463479-image10.jpg 1300w" class="bd-image listing-category"/><div class="bd-div bd-list-item-head-content"><h3 class="bd-heading h3 filter-search-a">Autem</h3></div><div id="w-node-_52cec6a8-6d94-08f7-6146-a162d5de4126-51e28c12" class="bd-div"><div class="bd-textblock listing-tag">Music</div><div class="bd-textblock listing-tag">Min 1 year</div></div><div class="bd-textblock list-item-detail filter-aa">48112.9</div><div class="bd-textblock list-item-detail filter-search-d">8/24/2021</div><div class="bd-textblock list-item-detail filter-search-bb">Fremont</div><div class="bd-list-item-tail"><a href="/events/autem" class="bd-button secondary-btn light w-inline-block"><h4 class="bd-heading h4">Details</h4></a><a href="/events/autem" class="bd-button secondary-btn right w-inline-block"><h4 class="bd-heading h4">Buy now</h4></a></div></div></div><div role="listitem" class="w-dyn-item"><div class="bd-list-item"><img src="https://uploads-ssl.webflow.com/60847233fbf8fbce43e28c2d/60847233fbf8fb717be28c23_1550760514150-image17.jpg" loading="lazy" width="31" alt="" sizes="100vw" srcset="https://uploads-ssl.webflow.com/60847233fbf8fbce43e28c2d/60847233fbf8fb717be28c23_1550760514150-image17-p-1080.jpeg 1080w, https://uploads-ssl.webflow.com/60847233fbf8fbce43e28c2d/60847233fbf8fb717be28c23_1550760514150-image17.jpg 1300w" class="bd-image listing-category"/><div class="bd-div bd-list-item-head-content"><h3 class="bd-heading h3 filter-search-a">Iste</h3></div><div id="w-node-_52cec6a8-6d94-08f7-6146-a162d5de4126-51e28c12" class="bd-div"><div class="bd-textblock listing-tag">Music</div><div class="bd-textblock listing-tag">Min 1 year</div></div><div class="bd-textblock list-item-detail filter-aa">98769.6</div><div class="bd-textblock list-item-detail filter-search-d">10/17/2021</div><div class="bd-textblock list-item-detail filter-search-bb">Dublin</div><div class="bd-list-item-tail"><a href="/events/iste" class="bd-button secondary-btn light w-inline-block"><h4 class="bd-heading h4">Details</h4></a><a href="/events/iste" class="bd-button secondary-btn right w-inline-block"><h4 class="bd-heading h4">Buy now</h4></a></div></div></div><div role="listitem" class="w-dyn-item"><div class="bd-list-item"><img src="https://uploads-ssl.webflow.com/60847233fbf8fbce43e28c2d/6085c2bddad40d3cf65135aa_1619378875456-image13.jpg" loading="lazy" width="31" alt="" sizes="100vw" srcset="https://uploads-ssl.webflow.com/60847233fbf8fbce43e28c2d/6085c2bddad40d3cf65135aa_1619378875456-image13-p-1080.jpeg 1080w, https://uploads-ssl.webflow.com/60847233fbf8fbce43e28c2d/6085c2bddad40d3cf65135aa_1619378875456-image13.jpg 1300w" class="bd-image listing-category"/><div class="bd-div bd-list-item-head-content"><h3 class="bd-heading h3 filter-search-a">Pariatur Nemo Distinctio Optio</h3></div><div id="w-node-_52cec6a8-6d94-08f7-6146-a162d5de4126-51e28c12" class="bd-div"><div class="bd-textblock listing-tag">Music</div><div class="bd-textblock listing-tag">Min 1 year</div></div><div class="bd-textblock list-item-detail filter-aa">69942.1</div><div class="bd-textblock list-item-detail filter-search-d">1/9/2022</div><div class="bd-textblock list-item-detail filter-search-bb">Fremont</div><div class="bd-list-item-tail"><a href="/events/pariatur-nemo-distinctio-optio" class="bd-button secondary-btn light w-inline-block"><h4 class="bd-heading h4">Details</h4></a><a href="/events/pariatur-nemo-distinctio-optio" class="bd-button secondary-btn right w-inline-block"><h4 class="bd-heading h4">Buy now</h4></a></div></div></div><div role="listitem" class="w-dyn-item"><div class="bd-list-item"><img src="https://uploads-ssl.webflow.com/60847233fbf8fbce43e28c2d/6085c2bddad40d3cf65135aa_1619378875456-image13.jpg" loading="lazy" width="31" alt="" sizes="100vw" srcset="https://uploads-ssl.webflow.com/60847233fbf8fbce43e28c2d/6085c2bddad40d3cf65135aa_1619378875456-image13-p-1080.jpeg 1080w, https://uploads-ssl.webflow.com/60847233fbf8fbce43e28c2d/6085c2bddad40d3cf65135aa_1619378875456-image13.jpg 1300w" class="bd-image listing-category"/><div class="bd-div bd-list-item-head-content"><h3 class="bd-heading h3 filter-search-a">Sed Expedita Odio</h3></div><div id="w-node-_52cec6a8-6d94-08f7-6146-a162d5de4126-51e28c12" class="bd-div"><div class="bd-textblock listing-tag">Music</div><div class="bd-textblock listing-tag">Min 1 year</div></div><div class="bd-textblock list-item-detail filter-aa">99600.8</div><div class="bd-textblock list-item-detail filter-search-d">7/5/2022</div><div class="bd-textblock list-item-detail filter-search-bb">Dublin</div><div class="bd-list-item-tail"><a href="/events/sed-expedita-odio" class="bd-button secondary-btn light w-inline-block"><h4 class="bd-heading h4">Details</h4></a><a href="/events/sed-expedita-odio" class="bd-button secondary-btn right w-inline-block"><h4 class="bd-heading h4">Buy now</h4></a></div></div></div><div role="listitem" class="w-dyn-item"><div class="bd-list-item"><img src="https://uploads-ssl.webflow.com/60847233fbf8fbce43e28c2d/6085c1200819813c8ccc90ec_1619378463562-image19.jpg" loading="lazy" width="31" alt="" class="bd-image listing-category"/><div class="bd-div bd-list-item-head-content"><h3 class="bd-heading h3 filter-search-a">Culpa</h3></div><div id="w-node-_52cec6a8-6d94-08f7-6146-a162d5de4126-51e28c12" class="bd-div"><div class="bd-textblock listing-tag">Music</div><div class="bd-textblock listing-tag">Min 1 year</div></div><div class="bd-textblock list-item-detail filter-aa">9134.8</div><div class="bd-textblock list-item-detail filter-search-d">3/27/2021</div><div class="bd-textblock list-item-detail filter-search-bb">San Ramone</div><div class="bd-list-item-tail"><a href="/events/culpa" class="bd-button secondary-btn light w-inline-block"><h4 class="bd-heading h4">Details</h4></a><a href="/events/culpa" class="bd-button secondary-btn right w-inline-block"><h4 class="bd-heading h4">Buy now</h4></a></div></div></div><div role="listitem" class="w-dyn-item"><div class="bd-list-item"><img src="https://uploads-ssl.webflow.com/60847233fbf8fbce43e28c2d/60847233fbf8fb717be28c23_1550760514150-image17.jpg" loading="lazy" width="31" alt="" sizes="100vw" srcset="https://uploads-ssl.webflow.com/60847233fbf8fbce43e28c2d/60847233fbf8fb717be28c23_1550760514150-image17-p-1080.jpeg 1080w, https://uploads-ssl.webflow.com/60847233fbf8fbce43e28c2d/60847233fbf8fb717be28c23_1550760514150-image17.jpg 1300w" class="bd-image listing-category"/><div class="bd-div bd-list-item-head-content"><h3 class="bd-heading h3 filter-search-a">Dignissimos Doloribus Sed</h3></div><div id="w-node-_52cec6a8-6d94-08f7-6146-a162d5de4126-51e28c12" class="bd-div"><div class="bd-textblock listing-tag">Music</div><div class="bd-textblock listing-tag">Min 1 year</div></div><div class="bd-textblock list-item-detail filter-aa">34189.9</div><div class="bd-textblock list-item-detail filter-search-d">5/7/2022</div><div class="bd-textblock list-item-detail filter-search-bb">Fremont</div><div class="bd-list-item-tail"><a href="/events/dignissimos-doloribus-sed" class="bd-button secondary-btn light w-inline-block"><h4 class="bd-heading h4">Details</h4></a><a href="/events/dignissimos-doloribus-sed" class="bd-button secondary-btn right w-inline-block"><h4 class="bd-heading h4">Buy now</h4></a></div></div></div><div role="listitem" class="w-dyn-item"><div class="bd-list-item"><img src="https://uploads-ssl.webflow.com/60847233fbf8fbce43e28c2d/6085c12077a9792aabf33af4_1619378463479-image10.jpg" loading="lazy" width="31" alt="" sizes="100vw" srcset="https://uploads-ssl.webflow.com/60847233fbf8fbce43e28c2d/6085c12077a9792aabf33af4_1619378463479-image10-p-1080.jpeg 1080w, https://uploads-ssl.webflow.com/60847233fbf8fbce43e28c2d/6085c12077a9792aabf33af4_1619378463479-image10.jpg 1300w" class="bd-image listing-category"/><div class="bd-div bd-list-item-head-content"><h3 class="bd-heading h3 filter-search-a">Perspiciatis Dolore</h3></div><div id="w-node-_52cec6a8-6d94-08f7-6146-a162d5de4126-51e28c12" class="bd-div"><div class="bd-textblock listing-tag">Music</div><div class="bd-textblock listing-tag">Min 1 year</div></div><div class="bd-textblock list-item-detail filter-aa">43691.8</div><div class="bd-textblock list-item-detail filter-search-d">12/31/2020</div><div class="bd-textblock list-item-detail filter-search-bb">Fremont</div><div class="bd-list-item-tail"><a href="/events/perspiciatis-dolore" class="bd-button secondary-btn light w-inline-block"><h4 class="bd-heading h4">Details</h4></a><a href="/events/perspiciatis-dolore" class="bd-button secondary-btn right w-inline-block"><h4 class="bd-heading h4">Buy now</h4></a></div></div></div><div role="listitem" class="w-dyn-item"><div class="bd-list-item"><img src="https://uploads-ssl.webflow.com/60847233fbf8fbce43e28c2d/6085c2bddad40d3cf65135aa_1619378875456-image13.jpg" loading="lazy" width="31" alt="" sizes="100vw" srcset="https://uploads-ssl.webflow.com/60847233fbf8fbce43e28c2d/6085c2bddad40d3cf65135aa_1619378875456-image13-p-1080.jpeg 1080w, https://uploads-ssl.webflow.com/60847233fbf8fbce43e28c2d/6085c2bddad40d3cf65135aa_1619378875456-image13.jpg 1300w" class="bd-image listing-category"/><div class="bd-div bd-list-item-head-content"><h3 class="bd-heading h3 filter-search-a">Animi Veritatis Et</h3></div><div id="w-node-_52cec6a8-6d94-08f7-6146-a162d5de4126-51e28c12" class="bd-div"><div class="bd-textblock listing-tag">Music</div><div class="bd-textblock listing-tag">Min 1 year</div></div><div class="bd-textblock list-item-detail filter-aa">23035.3</div><div class="bd-textblock list-item-detail filter-search-d">8/29/2022</div><div class="bd-textblock list-item-detail filter-search-bb">Dublin</div><div class="bd-list-item-tail"><a href="/events/animi-veritatis-et" class="bd-button secondary-btn light w-inline-block"><h4 class="bd-heading h4">Details</h4></a><a href="/events/animi-veritatis-et" class="bd-button secondary-btn right w-inline-block"><h4 class="bd-heading h4">Buy now</h4></a></div></div></div><div role="listitem" class="w-dyn-item"><div class="bd-list-item"><img src="https://uploads-ssl.webflow.com/60847233fbf8fbce43e28c2d/6085c2bddad40d3cf65135aa_1619378875456-image13.jpg" loading="lazy" width="31" alt="" sizes="100vw" srcset="https://uploads-ssl.webflow.com/60847233fbf8fbce43e28c2d/6085c2bddad40d3cf65135aa_1619378875456-image13-p-1080.jpeg 1080w, https://uploads-ssl.webflow.com/60847233fbf8fbce43e28c2d/6085c2bddad40d3cf65135aa_1619378875456-image13.jpg 1300w" class="bd-image listing-category"/><div class="bd-div bd-list-item-head-content"><h3 class="bd-heading h3 filter-search-a">Vero</h3></div><div id="w-node-_52cec6a8-6d94-08f7-6146-a162d5de4126-51e28c12" class="bd-div"><div class="bd-textblock listing-tag">Music</div><div class="bd-textblock listing-tag">Min 1 year</div></div><div class="bd-textblock list-item-detail filter-aa">2060.9</div><div class="bd-textblock list-item-detail filter-search-d">3/13/2022</div><div class="bd-textblock list-item-detail filter-search-bb">Dublin</div><div class="bd-list-item-tail"><a href="/events/vero" class="bd-button secondary-btn light w-inline-block"><h4 class="bd-heading h4">Details</h4></a><a href="/events/vero" class="bd-button secondary-btn right w-inline-block"><h4 class="bd-heading h4">Buy now</h4></a></div></div></div></div></div><div id="grid" class="w-dyn-list"><div role="list" class="bd-div bd-grid dahsboard-listings filter-list w-dyn-items"><div role="listitem" class="bd-listing-item-wrap w-dyn-item"><article class="bd-listing-item"><img src="https://uploads-ssl.webflow.com/60847233fbf8fbce43e28c2d/60847233fbf8fb7451e28c24_1550760514147-image6.jpg" loading="lazy" alt="" sizes="(max-width: 767px) 92vw, (max-width: 991px) 46vw, 26vw" srcset="https://uploads-ssl.webflow.com/60847233fbf8fbce43e28c2d/60847233fbf8fb7451e28c24_1550760514147-image6-p-500.jpeg 500w, https://uploads-ssl.webflow.com/60847233fbf8fbce43e28c2d/60847233fbf8fb7451e28c24_1550760514147-image6-p-800.jpeg 800w, https://uploads-ssl.webflow.com/60847233fbf8fbce43e28c2d/60847233fbf8fb7451e28c24_1550760514147-image6-p-1080.jpeg 1080w, https://uploads-ssl.webflow.com/60847233fbf8fbce43e28c2d/60847233fbf8fb7451e28c24_1550760514147-image6.jpg 1300w" class="bd-image listing"/><div class="bd-div image-overlay"><img src="https://uploads-ssl.webflow.com/60847233fbf8fb1ea0e28c0c/6085b0a8d656c851bee02c93_music-note.svg" loading="lazy" width="31" alt="" class="bd-image listing-category"/></div><div class="bd-div listing-textcontainer"><h3 class="bd-heading h3 filter-search-a">Aut</h3><p class="bd-paragraph light">Magni et laudantium cum. Ut tempora recusandae repellat reiciend</p><div class="bd-spacer"></div><div class="bd-div h-stack spacebottom"><div class="bd-textblock listing-tag">Music</div><div class="bd-textblock listing-tag">Min 1 year</div></div><div class="bd-div h-stack"><div class="bd-textblock listing detail">$</div><div class="bd-textblock listing filter-aa">29886.3</div><div class="bd-textblock listing filter-search-d">3/22/2022</div><div class="bd-textblock filter-bb">Fremont</div></div></div><div class="bd-div h-stack"><a href="/events/aut" class="bd-button secondary-btn light w-inline-block"><h4 class="bd-heading h4">Details</h4></a><a href="/events/aut" class="bd-button secondary-btn right w-inline-block"><h4 class="bd-heading h4">Buy now</h4></a></div><div class="bd-div listing-more-button"><img src="https://uploads-ssl.webflow.com/60847233fbf8fb1ea0e28c0c/6085b167431161e231b5e453_more.svg" loading="lazy" width="20" alt=""/></div></article></div><div role="listitem" class="bd-listing-item-wrap w-dyn-item"><article class="bd-listing-item"><img src="https://uploads-ssl.webflow.com/60847233fbf8fbce43e28c2d/6085c12127241e1320422564_1619378463555-image18.jpg" loading="lazy" alt="" class="bd-image listing"/><div class="bd-div image-overlay"><img src="https://uploads-ssl.webflow.com/60847233fbf8fb1ea0e28c0c/6085b0a8d656c851bee02c93_music-note.svg" loading="lazy" width="31" alt="" class="bd-image listing-category"/></div><div class="bd-div listing-textcontainer"><h3 class="bd-heading h3 filter-search-a">Explicabo Consectetur Fugit Corrupti</h3><p class="bd-paragraph light">Ut occaecati amet. Qui perspiciatis assumenda non est rem nesciunt atque s</p><div class="bd-spacer"></div><div class="bd-div h-stack spacebottom"><div class="bd-textblock listing-tag">Music</div><div class="bd-textblock listing-tag">Min 1 year</div></div><div class="bd-div h-stack"><div class="bd-textblock listing detail">$</div><div class="bd-textblock listing filter-aa">55257.1</div><div class="bd-textblock listing filter-search-d">5/2/2022</div><div class="bd-textblock filter-bb">San Ramone</div></div></div><div class="bd-div h-stack"><a href="/events/explicabo-consectetur-fugit-corrupti" class="bd-button secondary-btn light w-inline-block"><h4 class="bd-heading h4">Details</h4></a><a href="/events/explicabo-consectetur-fugit-corrupti" class="bd-button secondary-btn right w-inline-block"><h4 class="bd-heading h4">Buy now</h4></a></div><div class="bd-div listing-more-button"><img src="https://uploads-ssl.webflow.com/60847233fbf8fb1ea0e28c0c/6085b167431161e231b5e453_more.svg" loading="lazy" width="20" alt=""/></div></article></div><div role="listitem" class="bd-listing-item-wrap w-dyn-item"><article class="bd-listing-item"><img src="https://uploads-ssl.webflow.com/60847233fbf8fbce43e28c2d/61608a39ed1c63fcf4914b64_1633716792191-image7.jpg" loading="lazy" alt="" sizes="(max-width: 767px) 92vw, (max-width: 991px) 46vw, 26vw" srcset="https://uploads-ssl.webflow.com/60847233fbf8fbce43e28c2d/61608a39ed1c63fcf4914b64_1633716792191-image7-p-1080.jpeg 1080w, https://uploads-ssl.webflow.com/60847233fbf8fbce43e28c2d/61608a39ed1c63fcf4914b64_1633716792191-image7.jpg 1300w" class="bd-image listing"/><div class="bd-div image-overlay"><img src="https://uploads-ssl.webflow.com/60847233fbf8fb1ea0e28c0c/6085b0a8d656c851bee02c93_music-note.svg" loading="lazy" width="31" alt="" class="bd-image listing-category"/></div><div class="bd-div listing-textcontainer"><h3 class="bd-heading h3 filter-search-a">Enim</h3><p class="bd-paragraph light">Sed illo libero eius ut voluptate. Inventore qui sint. Et et sed nemo et </p><div class="bd-spacer"></div><div class="bd-div h-stack spacebottom"><div class="bd-textblock listing-tag">Music</div><div class="bd-textblock listing-tag">Min 1 year</div></div><div class="bd-div h-stack"><div class="bd-textblock listing detail">$</div><div class="bd-textblock listing filter-aa">67453.1</div><div class="bd-textblock listing filter-search-d">10/29/2020</div><div class="bd-textblock filter-bb">India</div></div></div><div class="bd-div h-stack"><a href="/events/enim" class="bd-button secondary-btn light w-inline-block"><h4 class="bd-heading h4">Details</h4></a><a href="/events/enim" class="bd-button secondary-btn right w-inline-block"><h4 class="bd-heading h4">Buy now</h4></a></div><div class="bd-div listing-more-button"><img src="https://uploads-ssl.webflow.com/60847233fbf8fb1ea0e28c0c/6085b167431161e231b5e453_more.svg" loading="lazy" width="20" alt=""/></div></article></div><div role="listitem" class="bd-listing-item-wrap w-dyn-item"><article class="bd-listing-item"><img src="https://uploads-ssl.webflow.com/60847233fbf8fbce43e28c2d/61608a397cfdbe7fc14523eb_1633716792107-image5.jpg" loading="lazy" alt="" class="bd-image listing"/><div class="bd-div image-overlay"><img src="https://uploads-ssl.webflow.com/60847233fbf8fb1ea0e28c0c/6085b0a8d656c851bee02c93_music-note.svg" loading="lazy" width="31" alt="" class="bd-image listing-category"/></div><div class="bd-div listing-textcontainer"><h3 class="bd-heading h3 filter-search-a">Ut Aliquid Nobis Et</h3><p class="bd-paragraph light">Eaque hic dolore esse vel ipsa omnis vel minima. Ab sunt ipsum. Aut dolor comm</p><div class="bd-spacer"></div><div class="bd-div h-stack spacebottom"><div class="bd-textblock listing-tag">Music</div><div class="bd-textblock listing-tag">Min 1 year</div></div><div class="bd-div h-stack"><div class="bd-textblock listing detail">$</div><div class="bd-textblock listing filter-aa">99012.5</div><div class="bd-textblock listing filter-search-d">2/15/2021</div><div class="bd-textblock filter-bb">San Jose</div></div></div><div class="bd-div h-stack"><a href="/events/ut-aliquid-nobis-et" class="bd-button secondary-btn light w-inline-block"><h4 class="bd-heading h4">Details</h4></a><a href="/events/ut-aliquid-nobis-et" class="bd-button secondary-btn right w-inline-block"><h4 class="bd-heading h4">Buy now</h4></a></div><div class="bd-div listing-more-button"><img src="https://uploads-ssl.webflow.com/60847233fbf8fb1ea0e28c0c/6085b167431161e231b5e453_more.svg" loading="lazy" width="20" alt=""/></div></article></div><div role="listitem" class="bd-listing-item-wrap w-dyn-item"><article class="bd-listing-item"><img src="https://uploads-ssl.webflow.com/60847233fbf8fbce43e28c2d/61608a390573600ce712d639_1633716792126-image15.jpg" loading="lazy" alt="" class="bd-image listing"/><div class="bd-div image-overlay"><img src="https://uploads-ssl.webflow.com/60847233fbf8fb1ea0e28c0c/6085b0a8d656c851bee02c93_music-note.svg" loading="lazy" width="31" alt="" class="bd-image listing-category"/></div><div class="bd-div listing-textcontainer"><h3 class="bd-heading h3 filter-search-a">Qui Maiores Sit Sed</h3><p class="bd-paragraph light">Perferendis alias</p><div class="bd-spacer"></div><div class="bd-div h-stack spacebottom"><div class="bd-textblock listing-tag">Music</div><div class="bd-textblock listing-tag">Min 1 year</div></div><div class="bd-div h-stack"><div class="bd-textblock listing detail">$</div><div class="bd-textblock listing filter-aa">96204.8</div><div class="bd-textblock listing filter-search-d">3/5/2022</div><div class="bd-textblock filter-bb">Dublin</div></div></div><div class="bd-div h-stack"><a href="/events/qui-maiores-sit-sed" class="bd-button secondary-btn light w-inline-block"><h4 class="bd-heading h4">Details</h4></a><a href="/events/qui-maiores-sit-sed" class="bd-button secondary-btn right w-inline-block"><h4 class="bd-heading h4">Buy now</h4></a></div><div class="bd-div listing-more-button"><img src="https://uploads-ssl.webflow.com/60847233fbf8fb1ea0e28c0c/6085b167431161e231b5e453_more.svg" loading="lazy" width="20" alt=""/></div></article></div><div role="listitem" class="bd-listing-item-wrap w-dyn-item"><article class="bd-listing-item"><img src="https://uploads-ssl.webflow.com/60847233fbf8fbce43e28c2d/61608a38ed1c637daf914b63_1633716791875-image1.jpg" loading="lazy" alt="" sizes="(max-width: 767px) 92vw, (max-width: 991px) 46vw, 26vw" srcset="https://uploads-ssl.webflow.com/60847233fbf8fbce43e28c2d/61608a38ed1c637daf914b63_1633716791875-image1-p-500.jpeg 500w, https://uploads-ssl.webflow.com/60847233fbf8fbce43e28c2d/61608a38ed1c637daf914b63_1633716791875-image1-p-1080.jpeg 1080w, https://uploads-ssl.webflow.com/60847233fbf8fbce43e28c2d/61608a38ed1c637daf914b63_1633716791875-image1.jpg 1300w" class="bd-image listing"/><div class="bd-div image-overlay"><img src="https://uploads-ssl.webflow.com/60847233fbf8fb1ea0e28c0c/6085b0a8d656c851bee02c93_music-note.svg" loading="lazy" width="31" alt="" class="bd-image listing-category"/></div><div class="bd-div listing-textcontainer"><h3 class="bd-heading h3 filter-search-a">Voluptatem</h3><p class="bd-paragraph light">Ut in non sed soluta. Perferendi</p><div class="bd-spacer"></div><div class="bd-div h-stack spacebottom"><div class="bd-textblock listing-tag">Music</div><div class="bd-textblock listing-tag">Min 1 year</div></div><div class="bd-div h-stack"><div class="bd-textblock listing detail">$</div><div class="bd-textblock listing filter-aa">23795.2</div><div class="bd-textblock listing filter-search-d">2/18/2022</div><div class="bd-textblock filter-bb">Dublin</div></div></div><div class="bd-div h-stack"><a href="/events/voluptatem" class="bd-button secondary-btn light w-inline-block"><h4 class="bd-heading h4">Details</h4></a><a href="/events/voluptatem" class="bd-button secondary-btn right w-inline-block"><h4 class="bd-heading h4">Buy now</h4></a></div><div class="bd-div listing-more-button"><img src="https://uploads-ssl.webflow.com/60847233fbf8fb1ea0e28c0c/6085b167431161e231b5e453_more.svg" loading="lazy" width="20" alt=""/></div></article></div><div role="listitem" class="bd-listing-item-wrap w-dyn-item"><article class="bd-listing-item"><img src="https://uploads-ssl.webflow.com/60847233fbf8fbce43e28c2d/6085c1200819813c8ccc90ec_1619378463562-image19.jpg" loading="lazy" alt="" class="bd-image listing"/><div class="bd-div image-overlay"><img src="https://uploads-ssl.webflow.com/60847233fbf8fb1ea0e28c0c/6085b0a8d656c851bee02c93_music-note.svg" loading="lazy" width="31" alt="" class="bd-image listing-category"/></div><div class="bd-div listing-textcontainer"><h3 class="bd-heading h3 filter-search-a">Et Nostrum</h3><p class="bd-paragraph light">Voluptatem error et eligendi fugiat. Provident eveniet re</p><div class="bd-spacer"></div><div class="bd-div h-stack spacebottom"><div class="bd-textblock listing-tag">Music</div><div class="bd-textblock listing-tag">Min 1 year</div></div><div class="bd-div h-stack"><div class="bd-textblock listing detail">$</div><div class="bd-textblock listing filter-aa">12037.7</div><div class="bd-textblock listing filter-search-d">4/29/2022</div><div class="bd-textblock filter-bb">San Jose</div></div></div><div class="bd-div h-stack"><a href="/events/et-nostrum" class="bd-button secondary-btn light w-inline-block"><h4 class="bd-heading h4">Details</h4></a><a href="/events/et-nostrum" class="bd-button secondary-btn right w-inline-block"><h4 class="bd-heading h4">Buy now</h4></a></div><div class="bd-div listing-more-button"><img src="https://uploads-ssl.webflow.com/60847233fbf8fb1ea0e28c0c/6085b167431161e231b5e453_more.svg" loading="lazy" width="20" alt=""/></div></article></div><div role="listitem" class="bd-listing-item-wrap w-dyn-item"><article class="bd-listing-item"><img src="https://uploads-ssl.webflow.com/60847233fbf8fbce43e28c2d/61608a39ed1c63fcf4914b64_1633716792191-image7.jpg" loading="lazy" alt="" sizes="(max-width: 767px) 92vw, (max-width: 991px) 46vw, 26vw" srcset="https://uploads-ssl.webflow.com/60847233fbf8fbce43e28c2d/61608a39ed1c63fcf4914b64_1633716792191-image7-p-1080.jpeg 1080w, https://uploads-ssl.webflow.com/60847233fbf8fbce43e28c2d/61608a39ed1c63fcf4914b64_1633716792191-image7.jpg 1300w" class="bd-image listing"/><div class="bd-div image-overlay"><img src="https://uploads-ssl.webflow.com/60847233fbf8fb1ea0e28c0c/6085b0a8d656c851bee02c93_music-note.svg" loading="lazy" width="31" alt="" class="bd-image listing-category"/></div><div class="bd-div listing-textcontainer"><h3 class="bd-heading h3 filter-search-a">Et</h3><p class="bd-paragraph light">Officiis quibusdam quis deserunt. Quasi et a</p><div class="bd-spacer"></div><div class="bd-div h-stack spacebottom"><div class="bd-textblock listing-tag">Music</div><div class="bd-textblock listing-tag">Min 1 year</div></div><div class="bd-div h-stack"><div class="bd-textblock listing detail">$</div><div class="bd-textblock listing filter-aa">82537.7</div><div class="bd-textblock listing filter-search-d">11/10/2020</div><div class="bd-textblock filter-bb">Fremont</div></div></div><div class="bd-div h-stack"><a href="/events/et" class="bd-button secondary-btn light w-inline-block"><h4 class="bd-heading h4">Details</h4></a><a href="/events/et" class="bd-button secondary-btn right w-inline-block"><h4 class="bd-heading h4">Buy now</h4></a></div><div class="bd-div listing-more-button"><img src="https://uploads-ssl.webflow.com/60847233fbf8fb1ea0e28c0c/6085b167431161e231b5e453_more.svg" loading="lazy" width="20" alt=""/></div></article></div><div role="listitem" class="bd-listing-item-wrap w-dyn-item"><article class="bd-listing-item"><img src="https://uploads-ssl.webflow.com/60847233fbf8fbce43e28c2d/6085c1200819813c8ccc90ec_1619378463562-image19.jpg" loading="lazy" alt="" class="bd-image listing"/><div class="bd-div image-overlay"><img src="https://uploads-ssl.webflow.com/60847233fbf8fb1ea0e28c0c/6085b0a8d656c851bee02c93_music-note.svg" loading="lazy" width="31" alt="" class="bd-image listing-category"/></div><div class="bd-div listing-textcontainer"><h3 class="bd-heading h3 filter-search-a">Cum Excepturi Sed</h3><p class="bd-paragraph light">Voluptates consequatur quia quos et molestiae enim minus temporibus et. Vel sunt</p><div class="bd-spacer"></div><div class="bd-div h-stack spacebottom"><div class="bd-textblock listing-tag">Music</div><div class="bd-textblock listing-tag">Min 1 year</div></div><div class="bd-div h-stack"><div class="bd-textblock listing detail">$</div><div class="bd-textblock listing filter-aa">88574.0</div><div class="bd-textblock listing filter-search-d">10/26/2020</div><div class="bd-textblock filter-bb">Dublin</div></div></div><div class="bd-div h-stack"><a href="/events/cum-excepturi-sed" class="bd-button secondary-btn light w-inline-block"><h4 class="bd-heading h4">Details</h4></a><a href="/events/cum-excepturi-sed" class="bd-button secondary-btn right w-inline-block"><h4 class="bd-heading h4">Buy now</h4></a></div><div class="bd-div listing-more-button"><img src="https://uploads-ssl.webflow.com/60847233fbf8fb1ea0e28c0c/6085b167431161e231b5e453_more.svg" loading="lazy" width="20" alt=""/></div></article></div><div role="listitem" class="bd-listing-item-wrap w-dyn-item"><article class="bd-listing-item"><img src="https://uploads-ssl.webflow.com/60847233fbf8fbce43e28c2d/6085c1201e503fe710aa9d50_1619378463475-image8.jpg" loading="lazy" alt="" sizes="(max-width: 767px) 92vw, (max-width: 991px) 46vw, 26vw" srcset="https://uploads-ssl.webflow.com/60847233fbf8fbce43e28c2d/6085c1201e503fe710aa9d50_1619378463475-image8-p-1080.jpeg 1080w, https://uploads-ssl.webflow.com/60847233fbf8fbce43e28c2d/6085c1201e503fe710aa9d50_1619378463475-image8.jpg 1300w" class="bd-image listing"/><div class="bd-div image-overlay"><img src="https://uploads-ssl.webflow.com/60847233fbf8fb1ea0e28c0c/6085b0a8d656c851bee02c93_music-note.svg" loading="lazy" width="31" alt="" class="bd-image listing-category"/></div><div class="bd-div listing-textcontainer"><h3 class="bd-heading h3 filter-search-a">Cum</h3><p class="bd-paragraph light">Error qui ut temporibus aspernatur. Qui corrupti est temporibus illum est amet</p><div class="bd-spacer"></div><div class="bd-div h-stack spacebottom"><div class="bd-textblock listing-tag">Music</div><div class="bd-textblock listing-tag">Min 1 year</div></div><div class="bd-div h-stack"><div class="bd-textblock listing detail">$</div><div class="bd-textblock listing filter-aa">88755.0</div><div class="bd-textblock listing filter-search-d">6/1/2021</div><div class="bd-textblock filter-bb">San Ramone</div></div></div><div class="bd-div h-stack"><a href="/events/cum" class="bd-button secondary-btn light w-inline-block"><h4 class="bd-heading h4">Details</h4></a><a href="/events/cum" class="bd-button secondary-btn right w-inline-block"><h4 class="bd-heading h4">Buy now</h4></a></div><div class="bd-div listing-more-button"><img src="https://uploads-ssl.webflow.com/60847233fbf8fb1ea0e28c0c/6085b167431161e231b5e453_more.svg" loading="lazy" width="20" alt=""/></div></article></div><div role="listitem" class="bd-listing-item-wrap w-dyn-item"><article class="bd-listing-item"><img src="https://uploads-ssl.webflow.com/60847233fbf8fbce43e28c2d/6085c1217835b202ea9af22e_1619378463557-image11.jpg" loading="lazy" alt="" sizes="(max-width: 767px) 92vw, (max-width: 991px) 46vw, 26vw" srcset="https://uploads-ssl.webflow.com/60847233fbf8fbce43e28c2d/6085c1217835b202ea9af22e_1619378463557-image11-p-500.jpeg 500w, https://uploads-ssl.webflow.com/60847233fbf8fbce43e28c2d/6085c1217835b202ea9af22e_1619378463557-image11.jpg 1300w" class="bd-image listing"/><div class="bd-div image-overlay"><img src="https://uploads-ssl.webflow.com/60847233fbf8fb1ea0e28c0c/6085b0a8d656c851bee02c93_music-note.svg" loading="lazy" width="31" alt="" class="bd-image listing-category"/></div><div class="bd-div listing-textcontainer"><h3 class="bd-heading h3 filter-search-a">Dolore</h3><p class="bd-paragraph light">Doloribus optio magni sunt voluptatum provident </p><div class="bd-spacer"></div><div class="bd-div h-stack spacebottom"><div class="bd-textblock listing-tag">Music</div><div class="bd-textblock listing-tag">Min 1 year</div></div><div class="bd-div h-stack"><div class="bd-textblock listing detail">$</div><div class="bd-textblock listing filter-aa">31280.8</div><div class="bd-textblock listing filter-search-d">7/18/2022</div><div class="bd-textblock filter-bb">Fremont</div></div></div><div class="bd-div h-stack"><a href="/events/dolore" class="bd-button secondary-btn light w-inline-block"><h4 class="bd-heading h4">Details</h4></a><a href="/events/dolore" class="bd-button secondary-btn right w-inline-block"><h4 class="bd-heading h4">Buy now</h4></a></div><div class="bd-div listing-more-button"><img src="https://uploads-ssl.webflow.com/60847233fbf8fb1ea0e28c0c/6085b167431161e231b5e453_more.svg" loading="lazy" width="20" alt=""/></div></article></div><div role="listitem" class="bd-listing-item-wrap w-dyn-item"><article class="bd-listing-item"><img src="https://uploads-ssl.webflow.com/60847233fbf8fbce43e28c2d/61608a390573600ce712d639_1633716792126-image15.jpg" loading="lazy" alt="" class="bd-image listing"/><div class="bd-div image-overlay"><img src="https://uploads-ssl.webflow.com/60847233fbf8fb1ea0e28c0c/6085b0a8d656c851bee02c93_music-note.svg" loading="lazy" width="31" alt="" class="bd-image listing-category"/></div><div class="bd-div listing-textcontainer"><h3 class="bd-heading h3 filter-search-a">Autem</h3><p class="bd-paragraph light">Hic aut voluptatum voluptates odio blanditiis voluptas iu</p><div class="bd-spacer"></div><div class="bd-div h-stack spacebottom"><div class="bd-textblock listing-tag">Music</div><div class="bd-textblock listing-tag">Min 1 year</div></div><div class="bd-div h-stack"><div class="bd-textblock listing detail">$</div><div class="bd-textblock listing filter-aa">48112.9</div><div class="bd-textblock listing filter-search-d">8/24/2021</div><div class="bd-textblock filter-bb">Fremont</div></div></div><div class="bd-div h-stack"><a href="/events/autem" class="bd-button secondary-btn light w-inline-block"><h4 class="bd-heading h4">Details</h4></a><a href="/events/autem" class="bd-button secondary-btn right w-inline-block"><h4 class="bd-heading h4">Buy now</h4></a></div><div class="bd-div listing-more-button"><img src="https://uploads-ssl.webflow.com/60847233fbf8fb1ea0e28c0c/6085b167431161e231b5e453_more.svg" loading="lazy" width="20" alt=""/></div></article></div><div role="listitem" class="bd-listing-item-wrap w-dyn-item"><article class="bd-listing-item"><img src="https://uploads-ssl.webflow.com/60847233fbf8fbce43e28c2d/60847233fbf8fb47e0e28c25_1550760514206-image16.jpg" loading="lazy" alt="" sizes="(max-width: 767px) 92vw, (max-width: 991px) 46vw, 26vw" srcset="https://uploads-ssl.webflow.com/60847233fbf8fbce43e28c2d/60847233fbf8fb47e0e28c25_1550760514206-image16-p-500.jpeg 500w, https://uploads-ssl.webflow.com/60847233fbf8fbce43e28c2d/60847233fbf8fb47e0e28c25_1550760514206-image16.jpg 1300w" class="bd-image listing"/><div class="bd-div image-overlay"><img src="https://uploads-ssl.webflow.com/60847233fbf8fb1ea0e28c0c/6085b0a8d656c851bee02c93_music-note.svg" loading="lazy" width="31" alt="" class="bd-image listing-category"/></div><div class="bd-div listing-textcontainer"><h3 class="bd-heading h3 filter-search-a">Iste</h3><p class="bd-paragraph light">Praesentium eaque libero ratione. Ea culpa et itaque aliquid quia et. Consequatu</p><div class="bd-spacer"></div><div class="bd-div h-stack spacebottom"><div class="bd-textblock listing-tag">Music</div><div class="bd-textblock listing-tag">Min 1 year</div></div><div class="bd-div h-stack"><div class="bd-textblock listing detail">$</div><div class="bd-textblock listing filter-aa">98769.6</div><div class="bd-textblock listing filter-search-d">10/17/2021</div><div class="bd-textblock filter-bb">Dublin</div></div></div><div class="bd-div h-stack"><a href="/events/iste" class="bd-button secondary-btn light w-inline-block"><h4 class="bd-heading h4">Details</h4></a><a href="/events/iste" class="bd-button secondary-btn right w-inline-block"><h4 class="bd-heading h4">Buy now</h4></a></div><div class="bd-div listing-more-button"><img src="https://uploads-ssl.webflow.com/60847233fbf8fb1ea0e28c0c/6085b167431161e231b5e453_more.svg" loading="lazy" width="20" alt=""/></div></article></div><div role="listitem" class="bd-listing-item-wrap w-dyn-item"><article class="bd-listing-item"><img src="https://uploads-ssl.webflow.com/60847233fbf8fbce43e28c2d/6085c121948bd681aa05ff81_1619378463531-image9.jpg" loading="lazy" alt="" sizes="(max-width: 767px) 92vw, (max-width: 991px) 46vw, 26vw" srcset="https://uploads-ssl.webflow.com/60847233fbf8fbce43e28c2d/6085c121948bd681aa05ff81_1619378463531-image9-p-1080.jpeg 1080w, https://uploads-ssl.webflow.com/60847233fbf8fbce43e28c2d/6085c121948bd681aa05ff81_1619378463531-image9.jpg 1300w" class="bd-image listing"/><div class="bd-div image-overlay"><img src="https://uploads-ssl.webflow.com/60847233fbf8fb1ea0e28c0c/6085b0a8d656c851bee02c93_music-note.svg" loading="lazy" width="31" alt="" class="bd-image listing-category"/></div><div class="bd-div listing-textcontainer"><h3 class="bd-heading h3 filter-search-a">Pariatur Nemo Distinctio Optio</h3><p class="bd-paragraph light">Quo iste impedit est nihil qui vero. </p><div class="bd-spacer"></div><div class="bd-div h-stack spacebottom"><div class="bd-textblock listing-tag">Music</div><div class="bd-textblock listing-tag">Min 1 year</div></div><div class="bd-div h-stack"><div class="bd-textblock listing detail">$</div><div class="bd-textblock listing filter-aa">69942.1</div><div class="bd-textblock listing filter-search-d">1/9/2022</div><div class="bd-textblock filter-bb">Fremont</div></div></div><div class="bd-div h-stack"><a href="/events/pariatur-nemo-distinctio-optio" class="bd-button secondary-btn light w-inline-block"><h4 class="bd-heading h4">Details</h4></a><a href="/events/pariatur-nemo-distinctio-optio" class="bd-button secondary-btn right w-inline-block"><h4 class="bd-heading h4">Buy now</h4></a></div><div class="bd-div listing-more-button"><img src="https://uploads-ssl.webflow.com/60847233fbf8fb1ea0e28c0c/6085b167431161e231b5e453_more.svg" loading="lazy" width="20" alt=""/></div></article></div><div role="listitem" class="bd-listing-item-wrap w-dyn-item"><article class="bd-listing-item"><img src="https://uploads-ssl.webflow.com/60847233fbf8fbce43e28c2d/6085c121948bd681aa05ff81_1619378463531-image9.jpg" loading="lazy" alt="" sizes="(max-width: 767px) 92vw, (max-width: 991px) 46vw, 26vw" srcset="https://uploads-ssl.webflow.com/60847233fbf8fbce43e28c2d/6085c121948bd681aa05ff81_1619378463531-image9-p-1080.jpeg 1080w, https://uploads-ssl.webflow.com/60847233fbf8fbce43e28c2d/6085c121948bd681aa05ff81_1619378463531-image9.jpg 1300w" class="bd-image listing"/><div class="bd-div image-overlay"><img src="https://uploads-ssl.webflow.com/60847233fbf8fb1ea0e28c0c/6085b0a8d656c851bee02c93_music-note.svg" loading="lazy" width="31" alt="" class="bd-image listing-category"/></div><div class="bd-div listing-textcontainer"><h3 class="bd-heading h3 filter-search-a">Sed Expedita Odio</h3><p class="bd-paragraph light">Ad possimus ea earum veniam illum quam. Dolore odio ve</p><div class="bd-spacer"></div><div class="bd-div h-stack spacebottom"><div class="bd-textblock listing-tag">Music</div><div class="bd-textblock listing-tag">Min 1 year</div></div><div class="bd-div h-stack"><div class="bd-textblock listing detail">$</div><div class="bd-textblock listing filter-aa">99600.8</div><div class="bd-textblock listing filter-search-d">7/5/2022</div><div class="bd-textblock filter-bb">Dublin</div></div></div><div class="bd-div h-stack"><a href="/events/sed-expedita-odio" class="bd-button secondary-btn light w-inline-block"><h4 class="bd-heading h4">Details</h4></a><a href="/events/sed-expedita-odio" class="bd-button secondary-btn right w-inline-block"><h4 class="bd-heading h4">Buy now</h4></a></div><div class="bd-div listing-more-button"><img src="https://uploads-ssl.webflow.com/60847233fbf8fb1ea0e28c0c/6085b167431161e231b5e453_more.svg" loading="lazy" width="20" alt=""/></div></article></div><div role="listitem" class="bd-listing-item-wrap w-dyn-item"><article class="bd-listing-item"><img src="https://uploads-ssl.webflow.com/60847233fbf8fbce43e28c2d/61608a39ed1c63fcf4914b64_1633716792191-image7.jpg" loading="lazy" alt="" sizes="(max-width: 767px) 92vw, (max-width: 991px) 46vw, 26vw" srcset="https://uploads-ssl.webflow.com/60847233fbf8fbce43e28c2d/61608a39ed1c63fcf4914b64_1633716792191-image7-p-1080.jpeg 1080w, https://uploads-ssl.webflow.com/60847233fbf8fbce43e28c2d/61608a39ed1c63fcf4914b64_1633716792191-image7.jpg 1300w" class="bd-image listing"/><div class="bd-div image-overlay"><img src="https://uploads-ssl.webflow.com/60847233fbf8fb1ea0e28c0c/6085b0a8d656c851bee02c93_music-note.svg" loading="lazy" width="31" alt="" class="bd-image listing-category"/></div><div class="bd-div listing-textcontainer"><h3 class="bd-heading h3 filter-search-a">Culpa</h3><p class="bd-paragraph light">Recusandae esse et atque atque nihil voluptas. Pariatur quis quibusdam at.</p><div class="bd-spacer"></div><div class="bd-div h-stack spacebottom"><div class="bd-textblock listing-tag">Music</div><div class="bd-textblock listing-tag">Min 1 year</div></div><div class="bd-div h-stack"><div class="bd-textblock listing detail">$</div><div class="bd-textblock listing filter-aa">9134.8</div><div class="bd-textblock listing filter-search-d">3/27/2021</div><div class="bd-textblock filter-bb">San Ramone</div></div></div><div class="bd-div h-stack"><a href="/events/culpa" class="bd-button secondary-btn light w-inline-block"><h4 class="bd-heading h4">Details</h4></a><a href="/events/culpa" class="bd-button secondary-btn right w-inline-block"><h4 class="bd-heading h4">Buy now</h4></a></div><div class="bd-div listing-more-button"><img src="https://uploads-ssl.webflow.com/60847233fbf8fb1ea0e28c0c/6085b167431161e231b5e453_more.svg" loading="lazy" width="20" alt=""/></div></article></div><div role="listitem" class="bd-listing-item-wrap w-dyn-item"><article class="bd-listing-item"><img src="https://uploads-ssl.webflow.com/60847233fbf8fbce43e28c2d/61608a39cc67817cf71511c4_1633716792112-image3.jpg" loading="lazy" alt="" sizes="(max-width: 767px) 92vw, (max-width: 991px) 46vw, 26vw" srcset="https://uploads-ssl.webflow.com/60847233fbf8fbce43e28c2d/61608a39cc67817cf71511c4_1633716792112-image3-p-1080.jpeg 1080w, https://uploads-ssl.webflow.com/60847233fbf8fbce43e28c2d/61608a39cc67817cf71511c4_1633716792112-image3.jpg 1300w" class="bd-image listing"/><div class="bd-div image-overlay"><img src="https://uploads-ssl.webflow.com/60847233fbf8fb1ea0e28c0c/6085b0a8d656c851bee02c93_music-note.svg" loading="lazy" width="31" alt="" class="bd-image listing-category"/></div><div class="bd-div listing-textcontainer"><h3 class="bd-heading h3 filter-search-a">Dignissimos Doloribus Sed</h3><p class="bd-paragraph light">Sit minima ut placeat quae esse. Ul</p><div class="bd-spacer"></div><div class="bd-div h-stack spacebottom"><div class="bd-textblock listing-tag">Music</div><div class="bd-textblock listing-tag">Min 1 year</div></div><div class="bd-div h-stack"><div class="bd-textblock listing detail">$</div><div class="bd-textblock listing filter-aa">34189.9</div><div class="bd-textblock listing filter-search-d">5/7/2022</div><div class="bd-textblock filter-bb">Fremont</div></div></div><div class="bd-div h-stack"><a href="/events/dignissimos-doloribus-sed" class="bd-button secondary-btn light w-inline-block"><h4 class="bd-heading h4">Details</h4></a><a href="/events/dignissimos-doloribus-sed" class="bd-button secondary-btn right w-inline-block"><h4 class="bd-heading h4">Buy now</h4></a></div><div class="bd-div listing-more-button"><img src="https://uploads-ssl.webflow.com/60847233fbf8fb1ea0e28c0c/6085b167431161e231b5e453_more.svg" loading="lazy" width="20" alt=""/></div></article></div><div role="listitem" class="bd-listing-item-wrap w-dyn-item"><article class="bd-listing-item"><img src="https://uploads-ssl.webflow.com/60847233fbf8fbce43e28c2d/61608a385a7abcf7dc7504cc_1633716791930-image12.jpg" loading="lazy" alt="" sizes="(max-width: 767px) 92vw, (max-width: 991px) 46vw, 26vw" srcset="https://uploads-ssl.webflow.com/60847233fbf8fbce43e28c2d/61608a385a7abcf7dc7504cc_1633716791930-image12-p-500.jpeg 500w, https://uploads-ssl.webflow.com/60847233fbf8fbce43e28c2d/61608a385a7abcf7dc7504cc_1633716791930-image12-p-800.jpeg 800w, https://uploads-ssl.webflow.com/60847233fbf8fbce43e28c2d/61608a385a7abcf7dc7504cc_1633716791930-image12-p-1080.jpeg 1080w, https://uploads-ssl.webflow.com/60847233fbf8fbce43e28c2d/61608a385a7abcf7dc7504cc_1633716791930-image12.jpg 1300w" class="bd-image listing"/><div class="bd-div image-overlay"><img src="https://uploads-ssl.webflow.com/60847233fbf8fb1ea0e28c0c/6085b0a8d656c851bee02c93_music-note.svg" loading="lazy" width="31" alt="" class="bd-image listing-category"/></div><div class="bd-div listing-textcontainer"><h3 class="bd-heading h3 filter-search-a">Perspiciatis Dolore</h3><p class="bd-paragraph light">Et architecto enim est illum aperiam ut. Optio doloribus rem fugit incidunt </p><div class="bd-spacer"></div><div class="bd-div h-stack spacebottom"><div class="bd-textblock listing-tag">Music</div><div class="bd-textblock listing-tag">Min 1 year</div></div><div class="bd-div h-stack"><div class="bd-textblock listing detail">$</div><div class="bd-textblock listing filter-aa">43691.8</div><div class="bd-textblock listing filter-search-d">12/31/2020</div><div class="bd-textblock filter-bb">Fremont</div></div></div><div class="bd-div h-stack"><a href="/events/perspiciatis-dolore" class="bd-button secondary-btn light w-inline-block"><h4 class="bd-heading h4">Details</h4></a><a href="/events/perspiciatis-dolore" class="bd-button secondary-btn right w-inline-block"><h4 class="bd-heading h4">Buy now</h4></a></div><div class="bd-div listing-more-button"><img src="https://uploads-ssl.webflow.com/60847233fbf8fb1ea0e28c0c/6085b167431161e231b5e453_more.svg" loading="lazy" width="20" alt=""/></div></article></div><div role="listitem" class="bd-listing-item-wrap w-dyn-item"><article class="bd-listing-item"><img src="https://uploads-ssl.webflow.com/60847233fbf8fbce43e28c2d/61608a39672c3d3470ff3ff9_1633716792109-image20.jpg" loading="lazy" alt="" class="bd-image listing"/><div class="bd-div image-overlay"><img src="https://uploads-ssl.webflow.com/60847233fbf8fb1ea0e28c0c/6085b0a8d656c851bee02c93_music-note.svg" loading="lazy" width="31" alt="" class="bd-image listing-category"/></div><div class="bd-div listing-textcontainer"><h3 class="bd-heading h3 filter-search-a">Animi Veritatis Et</h3><p class="bd-paragraph light">Nemo expedita omnis non dolores. Soluta id perspiciatis quae aut consectetur</p><div class="bd-spacer"></div><div class="bd-div h-stack spacebottom"><div class="bd-textblock listing-tag">Music</div><div class="bd-textblock listing-tag">Min 1 year</div></div><div class="bd-div h-stack"><div class="bd-textblock listing detail">$</div><div class="bd-textblock listing filter-aa">23035.3</div><div class="bd-textblock listing filter-search-d">8/29/2022</div><div class="bd-textblock filter-bb">Dublin</div></div></div><div class="bd-div h-stack"><a href="/events/animi-veritatis-et" class="bd-button secondary-btn light w-inline-block"><h4 class="bd-heading h4">Details</h4></a><a href="/events/animi-veritatis-et" class="bd-button secondary-btn right w-inline-block"><h4 class="bd-heading h4">Buy now</h4></a></div><div class="bd-div listing-more-button"><img src="https://uploads-ssl.webflow.com/60847233fbf8fb1ea0e28c0c/6085b167431161e231b5e453_more.svg" loading="lazy" width="20" alt=""/></div></article></div><div role="listitem" class="bd-listing-item-wrap w-dyn-item"><article class="bd-listing-item"><img src="https://uploads-ssl.webflow.com/60847233fbf8fbce43e28c2d/60847233fbf8fb717be28c23_1550760514150-image17.jpg" loading="lazy" alt="" sizes="(max-width: 767px) 92vw, (max-width: 991px) 46vw, 26vw" srcset="https://uploads-ssl.webflow.com/60847233fbf8fbce43e28c2d/60847233fbf8fb717be28c23_1550760514150-image17-p-1080.jpeg 1080w, https://uploads-ssl.webflow.com/60847233fbf8fbce43e28c2d/60847233fbf8fb717be28c23_1550760514150-image17.jpg 1300w" class="bd-image listing"/><div class="bd-div image-overlay"><img src="https://uploads-ssl.webflow.com/60847233fbf8fb1ea0e28c0c/6085b0a8d656c851bee02c93_music-note.svg" loading="lazy" width="31" alt="" class="bd-image listing-category"/></div><div class="bd-div listing-textcontainer"><h3 class="bd-heading h3 filter-search-a">Vero</h3><p class="bd-paragraph light">A consequatur aut voluptas et excepturi qui quisquam. Ea</p><div class="bd-spacer"></div><div class="bd-div h-stack spacebottom"><div class="bd-textblock listing-tag">Music</div><div class="bd-textblock listing-tag">Min 1 year</div></div><div class="bd-div h-stack"><div class="bd-textblock listing detail">$</div><div class="bd-textblock listing filter-aa">2060.9</div><div class="bd-textblock listing filter-search-d">3/13/2022</div><div class="bd-textblock filter-bb">Dublin</div></div></div><div class="bd-div h-stack"><a href="/events/vero" class="bd-button secondary-btn light w-inline-block"><h4 class="bd-heading h4">Details</h4></a><a href="/events/vero" class="bd-button secondary-btn right w-inline-block"><h4 class="bd-heading h4">Buy now</h4></a></div><div class="bd-div listing-more-button"><img src="https://uploads-ssl.webflow.com/60847233fbf8fb1ea0e28c0c/6085b167431161e231b5e453_more.svg" loading="lazy" width="20" alt=""/></div></article></div></div></div></div></div><div class="bd-div colored-spaced cta-section mobile"><h4 class="bd-heading h4">Stay in the loop</h4><p class="bd-paragraph light">Get notified about new events, discounts, and much more!</p><div class="w-form"><form id="email-form-2" name="email-form-2" data-name="Email Form 2" method="get" data-wf-page-id="60847233fbf8fb4a51e28c12" data-wf-element-id="b60fb1c5-b9a3-65ad-5e33-b4908a9df1ee"><input type="email" class="bd-form-field colored w-input" maxlength="256" name="email-2" data-name="Email 2" placeholder="Create project alerts" id="email-2" required=""/><input type="submit" value="Create alerts" data-wait="Please wait..." class="bd-button w-button"/></form><div class="w-form-done"><div>Thank you! Your submission has been received!</div></div><div class="w-form-fail"><div>Oops! Something went wrong while submitting the form.</div></div></div></div></div></div></div><script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=60847233fbf8fb1ea0e28c0c" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script><script src="https://uploads-ssl.webflow.com/60847233fbf8fb1ea0e28c0c/js/webflow.e8ebed649.js" type="text/javascript"></script><!-- F'in sweet CMS Library for Webflow -->
<script src="https://cdn.jsdelivr.net/npm/@finsweet/cms-library@1/cms-library.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
  
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.1.62/jquery.inputmask.bundle.js"></script>

<script>

	$('#searchDate').datepicker({
  });
  
  var allItemsShown = document.querySelectorAll(
    '.bd-listing-item-wrap[wf-fslib-paginated-hide="1"]'
  );

  var allCheckBoxes = document.querySelectorAll(
    '.bd-checkbox-field'
  );
  
    
  function updateItems() {

    allItemsShown = document.querySelectorAll(
      '.bd-listing-item-wrap[wf-fslib-paginated-hide="1"]'
    );
    
    document.getElementById("numShownItems").innerHTML = allItemsShown.length;
    
  }
  
  function countNums(item, index, arr) {
    let filterBB = item.querySelector('.bd-checkbox-field > .bd-checkbox-label')
    let filterBBCount = item.querySelector('.bd-checkbox-field > .bd-checkbox-metacount');
    //console.log(filterBBCount);
    let count = 0;
    for (let i = 0; i < allItemsShown.length; i++) {
      if (allItemsShown[i].querySelector('.filter-bb').innerHTML == filterBB.innerHTML) {
        count++;
      }
      allItemsShown[i].querySelector('.filter-bb').innerHTML == filterBB.innerHTML;
    }

    filterBBCount.innerHTML = count;
  };
  
 

  setInterval(function(){
  	updateItems();
  }, 200);
  
  //clearInterval(intervalId) 

(function() {

	var allItems = document.querySelectorAll(
    '.bd-checkbox-field'
  );

  allItems.forEach( myFunction )

  function myFunction(item, index, arr) {
    let filterBB = item.querySelector('.bd-checkbox-field > .bd-checkbox-label');

    item.setAttribute("filter-by", filterBB.innerHTML);
  };

		
    
	var filteredList = new FsLibrary('.filter-list')
	var filteredGrid = new FsLibrary('.filter-grid')

  var allFilters = [
  {
    filterWrapper: ".filter-search-a",
    filterByClass: ".filter-a",
    filterType: "exclusive"
  },
  {
    filterWrapper: ".filter-search-b",
    filterByClass: ".filter-b",
    filterType: "exclusive"
  },
  {
    filterWrapper: ".filter-search-c",
    filterByClass: ".filter-c",
    filterType: "exclusive"
  },
  {
    filterWrapper: ".filter-search-d",
    filterByClass: ".filter-d",
    filterType: "exclusive"
  },
  {
    filterWrapper: ".filter-check-aa", 
    filterByClass: ".filter-aa",
    filterType: "multi",
    filterRange: true
  },
  {
    filterWrapper: ".filter-check-bb",  
    filterByClass: ".filter-bb",
    filterType: "multi"
  }
  
]

	filteredGrid.filter({
    filterArray: allFilters,
    filterReset: '.bd-button-secondary',
    activeClass: 'is-active',
    emptyMessage: '.empty-message',
    animation: {
      enable: true,
    }
  })
  filteredList.filter({
    filterArray: allFilters,
    filterReset: '.bd-button-secondary',
    activeClass: 'is-active',
    emptyMessage: '.empty-message',
    animation: {
      enable: true,
    }
  })
  
	filteredGrid.sort({
    sortTrigger: '.sort-btn', // class of the button........
    sortReverse: true, // if you want sort first click to be Z>A.......
    activeClass: 'active', // class that styles the active state
    animation: {
      duration: 0,
    }
  })
  filteredList.sort({
    sortTrigger: '.sort-btn', // class of the button........
    sortReverse: true, // if you want sort first click to be Z>A.......
    activeClass: 'active', // class that styles the active state
    animation: {
      duration: 0,
    }
  })
  
  document.querySelector( '.bd-button-secondary' ).click();
  updateItems();
  allCheckBoxes.forEach( countNums );
  
})();

document.getElementById("layout-toggle").addEventListener("click", toggleLayout);
let layoutToggle = 0;

function toggleLayout() {
 	if (layoutToggle === 0) {
  	document.getElementById("grid-layout-btn").classList.remove('is-selected');
  	document.getElementById("grid").classList.add('is-hidden');
    document.getElementById("list-layout-btn").classList.add('is-selected');
    document.getElementById("list").classList.remove('is-hidden');
    layoutToggle = 1;
  } else if (layoutToggle === 1) {
  	document.getElementById("list-layout-btn").classList.remove('is-selected');
    document.getElementById("list").classList.add('is-hidden');
  	document.getElementById("grid-layout-btn").classList.add('is-selected');
    document.getElementById("grid").classList.remove('is-hidden');
    layoutToggle = 0;
  }
}
</script></body></html>


				</div>
				<!-- content-wrapper ends -->
				<!-- partial:partials/_footer.html -->
				<footer class="footer">
          <div class="footer-wrap">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © <a href="https://www.bootstrapdash.com/" target="_blank">bootstrapdash.com </a>2021</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Only the best <a href="https://www.bootstrapdash.com/" target="_blank"> Bootstrap dashboard </a> templates</span>
            </div>
          </div>
        </footer>
				<!-- partial -->
			</div>
			<!-- main-panel ends -->
		</div>
		<!-- page-body-wrapper ends -->
    </div>
		<!-- container-scroller -->
    <!-- base:js -->
    <script src="<?= base_url('assets/vendors/base/vendor.bundle.base.js') ?>"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="<?= base_url('assets/js/template.js') ?>"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <!-- End plugin js for this page -->
    <script src="<?= base_url('assets/vendors/chart.js/Chart.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendors/progressbar.js/progressbar.min.js') ?>"></script>
		<script src="<?= base_url('assets/vendors/chartjs-plugin-datalabels/chartjs-plugin-datalabels.js') ?>"></script>
		<script src="<?= base_url('assets/vendors/justgage/raphael-2.1.4.min.js') ?>"></script>
		<script src="<?= base_url('assets/vendors/justgage/justgage.js') ?>"></script>
    <script src="<?= base_url('assets/js/jquery.cookie.js') ?>" type="text/javascript"></script>
    <!-- Custom js for this page-->
    <script src="<?= base_url('assets/js/dashboard.js') ?>"></script>
    <!-- End custom js for this page-->
  </body>
</html>