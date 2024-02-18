<x-adminheader/>
      <!-- partial -->
   <x-adminsidebar/>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
                <form name="addfrm" action="{{ URL::to('insertdata') }}" method="POST" class="forms-sample" enctype="multipart/form-data">
                 @csrf
                <div class="col-12 mne grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Locations</h4>
                        <p> Address Records </p>
                        <div class="form-group mb-3">
                           <label for="exampleFormControlInput1" class="form-label">Location Descripton</label>
                           <input type="text" class="form-control" name="location_descripton">
                        </div>
                            <div class="row gy-lg-4">
                              <div class="col-lg-6">
                                  <h5> Location Type </h5>
                                  <div class="d-flex pout-texr flex-wrap align-items-center">
                                      <div class="form-check">
                                        <input class="form-check-input" name="location_type" type="radio" value="Business" id="lt1">
                                        <label class="form-check-label" for="lt1">
                                           Business
                                        </label>
                                      </div>

                                      <div class="form-check">
                                        <input class="form-check-input" name="location_type" type="radio" value="Residence" id="lt2">
                                        <label class="form-check-label" for="lt2">
                                        Residence
                                        </label>
                                      </div>

                                      <div class="form-check">
                                        <input class="form-check-input" name="location_type" type="radio" value="PO Box" id="lt3">
                                        <label class="form-check-label" for="lt3">
                                        PO Box
                                        </label>
                                      </div>

                                      <div class="form-check">
                                        <input class="form-check-input" name="location_type" type="radio" value="Storage Facility" id="lt4">
                                        <label class="form-check-label" for="lt4">
                                        Storage Facility
                                        </label>
                                      </div>

                                      <div class="form-check">
                                        <input class="form-check-input" name="location_type" type="radio" value="Tradeshow Venue" id="lt5">
                                        <label class="form-check-label" for="lt5">
                                        Tradeshow Venue
                                        </label>
                                      </div>

                                      <div class="form-check">
                                        <input class="form-check-input" name="location_type" type="radio" value="Advance Warehouse" id="lt6">
                                        <label class="form-check-label" for="lt6">
                                        Advance Warehouse
                                        </label>
                                      </div>

                                      <div class="form-check">
                                        <input class="form-check-input" name="location_type" type="radio" value="Marshaling Yard" id="lt6">
                                        <label class="form-check-label" for="lt6">
                                        Marshaling Yard
                                        </label>
                                      </div>

                                  </div>
                              </div>

                              <div class="col-lg-6">
                                  <h5> Loading Requirements </h5>
                                  <div class="d-flex pout-texr flex-wrap align-items-center">
                                      <div class="form-check">
                                        <input class="form-check-input" name="loading_requirements[]" type="checkbox" value="Has 48 Loading Dock" id="ltc1">
                                        <label class="form-check-label" for="ltc1">
                                          Has 48 Loading Dock
                                        </label>
                                      </div>

                                      <div class="form-check">
                                        <input class="form-check-input"  name="loading_requirements[]" type="checkbox" value="Ground Level door" id="ltc2">
                                        <label class="form-check-label" for="ltc2">
                                        Ground Level door
                                        </label>
                                      </div>

                                      <div class="form-check">
                                        <input class="form-check-input"  name="loading_requirements[]" type="checkbox" value="Loading by Forklift" id="ltc3">
                                        <label class="form-check-label" for="ltc3">
                                        Loading by Forklift
                                        </label>
                                      </div>

                                      <div class="form-check">
                                        <input class="form-check-input"  name="loading_requirements[]" type="checkbox" value="Liftgate Required" id="ltc4">
                                        <label class="form-check-label" for="ltc4">
                                        Liftgate Required
                                        </label>
                                      </div>

                                      <div class="form-check">
                                        <input class="form-check-input" name="loading_requirements[]"  type="checkbox" value="Palletjack Required" id="ltc5">
                                        <label class="form-check-label" for="ltc5">
                                        Palletjack Required
                                        </label>
                                      </div>

                                      <div class="form-check">
                                        <input class="form-check-input"  name="loading_requirements[]" type="checkbox" value="Inside Pickup/​Delivery" id="ltc6">
                                        <label class="form-check-label" for="ltc6">
                                        Inside Pickup/​Delivery
                                        </label>
                                      </div>

                                      <div class="form-check">
                                        <input class="form-check-input" name="loading_requirements[]"  type="checkbox" value="Multi-story Office" id="ltc7">
                                        <label class="form-check-label" for="ltc7">
                                        Multi-story Office
                                        </label>
                                      </div>

                                      <div class="form-check d-flex align-items-center">
                                        <input class="form-check-input"  name="loading_requirements[]" type="checkbox" value="other" id="ltc8">
                                        <div class="fom ms-2">
                                           &nbsp;<input type="text" name="others" class="form-control" placeholder="Others">
                                        </div>
                                      </div>

                                  </div>
                              </div>
                              <div class="col-lg-6">
                                  <h5> Billing Address </h5>
                                  <div class="d-flex pout-texr flex-wrap align-items-center">
                                      <div class="form-check">
                                            <input class="form-check-input"  name="billing_address" type="radio" value="Yes" id="bltc1">
                                            <label class="form-check-label" for="bltc1">
                                            Yes
                                            </label>
                                      </div>

                                      <div class="form-check">
                                            <input class="form-check-input"  name="billing_address" type="radio" value="No" id="bltc7" checked>
                                            <label class="form-check-label" for="bltc7" checkdate>
                                            No
                                            </label>
                                      </div>
                                  </div>
                              </div>


                              <div class="col-lg-6">
                                  <h5> Public Scales on Site </h5>
                                  <div class="d-flex pout-texr flex-wrap align-items-center">
                                      <div class="form-check">
                                            <input class="form-check-input" name="public_scales_on_site" type="radio" value="Yes" id="bltc1">
                                            <label class="form-check-label" for="bltc1">
                                            Yes
                                            </label>
                                      </div>

                                      <div class="form-check">
                                            <input class="form-check-input" name="public_scales_on_site" type="radio" value="No" id="bltc7" checked>
                                            <label class="form-check-label" for="bltc7" checkdate>
                                            No
                                            </label>
                                      </div>
                                  </div>
                              </div>
                            </div>

                            <div class="form-group mb-3">
                              <label for="exampleFormControlInput1" class="form-label">Google Autocomplete</label>
                              <input type="text" class="form-control" name="google_autocomplete">
                            </div>

                           <div class="row">
                              <div class="col-lg-12">
                                  <div class="form-group">
                                    <label for="exampleFormControlInput1" class="form-label">Address</label>
                                    <input type="text" class="form-control" name="address_line_1" placeholder="Address Line 1">
                                  </div>
                              </div>

                              <div class="col-lg-12">
                                  <div class="form-group">
                                    <input type="text" class="form-control" name="address_line_2" placeholder="Address Line 2">
                                  </div>
                              </div>

                              <div class="col-lg-4">
                                  <div class="form-group">
                                    <input type="text" class="form-control" name="city" placeholder="City">
                                  </div>
                              </div>

                              <div class="col-lg-4">
                                  <div class="form-group">
                                    <select name="state" class="form-select">
                                        <option value="">State</option>
                                        @php
                                            $states =  \DB::table('states')->get();
                                            foreach($states as $val)
                                            {
                                        @endphp
                                        <option value="{{ $val->state }}">{{ $val->state }}</option>
                                        @php
                                            }
                                        @endphp
                                        </select>
                                  </div>
                              </div>

                              <div class="col-lg-4">
                                  <div class="form-group">
                                    <input type="text" class="form-control" name="zipcode" placeholder="Zip Code">
                                  </div>
                              </div>

                              <div class="col-lg-4">
                                  <div class="form-group">
                                  <label for="exampleFormControlInput1" class="form-label">Country</label>
                                    <input type="text" class="form-control" name="country" placeholder="Japan">
                                  </div>
                              </div>

                              <div class="col-lg-4">
                               <div class="form-group">
                                     <label for="exampleFormControlInput1" class="form-label">Timezone</label>
                                     <select name="timezone" class="form-select" aria-label="Default select example">
                                        <option value=""></option>
                                        <option value="Pacific Time">Pacific Time</option>
                                        <option value="Mountain Time">Mountain Time</option>
                                        <option value="Central Time">Central Time</option>
                                        <option value="Eastern Time">Eastern Time</option>
                                        <option value="Alaska/Hawaii Time">Alaska/Hawaii Time</option>
                                      </select>
                                  </div>
                              </div>

                              <div class="col-lg-4">
                                  <div class="form-group">
                                    <h5> Observes DST </h5>
                                    <div class="d-flex pout-texr flex-wrap align-items-center">
                                       <div class="form-check">
                                          <input class="form-check-input" type="radio" name="observes_dst" value="Yes" id="observes1">
                                          <label class="form-check-label" for="observes1">
                                            Yes
                                          </label>
                                        </div>
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="observes_dst" value="No" id="observes2" checked>
                                          <label class="form-check-label" for="observes2">
                                            No
                                          </label>
                                        </div>
                                    </div>
                                  </div>
                              </div>

                              <div class="col-lg-12">
                                  <h5> Days Open </h5>
                                  <div class="d-flex pout-texr flex-wrap align-items-center">
                                      <div class="form-check">
                                        <input class="form-check-input" name="days_open[]" type="checkbox" value="Monday" id="day1">
                                        <label class="form-check-label" for="ltc1">
                                          Monday
                                        </label>
                                      </div>

                                      <div class="form-check">
                                        <input class="form-check-input" name="days_open[]"  type="checkbox" value="Tuesday" id="ltc2">
                                        <label class="form-check-label" for="ltc2">
                                        Tuesday
                                        </label>
                                      </div>

                                      <div class="form-check">
                                        <input class="form-check-input" name="days_open[]" type="checkbox" value="Wednesday" id="ltc3">
                                        <label class="form-check-label" for="ltc3">
                                        Wednesday
                                        </label>
                                      </div>

                                      <div class="form-check">
                                        <input class="form-check-input" name="days_open[]" type="checkbox" value="Thursday" id="ltc4">
                                        <label class="form-check-label" for="ltc4">
                                        Thursday
                                        </label>
                                      </div>

                                      <div class="form-check">
                                        <input class="form-check-input" name="days_open[]" type="checkbox" value="Friday" id="ltc5">
                                        <label class="form-check-label" for="ltc5">
                                        Friday
                                        </label>
                                      </div>

                                      <div class="form-check">
                                        <input class="form-check-input" name="days_open[]" type="checkbox" value="Saturday" id="ltc6">
                                        <label class="form-check-label" for="ltc6">
                                        Saturday
                                        </label>
                                      </div>

                                      <div class="form-check">
                                        <input class="form-check-input" name="days_open[]"  type="checkbox" value="Sunday" id="ltc7">
                                        <label class="form-check-label" for="ltc7">
                                        Sunday
                                        </label>
                                      </div>

                                      <div class="form-check">
                                        <input class="form-check-input" name="days_open[]"  type="checkbox" value="Closed on Holidays" id="ltc7">
                                        <label class="form-check-label" for="ltc7">
                                        Closed on Holidays
                                        </label>
                                      </div>
                                  </div>
                              </div>

                              <div class="col-lg-12 mt-3">
                                  <div class="row">
                                     <div class="col-lg-3">
                                          <div class="form-group mb-3">
                                            <label for="exampleFormControlInput1" class="form-label"> Open Hours </label>
                                            <input type="time" class="form-control" name="open_hours">
                                          </div>
                                     </div>

                                     <div class="col-lg-3">
                                          <div class="form-group mb-3">
                                            <label for="exampleFormControlInput1" class="form-label"> Closes at: </label>
                                            <input type="time" class="form-control" name="closed_at">
                                          </div>
                                     </div>

                                     <div class="col-lg-3">
                                          <div class="form-group mb-3">
                                            <label for="exampleFormControlInput1" class="form-label"> Check in Deadline </label>
                                            <input type="time" class="form-control" name="check_in_deadline">
                                          </div>
                                     </div>

                                     <div class="col-lg-3">
                                          <div class="form-group mb-3">
                                            <label for="exampleFormControlInput1" class="form-label"> Notify Contact </label>
                                            <select name="notify_contact" class="form-select" aria-label="Default select example">
                                              <option selected>select</option>
                                              @php
                                              $entities = \DB::table('entities')->get();
                                              foreach($entities as $enty)
                                              {
                                          @endphp
                                          <option value="{{ $enty->id }}">
                                           {{ $enty->legeal_name }}
                                         </option>
                                          @php
                                              }
                                          @endphp
                                            </select>
                                          </div>
                                     </div>
                                  </div>
                              </div>

                              <div class="col-lg-12">

                                  <div class="form-group mb-3">
                                    <label for="exampleFormControlInput1" class="form-label"> Driver Instructions
                                       </label>
                                    <input type="text" class="form-control" name="driver_instructions">
                                  </div>
                              </div>

                              <div class="col-lg-12">
                                <div class="form-group mb-3">
                                  <label for="exampleFormControlInput1" class="form-label"> Google Maps URL
                                    </label>
                                  <input type="text" class="form-control" name="google_map_url">
                                </div>
                                </div>
                           </div>
                      </div>
                      </div>
                  </div>
               </div>

               <button type="submit" name="btnsubmit" class="btn btn-gradient-primary me-2" align="right">Submit</button>
               <button type="button" name="cancel" class="btn btn-light" onclick="javascript:history.go(-1);" align="right">Cancel</button>
             </form>
           </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <x-adminfooter/>
