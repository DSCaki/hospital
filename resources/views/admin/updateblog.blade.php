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
                    <h3 class="card-title">Add Blog</h3>


                  @if (session()->has('message'))

                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                      x
                    </button>
                    {{session()->get('message')}}
                  </div>

                  @endif

                    <form action="{{url('editeblog', $data->id)}}" method="POST" enctype="multipart/form-data" class="forms-sample">

                        @csrf

                        <div class="form-group">
                            <label for="exampleInputName1">Author</label>
                            <input type="text" name="name" value="{{$data->user}}" class="form-control bg-black text-white rounded"   required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">Date</label>
                            <input type="date" name="date" value="{{$data->date}}" class="form-control bg-black text-white rounded" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputCity1">Title</label>
                            <input type="text" name="title" value="{{$data->title}}" class="form-control bg-black text-white rounded"  required>
                        </div>
                        <div class="form-group">
                            <label for="exampleTextarea1">News</label>
                            <textarea name="news" class="form-control  bg-black text-white rounded" rows="6">
                                {{$data->news}}
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label>Blog Image</label>
                            <img height="200" width="180" style="border-radius: 10px; display:inline-block" src="blogimage/{{$data->image}}" >
                                <div class="input-group col-xs-12">
                                    <input type="file" name="file" class="form-control file-upload-info bg-black rounded">
                                </div>
                        </div>

                        <button type="submit" class="btn btn-primary mdi mdi-upload me-2">Upload</button>
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
