<footer class="footer">
    <div class="container-fluid d-flex justify-content-between">
      <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright © {{ date('Y') }}</span>
    </div>
  </footer>
  <!-- partial -->
</div>
<!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="{{ asset('assets/vendors/js/vendor.bundle.base.js') }}"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="{{ asset('assets/vendors/chart.js/Chart.min.js') }}"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="{{ asset('assets/js/off-canvas.js') }}"></script>
<script src="{{ asset('assets/js/hoverable-collapse.js') }}"></script>
<script src="{{ asset('assets/js/misc.js') }}"></script>
<!-- endinject -->
<!-- Custom js for this page -->
<script src="{{ asset('assets/js/chart.js') }}"></script>
<!-- End custom js for this page -->


<script>
    tinymce.init({
    selector: 'textarea#example',
    height: 500,
    plugins: [
        'advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'preview',
        'anchor', 'searchreplace', 'visualblocks', 'code', 'fullscreen',
        'insertdatetime', 'media', 'table', 'help', 'wordcount'
    ],
    toolbar: 'undo redo | blocks | ' +
    'bold italic backcolor | alignleft aligncenter ' +
    'alignright alignjustify | bullist numlist outdent indent | ' +
    'removeformat | help',
    content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:16px }'
    });
</script>

<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.5.0/js/responsive.bootstrap5.min.js"></script>
<script src="{{ asset('assets/js/dataTables.buttons.min.js') }}"></script>
 <script>
    $(document).ready(function(){
        $('#example').dataTable({
            pageLength: 100,
            searching: true
        });

        $('#example2').dataTable({
            pageLength: 100,
            autoWidth: false,
            searching: true
        });

        $('#itemlist').dataTable({
            pageLength: 100,
            autoWidth: false,
            searching: true
        });

        $('#auctionlist').dataTable({
            pageLength: 50,
            autoWidth: false,
            searching: true
        });

        $('#exampleyu').dataTable({
            responsive: true
        });
    });


    </script>

<script>
    $(document).ready(function(){
        $("#limitation").change(function(){
            var lim = $("#limitation").val();

            if(lim=='Other')
            {
                $("#xother").show();
            }
            else
            {
                $("#xother").hide();
            }
        });
    });
</script>


