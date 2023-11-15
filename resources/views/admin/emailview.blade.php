<!DOCTYPE html>
<html lang="en">
  <head>

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
                    <h3 class="card-title">Mail Page</h3>



                    <form action="{{url('sendemail', $data->id)}}" method="POST" enctype="multipart/form-data" class="forms-sample">

                        @csrf

                      <div class="form-group">
                        <label for="exampleInputName1">Greeding</label>
                        <input type="text" name="greeting" class="form-control bg-black text-white rounded" value="From Medical-Care...." required>
                      </div>
                      <div class="form-group">
                        <label for="exampleTextarea1">Body</label>
                        <textarea name="body" class="form-control bg-black text-white rounded" rows="6">
                            Hello,
                            Thanks for your appointment.
                            Here is your Doctor Appointment Details.
                        </textarea>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Doctor Name</label>
                        <input type="text" name="name" value="{{$data->name}}" class="form-control bg-black text-white rounded" required >
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Room Number</label>
                        <input type="text" name="room"  class="form-control bg-black text-white rounded"  required >
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Appointment Date</label>
                        <input type="text" name="date" value="{{$data->date}}" class="form-control bg-black text-white rounded"  required >
                      </div>
                      <div class="form-group">
                        <label for="exampleInputCity1">Time<small style="color: rgb(238, 119, 7)">(Opening Time:09.00AM - 10.00PM)</small></label>
                        <input type="time" name="time" class="form-control bg-black text-white rounded"  required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputCity1">Action Text</label>
                        <input type="text" name="actiontext" class="form-control bg-black text-white rounded"  required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputCity1">Action URL</label>
                        <input type="text" name="actionturl" class="form-control bg-black text-white rounded" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputCity1">End Part</label>
                        <input type="text" name="endpart" value="Thank you so Much for Visit." class="form-control bg-black text-white rounded"  required>
                      </div>








                      <button type="submit" class="btn btn-primary mdi mdi-telegram me-2">Send Mail</button>
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

    <script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>

    <!-- End custom js for this page -->
  </body>
</html>
