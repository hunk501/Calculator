<!DOCTYPE html>
<html lang="en">
<head>
	<!-- HEADER SECTION -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Compreline</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{ asset('vendor/metisMenu/metisMenu.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('dist/css/sb-admin-2.css') }}" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{{ asset('vendor/morrisjs/morris.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ asset('vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

    <!-- DataTables CSS -->
    <link href="{{ asset('vendor/datatables-plugins/dataTables.bootstrap.css') }}" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="{{ asset('vendor/datatables-responsive/dataTables.responsive.css') }}" rel="stylesheet">

    <!-- jQuery -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]--> 

    <!-- Date Picker -->
    <!-- <link href="{{ asset('/assets/css/bootstrap.css') }}" rel="stylesheet"> -->
    <link href="{{ asset('css/datepicker.css') }}" rel="stylesheet">

    <link rel="icon" href="{{ asset('css/logoico.ico') }}"/>
    <base href=""/>

    <style>
        .help-block {
            color: #e61009;
            font-size: 9pt;
        }
    </style>

    <!-- /HEADER SECTION -->
</head>
<body>	

    <div id="wrapper">
		
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">SB Admin v2.0</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">                
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="{{ url('/auth/logout') }}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">               
                        <li>
                            <a href="{{ url('account') }}"><i class="fa fa-dashboard fa-fw"></i> Main Menu</a>
                        </li>
                        <li><a href="{{ url('/pr') }}"><i class="fa fa-gears fa-fw"></i> PR</a></li>
                        <li><a href="{{ url('/ir') }}"><i class="fa fa-laptop fa-fw"></i> IR</a></li>
                        <li><a href="{{ url('/policy_ledger') }}"><i class="fa fa-list-alt fa-fw"></i> Ledger</a></li>
                        <li><a href="{{ url('/cm') }}"><i class="fa fa-fax fa-fw"></i> Claims Monitoring</a></li>
                        <li><a href="{{ url('/pr_bounce') }}"><i class="fa fa-money fa-fw"></i> Bounce Cheque</a></li>
                        <li>
                            <a href="#"><i class="fa fa-th-list fa-fw"></i> Policy<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ url('/policy') }}">Motor Schedule</a>
                                </li>
                                <!--
                                <li>
                                    <a href="{{ url('/policy_ledger') }}">Ledger</a>
                                </li>
                                -->
                                <li>
                                    <a href="{{ url('/policy_daily_transaction') }}">Daily Transaction</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        <!-- /Navigation --> 
		
		<!-- Page Wrapper -->
		<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Compreline</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-comments fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">Policy</div>
                                    <div>Policy</div>
                                </div>
                            </div>
                        </div>
                        <a href="{{ url('/policy') }}">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tasks fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">IR</div>
                                    <div>IR</div>
                                </div>
                            </div>
                        </div>
                        <a href="{{ url('/ir') }}">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-shopping-cart fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">Unpaid</div>
                                    <div>Unpaid Policy</div>
                                </div>
                            </div>
                        </div>
                        <a href="{{ url('/policy') }}">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-support fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">Partial</div>
                                    <div>Partial Payment</div>
                                </div>
                            </div>
                        </div>
                        <a href="{{ url('/policy') }}">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div><!-- /.row -->                                                            
            
            <div class="row">
            	<div class="class="col-lg-12">
            		<img alt="" src="" style="width: 100%;height: 230px;">
            	</div>
            </div>

            <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a href="{{ url('policy') }}"><i class="fa fa-arrow-left"></i> Back</a>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                                
                                <div class="form-group">
                                    <label>Policy No.</label>
                                    <input type="text" name="policy_no" class="form-control">
                                    @if($errors->has('policy_no'))
                                    <p class="help-block">{{ $errors->first('policy_no') }}</p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Class of Insurance</label>
                                    <input type="text" name="class_insurance" class="form-control">
                                    @if($errors->has('class_insurance'))
                                    <p class="help-block">{{ $errors->first('class_insurance') }}</p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Date Issue</label>
                                    <input type="text" name="date_issue" class="datepicker form-control" placeholder="YYYY-MM-DD" class="datepicker form-control" readonly="true" style="cursor: pointer;background-color: rgba(255, 255, 255, 0.15);">                                            
                                    @if($errors->has('date_issue'))
                                    <p class="help-block">{{ $errors->first('date_issue') }}</p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Agency/Broker</label>
                                    <input type="text" name="agency_broker" class="form-control">                                            
                                    @if($errors->has('agency_broker'))
                                    <p class="help-block">{{ $errors->first('agency_broker') }}</p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Insured</label>
                                    <input type="text" name="assured_name" class="form-control">                                            
                                    @if($errors->has('assured_name'))
                                    <p class="help-block">{{ $errors->first('assured_name') }}</p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Contact No.</label>
                                    <input type="text" name="contact_no" class="form-control">                                            
                                    @if($errors->has('contact_no'))
                                    <p class="help-block">{{ $errors->first('contact_no') }}</p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" name="address" class="form-control">                                            
                                    @if($errors->has('address'))
                                    <p class="help-block">{{ $errors->first('address') }}</p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Inception Date</label>
                                    <input type="text" name="inception_date" class="datepicker form-control" placeholder="YYYY-MM-DD" readonly="true" style="cursor: pointer;background-color: rgba(255, 255, 255, 0.15);">                                            
                                    @if($errors->has('inception_date'))
                                    <p class="help-block">{{ $errors->first('inception_date') }}</p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Year Make Model</label>
                                    <input type="text" name="year_model" class="form-control">                                            
                                    @if($errors->has('year_model'))
                                    <p class="help-block">{{ $errors->first('year_model') }}</p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Plate Number</label>
                                    <input type="text" name="plate_number" class="form-control">                                            
                                    @if($errors->has('plate_number'))
                                    <p class="help-block">{{ $errors->first('plate_number') }}</p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Serial Chassis</label>
                                    <input type="text" name="serial_chassis" class="form-control">                                            
                                    @if($errors->has('serial_chassis'))
                                    <p class="help-block">{{ $errors->first('serial_chassis') }}</p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Motor Engine</label>
                                    <input type="text" name="motor_engine" class="form-control">                                            
                                    @if($errors->has('motor_engine'))
                                    <p class="help-block">{{ $errors->first('motor_engine') }}</p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Seating Capacity</label>
                                    <input type="text" name="seating_capacity" class="number_only form-control">                                            
                                    @if($errors->has('seating_capacity'))
                                    <p class="help-block">{{ $errors->first('seating_capacity') }}</p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Color</label>
                                    <input type="text" name="color" class="form-control">                                            
                                    @if($errors->has('color'))
                                    <p class="help-block">{{ $errors->first('color') }}</p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Value</label>
                                    <input type="text" name="value" class="number_only form-control">                                            
                                    @if($errors->has('value'))
                                    <p class="help-block">{{ $errors->first('value') }}</p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Deductible</label>
                                    <input type="text" name="deductible" class="form-control">                                            
                                    @if($errors->has('deductible'))
                                    <p class="help-block">{{ $errors->first('deductible') }}</p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Authorized Repair Limit</label>
                                    <input type="text" name="authorized_repair_limit" class="form-control">                                            
                                    @if($errors->has('authorized_repair_limit'))
                                    <p class="help-block">{{ $errors->first('authorized_repair_limit') }}</p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Towing</label>
                                    <input type="text" name="towing" class="form-control">                                            
                                    @if($errors->has('towing'))
                                    <p class="help-block">{{ $errors->first('towing') }}</p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Bodily Injured</label>
                                    <input type="text" name="bodily_injured" class="form-control">                                            
                                    @if($errors->has('bodily_injured'))
                                    <p class="help-block">{{ $errors->first('bodily_injured') }}</p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Property Damage</label>
                                    <input type="text" name="property_damage" class="form-control">                                            
                                    @if($errors->has('property_damage'))
                                    <p class="help-block">{{ $errors->first('property_damage') }}</p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Mortgagee</label>
                                    <input type="text" name="mortgagee" class="form-control">                                            
                                    @if($errors->has('mortgagee'))
                                    <p class="help-block">{{ $errors->first('mortgagee') }}</p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Act of Nature</label>
                                    <input type="text" name="act_of_nature" class="form-control">                                            
                                    @if($errors->has('act_of_nature'))
                                    <p class="help-block">{{ $errors->first('act_of_nature') }}</p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Personal Accident</label>
                                    <input type="text" name="personal_accident" class="form-control">                                            
                                    @if($errors->has('personal_accident'))
                                    <p class="help-block">{{ $errors->first('personal_accident') }}</p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Writing Code</label>
                                    <input type="text" name="writing_code" class="form-control">                                            
                                    @if($errors->has('writing_code'))
                                    <p class="help-block">{{ $errors->first('writing_code') }}</p>
                                    @endif
                                </div>                                
                                <p>
                                    <span><a id="add_file" style="cursor: pointer;"><i class="fa fa-plus"></i> File</a></span> &nbsp;&nbsp;&nbsp;
                                    <span><a id="remove_file" style="cursor: pointer;"><i class="fa fa-trash"></i> Remove</a></span>
                                </p>
                                <div id="file_div">
                                    <div class="form-group">
                                        <input type="file" name="uploaded_files[]" class="form-control">                                        
                                    </div>                                    
                                </div>
                                
                                <input type="submit" name="submit" value="Submit value" class="btn btn-primary">                                                                               
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            
        </div><!-- /Page Wrapper -->                
		
	</div>      

</div>



	<script>
    $(document).ready(function() {        
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>

	
    <!-- FOOTER SECTION  -->

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{ asset('vendor/metisMenu/metisMenu.min.js') }}"></script>

    <!-- Morris Charts JavaScript -->
    <script src="{{ asset('vendor/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('vendor/morrisjs/morris.min.js') }}"></script>
    <!-- <script src="{{ asset('data/morris-data.js') }}"></script> -->

    <!-- Custom Theme JavaScript -->
    <script src="{{ asset('dist/js/sb-admin-2.js') }}"></script>

    <!-- DataTables JavaScript -->
    <script src="{{ asset('vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables-plugins/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables-responsive/dataTables.responsive.js') }}"></script>

    <!-- Date picker -->
    <script type="text/javascript" src="{{ asset('js/bootstrap-datepicker.js') }}"></script>
        
    <!-- /FOOTER SECTION  -->
	
</body>
</html>