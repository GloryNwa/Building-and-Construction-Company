@include('includes/header')
<div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>Leave Request </h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>                            
                            <li class="breadcrumb-item">Employee</li>
                            <li class="breadcrumb-item active">Leave Request</li>
                        </ul>
                    </div>            
                    
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>Employee List</h2>
                            <ul class="header-dropdown">
                                <li><a href="javascript:void(0);" class="btn btn-info" data-toggle="modal" data-target="#Leave_Request">Request Leave</a></li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover js-basic-example dataTable table-custom m-b-0 c_list">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Unit</th>
                                            <th>Leave Type</th>
                                            <th>Date</th>
                                            <th>Reason</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      
                                        <tr>
                                            <td class="width45">                                           
                                                <img src="../assets/images/xs/avatar2.jpg" class="rounded-circle avatar" alt="">
                                            </td>
                                            <td>
                                                <h6 class="mb-0">Frank Camly</h6>                                            
                                            </td>
                                            <td><span>Partnership</span></td>
                                            <td><span>Casual Leave</span></td>
                                            <td>11 Aug, 2018 to 21 Aug, 2018</td>
                                            <td>Going to Holiday</td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-success" title="Approved"><i class="fa fa-check"></i></button>
                                                <button type="button" class="btn btn-sm btn-outline-danger js-sweetalert" title="Declined" data-type="confirm"><i class="fa fa-ban"></i></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>

<!-- Default Size -->
<div class="modal animated lightSpeedIn" id="Leave_Request" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="title" id="defaultModalLabel">Add Leave Request</h6>
            </div>
            <div class="modal-body">
                <div class="row clearfix">
                    <div class="col-md-12">
                        <select class="form-control mb-3 show-tick">
                            <option>Select Leave Type</option>
                            <option>Casual Leave (12)</option>
                            <option>Medical Leave</option>
                            <option>Maternity Leave</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" data-provide="datepicker" data-date-autoclose="true" class="form-control" placeholder="From *">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <input type="text" data-provide="datepicker" data-date-autoclose="true" class="form-control" placeholder="From *">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <textarea rows="6" class="form-control no-resize" placeholder="Leave Reason *"></textarea>
                        </div>
                    </div>                    
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Add</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</div>

<!-- Javascript -->
<script src="/assets1/bundles/libscripts.bundle.js"></script>    
<script src="/assets1/bundles/vendorscripts.bundle.js"></script>

<script src="/assets1/bundles/datatablescripts.bundle.js"></script>
<script src="/assets/vendor/sweetalert/sweetalert.min.js"></script> <!-- SweetAlert Plugin Js --> 
<script src="/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script><!-- bootstrap datepicker Plugin Js --> 

<script src="/assets1/bundles/mainscripts.bundle.js"></script>
<script src="/assets1/js/pages/tables/jquery-datatable.js"></script>
<script src="/assets1/js/pages/ui/dialogs.js"></script>
</body>

<!-- Mirrored from www.wrraptheme.com/templates/lucid/hr/html/light/emp-leave.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Jul 2020 12:10:53 GMT -->
</html>