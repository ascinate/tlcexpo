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
              </div>

            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Venue List</h4>
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th> Venue Entity </th>
                          <th> Area </th>
                          <th> Square  </th>
                          <th> Address </th>
                          <th> City </th>
                          <th> State </th>
                          <th> Google Map URL</th>
                          <th>Action</th>
                        </tr>
                      </thead>

                      <tbody>
                        @php
                          foreach($datas as $data)
                          {
                            $showfloor = json_decode($data['showfloor_locations'],true);
                            $loading = json_decode($data['loading_locations'],true);
                        @endphp
                        <tr>
                            <td>
                                @php
                                    $parent = \DB::table('entities')->where('id',$data['entity_id'])->get();
                                    echo @$parent[0]->legeal_name;
                                @endphp
                            </td>
                            <td>{{ $showfloor['area_name'][0] }}</td>
                            <td>{{ $showfloor['square_feet'][0] }}</td>
                            <td>{{ $loading['address_1'][0] }}</td>
                            <td>{{ $loading['city'][0] }}</td>
                            <td>{{ $loading['state'][0] }}</td>
                            <td>{{ $loading['google_map_url'][0] }}</td>
                            <td>
                                <a href="{{ URL::to('admin/viewtradevenue/'.$data->id) }}" style="color: #333; text-decoration: none;">
                                    <i class="mdi mdi-magnify" style="font-size: 20px;"></i>
                                </a>
                                <a href="{{ URL::to('admin/edittradevenue/'.$data->id) }}" style="color: #333; text-decoration: none;">
                                    <i class="mdi mdi-border-color" style="font-size: 20px;"></i>
                                </a>
                                <a href="{{ 'delettradeevenue/'.$data->id }}" style="color: #333;">
                                    <i class="mdi mdi-delete" style="font-size: 20px;"></i>
                                </a>
                            </td>
                        </tr>
                        @php
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
