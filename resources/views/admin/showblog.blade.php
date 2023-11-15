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

                    @if (session()->has('message'))

                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                      x
                    </button>
                    {{session()->get('message')}}
                  </div>

                  @endif

                  <div class="page-header">
                    <h3 class="page-title"> Blog Table</h3>
                  </div>
                    <div class="row">
                        <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                            <h4 class="card-title">Blog Details</h4>
                            <div class="table-responsive">
                                <table class="table">
                                <thead>
                                    <tr>
                                    <th style="color: aliceblue; font-size:14px">Picture</th>
                                    <th style="color: aliceblue; font-size:14px">Title</th>
                                    <th style="color: aliceblue; font-size:14px">News</th>
                                    <th style="color: aliceblue; font-size:14px">Post By</th>
                                    <th style="color: aliceblue; font-size:14px">Date</th>
                                    <th style="color: aliceblue; font-size:14px; text-align:center" colspan="2">Manage Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $blogs)

                                    <tr>
                                        <td style="width: 8rem;" class="py-1">
                                            <img style="width: 80px; height:80px; border-radius:8px" src="../blogimage/{{$blogs->image}}" />
                                        </td>
                                    <td style="width: 10rem; overflow: hidden; white-space: wrap;">{{$blogs->title}}</td>
                                    <td style="width: 25rem; overflow: hidden; white-space: wrap;">{{$blogs->news}}</td>
                                    <td>{{$blogs->user}}</td>
                                    <td>{{$blogs->date}}</td>
                                    <td>
                                        <a href="{{url('updateblog', $blogs->id)}}">
                                            <label style="cursor: pointer" class="badge badge-warning mdi mdi-border-color">
                                                Update
                                            </label>
                                        </a>
                                    </td>
                                    <td>
                                        <a onclick="return confirm('Are you sure to delete this?')"
                                            href="{{url('deleteblog', $blogs->id)}}">
                                            <label style="cursor: pointer" class="badge badge-danger mdi mdi-delete">
                                                Delete
                                            </label>
                                        </a>
                                    </td>
                                    </tr>

                                    @endforeach

                                </tbody>
                                </table>
                            </div>
                            </div>
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
