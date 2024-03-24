<x-adminheader/>
      <!-- partial -->
   <x-adminsidebar/>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">

           <!----Main Row--------->
           <form name="addfrm" action="{{ URL::to('updateload') }}" method="POST" class="forms-sample">
            <input type="hidden" name="id" value="{{ $data['id'] }}">
            @csrf
            <div class="row">
                 <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Add Load</h4>

                            <div class="row">
                                <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="exampleInputName1">Load Id</label>
                                    <input type="text" class="form-control" name="load_id" value="{{ $data['load_id'] }}">
                                </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label> Shipment </label>
                                    <select name="shipment" class="form-select">
                                        <option value="">--Add New--</option>
                                        @php
                                            $loads = \DB::table('loads')->get();
                                            foreach($loads as $load)
                                            {
                                                $customer = \DB::table('customers')->where('id', $data->customer_id)->get();
                                                $cname = @$customer[0]->customer_name;

                                                $tradeshow = \DB::table('tradeshows')->where('id', $data->destination_tradeshow_id)->get();
                                                $sname = @$tradeshow[0]->show_name;

                                                $shipment = $load->load_id.'-'.$cname.'-'.$sname;
                                        @endphp
                                         <option value="{{ $shipment }}"@php
                                             if($data['shipment']==$shipment) { echo 'selected'; }
                                         @endphp>
                                            {{ $shipment }}
                                        </option>
                                        @php
                                            }
                                        @endphp
                                    </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label>Shipment Type</label>
                                    <select name="shipment_type" class="form-select">
                                        <option value=""></option>
                                        <option value="TL-To Show"@php if($data['shipment_type']=="TL-To Show") { echo 'selected'; } @endphp>TL-To Show</option>
                                        <option value="TL-To Advance Warehouse"@php if($data['shipment_type']=="TL-To Advance Warehouse") { echo 'selected'; } @endphp>TL-To Advance Warehouse </option>
                                        <option value="TL-From Show"@php if($data['shipment_type']=="TL-From Show") { echo 'selected'; } @endphp>TL-From Show</option>
                                        <option value="LTL-To Show"@php if($data['shipment_type']=="LTL-To Show") { echo 'selected'; } @endphp> LTL-To Show </option>
                                        <option value="LTL-To Advance Warehouse"@php if($data['shipment_type']=="LTL-To Advance Warehouse") { echo 'selected'; } @endphp> LTL-To Advance Warehouse </option>
                                        <option value="LTL-From Show"@php if($data['shipment_type']=="LTL-From Show") { echo 'selected'; } @endphp> LTL-From Show </option>
                                        <option value="PT-To Show"@php if($data['shipment_type']=="PT-To Show") { echo 'selected'; } @endphp> PT-To Show </option>
                                        <option value="PT-To Advance Warehouse"@php if($data['shipment_type']=="PT-To Advance Warehouse") { echo 'selected'; } @endphp> PT-To Advance Warehouse </option>
                                        <option value="PT-From Show"@php if($data['shipment_type']=="PT-From Show") { echo 'selected'; } @endphp> PT-From Show </option>
                                        <option value="Show-To-Show"@php if($data['shipment_type']=="Show-To-Show") { echo 'selected'; } @endphp> Show-To-Show </option>
                                        <option value="Whse-To-Whse"@php if($data['shipment_type']=="Whse-To-Whse") { echo 'selected'; } @endphp> Whse-To-Whse </option>
                                    </select>
                                </div>
                                </div>

                                <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Customer</label>
                                    <select name="customer_id" class="form-select">
                                        <option value=""></option>
                                        @php
                                            $customer = \DB::table('customers')->get();
                                            foreach($customer as $cust)
                                            {
                                        @endphp
                                        <option value="{{ $cust->id }}"@php
                                            if($data['customer_id']==$cust->id) { echo 'selected'; }
                                        @endphp>
                                            {{ $cust->customer_name }}
                                        </option>
                                        @php
                                            }
                                        @endphp
                                    </select>
                                </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                <div class="form-group">
                                    <label> Billing Entity </label>
                                    <select name="billing_entity_name" class="form-select">
                                        <option value="">--Select--</option>
                                    @php
                                         $entity = \DB::table('entities')->get();
                                         foreach($entity as $val)
                                          {
                                    @endphp
                                     <option value="{{ $val->id }}"@php
                                         if($data['billing_entity_name']==$val->id) { echo 'selected'; }
                                     @endphp>
                                        {{ $val->legeal_name }}
                                     </option>
                                    @php
                                        }
                                    @endphp
                                </select>
                                </div>
                                </div>


                            <!--<div class="row">
                                <div class="col-lg-6">
                                <div class="form-group">
                                    <label> Billing Entity Name </label>
                                    <input type="text" name="billing_entity_name" class="form-control"/>
                                </div>
                                </div>

                                <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail3">Address line 1</label>
                                    <input type="text" class="form-control" name="address_line_1">
                                </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="exampleInputPassword4">Address line 2</label>
                                    <input type="text" class="form-control" name="address_line_2">
                                </div>
                                </div>

                                <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Address line 3</label>
                                    <input type="text" class="form-control" name="address_line_2">
                                </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                <div class="form-group">
                                    <label>City</label>
                                    <input type="text" class="form-control" name="city">
                                </div>
                                </div>

                                <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="exampleInputCity1">State</label>
                                    <input type="text" class="form-control" name="state">
                                </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="exampleInputCity1">Zipcode</label>
                                    <input type="text" class="form-control" name="zipcode">
                                </div>
                                </div>

                                <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="exampleInputCity1">Country</label>
                                    <select name="country" class="form-select">
                                        <option value="USA">USA</option>
                                        <option value="Canada">CANADA</option>
                                    </select>
                                </div>
                                </div>
                            </div>-->

                                <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-label"> Trade Show </label>
                                    <select name="destination_tradeshow_id" class="form-select">
                                        <option value=""></option>
                                        @php
                                            $tradeshows = \DB::table('tradeshows')->get();
                                            foreach($tradeshows as $trade)
                                            {
                                        @endphp
                                        <option value="{{ $trade->id }}"@php
                                            if($data['destination_tradeshow_id']==$trade->id) { echo 'selected'; }
                                        @endphp>
                                            {{ $trade->show_name }}
                                        </option>
                                        @php
                                            }
                                        @endphp
                                    </select>
                                </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="form-group">
                                    <label> Cargo Beams </label>
                                    <input type="text" name="cargo_beams" value="{{ $data['cargo_beams'] }}" class="form-control"/>
                                    </div>
                                </div>

                                <div class="col-lg-3">
                                    <div class="form-group">
                                    <label> Logistic Straps </label>
                                    <input type="text" name="logistic_straps" value="{{ $data['logistic_straps'] }}" class="form-control"/>
                                    </div>
                                </div>

                                <div class="col-lg-3">
                                    <div class="form-group">
                                    <label class="form-label"> Wheel Dollies </label>
                                    <input type="text" name="wheel_dollies" value="{{ $data['wheel_dollies'] }}" class="form-control"/>
                                </div>
                                </div>

                                <div class="col-lg-3">
                                    <div class="form-group">
                                    <label class="form-label"> Furniture Pad </label>
                                    <input type="text" name="furniture_pad" value="{{ $data['furniture_pad'] }}" class="form-control"/>
                                </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label class="form-label"> Material Handling Equipment </label>
                                    <p>
                                        <input type="checkbox" name="liftgate" value="Y"@php
                                            if($data['liftgate']=='Y') { echo 'checked'; }
                                        @endphp> Liftgate &nbsp;
                                        <input type="checkbox" name="pallet_jack" value="Y"@php
                                        if($data['pallet_jack']=='Y') { echo 'checked'; }
                                    @endphp> Pallet Jack &nbsp;
                                        <input type="checkbox" name="hand_truck" value="Y"@php
                                        if($data['hand_truck']=='Y') { echo 'checked'; }
                                    @endphp> Hand truck &nbsp;

                                        <input type="checkbox" name="dolly" value="Y"@php
                                        if($data['dolly']=='Y') { echo 'checked'; }
                                    @endphp> Dolly &nbsp;
                                        <input type="checkbox" name="driver_assist" value="Y"@php
                                        if($data['driver_assist']=='Y') { echo 'checked'; }
                                    @endphp> Driver assist &nbsp;
                                        <input type="checkbox" name="full_clearance_doors" value="Y"@php
                                        if($data['full_clearance_doors']=='Y') { echo 'checked'; }
                                    @endphp> Full clearance doors &nbsp;
                                    </p>
                                    <p>
                                        <input type="text" name="other" class="form-control" value="{{ $data['other'] }}" placeholder="Other">
                                    </p>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label class="form-label"> Driver instruction </label>
                                    <input type="text" name="driver_instruction" value="{{ $data['driver_instruction'] }}" class="form-control"/>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-label"> Comments </label>
                                        <input type="text" name="comments" class="form-control" value="{{ $data['comments'] }}"/>
                                    </div>
                                </div>
                            </div>

                      </div>
                    </div>
                  </div>

                  <!--<div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body add-remove-div">
                            <h4 class="card-title">Additional Address</h4>

                            <div class="row input-form" id="addr-div">

                                <div class="col-lg-11 mb-2">
                                    <h5> Contact 1 </h5>
                                </div>
                                <div class="col-lg-1 mb-2">
                                    <a class="btn btn-default deladdr p-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293z"/></svg>
                                    </a>
                                </div>

                                 <div class="col-lg-6">
                                     <div class="form-group">
                                     <label> Address</label>
                                     <input type="text" name="add_address[]" class="form-control txt"/>
                                 </div>
                                 </div>

                                 <div class="col-lg-6">
                                     <div class="form-group">
                                     <label>Address 1</label>
                                     <input type="text" name="add_address1[]" class="form-control txt"/>
                                 </div>
                                 </div>

                                 <div class="col-lg-6">
                                     <div class="form-group">
                                     <label>Address 2</label>
                                     <input type="text" name="add_address2[]" class="form-control txt"/>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label>City</label>
                                    <input type="text" name="add_city[]" class="form-control txt"/>
                                   </div>
                               </div>

                               <div class="col-lg-4">
                                <div class="form-group">
                                <label>State</label>
                                <input type="text" name="add_state[]" class="form-control txt"/>
                               </div>
                             </div>

                             <div class="col-lg-4">
                                <div class="form-group">
                                <label>Zipcode</label>
                                <input type="text" name="add_zipcode[]" class="form-control txt"/>
                               </div>
                             </div>

                             <div class="col-lg-4">
                                <div class="form-group">
                                <label>Country</label>
                                <input type="text" name="add_country[]" class="form-control txt"/>
                               </div>
                             </div>

                             </div>
                             <div id="addrclone" class="col-lg-12"></div>
                             <div class="row">
                               <div class="col-lg-3">
                                   <button  type='button' id='addi_addr' class="btn btn-gradient-primary me-2">Add new</button>
                                </div>
                             </div>

                        </div>
                    </div>
                  </div>-->

                  <div class="col-lg-3">
                    <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>

                    <button type="button" class="btn btn-light" onclick="javascript:history.go(-1);">Cancel</button>
                  </div>

            </div> <!---- End main row ------->
           </form>

         </div>
    <!-- content-wrapper ends -->
    <!-- partial:../../partials/_footer.html -->
    <x-adminfooter/>
