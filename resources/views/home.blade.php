<x-header/>
@php
    $data = \DB::table('homes')->get();
@endphp
<section class="banner-part float-start w-100 new-banner02">
    <div class="slider-div owl-carousel owl-theme">
      <div class="items-sliders" data-dot="<button>01</button>">
        <div class="container position-relative">
            <div class="items-text01">
               <!--<h2> Request A
                <span class="d-block">  Quote  </span> </h2>-->
                <h2>{{ $data[0]->banner1_head }}</h2>
               <h5 class="col-lg-10"> {{ $data[0]->banner1_caption }} </h5>
                 <div class="d-block button-divu w-100 mt-3">
                  <a href="#" class="btn btn-about mx-auto justify-content-center">
                    Click Here <span class="ciou"> <i class="fas fa-angle-right"></i> </span>
                 </a>
                </div>
            </div>
        </div>

        <figure>
          <img alt="sy" src="{{ 'uploads/'.$data[0]->banner1 }}"/>
         </figure>
      </div>

      <div class="items-sliders" data-dot="<button>02</button>">
        <div class="container position-relative">
            <div class="items-text01">
              <h2> {{ $data[0]->banner2_head }} </h2>
              <h5 class="col-lg-10"> {{ $data[0]->banner2_caption }} </h5>
                 <div class="d-block button-divu w-100 mt-3">
                  <a href="#" class="btn btn-about mx-auto justify-content-center">
                    Get know us more <span class="ciou"> <i class="fas fa-angle-right"></i> </span>  </a>
                </div>
            </div>
        </div>

        <figure>
          <img alt="sy" src="{{ 'uploads/'.$data[0]->banner2 }}"/>
         </figure>
      </div>
    </div>
  </section>

  <main class="float-start w-100">
     <section class="seation-about-new d-inline-block w-100 position-relative">
        <div class="container">
          <div class="indu-iv d-inline-block w-100 position-relative">
           <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 gy-4 gy-lg-0">
               <div class="col p-lg-0">
                  <a href="#" class="comon-about01 d-inline-block">
                      <div class="about-pic05">
                         <img alt="ser" src="images/3854740.png"/>
                      </div>
                      <div class="text-about">
                         <h2> value added service  </h2>
                         <p>
                          TLC-Expo is a freight broker specializing in shipping trade show properties. </p>
                         <div class="btn btn-more05">
                          <span class="coi"> <i class="fas fa-angle-right"></i> </span>
                          <span> Find Out more </span>
                         </div>
                      </div>
                      <div class="divider"></div>
                  </a>
               </div>
               <div class="col p-lg-0">
                <a href="#" class="comon-about01 d-inline-block">
                    <div class="about-pic05">
                       <img alt="ser" src="images/3319354.png"/>
                    </div>
                    <div class="text-about">
                       <h2> preparing for pickup </h2>
                       <p> There is one huge looming deadline that comes just before the trade.. </p>
                       <div class="btn btn-more05">
                        <span class="coi"> <i class="fas fa-angle-right"></i> </span>
                        <span> Find Out more </span>
                       </div>
                    </div>
                    <div class="divider"></div>
                </a>
               </div>
               <div class="col p-lg-0">
                <a href="#" class="comon-about01 d-inline-block">
                    <div class="about-pic05">
                       <img alt="ser" src="images/12979406.png"/>
                    </div>
                    <div class="text-about">
                       <h2> post event pickup prep </h2>
                       <p> Wouldn’t it be great to just go home after the show closes? But wait… </p>
                       <div class="btn btn-more05">
                        <span class="coi"> <i class="fas fa-angle-right"></i> </span>
                        <span> Find Out more </span>
                       </div>
                    </div>
                    <div class="divider"></div>
                </a>
              </div>
              <div class="col p-lg-0">
                <a href="#" class="comon-about01 after-off d-inline-block">
                    <div class="about-pic05">
                       <img alt="ser" src="images/3974047.png"/>
                    </div>
                    <div class="text-about">
                       <h2> Venue Freight Supervision </h2>
                       <p> We are still in development on this section, so watch for an updated.. </p>
                       <div class="btn btn-more05">
                        <span class="coi"> <i class="fas fa-angle-right"></i> </span>
                        <span> Find Out more </span>
                       </div>
                    </div>
                </a>
              </div>
           </div>
          </div>
        </div>
     </section>

     <section class="about-home d-inline-block w-100">
        <div class="container">
            <div class="row gy-5 gy-lg-0 align-items-start">
                <div class="col-xxl-6 col-xl-5 position-relative">
                  <div class="group-img d-inline-block w-100">
                      <figure class="img-boux03 mb-0 d-block">
                          <img alt="abiut" src="images/about-card-img-1.jpg"/>
                      </figure>

                    <figure class="img-boux04 mb-0 d-block">
                      <img alt="abiut" src="images/about-card-img-2-1.jpg"/>
                    </figure>
                    <div class="about-anim MovefadeUp">
                        <figure>
                          <img alt="ser" src="images/819873.png"/>
                        </figure>
                    </div>
                  </div>
                </div>
                <div class="col-xxl-6 col-xl-7">
                  <div class="right-slider">
                     <h5 class="sub-titels"> About us </h5>
                     <h2 class="min-titels"> {{ $data[0]->about_head }} </h2>
                     <p> {{ $data[0]->about_description }}</p>
                     <a href="#" class="btn btn-comon-more mt-4"> Get know us more
                      <span class="iou"> <i class="fas fa-angle-right"></i> </span> </a>
                  </div>
                </div>
            </div>
        </div>
     </section>

     <section class="why-div d-inline-block w-100 position-relative">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="left-index">
                        <h5 class="sub-titels"> Why TLC-EXPO </h5>
                        <h2 class="min-titels text-white">  We do have <strong> great
                           relationships  </strong> with carriers </h2>

                           <a href="#" class="btn btn-comon-more mt-5"> Learn more </a>

                        <div class="img-whyu">
                           <img alt="ser" src="images/video-popub-bg-1.jpg"/>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                   <div class="why-texr-right d-inline-block w-100">
                      <div class="row row-cols-1 row-cols-sm-2 gy-5 gy-lg-0 mt-0">

                        @foreach($services as $service)
                        <div class="col">
                          <div class="comon-why">
                            <div class="img-why01">
                              <img alt="su" src="{{ 'images/'.$service->icon }}"/>
                            </div>
                              <div class="titems01">
                                  <h5> {{ $service->title }} </h5>
                                  <p> {{ $service->description }} </p>
                              </div>
                          </div>
                        </div>
                        @endforeach

                      </div>
                   </div>
                </div>
            </div>
        </div>
     </section>

     <section class="testoimonsa nrw-testomoni d-inline-block w-100 mt-0">
      <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-5 pr-0">
              <h5 class="sub-titels"> Testimonials </h5>
              <h2 class="min-titels"> What Clients <strong> Say </strong>
                About Us  </h2>

              <p class="rty"> Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy. </p>

            </div>
            <div class="col-xl-8 col-lg-7 p-0">
              <div class="silder-textrmoin">

                <div class="tesimonal-slider owl-carousel owl-theme">

                  @foreach($testimonials as $testimonial)
                  <div class="items-slider01">
                    <div class="text-boxu">
                      <span>
                         <img alt="qui" src="images/testimonial.png"/>
                      </span>
                      <p> {{ $testimonial->description }} </p>
                    </div>
                    <h5> {{ $testimonial->name }} <span class="d-block"> {{ $testimonial->position }} </span> </h5>

                  </div>
                  @endforeach

                </div>
               </div>
            </div>
        </div>
      </div>
   </section>

   <section class="events-div d-inline-block w-100">
    <div class="container">
      <h5 class="sub-titels text-center position-relative"> <span> Events </span> </h5>
        <h2 class="min-titels text-center col-lg-8 mx-auto"> Upcoming Events <strong> Powered By </strong> TLC-EXPO </h2>
        <div class="row">
            <div class="col-lg-6">
               <a href="#" class="bigh d-inline-block w-100 position-relative">
                 <div class="img-oui-events d-inline-block w-100">
                     <img alt="ser" src="images/hero_bg_1_2.jpg"/>
                 </div>
                 <div class="text-box01 d-inline-block w-100">
                    <div class="text-events01">
                        <h6> June 4, 2024</h6>
                        <h5 class=""> #CES 2024, Las Vegas, NV </h5>
                    </div>
                 </div>
               </a>
            </div>
            <div class="col-lg-6">
              <div class="row mt-4 mt-lg-0">
                <div class="col-12 col-sm-6 col-lg-6">
                   <a href="#" class="items-c-block d-inline-block w-100">
                      <div class="text-diuv">
                        <h6> <h6> June 10, 2024</h6> </h6>
                          <h5 class="">#Surf Expo Winter 2024, Orlando, FL</h5>

                      </div>
                   </a>
                </div>
                <div class="col-12 col-sm-6 col-lg-6">
                  <a href="#" class="items-c-block d-inline-block w-100">
                     <div class="text-diuv">
                       <h6> <h6> June 10, 2024</h6> </h6>
                         <h5 class="">#Surf Expo Winter 2024, Orlando, FL</h5>

                     </div>
                  </a>
                </div>
                <div class="col-12 col-sm-6 col-lg-6">
                  <a href="#" class="items-c-block d-inline-block w-100">
                     <div class="text-diuv">
                       <h6> <h6> June 13, 2024</h6> </h6>
                         <h5 class="">Anime Impulse LA, Pomona, CA</h5>

                     </div>
                  </a>
               </div>
               <div class="col-12 col-sm-6 col-lg-6">
                 <a href="#" class="items-c-block d-inline-block w-100">
                    <div class="text-diuv">
                      <h6> <h6> June 14, 2024</h6> </h6>
                        <h5 class="">NRF Protect Big Show 2024, NY, NY</h5>
                    </div>
                 </a>
               </div>
              </div>
            </div>

        </div>
        <a href="#" class="btn btn-comon-more mt-5 d-table mx-auto"> See more <span class="iou"> <i class="fas fa-angle-right"></i> </span> </a>
    </div>
  </section>

   <section class="request-qoute d-inline-block w-100">
    <div class="container-fluid px-0">
         <div class="row gy-5 g-lg-0">
             <div class="col-lg-5">
                 <figure class="m-0 qiute-img">
                    <img alt="ser" src="images/whour.jpg"/>
                 </figure>
             </div>
             <div class="col-lg-7">
                <div class="right-fore-sect d-inline-block w-100">
                  <h5 class="sub-titels position-relative text-white"> <span>  Request a Quote </span> </h5>
                  <h2 class="min-titels"> Let's <strong> Start A </strong> Conversation </h2>
                  <div class="form-section mt-5">
                      <div class="row">
                          <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                              <input type="text" class="form-control" placeholder="Customer Name"/>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                              <input type="email" class="form-control" placeholder="Email"/>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                              <input type="text" class="form-control" placeholder="Phone"/>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                              <input type="text" class="form-control" placeholder="Subject"/>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                              <input type="text" class="form-control" placeholder="Pickup City"/>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                              <input type="text" class="form-control" placeholder="Delivery City"/>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                              <select class="form-select" aria-label="Default select example">
                                <option selected>Shipment Type</option>
                                <option value="1">Round trip</option>
                                <option value="2">Inbound Only</option>
                                <option value="3">Outbound Only</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                              <input type="text" class="form-control" placeholder="Equipment"/>
                            </div>
                          </div>
                          <div class="col-lg-12">
                            <div class="form-group">
                              <textarea class="form-control" placeholder="Message"></textarea>
                            </div>
                          </div>
                      </div>

                        <div class="form-group">
                          <button type="button" class="btn btn-expart">Connect With An Expert <span class="iou"> <i class="fas fa-angle-right"></i> </span> </button>
                        </div>
                  </div>
                </div>
             </div>
         </div>

    </div>
  </section>
  </main>

  <x-footer/>
