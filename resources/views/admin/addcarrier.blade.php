<x-adminheader/>
      <!-- partial -->
   <x-adminsidebar/>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">

           <!----Main Row--------->
           <form name="addfrm" action="{{ URL::to('insertcarrier') }}" method="POST" class="forms-sample">
            @csrf

            <div class="row">
                 <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Add Carrier</h4>

                            <div class="row">
                                <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="exampleInputName1">carrier Name</label>
                                    <input type="text" class="form-control" name="carrier_name" placeholder="Name">
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
                                           <option value="{{ $val->id }}">
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
                                           <option value="{{ $val->id }}">
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
                                    <input type="text" class="form-control" name="phone" placeholder="Phone">
                                </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label> DOT </label>
                                    <input type="text" name="dot" class="form-control"/>
                                </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label> SCAC </label>
                                    <input type="text" name="scac" class="form-control"/>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label class="form-label"> MC </label>
                                    <input type="text" name="mc" class="form-control"/>
                                </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label class="form-label"> EIN </label>
                                    <input type="text" name="ein" class="form-control"/>
                                </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label class="form-label"> Terms </label>
                                    <select id="terms" name="terms" class="form-select">
                                        <option value=""></option>
                                        <option value="Due on receipt">Due on receipt</option>
                                        <option value="Net 15">Net 15</option>
                                        <option value="Net 30">Net 30</option>
                                        <option value="other">Other</option>
                                     </select>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label class="form-label"> Equipments</label>
                                     <select name="equipment[]" class="form-select" multiple>
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
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label"> Website </label>
                                        <input type="text" name="website" class="form-control"/>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label"> Groups (seperate with commas) </label>
                                        <input type="text" name="groups" class="form-control"/>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-label"> Notes </label>
                                        <textarea name="notes" rows="5" cols="20" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                      </div>

                     <div class="card-body add-remove-div">
                            <h4 class="card-title">Contacts</h4>
                                <div class="row input-form" id="primary-div">
                                   <div class="col-lg-12 mb-2">
                                       <h5> Contact 1 </h5>
                                   </div>
                                    <div class="col-lg-2">
                                        <div class="form-group">
                                        <label>First Name</label>
                                        <input type="text" name="first_name_carrier[]" class="form-control txt"/>
                                    </div>
                                    </div>

                                    <div class="col-lg-2">
                                        <div class="form-group">
                                        <label>Last Name</label>
                                        <input type="text" name="last_name_carrier[]" class="form-control txt"/>
                                    </div>
                                    </div>

                                    <div class="col-lg-2">
                                        <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" name="title_carrier[]" class="form-control txt"/>
                                       </div>
                                   </div>

                                   <div class="col-lg-2">
                                      <div class="form-group">
                                      <label>Phone</label>
                                      <input type="text" name="phone_carrier[]" class="form-control txt"/>
                                     </div>
                                 </div>

                                 <div class="col-lg-3">
                                      <div class="form-group">
                                      <label>Email</label>
                                      <input type="email" name="email_carrier[]" class="form-control txt"/>
                                  </div>
                                </div>

                                </div>
                                <div id="mncarrier" class="col-lg-12"></div>
                                <div class="row">
                                  <div class="col-lg-3">
                                      <button  type='button' id='manage_carrier' class="btn btn-gradient-primary me-2">Add new</button>
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
