<!DOCTYPE html>
<html>
@include('admin-dashboard.partials.head')
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  @include('admin-dashboard.partials.top-nav')
  <!-- Left side column. contains the logo and sidebar -->
  @include('admin-dashboard.partials.side-bar-navigation')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
     @include('admin-dashboard.partials.analytics')
       <!-- Main row -->
      @include('admin-dashboard.partials.main-content')
      <!-- /.row (main row) -->
    </section>
    <!-- /.content -->
    
  </div>
</div>
<!-- ./wrapper -->

@include('admin-dashboard.partials.js-libraries')
</body>
</html>
