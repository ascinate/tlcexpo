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
                          <th>Order</th>
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
                            <td>{{ 'T00'.$data->order_no }}</td>
                            <td>{{ $data->trip }}</td>
                            <td>@php
                                $customer = \DB::table('customers')->where('id', $data->customer)->get();
                                $cname = @$customer[0]->customer_name;
                                echo $cname ;
                            @endphp</td>
                            <td>
                                @php
                                    $tradeshow = \DB::table('tradeshows')->where('id', $data->tradeshow)->get();
                                    $sname = @$tradeshow[0]->show_name;
                                    echo $sname;
                                @endphp
                            </td>
                            <td>
                                @php
                                    $quote = \DB::table('requestquotes')->where('id',$data->quote)->get();
                                    echo @$quote[0]->customer_contact_name;
                                @endphp
                            </td>
                            <td>
                                @php
                                    $exp = explode(",",$data->loads);
                                    for($i=0;$i<=count($exp)-1;$i++)
                                    {
                                        $load = \DB::table('loads')->where('id', $exp[$i])->get();
                                        echo @$load[0]->load_id.'-'.$cname.'-'.$sname.'<br><br>';
                                    }
                                @endphp
                            </td>
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
