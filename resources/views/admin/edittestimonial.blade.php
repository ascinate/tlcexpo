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
                        <h4 class="card-title">Edit Testimonial</h4>
                        <form name="addfrm" action="{{ URL::to('updatetestimonial') }}" method="POST" class="forms-sample">
                            <input type="hidden" name="id" value="{{ $data['id'] }}"/>
                            @csrf

                            <div class="row">
                                <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="exampleInputName1"> Name</label>
                                    <input type="text" class="form-control" name="name" value="{{ $data['name'] }}" required>
                                </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label> Position </label>
                                    <input type="text" name="position" class="form-control" value="{{ $data['position'] }}" required/>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                    <label>Feedback</label>
                                    <textarea name="description" class="form-control" style="line-height: 20px;" required>
                                        {{ $data['description'] }}
                                    </textarea>
                                </div>
                                </div>
                            </div>

                          <button type="submit" name="btnsubmit" class="btn btn-gradient-primary me-2">Submit</button>
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
