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
                        <h4 class="card-title cmonu-head">Tradeshow Venue</h4>
                        <form name="addfrm" action="{{ URL::to('updatetradevenue') }}" method="POST" class="forms-sample">
                            <input type="hidden" name="id" value="{{ $data['id'] }}" />
                            @csrf
                            <div class="row">
                                <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="exampleInputName1">Venue Entity</label>
                                    <span class="d-block">
                                        @php
                                        $parent = \DB::table('entities')->where('id',$data['entity_id'])->get();
                                        echo @$parent[0]->legeal_name;
                                    @endphp
                                    </span>
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
                                                <span class="d-block">{{ $showfloor['area_name'][$x-1] }}</span>
                                             </div>
                                          </div>
                                          <div class="col-lg-4 ">
                                             <div class="form-group">
                                                <label class="form-label"> Square Feet </label>
                                                <span class="d-block">{{ $showfloor['square_feet'][$x-1] }}</span>
                                             </div>
                                          </div>
                                       </div>
                                   </div>
                               </div>
                               <hr>
                            @php
                                }
                            @endphp
                            </div>

                            <div>&nbsp;</div>

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
                                                <span class="d-block">{{ $loading['location_description'][$k-1] }}</span>
                                             </div>

                                             <div class="form-group">
                                                <label class="form-label"> Address </label>
                                                <span class="d-block">{{ $loading['address_1'][$k-1] }}</span>
                                             </div>
                                             <div class="form-group">
                                                <label class="form-label"> Address 2 </label>
                                                <span class="d-block">{{ $loading['address_2'][$k-1] }}</span>
                                             </div>
                                             <div class="form-group">
                                                <label class="form-label"> City </label>
                                                <span class="d-block">{{ $loading['city'][$k-1] }}</span>
                                             </div>
                                             <div class="d-flex align-items-center justify-content-between">
                                                <div class="form-group col-lg-8">
                                                    <label class="form-label">State </label>
                                                    <span class="d-block">{{ $loading['state'][$k-1] }}</span>
                                                </div>
                                                <div class="form-group col-lg-3">
                                                    <label class="form-label"> Zipcode </label>
                                                    <span class="d-block">{{ $loading['zipcode'][$k-1] }}</span>
                                                </div>
                                             </div>

                                          </div>
                                          <div class="col-lg-4">
                                             <div class="form-group">
                                                <label class="form-label"> Google Map URL </label>
                                                <span class="d-block">{{ $loading['google_map_url'][$k-1] }}</span>
                                             </div>
                                             <div class="form-group">
                                                <label class="form-label"> Driver Instructions </label>
                                                <span class="d-block">{{ $loading['driver_instruction'][$k-1] }}</span>
                                             </div>
                                          </div>
                                       </div>
                                   </div>
                               </div>
                               <hr>
                               @php
                                }
                            @endphp

                            </div>

                            <div>&nbsp;</div>

                          <button type="button" class="btn btn-light" onclick="javascript:history.go(-1);">Back</button>
                        </form>
                      </div>
                    </div>
                  </div>

            </div>
        </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <x-adminfooter/>
