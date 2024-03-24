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
                                    <input type="text" class="form-control" name="contractor_name	" required>
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
                                <div class="form-group mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Location Address</label>
                                     <select name="location" id="showloc" class="form-select" placeholder="Select Location" required>
                                        <option value=""></option>
                                         @php
                                            $value = \DB::table('locations')->get();
                                            foreach($value as $val)
                                            {
                                         @endphp
                                           <option value="{{ $val->id }}"> {{ $val->location_descripton }}</option>
                                          @php
                                            }
                                         @endphp
                                      </select>
                                </div>
                         </div>

                         <div class="row" id="addrss22" style="display: none;"></div>

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
