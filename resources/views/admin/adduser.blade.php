<!-- Header -->
@include('admin.layouts.header')

@include('admin.layouts.sidenav')


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <!-- <h1 style="margin-left: 26%;"> -->
    <h1>
      Add New User
    </h1>
  </section>
  <!-- Main content -->
  <section class="content">
    
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif

    @if (session('status1'))
    <div class="alert alert-danger">
        {{ session('status1') }}
    </div>
    @endif

    <div class="row">
      <!-- <div class="col-md-6" style="margin-left: 25%;"> -->
      <div class="col-md-12">
        <div class="box box-warning"> 
          <!-- <form role="form" action="insertProject" method="POST" enctype="multipart/form-data"> -->
          <form action="/admin/adduser" method="POST" >
            @csrf
            <input type = "hidden" name = "admin_id" value = "{{ Auth::user()->id }}">

            <div class="box-body">

              <div class="col-md-6 col-lg-6 col-sm-12">
                <div class="form-group">
                  <label>Full Name</label>
                  <input type="text" class="form-control" name="name" placeholder="Enter your Full name" required>
                </div>
              </div>

              <div class="col-md-6 col-lg-6 col-sm-12">
                <div class="form-group">
                  <label>Email</label>
                  <input type="email" class="form-control" name="email" placeholder="Enter your Email" required>
                </div>
              </div>

              <div class="col-md-3 col-lg-3 col-sm-6">
                <div class="form-group">
                  <label>Brand</label>
                  <select name="currency" class="form-control" aria-label="Default select example">
                    <option value="" disabled="">Select Currency</option>
                    <option value="USD">USD</option>
                    <option value="GBP">GBP</option>
                    <option value="EUR">EUR</option>
                  </select>
                </div>
              </div>

              <div class="col-md-3 col-lg-3 col-sm-6">
                <div class="form-group">
                  <label>Project Amount</label>
                  <input type="number" class="form-control" name="amount" placeholder="Enter your Phone number" required>
                </div>
              </div>

              <div class="col-md-6 col-lg-6 col-sm-12">
                <div class="form-group">
                  <label>Project Description</label>
                  <input type="text" class="form-control" name="project_description" placeholder="Enter project description" required>
                </div>
              </div>

              <div class="col-md-6 col-lg-6 col-sm-12">
                <div class="form-group">
                  <label>Phone</label>
                  <input type="number" class="form-control" name="phone" placeholder="Enter your Phone number" required>
                </div>
              </div>

              <div class="col-md-6 col-lg-6 col-sm-12">
                <div class="form-group">
                  <label>Brand</label>
                  <select name="brand" class="form-control" aria-label="Default select example">
                    <option value="" disabled="">Select a Brand</option>
                    <option value="Crafty Webz">Crafty Webz</option>
                    <option value="Logo Perficient">Logo Perficient</option>
                    <option value="Web Perficient">Web Perficient</option>
                  </select>
                </div>
              </div>
              
            </div>

            <div class="box-footer">
              <button type="submit" class="btn btn-primary">Add</button>
            </div>
          </form>
        </div>

      </div>
    </div>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Footer -->
@include('admin.layouts.footer')

</body>
</html>