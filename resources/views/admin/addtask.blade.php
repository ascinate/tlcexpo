<x-adminheader/>
      <!-- partial -->
   <x-adminsidebar/>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">

           <!----Main Row--------->
           <form name="addfrm" action="{{ URL::to('inserttask') }}" method="POST" class="forms-sample">
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
                                        <option value="1">1 - VERY HIGH - EMERGENCY - COMPLETE ASAP</option>
                                        <option value="2">2 - HIGH - E.G. Major bugs/fixes</option>
                                        <option value="3">3 - HIGH - E.G. Important Site-wide Changing Project</option>
                                        <option value="4">4 - HIGH - E.G. Urgent Data Fixes</option>
                                        <option value="5">5 - MODERATE - E.G. Bugs/fixes</option>
                                        <option value="6">6 - MODERATE - E.G. Regular projects and additions</option>
                                        <option value="7">7 - MODERATE - E.G. Data Fixes</option>
                                        <option value="8">8 - LOW - E.G. Low risk bugs/fixes</option>
                                        <option value="9">9 - LOW - E.G. Minor additions</option>
                                        <option value="10">10 - LOW - E.G. Data additions</option>
                                   </select>
                                </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label> Task Name / Short Description </label>
                                       <input type="text" name="task_name" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label>Task Type</label>
                                     <select name="task_type" class="form-select">
                                        <option value="None">None</option>
                                        <option value="Bug Fix / Maintenance Request">Bug Fix / Maintenance Request</option>
                                        <option value="Feature Request">Feature Request</option>
                                        <option value="Information Update">Information Update</option>
                                        <option value="Function Modification">Function Modification</option>
                                        <option value="Miscellaneous">Miscellaneous</option>
                                    </select>
                                </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Links</label>
                                        <input type="text" name="links" class="form-control">
                                    </div>
                                </div>
                            </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label> Full Description </label>
                                    <textarea name="description" class="form-control"></textarea>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-label"> Notes </label>
                                    <textarea name="notes" class="form-control"></textarea>
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
