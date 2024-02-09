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
                        <h4 class="card-title">Entities</h4>
                        <p> Person or Business </p>
                        <form name="addfrm" action="{{ URL::to('updateentity') }}" method="POST" class="forms-sample" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="{{ $data['id'] }}">
                            @csrf

                            <div class="row">
                                <div class="col-lg-3">
                                  <div class="form-group">
                                      <label for="exampleInputName1" class="form-label">Legal Name</label>
                                      <span class="d-block">{{ $data['legeal_name'] }}</span>
                                  </div>
                                </div>

                                <div class="col-lg-3">
                                  <div class="form-group">
                                      <h6>Entity Type</h6>
                                      <div class="form-check">
                                        <span class="d-block">{{ $data['entity_type'] }}</span>
                                      </div>
                                  </div>
                                </div>

                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label class="form-label"> Display listing by... </label>
                                        <span class="d-block">{{ $data['display_listing'] }}</span>
                                    </div>
                                </div>

                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label class="form-label"> Logo, Portrait, or Emoji </label>
                                        <div class="">
                                         <img src="../../uploads/{{ $data['logo'] }}" border="0" width="100" height="80">
                                        </div>
                                    </div>
                                </div>
                            </div>

                          <div id="businessd">
                            <h5> Business </h5>
                              <div class="row mt-4">
                                <div class="col-lg-6">
                                  <div class="form-group">
                                        <label class="form-label"> Business Name </label>
                                        <span class="d-block">{{ $data['business_name'] }}</span>
                                  </div>
                                </div>

                                <div class="col-lg-6">
                                  <div class="form-group">
                                        <label class="form-label"> dba: (doing business as) </label>
                                        <span class="d-block">{{ $data['dba'] }}</span>
                                  </div>
                                </div>

                                <div class="col-lg-6">
                                  <div class="form-group">
                                      <label class="form-label"> Business Type </label>
                                      <span class="d-block">{{ $data['business_type'] }}</span>
                                  </div>
                                </div>

                              </div>
                          </div>
                          <div id="personal">
                              <h5> Person </h5>
                              <div class="row mt-4">
                                  <div class="col-lg-2">
                                      <div class="form-group">
                                          <label for="exampleInputName1" class="form-label">Salutation</label>
                                          <span class="d-block">{{ $data['salutation'] }}</span>
                                      </div>

                                  </div>
                                  <div class="col-lg-2">
                                      <div class="form-group">
                                          <label for="exampleInputName1" class="form-label">First Name</label>
                                          <span class="d-block">{{ $data['firstname'] }}</span>
                                      </div>

                                  </div>
                                  <div class="col-lg-2">
                                      <div class="form-group">
                                          <label for="exampleInputName1" class="form-label">Nickname</label>
                                          <span class="d-block">{{ $data['nickname'] }}</span>
                                      </div>

                                  </div>

                                  <div class="col-lg-2">
                                      <div class="form-group">
                                          <label for="exampleInputName1" class="form-label">Second Name</label>
                                          <span class="d-block">{{ $data['secondname'] }}</span>
                                      </div>

                                  </div>

                                  <div class="col-lg-2">
                                      <div class="form-group">
                                          <label for="exampleInputName1" class="form-label">Last Name</label>
                                          <span class="d-block">{{ $data['lastname'] }}</span>
                                      </div>
                                  </div>

                                  <div class="col-lg-2">
                                      <div class="form-group">
                                          <label for="exampleInputName1" class="form-label">Suffix</label>
                                          <span class="d-block">{{ $data['suffix'] }}</span>
                                      </div>

                                  </div>

                                  <div class="col-lg-2">
                                      <div class="form-group">
                                          <label for="exampleInputName1" class="form-label">Gender</label>
                                          <span class="d-block">{{ $data['gender'] }}</span>
                                      </div>
                                  </div>

                                  <div class="col-lg-3">
                                      <div class="form-group">
                                          <label for="exampleInputName1" class="form-label">Birthday</label>
                                          <input type="date" value="{{ $data['birthday'] }}" name="birthday" class="form-control">
                                      </div>
                                  </div>

                                  <div class="col-lg-3">
                                      <div class="form-group">
                                          <label for="exampleInputName1" class="form-label">Formal Salutation</label>
                                          <span class="d-block">{{ $data['formal_salutation'] }}</span>
                                      </div>

                                  </div>

                                  <div class="col-lg-4">
                                      <div class="form-group">
                                          <label for="exampleInputName1" class="form-label">Informal Saluation</label>
                                          <span class="d-block">{{ $data['informal_saluation'] }}</span>
                                      </div>
                                  </div>

                                  <div class="col-lg-12">
                                      <div class="form-group">
                                          <label for="exampleInputName1" class="form-label">Title /​ Position</label>
                                          <span class="d-block">{{ $data['position'] }}</span>
                                      </div>
                                  </div>
                              </div>
                          </div>

                          <div class="misu mt-5">
                             <div class="row">
                                <div class="col-lg-6">
                                    <h5> Email Addresses </h5>
                                    @php
                                        $email = json_decode($data['emails'],true);
                                        $count = count($email['email_type']);

                                        for($x=1;$x<=($count);$x++)
                                        {
                                    @endphp

                                    <div id="eaddresses" class="bg-light p-4 mb-4">
                                       <div class="d-flex align-items-center mb-4">
                                          <a id="clo-eaddresses" class="btn p-0 btn-colos">
                                               <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
                                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293z"/>
                                               </svg>
                                          </a>
                                          <h5 class="m-0 ms-1"> Email {{ $x }} </h5>
                                       </div>

                                       <div class="row">
                                          <div class="col-lg-4">
                                             <div class="form-group">
                                                  <label for="exampleInputName1" class="form-label">Email Type</label>
                                                  <span class="d-block">{{ $email['email_type'][$x-1] }}</span>
                                             </div>
                                          </div>
                                          <div class="col-lg-8">
                                             <div class="form-group">
                                                  <label for="exampleInputName1" class="form-label">Email</label>
                                                  <span class="d-block">{{ $email['email'][$x-1] }}</span>
                                             </div>
                                          </div>
                                       </div>
                                    </div>

                                    @php
                                        }
                                    @endphp



                                </div>  <!--------->

                                <div class="col-lg-6">
                                    <h5> Internet Account </h5>
                                    @php
                                    $internetaccounts = json_decode($data['internetaccounts'],true);
                                    $count = count($internetaccounts['account_url']);

                                    for($k=1;$k<=($count);$k++)
                                    {
                                @endphp
                                    <div id="internet" class="bg-light p-4 mb-4">
                                       <div class="d-flex align-items-center mb-4">
                                          <a id="clo-internet" class="btn p-0 btn-colos">
                                               <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
                                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293z"/>
                                               </svg>
                                          </a>
                                          <h5 class="m-0 ms-1"> Internet Account {{ $k }} </h5>
                                       </div>
                                       <div class="row">
                                          <div class="col-lg-4">
                                             <div class="form-group">
                                                  <label for="exampleInputName1" class="form-label">Service</label>
                                                  <span class="d-block">{{ @$internetaccounts['service'][$k-1] }}</span>
                                             </div>
                                          </div>
                                          <div class="col-lg-8">
                                             <div class="form-group">
                                                  <label for="exampleInputName1" class="form-label">URL</label>
                                                  <span class="d-block">{{ @$internetaccounts['account_url'][$k-1] }}</span>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    @php
                                      }
                                    @endphp

                                </div>  <!--------->

                             </div>
                          </div>

                          <div class="comonfilu mt-5">
                              <h5> Telephone Numbers </h5>
                              @php
                                $telephone = json_decode($data['telephone'],true);
                                $count = count($telephone['number']);

                                for($d=1;$d<=($count);$d++)
                                {
                            @endphp
                              <div id="numbers" class="bg-light p-4">
                                        <div class="d-flex align-items-center mb-4">
                                          <a id="clo-numbers" class="btn p-0 btn-colos">
                                               <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
                                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293z"/>
                                               </svg>
                                          </a>
                                          <h5 class="m-0 ms-2"> Number Details {{ $d }} </h5>
                                       </div>

                                       <div class="row">
                                           <div class="col-lg-2">
                                              <div class="form-group">
                                                  <label for="exampleInputName1" class="form-label">Type</label>
                                                  <span class="d-block">{{ @$telephone['type'][$d-1] }}</span>
                                              </div>
                                           </div>

                                           <div class="col-lg-2">
                                              <div class="form-group">
                                                  <label for="exampleInputName1" class="form-label">CC</label>
                                                  <span class="d-block">{{ @$telephone['cc'][$d-1] }}</span>
                                              </div>
                                           </div>

                                           <div class="col-lg-4">
                                              <div class="form-group">
                                                  <label for="exampleInputName1" class="form-label">Number</label>
                                                  <span class="d-block">{{ @$telephone['number'][$d-1] }}</span>
                                              </div>
                                           </div>

                                           <div class="col-lg-2">
                                              <div class="form-group">
                                                  <label for="exampleInputName1" class="form-label">Ext</label>
                                                  <span class="d-block">{{ @$telephone['ext'][$d-1] }}</span>
                                              </div>
                                           </div>

                                           <div class="col-lg-2">
                                              <div class="form-group">
                                                  <label for="exampleInputName1" class="form-label">Priority</label>
                                                  <span class="d-block">{{ @$telephone['priority'][$d-1] }}</span>
                                              </div>
                                           </div>
                                       </div>
                              </div>
                             @php
                                 }
                             @endphp


                          </div>

                          <div class="comonfilu mt-5">
                                <h5> Locations </h5>
                                @php
                                    $locations = json_decode($data['locations'],true);
                                    $count = count($locations['address']);

                                    for($j=1;$j<=($count);$j++)
                                    {
                                @endphp
                                <div id="locations" class="bg-light p-4">
                                        <div class="d-flex align-items-center mb-4">
                                          <a id="clo-locations" class="btn p-0 btn-colos">
                                               <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
                                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293z"/>
                                               </svg>
                                          </a>
                                          <h5 class="m-0 ms-2"> Address {{ $j }} </h5>
                                       </div>

                                       <div class="form-group">
                                        <span class="d-block">{{ @$locations['address'][$j-1] }}</span>
                                        </div>
                                </div>
                                @php
                                    }
                                @endphp

                          </div>

                          <div class="comonfilu mt-5">
                                <h5> Sub-account Relationships </h5>

                                @php
                                    $sub_relationship = json_decode($data['sub_relationship'],true);
                                    $count = count($sub_relationship['parent']);

                                    for($z=1;$z<=($count);$z++)
                                    {
                                @endphp
                                <div id="relationships" class="bg-light p-4">
                                        <div class="d-flex align-items-center mb-4">
                                          <a id="clo-relationships" class="btn p-0 btn-colos">
                                               <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
                                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293z"/>
                                               </svg>
                                          </a>
                                          <h5 class="m-0 ms-2"> Item {{ $z }} </h5>
                                       </div>

                                       <div class="row">
                                          <div class="form-group col-lg-4">
                                            <label for="exampleInputName1" class="form-label">Parent record</label>
                                            <span class="d-block">
                                              @php
                                                  $parent = \DB::table('entities')->where('id',$sub_relationship['parent'][$z-1])->get();
                                                  echo @$parent[0]->legeal_name;
                                              @endphp
                                            </span>
                                          </div>

                                          <div class="form-group col-lg-8">
                                            <label for="exampleInputName1" class="form-label"> Relationship Description </label>
                                            <span class="d-block">{{ @$sub_relationship['relation_description'][$z-1] }}</span>
                                          </div>
                                       </div>
                                </div>
                                @php
                                    }
                                @endphp

                          </div>

                          <button type="button" class="btn btn-light mt-5" onclick="javascript:history.go(-1);">Back</button>
                        </form>
                      </div>
                    </div>
                  </div>

            </div>
        </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <x-adminfooter/>
