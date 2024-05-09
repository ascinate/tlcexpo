<x-adminheader/>
      <!-- partial -->
   <x-adminsidebar/>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
           <!----Main Row--------->
             <div class="row">
                 <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">View Carrier</h4>

                            <div class="row">
                                <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="exampleInputName1">carrier Name</label>
                                    <span class="d-block">{{ $data['carrier_name'] }}</span>
                                </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label> Address </label>
                                    <span class="d-block">{{ $data['address'] }}</span>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label> Address 1</label>
                                    <span class="d-block">{{ $data['address_line_1'] }}</span>
                                </div>
                                </div>

                                <div class="col-lg-6">
                                <div class="form-group">
                                    <label> Address 2</label>
                                    <span class="d-block">{{ $data['address_line_2'] }}</span>
                                </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                <div class="form-group">
                                    <label> Address 3</label>
                                    <span class="d-block">{{ $data['address_line_3'] }}</span>
                                </div>
                                </div>

                                <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="exampleInputCity1">City</label>
                                    <span class="d-block">{{ $data['city'] }}</span>
                                </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="exampleInputCity1">State</label>
                                    <span class="d-block">{{ $data['state'] }}</span>
                                </div>
                                </div>

                                <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="exampleInputCity1">Zip code</label>
                                    <span class="d-block">{{ $data['zipcode'] }}</span>
                                </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-label"> Country </label>
                                    <span class="d-block">{{ $data['country'] }}</span>
                                </div>
                                </div>

                                <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Phone</label>
                                    <span class="d-block">{{ $data['phone'] }}</span>
                                </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label> DOT </label>
                                    <span class="d-block">{{ $data['dot'] }}</span>
                                </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label> SCAC </label>
                                    <span class="d-block">{{ $data['scac'] }}</span>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label class="form-label"> MC </label>
                                    <span class="d-block">{{ $data['mc'] }}</span>
                                </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label class="form-label"> EIN </label>
                                    <span class="d-block">{{ $data['ein'] }}</span>
                                </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label class="form-label"> Terms </label>
                                    <span class="d-block">{{ $data['terms'] }}</span>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label class="form-label"> Equipment (seperate with commas)</label>
                                    <span class="d-block">{{ $data['equipment'] }}</span>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label"> Website </label>
                                        <span class="d-block">{{ $data['website'] }}</span>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label"> Groups (seperate with commas) </label>
                                        <span class="d-block">{{ $data['groups'] }}</span>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-label"> Notes </label>
                                        <span class="d-block">{{ $data['notes'] }}</span>
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
                                        <span class="d-block">{{ $exhibitor_contact['first_name_carrier'][$k-1] }}</span>
                                    </div>
                                    </div>

                                    <div class="col-lg-2">
                                        <div class="form-group">
                                        <label>Last Name</label>
                                        <span class="d-block">{{ $exhibitor_contact['last_name_carrier'][$k-1] }}</span>
                                    </div>
                                    </div>

                                    <div class="col-lg-2">
                                        <div class="form-group">
                                        <label>Title</label>
                                        <span class="d-block">{{ $exhibitor_contact['title_carrier'][$k-1] }}</span>
                                       </div>
                                   </div>

                                   <div class="col-lg-2">
                                      <div class="form-group">
                                      <label>Phone</label>
                                      <span class="d-block">{{ $exhibitor_contact['phone_carrier'][$k-1] }}</span>
                                     </div>
                                 </div>

                                 <div class="col-lg-3">
                                      <div class="form-group">
                                      <label>Email</label>
                                      <span class="d-block">{{ $exhibitor_contact['email_carrier'][$k-1] }}</span>
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

            <!---- End main row ------->
           </div>
    <!-- content-wrapper ends -->
    <!-- partial:../../partials/_footer.html -->
    <x-adminfooter/>
