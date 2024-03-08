<x-adminheader/>
      <!-- partial -->
   <x-adminsidebar/>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">

           <!----Main Row--------->
           <form name="addfrm" action="{{ URL::to('updaterole') }}" method="POST" class="forms-sample">
            <input type="hidden" name="id" value="{{ $data['id'] }}">
            @csrf

            <div class="row">
                 <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Edit Role</h4>

                            <div class="row">
                                <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="exampleInputName1">Role Name</label>
                                    <input type="text" class="form-control" name="role_name" value="{{ $data['role_name'] }}">
                                </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="exampleInputName1">Is Active</label>
                                        <p>
                                            <input type="radio" name="is_active" value="Yes"@php
                                                if($data['is_active']=='Yes') { echo 'checked'; }
                                            @endphp> Yes &nbsp;
                                            <input type="radio" name="is_active" value="No"@php
                                            if($data['is_active']=='No') { echo 'checked'; }
                                        @endphp> No
                                        </p>
                                    </div>
                                </div>

                            </div>

                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                    <button type="button" class="btn btn-light" onclick="javascript:history.go(-1);">Cancel</button>
                  </div>

            </div> <!---- End main row ------->
           </form>

         </div>
    <!-- content-wrapper ends -->
    <!-- partial:../../partials/_footer.html -->
    <x-adminfooter/>
