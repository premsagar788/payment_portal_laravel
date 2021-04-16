<!-- Header -->
@include('admin.layouts.header')

@include('admin.layouts.sidenav')


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <!-- <h1 style="margin-left: 26%;"> -->
    <h1>
      Edit Website
    </h1>
  </section>
  <!-- Main content -->
  <section class="content">

    <div class="row">
      <!-- <div class="col-md-6" style="margin-left: 25%;"> -->
      <div class="col-md-12">
        <div class="box box-warning"> 
          <!-- <form role="form" action="insertProject" method="POST" enctype="multipart/form-data"> -->
          <form action="/admin/updatewebsite" method="POST" >
            @csrf
            <input type = "hidden" name = "id" value = "{{ $web[0]->id }}">

            <div class="box-body">
              <div class="form-group">
                <label>Website Name</label>
                <input type="text" class="form-control" name="webname" placeholder="Enter Website name" value="{{ $web[0]->name }}">
              </div>

              <div class="form-group">
                <label>Website Url</label>
                <input type="url" class="form-control" name="weburl" onblur="checkURL(this)" placeholder="Enter Website url" value="{{ $web[0]->url }}">
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

<script type="text/javascript">
  function checkURL (abc) {
    var string = abc.value;
    if (!~string.indexOf("http")) {
      string = "http://" + string;
    }
    abc.value = string;
    return abc
  }
</script>

</body>
</html>