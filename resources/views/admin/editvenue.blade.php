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
                        <h4 class="card-title">Edit Venue</h4>
                        <form name="addfrm" action="{{ URL::to('updatevenue') }}" method="POST" class="forms-sample">
                        <input type="hidden" name="id" value="{{ $data['id'] }}" />
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="exampleInputName1">Venue Name</label>
                                    <input type="text" class="form-control" name="address" value="{{ $data['address'] }}" required>
                                </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label> Address line 1 </label>
                                    <input type="text" name="address_line_1" value="{{ $data['address_line_1'] }}" class="form-control"/>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label> Address line 2</label>
                                    <input type="text" name="address_line_2" value="{{ $data['address_line_2'] }}" class="form-control"/>
                                </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label"> Address line 3 </label>
                                        <input type="text" name="address_line_3" value="{{ $data['address_line_3'] }}" class="form-control"/>
                                    </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label> City</label>
                                    <input type="text" name="city" value="{{ $data['city'] }}" class="form-control"/>
                                </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label"> State </label>
                                        <input type="text" name="state" value="{{ $data['state'] }}" class="form-control"/>
                                    </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label> Zipcode</label>
                                    <input type="text" name="zipcode" value="{{ $data['zipcode'] }}" class="form-control"/>
                                </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label"> Country </label>
                                        <select class="form-select" name="country">
                                            <option value="USA"@php if($data['country']=='USA') { echo 'selected'; } @endphp>United State</option>
                                            <option value="Canada"@php if($data['country']=='Canada') { echo 'selected'; } @endphp>Canada</option>
                                        </select>
                                    </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label> Phone</label>
                                    <input type="text" name="phone" value="{{ $data['phone'] }}" class="form-control"/>
                                </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label"> Website </label>
                                        <input type="text" name="website" value="{{ $data['website'] }}" class="form-control"/>
                                    </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="form-group">
                                    <label> Email</label>
                                    <input type="email" name="email" value="{{ $data['email'] }}" class="form-control"/>
                                </div>
                                </div>

                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label class="form-label"> No loading dock </label>
                                        <input type="checkbox" name="no_loading_dock" value="Y" @php
                                            if($data['no_loading_dock']=='Y') { echo 'checked'; }
                                        @endphp />
                                    </select>
                                    </div>
                                </div>

                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label class="form-label"> Limited access </label>
                                        <input type="checkbox" name="limited_access" value="Y"  @php
                                        if($data['limited_access']=='Y') { echo 'checked'; }
                                    @endphp />
                                    </select>
                                    </div>
                                </div>

                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label class="form-label"> Other </label>
                                        <input type="text" name="other" value="{{ $data['other'] }}" class="form-control"/>
                                    </select>
                                    </div>
                                </div>
                            </div>

                           <div class="row">
                            <div class="col-lg-12">
                                    <div class="form-group">
                                    <label> Notes</label>
                                    <textarea name="notes" class="form-control" rows="6" cols="20">{{ $data['notes'] }}</textarea>
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
