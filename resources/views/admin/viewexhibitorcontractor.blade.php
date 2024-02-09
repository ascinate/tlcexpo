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
                            <div class="col-lg-12">
                                <div class="form-group">
                                <label> Address line 1 </label>
                                <span class="d-block">{{ $data['address_line_1'] }}</span>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                <label> Address line 2</label>
                                <span class="d-block">{{ $data['address_line_2'] }}</span>
                            </div>
                            </div>

                            <div class="col-lg-12">
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
