
 $(document).ready(function(){

	$('.slider-div').owlCarousel({
	   loop: true,
	   margin:0,
	   autoplay:true,
	   nav:false,
	   dots:true,
	   dotsData: true,
	   responsive: {
		   0: {
			   items:1
		   },
		   600: {
			   items:1
		   },
		   667: {
			 items:1
		   },
		   1000: {
			   items:1
		   },
		   1200: {
			items:1
		   }
	   }
	})

	$('.tesimonal-slider').owlCarousel({
		loop: false,
		autoplay:true,
		nav:true,
		dots:false,
		responsive: {
			0: {
				items:1

			},
			600: {
				items:1
			},
			667: {
			  items:1
			},
			768: {
				items:1
			},
			1000: {
				items:1
			},
			1200: {
			 items:2
			}
		}
	 })


	 $('.events-slider01').owlCarousel({
		loop: false,
		autoplay:false,
		nav:true,
		dots:false,
		responsive: {
			0: {
				items:1
			},
			600: {
				items:1
			},
			667: {
			  items:1
			},
			768: {
				items:1
			},
			1000: {
				items:1
			},
			1200: {
			 items:1
			}
		}
	 })




});


$(document).ready(function() {
    $( window ).scroll(function() {
          var height = $(window).scrollTop();
          if(height >= 100) {
              $('header').addClass('fixed-menu');
          } else {
              $('header').removeClass('fixed-menu');
          }
      });
  });

$(document).ready(function() {
	$('#detention2').click(function() {
		$("#marshaling").toggle();
	});
	$('#war2').click(function() {
		$("#marshaling2").toggle();
	});

});
$(document).ready(function() {

	$('.add').click(function() {
		$(this).before('<div class="row cbf"><span class="remove"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293z"/></svg></span><h5 class="float-start mt-2">Item 1</h5><div class="col-lg-2"><div class="form-group"><label class="smal-label">Type</label><select class="form-select"><option value="1">Crate</option><option value="2">Carton</option><option value="3">Case</option><option value="4">Skid / Pallet</option><option value="5">Security Cage</option><option value="6">Carpet Bag</option><option value="6">Machine</option></select></div></div><div class="col-lg-2"><div class="form-group"><label class="smal-label">Qty</label><input type="text" class="form-control"></div></div><div class="col-lg-2"><div class="form-group"><label class="smal-label">Length</label><input type="text" class="form-control"><p class="nu-text mt-2">(inches)</p></div></div><div class="col-lg-2"><div class="form-group"><label class="smal-label">Width</label><input type="text" class="form-control"><p class="nu-text mt-2">(inches)</p></div></div><div class="col-lg-2"><div class="form-group"><label class="smal-label">Height</label><input type="text" class="form-control"><p class="nu-text mt-2">(inches)</p></div></div><div class="col-lg-2"><div class="form-group"><label class="smal-label">Weight</label><input type="text" class="form-control"><p class="nu-text mt-2">(pounds)</p></div></div><div class="col-lg-8"><div class="form-group"><label class="smal-label">Description</label><input type="text" class="form-control"><p class="nu-text mt-2">Color, Material, Markings, Contents</p></div></div><div class="col-lg-4"><div class="form-group"><label class="smal-label">Photo</label><input class="form-control" type="file" id="formFile"><p class="nu-text mt-2">bmp, jpg, png, pdf, 2Mb</p></div></div><div class="col-lg-8"><div class="form-group"><div class="form-check"><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"><label class="form-check-label" for="flexCheckDefault">Stackable</label></div><p class="nu-text mt-2">Allowed on outbound shipments.</p></div></div></div>');
	});
});

$(document).on('click','.remove',function() {
	$(this).parent('div').remove();
});

$(document).ready(function() {
	$(".navbar-toggler").click(function(){
		$(".dahbo-dd").toggleClass("short-main");
	});
});
