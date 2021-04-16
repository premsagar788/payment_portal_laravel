<!-- Header -->
@include('admin.layouts.header')

@include('admin.layouts.sidenav')


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <!-- <h1 style="margin-left: 26%;"> -->
    <h1>
      Add New Category
    </h1>
  </section>
  <!-- Main content -->
  <section class="content">

    <div class="row">
      <!-- <div class="col-md-6" style="margin-left: 25%;"> -->
      <div class="col-md-12">
        <div class="box box-warning"> 
          <!-- <form role="form" action="insertProject" method="POST" enctype="multipart/form-data"> -->
          <form action="/admin/addcategory" method="POST" >
            @csrf
            <input type = "hidden" name = "admin_id" value = "{{ Auth::user()->id }}">

            <div class="box-body">
              <div class="form-group">
                <label>Category Name</label>
                <input type="text" class="form-control" name="categoryname" placeholder="Enter Category name" required>
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