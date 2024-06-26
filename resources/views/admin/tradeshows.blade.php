<x-adminheader/>
      <!-- partial -->
   <x-adminsidebar/>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">
                  <span class="page-title-icon bg-gradient-primary text-white me-2">
                    <i class="mdi mdi-home"></i>
                  </span> Dashboard
                </h3>

                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                      <li class="breadcrumb-item active" aria-current="page">
                        <a href="{{ URL::to('admin/addtradeshow') }}" class="btn btn-gradient-success btn-fw">
                            Add Tradeshow
                        </a>
                      </li>
                    </ul>
                  </nav>
              </div>

            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Tradeshow List</h4>
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th> #</th>
                          <th> Show Name </th>
                          <th> Attendences </th>
                          <th> Exhibitors </th>
                          <th>Action</th>
                        </tr>
                      </thead>

                      <tbody>
                        @foreach ($trades as $trade)
                        <tr>
                            <td>
                                @php
                                    if($trade->logo!='')
                                    {
                                @endphp
                                <img src="../uploads/{{ $trade->logo }}" width="120" height="80"/>
                                @php
                                    }
                                    else
                                    {
                                @endphp
                                <img src="../images/placeholder.png" width="120" height="80"/>
                                @php
                                    }
                                @endphp
                            </td>
                            <td>{{ $trade->show_name }}</td>
                            <td>{{ $trade->total_attendance }}</td>
                            <td>{{ $trade->total_exhibitors }}</td>
                            <td>
                                <!--<a href="{{ URL::to('admin/viewtradeshow/'.$trade->id) }}" style="color: #333; text-decoration: none;">
                                    <i class="mdi mdi-magnify" style="font-size: 20px;"></i>
                                </a>-->
                                <a href="{{ URL::to('admin/edittradeshow/'.$trade->id) }}" style="color: #333; text-decoration: none;">
                                    <i class="mdi mdi-border-color" style="font-size: 20px;"></i>
                                </a>
                                <a href="{{ 'deletetradeshow/'.$trade->id }}" style="color: #333;">
                                    <i class="mdi mdi-delete" style="font-size: 20px;"></i>
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
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
<x-adminfooter/>
