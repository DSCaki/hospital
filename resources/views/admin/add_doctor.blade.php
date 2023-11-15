<!DOCTYPE html>
<html lang="en">
  <head>

    @include('admin.css')

    </head>
  <body>

    <div class="container-scroller">

      <!-- partial:partials/_sidebar.html -->

      @include('admin.sidebar')

      <!-- partial -->

      @include('admin.navbar')
        <!-- partial -->

        <div class="main-panel">
            <div class="content-wrapper">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h3 class="card-title">Add Doctor</h3>


                  @if (session()->has('message'))

                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                      x
                    </button>
                    {{session()->get('message')}}
                  </div>

                  @endif

                    <form action="{{url('upload_doctor')}}" method="POST" enctype="multipart/form-data" class="forms-sample">

                        @csrf

                      <div class="form-group">
                        <label for="exampleInputName1">Doctor Name</label>
                        <input type="text" name="name" class="form-control bg-black text-white rounded"  placeholder="Name" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Phone</label>
                        <input type="number" name="number" class="form-control bg-black text-white rounded" placeholder="phone" required>
                      </div>
                      <div class="form-group">
                        <label>Speciality</label>
                        <select name="speciality" class="js-example-basic-single  bg-black text-white rounded" style="width:100%" required>
                          <option value="skin">Skin</option>
                          <option value="heart">Heart</option>
                          <option value="eye">eye</option>
                          <option value="nose">Nose</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputCity1">Room No</label>
                        <input type="text" name="room" class="form-control bg-black text-white rounded" placeholder="No" required>
                      </div>
                      <div class="form-group">
                        <label>Doctor Image</label>
                            <div class="input-group col-xs-12">
                                <input type="file" name="file" class="form-control file-upload-info bg-black rounded" required>
                            </div>
                      </div>
                      <button type="submit" class="btn btn-primary me-2 mdi mdi-account-plus">Add</button>
                      <button type="reset" class="btn btn-danger mdi mdi-autorenew">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
        </div>



    <!-- container-scroller -->
    <!-- plugins:js -->

    @include('admin.script')

    <!-- End custom js for this page -->
  </body>
</html>
