<!-- Header -->
@include('admin.layouts.header')

@include('admin.layouts.sidenav')


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <!-- <h1 style="margin-left: 26%;"> -->
    <h1>
      Add New Package
    </h1>
  </section>
  <!-- Main content -->
  <section class="content">

    <div class="row">
      <!-- <div class="col-md-6" style="margin-left: 25%;"> -->
      <div class="col-md-12">
        <div class="box box-warning"> 
          <!-- <form role="form" action="insertProject" method="POST" enctype="multipart/form-data"> -->
          <form action="/admin/addpackage" method="POST" >
            @csrf
            <input type = "hidden" name = "admin_id" value = "{{ Auth::user()->id }}">

            <div class="box-body">
              <div class="col-md-6 col-lg-6 col-sm-12">
                <div class="form-group">
                  <label>Package Title</label>
                  <input type="text" class="form-control" name="packagetitle" placeholder="Enter Package title E.g, Basic Starter" required>
                </div>
              </div>

              <div class="col-md-6 col-lg-6 col-sm-12">
                <div class="form-group">
                  <label>Package Name</label>
                  <input type="text" class="form-control" name="packagename" placeholder="Enter Package name" required>
                </div>
              </div>

              <div class="col-md-6 col-lg-6 col-sm-12">
                <div class="form-group">
                  <label>Package Contact Number</label>
                  <input type="Number" class="form-control" name="package_contact_number" placeholder="Enter Package contact number" required>
                </div>
              </div>

              <div class="col-md-6 col-lg-6 col-sm-12">
                <div class="form-group">
                  <label>Package Link</label>
                  <input type="text" class="form-control" name="package_link" placeholder="Enter Package Discounted Price" required>
                </div>
              </div>

              <div class="col-md-6 col-lg-6 col-sm-12">
                <div class="form-group">
                  <label>Package Original Price</label>
                  <input type="text" class="form-control" name="packageoriginalprice" placeholder="Enter Package Original Price" required>
                </div>
              </div>

              <div class="col-md-6 col-lg-6 col-sm-12">
                <div class="form-group">
                  <label>Package Discounted Price</label>
                  <input type="text" class="form-control" name="packagediscountedprice" placeholder="Enter Package Discounted Price" required>
                </div>
              </div>



              <div class="col-md-12 col-lg-12 col-sm-12">
                <div class="form-group">
                  <label>Package Description</label>
                  <input type="text" class="form-control" name="packagedescription" placeholder="Enter Package description" required>
                </div>
              </div>

              <div class="col-md-6 col-lg-6 col-sm-12">
                <div class="form-group">
                  <label>Package Features</label>
                  <input type="text" class="form-control" name="package_features" placeholder="Enter Package Features" required>
                </div>
              </div>

              <div class="col-md-6 col-lg-6 col-sm-12">
                <div class="form-group">
                  <label>Package Category</label>
                  <select name="category" class="form-control" aria-label="Default select example" required>
                    <option selected="" disabled="">Select a category</option>
                    @foreach($category as $cat)
                      <option value="{{ $cat->name }}">{{ $cat->name }}</option>
                    @endforeach
                    
                  </select>
                </div>
              </div>
            </div>
            <div class="box-footer">
              <div class="col-md-12 col-lg-12 col-sm-12">
                <button type="submit" class="btn btn-primary">Add</button>
              </div>
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