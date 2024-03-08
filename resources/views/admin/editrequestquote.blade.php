<x-adminheader/>
      <!-- partial -->
   <x-adminsidebar/>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Edit Quote</h4>
                        <form name="addfrm" action="{{ URL::to('updatequote') }}" method="POST" class="forms-sample">
                        <input type="hidden" name="id" value="{{ $data['id'] }}">
                            @csrf
                            <div class="row">
                                <div class="col-lg-4">
                                  <div class="form-group">
                                      <label for="exampleInputName1" class="form-label"> Customer Contact Name <span class="text-danger">*</span> </label>
                                      <input type="text" class="form-control" name="customer_contact_name" value="{{ $data['customer_contact_name'] }}" required>
                                  </div>
                                </div>

                                <div class="col-lg-4">
                                  <div class="form-group">
                                      <label for="exampleInputName1" class="form-label"> Email <span class="text-danger">*</span> </label>
                                      <input type="email" class="form-control" name="email" value="{{ $data['email'] }}" required>
                                  </div>
                                </div>

                                <div class="col-lg-4">
                                  <div class="form-group">
                                      <label for="exampleInputName1" class="form-label"> Phone </label>
                                      <input type="text" class="form-control" name="phone" value="{{ $data['phone'] }}" required>
                                  </div>
                                </div>

                                <div class="col-lg-2">
                                  <div class="form-group">
                                      <label for="exampleInputName1" class="form-label"> Shipment Type </label>
                                      <select name="shipment_type" class="form-select soy-hegiht">
                                        <option value=""></option>
                                        <option value="Round trip"@php
                                            if($data['shipment_type']=='Round trip') { echo 'selected'; }
                                        @endphp>Round trip</option>
                                        <option value="Inbound only"@php
                                        if($data['shipment_type']=='Inbound only') { echo 'selected'; }
                                    @endphp>Inbound only</option>
                                        <option value="Outbound only"@php
                                        if($data['shipment_type']=='Outbound only') { echo 'selected'; }
                                    @endphp>Outbound only</option>
                                        <option value="Show-to-show"@php
                                        if($data['shipment_type']=='Show-to-show') { echo 'selected'; }
                                    @endphp>Show-to-show</option>
                                      </select>
                                  </div>
                                </div>

                                <div class="col-lg-2">
                                    <div class="form-check m-0">
                                      <input class="form-check-input" name="return_to_origin" type="checkbox" value="Yes" id="return_to_origin2" @php
                                      if($data['return_to_origin']=='Yes') { echo 'checked'; }
                                  @endphp>
                                      <label class="form-check-label ms-0" for="return_to_origin">
                                         Return to Origin
                                      </label>
                                    </div>
                                    <p class="comon-texr"> Uncheck this box If the return shipment is not going back to the origin address. </p>
                                </div>

                                <div class="col-lg-4">
                                  <div class="form-group">
                                      <label for="exampleInputName1" class="form-label"> Exhibitor Name </label>
                                      <input type="text" class="form-control" name="exhibitor_name" value="{{ $data['exhibitor_name'] }}" >
                                  </div>
                                </div>

                                <div class="col-lg-4">
                                  <div class="form-group">
                                      <label for="exampleInputName1" class="form-label"> Booth # </label>
                                      <input type="text" class="form-control" name="booth"  value="{{ $data['booth'] }}">
                                  </div>
                                </div>

                                <div class="col-lg-4">
                                  <div class="form-group">
                                      <label for="exampleInputName1" class="form-label"> Tradeshow Name <span class="text-danger">*</span> </label>
                                      <select name="tradeshow_name" class="form-select soy-hegiht" required>
                                        <option value=""></option>
                                        @php
                                            $trades = \DB::table('tradeshows')->get();
                                            foreach($trades as $val)
                                            {
                                        @endphp
                                        <option value="{{ $val->id }}"@php
                                         if($data['tradeshow_name']==$val->id) { echo 'selected'; }
                                        @endphp>
                                            {{ $val->show_name }}
                                        </option>
                                         @php
                                            }
                                         @endphp
                                      </select>
                                  </div>
                                </div>

                                <div class="col-lg-4">
                                  <div class="form-group">
                                      <label for="exampleInputName1" class="form-label"> Show Management Contractor </label>
                                      <input type="text" class="form-control" name="show_management_contractor" value="{{ $data['show_management_contractor'] }}">
                                  </div>
                                </div>

                                <div class="col-lg-4">
                                  <div class="form-group">
                                      <label for="exampleInputName1" class="form-label"> Tradeshow Venue <span class="text-danger">*</span> </label>
                                      <select name="tradeshow_venue" class="form-select">
                                        <option value=""></option>
                                        @php
                                            $value = \DB::table('locations')->get();
                                            foreach($value as $val)
                                            {

                                            $address = @$val->address_line_1.', '.$val->city.', '.$val->state.', '.$val->zipcode;
                                        @endphp
                                           <option value="{{ $address }}"@php
                                         if($data['tradeshow_venue']==$address) { echo 'selected'; }
                                        @endphp>
                                            {{ $address }}
                                         </option>
                                          @php
                                            }
                                        @endphp
                                      </select>
                                  </div>
                                </div>

                                <div class="col-lg-3">
                                  <h5> Show Destination  <span class="text-danger">*</span> </h5>

                                  <div class="form-check m-0 ps-4">
                                      <input class="form-check-input" type="radio" value="Advance Warehouse" name="show_destination" id="flexCheckCheckedrd" @php
                                      if($data['show_destination']=='Advance Warehouse') { echo 'checked'; }
                                  @endphp>
                                      <label class="form-check-label ms-0" for="flexCheckChecked">
                                      Advance Warehouse
                                      </label>
                                  </div>

                                  <div class="form-check m-0 ps-4">
                                      <input class="form-check-input" type="radio" value="Direct to Show" name="show_destination" id="flexCheckCheckedrd2" @php
                                      if($data['show_destination']=='Direct to Show') { echo 'checked'; }
                                  @endphp>
                                      <label class="form-check-label ms-0" for="flexCheckChecked">
                                      Direct to Show
                                      </label>
                                  </div>
                                </div>

                                <div class="col-lg-3">
                                  <div class="form-group">
                                      <label for="exampleInputName1" class="form-label"> Service Level </label>
                                      <select name="service_level" class="form-select soy-hegiht">
                                        <option value=""></option>
                                        <option value="Standard Ground" selected @php
                                        if($data['service_level']=='Standard Ground') { echo 'selected'; }
                                    @endphp>Standard Ground</option>
                                        <option value="Expedited Ground" @php
                                        if($data['service_level']=='Expedited Ground') { echo 'selected'; }
                                    @endphp>Expedited Ground</option>
                                    <option value="Expedited Ground" @php
                                    if($data['service_level']=='Overnight Hotshot') { echo 'selected'; }
                                @endphp>Overnight Hotshot</option>
                                      </select>
                                  </div>
                                </div>

                                <div class="col-lg-3">
                                  <div class="form-group">
                                      <label for="exampleInputName1" class="form-label"> Equipment </label>
                                      <select name="equipment" class="form-select">
                                        <option value="LTL Less-than-Truckload"@php
                                            if($data['equipment'] == 'LTL Less-than-Truckload') { echo 'selected'; }
                                        @endphp>LTL Less-than-Truckload</option>
                                        <option value="Linehaul w/Shuttles"@php
                                        if($data['equipment'] == 'Linehaul w/Shuttles') { echo 'selected'; }
                                    @endphp>Linehaul w/Shuttles</option>
                                        <option value="Full Truckload 53' Dry Van"@php
                                        if($data['equipment'] == "Full Truckload 53' Dry Van") { echo 'selected'; }
                                    @endphp>Full Truckload 53' Dry Van</option>
                                        <option value="Dropdeck Flatbed"@php
                                        if($data['equipment'] == 'Dropdeck Flatbed') { echo 'selected'; }
                                    @endphp>Dropdeck Flatbed</option>
                                        <option value="26' Straight Truck"@php
                                        if($data['equipment'] == "26' Straight Truck") { echo 'selected'; }
                                    @endphp>26' Straight Truck</option>
                                        <option value="16' Box Truck"@php
                                        if($data['equipment'] == "16' Box Truck") { echo 'selected'; }
                                    @endphp>16' Box Truck</option>
                                        <option value="Sprinter Van"@php
                                        if($data['equipment'] == 'Sprinter Van') { echo 'selected'; }
                                    @endphp>Sprinter Van</option>
                                      </select>
                                  </div>
                                </div>

                                <div class="col-lg-3">
                                  <div class="form-group">
                                      <label for="exampleInputName1" class="form-label"> Detention Allowance </label>
                                      <select name="detention_allowance" class="form-select soy-hegiht">
                                        <option value=""></option>
                                        <option value="30 Minutes" selected @php
                                        if($data['detention_allowance']=='30 Minutes') { echo 'selected'; }
                                    @endphp>30 Minutes</option>
                                        <option value="1 Hour" @php
                                        if($data['detention_allowance']=='1 Hour') { echo 'selected'; }
                                    @endphp>1 Hour</option>
                                        <option value="2 Hours" @php
                                        if($data['detention_allowance']=='2 Hours') { echo 'selected'; }
                                    @endphp>2 Hours</option>
                                      </select>
                                  </div>
                                </div>

                                <div class="col-lg-12">
                                  <h5> Accessorials  <span class="text-danger">*</span> </h5>
                                    @php
                                        $arr = explode(",",$data['accessorials'])
                                    @endphp
                                  <div class="d-flex align-items-center">
                                      <div class="form-check ps-4">
                                          <input class="form-check-input" name="accessorials[]" type="checkbox" value="Scales Tickets" id="flexCheckChecked"@php
                                          if(@in_array("Scales Tickets", $arr )) { echo 'checked'; }
                                      @endphp>
                                          <label class="form-check-label ms-0" for="flexCheckChecked">
                                          Scales Tickets
                                          </label>
                                      </div>

                                      <div class="form-check ps-4 ms-4">
                                          <input class="form-check-input" name="accessorials[]" type="checkbox" value="Marshaling Yard" id="flexCheckChecked"@php
                                          if(@in_array("Marshaling Yard", $arr )) { echo 'checked'; }
                                      @endphp>
                                          <label class="form-check-label ms-0" for="flexCheckChecked">
                                          Marshaling Yard
                                          </label>
                                      </div>

                                      <div class="form-check ps-4 ms-4">
                                          <input class="form-check-input" name="accessorials[]" type="checkbox" value="Liftgate" id="flexCheckCheckedn"@php
                                          if(@in_array("Liftgate", $arr )) { echo 'checked'; }
                                      @endphp>
                                          <label class="form-check-label ms-0" for="flexCheckCheckedn">
                                          Liftgate
                                          </label>
                                      </div>

                                      <div class="form-check ps-4 ms-4">
                                          <input class="form-check-input" name="accessorials[]" type="checkbox" value="Palletjack" id="flexCheckChecked"@php
                                          if(@in_array("Palletjack", $arr )) { echo 'checked'; }
                                      @endphp>
                                          <label class="form-check-label ms-0" for="flexCheckChecked">
                                          Palletjack
                                          </label>
                                      </div>

                                      <div class="form-check ps-4 ms-4">
                                          <input class="form-check-input" name="accessorials[]" type="checkbox" value="Inside Pickup/​Delivery" id="flexCheckChecked"@php
                                          if(@in_array("Inside Pickup/​Delivery", $arr )) { echo 'checked'; }
                                      @endphp>
                                          <label class="form-check-label ms-0" for="flexCheckChecked">
                                          Inside Pickup/​Delivery
                                          </label>
                                      </div>

                                  </div>
                                  <div class="col-lg-4">
                                    <div class="form-check d-flex align-items-center ps-4">
                                            <input class="form-check-input" type="checkbox" value="Other" id="flexCheckChecked"@php
                                            if(@in_array("Other", $arr )) { echo 'checked'; }
                                        @endphp>
                                            <input type="text" class="form-control ms-3" name="Others" placeholder="Other">
                                    </div>
                                  </div>
                                  <div class="col-lg-8"> </div>
                                </div>

                                <div id="imj2" class="col-lg-4">
                                    <p> If the pickup location does not have a forklift or a loading dock, it will be necessary to order a truck with a liftgate.
                                      Be sure to also order a palletjack as carriers may not have one on-board unless it is ordered.</p>
                                </div>
                                <div id="imj" class="col-lg-4">
                                    <p> If the pickup location does not have a forklift or a loading dock, it will be necessary to order a truck with a liftgate.
                                      Be sure to also order a palletjack as carriers may not have one on-board unless it is ordered.</p>
                                </div>
                                <div class="col-lg-8"> </div>

                                <div class="col-lg-6 mt-4">
                                    <h5> Origin Location </h5>

                                    <div class="form-group">
                                      <input type="text" class="form-control" name="origin_address_line_1" value="{{ $data['origin_address_line_1'] }}">
                                    </div>

                                    <div class="form-group">
                                      <input type="text" class="form-control" name="origin_address_line_2" value="{{ $data['origin_address_line_2'] }}">
                                    </div>

                                    <div class="row">
                                       <div class="col-lg-6">
                                          <div class="form-group">
                                            <input type="text" class="form-control" name="origin_city"  value="{{ $data['origin_city'] }}">
                                          </div>
                                       </div>
                                       <div class="col-lg-6">
                                          <div class="form-group">
                                            <input type="text" class="form-control" name="origin_state"  value="{{ $data['origin_state'] }}">
                                          </div>
                                       </div>

                                       <div class="col-lg-6">
                                          <div class="form-group">
                                            <input type="text" class="form-control" name="origin_zipcode"  value="{{ $data['origin_zipcode'] }}">
                                          </div>
                                       </div>

                                       <div class="col-lg-6">
                                          <div class="form-group">
                                                <select name="origin_country" class="form-select soy-hegiht">
                                                  <option value=""></option>
                                                  <option value="United States" selected @php
                                                  if($data['origin_country']=='United States') { echo 'selected'; }
                                              @endphp>United States</option>
                                                  <option value="Canada" @php
                                                  if($data['origin_country']=='Canada') { echo 'selected'; }
                                              @endphp>Canada</option>
                                                </select>
                                          </div>
                                       </div>

                                       <div class="col-lg-6">
                                          <div class="form-group">
                                             <label for="exampleInputName1" class="form-label"> Ready for Pickup </label>
                                             <input type="date" class="form-control" name="pickup_date" value="{{ $data['pickup_date'] }}">
                                             <p class="comon-texr"> Avoid weekends and holidays when possible. </p>
                                          </div>
                                       </div>

                                       <div class="col-lg-6">
                                          <div class="form-group">
                                             <label for="exampleInputName1" class="form-label"> Driver check-in before: </label>
                                             <input type="time" class="form-control" name="driver_check_in" value="{{ $data['driver_check_in'] }}">

                                          </div>
                                       </div>
                                    </div>

                                    <div class="col-lg-12">
                                          <div class="form-group">
                                             <label for="exampleInputName1" class="form-label"> Marshaling Yard Address </label>
                                             <input type="text" class="form-control" name="marshaling_address_line_1"  value="{{ $data['marshaling_address_line_1'] }}">
                                          </div>
                                          <div class="form-group">
                                             <input type="text" class="form-control" name="marshaling_address_line_2"  value="{{ $data['marshaling_address_line_2'] }}">
                                          </div>
                                          <div class="row">
                                              <div class="col-lg-6">
                                                <div class="form-group">
                                                  <input type="text" class="form-control" name="marshaling_city"  value="{{ $data['marshaling_city'] }}">
                                                </div>
                                              </div>
                                              <div class="col-lg-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="marshaling_state" value="{{ $data['marshaling_state'] }}">
                                                </div>
                                              </div>
                                          </div>
                                          <div class="form-group">
                                             <input type="text" class="form-control" name="marshaling_zipcode"  value="{{ $data['marshaling_zipcode'] }}">
                                             <p class="comon-texr"> (No worries. We'll look it up for you if it's not handy). </p>
                                          </div>
                                    </div>
                                </div>

                                <div class="col-lg-6  mt-4">
                                    <h5> Destination Location </h5>

                                    <div class="form-group">
                                      <input type="text" class="form-control" name="destination_address_line_1"  value="{{ $data['destination_address_line_1'] }}">
                                    </div>

                                    <div class="form-group">
                                      <input type="text" class="form-control" name="destination_address_line_2"  value="{{ $data['destination_address_line_2'] }}">
                                    </div>

                                    <div class="row">
                                       <div class="col-lg-6">
                                          <div class="form-group">
                                            <input type="text" class="form-control" name="destination_city"  value="{{ $data['destination_city'] }}">
                                          </div>
                                       </div>
                                       <div class="col-lg-6">
                                          <div class="form-group">
                                            <input type="text" class="form-control" name="destination_state"  value="{{ $data['destination_state'] }}">
                                          </div>
                                       </div>

                                       <div class="col-lg-6">
                                          <div class="form-group">
                                            <input type="text" class="form-control" name="destination_zipcode"  value="{{ $data['destination_zipcode'] }}">
                                          </div>
                                       </div>

                                       <div class="col-lg-6">
                                          <div class="form-group">
                                                <select name="destination_country" class="form-select soy-hegiht">
                                                  <option value="United States" selected @php
                                                  if($data['destination_country']=='United States') { echo 'selected'; }
                                              @endphp>United States</option>
                                                  <option value="Canada" @php
                                                  if($data['destination_country']=='Canada') { echo 'selected'; }
                                              @endphp>Canada</option>
                                                </select>
                                          </div>
                                       </div>

                                       <div class="col-lg-6">
                                          <div class="form-group">
                                             <label for="exampleInputName1" class="form-label"> Delivery Deadline </label>
                                             <input type="date" class="form-control" name="delivery_deadline"  value="{{ $data['delivery_deadline'] }}">
                                             <p class="comon-texr"> Avoid weekends and holidays when possible. </p>
                                          </div>
                                       </div>

                                       <div class="col-lg-6">
                                          <div class="form-group">
                                             <label for="exampleInputName1" class="form-label"> Driver check-in before: </label>
                                             <input type="time" class="form-control" name="driver_check_in_deadline" value="{{ $data['driver_check_in_deadline'] }}">
                                          </div>
                                       </div>
                                    </div>

                                    @php
                                        //if($data['return_to_origin']=='No')
                                       // {
                                    @endphp
                                    <div class="col-lg-12" id="altaddress2">
                                        <h5> Alt Return Address </h5>

                                        <div class="form-group">
                                          <input type="text" class="form-control" name="alt_address_line_1" value="{{ $data['alt_address_line_1'] }}">
                                        </div>

                                        <div class="form-group">
                                          <input type="text" class="form-control" name="alt_address_line_2" value="{{ $data['alt_address_line_2'] }}">
                                        </div>

                                        <div class="row">
                                           <div class="col-lg-6">
                                              <div class="form-group">
                                                <input type="text" class="form-control" name="alt_city" value="{{ $data['alt_city'] }}">
                                              </div>
                                           </div>
                                           <div class="col-lg-6">
                                              <div class="form-group">
                                                <input type="text" class="form-control" name="alt_state" value="{{ $data['alt_state'] }}">
                                              </div>
                                           </div>

                                           <div class="col-lg-6">
                                              <div class="form-group">
                                                <input type="text" class="form-control" name="alt_zipcode" value="{{ $data['alt_zipcode'] }}">
                                              </div>
                                           </div>

                                           <div class="col-lg-6">
                                              <div class="form-group">
                                                    <select name="alt_country" class="form-select soy-hegiht">
                                                      <option value="United States"@php
                                                          if($data['alt_country']=='United States') { echo 'selected'; }
                                                      @endphp>United States</option>
                                                      <option value="Canada"@php
                                                      if($data['alt_country']=='Canada') { echo 'selected'; }
                                                  @endphp>Canada</option>
                                                    </select>
                                              </div>
                                           </div>
                                        </div>
                                    </div>
                                    @php
                                     // }
                                    @endphp
                                </div>
                            </div>

                            <div class="comonheadrt">
                                <h5> Manifest  </h5>
                                <p> Items Being Shipped </p>
                            </div>

                            <div class="comonheadrt">
                                <h5>  Cargo Items  </h5>
                                <p> Please use inches for item dimensions and the weight in pounds. </p>
                            </div>

                            @php
                                $items = json_decode($data['cargo_Items'],true);
                                $count = count($items['type']);

                                for($j=1;$j<=($count);$j++)
                                {
                            @endphp


                            <div id="ash-div" class="comonheadrt bg-light p-4">

                                <div class="d-flex align-items-center mb-4">
                                    <a id="maiu" class="btn btn-clop p-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293z"/>
                                      </svg>
                                    </a>
                                    <h5 class="m-0 ms-2"> Item {{ $j }} </h5>
                                </div>

                                <div class="row">
                                   <div class="col-lg-2">
                                        <div class="form-group">
                                            <label for="exampleInputName1"> Type </label>
                                            <input type="text" class="form-control" name="type[]" value="{{ @$items['type'][$j-1] }}">
                                        </div>
                                   </div>
                                   <div class="col-lg-2">
                                        <div class="form-group">
                                            <label for="exampleInputName1"> Qty </label>
                                            <input type="text" class="form-control" name="qty[]" value="{{ @$items['qty'][$j-1] }}">
                                        </div>
                                   </div>
                                   <div class="col-lg-2">
                                        <div class="form-group">
                                            <label for="exampleInputName1"> Length </label>
                                            <input type="text" class="form-control" name="length[]" value="{{ @$items['length'][$j-1] }}">
                                            <p class="mt-2"> (inches) </p>
                                        </div>
                                   </div>
                                   <div class="col-lg-2">
                                        <div class="form-group">
                                            <label for="exampleInputName1"> Width </label>
                                            <input type="text" class="form-control" name="width[]" value="{{ @$items['width'][$j-1] }}">
                                            <p class="mt-2"> (inches) </p>
                                        </div>
                                   </div>
                                   <div class="col-lg-2">
                                        <div class="form-group">
                                            <label for="exampleInputName1"> Height </label>
                                            <input type="text" class="form-control" name="height[]" value="{{ @$items['height'][$j-1] }}">
                                            <p class="mt-2"> (inches) </p>
                                        </div>
                                   </div>

                                   <div class="col-lg-2">
                                        <div class="form-group">
                                            <label for="exampleInputName1"> Weight </label>
                                            <input type="text" class="form-control" name="weight[]" value="{{ @$items['weight'][$j-1] }}">
                                            <p class="mt-2"> (pounds) </p>
                                        </div>
                                   </div>

                                   <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="exampleInputName1"> Description </label>
                                            <input type="text" class="form-control" name="description[]" value="{{ @$items['description'][$j-1] }}">
                                            <p class="mt-2 comon-texr"> Color, Material, Markings, Contents </p>
                                        </div>
                                   </div>
                                   <div class="col-lg-2">
                                        <div class="form-check ps-4">
                                          <input class="form-check-input" type="checkbox" value="Y" name="Hazardous[]" id="flexCheckDefault" @php
                                              if(@$items['Hazardous'][$j-1]=='Y') { echo 'checked'; }
                                          @endphp>
                                          <label class="form-check-label m-0" for="flexCheckDefault">
                                          Hazardous
                                          </label>
                                        </div>
                                        <p class="mt-2 comon-texr"> Is this a hazardous material? </p>
                                   </div>
                                   <div class="col-lg-2">
                                        <div class="form-check ps-4">
                                          <input class="form-check-input" type="checkbox" value="Y" name="Stackable[]" id="flexCheckDefault" @php
                                              if(@$items['Stackable'][$j-1]=='Y') { echo 'checked'; }
                                          @endphp>
                                          <label class="form-check-label m-0" for="flexCheckDefault">
                                          Stackable
                                          </label>
                                        </div>
                                        <p class="comon-texr"> Allowed on outbound shipments. </p>
                                   </div>

                                </div>

                            </div>

                            @php
                                }
                            @endphp
                            <div class="col-lg-12">
                                <div id="ccolonejemloccre"></div>
                            </div>
                            <div class="col-lg-12 my-4">
                               <a id="sh-addvemsloccre" class="btn btn-aoi p-3 btn-primary">
                                <span> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                  <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
                                </svg> </span>
                                Add Items</a>
                            </div>

                            <!--<div class="col-lg-12">
                               <div class="row">
                                  <div class="col-lg-3">
                                      <div class="form-group">
                                          <h5> Total Items  </h5>
                                          <p> 0 </p>
                                      </div>
                                  </div>
                                  <div class="col-lg-3">
                                      <div class="form-group">
                                          <h5> Total Dim Weight  </h5>
                                          <p> 0 </p>
                                      </div>
                                  </div>
                                  <div class="col-lg-3">
                                      <div class="form-group">
                                          <h5> Total Weight </h5>
                                          <p> 0 </p>
                                      </div>
                                  </div>
                               </div>
                            </div>-->

                          <button type="submit" name="btnsubmit" name="btn" class="btn btn-gradient-primary me-2">Submit</button>
                          <button type="button" name="cancel" class="btn btn-light" onclick="javascript:history.go(-1);">Cancel</button>
                        </form>
                      </div>
                    </div>
                  </div>

            </div>
        </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
          <script>
            $(document).ready(function(){
                //var xc = $("#return_to_origin2").val();

                if($('#return_to_origin2').is(":checked"))
                {
                   $("#altaddress2").hide();
                }
                else
                {
                   $("#altaddress2").show();
                }
            });

            $(function () {
            $("#return_to_origin2").click(function () {
                if ($(this).is(":checked")) {
                    $("#altaddress2").hide();
                } else {
                    $("#altaddress2").show();
                }
            });
        });
          </script>
          <x-adminfooter/>
