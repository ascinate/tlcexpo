<x-adminheader/>
      <!-- partial -->
   <x-adminsidebar/>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">

           <!----Main Row--------->
           <form name="addfrm" action="{{ URL::to('insertload') }}" method="POST" class="forms-sample">
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
                                    <input type="text" class="form-control" name="load_id">
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
                                                    $cust = \DB::table('customers')->where('id', $load->customer_id)->get();
                                                    $cname = @$cust[0]->customer_name;

                                                    $trade = \DB::table('tradeshows')->where('id', $load->destination_tradeshow_id)->get();
                                                    $sname = @$trade[0]->show_name;

                                                    $shipment = $load->load_id.'-'.$cname.'-'.$sname;
                                            @endphp
                                             <option value="{{ $shipment }}">{{ $shipment }}</option>
                                            @php
                                                }
                                            @endphp
                                        </select>
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
                                        <option value="TL-To Show">TL-To Show</option>
                                        <option value="TL-To Advance Warehouse">TL-To Advance Warehouse </option>
                                        <option value="TL-From Show">TL-From Show</option>
                                        <option value="LTL-To Show"> LTL-To Show </option>
                                        <option value="LTL-To Advance Warehouse"> LTL-To Advance Warehouse </option>
                                        <option value="LTL-From Show"> LTL-From Show </option>
                                        <option value="PT-To Show"> PT-To Show </option>
                                        <option value="PT-To Advance Warehouse"> PT-To Advance Warehouse </option>
                                        <option value="PT-From Show"> PT-From Show </option>
                                        <option value="Show-To-Show"> Show-To-Show </option>
                                        <option value="Whse-To-Whse"> Whse-To-Whse </option>
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
                                        <option value="{{ $cust->id }}">{{ $cust->customer_name }}</option>
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
                                     <option value="{{ $val->id }}">
                                        {{ $val->legeal_name }}
                                     </option>
                                    @php
                                        }
                                    @endphp
                                </select>
                                </div>
                                </div>

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
                                        <option value="{{ $trade->id }}">{{ $trade->show_name }}</option>
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
                                    <label for="exampleFormControlInput1" class="form-label">Original Location</label>
                                     <select name="origin" id="origin" class="form-select" placeholder="Select Location" required>
                                        <option value=""></option>
                                         @php
                                            $value = \DB::table('locations')->get();
                                            foreach($value as $val)
                                            {
                                         @endphp
                                           <option value="{{ $val->location_descripton }}">
                                            {{ $val->location_descripton }}
                                          </option>
                                          @php
                                            }
                                         @endphp
                                      </select>
                                      <br>
                                        <input type="button" name="add" value="Add New Location" class="btn btn-gradient-primary me-2" id="addloc">
                                </div>
                            </div>

                                <div class="col-lg-6">
                                 <div class="form-group">
                                    <label for="exampleFormControlInput1" class="form-label">Destination Location</label>
                                    <select name="destination" id="destination" class="form-select" placeholder="Select Location" required>
                                        <option value=""></option>
                                        @php
                                            $value = \DB::table('locations')->get();
                                            foreach($value as $val)
                                            {
                                        @endphp
                                        <option value="{{ $val->location_descripton }}">
                                            {{ $val->location_descripton }}
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
                                    <input type="text" name="cargo_beams" class="form-control"/>
                                    </div>
                                </div>

                                <div class="col-lg-3">
                                    <div class="form-group">
                                    <label> Logistic Straps </label>
                                    <input type="text" name="logistic_straps" class="form-control"/>
                                    </div>
                                </div>

                                <div class="col-lg-3">
                                    <div class="form-group">
                                    <label class="form-label"> Wheel Dollies </label>
                                    <input type="text" name="wheel_dollies" class="form-control"/>
                                </div>
                                </div>

                                <div class="col-lg-3">
                                    <div class="form-group">
                                    <label class="form-label"> Furniture Pad </label>
                                    <input type="text" name="furniture_pad" class="form-control"/>
                                </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label class="form-label"> Material Handling Equipment </label>
                                    <p>
                                        <input type="checkbox" name="liftgate" value="Y"> Liftgate &nbsp;
                                        <input type="checkbox" name="pallet_jack" value="Y"> Pallet Jack &nbsp;
                                        <input type="checkbox" name="hand_truck" value="Y"> Hand truck&nbsp;
                                        <input type="checkbox" name="dolly" value="Y"> Dolly &nbsp;
                                        <input type="checkbox" name="driver_assist" value="Y"> Driver assist &nbsp;
                                        <input type="checkbox" name="full_clearance_doors" value="Y"> Full clearance doors &nbsp;
                                    </p>
                                    <p>
                                        <input type="text" name="other" class="form-control" placeholder="Other">
                                    </p>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label class="form-label"> Driver instruction </label>
                                    <input type="text" name="driver_instruction" class="form-control"/>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-label"> Comments </label>
                                        <input type="text" name="comments" class="form-control"/>
                                    </div>
                                </div>
                            </div>

                      </div>
                    </div>
                  </div>

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


