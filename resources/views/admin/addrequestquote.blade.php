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
                        <h4 class="card-title">Request Quote</h4>
                        <form name="addfrm" action="{{ URL::to('insertvenue') }}" method="POST" class="forms-sample">
                            @csrf

                            <div class="row">
                                <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="exampleInputName1">Venue Name</label>
                                    <input type="text" class="form-control" name="address" required>
                                </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label> Address line 1 </label>
                                    <input type="text" name="address_line_1" class="form-control"/>
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
