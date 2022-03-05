// When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
	if (document.body.scrollTop > 0 || document.documentElement.scrollTop > 0) {
		document.getElementById("navbar").style.padding = ".5rem 1rem";
		document.getElementById("mlogo").style.maxHeight = "48px";
	} else {
		document.getElementById("navbar").style.padding = ".8rem 1rem";
		document.getElementById("mlogo").style.maxHeight = "58px";
	}
}

/** No remove 1st 3 char **/
$(document).ready(function() {
	$(".notrem3char").on("keyup", function() {
		var value = $(this).val();
		$(this).val($(this).data("initial") + value.substring(3));
	});

	$('#signout').on('click', function(event) {
		x = gapi.auth2.getAuthInstance().disconnect();
		console.log(x);
		location.reload();
	});

	$('#therefresh').on('click', function(event) {
		x = gapi.auth2.getAuthInstance().disconnect();
		console.log(x);
		location.reload();
	});

	// avoid zero value
	$('#ghqty, .none-zero-input').on('keyup', function(event) {
		let v = parseInt(this.value);
		if (v < this.min) this.value = this.min;
		if (v > this.max) this.value = this.max;
	});
});

/** Disable form submissions if there are invalid fields **/
(function() {
	'use strict';
	window.addEventListener('load', function() {
		// Get the forms we want to add validation styles to
		var forms = document.getElementsByClassName('needs-validation');
		// Loop over them and prevent submission
		var validation = Array.prototype.filter.call(forms, function(form) {
			form.addEventListener('submit', function(event) {
				if (form.checkValidity() === false) {
					event.preventDefault();
					event.stopPropagation();
				}
				form.classList.add('was-validated');
			}, false);
		});
	}, false);
})();

/** Auto Current Date on Input **/
let today = new Date().toISOString().substr(0, 10);
$('input[type=date]').val(today);

/** Filter/Search Data/Info on Table Tag AJAX **/
$(document).ready(function(){
	$(".xfilterData").on("keyup", function() {
		var value = $(this).val().toLowerCase();
		$(".xdispDataOnList tbody tr").filter(function() {
			$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
		});
	});
});

/** Back button **/
function goBack() {
	window.history.back();
}

/** Password **/
function PwHideShow() {
	var x = document.getElementById("passcode");
	if (x.type === "password") {
		x.type = "text";
		$('#show_hide_password i').removeClass( "fa-eye-slash" );
		$('#show_hide_password i').addClass( "fa-eye" );
	} else {
		x.type = "password";
		$('#show_hide_password i').addClass( "fa-eye-slash" );
		$('#show_hide_password i').removeClass( "fa-eye" );
	}
}

function PwHideShow1() {
	var x = document.getElementById("passcode1");
	if (x.type === "password") {
		x.type = "text";
		$('#show_hide_password1 i').removeClass( "fa-eye-slash" );
		$('#show_hide_password1 i').addClass( "fa-eye" );
	} else {
		x.type = "password";
		$('#show_hide_password1 i').addClass( "fa-eye-slash" );
		$('#show_hide_password1 i').removeClass( "fa-eye" );
	}
}

function PwHideShow2() {
	var x = document.getElementById("passcode2");
	if (x.type === "password") {
		x.type = "text";
		$('#show_hide_password2 i').removeClass( "fa-eye-slash" );
		$('#show_hide_password2 i').addClass( "fa-eye" );
	} else {
		x.type = "password";
		$('#show_hide_password2 i').addClass( "fa-eye-slash" );
		$('#show_hide_password2 i').removeClass( "fa-eye" );
	}
}

/** Mobile link target **/
function FnPhoneURLTarget(elem) {
	var phoneurl;
	var value = elem.title;
	var chooseTarget = prompt("Type 'p' for phone; 'w' for whatsapp; 't' for telegram", "p");
	switch(chooseTarget) {
		case "p":
			phoneurl = "tel:" + value;
			break;
		case "w":
			phoneurl = "//web.whatsapp.com/send?phone=%2B" + value + "&text=Hello&app_absent=0";
			break;
		case "t":
			phoneurl = "https://telegram.me/" + value;
			break;
		default:
		phoneurl = "#";
	}

	elem.target = '_blank';
	elem.href = phoneurl;
}

/** Forgot Password: Empty Username not proceed **/
function fnforgotpw() {
	const input_unamez = document.querySelector("#username");
	let name = input_unamez.value;
	if (name==null || name.length==0) {
		alert("Enter Username.");
	} else {
		window.open("../../routes/forgotpw");
	}
};

/** disable/remove only first space on input field **/
$(function() {
	$('body').on('keydown', 'input', function(e) {
		// console.log(this.value);
		if (e.which === 32 &&  e.target.selectionStart === 0) {
			return false;
		}  
	});
});

