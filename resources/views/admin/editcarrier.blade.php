<x-adminheader/>
      <!-- partial -->
   <x-adminsidebar/>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
           <!----Main Row--------->
           <form name="addfrm" action="{{ URL::to('updatecarrier') }}" method="POST" class="forms-sample">
            <input type="hidden" name="id" value="{{ $data['id'] }}"/>
            @csrf
             <div class="row">
                 <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Edit Carrier</h4>

                            <div class="row">
                                <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="exampleInputName1">carrier Name</label>
                                    <input type="text" class="form-control" name="carrier_name" value="{{ $data['carrier_name'] }}">
                                </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">

                                        <label> Parent Office </label>
                                       <select name="parent_office" class="form-select" placeholder="Select Head Office">
                                        <option value=""></option>
                                         @php
                                            $value = \DB::table('carriers')->get();
                                            foreach($value as $val)
                                            {
                                         @endphp
                                           <option value="{{ $val->id }}"@php if($data['parent_office']==$val->id) { echo 'selected'; } @endphp>
                                            {{ $val->carrier_name }}
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
                                    <label> Location </label>
                                    <select name="location" id="" class="form-select" placeholder="Select Location" required>
                                        <option value=""></option>
                                         @php
                                            $value = \DB::table('locations')->get();
                                            foreach($value as $val)
                                            {
                                         @endphp
                                           <option value="{{ $val->id }}"@php if($val->id==$data['location']) { echo 'selected'; } @endphp>
                                            {{ $val->location_descripton }}
                                          </option>
                                          @php
                                            }
                                         @endphp
                                      </select>
                                </div>
                                </div>

                                <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="text" class="form-control" name="phone" value="{{ $data['phone'] }}">
                                </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label> DOT </label>
                                    <input type="text" name="dot" class="form-control" value="{{ $data['dot'] }}"/>
                                </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label> SCAC </label>
                                    <input type="text" name="scac" class="form-control" value="{{ $data['scac'] }}"/>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label class="form-label"> MC </label>
                                    <input type="text" name="mc" class="form-control" value="{{ $data['mc'] }}"/>
                                </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label class="form-label"> EIN </label>
                                    <input type="text" name="ein" class="form-control" value="{{ $data['ein'] }}"/>
                                </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label class="form-label"> Terms </label>
                                    <select id="terms" name="terms" class="form-select">
                                        <option value=""></option>
                                        <option value="Due on receipt"@php if($data['terms']=='Due on receipt') { echo 'selected'; } @endphp>Due on receipt</option>
                                        <option value="Net 15"@php if($data['terms']=='Net 15') { echo 'selected'; } @endphp>Net 15</option>
                                        <option value="Net 30"@php if($data['terms']=='Net 30') { echo 'selected'; } @endphp>Net 30</option>
                                        <option value="Other"@php if($data['terms']=='Other') { echo 'selected'; } @endphp>Other</option>
                                     </select>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label class="form-label"> Equipment (seperate with commas)</label>
                                    <input type="text" name="equipment" value="{{ $data['equipment'] }}" class="form-control"/>

                                    <select name="equipment[]" class="form-select" multiple>
                                        <option value="LTL Less-than-Truckload"@php if(in_array('LTL Less-than-Truckload',explode(",",$data['equipment']))) { echo 'selected'; } @endphp>LTL Less-than-Truckload</option>
                                        <option value="Linehaul w/Shuttles"@php if(in_array('Linehaul w/Shuttles',explode(",",$data['equipment']))) { echo 'selected'; } @endphp>Linehaul w/Shuttles</option>
                                        <option value="Full Truckload 53' Dry Van"@php if(in_array("Full Truckload 53' Dry Van",explode(",",$data['equipment']))) { echo 'selected'; } @endphp>Full Truckload 53' Dry Van</option>
                                        <option value="Dropdeck Flatbed"@php if(in_array("Dropdeck Flatbed",explode(",",$data['equipment']))) { echo 'selected'; } @endphp>Dropdeck Flatbed</option>
                                        <option value="26' Straight Truck"@php if(in_array("26' Straight Truck",explode(",",$data['equipment']))) { echo 'selected'; } @endphp>26' Straight Truck</option>
                                        <option value="16' Box Truck"@php if(in_array("16' Box Truck",explode(",",$data['equipment']))) { echo 'selected'; } @endphp>16' Box Truck</option>
                                        <option value="Sprinter Van"@php if(in_array("Sprinter Van",explode(",",$data['equipment']))) { echo 'selected'; } @endphp>Sprinter Van</option>
                                    </select>
                                 </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label"> Website </label>
                                        <input type="text" name="website" value="{{ $data['website'] }}" class="form-control"/>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label"> Groups (seperate with commas) </label>
                                        <input type="text" name="groups" value="{{ $data['groups'] }}" class="form-control"/>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-label"> Notes </label>
                                        <textarea name="notes" rows="5" cols="20" class="form-control">{{ $data['notes'] }}</textarea>
                                    </div>
                                </div>
                            </div>
                      </div>

                      <div class="card-body add-remove-div">
                        <h4 class="card-title">Contacts</h4>
                      @php
                      $exhibitor_contact = json_decode($data['contact'],true);

                      $count_cnt = count($exhibitor_contact['first_name_carrier']);

                      for($k=1;$k<=($count_cnt);$k++)
                      {
                     @endphp
                                <div class="row input-form" id="primary-div">
                                   <div class="col-lg-12 mb-2">
                                       <h5> Contact 1 </h5>
                                   </div>
                                    <div class="col-lg-2">
                                        <div class="form-group">
                                        <label>First Name</label>
                                        <input type="text" name="first_name_carrier[]" value="{{ $exhibitor_contact['first_name_carrier'][$k-1] }}" class="form-control txt"/>
                                    </div>
                                    </div>

                                    <div class="col-lg-2">
                                        <div class="form-group">
                                        <label>Last Name</label>
                                        <input type="text" name="last_name_carrier[]" value="{{ $exhibitor_contact['last_name_carrier'][$k-1] }}" class="form-control txt"/>
                                    </div>
                                    </div>

                                    <div class="col-lg-2">
                                        <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" name="title_carrier[]" value="{{ $exhibitor_contact['title_carrier'][$k-1] }}" class="form-control txt"/>
                                       </div>
                                   </div>

                                   <div class="col-lg-2">
                                      <div class="form-group">
                                      <label>Phone</label>
                                      <input type="text" name="phone_carrier[]" value="{{ $exhibitor_contact['phone_carrier'][$k-1] }}" class="form-control txt"/>
                                     </div>
                                 </div>

                                 <div class="col-lg-3">
                                      <div class="form-group">
                                      <label>Email</label>
                                      <input type="email" name="email_carrier[]" value="{{ $exhibitor_contact['email_carrier'][$k-1] }}" class="form-control txt"/>
                                  </div>
                                </div>

                              <div class="col-lg-1 ps-1">
                                <a class="btn btn-default delBtnh p-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293z"/></svg>
                                </a>
                              </div>

                            </div>
                            @php
                             }
                            @endphp
                            <div id="mncarrier" class="col-lg-12"></div>
                            <div class="row">
                                <div class="col-lg-3">
                                    <button  type='button' id='manage_carrier' class="btn btn-gradient-primary me-2">Add new</button>
                                </div>
                            </div>

                          </div>
                    </div>
                  </div>
             </div>

             <div class="row">
                  <div class="col-lg-3">
                    <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                    <button type="button" class="btn btn-light" onclick="javascript:history.go(-1);">Cancel</button>
                  </div>
            </div>
            <!---- End main row ------->
           </form>
           </div>
    <!-- content-wrapper ends -->
    <!-- partial:../../partials/_footer.html -->
    <x-adminfooter/>
