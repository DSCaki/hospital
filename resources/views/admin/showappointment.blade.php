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
                  <div class="page-header">
                    <h3 class="page-title"> Appointments Table</h3>
                  </div>
                    <div class="row">
                        <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                            <h4 class="card-title">Appointments Details</h4>
                            @if (session()->has('message'))

                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                    x
                                    </button>
                                    {{session()->get('message')}}
                                </div>

                            @endif

                            <div class="table-responsive">
                                <table class="table">
                                <thead>
                                    <tr>
                                    <th style="color: aliceblue; font-size:14px">Name</th>
                                    <th style="color: aliceblue; font-size:14px">Email</th>
                                    <th style="color: aliceblue; font-size:14px">Phone</th>
                                    <th style="color: aliceblue; font-size:14px">Doctor Name</th>
                                    <th style="color: aliceblue; font-size:14px">Date</th>
                                    <th style="color: aliceblue; font-size:14px">Message</th>
                                    <th style="color: aliceblue; font-size:14px">Status</th>
                                    <th style="color: aliceblue; font-size:14px">Approve</th>
                                    <th style="color: aliceblue; font-size:14px">Cancle</th>
                                    <th style="color: aliceblue; font-size:14px">Mail</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $appoint)

                                    <tr>
                                    <td>{{$appoint->name}}</td>
                                    <td>{{$appoint->email}}</td>
                                    <td>{{$appoint->phone}}</td>
                                    <td>{{$appoint->doctor}}</td>
                                    <td>{{$appoint->date}}</td>
                                    <td>{{$appoint->message}}</td>
                                    <td><a href=""><label class="badge {{ $appoint->status === 'approved' ? 'badge-success' : ($appoint->status === 'canceled' ? 'badge-danger' : 'badge-info') }}">{{$appoint->status}}</label></a></td>
                                    <td>
                                        <a href="{{url('approved', $appoint->id)}}">
                                            <label style="cursor: pointer" class="badge badge-warning mdi mdi-check-circle">
                                                Approved
                                            </label>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{url('canceled', $appoint->id)}}">
                                            <label style="cursor: pointer" class="badge badge-danger mdi mdi-close-circle">
                                                Cancle
                                            </label>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{url('emailview', $appoint->id)}}">
                                            <label style="cursor: pointer" class="badge badge-danger mdi mdi-gmail">
                                                Send Mail
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
