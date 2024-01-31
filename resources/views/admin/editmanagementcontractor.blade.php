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
                        <form name="addfrm" action="{{ URL::to('updatecontractor') }}" method="POST" class="forms-sample">
                        <input type="hidden" name="id" value="{{ $data['id'] }}" />
                            @csrf

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
                                    <input type="text" name="short_name" class="form-control" value="{{ $data['short_name'] }}"/>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                    <label> Address line 1 </label>
                                    <input type="text" name="address_line_1" class="form-control" value="{{ $data['address_line_1'] }}"/>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="form-group">
                                    <label> Address line 2</label>
                                    <input type="text" name="address_line_2" class="form-control" value="{{ $data['address_line_2'] }}"/>
                                </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-label"> Address line 3 </label>
                                        <input type="text" name="address_line_3" class="form-control" value="{{ $data['address_line_3'] }}"/>
                                    </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label> City</label>
                                    <input type="text" name="city" class="form-control" value="{{ $data['city'] }}"/>
                                </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label"> State </label>
                                        <input type="text" name="state" class="form-control" value="{{ $data['state'] }}"/>
                                    </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label> Zipcode</label>
                                    <input type="text" name="zipcode" class="form-control" value="{{ $data['zipcode'] }}"/>
                                </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label"> Country </label>
                                        <select class="form-select" name="country">
                                            <option value="USA"@php
                                                if($data['country']=='USA') { echo 'selected'; }
                                            @endphp>United State</option>
                                            <option value="Canada"@php
                                            if($data['country']=='Canada') { echo 'selected'; }
                                        @endphp>Canada</option>
                                        </select>
                                    </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                    <label> Phone</label>
                                    <input type="text" name="phone" class="form-control" value="{{ $data['phone'] }}"/>
                                </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="form-group">
                                    <label> Email</label>
                                    <input type="email" name="email" class="form-control" value="{{ $data['email'] }}"/>
                                </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-label"> Website </label>
                                        <input type="text" name="website" class="form-control" value="{{ $data['website'] }}"/>
                                    </select>
                                    </div>
                                </div>
                            </div>

                          <button type="submit" name="btn" class="btn btn-gradient-primary me-2">Submit</button>
                          <button type="button" class="btn btn-light" onclick="javascript:history.go(-1);">Cancel</button>
                        </form>
                      </div>
                    </div>
                  </div>

            </div>
        </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <x-adminfooter/>
