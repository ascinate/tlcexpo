<x-adminheader/>
      <!-- partial -->
   <x-adminsidebar/>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">

            <!---- Main row ------>

            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">View Customer</h4>
                            <div class="row">
                                <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="exampleInputName1">Name</label>
                                    <span class="d-block">{{ $data['customer_name'] }}</span>
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
                                    <label for="exampleInputEmail3">Email address</label>
                                    <span class="d-block">{{ $data['email'] }}</span>
                                </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="exampleInputPassword4">Password</label>
                                    <span class="d-block">{{ $data['password'] }}</span>
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
                                    <label>Website</label>
                                    <span class="d-block">{{ $data['website'] }}</span>
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
                                    <label> Sales Representative </label>
                                    <span class="d-block">{{ $data['sales_rep'] }}</span>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label> Initials </label>
                                    <span class="d-block">{{ $data['initials'] }}</span>
                                </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label> Commision(%) </label>
                                    <span class="d-block">{{ $data['commission'] }}</span>
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
                                    <label class="form-label"> Margin </label>
                                    <span class="d-block">{{ $data['margin'] }}</span>
                                </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label class="form-label"> Limitation </label>
                                    <span class="d-block">{{ $data['limitation'] }}</span>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                <div class="form-group" style="display: none;" id="xother">
                                    <div class="form-group">
                                    <label class="form-label"> Other </label>
                                    <span class="d-block">{{ $data['other_limitation'] }}</span>
                                </div>
                                </div>
                            </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label"> Notes </label>
                                        <span class="d-block">{{ $data['notes'] }}</span>
                                    </div>
                                </div>
                            </div>
                      </div>
                    </div>
                  </div>
               <!--------- Additional address ---->
            </div> <!---- end row ------->

        </div>
        
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body add-remove-div">
                        <h4 class="card-title">Additional Address</h4>

                        @php
                        $addr = json_decode($data['contact'],true);

                        $count = count($addr['add_address']);
                        for($x=1;$x<=($count);$x++)
                        {
                         @endphp
                        <div class="row input-form" id="addr-div">
                            <div class="col-lg-11 mb-2">
                                <h5> Contact {{ $x }} </h5>
                            </div>
                          
                             <div class="col-lg-6">
                                 <div class="form-group">
                                 <label> Address</label>
                                 <span class="d-block">{{ @$addr['add_address'][$x-1] }}</span>
                             </div>
                             </div>

                             <div class="col-lg-6">
                                 <div class="form-group">
                                 <label>Address 1</label>
                                 <span class="d-block">{{ @$addr['add_address1'][$x-1] }}</span>
                             </div>
                             </div>

                             <div class="col-lg-6">
                                 <div class="form-group">
                                 <label>Address 2</label>
                                 <span class="d-block">{{ @$addr['add_address2'][$x-1] }}</span>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                <label>City</label>
                                <span class="d-block">{{ @$addr['add_city'][$x-1] }}</span>
                               </div>
                           </div>

                           <div class="col-lg-4">
                            <div class="form-group">
                            <label>State</label>
                            <span class="d-block">{{ @$addr['add_state'][$x-1] }}</span>
                           </div>
                         </div>

                         <div class="col-lg-4">
                            <div class="form-group">
                            <label>Zipcode</label>
                            <span class="d-block">{{ @$addr['add_zipcode'][$x-1] }}</span>
                           </div>
                         </div>

                         <div class="col-lg-4">
                            <div class="form-group">
                            <label>Country</label>
                            <span class="d-block">{{ @$addr['add_country'][$x-1] }}</span>
                           </div>
                         </div>

                         </div>
                        <hr>
                      @php
                         }
                    @endphp
					</div>
                </div>
               </div>
            
            </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <x-adminfooter/>
