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
                                    <label> Address line 1 </label>
                                    <span class="d-block">{{ $data['address_line_1'] }}</span>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="form-group">
                                    <label> Address line 2</label>
                                    <span class="d-block">{{ $data['address_line_2'] }}</span>
                                </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-label"> Address line 3 </label>
                                        <span class="d-block">{{ $data['address_line_3'] }}</span>
                                    </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label> City</label>
                                    <span class="d-block">{{ $data['city'] }}</span>
                                </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label"> State </label>
                                        <span class="d-block">{{ $data['state'] }}</span>
                                    </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label> Zipcode</label>
                                    <span class="d-block">{{ $data['zipcode'] }}</span>
                                </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label"> Country </label>
                                        <span class="d-block">{{ $data['country'] }}</span>
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
                        </div>

                        <div class="card-body add-remove-div">
                            <h4 class="card-title">Exhibit Contacts</h4>
                            @php
                              $exhibitor_contact = json_decode($data['contact'],true);

                              $count_cnt = count($exhibitor_contact['first_name_manage']);

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
                                        <span class="d-block">{{ $exhibitor_contact['first_name_manage'][$k-1] }}</span>
                                        </div>
                                    </div>

                                    <div class="col-lg-2">
                                        <div class="form-group">
                                        <label>Last Name</label>
                                        <span class="d-block">{{ $exhibitor_contact['last_name_manage'][$k-1] }}</span>
                                        </div>
                                    </div>

                                   <div class="col-lg-2">
                                      <div class="form-group">
                                      <label>Phone</label>
                                      <span class="d-block">{{ $exhibitor_contact['exhibit_phone_manage'][$k-1] }}</span>
                                     </div>
                                   </div>

                                  <div class="col-lg-3">
                                      <div class="form-group">
                                      <label>Email</label>
                                      <span class="d-block">{{ $exhibitor_contact['exhibit_email_manage'][$k-1] }}</span>
                                     </div>
                                 </div>

                                <div class="col-lg-2">
                                    <div class="form-group">
                                    <label>Website</label>
                                    <span class="d-block">{{ $exhibitor_contact['exhibit_website_manage'][$k-1] }}</span>
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
                          </div>
                        </div>
                    </div>

                 </div>

                <button type="button" class="btn btn-light" onclick="javascript:history.go(-1);">Back</button>

        </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <x-adminfooter/>
