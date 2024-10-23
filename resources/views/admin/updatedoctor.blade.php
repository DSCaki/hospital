<!DOCTYPE html>
<html lang="en">
  <head>

      <style>
        .btn-check:checked + .btn {
            background-color: #0d6efd; /* Change this for 'checked' background color */
            color: white;
        }

        .btn-outline-success, .btn-outline-danger {
            width: 100px;
        }

        .btn-group label {
            margin-right: 30px; /* Space between the buttons */
        }

    </style>

    <base href="/public">
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
                    <h3 class="card-title">Update Doctor</h3>


                  @if (session()->has('message'))

                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                      x
                    </button>
                    {{session()->get('message')}}
                  </div>

                  @endif

                    <form action="{{url('editedoctor', $data->id)}}" method="POST" enctype="multipart/form-data" class="forms-sample">

                        @csrf

                      <div class="form-group">
                        <label for="exampleInputName1">Doctor Name</label>
                        <input type="text" name="name" value="{{$data->name}}" class="form-control bg-black text-white rounded"  placeholder="Name" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Phone</label>
                        <input type="number" name="number" value="{{$data->phone}}" class="form-control bg-black text-white rounded" placeholder="phone" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Speciality</label>
                        <input type="text" name="speciality" value="{{$data->speciality}}" class="form-control bg-black text-white rounded" placeholder="phone" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputCity1">Room No</label>
                        <input type="text" name="room" value="{{$data->room}}" class="form-control bg-black text-white rounded" placeholder="No" required>
                      </div>

                      <div class="form-group">
                          <label for="availability">Availability</label>
                          <div class="btn-group" role="group" aria-label="Availability" style="margin-top: 10px;">
                              <input type="radio" class="btn-check" id="available" name="availability" value="1" {{ $data->availability == 1 ? 'checked' : '' }}>
                              <label for="available" class="btn btn-outline-success">Available</label>

                              <input type="radio" class="btn-check" id="unavailable" name="availability" value="0" {{ $data->availability == 0 ? 'checked' : '' }}>
                              <label for="unavailable" class="btn btn-outline-danger">Unavailable</label>
                          </div>
                      </div>

                      <div class="form-group">
                        <label>Doctor Image</label>
                            <img height="180" width="180" style="border-radius: 50%; display:inline-block" src="doctorimage/{{$data->image}}" >
                            <div class="input-group col-xs-12">
                                <input type="file" name="file" class="form-control file-upload-info bg-black rounded" >
                            </div>
                      </div>
                      <button type="submit" class="btn btn-primary mdi mdi-upload me-2">Update</button>
                      <button type="reset" class="btn btn-dark mdi mdi-autorenew">Cancel</button>
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
