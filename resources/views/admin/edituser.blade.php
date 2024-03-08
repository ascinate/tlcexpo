<x-adminheader/>
      <!-- partial -->
   <x-adminsidebar/>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
           <!----Main Row--------->
           <form name="addfrm" action="{{ URL::to('updateuser') }}" method="POST" class="forms-sample">
            <input type="hidden" name="id" value="{{ $data['id'] }}">
            @csrf
            <div class="row">
                 <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Add User</h4>

                            <div class="row">
                                <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="exampleInputName1">Name</label>
                                    <input type="text" class="form-control" name="name" value="{{ $data['name'] }}">
                                </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="exampleInputName1">Email</label>
                                        <input type="email" class="form-control" name="email" value="{{ $data['email'] }}">
                                    </div>
                               </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="exampleInputName1">Password</label>
                                    <input type="password" class="form-control" name="password" value="{{ $data['password'] }}">
                                </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="exampleInputName1">Role</label>
                                        <select name="role" class="form-select">
                                            <option value="">--select--</option>
                                            @php
                                                $role = \DB::table('roles')->get();
                                                foreach($role as $val)
                                                {
                                            @endphp
                                            <option value="{{ $val->role_name }}"@php
                                                if($val->role_name==$data['role']) { echo 'selected'; }
                                            @endphp>
                                                {{ $val->role_name }}
                                            </option>
                                            @php
                                                }
                                            @endphp
                                        </select>
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
