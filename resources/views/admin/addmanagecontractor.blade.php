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
                        <h4 class="card-title">Add Show Contractor</h4>

                        <form name="addfrm" action="{{ URL::to('insertcontractor') }}" method="POST" class="forms-sample">
                            @csrf

                            <div class="row">
                                <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="exampleInputName1">Contractor Name</label>
                                    <input type="text" class="form-control" name="contractor_name" required>
                                </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label>Short Name </label>
                                    <input type="text" name="short_name" class="form-control"/>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                    <label> Phone</label>
                                    <input type="text" name="phone" class="form-control"/>
                                </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="form-group">
                                    <label> Email</label>
                                    <input type="email" name="email" class="form-control"/>
                                </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-label"> Website </label>
                                        <input type="text" name="website" class="form-control"/>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="exampleFormControlInput1" class="form-label">Warehouse Location Address</label>
                                     <select name="warehouse_address" id="" class="form-select" placeholder="Select Location" required>
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

                                <div class="col-lg-6">
                                  <label for="exampleFormControlInput1" class="form-label">Marshaling Yards Address</label>
                                 <select name="marshaling_address" id="" class="form-select" placeholder="Select Location" required>
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

                         <!--<div class="row" id="addrss22" style="display: none;"></div>-->

                        </div>
                        <div class="card-body add-remove-div">
                            <h4 class="card-title">Exhibit Manager Contacts</h4>
                                <div class="row input-form" id="primary-div">
                                   <div class="col-lg-12 mb-2">
                                       <h5> Contact 1 </h5>
                                   </div>
                                    <div class="col-lg-2">
                                        <div class="form-group">
                                        <label>First Name</label>
                                        <input type="text" name="first_name_manage[]" class="form-control txt"/>
                                    </div>
                                    </div>

                                    <div class="col-lg-2">
                                        <div class="form-group">
                                        <label>Last Name</label>
                                        <input type="text" name="last_name_manage[]" class="form-control txt"/>
                                    </div>
                                    </div>

                                   <div class="col-lg-2">
                                      <div class="form-group">
                                      <label>Phone</label>
                                      <input type="text" name="exhibit_phone_manage[]" class="form-control txt"/>
                                     </div>
                                 </div>

                                 <div class="col-lg-3">
                                      <div class="form-group">
                                      <label>Email</label>
                                      <input type="email" name="exhibit_email_manage[]" class="form-control txt"/>
                                  </div>
                                </div>

                                <div class="col-lg-2">
                                    <div class="form-group">
                                    <label>Website</label>
                                    <input type="text" name="exhibit_website_manage[]" class="form-control txt"/>
                                   </div>
                               </div>

                                <div class="col-lg-1 ps-1">
                                  <a class="btn btn-default delBtnh p-0">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
                                      <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293z"/></svg>
                                  </a>
                              </div>

                                </div>
                                <div id="mnclone" class="col-lg-12"></div>
                                <div class="row">
                                  <div class="col-lg-3">
                                      <button  type='button' id='manage_add' class="btn btn-gradient-primary me-2">Add new</button>
                                   </div>
                                </div>

                          </div>

                        </div>
                    </div>
                </div>
                <button type="submit" name="btn" class="btn btn-gradient-primary me-2">Submit</button>
                <button type="button" class="btn btn-light" onclick="javascript:history.go(-1);">Cancel</button>
            </form>

          </div>


          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <x-adminfooter/>
