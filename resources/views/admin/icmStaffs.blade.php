@include('includes/header');


    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>All Staff</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>                            
                            <li class="breadcrumb-item"> All Staff</li>
                            <li class="breadcrumb-item active">Members</li>
                        </ul>
                    </div>            
                   

                </div>
            </div>
            
            
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>All<small>Staff Members</small> </h2>                            
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                           <th>#</th>
                                            <th>Title</th>
                                            <th>Name</th>
                                            <th>Designation</th>
                                            <th>Unit</th>
                                            <th>Birthday</th>
                                            <th>Start date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                  
                                    <tbody>
                                       
                                      
                                        <tr>
                                           <th>1</th>
                                            <td>Brother</td>
                                            <td>Donna Snider</td>
                                            <td>Graphic Designer</td>
                                            <td>Motion Graphics</td>
                                            <td>27 July</td>
                                            <td>2011/01/25</td>
                                            <td>
                                                <button class="btn btn-sm btn-icon btn-pure btn-default on-default button-remove"
                                                data-toggle="tooltip" data-original-title="Remove"><a onclick="return confirm('Are you really sure?')" href='#'><i class="icon-trash" aria-hidden="true"></i>
                                                </a></a>
                                        </td>
                                        </tr>
                                        <tr>
                                            <th>2</th>
                                            <td>Brother</td>
                                            <td>Donna Snider</td>
                                            <td>Graphic Designer</td>
                                            <td>Motion Graphics</td>
                                            <td>27 July</td>
                                            <td>2011/01/25</td>
                                            <td>
                                                <button class="btn btn-sm btn-icon btn-pure btn-default on-default button-remove"
                                                data-toggle="tooltip" data-original-title="Remove"><a onclick="return confirm('Are you really sure?')" href='#'><i class="icon-trash" aria-hidden="true"></i>
                                                </a></a>
                                        </td>
                                        </tr>
                                        <tr>
                                            <th>3</th>
                                            <td>Sister</td>
                                            <td>Rona Adequwu</td>
                                            <td>Graphic Designer</td>
                                            <td>Motion Graphics</td>
                                            <td>27 Oct.</td>
                                            <td>2011/01/25</td>
                                            <td>
                                                <button class="btn btn-sm btn-icon btn-pure btn-default on-default button-remove"
                                                data-toggle="tooltip" data-original-title="Remove"><a onclick="return confirm('Are you really sure?')" href='#'><i class="icon-trash" aria-hidden="true"></i>
                                                </a></a>
                                        </td>
                                        </tr>
                                        <tr>
                                            <th>4</th>
                                            <td>Sister</td>
                                            <td>Benita Adams</td>
                                            <td>Graphic Designer</td>
                                            <td>UI Graphics</td>
                                            <td>2 Dec</td>
                                            <td>2011/01/25</td>
                                            <td>
                                                <button class="btn btn-sm btn-icon btn-pure btn-default on-default button-remove"
                                                data-toggle="tooltip" data-original-title="Remove"><a onclick="return confirm('Are you really sure?')" href='#'><i class="icon-trash" aria-hidden="true"></i>
                                                </a></a>
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

@include('includes/footerr')
