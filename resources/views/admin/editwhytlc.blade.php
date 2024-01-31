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
                        <h4 class="card-title">Edit Whytlc</h4>
                        <form name="addfrm" action="{{ URL::to('updatewhytlc') }}" method="POST" class="forms-sample">
                            <input type="hidden" name="id" value="{{ $data['id'] }}"/>
                            @csrf

                                <div class="form-group">
                                    <label for="exampleInputName1">Title</label>
                                    <input type="text" class="form-control" name="title" value="{{ $data['title'] }}">
                                </div>

                                <div class="form-group">
                                <label> Description</label>
                                <textarea class="form-control" name="description" rows="5" cols="20">
                                    {{ $data['description'] }}
                                </textarea>
                                </div>

                          <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                          <button class="btn btn-light" onclick="javascript:history.go(-1);">Cancel</button>
                        </form>
                      </div>
                    </div>
                  </div>

            </div>
        </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <x-adminfooter/>
