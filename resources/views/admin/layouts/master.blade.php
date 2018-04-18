<!DOCTYPE html>
<html>
  <head>
    <!-- meta -->
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta content="" name="description" />
    <meta content="" name="author" />

    <!-- pngs -->
    <link rel="apple-touch-icon" href="{{ asset('assets/theme/pages/ico/60.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/theme/pages/ico/76.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets/theme/pages/ico/120.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('assets/theme/pages/ico/152.png') }}">

    <!-- pavicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/theme/favicon.ico') }}" />
    
    <!-- css -->
    {{ Html::style('assets/theme/assets/plugins/pace/pace-theme-flash.css') }}
    <!-- <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" /> -->
    {{ Html::style('assets/theme/assets/plugins/bootstrap/css/bootstrap.min.css') }}
    <!-- <link href="assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" /> -->
    {{ Html::style('assets/theme/assets/plugins/font-awesome/css/font-awesome.css') }}
    <!-- <link href="assets/plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css" media="screen" /> -->
    {{ Html::style('assets/theme/assets/plugins/jquery-scrollbar/jquery.scrollbar.css') }}
    <!-- <link href="assets/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" media="screen" /> -->
    {{ Html::style('assets/theme/assets/plugins/select2/css/select2.min.css') }}
    <!-- <link href="assets/plugins/switchery/css/switchery.min.css" rel="stylesheet" type="text/css" media="screen" /> -->
    {{ Html::style('assets/theme/assets/plugins/switchery/css/switchery.min.css') }}

    <!-- datatables -->
    <!-- <link href="assets/plugins/jquery-datatable/media/css/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css" /> -->
    {{ Html::style('assets/theme/assets/plugins/jquery-datatable/media/css/dataTables.bootstrap.min.css') }}
    <!-- <link href="assets/plugins/jquery-datatable/extensions/FixedColumns/css/dataTables.fixedColumns.min.css" rel="stylesheet" type="text/css" /> -->
    {{ Html::style('assets/theme/assets/plugins/jquery-datatable/extensions/FixedColumns/css/dataTables.fixedColumns.min.css') }}
    <!-- <link href="assets/plugins/datatables-responsive/css/datatables.responsive.css" rel="stylesheet" type="text/css" media="screen" /> -->
    {{ Html::style('assets/theme/assets/plugins/datatables-responsive/css/datatables.responsive.css') }}

    <!-- <link href="assets/plugins/nvd3/nv.d3.min.css" rel="stylesheet" type="text/css" media="screen" /> -->
    {{ Html::style('assets/theme/assets/plugins/nvd3/nv.d3.min.css') }}
    <!-- <link href="assets/plugins/rickshaw/rickshaw.min.css" rel="stylesheet" type="text/css" /> -->
    {{ Html::style('assets/theme/assets/plugins/rickshaw/rickshaw.min.css') }}
    <!-- <link href="assets/plugins/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet" type="text/css" media="screen"> -->
    {{ Html::style('assets/theme/assets/plugins/bootstrap-datepicker/css/datepicker3.css') }}
    <!-- <link href="assets/plugins/mapplic/css/mapplic.css" rel="stylesheet" type="text/css" /> -->
    {{ Html::style('assets/theme/assets/plugins/mapplic/css/mapplic.css') }}
    <!-- <link href="assets/css/dashboard.widgets.css" rel="stylesheet" type="text/css" media="screen" /> -->
    {{ Html::style('assets/theme/assets/css/dashboard.widgets.css') }}
    <!-- <link href="pages/css/pages-icons.css" rel="stylesheet" type="text/css"> -->
    {{ Html::style('assets/theme/pages/css/pages-icons.css') }}
    <!-- <link class="main-stylesheet" href="pages/css/themes/light.css" rel="stylesheet" type="text/css" /> -->
    {{ Html::style('assets/theme/pages/css/themes/light.css') }}
    <!-- jquery confirm -->
    {{ Html::style('assets/js/jquery-confirm-master/dist/jquery-confirm.min.css') }}
  </head>
  <body class="fixed-header dashboard menu-pin">
    <!-- BEGIN SIDEBPANEL-->
    <nav class="page-sidebar" data-pages="sidebar">
      <!-- sidebar.blade.php -->
      @include('admin.layouts.sidebar')
    </nav>
    <!-- END SIDEBAR -->
    <!-- END SIDEBPANEL-->

    <!-- START PAGE-CONTAINER -->
    <div class="page-container ">
      
      <!-- START HEADER -->
      <div class="header ">
        <!-- header.blade.php -->
        @include('admin.layouts.header')
      </div>
      <!-- END HEADER -->

      <!-- START PAGE CONTENT WRAPPER -->
      <div class="page-content-wrapper ">
        <!-- content.blade.php -->
        @yield('content')        

        <!-- copyright.blade.php -->
        @include('admin.layouts.copyright')
      </div>
      <!-- END PAGE CONTENT WRAPPER -->

    </div>
    <!-- END PAGE CONTAINER -->

    <!--START QUICKVIEW -->
    <div id="quickview" class="quickview-wrapper" data-pages="quickview">
      <!-- quickview.blade.php -->
      @include('admin.layouts.quickview')
    </div>
    <!-- END QUICKVIEW-->

    <!-- START OVERLAY -->
    <div class="overlay hide" data-pages="search">
      <!-- overlay.blade.php -->
      @include('admin.layouts.overlay')
    </div>
    <!-- END OVERLAY -->

    <!-- BEGIN VENDOR JS -->
    <!-- <script src="assets/plugins/feather-icons/feather.min.js" type="text/javascript"></script> -->
    {{ Html::script('assets/theme/assets/plugins/feather-icons/feather.min.js') }}
    <!-- <script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script> -->
    {{ Html::script('assets/theme/assets/plugins/pace/pace.min.js') }}
    <!-- <script src="assets/plugins/jquery/jquery-1.11.1.min.js" type="text/javascript"></script> -->
    {{ Html::script('assets/theme/assets/plugins/jquery/jquery-1.11.1.min.js') }}
    <!-- <script src="assets/plugins/modernizr.custom.js" type="text/javascript"></script> -->
    {{ Html::script('assets/theme/assets/plugins/modernizr.custom.js') }}
    <!-- <script src="assets/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script> -->
    {{ Html::script('assets/theme/assets/plugins/jquery-ui/jquery-ui.min.js') }}
    <!-- <script src="assets/plugins/tether/js/tether.min.js" type="text/javascript"></script> -->
    {{ Html::script('assets/theme/assets/plugins/tether/js/tether.min.js') }}
    <!-- <script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script> -->
    {{ Html::script('assets/theme/assets/plugins/bootstrap/js/bootstrap.min.js') }}
    <!-- <script src="assets/plugins/jquery/jquery-easy.js" type="text/javascript"></script> -->
    {{ Html::script('assets/theme/assets/plugins/jquery/jquery-easy.js') }}
    <!-- <script src="assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script> -->
    {{ Html::script('assets/theme/assets/plugins/jquery-unveil/jquery.unveil.min.js') }}
    <!-- <script src="assets/plugins/jquery-ios-list/jquery.ioslist.min.js" type="text/javascript"></script> -->
    {{ Html::script('assets/theme/assets/plugins/jquery-ios-list/jquery.ioslist.min.js') }}
    <!-- <script src="assets/plugins/jquery-actual/jquery.actual.min.js"></script> -->
    {{ Html::script('assets/theme/assets/plugins/jquery-actual/jquery.actual.min.js') }}
    <!-- <script src="assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js"></script> -->
    {{ Html::script('assets/theme/assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js') }}
    <!-- <script type="text/javascript" src="assets/plugins/select2/js/select2.full.min.js"></script> -->
    {{ Html::script('assets/theme/assets/plugins/select2/js/select2.full.min.js') }}
    <!-- <script type="text/javascript" src="assets/plugins/classie/classie.js"></script> -->
    {{ Html::script('assets/theme/assets/plugins/classie/classie.js') }}
    <!-- <script src="assets/plugins/switchery/js/switchery.min.js" type="text/javascript"></script> -->
    {{ Html::script('assets/theme/assets/plugins/switchery/js/switchery.min.js') }}
    {{ Html::script('assets/theme/assets/plugins/jquery-validation/js/jquery.validate.min.js') }}
    {{ Html::script('assets/theme/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js') }}
    <!-- <script src="assets/plugins/nvd3/lib/d3.v3.js" type="text/javascript"></script> -->
    {{ Html::script('assets/theme/assets/plugins/nvd3/lib/d3.v3.js') }}
    <!-- <script src="assets/plugins/nvd3/nv.d3.min.js" type="text/javascript"></script> -->
    {{ Html::script('assets/theme/assets/plugins/nvd3/nv.d3.min.js') }}
    <!-- <script src="assets/plugins/nvd3/src/utils.js" type="text/javascript"></script> -->
    {{ Html::script('assets/theme/assets/plugins/nvd3/src/utils.js') }}
    <!-- <script src="assets/plugins/nvd3/src/tooltip.js" type="text/javascript"></script> -->
    {{ Html::script('assets/theme/assets/plugins/nvd3/src/tooltip.js') }}
    <!-- <script src="assets/plugins/nvd3/src/interactiveLayer.js" type="text/javascript"></script> -->
    {{ Html::script('assets/theme/assets/plugins/nvd3/src/interactiveLayer.js') }}
    <!-- <script src="assets/plugins/nvd3/src/models/axis.js" type="text/javascript"></script> -->
    {{ Html::script('assets/theme/assets/plugins/nvd3/src/models/axis.js') }}
    <!-- <script src="assets/plugins/nvd3/src/models/line.js" type="text/javascript"></script> -->
    {{ Html::script('assets/theme/assets/plugins/nvd3/src/models/line.js') }}
    <!-- <script src="assets/plugins/nvd3/src/models/lineWithFocusChart.js" type="text/javascript"></script> -->
    {{ Html::script('assets/theme/assets/plugins/nvd3/src/models/lineWithFocusChart.js') }}
    <!-- <script src="assets/plugins/rickshaw/rickshaw.min.js"></script> -->
    {{ Html::script('assets/theme/assets/plugins/rickshaw/rickshaw.min.js') }}
    <!-- <script src="assets/plugins/mapplic/js/hammer.js"></script> -->
    {{ Html::script('assets/theme/assets/plugins/mapplic/js/hammer.js') }}
    <!-- <script src="assets/plugins/mapplic/js/jquery.mousewheel.js"></script> -->
    {{ Html::script('assets/theme/assets/plugins/mapplic/js/jquery.mousewheel.js') }}
    <!-- <script src="assets/plugins/mapplic/js/mapplic.js"></script> -->
    {{ Html::script('assets/theme/assets/plugins/mapplic/js/mapplic.js') }}
    <!-- <script src="assets/js/dashboard.js" type="text/javascript"></script> -->
    {{ Html::script('assets/theme/assets/js/dashboard.js') }}
    <!-- END VENDOR JS -->
    <!-- BEGIN CORE TEMPLATE JS -->
    <!-- <script src="assets/plugins/jquery-datatable/media/js/jquery.dataTables.min.js" type="text/javascript"></script> -->
    {{ Html::script('assets/theme/assets/plugins/jquery-datatable/media/js/jquery.dataTables.min.js') }}
    <!-- <script src="assets/plugins/jquery-datatable/extensions/TableTools/js/dataTables.tableTools.min.js" type="text/javascript"></script> -->
    {{ Html::script('assets/theme/assets/plugins/jquery-datatable/extensions/TableTools/js/dataTables.tableTools.min.js') }}
    <!-- <script src="assets/plugins/jquery-datatable/media/js/dataTables.bootstrap.js" type="text/javascript"></script> -->
    {{ Html::script('assets/theme/assets/plugins/jquery-datatable/media/js/dataTables.bootstrap.js') }}
    <!-- <script src="assets/plugins/jquery-datatable/media/js/dataTables.bootstrap.js" type="text/javascript"></script> -->
    {{ Html::script('assets/theme/assets/plugins/jquery-datatable/extensions/Bootstrap/jquery-datatable-bootstrap.js') }}
    <!-- <script src="assets/plugins/jquery-datatable/extensions/Bootstrap/jquery-datatable-bootstrap.js" type="text/javascript"></script> -->
    {{ Html::script('assets/theme/assets/plugins/jquery-datatable/extensions/Bootstrap/jquery-datatable-bootstrap.js') }}
    <!-- <script type="text/javascript" src="assets/plugins/datatables-responsive/js/datatables.responsive.js"></script> -->
    {{ Html::script('assets/theme/assets/plugins/datatables-responsive/js/datatables.responsive.js') }}
    <!-- <script type="text/javascript" src="assets/plugins/datatables-responsive/js/lodash.min.js"></script> -->
    {{ Html::script('assets/theme/assets/plugins/datatables-responsive/js/lodash.min.js') }}
    <!-- <script src="pages/js/pages.min.js"></script> -->
    {{ Html::script('assets/theme/pages/js/pages.min.js') }}
    <!-- END CORE TEMPLATE JS -->
    <!-- BEGIN PAGE LEVEL JS -->
    <!-- <script src="assets/js/dashboard.js" type="text/javascript"></script> -->
    {{ Html::script('assets/theme/assets/js/dashboard.js') }}
    {{ Html::script('assets/theme/assets/js/datatables.js') }}
    {{ Html::script('assets/theme/assets/js/form_layouts.js') }}
    <!-- <script src="assets/js/scripts.js" type="text/javascript"></script> -->
    {{ Html::script('assets/theme/assets/js/scripts.js') }}
    <!-- END PAGE LEVEL JS -->
    <!-- jquery confirm -->
    {{ Html::script('assets/js/jquery-confirm-master/dist/jquery-confirm.min.js') }}
    @yield('scripts')
  </body>
</html>