<script>
    $(document).ready(function(){

        // $('#but_add').click(function(){

        //     // Create clone of <div class='input-form'>
        //     var newel = $('.input-form:last').clone();

        //     // Add after last <div class='input-form'>
        //     $(newel).insertAfter(".input-form:last");
        // });

        $('.txt').focus(function(){
            $(this).css('border-color','red');
        });

        $('.txt').focusout(function(){
            $(this).css('border-color','initial');
        });

        $('#button-1').click(function(){
            $('#sho-card').toggle();
        });

        $('.delBtnh').click(function(){
            $('#primary-div').hide();
        });

        $('#clo-relationships').click(function(){
            $('#relationships').hide();
        });

        $('#clo-locations').click(function(){
            $('#locations').hide();
        });

        $('#clo-numbers').click(function(){
            $('#numbers').hide();
        });

        $('#clo-internet').click(function(){
            $('#internet').hide();
        });

        $('#clo-eaddresses').click(function(){
            $('#eaddresses').hide();
        });

        $('#business').click(function(){

            var btype = $("#business_type").val();
            $('#businessd').show();

            if(btype=='Sole Proprieter')
            {
                $("#personal").show();
            }
            else
            {
                $("#personal").hide();
            }
            });

            $('#person').click(function(){
            $('#businessd').hide();
            });

            $("#business_type").change(function(){
            var btype = $("#business_type").val();

            if($("#business").prop("checked", true) && btype=='Sole Proprieter')
            {
                $("#personal").show();
            }
            else
            {
                 $("#personal").hide();
            }

        });


        $('#clo-loading').click(function(){
            $('#loading').hide();
        });

        $('#clo-venues').click(function(){
            $('#venues').hide();
        });

        $('.delBtnhn2').click(function(){
            $('#show-pri2').hide();
        });

        $('.deladdr').click(function(){
            $('#addr-div').hide();
        });

        $('#maiu').click(function(){
            $('#ash-div').hide();
        });

        $('#flexCheckCheckedrd2').click(function(){
            $('#imj2').show();
        });
        $('#flexCheckCheckedrd').click(function(){
            $('#imj2').hide();
        });

        $('#flexCheckCheckedn').click(function(){
            $('#imj').toggle();
        });





        /// Customer table addition address

        var $cnt = 1;
        $('#addi_addr').on('click',function () {
                $cnt ++;
                $('#addrclone').append(
                    '<div class="input-form position-relative" id="corsok['+$cnt+']>' +

                        '<label class="col-lg-12 col-form-label" for="corsi"> <strong> Contact  ' + $cnt +'</strong></label>' +

                        '<div class="row mt-3">' +

                            '<div class="col-lg-6"><div class="form-group"><label> Address </label><input type="text" name="add_address[]" class="form-control txt"/> </div> </div>' +
                            '<div class="col-lg-6"><div class="form-group"><label> Address 1 </label><input type="text" name="add_address1[]" class="form-control txt"/></div> </div>' +
                            '<div class="col-lg-6"><div class="form-group"><label> Address 2 </label><input type="text" name="add_address2[]" class="form-control txt"/></div> </div>' +
                            '<div class="col-lg-6"><div class="form-group"><label> City </label><input type="text" name="add_city[]" class="form-control txt"/></div> </div>' +
                            '<div class="col-lg-4"><div class="form-group"><label> State </label><input type="text" name="add_state[]" class="form-control txt"/></div> </div>' +
                            '<div class="col-lg-4"><div class="form-group"><label> Zipcode </label><input type="text" name="add_zipcode[]" class="form-control txt"/></div> </div>' +
                            '<div class="col-lg-4"><div class="form-group"><label> Country </label><input type="text" name="add_country[]" class="form-control txt"/></div> </div>' +

                        '</div>' +
                        '<div class="but-diuv"> <a class="btn btn-default deladdr" id="eliminacorso['+$cnt+']" aria-label="Elimina"><span> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293z"/></svg> </span> </a> </div>' +

                    '</div>' +
                '');
            });

        $('#addrclone').on('click', '.deladdr', function() {
        console.log('this :'+$(this));
        $cnt --;

        $(this).parent().parent().remove();
            });

        ///////////////////  End

        var $count = 1;
        $('#but_add').on('click',function () {
                $count ++;
                $('#ccolone').append(
                    '<div class="input-form position-relative" id="corso['+$count+']>' +

                        '<label class="col-lg-12 col-form-label" for="corsi"> <strong> Day  ' + $count +'</strong></label>' +

                        '<div class="row mt-3">' +

                            '<div class="col-lg-4"><div class="form-group"><label> Exhibit date </label><input type="date" name="exhibit_date[]" class="form-control txt" required/> </div> </div>' +
                            '<div class="col-lg-4"><div class="form-group"><label> Opening Time </label><input type="time" name="exhibit_open_time[]" class="form-control txt" required/></div> </div>' +
                            '<div class="col-lg-3 "><div class="form-group"><label> Close Time </label><input type="time" name="exhibit_closed_time[]" class="form-control txt" required/></div> </div>' +


                        '</div>' +
                        '<div class="but-diuv"> <a class="btn btn-default delBtn" id="eliminacorso['+$count+']" aria-label="Elimina"><span> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293z"/></svg> </span> </a> </div>' +

                    '</div>' +
                '');
            });

        $('#ccolone').on('click', '.delBtn', function() {
        console.log('this :'+$(this));
        $count --;

        $(this).parent().parent().remove();
            });

        var $excount = 1;
        $('#exh_add').on('click',function () {
                $excount ++;
                $('#exhclone').append(
                    '<div class="input-form position-relative" id="corso['+$excount+']>' +

                        '<label class="col-lg-12 col-form-label" for="corsi"> <strong> Contact  ' + $excount +'</strong></label>' +

                        '<div class="row mt-3">' +

                            '<div class="col-lg-2"><div class="form-group"><label> First Name </label><input type="text" name="first_name[]" class="form-control txt" required/> </div> </div>' +
                            '<div class="col-lg-2"><div class="form-group"><label> Last Name </label><input type="text" name="last_name[]" class="form-control txt" required/></div> </div>' +
                            '<div class="col-lg-2"><div class="form-group"><label> Title </label><input type="text" name="title[]" class="form-control txt" required/></div> </div>' +
                            '<div class="col-lg-2"><div class="form-group"><label> Phone </label><input type="text" name="exhibit_phone[]" class="form-control txt" required/></div> </div>' +
                            '<div class="col-lg-3"><div class="form-group"><label> Email </label><input type="email" name="exhibit_email[]" class="form-control txt" required/></div> </div>' +

                        '</div>' +
                        '<div class="but-diuv"> <a class="btn btn-default delBtn" id="eliminacorso['+$excount+']" aria-label="Elimina"><span> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293z"/></svg> </span> </a> </div>' +

                    '</div>' +
                '');
            });

        $('#exhclone').on('click', '.delBtn', function() {
        console.log('this :'+$(this));
        $excount --;

        $(this).parent().parent().remove();
            });


        var $mnount = 1;
        $('#manage_add').on('click',function () {
                $mnount ++;
                $('#mnclone').append(
                    '<div class="input-form position-relative" id="corso['+$mnount+']>' +

                        '<label class="col-lg-12 col-form-label" for="corsi"> <strong> Contact  ' + $mnount +'</strong></label>' +

                        '<div class="row mt-3">' +

                            '<div class="col-lg-2"><div class="form-group"><label> First Name </label><input type="text" name="first_name_manage[]" class="form-control txt"/> </div> </div>' +
                            '<div class="col-lg-2"><div class="form-group"><label> Last Name </label><input type="text" name="last_name_manage[]" class="form-control txt"/></div> </div>' +
                            '<div class="col-lg-2"><div class="form-group"><label> Phone </label><input type="text" name="exhibit_phone_manage[]" class="form-control txt"/></div> </div>' +
                            '<div class="col-lg-3"><div class="form-group"><label> Email </label><input type="email" name="exhibit_email_manage[]" class="form-control txt"/></div> </div>' +
                            '<div class="col-lg-2"><div class="form-group"><label> Website </label><input type="text" name="exhibit_website_manage[]" class="form-control txt"/></div> </div>' +


                        '</div>' +
                        '<div class="but-diuv"> <a class="btn btn-default delBtn" id="eliminacorso['+$mnount+']" aria-label="Elimina"><span> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293z"/></svg> </span> </a> </div>' +

                    '</div>' +
                '');
            });

        $('#mnclone').on('click', '.delBtn', function() {
        console.log('this :'+$(this));
        $mnount --;

        $(this).parent().parent().remove();
            });

        // nest
        var $countf = 1;
        $('#sh-add').on('click',function () {
                $countf ++;
                $('#ccolonej').append(
                    '<div class="input-form d-inline-block w-100 position-relative" id="corsoj['+ $countf +']>' +


                        '<label class="hedr"><h4 class="float-start ms-2 spm-hed"> Target Sechedule  ' + $countf +' </h4></label>' +
                        '<div class="but-diuv02"> <a class="btn btn-default delBtnm p-0" id="eliminacorso['+$countf+']" aria-label="Elimina"><span> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293z"/></svg> </span> </a> </div>' +

                        '<div class="row w-100 mt-3 float-start">' +
                           '<div class="col-lg-12"><div class="form-group"><label> Target Area Description </label><input type="text" name="move_in_description[]" class="form-control txt" required/></div></div>'+
                            '<div class="col"><div class="form-group"><label> Weekday </label></div> </div>' +
                            '<div class="col"><div class="form-group"><label> Date </label><input type="date" name="move_in_date[]" class="form-control txt" required/></div> </div>' +
                            '<div class="col"><div class="form-group"><label> Opens </label><input type="time" name="move_in_open_time[]" class="form-control txt" required/></div> </div>' +
                            '<div class="col"><div class="form-group"><label> Close </label><input type="time" name="move_in_closed_time[]" class="form-control txt" required/></div> </div>' +
                            '<div class="col"><div class="form-group"><label> Deadline </label><input type="time" name="move_in_deadline[]" class="form-control txt" required/></div> </div>' +

                        '</div>' +
                    '</div>' +
                '');
            });

        $('#ccolonej').on('click', '.delBtnm', function() {
        console.log('this :'+$(this));
        $countf --;

        $(this).parent().parent().remove();
            });


        // addvenus

        var $countyv = 1;
        $('#sh-addv2').on('click',function () {
                $countyv ++;
                $('#ccolonejv2').append(
                    '<div class="input-form bg-light p-4 mt-4 comobh-btn d-inline-block w-100 position-relative" id="corsoj2['+ $countyv +']>' +


                        '<label class="hedr"><h4 class="float-start ms-2 spm-hed"> Item  ' + $countyv +' </h4></label>' +
                        '<div class="but-diuv02"> <a class="btn btn-default delBtnmv2 p-0" id="eliminacorso['+$countyv+']" aria-label="Elimina"><span> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293z"/></svg> </span> </a> </div>' +

                        '<div class="row w-100 mt-3 float-start">' +
                           '<div class="col-lg-8"><div class="form-group"><label> Area Name </label><input type="text" name="area_name[]" class="form-control txt" required/></div></div>'+
                            '<div class="col-lg-4"><div class="form-group"><label> Square Feet </label><input type="text" name="square_feet[]" class="form-control txt" required/></div> </div>' +


                        '</div>' +



                    '</div>' +
                '');
            });

        $('#ccolonejv2').on('click', '.delBtnmv2', function() {
        console.log('this :'+$(this));
        $countyv --;

        $(this).parent().parent().remove();
            });




         // end

         var $county = 1;
        $('#sh-add2').on('click',function () {
                $county ++;
                $('#ccolonej2').append(
                    '<div class="input-form d-inline-block w-100 position-relative" id="corsoj2['+ $county +']>' +


                        '<label class="hedr"><h4 class="float-start ms-2 spm-hed"> Target Sechedule  ' + $county +' </h4></label>' +
                        '<div class="but-diuv02"> <a class="btn btn-default delBtnm2 p-0" id="eliminacorso['+$county+']" aria-label="Elimina"><span> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293z"/></svg> </span> </a> </div>' +

                        '<div class="row w-100 mt-3 float-start">' +
                           '<div class="col-lg-12"><div class="form-group"><label> Target Area Description </label><input type="text" name="move_out_description[]" class="form-control txt" required/></div></div>'+
                            '<div class="col"><div class="form-group"><label> Weekday </label></div> </div>' +
                            '<div class="col"><div class="form-group"><label> Date </label><input type="date" name="move_out_date[]" class="form-control txt" required/></div> </div>' +
                            '<div class="col"><div class="form-group"><label> Opens </label><input type="time" name="move_out_open_time[]" class="form-control txt" required/></div> </div>' +
                            '<div class="col"><div class="form-group"><label> Close </label><input type="time" name="move_out_closed_time[]" class="form-control txt" required/></div> </div>' +
                            '<div class="col"><div class="form-group"><label> Deadline </label><input type="time" name="move_out_deadline[]" class="form-control txt" required/></div> </div>' +


                        '</div>' +



                    '</div>' +
                '');
            });

        $('#ccolonej2').on('click', '.delBtnm2', function() {
        console.log('this :'+$(this));
        $county --;

        $(this).parent().parent().remove();
            });




             // addvenus next

             var $countyvx = 1;
        $('#sh-addvx2').on('click',function () {
                $countyvx ++;
                $('#ccolonejvx2').append(
                    '<div class="input-form bg-light p-4 mt-4 comobh-btn d-inline-block w-100 position-relative" id="corsoj2['+ $countyvx +']>' +


                        '<label class="hedr"><h4 class="float-start ms-2 spm-hed"> Item  ' + $countyvx +' </h4></label>' +
                        '<div class="but-diuv02"> <a class="btn btn-default delBtnmvx2 p-0" id="eliminacorso['+$countyvx+']" aria-label="Elimina"><span> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293z"/></svg> </span> </a> </div>' +

                        '<div class="row w-100 mt-3 float-start">' +
                        '<div class="col-lg-8">  <div class="form-group"><label> Location Description </label><input type="text" name="location_description[]" class="form-control txt" required/></div>  <div class="form-group">  <label> Address </label>  <input type="text" name="address_1[]" class="form-control txt" placeholder="Address Line 1" required/></div> <div class="form-group"> <input type="text" name="address_2[]" class="form-control txt" placeholder="Address Line 2" required/></div>   <div class="form-group"> <input type="text" name="city[]" class="form-control txt" placeholder="City" required/></div>   <div class="d-flex align-items-center">  <div class="form-group col-lg-8"> <input type="text" name="state[]" class="form-control" placeholder="State"/> </div> <div class="form-group col-lg-3"> <input type="text" name="zipcode[]" class="form-control" placeholder="Zipcode"/> </div>   </div>         </div>'+
                        '<div class="col-lg-4"> <div class="form-group"><label> Google Map URL </label><input type="text" name="google_map_url[]" class="form-control txt" required/></div>     <div class="form-group"><label> Driver Instructions </label><input type="text" name="driver_instruction[]" class="form-control txt" required/></div> </div>' +


                        '</div>' +



                    '</div>' +
                '');
            });

        $('#ccolonejvx2').on('click', '.delBtnmvx2', function() {
        console.log('this :'+$(this));
        $countyvx --;

        $(this).parent().parent().remove();
            });



        // Email next

           var $countyem = 1;
        $('#sh-addvem').on('click',function () {
                $countyem ++;
                $('#ccolonejem').append(
                    '<div class="input-form bg-light p-4 mb-4 comobh-btn d-inline-block w-100 position-relative" id="corsoj2['+ $countyem +']>' +
                        '<label class="hedr"><h4 class="float-start ms-2 spm-hed"> Email  ' + $countyem +' </h4></label>' +
                        '<div class="but-diuv02"> <a class="btn btn-default delBtnmcm p-0" id="eliminacorso['+$countyem+']" aria-label="Elimina"><span> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293z"/></svg> </span> </a> </div>' +

                        '<div class="row w-100 mt-3 float-start">' +
                           '<div class="col-lg-4">  <div class="form-group"><label> Email Type </label> <select name="email_type[]" class="form-select"> <option value="" selected></option> <option value="Personal">Personal</option> <option value="Work">Work</option> </select>  </div> </div>'+
                            '<div class="col-lg-8"> <div class="form-group"><label> Email </label><input type="text" name="email[]" class="form-control txt"/></div>      </div>' +
                        '</div>' +
                    '</div>' +
                '');
            });

        $('#ccolonejem').on('click', '.delBtnmcm', function() {
        console.log('this :'+$(this));
        $countyem --;

        $(this).parent().parent().remove();
            });


        // Email next one

        var $countyem1 = 1;
        $('#sh-addvems1').on('click',function () {
                $countyem1 ++;
                $('#ccolonejem1').append(
                    '<div class="input-form bg-light p-4 mb-4 comobh-btn d-inline-block w-100 position-relative" id="corsoj2['+ $countyem1 +']>' +


                        '<label class="hedr"><h4 class="float-start ms-2 spm-hed"> Internet Account  ' + $countyem1 +' </h4></label>' +
                        '<div class="but-diuv02"> <a class="btn btn-default delBtnmcm1 p-0" id="eliminacorso['+$countyem1+']" aria-label="Elimina"><span> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293z"/></svg> </span> </a> </div>' +

                        '<div class="row w-100 mt-3 float-start">' +
                        '<div class="col-lg-4">  <div class="form-group"><label> Service </label> <select name="service[]" class="form-select"> <option value="Linkedin">Linkedin</option><option value="Facebook">Facebook</option><option value="Twitter/X">Twitter/X</option><option value="Website">Website</option> </select> </div> </div>'+
                            '<div class="col-lg-8"> <div class="form-group"><label> URL </label><input type="text" name="account_url[]" class="form-control txt" required/></div>      </div>' +


                        '</div>' +



                    '</div>' +
                '');
            });

        $('#ccolonejem1').on('click', '.delBtnmcm1', function() {
        console.log('this :'+$(this));
        $countyem1 --;

        $(this).parent().parent().remove();
            });
    // Telephone Numbers

    var $countyemt1 = 1;
        $('#sh-addvemst1').on('click',function () {
                $countyemt1 ++;
                $('#ccolonejemt1').append(
                    '<div class="input-form bg-light p-4 mt-4 comobh-btn d-inline-block w-100 position-relative" id="corsoj2['+ $countyemt1 +']>' +

                        '<label class="hedr"><h4 class="float-start ms-2 spm-hed"> Number Details  ' + $countyemt1 +' </h4></label>' +
                        '<div class="but-diuv02"> <a class="btn btn-default delBtnmcmt1 p-0" id="eliminacorso['+$countyemt1+']" aria-label="Elimina"><span> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293z"/></svg> </span> </a> </div>' +

                        '<div class="row w-100 mt-3 float-start">' +

                            '<div class="col-lg-2"> <div class="form-group"><label> Type </label><select name="type[]" class="form-select"><option value=""></option><option value="Mobile">Mobile</option><option value="Office">Office</option><option value="Home">Home</option><option value="Fax">Fax</option></select></div> </div>'+
                            '<div class="col-lg-2"> <div class="form-group mb-1"><label> CC </label><input type="text" name="cc[]" class="form-control txt"/></div> <p> Country Code </p>      </div>' +
                            '<div class="col-lg-4"> <div class="form-group mb-1"><label> Number </label><input type="text" name="number[]" class="form-control txt"/></div>  <p> North America Phone </p>     </div>' +
                            '<div class="col-lg-2"> <div class="form-group mb-1"><label> Ext </label><input type="text" name="ext[]" class="form-control txt"/></div>  <p> Country Code </p>     </div>' +
                            '<div class="col-lg-2"> <div class="form-group"><label> Priority </label> <select name="priority[]" class="form-select"><option value=""></option><option value="Primary">Primary</option><option value="Alternative">Alternative</option><option value="Emergency">Emergency</option></select></div>      </div>' +
                        '</div>' +

                    '</div>' +
                '');
            });

        $('#ccolonejemt1').on('click', '.delBtnmcmt1', function() {
        console.log('this :'+$(this));
        $countyemt1 --;

        $(this).parent().parent().remove();
            });



     // Locations

      var $countyemloc = 1;
        $('#sh-addvemsloc').on('click',function () {
                $countyemloc ++;
                $('#ccolonejemloc').append(
                    '<div class="input-form bg-light p-4 mt-4 comobh-btn d-inline-block w-100 position-relative" id="corsoj2['+ $countyemloc +']>' +

                        '<label class="hedr"><h4 class="float-start ms-2 spm-hed"> Address  ' + $countyemloc +' </h4></label>' +
                        '<div class="but-diuv02"> <a class="btn btn-default delBtnmcmloc p-0" id="eliminacorso['+$countyemloc+']" aria-label="Elimina"><span> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293z"/></svg> </span> </a> </div>' +

                        '<div class="row w-100 mt-3 float-start">' +
                            '<div class="col-lg-12"> <div class="form-group"><label> Address found </label><select name="address[]" class="form-select"><option value=""></option>@php $value = \DB::table('tradevenues')->get(); foreach($value as $val){ $loading = json_decode($val->loading_locations,true);$cnt = count($loading['address_1']);for($x=0;$x<$cnt;$x++){ $address = @$loading['address_1'][$x].', '.$loading['city'][$x].', '.$loading['state'][$x].', '.$loading['zipcode'][$x];@endphp<option value="{{ $address }}">{{ $address }}</option>@php }}@endphp</select></div>' +
                        '</div>' +

                    '</div>' +
                '');
            });

        $('#ccolonejemloc').on('click', '.delBtnmcmloc', function() {
        console.log('this :'+$(this));
        $countyemloc --;

        $(this).parent().parent().remove();
            });



         // Sub-account Relationships

      var $countyemlocc = 1;
        $('#sh-addvemslocc').on('click',function () {
                $countyemlocc ++;
                $('#ccolonejemlocc').append(
                    '<div class="input-form bg-light p-4 mt-4 comobh-btn d-inline-block w-100 position-relative" id="corsoj2['+ $countyemlocc +']>' +

                        '<label class="hedr"><h4 class="float-start ms-2 spm-hed"> Item  ' + $countyemlocc +' </h4></label>' +
                        '<div class="but-diuv02"> <a class="btn btn-default delBtnmcmlocc p-0" id="eliminacorso['+$countyemlocc+']" aria-label="Elimina"><span> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293z"/></svg> </span> </a> </div>' +

                        '<div class="row w-100 mt-3 float-start">' +
                            '<div class="col-lg-4"> <div class="form-group"><label> Parent record </label><select name="parent[]" class="form-select"><option value=""></option>'+'@php $data = \DB::table('entities')->get(); foreach($data as $entity){ @endphp'+'<option value="{{ $entity->id }}">{{ $entity->legeal_name }}</option>'+ '@php } @endphp'+'</select></div>      </div>' +
                            '<div class="col-lg-8"> <div class="form-group mb-1"><label> Relationship Description </label>    <input type="text" class="form-control" name="relation_description[]"> </div> <p> Employee, Corp Officer, Subsidary, Division</p>      </div>' +
                        '</div>' +
                    '</div>' +
                '');
            });

        $('#ccolonejemlocc').on('click', '.delBtnmcmlocc', function() {
        console.log('this :'+$(this));
        $countyemlocc --;

        $(this).parent().parent().remove();
            });



       // Request Quote

       var $countyemloccre = 1;
        $('#sh-addvemsloccre').on('click',function () {
                $countyemloccre ++;
                $('#ccolonejemloccre').append(
                    '<div class="input-form bg-light p-4 mt-4 comobh-btn d-inline-block w-100 position-relative" id="corsoj2['+ $countyemloccre +']>' +

                        '<label class="hedr"><h4 class="float-start ms-2 spm-hed"> Item  ' + $countyemloccre +' </h4></label>' +
                        '<div class="but-diuv02"> <a class="btn btn-default delBtnmcmloccre p-0" id="eliminacorso['+$countyemloccre+']" aria-label="Elimina"><span> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293z"/></svg> </span> </a> </div>' +

                        '<div class="row w-100 mt-3 float-start">' +

                            '<div class="col-lg-2"> <div class="form-group mb-1"> <label> Type </label>    <input type="text" class="form-control" name="type[]"> </div> </div>' +
                            '<div class="col-lg-2"> <div class="form-group mb-1"> <label> Qty </label>    <input type="text" class="form-control" name="qty[]"> </div> </div>' +
                            '<div class="col-lg-2"> <div class="form-group mb-1"> <label> Length </label>    <input type="text" class="form-control" name="length[]"> </div> <p class="mt-1 comon-texr"> (inches) </p> </div>' +
                            '<div class="col-lg-2"> <div class="form-group mb-1"> <label> Width </label>    <input type="text" class="form-control" name="width[]"> </div> <p class="mt-1 comon-texr"> (inches) </p> </div>' +
                            '<div class="col-lg-2"> <div class="form-group mb-1"> <label> Height </label>    <input type="text" class="form-control" name="height[]"> </div> <p class="mt-1 comon-texr"> (inches) </p> </div>' +
                            '<div class="col-lg-2"> <div class="form-group mb-1"> <label> Weight </label>    <input type="text" class="form-control" name="weight[]"> </div> <p class="mt-1 comon-texr"> (pounds) </p> </div>' +
                            '<div class="col-lg-6"> <div class="form-group mb-1"> <label> Description </label>    <input type="text" class="form-control" name="description[]"> </div> <p class="mt-1 comon-texr"> Color, Material, Markings, Contents </p> </div>' +
                            '<div class="col-lg-2"> <div class="form-check ps-4"> <input class="form-check-input" type="checkbox" value="Y" name="Hazardous[]" id="flexCheckDefault"> <label class="form-check-label ms-0" for="flexCheckDefault"> Hazardous </label>   </div> <p class="mt-1 comon-texr"> Is this a hazardous material? </p> </div>' +
                            '<div class="col-lg-2"> <div class="form-check ps-4"> <input class="form-check-input" type="checkbox" value="Y" name="Stackable[]" id="flexCheckDefault"> <label class="form-check-label ms-0" for="flexCheckDefault"> Stackable </label>   </div> <p class="mt-1 comon-texr"> Allowed on outbound shipments. </p> </div>' +
                            //'<div class="col-lg-2"> <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"> <label class="form-check-label" for="flexCheckDefault"> Photo </label> <div class="duio"> <input class="form-control" type="file" id="formFile"> </div>    </div> <p class="mt-1 comon-texr"> bmp, jpg, png, pdf, (2MB) </p> </div>' +
                        '</div>' +
                    '</div>' +
                '');
            });

        $('#ccolonejemloccre').on('click', '.delBtnmcmloccre', function() {
        console.log('this :'+$(this));
        $countyemloccre --;

        $(this).parent().parent().remove();
            });
});

