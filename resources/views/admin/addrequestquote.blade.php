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
                        <h4 class="card-title">Request Quote</h4>
                        <form name="addfrm" action="{{ URL::to('insertquote') }}" method="POST" class="forms-sample">
                            @csrf
                            <div class="row">
                                <div class="col-lg-4">
                                  <div class="form-group">
                                      <label for="exampleInputName1" class="form-label"> Customer Contact Name <span class="text-danger">*</span> </label>
                                      <input type="text" class="form-control" name="customer_contact_name" required>
                                  </div>
                                </div>

                                <div class="col-lg-4">
                                  <div class="form-group">
                                      <label for="exampleInputName1" class="form-label"> Email <span class="text-danger">*</span> </label>
                                      <input type="email" class="form-control" name="email" required>
                                  </div>
                                </div>

                                <div class="col-lg-4">
                                  <div class="form-group">
                                      <label for="exampleInputName1" class="form-label"> Phone </label>
                                      <input type="text" class="form-control" name="phone" required>
                                  </div>
                                </div>

                                <div class="col-lg-2">
                                  <div class="form-group">
                                      <label for="exampleInputName1" class="form-label"> Shipment Type </label>
                                      <select name="shipment_type" id="shipment_type" class="form-select soy-hegiht">
                                        <option value=""></option>
                                        <option value="Round trip">Round trip</option>
                                        <option value="Inbound only">Inbound only</option>
                                        <option value="Outbound only">Outbound only</option>
                                        <option value="Show-to-show">Show-to-show</option>
                                      </select>
                                  </div>
                                </div>

                                <div class="col-lg-2" id="return">
                                    <div class="form-check m-0">
                                      <input class="form-check-input" name="return_to_origin" type="checkbox" value="Yes" id="return_to_origin" checked>
                                      <label class="form-check-label ms-0" for="return_to_origin">
                                         Return to Origin
                                      </label>
                                    </div>
                                    <p class="comon-texr"> Uncheck this box If the return shipment is not going back to the origin address. </p>
                                </div>

                                <div class="col-lg-4">
                                  <div class="form-group">
                                      <label for="exampleInputName1" class="form-label"> Exhibitor Name </label>
                                      <input type="text" class="form-control" name="exhibitor_name" required>
                                  </div>
                                </div>

                                <div class="col-lg-4">
                                  <div class="form-group">
                                      <label for="exampleInputName1" class="form-label"> Booth # </label>
                                      <input type="text" class="form-control" name="booth" required>
                                  </div>
                                </div>

                               <div class="col-lg-4">
                                  <div class="form-group">
                                      <label for="exampleInputName1" class="form-label"> Tradeshow Name <span class="text-danger">*</span> </label>
                                      <select name="tradeshow_name" id="tradeshow" class="form-select soy-hegiht" required>
                                        <option value=""></option>
                                        @php
                                            $data = \DB::table('tradeshows')->get();
                                            foreach($data as $val)
                                            {
                                        @endphp
                                        <option value="{{ $val->id }}">{{ $val->show_name }}</option>
                                         @php
                                            }
                                         @endphp
                                      </select>
                                  </div>
                                </div>

                                <div class="row" id="show_m2" style="display: none;"></div>

                                <div class="col-lg-4" id="show_m">
                                  <div class="form-group">
                                      <label for="exampleInputName1" class="form-label"> Show Management Contractor </label>
                                      <select name="" class="form-select soy-hegiht">
                                        <option value=""></option>
                                      </select>
                                  </div>
                                </div>

                                <div class="col-lg-4" id="tr_v">
                                  <div class="form-group">
                                      <label for="exampleInputName1" class="form-label"> Tradeshow Venue <span class="text-danger">*</span> </label>
                                      <select name="tradeshow_venue" class="form-select soy-hegiht">
                                        <option value=""></option>
                                      </select>
                                  </div>
                                </div>

                                <div class="col-lg-3">
                                  <h5> Show Destination  <span class="text-danger">*</span> </h5>
                                  <div class="form-check m-0 ps-4">
                                      <input class="form-check-input" type="radio" value="Advance Warehouse" name="show_destination" id="shw1">
                                      <label class="form-check-label ms-0" for="shw1">
                                      Advance Warehouse
                                      </label>
                                  </div>

                                  <div class="form-check m-0 ps-4">
                                      <input class="form-check-input" type="radio" value="Direct to Show" name="show_destination" id="shw2" checked>
                                      <label class="form-check-label ms-0" for="shw2">
                                      Direct to Show
                                      </label>
                                  </div>
                                </div>

                                <div class="col-lg-3">
                                  <div class="form-group">
                                      <label for="exampleInputName1" class="form-label"> Service Level </label>
                                      <select name="service_level" class="form-select soy-hegiht">
                                        <option value=""></option>
                                        <option value="Standard Ground" selected>Standard Ground</option>
                                        <option value="Expedited Ground">Expedited Ground</option>
                                        <option value="Overnight Hotshot">Overnight Hotshot</option>
                                      </select>
                                  </div>
                                </div>

                                <div class="col-lg-3">
                                  <div class="form-group">
                                      <label for="exampleInputName1" class="form-label"> Equipment </label>
                                      <select name="equipment" class="form-select">
                                        <option value="LTL Less-than-Truckload">LTL Less-than-Truckload</option>
                                        <option value="Linehaul w/Shuttles">Linehaul w/Shuttles</option>
                                        <option value="Full Truckload 53' Dry Van">Full Truckload 53' Dry Van</option>
                                        <option value="Dropdeck Flatbed">Dropdeck Flatbed</option>
                                        <option value="26' Straight Truck">26' Straight Truck</option>
                                        <option value="16' Box Truck">16' Box Truck</option>
                                        <option value="Sprinter Van">Sprinter Van</option>
                                      </select>
                                  </div>
                                </div>

                                <div class="col-lg-3">
                                  <div class="form-group">
                                      <label for="exampleInputName1" class="form-label"> Detention Allowance </label>
                                      <select name="detention_allowance" class="form-select soy-hegiht">
                                        <option value=""></option>
                                        <option value="30 Minutes" selected>30 Minutes</option>
                                        <option value="1 Hour">1 Hour</option>
                                        <option value="2 Hours">2 Hours</option>
                                      </select>
                                  </div>
                                </div>

                                <div class="col-lg-12">
                                  <h5> Accessorials  <span class="text-danger">*</span> </h5>

                                  <div class="d-flex align-items-center">
                                      <div class="form-check ps-4">
                                          <input class="form-check-input" name="accessorials[]" type="checkbox" value="Scales Tickets" id="flexCheckChecked">
                                          <label class="form-check-label ms-0" for="flexCheckChecked">
                                          Scales Tickets
                                          </label>
                                      </div>

                                      <div class="form-check ps-4 ms-4">
                                          <input class="form-check-input" name="accessorials[]" type="checkbox" value="Marshaling Yard" id="flexCheckChecked">
                                          <label class="form-check-label ms-0" for="flexCheckChecked">
                                          Marshaling Yard
                                          </label>
                                      </div>

                                      <div class="form-check ps-4 ms-4">
                                          <input class="form-check-input" name="accessorials[]" type="checkbox" value="Liftgate" id="flexCheckCheckedn">
                                          <label class="form-check-label ms-0" for="flexCheckCheckedn">
                                          Liftgate
                                          </label>
                                      </div>

                                      <div class="form-check ps-4 ms-4">
                                          <input class="form-check-input" name="accessorials[]" type="checkbox" value="Palletjack" id="flexCheckChecked">
                                          <label class="form-check-label ms-0" for="flexCheckChecked">
                                          Palletjack
                                          </label>
                                      </div>

                                      <div class="form-check ps-4 ms-4">
                                          <input class="form-check-input" name="accessorials[]" type="checkbox" value="Inside Pickup/​Delivery" id="flexCheckChecked">
                                          <label class="form-check-label ms-0" for="flexCheckChecked">
                                          Inside Pickup/​Delivery
                                          </label>
                                      </div>

                                  </div>
                                  <div class="col-lg-4">
                                    <div class="form-check d-flex align-items-center ps-4">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                            <input type="text" class="form-control ms-3" name="other" placeholder="Other">
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
                                    <div class="row"  id="origin">
                                    <h5> Origin Location </h5>

                                    <div class="form-group">
                                      <input type="text" class="form-control" name="origin_address_line_1" placeholder="Address Line 1">
                                    </div>

                                    <div class="form-group">
                                      <input type="text" class="form-control" name="origin_address_line_2" placeholder="Address Line 2">
                                    </div>

                                    <div class="row">
                                       <div class="col-lg-6">
                                          <div class="form-group">
                                            <input type="text" class="form-control" name="origin_city" placeholder="City">
                                          </div>
                                       </div>
                                       <div class="col-lg-6">
                                          <div class="form-group">
                                            <input type="text" class="form-control" name="origin_state" placeholder="State / Province / Region">
                                          </div>
                                       </div>

                                       <div class="col-lg-6">
                                          <div class="form-group">
                                            <input type="text" class="form-control" name="origin_zipcode" placeholder="Postal / Zip Code">
                                          </div>
                                       </div>

                                       <div class="col-lg-6">
                                          <div class="form-group">
                                                <select name="origin_country" class="form-select soy-hegiht">
                                                  <option value=""></option>
                                                  <option value="United States" selected>United States</option>
                                                  <option value="Canada">Canada</option>
                                                </select>
                                          </div>
                                       </div>

                                       <div class="col-lg-6">
                                          <div class="form-group">
                                             <label for="exampleInputName1" class="form-label"> Ready for Pickup </label>
                                             <input type="date" class="form-control" name="pickup_date">
                                             <p class="comon-texr"> Avoid weekends and holidays when possible. </p>
                                          </div>
                                       </div>

                                       <div class="col-lg-6">
                                          <div class="form-group">
                                             <label for="exampleInputName1" class="form-label"> Driver check-in before: </label>
                                             <input type="time" class="form-control" name="driver_check_in">

                                          </div>
                                       </div>
                                    </div>
                                </div>
                                    <div class="col-lg-12" id="marhyard" style="display: none;">
                                          <div class="form-group">
                                             <label for="exampleInputName1" class="form-label"> Marshaling Yard Address </label>
                                             <select class="form-select" name="marshaling_address_line_1" id="marh">
                                                <option value="">--Select--</option>
                                                 @php
                                                    $value = \DB::table('locations')->get();
                                                    foreach($value as $val)
                                                    {
                                                 @endphp
                                                   <option value="{{ $val->id }}">
                                                    {{ $val->location_descripton }}
                                                  </option>
                                                  @php
                                                    }
                                                 @endphp
                                            </select>
                                          </div>
                                          <!--<div class="form-group">
                                             <input type="text" class="form-control" name="marshaling_address_line_2" placeholder="Address Line 2">
                                          </div>
                                          <div class="row">
                                              <div class="col-lg-6">
                                                <div class="form-group">
                                                  <input type="text" class="form-control" name="marshaling_city" placeholder="City">
                                                </div>
                                              </div>
                                              <div class="col-lg-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="marshaling_state" placeholder="State">
                                                </div>
                                              </div>
                                          </div>
                                          <div class="form-group">
                                             <input type="text" class="form-control" name="marshaling_zipcode" placeholder="Zip Code">
                                             <p class="comon-texr"> (No worries. We'll look it up for you if it's not handy). </p>
                                          </div>-->
                                    </div>
                                </div>

                                <div class="col-lg-6  mt-4">
                                    <h5> Destination Location </h5>

                                    <div class="form-group">
                                      <select name="destination_address_line_1" id="advance" class="form-select" style="display: none;">

                                      </select>
                                    </div>

                                    <div class="form-group">
                                        <select name="destination_address_line_1" id="direct" class="form-select">
                                            <option value="">--Choose one--</option>
                                             @php
                                                 $venue = \DB::table('tradevenues')->get();
                                                 foreach($venue as $val)
                                                 {
                                                     $entity = \DB::table('entities')->where('id', $val->entity_id)->get();
                                                     $location = $entity[0]->legeal_name;
                                             @endphp
                                                 <option value="{{ $val->entity_id }}">{{ $location }}</option>
                                             @php
                                                 }
                                             @endphp
                                         </select>
                                    </div>

                                    <div class="row">
                                       <!--<div class="col-lg-6">
                                          <div class="form-group">
                                            <input type="text" class="form-control" name="destination_city" placeholder="City">
                                          </div>
                                       </div>
                                       <div class="col-lg-6">
                                          <div class="form-group">
                                            <input type="text" class="form-control" name="destination_state" placeholder="State / Province / Region">
                                          </div>
                                       </div>

                                       <div class="col-lg-6">
                                          <div class="form-group">
                                            <input type="text" class="form-control" name="destination_zipcode" placeholder="Postal / Zip Code">
                                          </div>
                                       </div>

                                       <div class="col-lg-6">
                                          <div class="form-group">
                                                <select name="destination_country" class="form-select soy-hegiht">
                                                  <option value="United States">United States</option>
                                                  <option value="Canada">Canada</option>
                                                </select>
                                          </div>
                                       </div>-->

                                       <div class="col-lg-6">
                                          <div class="form-group">
                                             <label for="exampleInputName1" class="form-label"> Delivery Deadline </label>
                                             <input type="date" class="form-control" name="delivery_deadline">
                                             <p class="comon-texr"> Avoid weekends and holidays when possible. </p>
                                          </div>
                                       </div>

                                       <div class="col-lg-6">
                                          <div class="form-group">
                                             <label for="exampleInputName1" class="form-label"> Driver check-in before: </label>
                                             <input type="time" class="form-control" name="driver_check_in_deadline">
                                          </div>
                                       </div>
                                    </div>

                                    <div class="col-lg-12" id="altaddress" style="display: none;">
                                        <h5> Alt Return Address </h5>

                                        <div class="form-group">
                                          <input type="text" class="form-control" name="alt_address_line_1" placeholder="Address Line 1">
                                        </div>

                                        <div class="form-group">
                                          <input type="text" class="form-control" name="alt_address_line_2" placeholder="Address Line 2">
                                        </div>

                                        <div class="row">
                                           <div class="col-lg-6">
                                              <div class="form-group">
                                                <input type="text" class="form-control" name="alt_city" placeholder="City">
                                              </div>
                                           </div>
                                           <div class="col-lg-6">
                                              <div class="form-group">
                                                <input type="text" class="form-control" name="alt_state" placeholder="State / Province / Region">
                                              </div>
                                           </div>

                                           <div class="col-lg-6">
                                              <div class="form-group">
                                                <input type="text" class="form-control" name="alt_zipcode" placeholder="Postal / Zip Code">
                                              </div>
                                           </div>

                                           <div class="col-lg-6">
                                              <div class="form-group">
                                                    <select name="alt_country" class="form-select soy-hegiht">
                                                      <option value=""></option>
                                                      <option value="United States">United States</option>
                                                      <option value="Canada">Canada</option>
                                                    </select>
                                              </div>
                                           </div>
                                        </div>
                                    </div>
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

                            <div id="ash-div" class="comonheadrt bg-light p-4">
                                <div class="d-flex align-items-center mb-4">
                                    <a id="maiu" class="btn btn-clop p-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293z"/>
                                      </svg>
                                    </a>
                                    <h5 class="m-0 ms-2"> Item 1 </h5>
                                </div>
                                <div class="row">
                                   <div class="col-lg-2">
                                        <div class="form-group">
                                            <label for="exampleInputName1"> Type </label>
                                            <input type="text" class="form-control" name="type[]" required>
                                        </div>
                                   </div>
                                   <div class="col-lg-2">
                                        <div class="form-group">
                                            <label for="exampleInputName1"> Qty </label>
                                            <input type="text" class="form-control" name="qty[]" required>
                                        </div>
                                   </div>
                                   <div class="col-lg-2">
                                        <div class="form-group">
                                            <label for="exampleInputName1"> Length </label>
                                            <input type="text" class="form-control" name="length[]" required>
                                            <p class="mt-2"> (inches) </p>
                                        </div>
                                   </div>
                                   <div class="col-lg-2">
                                        <div class="form-group">
                                            <label for="exampleInputName1"> Width </label>
                                            <input type="text" class="form-control" name="width[]" required>
                                            <p class="mt-2"> (inches) </p>
                                        </div>
                                   </div>
                                   <div class="col-lg-2">
                                        <div class="form-group">
                                            <label for="exampleInputName1"> Height </label>
                                            <input type="text" class="form-control" name="height[]" required>
                                            <p class="mt-2"> (inches) </p>
                                        </div>
                                   </div>

                                   <div class="col-lg-2">
                                        <div class="form-group">
                                            <label for="exampleInputName1"> Weight </label>
                                            <input type="text" class="form-control" name="weight[]" required>
                                            <p class="mt-2"> (pounds) </p>
                                        </div>
                                   </div>

                                   <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="exampleInputName1"> Description </label>
                                            <input type="text" class="form-control" name="description[]" required>
                                            <p class="mt-2 comon-texr"> Color, Material, Markings, Contents </p>
                                        </div>
                                   </div>
                                   <div class="col-lg-2">
                                        <div class="form-check ps-4">
                                          <input class="form-check-input" type="checkbox" value="Y" name="Hazardous[]" id="flexCheckDefault">
                                          <label class="form-check-label m-0" for="flexCheckDefault">
                                          Hazardous
                                          </label>
                                        </div>
                                        <p class="mt-2 comon-texr"> Is this a hazardous material? </p>
                                   </div>
                                   <div class="col-lg-2">
                                        <div class="form-check ps-4">
                                          <input class="form-check-input" type="checkbox" value="Y" name="Stackable[]" id="flexCheckDefault">
                                          <label class="form-check-label m-0" for="flexCheckDefault">
                                          Stackable
                                          </label>
                                        </div>
                                        <p class="comon-texr"> Allowed on outbound shipments. </p>
                                   </div>

                                   <!--<div class="col-lg-2">
                                        <div class="form-group">
                                            <label for="exampleInputName1"> Photo </label>
                                            <div class="duio">
                                              <input class="form-control" type="file" id="formFile">
                                            </div>
                                            <p class="comon-texr"> bmp, jpg, png, pdf, (2MB)</p>
                                        </div>
                                   </div>-->

                                </div>
                            </div>
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
          <x-adminfooter/>
