<!-- Header -->
@include('admin.layouts.header')

@include('admin.layouts.sidenav')


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <!-- <h1 style="margin-left: 26%;"> -->
    <h1>
      Edit Category
    </h1>
  </section>
  <!-- Main content -->
  <section class="content">

    <div class="row">
      <div class="col-md-12">
        <div class="box box-warning"> 
          <form action="/admin/updatecategory" method="POST" >
            @csrf
            <input type = "hidden" name = "id" value = "{{ $cat[0]->id }}">

            <div class="box-body">
              <div class="form-group">
                <label>Category Name</label>
                <input type="text" class="form-control" name="categoryname" placeholder="Enter Website name" value="{{ $cat[0]->name }}">
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