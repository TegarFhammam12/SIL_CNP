$(document).ready(function() {
	var url = window.location.href;

	$('#back-top').css("display", "none");
	$('#btn-contact').css("margin-left", "80px");
	
	$('a.btn').click(function(){
	    $('html, body').animate({
	        scrollTop: $( $.attr(this, 'href') ).offset().top
	    }, 500);
	    return false;
	});

	$(window).scroll(function() {
		var backtop = $('#back-top');
		var btncontact = $('#btn-contact');
		var nextbutton = $('#back-top').next();
		var next_nextbutton = nextbutton.next();

		if ($(this).scrollTop() > 300 && $(this).scrollTop() < 1000) {
			btncontact.fadeIn(300);
		}

        if ($(this).scrollTop() > 300) {
			backtop.fadeIn(500);
			
			if (nextbutton.is($('a'))) {
				nextbutton.css("margin-left", "80px");
			}
			if (next_nextbutton.is($('a')))
				next_nextbutton.css("margin-left", "140px");
		} else {
    			backtop.fadeOut(300);
 	   		if (nextbutton.is($('a'))) {
				nextbutton.css("margin-left", "20px");
			}
			if (next_nextbutton.is($('a')))
				next_nextbutton.css("margin-left", "80px");
	}

	 if ($(this).scrollTop() > 1000) {
		btncontact.fadeOut(300)
	 }

	if (($(this).scrollTop() > 500 && $(this).scrollTop() < 1200) && url.search('admin') === -1) {
                backtop.css("background-image", "url(\"" + baseurl + "assets/img/static/icons/back-top_black.png\")");
                if (nextbutton.is($('a'))) {
                    nextbutton.css("background-image", "url(\"" + baseurl + "assets/img/static/icons/"+nextbutton.attr('id')+"_black.png\")");
                    if (nextbutton.attr("id") == "back-category") {
                        nextbutton.fadeOut(300);
                    }
                }
                if (nextbutton.is($('a')))
                    nextbutton.css("background-image", "url(\"" + baseurl + "assets/img/static/icons/"+nextbutton.attr('id')+"_black.png\")");
                if (next_nextbutton.is($('a')))
                    next_nextbutton.css("background-image", "url(\"" + baseurl + "assets/img/static/icons/chevron_left_black.png\")");
        } else {
                backtop.css("background-image", "url(\"" + baseurl + "assets/img/static/icons/back-top_white.png\")");
            	if (nextbutton.is($('a'))) {
                    nextbutton.css("background-image", "url(\"" + baseurl + "assets/img/static/icons/"+nextbutton.attr('id')+"_white.png\")");
                    if (nextbutton.attr("id") == "back-category") {
                        nextbutton.fadeIn(500);
                    }
                }
            	if (nextbutton.is($('a')))
                    nextbutton.css("background-image", "url(\"" + baseurl + "assets/img/static/icons/"+nextbutton.attr('id')+"_white.png\")");
                if (next_nextbutton.is($('a')))
                    next_nextbutton.css("background-image", "url(\"" + baseurl + "assets/img/static/icons/chevron_left_white.png\")");
        }


	});

});

function addStep() {
	$('#stepCount').val( function(i, oldval) {
	    return ++oldval;
	});
	var x = $("#stepCount").val();

	var stepPictureWrapper = $("<div class=\"col-md-5\"/>");
	var stepPictureFormGroup = $("<div class=\"form-group\"/>");
	var stepPictureLabel = "<label for=\"inputCapture\">Step " + x + "</label>";
	var stepPictureInput = "<input type=\"file\" id=\"inputCapture\" name=\"capture_howto_" + x + "\">";

	stepPictureFormGroup.append(stepPictureLabel, stepPictureInput);
	stepPictureWrapper.append(stepPictureFormGroup);

	var stepDescWrapper = $("<div class=\"col-md-offset-1 col-md-5\"/>");
	var stepDescFormGroup = $("<div class=\"form-group\"/>");
	var stepDescLabel = "<label for=\"inputCapture\">Step " + x + " Description</label>";
	var stepDescInput = "<textarea id=\"textDescription\" class=\"form-control\" rows=\"3\" name=\"desc_howto_" + x + "\"></textarea>";

	stepDescFormGroup.append(stepDescLabel, stepDescInput);
	stepDescWrapper.append(stepDescFormGroup);

	var stepRow = $("<div class=\"row\" id=\"step_" + x  + "\"/>");
	stepRow.append(stepPictureWrapper, stepDescWrapper);

	$("#stepForm").append(stepRow);
}

function removeStep() {
	var x = $("#stepCount").val();
	
	if ( x > 1 ) { 
		$('#stepCount').val( function(i, oldval) {
		    return --oldval;
		});

		$("#step_" + x).remove();
	}
}
