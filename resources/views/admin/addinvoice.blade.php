<!-- Header -->
@include('admin.layouts.header')

@include('admin.layouts.sidenav')


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <!-- <h1 style="margin-left: 26%;"> -->
    <h1>
      Add New Client
    </h1>
  </section>
  <!-- Main content -->
  <section class="content">

    <div class="row">
      <!-- <div class="col-md-6" style="margin-left: 25%;"> -->
      <div class="col-md-12">
        <div class="box box-warning"> 
          <!-- <form role="form" action="insertProject" method="POST" enctype="multipart/form-data"> -->
          <form action="/admin/addinvoice" method="POST" >
            @csrf
            <input type = "hidden" name = "client_id" value = "{{ Auth::user()->id }}">

            <div class="box-body">
              <div class="col-md-6 col-lg-6 col-sm-12">
                <div class="form-group">
                  <label>Client Name</label>
                  <select class="form-control" name="client">
                    <option disabled="">Select Client</option>
                    @foreach($users as $u)
                    <option value="{{ $u->stripe_id }}">{{ $u->name }}</option>
                    @endforeach
                  </select>
                </div>
              </div>

              <div class="col-md-6 col-lg-6 col-sm-12">
                <div class="form-group">
                  <label>Name on Card</label>
                  <input type="text" class="form-control" name="cardname" placeholder="Enter Name" required>
                </div>
              </div>

              <div class="col-md-6 col-lg-6 col-sm-12">
                <div class="form-group">
                  <label>Card Number</label>
                  <input type="number" class="form-control" name="cardnumber" maxlength="16" placeholder="Enter Card Number" required>
                </div>
              </div>

              <div class="col-md-3 col-lg-3 col-sm-12">
                <div class="form-group">
                  <label>CVV</label>
                  <input type="text" class="form-control" name="cvv" minlength="1" maxlength="3" placeholder="Enter CVV" required>
                </div>
              </div>

              <div class="col-md-3 col-lg-3 col-sm-4">
                <div class="form-group">
                  <!-- <label>Expiration</label> -->

                  <div class="col-md-6 col-lg-6 col-sm-12">
                    <div class="form-group">
                      <label>Month</label>
                      
                      <input type="text" id="exp" class="form-control" name="expmonth" placeholder="Month"  maxlength="2"> 

                    </div>
                  </div>

                  <div class="col-md-6 col-lg-6 col-sm-12">
                    <div class="form-group">
                      <label>Year</label>
                      
                      <input type="text" id="exp" class="form-control" name="expyear" placeholder="Year" maxlength="4"> 

                    </div>
                  </div>
                  

                </div>
              </div>

              <div class="col-md-6 col-lg-6 col-sm-12">
                <div class="form-group">
                  <label>Project Amount</label>
                  <input type="number" class="form-control" name="projectamount" maxlength="16" placeholder="Enter Project Amount" required>
                </div>
              </div>

              <div class="col-md-6 col-lg-6 col-sm-12">
                <div class="form-group">
                  <label>Project Description</label>
                  <input type="text" class="form-control" name="projectdescription" placeholder="Enter Project Description" required>
                </div>
              </div>

              <div class="col-md-6 col-lg-6 col-sm-12">
                <div class="form-group">
                  <label>Currency</label>
                    <select class="form-control" name="currency">
                    <option disabled="">Select Client</option>
                    <option>USD</option>
                    <option>EUR</option>
                    <option>GBP</option>
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