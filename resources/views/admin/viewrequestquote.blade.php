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
                        <h4 class="card-title">View Quote</h4>

                            <div class="row">
                                <div class="col-lg-4">
                                  <div class="form-group">
                                      <label for="exampleInputName1" class="form-label"> Customer Contact Name <span class="text-danger">*</span> </label>
                                      <span class="d-block">{{ $data['customer_contact_name'] }}</span>
                                  </div>
                                </div>

                                <div class="col-lg-4">
                                  <div class="form-group">
                                      <label for="exampleInputName1" class="form-label"> Email <span class="text-danger">*</span> </label>
                                      <span class="d-block">{{ $data['email'] }}</span>
                                  </div>
                                </div>

                                <div class="col-lg-4">
                                  <div class="form-group">
                                      <label for="exampleInputName1" class="form-label"> Phone </label>
                                      <span class="d-block">{{ $data['phone'] }}</span>
                                  </div>
                                </div>

                                <div class="col-lg-2">
                                  <div class="form-group">
                                      <label for="exampleInputName1" class="form-label"> Shipment Type </label>
                                      <span class="d-block">{{ $data['shipment_type'] }}</span>
                                  </div>
                                </div>

                                <div class="col-lg-2">
                                    <div class="form-check m-0">
                                        <label for="exampleInputName1" class="form-label"> Return to Origin </label>
                                        <span class="d-block">{{ $data['return_to_origin'] }}</span>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                  <div class="form-group">
                                      <label for="exampleInputName1" class="form-label"> Exhibitor Name </label>
                                      <span class="d-block">{{ $data['exhibitor_name'] }}</span>
                                  </div>
                                </div>

                                <div class="col-lg-4">
                                  <div class="form-group">
                                      <label for="exampleInputName1" class="form-label"> Booth # </label>
                                      <span class="d-block">{{ $data['booth'] }}</span>
                                  </div>
                                </div>

                                <div class="col-lg-4">
                                  <div class="form-group">
                                      <label for="exampleInputName1" class="form-label"> Tradeshow Name <span class="text-danger">*</span> </label>
                                      <span class="d-block">
                                            @php
                                                $trades = \DB::table('tradeshows')->where('id',$data['tradeshow_name'])->get();
                                                echo $trades[0]->show_name;
                                            @endphp
                                     </span>
                                  </div>
                                </div>

                                <div class="col-lg-4">
                                  <div class="form-group">
                                      <label for="exampleInputName1" class="form-label"> Show Management Contractor </label>
                                      <span class="d-block">{{ $data['show_management_contractor'] }}</span>
                                  </div>
                                </div>

                                <div class="col-lg-4">
                                  <div class="form-group">
                                      <label for="exampleInputName1" class="form-label"> Tradeshow Venue <span class="text-danger">*</span> </label>
                                      <span class="d-block">{{ $data['tradeshow_venue'] }}</span>
                                  </div>
                                </div>

                                <div class="col-lg-3">
                                  <h5> Show Destination  <span class="text-danger">*</span> </h5>
                                  <span class="d-block">{{ $data['show_destination'] }}</span>
                                </div>

                                <div class="col-lg-3">
                                  <div class="form-group">
                                      <label for="exampleInputName1" class="form-label"> Service Level </label>
                                      <span class="d-block">{{ $data['service_level'] }}</span>
                                  </div>
                                </div>

                                <div class="col-lg-3">
                                  <div class="form-group">
                                      <label for="exampleInputName1" class="form-label"> Equipment </label>
                                      <span class="d-block">{{ $data['equipment'] }}</span>
                                  </div>
                                </div>

                                <div class="col-lg-3">
                                  <div class="form-group">
                                      <label for="exampleInputName1" class="form-label"> Detention Allowance </label>
                                      <span class="d-block">{{ $data['detention_allowance'] }}</span>
                                  </div>
                                </div>

                                <div class="col-lg-12">
                                  <h5> Accessorials  <span class="text-danger">*</span> </h5>
                                  <span class="d-block">{{ $data['accessorials'] }}</span>
                                  <div class="col-lg-8"> </div>
                                </div>


                                <div class="col-lg-8"> </div>

                                <div class="col-lg-6 mt-4">
                                    <h5> Origin Location </h5>

                                    <div class="form-group">
                                        <label for="exampleInputName1" class="form-label">Origin Address 1</label>
                                        <span class="d-block">{{ $data['origin_address_line_1'] }}</span>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputName1" class="form-label">Origin Address 2</label>
                                        <span class="d-block">{{ $data['origin_address_line_2'] }}</span>
                                    </div>

                                    <div class="row">
                                       <div class="col-lg-6">
                                          <div class="form-group">
                                            <label for="exampleInputName1" class="form-label">Origin City</label>
                                            <span class="d-block">{{ $data['origin_city'] }}</span>
                                          </div>
                                       </div>
                                       <div class="col-lg-6">
                                          <div class="form-group">
                                            <label for="exampleInputName1" class="form-label">Origin State</label>
                                            <span class="d-block">{{ $data['origin_state'] }}</span>
                                          </div>
                                       </div>

                                       <div class="col-lg-6">
                                          <div class="form-group">
                                            <label for="exampleInputName1" class="form-label">Origin Zipcode</label>
                                            <span class="d-block">{{ $data['origin_zipcode'] }}</span>
                                          </div>
                                       </div>

                                       <div class="col-lg-6">
                                          <div class="form-group">
                                            <label for="exampleInputName1" class="form-label">Origin Country</label>
                                            <span class="d-block">{{ $data['origin_country'] }}</span>
                                          </div>
                                       </div>

                                       <div class="col-lg-6">
                                          <div class="form-group">
                                             <label for="exampleInputName1" class="form-label"> Ready for Pickup </label>
                                             <span class="d-block">{{ $data['pickup_date'] }}</span>
                                          </div>
                                       </div>

                                       <div class="col-lg-6">
                                          <div class="form-group">
                                             <label for="exampleInputName1" class="form-label"> Driver check-in before: </label>
                                             <span class="d-block">{{ $data['driver_check_in'] }}</span>
                                          </div>
                                       </div>
                                    </div>

                                    <div class="col-lg-12">
                                          <div class="form-group">
                                             <label for="exampleInputName1" class="form-label"> Marshaling Yard Address </label>
                                             <span class="d-block">{{ $data['marshaling_address_line_1'] }}</span>
                                          </div>
                                          <div class="form-group">
                                            <span class="d-block">{{ $data['marshaling_address_line_2'] }}</span>
                                          </div>
                                          <div class="row">
                                              <div class="col-lg-6">
                                                <div class="form-group">
                                                   <span class="d-block">{{ $data['marshaling_city'] }}</span>
                                                </div>
                                              </div>
                                              <div class="col-lg-6">
                                                <div class="form-group">
                                                    <span class="d-block">{{ $data['marshaling_state'] }}</span>
                                                </div>
                                              </div>
                                          </div>
                                          <div class="form-group">
                                            <span class="d-block">{{ $data['marshaling_zipcode'] }}</span>
                                          </div>
                                    </div>
                                </div>

                                <div class="col-lg-6  mt-4">
                                    <h5> Alt Return Address </h5>

                                    <div class="form-group">
                                        <span class="d-block">{{ $data['destination_address_line_1'] }}</span>
                                    </div>

                                    <div class="form-group">
                                        <span class="d-block">{{ $data['destination_address_line_2'] }}</span>
                                    </div>

                                    <div class="row">
                                       <div class="col-lg-6">
                                          <div class="form-group">
                                            <span class="d-block">{{ $data['destination_city'] }}</span>
                                          </div>
                                       </div>
                                       <div class="col-lg-6">
                                          <div class="form-group">
                                            <span class="d-block">{{ $data['destination_state'] }}</span>
                                          </div>
                                       </div>

                                       <div class="col-lg-6">
                                          <div class="form-group">
                                            <span class="d-block">{{ $data['destination_zipcode'] }}</span>
                                          </div>
                                       </div>

                                       <div class="col-lg-6">
                                          <div class="form-group">
                                            <span class="d-block">{{ $data['destination_country'] }}</span>
                                          </div>
                                       </div>

                                       <div class="col-lg-6">
                                          <div class="form-group">
                                             <label for="exampleInputName1" class="form-label"> Delivery Deadline </label>
                                             <span class="d-block">{{ $data['delivery_deadline'] }}</span>
                                          </div>
                                       </div>

                                       <div class="col-lg-6">
                                          <div class="form-group">
                                             <label for="exampleInputName1" class="form-label"> Driver check-in before: </label>
                                             <span class="d-block">{{ $data['driver_check_in_deadline'] }}</span>
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

                            @php
                                $items = json_decode($data['cargo_Items'],true);
                                $count = count($items['type']);

                                for($j=1;$j<=($count);$j++)
                                {
                            @endphp


                            <div id="ash-div" class="comonheadrt bg-light p-4 mb-4">

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
                                            <span class="d-block">{{ @$items['type'][$j-1] }}</span>
                                        </div>
                                   </div>
                                   <div class="col-lg-2">
                                        <div class="form-group">
                                            <label for="exampleInputName1"> Qty </label>
                                            <span class="d-block">{{ @$items['qty'][$j-1] }}</span>
                                        </div>
                                   </div>
                                   <div class="col-lg-2">
                                        <div class="form-group">
                                            <label for="exampleInputName1"> Length </label>
                                            <span class="d-block">{{ @$items['length'][$j-1] }}</span>
                                            <p class="mt-2"> (inches) </p>
                                        </div>
                                   </div>
                                   <div class="col-lg-2">
                                        <div class="form-group">
                                            <label for="exampleInputName1"> Width </label>
                                            <span class="d-block">{{ @$items['width'][$j-1] }}</span>
                                            <p class="mt-2"> (inches) </p>
                                        </div>
                                   </div>
                                   <div class="col-lg-2">
                                        <div class="form-group">
                                            <label for="exampleInputName1"> Height </label>
                                            <span class="d-block">{{ @$items['height'][$j-1] }}</span>
                                            <p class="mt-2"> (inches) </p>
                                        </div>
                                   </div>

                                   <div class="col-lg-2">
                                        <div class="form-group">
                                            <label for="exampleInputName1"> Weight </label>
                                            <span class="d-block">{{ @$items['weight'][$j-1] }}</span>
                                            <p class="mt-2"> (pounds) </p>
                                        </div>
                                   </div>

                                   <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="exampleInputName1"> Description </label>
                                            <span class="d-block">{{ @$items['description'][$j-1] }}</span>
                                            <p class="mt-2 comon-texr"> Color, Material, Markings, Contents </p>
                                        </div>
                                   </div>
                                   <div class="col-lg-2">
                                        <div class="form-check">
                                            <label class="form-check-label m-0" for="flexCheckDefault">Hazardous</label>
                                            <span class="d-block">{{ @$items['Hazardous'][$j-1] }}</span>
                                        </div>
                                        <p class="mt-2 comon-texr"> Is this a hazardous material? </p>
                                   </div>
                                   <div class="col-lg-2">
                                        <div class="form-check">
                                          <label class="form-check-label m-0" for="flexCheckDefault">
                                          Stackable
                                          </label>
                                          <span class="d-block">{{ @$items['Stackable'][$j-1] }}</span>
                                        </div>
                                        <p class="comon-texr"> Allowed on outbound shipments. </p>
                                   </div>

                                </div>

                            </div>

                            @php
                                }
                            @endphp

                          <button type="button" name="cancel" class="btn btn-dark" onclick="javascript:history.go(-1);">Back</button>
                        </form>
                      </div>
                    </div>
                  </div>

            </div>
        </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <x-adminfooter/>
