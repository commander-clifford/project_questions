//LIGHT BOX 
	//CENTER THE BOX
	function centerbox(){
		$('#lightbox').css('left',($(window).width()/2) - ($('#lightbox').width()/2));//Set position Left to Half Window Width minus Half Box Width
		$('#lightbox').css('top',($(window).height()/2) - ($('#lightbox').height()/2));//Set position Top to Half Window Height minus Half Box Height
	}
	//RUN CENTERBOX AS THE WINDOW RESIZES
	$(window).resize(function(){
		centerbox();
	});
	//DOCUMENT READY
	$(document).ready(function(){
		centerbox();

		$('#lightboxbg').bind('click',function(){
			hidelightbox();
		});
		$('#closelb').bind('click',function(){
			hidelightbox();
		});

	});//end doc ready

	function openlightbox(w,h){
		$('#lightbox').css('width', w);
		$('#lightbox').css('height', h);
		$('#lightbox').fadeIn(500);
		$('#lightboxbg').fadeIn(500);
		centerbox();
	}
	function hidelightbox(){
		$('#lightbox').fadeOut(500);
		$('#lightboxbg').fadeOut(500);
	}


