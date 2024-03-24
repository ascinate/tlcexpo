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
                        <a href="{{ URL::to('admin/addshipment') }}" class="btn btn-gradient-success btn-fw">
                            Add Shipment
                        </a>
                      </li>
                    </ul>
                  </nav>
              </div>

            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Shipment List</h4>
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <td>Shipment</td>
                          <th> Ship Type </th>
                          <th> Customer </th>
                          <th> Tradeshow </th>
                          <th> RFQ </th>
                          <th> Load </th>
                          <th> Invoice </th>
                          <th> Last Updated </th>
                          <th>Action</th>
                        </tr>
                      </thead>

                      <tbody>
                        @foreach ($datas as $data)
                        <tr>
                            <td>{{ $data->order_no }}</td>
                            <td>{{ $data->trip }}</td>
                            <td>@php
                                $customer = \DB::table('customers')->where('id', $data->customer)->get();
                                echo @$customer[0]->customer_name;
                            @endphp</td>
                            <td>
                                @php
                                   // $tradeshow = \DB::table('tradeshows')->where('id', $data->destination_tradeshow_id)->get();
                                  //  echo @$tradeshow[0]->show_name;
                                @endphp
                            </td>
                            <td>{{ $data->quote }}</td>
                            <td>{{ $data->loads }}</td>
                            <td>{{ $data->invoice_no }}</td>
                            <td>{{ $data->updated_at }}</td>
                            <td>
                                <!--<a href="{{ URL::to('admin/viewshipment/'.$data->id) }}" style="color: #333; text-decoration: none;">
                                    <i class="mdi mdi-magnify" style="font-size: 20px;"></i>
                                </a>-->
                                <a href="{{ URL::to('admin/editshipment/'.$data->id) }}" style="color: #333; text-decoration: none;">
                                    <i class="mdi mdi-border-color" style="font-size: 20px;"></i>
                                </a>
                                <a href="{{ 'deleteshipment/'.$data->id }}" style="color: #333;">
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
