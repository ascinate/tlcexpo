<x-adminheader/>
      <!-- partial -->
   <x-adminsidebar/>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">

           <!----Main Row--------->
           <form name="addfrm" action="{{ URL::to('updatetask') }}" method="POST" class="forms-sample">
            <input type="hidden" name="id" value="{{ $data['id'] }}">
            @csrf
            <div class="row">
                 <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Add Task</h4>

                            <div class="row">
                                <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="exampleInputName1">Priority</label>
                                    <select name="priority" class="form-select">
                                        <option value="1"@php if($data['priority']==1) { echo 'selected'; } @endphp>1 - VERY HIGH - EMERGENCY - COMPLETE ASAP</option>
                                        <option value="2"@php if($data['priority']==2) { echo 'selected'; } @endphp>2 - HIGH - E.G. Major bugs/fixes</option>
                                        <option value="3"@php if($data['priority']==3) { echo 'selected'; } @endphp>3 - HIGH - E.G. Important Site-wide Changing Project</option>
                                        <option value="4"@php if($data['priority']==4) { echo 'selected'; } @endphp>4 - HIGH - E.G. Urgent Data Fixes</option>
                                        <option value="5"@php if($data['priority']==5) { echo 'selected'; } @endphp>5 - MODERATE - E.G. Bugs/fixes</option>
                                        <option value="6"@php if($data['priority']==6) { echo 'selected'; } @endphp>6 - MODERATE - E.G. Regular projects and additions</option>
                                        <option value="7"@php if($data['priority']==7) { echo 'selected'; } @endphp>7 - MODERATE - E.G. Data Fixes</option>
                                        <option value="8"@php if($data['priority']==8) { echo 'selected'; } @endphp>8 - LOW - E.G. Low risk bugs/fixes</option>
                                        <option value="9"@php if($data['priority']==9) { echo 'selected'; } @endphp>9 - LOW - E.G. Minor additions</option>
                                        <option value="10"@php if($data['priority']==10) { echo 'selected'; } @endphp>10 - LOW - E.G. Data additions</option>
                                   </select>
                                </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label> Task Name / Short Description </label>
                                       <input type="text" name="task_name" value="{{ $data['task_name'] }}" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label>Task Type</label>
                                     <select name="task_type" class="form-select">
                                        <option value="None"@php if($data['task_type']=='None') { echo 'selected'; } @endphp>None</option>
                                        <option value="Bug Fix / Maintenance Request"@php if($data['task_type']=='Bug Fix / Maintenance Request') { echo 'selected'; } @endphp>Bug Fix / Maintenance Request</option>
                                        <option value="Feature Request"@php if($data['task_type']=='Feature Request') { echo 'selected'; } @endphp>Feature Request</option>
                                        <option value="Information Update"@php if($data['task_type']=='Information Update') { echo 'selected'; } @endphp>Information Update</option>
                                        <option value="Function Modification"@php if($data['task_type']=='Function Modification') { echo 'selected'; } @endphp>Function Modification</option>
                                        <option value="Miscellaneous"@php if($data['task_type']=='Miscellaneous') { echo 'selected'; } @endphp>Miscellaneous</option>
                                    </select>
                                </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label> Links </label>
                                        <input type="text" name="links" value="{{ $data['links'] }}" class="form-control">
                                    </div>
                                </div>
                            </div>

                          <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Full Description</label>
                                    <textarea name="description" class="form-control">{{ $data['description'] }}</textarea>
                                </div>
                            </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label"> Notes </label>
                                        <textarea name="notes" class="form-control">{{ $data['notes'] }}</textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label> Status </label>
                                        <select name="status" class="form-select">
                                            <option value="Open"@php if($data['status']=='Open') { echo 'selected'; } @endphp>Open</option>
                                            <option value="Delayed"@php if($data['status']=='Delayed') { echo 'selected'; } @endphp>Delayed</option>
                                            <option value="Completed"@php if($data['status']=='Completed') { echo 'selected'; } @endphp>Completed</option>
                                            <option value="Canceled"@php if($data['status']=='Canceled') { echo 'selected'; } @endphp>Canceled</option>
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
