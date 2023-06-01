<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="viho admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, viho admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="../assets/images/.png" type="image/x-icon">
    <link rel="shortcut icon" href="../assets/images/.png" type="image/x-icon">
    <title>I TRACKER</title>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="../../css2.css?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link href="../../css2-1.css?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
    <link href="../../css2-2.css?family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="../assets/css/fontawesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="../assets/css/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/feather-icon.css">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="../assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/chartist.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/date-picker.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/prism.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/vector-map.css">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link id="color" rel="stylesheet" href="../assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/responsive.css">
</head>

<body>
    <!-- Loader starts-->
    <div class="loader-wrapper">
        <div class="theme-loader">
            <div class="loader-p"></div>
        </div>
    </div>
    <!-- Loader ends-->
    <!-- page-wrapper Start       -->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <!-- Page Header Start-->
        <div class="page-main-header">
            <div class="main-header-right row m-0">
                <div class="main-header-left">
                    <div class="logo-wrapper"><a href="index.html"><img class="img-fluid" src="../images/absoll.png" style="height:39px" width="130px"   alt></a></div>
                    <div class="dark-logo-wrapper"><a href="index.html"><img class="img-fluid" src="../assets/images/logo/dark-logo.png" alt></a></div>
                    <div class="toggle-sidebar"><i class="status_toggle middle" data-feather="align-center" id="sidebar-toggle"></i></div>
                </div>
                <div class="left-menu-header col">
                    <ul>

                    </ul>
                </div>
                <div class="nav-right col pull-right right-menu p-0">
                    <ul class="nav-menus">
                        <li><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize"></i></a></li>
                        <!-- <li class="onhover-dropdown">
                            <div class="bookmark-box"><i data-feather="star"></i></div>
                           
                        </li> -->
                        <li class="onhover-dropdown">
                            <div class="notification-box"><i data-feather="bell"></i><span class="dot-animated"></span></div>
                            <ul class="notification-dropdown onhover-show-div">
                                <li>
                                    <p class="f-w-700 mb-0">You have 3 Notifications<span class="pull-right badge badge-primary badge-pill">4</span></p>
                                </li>
                                <li class="noti-primary">
                                    <div class="media"><span class="notification-bg bg-light-primary"><i data-feather="activity"> </i></span>
                                        <div class="media-body">
                                            <p>Delivery processing </p><span>10 minutes ago</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="noti-secondary">
                                    <div class="media"><span class="notification-bg bg-light-secondary"><i data-feather="check-circle"> </i></span>
                                        <div class="media-body">
                                            <p>Order Complete</p><span>1 hour ago</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="noti-success">
                                    <div class="media"><span class="notification-bg bg-light-success"><i data-feather="file-text"> </i></span>
                                        <div class="media-body">
                                            <p>Tickets Generated</p><span>3 hour ago</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="noti-danger">
                                    <div class="media"><span class="notification-bg bg-light-danger"><i data-feather="user-check"> </i></span>
                                        <div class="media-body">
                                            <p>Delivery Complete</p><span>6 hour ago</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>

                        <li class="onhover-dropdown p-0">
                            <button class="btn btn-primary-light" type="button"><a href="login_two.html"><i data-feather="log-out"></i>Log out</a></button>
                        </li>
                    </ul>
                </div>
                <div class="d-lg-none mobile-toggle pull-right w-auto"><i data-feather="more-horizontal"></i></div>
            </div>
        </div>
        <!-- Page Header Ends                              -->
        <!-- Page Body Start-->
        <div class="page-body-wrapper sidebar-icon">
            <!-- Page Sidebar Start-->
            <header class="main-nav">
                <div class="sidebar-user text-center"><a class="setting-primary" href="javascript:void(0)"><i data-feather="settings"></i></a><img class="img-90 rounded-circle" src="../assets/images/dashboard/1.png" alt>
                    <div class="badge-bottom"><span class="badge badge-primary">New</span></div><a href="user-profile.html">
                        <h6 class="mt-3 f-14 f-w-600">Emay Walter</h6>
                    </a>
                    <p class="mb-0 font-roboto">Human Resources Department</p>
                    <ul>
                        <li><span><span class="counter">19.8</span>k</span>
                            <p>Follow</p>
                        </li>
                        <li><span>2 year</span>
                            <p>Experince</p>
                        </li>
                        <li><span><span class="counter">95.2</span>k</span>
                            <p>Follower </p>
                        </li>
                    </ul>
                </div>
                <nav>
                    <div class="main-navbar">
                        <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
                        <div id="mainnav">
                            <ul class="nav-menu custom-scrollbar">
                                <li class="back-btn">
                                    <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                                </li>
                                <li class="sidebar-main-title">
                                    <div>
                                        <h6>General </h6>
                                    </div>
                                </li>
                                <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="home"></i><span>Dashboard</span></a>
                                    <ul class="nav-submenu menu-content">
                                       
                                        <li><a a href="<?php echo url('/') ?>">Home</a></li>
                                    </ul>
                                </li>


                                <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="file-text"></i><span>Sales</span></a>
                                    <ul class="nav-submenu menu-content">
                                        <li><a href="<?php echo url('cash-sales') ?>">Cash Sales</a></li>
                                        <li><a href="<?php echo url('cash-sales') ?>">Credit Note</a></li>
                                        <li><a href="<?php echo url('commercial-invoice') ?>">Commercial invoice</a></li>
                                        <li><a href="<?php echo url('tax-invoice') ?>">Tax Invoice</a></li>
                                        <li><a href="<?php echo url('profoma-invoice') ?>">Profoma Invoice</a></li>
                                        <li><a href="<?php echo url('invoice') ?>">Invoice</a></li>
                                        <li><a href="<?php echo url('Quatation') ?>">Quatation</a></li>
                                        <li><a href="<?php echo url('sales-order') ?>">Sales Order</a></li>
                                        <li><a href="<?php echo url('Item-fullfillment') ?>">Item Fullfillment</a></li>
                                    </ul>
                                </li>


                                <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="shopping-bag"></i><span>Purchase to Procure
                                        </span></a>
                                    <ul class="nav-submenu menu-content">
                                        <li><a href="<?php echo url('purchase-order') ?>">Purchase order</a></li>
                                        <li><a href="<?php echo url('blanket-purchase-order') ?>">Blanket Purchase order</a></li>
                                        <li><a href="<?php echo url('delivery-note') ?>">Delivery Note</a></li>
                                        <li><a href="<?php echo url('return-authorisation') ?>">Return Authorisation</a></li>
                                        <li><a href="<?php echo url('item-reciept') ?>">Item Reciept</a></li>
                                        <li><a href="<?php echo url('bill-payment') ?>">Bill Payment</a></li>
                                        <li><a href="<?php echo url('purchase-requisition') ?>">purchase requisition</a></li>
                                        <li><a href="<?php echo url('debit-note') ?>">Debit Note</a></li>
                                    </ul>
                                </li>
                                <li class="sidebar-main-title">
                                    <div>
                                        <h6>Design to Build </h6>
                                    </div>
                                </li>

                              
                               
                                <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="file"></i><span>Cheque Template</span></a>

                                </li>
                                <li>
                                        <a class="nav-link menu-title link-nav" href="<?php echo url('cheque') ?>"><i data-feather="file"></i><span>
                                        Cheque Template</span></a>
                                    </li>

                                  


                                    <li>
                                        <a class="nav-link menu-title link-nav" href="<?php echo url('customer-statement') ?>"><i data-feather="layers"></i><span>
                                       Customer Statement</span></a>
                                    </li>


                                    <li>
                                        <a class="nav-link menu-title link-nav" href="<?php echo url('customer-payment') ?>"><i data-feather="file"></i><span>
                                        Customer Payment</span></a>
                                    </li>


                                    <li>
                                        <a class="nav-link menu-title link-nav" href="<?php echo url('journal-entry') ?>"><i data-feather="archive"></i><span>
                                        Journal Entry</span></a>
                                    </li>


                                    <li>
                                        <a class="nav-link menu-title link-nav" href="<?php echo url('customer-deposit') ?>"><i data-feather="file"></i><span>
                                        Customer Deposit</span></a>
                                    </li>

                                    <li>
                                        <a class="nav-link menu-title link-nav" href="<?php echo url('expensive-report') ?>"><i data-feather="package"></i><span>
                                        Expensive Report</span></a>
                                    </li>

                                    <li>
                                        <a class="nav-link menu-title link-nav" href="<?php echo url('uploaded') ?>"><i data-feather="share"></i><span>
                                        Customized Template</span></a>
                                    </li>


                               
                            </ul>
                        </div>
                        <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
                    </div>
                </nav>
            </header>
            <!-- Page Sidebar Ends-->
            <div class="page-body">
                <!-- Container-fluid starts-->
                <div class="container-fluid">
            <div class="page-header">
              <div class="row">
                <div class="col-sm-6">
                  <h3>Cash Sales</h3>
                 
                </div>
                <div class="col-sm-6">
                  <!-- Bookmark Start-->
                   <div class="bookmark">
                    <ul>
                    <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalfat" >Upload Template</button>
                      <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Tables"><i data-feather="download"></i></a></li>
                      <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Chat"><i data-feather="message-square"></i></a></li>
                     
                      <div class="modal fade" id="exampleModalfat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel2">Add The Template</h5>
                            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <form>
                              <div class="mb-3">
                                <label class="col-form-label d-flex flex-row" for="recipient-name">Name:</label>
                                <input class="form-control" type="text" >
                              </div>

                              <div class="mb-3">
                                <label class="col-form-label d-flex flex-row" for="recipient-name">Upload Template:</label>
                                <input class="form-control" type="file" >
                              </div>

                              <!-- <div class="mb-3">
                                <label class="col-form-label" for="message-text">Comments:</label>
                                <textarea class="form-control" id="message-text"></textarea>
                              </div> -->
                            </form>
                          </div>
                          <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
                            <button class="btn btn-primary" type="button">Upload</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    </ul>
                  </div>
                  <!-- Bookmark Ends-->
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-header pb-0">
                    <h5>Cash Sales Template Designs</h5>
                  </div>
                  <div class="card-body">
                    <div class="row gallery my-gallery" id="aniimated-thumbnials" itemscope="">
                      <figure class="reveal col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope=""><a href="../assets/images/big-lightgallry/01.jpg" itemprop="contentUrl" data-size="1600x950"><img class="img-thumbnail" src="../assets/images/lightgallry/01.jpg" itemprop="thumbnail" alt="Image description"></a>
                        <figcaption itemprop="caption description">Image caption  1</figcaption>
                      </figure>
                      <figure class="reveal col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope=""><a href="../assets/images/big-lightgallry/02.jpg" itemprop="contentUrl" data-size="1600x950"><img class="img-thumbnail" src="../assets/images/lightgallry/02.jpg" itemprop="thumbnail" alt="Image description"></a>
                        <figcaption itemprop="caption description">Image caption  2</figcaption>
                      </figure>
                      <figure class="reveal col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope=""><a href="../assets/images/big-lightgallry/03.jpg" itemprop="contentUrl" data-size="1600x950"><img class="img-thumbnail" src="../assets/images/lightgallry/03.jpg" itemprop="thumbnail" alt="Image description"></a>
                        <figcaption itemprop="caption description">Image caption  3</figcaption>
                      </figure>
                      <figure class="reveal col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope=""><a href="../assets/images/big-lightgallry/04.jpg" itemprop="contentUrl" data-size="1600x950"><img class="img-thumbnail" src="../assets/images/lightgallry/04.jpg" itemprop="thumbnail" alt="Image description"></a>
                        <figcaption itemprop="caption description">Image caption  4</figcaption>
                      </figure>
                      <figure class="reveal col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope=""><a href="../assets/images/big-lightgallry/05.jpg" itemprop="contentUrl" data-size="1600x950"><img class="img-thumbnail" src="../assets/images/lightgallry/05.jpg" itemprop="thumbnail" alt="Image description"></a>
                        <figcaption itemprop="caption description">Image caption  5</figcaption>
                      </figure>
                      <figure class="reveal col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope=""><a href="../assets/images/big-lightgallry/06.jpg" itemprop="contentUrl" data-size="1600x950"><img class="img-thumbnail" src="../assets/images/lightgallry/06.jpg" itemprop="thumbnail" alt="Image description"></a>
                        <figcaption itemprop="caption description">Image caption  6</figcaption>
                      </figure>
                      <figure class="reveal col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope=""><a href="../assets/images/big-lightgallry/07.jpg" itemprop="contentUrl" data-size="1600x950"><img class="img-thumbnail" src="../assets/images/lightgallry/07.jpg" itemprop="thumbnail" alt="Image description"></a>
                        <figcaption itemprop="caption description">Image caption  7</figcaption>
                      </figure>
                      <figure class="reveal col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope=""><a href="../assets/images/big-lightgallry/08.jpg" itemprop="contentUrl" data-size="1600x950"><img class="img-thumbnail" src="../assets/images/lightgallry/08.jpg" itemprop="thumbnail" alt="Image description"></a>
                        <figcaption itemprop="caption description">Image caption  8</figcaption>
                      </figure>
                      <figure class="reveal col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope=""><a href="../assets/images/big-lightgallry/09.jpg" itemprop="contentUrl" data-size="1600x950"><img class="img-thumbnail" src="../assets/images/lightgallry/09.jpg" itemprop="thumbnail" alt="Image description"></a>
                        <figcaption itemprop="caption description">Image caption  9</figcaption>
                      </figure>
                      <figure class="reveal col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope=""><a href="../assets/images/big-lightgallry/010.jpg" itemprop="contentUrl" data-size="1600x950"><img class="img-thumbnail" src="../assets/images/lightgallry/010.jpg" itemprop="thumbnail" alt="Image description"></a>
                        <figcaption itemprop="caption description">Image caption  10</figcaption>
                      </figure>
                      <figure class="reveal col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope=""><a href="../assets/images/big-lightgallry/011.jpg" itemprop="contentUrl" data-size="1600x950"><img class="img-thumbnail" src="../assets/images/lightgallry/011.jpg" itemprop="thumbnail" alt="Image description"></a>
                        <figcaption itemprop="caption description">Image caption  11</figcaption>
                      </figure>
                      <figure class="reveal col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope=""><a href="../assets/images/big-lightgallry/012.jpg" itemprop="contentUrl" data-size="1600x950"><img class="img-thumbnail" src="../assets/images/lightgallry/012.jpg" itemprop="thumbnail" alt="Image description"></a>
                        <figcaption itemprop="caption description">Image caption  12</figcaption>
                      </figure>
                      <figure class="reveal col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope=""><a href="../assets/images/big-lightgallry/013.jpg" itemprop="contentUrl" data-size="1600x950"><img class="img-thumbnail" src="../assets/images/lightgallry/013.jpg" itemprop="thumbnail" alt="Image description"></a>
                        <figcaption itemprop="caption description">Image caption  13</figcaption>
                      </figure>
                      <figure class="reveal col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope=""><a href="../assets/images/big-lightgallry/014.jpg" itemprop="contentUrl" data-size="1600x950"><img class="img-thumbnail" src="../assets/images/lightgallry/014.jpg" itemprop="thumbnail" alt="Image description"></a>
                        <figcaption itemprop="caption description">Image caption  14</figcaption>
                      </figure>
                      <figure class="reveal col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope=""><a href="../assets/images/big-lightgallry/015.jpg" itemprop="contentUrl" data-size="1600x950"><img class="img-thumbnail" src="../assets/images/lightgallry/015.jpg" itemprop="thumbnail" alt="Image description"></a>
                        <figcaption itemprop="caption description">Image caption  15</figcaption>
                      </figure>
                      <figure class="reveal col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope=""><a href="../assets/images/big-lightgallry/016.jpg" itemprop="contentUrl" data-size="1600x950"><img class="img-thumbnail" src="../assets/images/lightgallry/016.jpg" itemprop="thumbnail" alt="Image description"></a>
                        <figcaption itemprop="caption description">Image caption  16</figcaption>
                      </figure>
                      <figure class="reveal col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope=""><a href="../assets/images/big-lightgallry/01.jpg" itemprop="contentUrl" data-size="1600x950"><img class="img-thumbnail" src="../assets/images/lightgallry/01.jpg" itemprop="thumbnail" alt="Image description"></a>
                        <figcaption itemprop="caption description">Image caption  17</figcaption>
                      </figure>
                      <figure class="reveal col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope=""><a href="../assets/images/big-lightgallry/02.jpg" itemprop="contentUrl" data-size="1600x950"><img class="img-thumbnail" src="../assets/images/lightgallry/02.jpg" itemprop="thumbnail" alt="Image description"></a>
                        <figcaption itemprop="caption description">Image caption  18</figcaption>
                      </figure>
                      <figure class="reveal col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope=""><a href="../assets/images/big-lightgallry/03.jpg" itemprop="contentUrl" data-size="1600x950"><img class="img-thumbnail" src="../assets/images/lightgallry/03.jpg" itemprop="thumbnail" alt="Image description"></a>
                        <figcaption itemprop="caption description">Image caption  19</figcaption>
                      </figure>
                      <figure class="reveal col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope=""><a href="../assets/images/big-lightgallry/04.jpg" itemprop="contentUrl" data-size="1600x950"><img class="img-thumbnail" src="../assets/images/lightgallry/04.jpg" itemprop="thumbnail" alt="Image description"></a>
                        <figcaption itemprop="caption description">Image caption  20</figcaption>
                      </figure>
                      <figure class="reveal col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope=""><a href="../assets/images/big-lightgallry/05.jpg" itemprop="contentUrl" data-size="1600x950"><img class="img-thumbnail" src="../assets/images/lightgallry/05.jpg" itemprop="thumbnail" alt="Image description"></a>
                        <figcaption itemprop="caption description">Image caption  21</figcaption>
                      </figure>
                      <figure class="reveal col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope=""><a href="../assets/images/big-lightgallry/010.jpg" itemprop="contentUrl" data-size="1600x950"><img class="img-thumbnail" src="../assets/images/lightgallry/010.jpg" itemprop="thumbnail" alt="Image description"></a>
                        <figcaption itemprop="caption description">Image caption  22</figcaption>
                      </figure>
                      <figure class="reveal col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope=""><a href="../assets/images/big-lightgallry/011.jpg" itemprop="contentUrl" data-size="1600x950"><img class="img-thumbnail" src="../assets/images/lightgallry/011.jpg" itemprop="thumbnail" alt="Image description"></a>
                        <figcaption itemprop="caption description">Image caption  23</figcaption>
                      </figure>
                      <figure class="reveal col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope=""><a href="../assets/images/big-lightgallry/012.jpg" itemprop="contentUrl" data-size="1600x950"><img class="img-thumbnail" src="../assets/images/lightgallry/012.jpg" itemprop="thumbnail" alt="Image description"></a>
                        <figcaption itemprop="caption description">Image caption  24</figcaption>
                      </figure>
                    </div>
                    <!-- Root element of PhotoSwipe. Must have class pswp.-->
                    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
                      <!--
                      Background of PhotoSwipe.
                      It's a separate element, as animating opacity is faster than rgba().
                      -->
                      <div class="pswp__bg"></div>
                      <!-- Slides wrapper with overflow:hidden.-->
                      <div class="pswp__scroll-wrap">
                        <!-- Container that holds slides. PhotoSwipe keeps only 3 slides in DOM to save memory.-->
                        <!-- don't modify these 3 pswp__item elements, data is added later on.-->
                        <div class="pswp__container">
                          <div class="pswp__item"></div>
                          <div class="pswp__item"></div>
                          <div class="pswp__item"></div>
                        </div>
                        <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed.-->
                        <div class="pswp__ui pswp__ui--hidden">
                          <div class="pswp__top-bar">
                            <!-- Controls are self-explanatory. Order can be changed.-->
                            <div class="pswp__counter"></div>
                            <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                            <button class="pswp__button pswp__button--share" title="Share"></button>
                            <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                            <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                            <!-- Preloader demo https://codepen.io/dimsemenov/pen/yyBWoR-->
                            <!-- element will get class pswp__preloader--active when preloader is running-->
                            <div class="pswp__preloader">
                              <div class="pswp__preloader__icn">
                                <div class="pswp__preloader__cut">
                                  <div class="pswp__preloader__donut"></div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                            <div class="pswp__share-tooltip"></div>
                          </div>
                          <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
                          <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
                          <div class="pswp__caption">
                            <div class="pswp__caption__center"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
               
              </div>
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->
    </div>
    <!-- footer start-->

    </div>
    </div>
    <!-- latest jquery-->
    <script src="../assets/js/jquery-3.5.1.min.js"></script>
    <!-- feather icon js-->
    <script src="../assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="../assets/js/icons/feather-icon/feather-icon.js"></script>
    <!-- Sidebar jquery-->
    <script src="../assets/js/sidebar-menu.js"></script>
    <script src="../assets/js/config.js"></script>
    <!-- Bootstrap js-->
    <script src="../assets/js/bootstrap/popper.min.js"></script>
    <script src="../assets/js/bootstrap/bootstrap.min.js"></script>
    <!-- Plugins JS start-->
    <script src="../assets/js/chart/chartist/chartist.js"></script>
    <script src="../assets/js/chart/chartist/chartist-plugin-tooltip.js"></script>
    <script src="../assets/js/chart/knob/knob.min.js"></script>
    <script src="../assets/js/chart/knob/knob-chart.js"></script>
    <script src="../assets/js/chart/apex-chart/apex-chart.js"></script>
    <script src="../assets/js/chart/apex-chart/stock-prices.js"></script>
    <script src="../assets/js/prism/prism.min.js"></script>
    <script src="../assets/js/clipboard/clipboard.min.js"></script>
    <script src="../assets/js/counter/jquery.waypoints.min.js"></script>
    <script src="../assets/js/counter/jquery.counterup.min.js"></script>
    <script src="../assets/js/counter/counter-custom.js"></script>
    <script src="../assets/js/custom-card/custom-card.js"></script>
    <script src="../assets/js/notify/bootstrap-notify.min.js"></script>
    <script src="../assets/js/vector-map/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="../assets/js/vector-map/map/jquery-jvectormap-world-mill-en.js"></script>
    <script src="../assets/js/vector-map/map/jquery-jvectormap-us-aea-en.js"></script>
    <script src="../assets/js/vector-map/map/jquery-jvectormap-uk-mill-en.js"></script>
    <script src="../assets/js/vector-map/map/jquery-jvectormap-au-mill.js"></script>
    <script src="../assets/js/vector-map/map/jquery-jvectormap-chicago-mill-en.js"></script>
    <script src="../assets/js/vector-map/map/jquery-jvectormap-in-mill.js"></script>
    <script src="../assets/js/vector-map/map/jquery-jvectormap-asia-mill.js"></script>
    <script src="../assets/js/dashboard/default.js"></script>
    <script src="../assets/js/notify/index.js"></script>
    <script src="../assets/js/datepicker/date-picker/datepicker.js"></script>
    <script src="../assets/js/datepicker/date-picker/datepicker.en.js"></script>
    <script src="../assets/js/datepicker/date-picker/datepicker.custom.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="../assets/js/script.js"></script>
    <script src="../assets/js/theme-customizer/customizer.js"></script>
    <!-- login js-->
    <!-- Plugin used-->
</body>

</html>