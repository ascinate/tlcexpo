<x-adminheader/>
      <!-- partial -->
   <x-adminsidebar/>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
                <h4 class="card-title">Exhibitor Appointed Contractors</h4>
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">


                        <div class="row">
                            <div class="col-lg-6">
                            <div class="form-group">
                                <label for="exampleInputName1">Contractor Name</label>
                                <span class="d-block">{{ $data['contractor_name'] }}</span>
                            </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                <label>Short Name </label>
                                <span class="d-block">{{ $data['short_name'] }}</span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                <label> Phone</label>
                                <span class="d-block">{{ $data['phone'] }}</span>
                            </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="form-group">
                                <label> Email</label>
                                <span class="d-block">{{ $data['email'] }}</span>
                            </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-label"> Website </label>
                                    <span class="d-block">{{ $data['website'] }}</span>
                                </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                              <label for="exampleFormControlInput1" class="form-label">Warehouse Location Address</label>
                              <span class="d-block">
                                @php
                                    $warehouse = \DB::table('locations')->where('id', $data['warehouse_address'])->get();
                                    echo @$warehouse[0]->location_descripton;
                                @endphp
                                </span>
                            </div>

                           <div class="col-lg-6">
                            <label for="exampleFormControlInput1" class="form-label">Marshaling Yards Address</label>
                            <span class="d-block">
                                @php
                                    $marshaling = \DB::table('locations')->where('id', $data['marshaling_address'])->get();
                                    echo @$marshaling[0]->location_descripton;
                                @endphp
                                </span>
                           </div>
                       </div>
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
                                      <span class="d-block">{{ $exhibitor_contact['first_name'][$k-1] }}</span>
                                  </div>
                                  </div>

                                  <div class="col-lg-2">
                                      <div class="form-group">
                                      <label>Last Name</label>
                                      <span class="d-block">{{ $exhibitor_contact['last_name'][$k-1] }}</span>
                                  </div>
                                  </div>

                                  <div class="col-lg-2">
                                      <div class="form-group">
                                      <label>Title</label>
                                      <span class="d-block">{{ $exhibitor_contact['title'][$k-1] }}</span>
                                     </div>
                                 </div>

                                 <div class="col-lg-3">
                                    <div class="form-group">
                                    <label>Phone</label>
                                    <span class="d-block">{{ $exhibitor_contact['exhibit_phone'][$k-1] }}</span>
                                   </div>
                               </div>

                               <div class="col-lg-3">
                                    <div class="form-group">
                                    <label>Email</label>
                                    <span class="d-block">{{ $exhibitor_contact['exhibit_email'][$k-1] }}</span>
                                </div>
                              </div>

                            </div>
                            @php
                             }
                            @endphp

                        </div>
                      </div>
                  </div>

               </div>

               <button type="button" class="btn btn-light" onclick="javascript:history.go(-1);" align="right">Back</button>
           </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <x-adminfooter/>
