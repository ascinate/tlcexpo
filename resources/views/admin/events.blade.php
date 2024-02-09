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
                        <a href="{{ URL::to('admin/addevent') }}" class="btn btn-gradient-success btn-fw">
                            Add Event
                        </a>
                      </li>
                    </ul>
                  </nav>
              </div>

            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Event List</h4>
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th> Event </th>
                          <th> Venue </th>
                          <th>Show Site </th>
                          <th>Action</th>
                        </tr>
                      </thead>

                      <tbody>
                        @php
                            $tradeshows = \DB::table('tradeshows')->get();
                            foreach($tradeshows as $trade)
                            {
                                $events = \DB::table('events')->where('tradeshow',$trade->id)->get();
                                $count = count($events);
                                if($count!=0)
                                {
                        @endphp
                        <tr style="background-color:#e9ef24">
                            <td colspan="4"><h4>{{ $trade->show_name }}</h4></td>
                        </tr>
                        @php
                            }
                        foreach ($events as $event)
                        {
                        @endphp
                        <tr>
                            <td>{{ $event->event_name }}</td>
                            <td>
                              @php
                                $venue = \DB::table('venues')->where('id', '=', $event->main_venue)->get();
                                echo $venue[0]->address;
                              @endphp
                            </td>
                            <td>{{ $event->showsite }}</td>
                            <td>
                                <a href="{{ URL::to('admin/viewevent/'.$event->id) }}" style="color: #333; text-decoration: none;">
                                    <i class="mdi mdi-magnify" style="font-size: 20px;"></i>
                                </a>
                                <a href="{{ URL::to('admin/editevent/'.$event->id) }}" style="color: #333; text-decoration: none;">
                                    <i class="mdi mdi-border-color" style="font-size: 20px;"></i>
                                </a>
                                <a href="{{ 'deleteevent/'.$event->id }}" style="color: #333;">
                                    <i class="mdi mdi-delete" style="font-size: 20px;"></i>
                                </a>
                            </td>
                        </tr>
                        @php
                             }
                            }
                        @endphp
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
