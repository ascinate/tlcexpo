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

<script src="{{ asset('assets/js/jquery.dataTables.min.j') }}"></script>
<script src="{{ asset('assets/js/dataTables.bootstrap5.min.js') }}"></script>
<script src="{{ asset('assets/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/js/responsive.bootstrap5.min.js') }}"></script>
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

        $('.delBtnhn').click(function(){
            $('#show-pri').hide();
        });

        $('.delBtnhn2').click(function(){
            $('#show-pri2').hide();
        });


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

});
</script>
</body>
</html>
