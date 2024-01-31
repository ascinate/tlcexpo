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
                        <h4 class="card-title">Edit Home Page</h4>
                        @php
                            $data = \DB::table('homes')->get();
                        @endphp
                        <form name="addfrm" action="{{ URL::to('updatehome') }}" method="POST" class="forms-sample" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="{{ $data[0]->id }}" />
                            @csrf
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputName1">Banner Heading 1 </label>
                                        <input type="text" class="form-control" name="banner1_head" value="{{ $data[0]->banner1_head }}" required>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputName1">Banner Caption 1</label>
                                        <input type="text" class="form-control" name="banner1_caption" value="{{ $data[0]->banner1_caption }}" required>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputName1">Upload Banner 1</label>
                                        <input type="file" name="banner1">
                                        &nbsp;<img src="{{ '../uploads/'.$data[0]->banner1 }}" border="0" width="150" height="80">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputName1">Banner Heading 2</label>
                                        <input type="text" class="form-control" name="banner2_head" value="{{ $data[0]->banner2_head }}" required>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputName1">Banner Caption 2</label>
                                        <input type="text" class="form-control" name="banner2_caption" value="{{ $data[0]->banner2_caption }}" required>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputName1">Upload Banner 2</label>
                                        <input type="file" name="banner2">
                                        &nbsp;<img src="{{ '../uploads/'.$data[0]->banner2 }}" border="0" width="150" height="80">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputName1">About us heading</label>
                                        <input type="text" class="form-control" name="about_head" value="{{ $data[0]->about_head }}" required>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputName1">About us descripton</label>
                                        <textarea name="about_description"  class="form-control" rows="5" cols="20" style="line-height: 20px;" required>
                                            {{ $data[0]->about_description }}
                                        </textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputName1">Top Bar Address</label>
                                        <input type="text" class="form-control" name="top_address" value="{{ $data[0]->top_address }}" required>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputName1">Top Bar Email</label>
                                        <input type="text" class="form-control" name="top_email" value="{{ $data[0]->top_email }}" required>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputName1">Top Bar Contact</label>
                                        <input type="text" class="form-control" name="top_contact" value="{{ $data[0]->top_contact }}" required>
                                    </div>
                                </div>
                            </div>

                          <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                        </form>
                      </div>
                    </div>
                  </div>

            </div>
        </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <x-adminfooter/>
