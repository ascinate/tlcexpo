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
                        <h4 class="card-title">Edit An Entity</h4>
                        <p> Person or Business </p>
                        <form name="addfrm" action="{{ URL::to('updateentity') }}" method="POST" class="forms-sample" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="{{ $data['id'] }}">
                            @csrf

                            <div class="row">
                                <div class="col-lg-3">
                                  <div class="form-group">
                                      <label for="exampleInputName1" class="form-label">Legal Name</label>
                                      <input type="text" class="form-control" value="{{ $data['legeal_name'] }}" name="legeal_name" required>
                                  </div>
                                </div>

                                <div class="col-lg-3">
                                  <div class="form-group">
                                      <h6>Entity Type</h6>
                                      <div class="form-check">
                                        <input class="form-check-input m-0" value="Person" type="radio" name="entity_type" id="person" @php
                                            if($data['entity_type']=='Person') { echo 'checked'; }
                                        @endphp>
                                        <label class="form-check-label m-0 ms-4" for="person">
                                           Person
                                        </label>
                                      </div>
                                      <div class="form-check mt-2">
                                        <input class="form-check-input m-0" value="Business" type="radio" name="entity_type" id="business"  @php
                                        if($data['entity_type']=='Business') { echo 'checked'; }
                                    @endphp>
                                        <label class="form-check-label m-0 ms-4" for="business">
                                        Business
                                        </label>
                                      </div>
                                  </div>
                                </div>

                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label class="form-label"> Display listing by... </label>
                                        <select name="display_listing" class="form-select">
                                          <option value="" selected></option>
                                          <option value="Business Name"@php
                                              if($data['display_listing']=='Business Name') { echo 'selected'; }
                                          @endphp>Business Name</option>
                                          <option value="Last Name, First Name, MI"@php
                                          if($data['display_listing']=='Last Name, First Name, MI') { echo 'selected'; }
                                      @endphp>Last Name, First Name, MI</option>
                                          <option value="DBA Name"@php
                                          if($data['display_listing']=='DBA Name') { echo 'selected'; }
                                      @endphp>DBA Name</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label class="form-label"> Logo, Portrait, or Emoji </label>
                                        <div class="">
                                          <input class="form-control" name="logo" type="file" id="formFile">
                                          &nbsp;<img src="../../uploads/{{ $data['logo'] }}" border="0" width="100" height="80">
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
                                        <input type="text" value="{{ $data['business_name'] }}" name="business_name" class="form-control">
                                  </div>
                                </div>

                                <div class="col-lg-6">
                                  <div class="form-group">
                                        <label class="form-label"> dba: (doing business as) </label>
                                        <input type="text" value="{{ $data['dba'] }}" name="dba" class="form-control">
                                  </div>
                                </div>

                                <div class="col-lg-6">
                                  <div class="form-group">
                                      <label class="form-label"> Business Type </label>
                                        <select name="business_type" class="form-select">
                                          <option value=""></option>
                                          <option value="Sole Proprieter"@php
                                          if($data['business_type']=='Sole Proprieter') { echo 'selected'; }
                                      @endphp>Sole Proprieter</option>
                                          <option value="Partnership"@php
                                          if($data['business_type']=='Partnership') { echo 'selected'; }
                                      @endphp>Partnership</option>
                                          <option value="LLC-Limited Libility Company"@php
                                          if($data['business_type']=='LLC-Limited Libility Company') { echo 'selected'; }
                                      @endphp>LLC-Limited Libility Company</option>
                                          <option value="C-Corporation"@php
                                          if($data['business_type']=='C-Corporation') { echo 'selected'; }
                                      @endphp>C-Corporation</option>
                                          <option value="S-Corporation"@php
                                          if($data['business_type']=='S-Corporation') { echo 'selected'; }
                                      @endphp>S-Corporation</option>
                                          <option value="Non-profit Corporation"@php
                                          if($data['business_type']=='Non-profit Corporation') { echo 'selected'; }
                                      @endphp>Non-profit Corporation</option>
                                        </select>
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
                                          <input type="text" value="{{ $data['salutation'] }}" name="salutation" class="form-control">
                                      </div>

                                  </div>
                                  <div class="col-lg-2">
                                      <div class="form-group">
                                          <label for="exampleInputName1" class="form-label">First Name</label>
                                          <input type="text" value="{{ $data['firstname'] }}" name="firstname" class="form-control">
                                      </div>

                                  </div>
                                  <div class="col-lg-2">
                                      <div class="form-group">
                                          <label for="exampleInputName1" class="form-label">Nickname</label>
                                          <input type="text" value="{{ $data['nickname'] }}" name="nickname" class="form-control">
                                      </div>

                                  </div>

                                  <div class="col-lg-2">
                                      <div class="form-group">
                                          <label for="exampleInputName1" class="form-label">Second Name</label>
                                          <input type="text" name="secondname" value="{{ $data['secondname'] }}" class="form-control">
                                      </div>

                                  </div>

                                  <div class="col-lg-2">
                                      <div class="form-group">
                                          <label for="exampleInputName1" class="form-label">Last Name</label>
                                          <input type="text" name="lastname" value="{{ $data['lastname'] }}" class="form-control">
                                      </div>
                                  </div>

                                  <div class="col-lg-2">
                                      <div class="form-group">
                                          <label for="exampleInputName1" class="form-label">Suffix</label>
                                          <input type="text" name="suffix" value="{{ $data['suffix'] }}" class="form-control">
                                      </div>

                                  </div>

                                  <div class="col-lg-2">
                                      <div class="form-group">
                                          <label for="exampleInputName1" class="form-label">Gender</label>
                                          <select name="gender" class="form-select">
                                            <option value="" selected></option>
                                            <option value="Male"@php
                                                if($data['gender']=='Male') { echo 'selected'; }
                                            @endphp>Male</option>
                                            <option value="Female"@php
                                            if($data['gender']=='Female') { echo 'selected'; }
                                        @endphp>Female</option>
                                         </select>
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
                                          <input type="text" value="{{ $data['formal_salutation'] }}" class="form-control" name="formal_salutation">
                                          <h6 class="mt-1"> Dear Mr. Smith.</h6>
                                      </div>

                                  </div>

                                  <div class="col-lg-4">
                                      <div class="form-group">
                                          <label for="exampleInputName1" class="form-label">Informal Saluation</label>
                                          <input type="text" value="{{ $data['informal_saluation'] }}" class="form-control" name="informal_saluation">
                                          <h6 class="mt-1"> Hello Tony, </h6>
                                      </div>
                                  </div>

                                  <div class="col-lg-12">
                                      <div class="form-group">
                                          <label for="exampleInputName1" class="form-label">Title /​ Position</label>
                                          <input type="text" value="{{ $data['position'] }}" class="form-control" name="position">
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
                                                  <select name="email_type[]" class="form-select">
                                                  <option value=""></option>
                                                  <option value="Personal"@php
                                                      if($email['email_type'][$x-1]=='Personal') { echo 'selected'; }
                                                  @endphp>Personal</option>
                                                  <option value="Work"@php
                                                      if($email['email_type'][$x-1]=='Work') { echo 'selected'; }
                                                  @endphp>Work</option>
                                                </select>
                                             </div>
                                          </div>
                                          <div class="col-lg-8">
                                             <div class="form-group">
                                                  <label for="exampleInputName1" class="form-label">Email</label>
                                                  <input type="text" value="{{ $email['email'][$x-1] }}" class="form-control" name="email[]">
                                             </div>
                                          </div>
                                       </div>
                                    </div>

                                    @php
                                        }
                                    @endphp

                                    <div id="ccolonejem"> </div>

                                    <a id="sh-addvem" class="btn p-3 btn-primary d-table btn-add-btn mt-3 mb-4"> <span> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                             <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
                                          </svg> </span>
                                          Add Email </a>

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
                                                  <select name="service[]" class="form-select">
                                                    <option value=""></option>
                                                    <option value="Linkedin"@php
                                                      if($internetaccounts['service'][$k-1]=='Linkedin') { echo 'selected'; }
                                                  @endphp>Linkedin</option>
                                                    <option value="Facebook"@php
                                                      if($internetaccounts['service'][$k-1]=='Facebook') { echo 'selected'; }
                                                  @endphp>Facebook</option>
                                                    <option value="Twitter/X"@php
                                                      if($internetaccounts['service'][$k-1]=='Twitter/X') { echo 'selected'; }
                                                  @endphp>Twitter/X</option>
                                                    <option value="Website"@php
                                                      if($internetaccounts['service'][$k-1]=='Website') { echo 'selected'; }
                                                  @endphp>Website</option>
                                                  </select>
                                             </div>
                                          </div>
                                          <div class="col-lg-8">
                                             <div class="form-group">
                                                  <label for="exampleInputName1" class="form-label">URL</label>
                                                  <input type="text" value="{{ @$internetaccounts['account_url'][$k-1] }}" class="form-control" name="account_url[]">
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    @php
                                      }
                                    @endphp
                                    <div id="ccolonejem1">

                                       </div>
                                    <a id="sh-addvems1" class="btn p-3 btn-primary d-table btn-add-btn mt-3 mb-4"> <span> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                             <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
                                          </svg> </span>
                                          Add Internet Account </a>
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
                                                  <select name="type[]" class="form-select">
                                                  <option value=""></option>
                                                  <option value="Mobile"@php
                                                      if($telephone['type'][$d-1]=='Mobile') { echo 'selected'; }
                                                  @endphp>Mobile</option>
                                                  <option value="Office"@php
                                                      if($telephone['type'][$d-1]=='Office') { echo 'selected'; }
                                                  @endphp>Office</option>
                                                  <option value="Home"@php
                                                      if($telephone['type'][$d-1]=='Home') { echo 'selected'; }
                                                  @endphp>Home</option>
                                                  <option value="Fax"@php
                                                      if($telephone['type'][$d-1]=='Fax') { echo 'selected'; }
                                                  @endphp>Fax</option>
                                                </select>
                                              </div>
                                           </div>

                                           <div class="col-lg-2">
                                              <div class="form-group">
                                                  <label for="exampleInputName1" class="form-label">CC</label>
                                                  <input type="text" value="{{ $telephone['cc'][$d-1] }}" class="form-control" name="cc[]" >
                                                  <p class="mt-2"> Country Code </p>
                                              </div>
                                           </div>

                                           <div class="col-lg-4">
                                              <div class="form-group">
                                                  <label for="exampleInputName1" class="form-label">Number</label>
                                                  <input type="text" value="{{ $telephone['number'][$d-1] }}" class="form-control" name="number[]">
                                                  <p class="mt-2"> North America Phone  </p>
                                              </div>
                                           </div>

                                           <div class="col-lg-2">
                                              <div class="form-group">
                                                  <label for="exampleInputName1" class="form-label">Ext</label>
                                                  <input type="text" class="form-control" name="ext[]" value="{{ $telephone['ext'][$d-1] }}">
                                              </div>
                                           </div>

                                           <div class="col-lg-2">
                                              <div class="form-group">
                                                  <label for="exampleInputName1" class="form-label">Priority</label>
                                                   <select name="priority[]" class="form-select">
                                                    <option value=""></option>
                                                    <option value="Primary"@php
                                                      if($telephone['priority'][$d-1]=='Primary') { echo 'selected'; }
                                                  @endphp>Primary</option>
                                                    <option value="Alternative"@php
                                                      if($telephone['priority'][$d-1]=='Alternative') { echo 'selected'; }
                                                  @endphp>Alternative</option>
                                                    <option value="Emergency"@php
                                                      if($telephone['priority'][$d-1]=='Emergency') { echo 'selected'; }
                                                  @endphp>Emergency</option>
                                                  </select>
                                              </div>
                                           </div>
                                       </div>
                              </div>
                             @php
                                 }
                             @endphp
                              <div id="ccolonejemt1"></div>

                              <a id="sh-addvemst1" class="btn p-3 btn-primary d-table btn-add-btn mt-3 mb-4"> <span> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                              <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
                            </svg> </span> Add Number </a>

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
                                        <select name="address[]" class="form-select">
                                                <option value=""></option>
                                            @php
                                                $value = \DB::table('locations')->get();
                                                foreach($value as $val)
                                                {
                                                    $address = @$val->address_line_1.', '.$val->city.', '.$val->state.', '.$val->zipcode;
                                            @endphp
                                                <option value="{{ $address }}"@php
                                                    if($locations['address'][$j-1]==$address) { echo 'selected'; }
                                                @endphp>
                                                {{ $address }}
                                                </option>
                                                @php
                                                }
                                            @endphp
                                        </select>
                                        </div>
                                 </div>
                                    @php
                                        }
                                    @endphp
                                <div id="ccolonejemloc"></div>

                                <a id="sh-addvemsloc" class="btn p-3 btn-primary d-table btn-add-btn mt-3 mb-4"> <span> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                              <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
                            </svg> </span> Add Address </a>
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
                                              <select name="parent[]" class="form-select">
                                                <option value=""></option>
                                                @php
                                                    $data = \DB::table('entities')->get();
                                                    foreach($data as $entity)
                                                    {
                                                @endphp
                                                <option value="{{ $entity->id }}"@php
                                                    if($sub_relationship['parent'][$z-1]==$entity->id) { echo  'selected'; }
                                                @endphp>{{ $entity->legeal_name }}</option>
                                                @php
                                                    }
                                                @endphp
                                              </select>
                                          </div>

                                          <div class="form-group col-lg-8">
                                            <label for="exampleInputName1" class="form-label"> Relationship Description </label>
                                            <input type="text" class="form-control" name="relation_description[]" value="{{ @$sub_relationship['relation_description'][$z-1] }}">
                                            <p class="mt-1"> Employee, Corp Officer, Subsidary, Division </p>
                                          </div>
                                       </div>
                                </div>
                                @php
                                    }
                                @endphp
                                <div id="ccolonejemlocc"></div>

                                <a id="sh-addvemslocc" class="btn p-3 btn-primary d-table btn-add-btn mt-3 mb-4"> <span> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                              <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
                            </svg> </span> Add Items </a>
                          </div>

                          <button type="submit" name="btn" class="btn btn-gradient-primary me-2 mt-5">Submit</button>
                          <button type="button" class="btn btn-light mt-5" onclick="javascript:history.go(-1);">Cancel</button>
                        </form>
                      </div>
                    </div>
                  </div>

            </div>
        </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <x-adminfooter/>