function onSignIn(googleUser) {
	// Useful data for your client-side scripts:
	var profile = googleUser.getBasicProfile();
	var g_id = profile.getId();
	var g_fullname = profile.getName();
	var g_fname = profile.getGivenName();
	var g_surname = profile.getFamilyName();
	var g_img_url = profile.getImageUrl();
	var g_email = profile.getEmail();
	var g_username = g_email.substring(0, g_email.lastIndexOf("@"));
	var id_token = googleUser.getAuthResponse().id_token;

	$('#imgogsrc2').attr("src",g_img_url);
	$('#imgurl2').val(g_img_url);
	$('#gogid').val(g_id);
	$('#username2').val(g_username);
	$('#email2').val(g_email);
	$('#fullname2').val(g_fullname);
	$('#lastname2').val(g_surname);
	$('#firstname2').val(g_fname);
	$('#tokenidz2').html(id_token);
	$('#gmailz').html(g_email);
	$('#yrfullnem').html(g_fullname);

	console.log(id_token);

	$('.g-signin2').hide();
	$('#loggdas').html("Logged in as");
	$('#therefresh').html("Cancel");
	$('#loginpost').hide();
	$('#loginbkhome').hide();
	$('#signincurr').show();
	$('#loginpost').attr("method","");
	$('#loginpost').remove();

	var xhr = new XMLHttpRequest();
	xhr.open('POST', 'https://oauth2.googleapis.com/tokeninfo?');
	xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
	xhr.onload = function() {
		const myObj = JSON.parse(xhr.responseText);
		console.log(myObj.sub);
	};
	xhr.send('id_token=' + id_token);

	x = gapi.auth2.getAuthInstance().disconnect();
	console.log(x);
}

/** Slide Top Animate **/
$(document).ready(function(){
	// Add smooth scrolling to all links in navbar + footer link
	$(".navbar a, footer a[href='#myHome']").on('click', function(event) {
		// Make sure this.hash has a value before overriding default behavior
		if (this.hash !== "") {
			// Prevent default anchor click behavior
			event.preventDefault();

			// Store hash
			var hash = this.hash;

			// Using jQuery's animate() method to add smooth page scroll
			// The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
			$('html, body').animate({
				scrollTop: $(hash).offset().top
			}, 900, function(){
				// Add hash (#) to URL when done scrolling (default click behavior)
				window.location.hash = hash;
			});
		} // End if
	});

	$(window).scroll(function() {
		$(".slideanim").each(function(){
			var pos = $(this).offset().top;

			var winTop = $(window).scrollTop();
			if (pos < winTop + 600) {
				$(this).addClass("slide");
			}
		});
	});
});

function VerifyUploadSizeIsOK() {
	/* Attached file size check. Will Bontrager Software LLC, https://www.willmaster.com */
	var UploadFieldID = "itemfilenem";
	var MaxSizeInBytes = 500000;
	var fld = document.getElementById(UploadFieldID);
	if( fld.files && fld.files.length == 1 && fld.files[0].size > MaxSizeInBytes )
	{
		alert("The file size must be no more than 500kb");
		return false;
	}
	return true;
}

function incrementValue(e) {
	e.preventDefault();
	var fieldName = $(e.target).data('field');
	var parent = $(e.target).closest('div');
	var currentVal = parseInt(parent.find('input[name=' + fieldName + ']').val(), 10);
	let maxNumb = parseInt(document.getElementById("ghqty").max);

	if (!isNaN(currentVal)) {
		if (currentVal > (maxNumb-1)) {
			parent.find('input[name=' + fieldName + ']').val(maxNumb);
		} else {
			parent.find('input[name=' + fieldName + ']').val(currentVal + 1);
		}
	} else {
		parent.find('input[name=' + fieldName + ']').val(0);
	}
}

function decrementValue(e) {
	e.preventDefault();
	var fieldName = $(e.target).data('field');
	var parent = $(e.target).closest('div');
	var currentVal = parseInt(parent.find('input[name=' + fieldName + ']').val(), 10);
	let minNumb = parseInt(document.getElementById("ghqty").min);

	if (!isNaN(currentVal) && currentVal > 0) {
		if (currentVal < (minNumb+1)) {
			parent.find('input[name=' + fieldName + ']').val(minNumb);
		} else {
			parent.find('input[name=' + fieldName + ']').val(currentVal - 1);
		}
	} else {
		parent.find('input[name=' + fieldName + ']').val(0);
	}
}

$('.input-group').on('click', '.button-plus', function(e) {
	incrementValue(e);
});

$('.input-group').on('click', '.button-minus', function(e) {
	decrementValue(e);
});