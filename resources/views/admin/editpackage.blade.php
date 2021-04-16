<!-- Header -->
@include('admin.layouts.header')

@include('admin.layouts.sidenav')


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <!-- <h1 style="margin-left: 26%;"> -->
    <h1>
      Edit Package
    </h1>
  </section>
  <!-- Main content -->
  <section class="content">

    <div class="row">
      <div class="col-md-12">
        <div class="box box-warning"> 
          <form action="/admin/updatepackage" method="POST" >
            @csrf
            <input type = "hidden" name = "id" value = "{{ $package[0]->id }}">
            <div class="box-body">
              <div class="col-md-6 col-lg-6 col-sm-12">
                <div class="form-group">
                  <label>Package Title</label>
                  <input type="text"  class="form-control" name="packagetitle" placeholder="Enter Package title E.g, Basic Starter" value="{{ $package[0]->package_title }}" required>
                </div>
              </div>

              <div class="col-md-6 col-lg-6 col-sm-12">
                <div class="form-group">
                  <label>Package Name</label>
                  <input type="text" class="form-control" name="packagename" placeholder="Enter Package name" value="{{ $package[0]->package_name }}" required>
                </div>
              </div>

              <div class="col-md-6 col-lg-6 col-sm-12">
                <div class="form-group">
                  <label>Package Contact Number</label>
                  <input type="Number" class="form-control" name="package_contact_number" placeholder="Enter Package contact number" value="{{ $package[0]->package_contact_number }}" required>
                </div>
              </div>

              <div class="col-md-6 col-lg-6 col-sm-12">
                <div class="form-group">
                  <label>Package Link</label>
                  <input type="text" class="form-control" name="package_link" placeholder="Enter Package Discounted Price" value="{{ $package[0]->package_link }}" required>
                </div>
              </div>

              <div class="col-md-6 col-lg-6 col-sm-12">
                <div class="form-group">
                  <label>Package Original Price</label>
                  <input type="text" class="form-control" name="packageoriginalprice" placeholder="Enter Package Original Price" value="{{ $package[0]->package_original_price }}" required>
                </div>
              </div>

              <div class="col-md-6 col-lg-6 col-sm-12">
                <div class="form-group">
                  <label>Package Discounted Price</label>
                  <input type="text" class="form-control" name="packagediscountedprice" placeholder="Enter Package Discounted Price" value="{{ $package[0]->package_discounted_price }}" required>
                </div>
              </div>

              <div class="col-md-12 col-lg-12 col-sm-12">
                <div class="form-group">
                  <label>Package Description</label>
                  <input type="text" class="form-control" name="packagedescription" placeholder="Enter Package description" value="{{ $package[0]->package_description }}" required>
                </div>
              </div>

              <div class="col-md-6 col-lg-6 col-sm-12">
                <div class="form-group">
                  <label>Package Features</label>
                  <input type="text" class="form-control" name="package_features" placeholder="Enter Package Features" value="{{ $package[0]->package_features }}" required >
                </div>
              </div>

              <div class="col-md-6 col-lg-6 col-sm-12">
                <div class="form-group">
                  <label>Package Category</label>
                  <select name="category" class="form-control" aria-label="Default select example" required>
                    <option value="{{ $package[0]->category_name }}" selected="" disabled="" >{{ $package[0]->category_name }}</option>

                    @foreach($category as $cat)
                      <option value="{{ $cat->name }}">{{ $cat->name }}</option>
                    @endforeach
                    
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