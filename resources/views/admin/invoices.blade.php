  <!-- Header -->
  @include('admin.layouts.header')

  @include('admin.layouts.sidenav')


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      All Websites
    </h1>
    <!-- <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    </ol> -->
  </section>

  @if(session()->has('message1'))
    <div class="container-fluid">
      <div class="alert alert-success alert-dismissible show" role="alert">
        {{ session()->get('message1') }}
      </div>
    </div>
  @endif

  @if(session()->has('message2'))
    <div class="container-fluid">
      <div class="alert alert-success alert-dismissible show" role="alert">
        {{ session()->get('message2') }}
      </div>
    </div>
  @endif

  @if(session()->has('message3'))
    <div class="container-fluid">
      <div class="alert alert-danger alert-dismissible show" role="alert">
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
                  <th>Invoice Name</th>
 				          <th>Invoice Date</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                
                @foreach($invoices as $invoice)
                <tr>
                  <td>{{ $invoice->id }}</td>
                  <td>{{ $invoice->name }}</td>
                  <td>{{ $invoice->url }}</td>
                  <td>
                    <a href="{{ url('/') }}/admin/editwebsite/{{ $invoice->id }}" style="color: white;">
                      <button class="btn btn-primary">Edit</button>
                    </a>
                    <a href="{{ url('/') }}/admin/deletewebsite/{{ $invoice->id }}" style="color: white;">
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

</body>
</html>