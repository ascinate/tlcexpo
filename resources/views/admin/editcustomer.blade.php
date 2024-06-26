<x-adminheader/>
      <!-- partial -->
   <x-adminsidebar/>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">

            <!---- Main row ------>
            <form name="addfrm" action="{{ URL::to('updatecustomer') }}" method="POST" class="forms-sample">
            <input type="hidden" name="id" value="{{ $data['id'] }}"/>
            @csrf
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Edit Customer</h4>
                            <div class="row">
                                <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="exampleInputName1">Name</label>
                                    <input type="text" class="form-control" name="customer_name" value="{{ $data['customer_name'] }}">
                                </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label> Address </label>
                                    <input type="text" name="address" class="form-control" value="{{ $data['address'] }}"/>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label> Address 1</label>
                                    <input type="text" name="address_line_1" class="form-control" value="{{ $data['address_line_1'] }}"/>
                                </div>
                                </div>

                                <div class="col-lg-6">
                                <div class="form-group">
                                    <label> Address 2</label>
                                    <input type="text" name="address_line_2" class="form-control" value="{{ $data['address_line_2'] }}"/>
                                </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                <div class="form-group">
                                    <label> Address 3</label>
                                    <input type="text" name="address_line_3" class="form-control" value="{{ $data['address_line_3'] }}"/>
                                </div>
                                </div>

                                <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail3">Email address</label>
                                    <input type="email" class="form-control" name="email" value="{{ $data['email'] }}">
                                </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="exampleInputPassword4">Password</label>
                                    <input type="password" class="form-control" name="password" value="{{ $data['password'] }}">
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
                                    <label>Website</label>
                                    <input type="text" class="form-control" name="website" value="{{ $data['website'] }}">
                                </div>
                                </div>

                                <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="exampleInputCity1">City</label>
                                    <input type="text" class="form-control" name="city" value="{{ $data['city'] }}">
                                </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="exampleInputCity1">State</label>
                                    <input type="text" class="form-control" name="state" value="{{ $data['state'] }}">
                                </div>
                                </div>

                                <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="exampleInputCity1">Zip code</label>
                                    <input type="text" class="form-control" name="zipcode" value="{{ $data['zipcode'] }}">
                                </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-label"> Country </label>
                                    <select name="country" class="form-select">
                                    <option value="USA"@php if($data['country']=='USA') { echo 'selected'; } @endphp>USA</option>
                                    <option value="Canada"@php if($data['country']=='Canada') { echo 'selected'; } @endphp>CANADA</option>
                                </select>
                                </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label> Sales Representative </label>
                                    <input type="text" name="sales_rep" class="form-control" value="{{ $data['sales_rep'] }}"/>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label> Initials </label>
                                    <input type="text" name="initials" class="form-control" value="{{ $data['initials'] }}"/>
                                </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label> Commision(%) </label>
                                    <input type="text" name="commission" class="form-control" value="{{ $data['commission'] }}"/>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label class="form-label"> Terms </label>
                                    <input type="text" name="terms" class="form-control" value="{{ $data['terms'] }}"/>
                                </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label class="form-label"> Margin </label>
                                    <input type="text" name="margin" class="form-control" value="{{ $data['margin'] }}"/>
                                </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label class="form-label"> Limitation </label>
                                    <select id="limitation" name="limitation" class="form-select">
                                        <option value="No Loading Dock"@php if($data['limitation']=='No Loading Dock') { echo 'selected'; } @endphp>No Loading Dock</option>
                                        <option value="Limited Access"@php if($data['limitation']=='Limited Access') { echo 'selected'; } @endphp> Limited Access</option>
                                        <option value="Other"@php if($data['limitation']=='Other') { echo 'selected'; } @endphp> Other</option>
                                    </select>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                <div class="form-group" style="display: none;" id="xother">
                                    <div class="form-group">
                                    <label class="form-label"> Other </label>
                                    <input type="text" name="other_limitation" class="form-control" value="{{ $data['other_limitation'] }}"/>
                                    </div>
                                </div>
                            </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label"> Notes </label>
                                        <input type="text" name="notes" class="form-control" value="{{ $data['notes'] }}"/>
                                    </div>
                                </div>
                            </div>
                      </div>
                    </div>
                  </div>

               <!--------- Additional address ---->

               <!--<div class="col-12 grid-margin stretch-card">
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
                            <div class="col-lg-1 mb-2">
                                <a class="btn btn-default deladdr p-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293z"/></svg>
                                </a>
                            </div>

                             <div class="col-lg-6">
                                 <div class="form-group">
                                 <label> Address</label>
                                 <input type="text" name="add_address[]" value="{{ @$addr['add_address'][$x-1] }}" class="form-control txt"/>
                             </div>
                             </div>

                             <div class="col-lg-6">
                                 <div class="form-group">
                                 <label>Address 1</label>
                                 <input type="text" name="add_address1[]" value="{{ @$addr['add_address1'][$x-1] }}" class="form-control txt"/>
                             </div>
                             </div>

                             <div class="col-lg-6">
                                 <div class="form-group">
                                 <label>Address 2</label>
                                 <input type="text" name="add_address2[]" value="{{ @$addr['add_address2'][$x-1] }}" class="form-control txt"/>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                <label>City</label>
                                <input type="text" name="add_city[]" value="{{ @$addr['add_city'][$x-1] }}" class="form-control txt"/>
                               </div>
                           </div>

                           <div class="col-lg-4">
                            <div class="form-group">
                            <label>State</label>
                            <input type="text" name="add_state[]" value="{{ @$addr['add_state'][$x-1] }}" class="form-control txt"/>
                           </div>
                         </div>

                         <div class="col-lg-4">
                            <div class="form-group">
                            <label>Zipcode</label>
                            <input type="text" name="add_zipcode[]" value="{{ @$addr['add_zipcode'][$x-1] }}" class="form-control txt"/>
                           </div>
                         </div>

                         <div class="col-lg-4">
                            <div class="form-group">
                            <label>Country</label>
                            <input type="text" name="add_country[]" value="{{ $addr['add_country'][$x-1] }}" class="form-control txt"/>
                           </div>
                         </div>

                         </div>

                         @php
                        }
                       @endphp

                         <div id="addrclone" class="col-lg-12"></div>
                         <div class="row">
                           <div class="col-lg-3">
                               <button  type='button' id='addi_addr' class="btn btn-gradient-primary me-2">Add new</button>
                            </div>
                         </div>

                        </div>

                </div>
              </div>-->

              <div class="col-lg-3">
                <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                <button type="button" class="btn btn-light" onclick="javascript:history.go(-1);">Cancel</button>
              </div>

            </div>  <!---- end row ------->
          </form>
        </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <x-adminfooter/>