$(function () {
        $("#return_to_origin").click(function () {
            if ($(this).is(":checked")) {
                $("#altaddress").hide();
            } else {
                $("#altaddress").show();
            }
        });
    });
</script>

<!---- Ajax Call Start ---->

<script>
$(document).ready(function()
{
    $("#eventloc").change(function(){
        var locId = $("#eventloc").val();

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "https://ascinate.in/projects/tclexpo/admin/getlocation",
            type: 'POST',
            data: {id:locId},
            success: function(data)
            {
                $("#addrss2").show();
                $("#addrss2").html(data);
            }
        });
    });


    $("#showloc").change(function(){
        var locId = $("#showloc").val();

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "https://ascinate.in/projects/tclexpo/admin/exhibitorlocation",
            type: 'POST',
            data: {id:locId},
            success: function(data)
            {
                $("#addrss22").show();
                $("#addrss22").html(data);
            }
        });
    });

    $("#tradeshow").change(function(){
        var tradeid = $("#tradeshow").val();
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "https://ascinate.in/projects/tclexpo/admin/showmanagement",
            type: 'POST',
            data: {id:tradeid},
            success: function(data)
            {
                $("#show_m").hide();
                $("#tr_v").hide();
                $("#marhyard").show();

                $("#show_m2").show();
                $("#show_m2").html(data);
            }
        });
    });

    $("#shipment_type").change(function(){

    var type = $("#shipment_type").val();
    if(type == 'Inbound only')
    {
        $("#return").hide();
        $("#origin").show();
    }
    else if(type == 'Outbound only')
    {
        $("#return").show();
        $("#origin").hide();
    }
    else
    {
        $("#return").show();
        $("#origin").show();
        $("#marhyard").show();
    }
    });

    if($("#shw2").prop("checked", true))
    {
        $("#advance").hide();
        $("#direct").show();
    }

    if($("#shw1").prop("checked", true))
    {
        var contractor = $("#contractor").val();

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "/destination",
            type: 'POST',
            data: {id:contractor},
            success: function(data)
            {
                $("#direct").hide();

                $("#advance").show();
                $("#advance").html(data);
            }
    });

    }

});
</script>
</body>
</html>