<div class="main-panel">
    <div class="content-wrapper">

        <div class="row">
            <div class="col-sm-4 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h5>Total Patients</h5>
                  <div class="row">
                    <div class="col-8 col-sm-12 col-xl-8 my-auto">
                      <div class="d-flex d-sm-block d-md-flex align-items-center">
                        <h2 class="mb-0">{{$users}}</h2>
                      </div>
                      <h6 class="text-muted font-weight-normal"> Since last month</h6>
                    </div>
                    <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                      <i class="icon-lg mdi mdi-codepen text-primary ms-auto"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-4 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h5>Doctors</h5>
                  <div class="row">
                    <div class="col-8 col-sm-12 col-xl-8 my-auto">
                      <div class="d-flex d-sm-block d-md-flex align-items-center">
                        <h2 class="mb-0">{{$doctorss}}</h2>
                      </div>
                      <h6 class="text-muted font-weight-normal">Since last month</h6>
                    </div>
                    <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                      <i class="icon-lg mdi mdi-wallet-travel text-danger ms-auto"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-4 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h5>Appointments</h5>
                  <div class="row">
                    <div class="col-8 col-sm-12 col-xl-8 my-auto">
                      <div class="d-flex d-sm-block d-md-flex align-items-center">
                        <h2 class="mb-0">{{$appointments}}</h2>
                      </div>
                      <h6 class="text-muted font-weight-normal">Since last month</h6>
                    </div>
                    <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                      <i class="icon-lg mdi mdi-monitor text-success ms-auto"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-4 col-xl-4 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-row justify-content-between">
                            <h4 class="card-title">Blogs</h4>
                            <a href={{url('showblog')}}><p class="text-muted mb-1 small">View all</p></a>
                        </div>
                        <div class="preview-list">
                            @foreach($blog as $key => $blogs)
                            @if ($key < 4)
                            <div class="preview-item border-bottom">
                                <div class="preview-thumbnail">
                                    <img src="../blogimage/{{$blogs->image}}" alt="image" class="rounded-circle" />
                                </div>
                            <div class="preview-item-content d-flex flex-grow">
                                <div class="flex-grow">
                                    <div class="d-flex d-md-block d-xl-flex justify-content-between">
                                    <h6 style="width: 9rem; overflow: hidden; white-space: nowrap;" class="preview-subject">{{$blogs->title}}</h6>
                                    <p class="text-muted text-small">{{$blogs->date}}</p>
                                    </div>
                                    <p class="text-muted">By: {{$blogs->user}}</p>
                                </div>
                            </div>
                        </div>
                        @endif
                        @endforeach

                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-8 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
                <div class="d-flex flex-row justify-content-between">
                    <h4 class="card-title mb-1">New Appointments</h4>
                    <p class="text-muted mb-1">Data status</p>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div style="height: 50vh;" class="table-responsive">
                            <div class="preview-list">
                                @foreach ($apnts as $appoint)
                                    @if ($appoint->status === 'In progress')
                                        <div class="preview-item border-bottom">
                                            <div class="preview-thumbnail">
                                                <div class="preview-icon bg-warning">
                                                    <i class="mdi mdi-calendar-clock"></i>
                                                </div>
                                            </div>
                                            <div class="preview-item-content d-sm-flex flex-grow">
                                                <div class="flex-grow">
                                                    <h6 class="preview-subject">
                                                        {{ $appoint->name }}
                                                        @if ($appoint->is_new)
                                                            <!-- Alert icon for new appointments -->
                                                            <span class="text-danger ms-2">
                                                                <i class="mdi mdi-alert-circle-outline"></i>
                                                            </span>
                                                        @endif
                                                    </h6>
                                                    <p class="text-muted mb-0">{{ $appoint->email }}</p>
                                                </div>
                                                <div class="me-auto text-sm-right pt-2 pt-sm-0">
                                                    <p class="text-muted">{{ $appoint->created_at }}</p>
                                                    <p class="text-muted mb-0">{{ $appoint->phone }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row ">
        <div class="col-12 grid-margin">
          <div class="card">
            <div class="card-body">
              <div class="d-flex flex-row justify-content-between">
                <h4 class="card-title">Doctors Details</h4>
                <a href={{url('showdoctor')}}><p class="text-muted mb-1 small">View all</p></a>
              </div>
              <div style="height: 50vh" class="table-responsive">
                <table class="table" >
                  <thead>
                    <tr>
                        <th style="color: aliceblue; font-size:14px">Picture</th>
                        <th style="color: aliceblue; font-size:14px">Doctor Name</th>
                        <th style="color: aliceblue; font-size:14px">Phone</th>
                        <th style="color: aliceblue; font-size:14px">Speciality</th>
                        <th style="color: aliceblue; font-size:14px">Room No</th>
                        <th style="color: aliceblue; font-size:14px">Join Date</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($doctors as $doctor)
                    <tr>
                      <td>
                        <img style="width: 50px; height:50px" src="doctorimage/{{$doctor->image}}" />
                      </td>
                      <td> {{$doctor->name}} </td>
                      <td> {{$doctor->phone}} </td>
                      <td> {{$doctor->speciality}} </td>
                      <td> {{$doctor->room}} </td>
                      <td> {{$doctor->created_at}} </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>


            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Address</h4>
                    <div class="row">
                      <div class="col-md-3">
                        <address>
                          <p class="font-weight-bold"><a class="navbar-brand" href='/' style="color: black; font-weight: bold; font-size: 28px"><span class="text-primary" style="color: #20c997">Med</span>-Center</a></p>
                          <p> 286 Mosque road, </p>
                          <p> Nintavur -09 </p>
                          <p> Sri Lanka, PC 32340 </p>
                        </address>
                    </div>
                    <div class="col-md-3">
                        <address class="text-primary">
                          <p class="font-weight-bold"> E-mail </p>
                          <p class="mb-4"> aabith619@gmail.com </p>
                          <p class="font-weight-bold"> Admin Info </p>
                          <p><a href=" https://port-three-murex.vercel.app" target="_blank">Akthar-aki</a></p>
                        </address>
                    </div>
                    <div class="col-md-6">
                        <div id="audience-map" class="vector-map"></div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>


    </div>

    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    <footer class="footer">
      <div class="d-sm-flex justify-content-center justify-content-sm-between">
        <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © Medical Center.com 2023</span>
        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Developed by <a href="https://www.linkedin.com/in/akthar-aki-578b45129/" target="_blank">Akthar</a> From linkedin</span>
      </div>
    </footer>
    <!-- partial -->
  </div>
  <!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->





