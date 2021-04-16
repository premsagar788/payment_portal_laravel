<!-- Header -->
@include('admin.layouts.header')

@include('admin.layouts.sidenav')


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      All Users
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    </ol>
  </section>

  @if(session()->has('message'))
    <div class="container-fluid">
      <div class="alert alert-success">
        {{ session()->get('message') }}
      </div>
    </div>
  @endif

  @if(session()->has('message2'))
    <div class="container-fluid">
      <div class="alert alert-success">
        {{ session()->get('message2') }}
      </div>
    </div>
  @endif

  @if(session()->has('message3'))
    <div class="container-fluid">
      <div class="alert alert-danger">
        {{ session()->get('message3') }}
      </div>
    </div>
  @endif

  <!-- Main content -->
  <section class="content">
    <div class="row">
     
      <div class="col-xs-12">
        <div class="box box-warning">
          <div class="box-body">
            <table ID="example2" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
 				          <th>Email</th>
                  <th>Stripe Id</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                
                @foreach($users as $user)
                <tr>
                  <td>{{ $user->id }}</td>
                  <td>{{ $user->name }}</td>
                  <td>{{ $user->email }}</td>
                  <td>{{ $user->stripe_id }}</td>
                  <td>
                    <a href="{{ url('/') }}/admin/edituser/{{ $user->id }}" style="color: white;">
                      <button class="btn btn-primary">Edit</button>
                    </a>
                    <a href="{{ url('/') }}/admin/deleteuser/{{ $user->id }}" style="color: white;">
                      <button class="btn btn-danger newMargin">Delete</button>
                    </a>
                  </td>
                </tr>
                @endforeach

              </tbody>
            </table>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->


@include('admin.layouts.footer')


<!-- jQuery UI 1.11.4 -->
<script src="{{ url('bower_components/jquery-ui/jquery-ui.min.js') }}"></script>

<!-- Morris.js charts -->
<script src="{{ url('bower_components/raphael/raphael.min.js') }}"></script>
<script src="{{ url('bower_components/morris.js/morris.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ url('bower_components/jquery-sparkline/dist/jquery.sparkline.min.js') }}"></script>
<!-- jvectormap -->
<script src="{{ url('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script src="{{ url('plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ url('bower_components/jquery-knob/dist/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ url('bower_components/moment/min/moment.min.js') }}"></script>
<script src="{{ url('bower_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
<!-- datepicker -->
<script src="{{ url('bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{ url('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ url('dist/js/pages/dashboard.js') }}"></script>

</body>
</html>