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
                        <h4 class="card-title cmonu-head">Edit Tradeshow Venue</h4>
                        <form name="addfrm" action="{{ URL::to('updatetradevenue') }}" method="POST" class="forms-sample">
                            <input type="hidden" name="id" value="{{ $data['id'] }}" />
                            @csrf
                            <div class="row">
                                <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="exampleInputName1">Venue Entity</label>
                                    <select name="entity_id" class="form-select">
                                      <option value="" selected></option>
                                      @php
                                      $entity = \DB::table('entities')->get();
                                      foreach($entity as $val)
                                      {
                                        @endphp
                                        <option value="{{ $val->id }}"@php
                                            if($val->id==$data['entity_id']) { echo 'selected'; }
                                        @endphp>{{ $val->legeal_name }}</option>
                                        @php
                                            }
                                        @endphp
                                    </select>
                                </div>
                                </div>
                            </div>

                            <h4 class="card-title cmonu-head">Showfloor Locations</h4>
                            <div id="venues" class="add-newr01 bg-light p-4 mt-4">

                             @php
                                $showfloor = json_decode($data['showfloor_locations'],true);

                                $count = count($showfloor['area_name']);
                                for($x=1;$x<=($count);$x++)
                                {
                            @endphp
                               <div class="row">
                                   <div class="comon-adu-section">
                                       <div class="d-flex align-items-center mb-3">
                                           <a id="clo-venues" class="btn p-0 btn-dter">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
                                                  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293z"/>
                                                </svg>
                                           </a>
                                           <h4 class="m-0 ms-1"> Item {{ $x }} </h4>
                                       </div>
                                       <div class="row">
                                          <div class="col-lg-8">
                                             <div class="form-group">
                                                <label class="form-label"> Area Name </label>
                                                <input type="text" name="area_name[]" value="{{ $showfloor['area_name'][$x-1] }}" class="form-control">
                                             </div>
                                          </div>
                                          <div class="col-lg-4 ">
                                             <div class="form-group">
                                                <label class="form-label"> Square Feet </label>
                                                <input type="text" name="square_feet[]" value="{{ $showfloor['square_feet'][$x-1] }}" class="form-control">
                                             </div>
                                          </div>
                                       </div>
                                   </div>
                               </div>
                            @php
                                }
                            @endphp
                            </div>

                            <div id="ccolonejv2"></div>

                            <a id="sh-addv2" class="btn p-3 btn-primary btn-add-btn mt-3 mb-4"> <span> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
  <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
</svg> </span> Add Item </a>

                           <h4 class="card-title cmonu-head mt-4">Loading Locations</h4>
                            <div id="loading" class="add-newr01 bg-light p-4 mt-4">

                           @php
                                $loading = json_decode($data['loading_locations'],true);

                                $count = count($loading['location_description']);
                                for($k=1;$k<=($count);$k++)
                                {
                            @endphp
                                <div class="row">
                                   <div class="comon-adu-section">
                                      <div class="d-flex align-items-center mb-4">
                                           <a id="clo-loading" class="btn p-0 btn-dter">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
                                                  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293z"/>
                                                </svg>
                                           </a>
                                           <h4 class="m-0 ms-1"> Item {{ $k }} </h4>
                                       </div>
                                       <div class="row">
                                          <div class="col-lg-8">
                                             <div class="form-group">
                                                <label class="form-label"> Location Description </label>
                                                <input type="text" name="location_description[]" value="{{ $loading['location_description'][$k-1] }}" class="form-control">
                                             </div>

                                             <div class="form-group">
                                                <label class="form-label"> Address </label>
                                                <input type="text" name="address_1[]" value="{{ $loading['address_1'][$k-1] }}" class="form-control" placeholder="Address Line 1"/>
                                             </div>
                                             <div class="form-group">
                                                <input type="text" name="address_2[]" value="{{ $loading['address_2'][$k-1] }}" class="form-control" placeholder="Address Line 2"/>
                                             </div>
                                             <div class="form-group">
                                                <input type="text" name="city[]" value="{{ $loading['city'][$k-1] }}" class="form-control" placeholder="City"/>
                                             </div>
                                             <div class="d-flex align-items-center justify-content-between">
                                                <div class="form-group col-lg-8">
                                                    <input type="text" name="state[]" value="{{ $loading['state'][$k-1] }}" class="form-control" placeholder="State"/>
                                                </div>
                                                <div class="form-group col-lg-3">
                                                      <input type="text" name="zipcode[]" value="{{ $loading['zipcode'][$k-1] }}" class="form-control" placeholder="Zipcode"/>
                                                </div>
                                             </div>

                                          </div>
                                          <div class="col-lg-4">
                                             <div class="form-group">
                                                <label class="form-label"> Google Map URL </label>
                                                <input type="text" name="google_map_url[]" value="{{ $loading['google_map_url'][$k-1] }}" class="form-control">
                                             </div>
                                             <div class="form-group">
                                                <label class="form-label"> Driver Instructions </label>
                                                <textarea name="driver_instruction[]" value="{{ $loading['driver_instruction'][$k-1] }}" class="form-control texr08"></textarea>
                                             </div>
                                          </div>
                                       </div>
                                   </div>
                               </div>
                               @php
                                }
                            @endphp

                            </div>

                            <div id="ccolonejvx2"></div>

                            <a id="sh-addvx2" class="btn p-3 btn-primary d-table btn-add-btn mt-3 mb-4"> <span> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                              <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
                            </svg> </span> Add Item </a>

                          <button type="submit" name="btn" class="btn btn-gradient-primary me-2">Submit</button>
                          <button type="button" class="btn btn-light" onclick="javascript:history.go(-1);">Cancel</button>
                        </form>
                      </div>
                    </div>
                  </div>

            </div>
        </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <x-adminfooter/>
