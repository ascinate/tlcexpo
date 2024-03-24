<x-adminheader/>
      <!-- partial -->
   <x-adminsidebar/>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
                <form name="addfrm" action="{{ URL::to('updateexhibitorcontractor') }}" method="POST" class="forms-sample">
                <input type="hidden" name="id" value="{{ $data['id'] }}" />
                 @csrf
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Exhibitor Appointed Contractors</h4>

                        <div class="row">
                            <div class="col-lg-6">
                            <div class="form-group">
                                <label for="exampleInputName1">Contractor Name</label>
                                <input type="text" class="form-control" name="contractor_name" value="{{ $data['contractor_name'] }}" required>
                            </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                <label>Short Name </label>
                                <input type="text" name="short_name" value="{{ $data['short_name'] }}" class="form-control"/>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                <label> Phone</label>
                                <input type="text" name="phone" value="{{ $data['phone'] }}" class="form-control"/>
                            </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="form-group">
                                <label> Email</label>
                                <input type="email" name="email" value="{{ $data['email'] }}" class="form-control"/>
                            </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-label"> Website </label>
                                    <input type="text" name="website" value="{{ $data['website'] }}" class="form-control"/>
                                </select>
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
                                       <option value="{{ $val->id }}" @php
                                           if( $data['warehouse_address']==$val->id ) { echo 'selected'; }
                                       @endphp>
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
                                   <option value="{{ $val->id }}" @php
                                       if( $data['marshaling_address']==$val->id ) { echo 'selected'; }
                                   @endphp>
                                    {{ $val->location_descripton }}
                                  </option>
                                  @php
                                    }
                                 @endphp
                              </select>
                           </div>
                      </div>

                       <!--<div class="row" id="editexaddr">
                        <div class="card-body" id="wareh">
                            <div class="d-flex align-items-center">
                                <h4 class="card-title">Warehouse </h4>
                            </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="exampleInputName1">Warehouse Address</label>
                                        <input type="text" class="form-control" name="warehouse_address" value="">
                                    </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                        <label> Address line 1 </label>
                                        <input type="text" name="address_line_1" class="form-control" value="{{ $data['address_line_1'] }}"/>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="exampleInputName1">Address line 2</label>
                                        <input type="text" class="form-control" name="address_line_2" value="{{ $data['address_line_2'] }}">
                                    </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                        <label> Address line 3 </label>
                                        <input type="text" name="address_line_3" class="form-control" value="{{ $data['address_line_3'] }}"/>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="exampleInputName1">City</label>
                                        <input type="text" class="form-control" name="city" value="{{ $data['city'] }}">
                                    </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                        <label> State </label>
                                        <input type="text" name="state" class="form-control" value="{{ $data['state'] }}"/>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="exampleInputName1">Zipcode</label>
                                        <input type="text" class="form-control" name="zipcode" value="{{ $data['zipcode'] }}">
                                    </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                        <label> Country </label>
                                        <input type="text" name="country" class="form-control" value="{{ $data['country'] }}"/>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div id="sho-card" class="card-body pb-0">
                            <div class="d-flex align-items-center">
                                <h4 class="card-title">Marshaling Yard</h4>
                            </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="exampleInputName1">Marshaling Address</label>
                                        <input type="text" class="form-control" name="marshaling_address" value="{{ $data['marshaling_address'] }}">
                                    </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                        <label> Address line 1 </label>
                                        <input type="text" name="marshaling_address_line_1" class="form-control" value="{{ $data['marshaling_address_line_1'] }}"/>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="exampleInputName1">Marshaling Address line 2</label>
                                        <input type="text" class="form-control" name="marshaling_address_line_2" value="{{ $data['marshaling_address_line_2'] }}">
                                    </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                        <label>Marshaling  Address line 3 </label>
                                        <input type="text" name="marshaling_address_line_3" class="form-control" value="{{ $data['marshaling_address_line_3'] }}"/>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="exampleInputName1">Marshaling City</label>
                                        <input type="text" class="form-control" name="marshaling_city"  value="{{ $data['marshaling_city'] }}">
                                    </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                        <label>Marshaling  State </label>
                                        <input type="text" name="marshaling_state" class="form-control" value="{{ $data['marshaling_state'] }}"/>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="exampleInputName1">Marshaling Zipcode</label>
                                        <input type="text" class="form-control" name="marshaling_zipcode" value="{{ $data['marshaling_zipcode'] }}">
                                    </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                        <label>Marshaling Country </label>
                                        <input type="text" name="marshaling_country" class="form-control" value="{{ $data['marshaling_country'] }}">
                                        </div>
                                    </div>
                                </div>

                            </div>
                       </div>

                       <div class="row" id="addrss22" style="display: none;"></div>-->


                      </div>

                        <div class="card-body add-remove-div">
                          <h4 class="card-title">Exhibit Contacts</h4>
                          @php
                            $exhibitor_contact = json_decode($data['contact'],true);

                            $count_cnt = count($exhibitor_contact['first_name']);

                            for($k=1;$k<=($count_cnt);$k++)
                            {
                           @endphp

                              <div class="row input-form" id="primary-div">

                                 <div class="col-lg-12 mb-2">
                                     <h5> Contact {{ $k }} </h5>
                                 </div>
                                  <div class="col-lg-2">
                                      <div class="form-group">
                                      <label>First Name</label>
                                      <input type="text" name="first_name[]" value="{{ $exhibitor_contact['first_name'][$k-1] }}" class="form-control txt"/>
                                  </div>
                                  </div>

                                  <div class="col-lg-2">
                                      <div class="form-group">
                                      <label>Last Name</label>
                                      <input type="text" name="last_name[]" value="{{ $exhibitor_contact['last_name'][$k-1] }}" class="form-control txt"/>
                                  </div>
                                  </div>

                                  <div class="col-lg-2">
                                      <div class="form-group">
                                      <label>Title</label>
                                      <input type="text" name="title[]" value="{{ $exhibitor_contact['title'][$k-1] }}" class="form-control txt"/>
                                     </div>
                                 </div>

                                 <div class="col-lg-2">
                                    <div class="form-group">
                                    <label>Phone</label>
                                    <input type="text" name="exhibit_phone[]" value="{{ $exhibitor_contact['exhibit_phone'][$k-1] }}" class="form-control txt"/>
                                   </div>
                               </div>

                               <div class="col-lg-3">
                                    <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="exhibit_email[]" value="{{ $exhibitor_contact['exhibit_email'][$k-1] }}" class="form-control txt"/>
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

                              <div id="exhclone" class="col-lg-12"></div>
                              <div class="row">
                                <div class="col-lg-3">
                                    <button  type='button' id='exh_add' class="btn btn-gradient-primary me-2">Add new</button>
                                 </div>
                              </div>

                        </div>
                      </div>
                  </div>

               </div>

               <button type="submit" class="btn btn-gradient-primary me-2" align="right">Submit</button>
               <button type="button" class="btn btn-light" onclick="javascript:history.go(-1);" align="right">Cancel</button>
             </form>
           </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <x-adminfooter/>
