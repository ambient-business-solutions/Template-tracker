@extends('layouts.main')
@section('content')
<div class="page-body">
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Uploaded Templates</h3>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo url('/') ?>">Home</a></li>

                        <li class="breadcrumb-item active">File Manager</li>
                    </ol>
                </div>
                <div class="col-sm-6">

                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">

            <div class="col-xl-12 col-md-12 box-col-12">
                <div class="file-content">
                    <div class="card">
                        <div class="card-header">
                            <div class="media">
                                <form class="form-inline" action="#" method="get" onsubmit="searchFiles(event)">
                                    <div class="form-group d-flex mb-0">
                                        <i class="fa fa-search"></i>
                                        <input id="searchInput" name="search" onkeyup="myFunction()" class="form-control-plaintext" type="text" placeholder="Search...">
                                    </div>
                                </form>


                                <div class="media-body text-end">
                                    <form class="d-inline-flex" action="#" method="POST" enctype="multipart/form-data" name="myForm">
                                        <div class="btn btn-primary" onclick="getFile()"> <i data-feather="plus-square"></i>Add New</div>
                                        <div style="height: 0px;width: 0px; overflow:hidden;">
                                            <input id="upfile" type="file" onchange="sub(this)">
                                        </div>
                                    </form>
                                    <div class="btn btn-outline-primary ms-2"><i data-feather="upload"> </i>Upload </div>
                                </div>
                            </div>
                        </div>




                        <div class="card-body file-manager">
                            <h4>Sales</h4>

                            <ul class="files" id="ul">


                                <li class="file-box">
                                    <div class="file-top">
                                        <i class="fa fa-file-image-o txt-primary"></i>
                                    </div>
                                    <div class="file-bottom">
                                        <h6><a class="list-title" href="<?php echo url('/uploaded-cashsales'); ?>">Cash Sales</a></h6>
                                    </div>
                                </li>


                                <li class="file-box">
                                    <div class="file-top">
                                        <i class="fa fa-file-archive-o txt-secondary"></i>
                                    </div>
                                    <div class="file-bottom">
                                        <h6><a class="list-title" href="<?php echo url('/uploaded-commercial-invoice'); ?>">Commercial invoice</h6>
                                    </div>
                                </li>


                                <li class="file-box">
                                    <div class="file-top"> <i class="fa fa-file-excel-o txt-success"></i></div>
                                    <div class="file-bottom">
                                        <h6><a class="list-title" href="<?php echo url('/uploaded-tax-invoice'); ?>">Tax Invoice</h6>
                                    </div>
                                </li>

                                <li class="file-box">
                                    <div class="file-top"> <i class="fa fa-file-text-o txt-info"></i></div>
                                    <div class="file-bottom">
                                        <h6><a class="list-title" href="<?php echo url('/uploaded-profoma-invoice'); ?>">Profoma Invoice </h6>
                                    </div>
                                </li>

                                <ul class="files">
                                    <br>
                                    <li class="file-box">
                                        <div class="file-top"> <i class="fa fa-file-archive-o txt-secondary"></i></div>
                                        <div class="file-bottom">
                                            <h6><a class="list-title" href="<?php echo url('/uploaded-invoice'); ?>">Invoice </h6>
                                        </div>
                                    </li>
                                    <li class="file-box">
                                        <div class="file-top"> <i class="fa fa-file-excel-o txt-success"></i></div>
                                        <div class="file-bottom">
                                            <h6><a class="list-title" href="<?php echo url('/uploaded-quatation'); ?>">Quatation </h6>
                                        </div>
                                    </li>
                                    <li class="file-box">
                                        <div class="file-top"> <i class="fa fa-file-text-o txt-info"></i></div>
                                        <div class="file-bottom">
                                            <h6><a class="list-title" href="<?php echo url('/uploaded-sales-order'); ?>">Sales Order </h6>
                                        </div>
                                    </li>
                                    <li class="file-box">
                                        <div class="file-top"> <i class="fa fa-file-text-o txt-primary"></i></div>
                                        <div class="file-bottom">
                                            <h6><a class="list-title" href="<?php echo url('/uploaded-item-fullfillment'); ?>">Item Fullfillment </h6>
                                        </div>
                                    </li>
                                </ul>
                            </ul>

                            <br>
                            <br>
                            <h5 class="mt-4">Purchase to Procure</h5>

                            <ul class="files" id="ul">
                                <li class="file-box">
                                    <div class="file-top"> <i class="fa fa-file-archive-o txt-secondary"></i></div>
                                    <div class="file-bottom">
                                        <h6><a href="<?php echo url('/uploaded-purchase-order'); ?>">Purchase order </h6>

                                    </div>
                                </li>
                                <li class="file-box">
                                    <div class="file-top"> <i class="fa fa-file-excel-o txt-success"></i></div>
                                    <div class="file-bottom">
                                        <h6><a href="<?php echo url('/uploaded-blanket-purchase-order'); ?>">Blanket Purchase order </h6>

                                    </div>
                                </li>
                                <li class="file-box">
                                    <div class="file-top"> <i class="fa fa-file-text-o txt-info"></i></div>
                                    <div class="file-bottom">
                                        <h6><a href="<?php echo url('/uploaded-delivery-note'); ?>">Delivery Note </h6>

                                    </div>
                                </li>
                                <li class="file-box">
                                    <div class="file-top"> <i class="fa fa-file-text-o txt-primary"></i></div>
                                    <div class="file-bottom">
                                        <h6><a href="<?php echo url('/uploaded-return-authorisation'); ?>">Return Authorisation </h6>
                                    </div>

                                <li class="file-box">


                                    <div class="file-top"> <i class="fa fa-file-text-o txt-info"></i></div>
                                    <div class="file-bottom">
                                        <h6><a href="<?php echo url('/uploaded-item-reciept'); ?>">Item Reciept </h6>

                                    </div>
                                </li>
                                <li class="file-box">
                                    <div class="file-top"> <i class="fa fa-file-excel-o txt-success"></i></div>
                                    <div class="file-bottom">
                                        <h6><a href="<?php echo url('/uploaded-bill-payment'); ?>">Bill Payment </h6>

                                    </div>
                                </li>
                                <li class="file-box">
                                    <div class="file-top"> <i class="fa fa-file-archive-o txt-secondary"></i></div>
                                    <div class="file-bottom">
                                        <h6><a href="<?php echo url('/uploaded-purchase-requisition'); ?>">purchase requisition </h6>

                                    </div>
                                </li>
                                <li class="file-box">
                                    <div class="file-top"> <i class="fa fa-file-text-o txt-primary"></i></div>
                                    <div class="file-bottom">
                                        <h6><a href="<?php echo url('/uploaded-debit-note'); ?>">Debit Note </h6>


                                    </div>
                            </ul>


                            <br>
                            <h5 class="mt-4">Template</h5>

                            <ul class="files" id="ul">
                                <li class="file-box">
                                    <div class="file-top"> <i class="fa fa-file-archive-o txt-secondary"></i></div>
                                    <div class="file-bottom">
                                        <h6><a href="<?php echo url('/uploaded-credit-note'); ?>">Credit Note </h6>

                                    </div>
                                </li>
                                <li class="file-box">
                                    <div class="file-top"> <i class="fa fa-file-excel-o txt-success"></i></div>
                                    <div class="file-bottom">
                                        <h6><a href="<?php echo url('/uploaded-cheque-template'); ?>"> Cheque Template </h6>

                                    </div>
                                </li>






                                <li class="file-box">
                                    <div class="file-top"> <i class="fa fa-file-text-o txt-primary"></i></div>
                                    <div class="file-bottom">
                                        <h6><a href="<?php echo url('/uploaded-design-to-build'); ?>">Design to Build </h6>


                                    </div>

                                </li>
                                <li class="file-box">
                                    <div class="file-top"> <i class="fa fa-file-text-o txt-info"></i></div>
                                    <div class="file-bottom">
                                        <h6><a href="<?php echo url('/uploaded-customer-statement'); ?>"> Customer Statement </h6>

                                    </div>
                                </li>


                                <li class="file-box">
                                    <div class="file-top"> <i class="fa fa-file-text-o txt-primary"></i></div>
                                    <div class="file-bottom">
                                        <h6><a href="<?php echo url('/uploaded-customer-payment'); ?>"> Customer Payment </h6>


                                    </div>

                                </li>



                                <li class="file-box">
                                    <div class="file-top"> <i class="fa fa-file-archive-o txt-secondary"></i></div>
                                    <div class="file-bottom">
                                        <h6><a href="<?php echo url('/uploaded-journal-entry'); ?>"> Journal Entry </h6>

                                    </div>
                                </li>
                                <li class="file-box">
                                    <div class="file-top"> <i class="fa fa-file-excel-o txt-success"></i></div>
                                    <div class="file-bottom">
                                        <h6><a href="<?php echo url('/uploaded-customer-deposit'); ?>">Customer Deposit </h6>

                                    </div>
                                </li>
                                <li class="file-box">
                                    <div class="file-top"> <i class="fa fa-file-text-o txt-info"></i></div>
                                    <div class="file-bottom">
                                        <h6><a href="<?php echo url('/uploaded-expensive-report'); ?>">Expensive Report </h6>

                                    </div>
                                </li>


                                </li>
                            </ul>
                            <br>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
</div>

<script>
    function myFunction() {
        var input, filter, ul, li, a, i, txtValue;
        input = document.getElementById("searchInput");
        filter = input.value.toUpperCase();
        ul = document.getElementById("ul"); 
        li = ul.getElementsByTagName("li");
        for (i = 0; i < li.length; i++) {
            a = li[i].getElementsByClassName("list-title")[0];
            txtValue = a.textContent || a.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                li[i].style.display = "";
            } else {
                li[i].style.display = "none";
            }
        }
    }
</script>


@stop