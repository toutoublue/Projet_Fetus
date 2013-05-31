$(document).ready(function() {

	//Mis à jour age
	$('#age_input').change(function() {
		$('#age_show').text($(this).val());
	});

	$("#menu1").click(function() {

		var h1 = parseInt($("#param_legs").css("height"));
		var h2 = parseInt($("#param_arms").css("height"));

		$("#param_arms").css("height", "0px");
		$("#param_head").css("height", "0px");

		if (h1 < 350) {
			$("#param_legs").animate({
				"height" : "+=350",
			}, 800);
		}
	});

	$("#menu2").click(function() {

		var h1 = parseInt($("#param_legs").css("height"));
		var h2 = parseInt($("#param_arms").css("height"));

		$("#param_legs").css("height", "0px");
		$("#param_head").css("height", "0px");

		if (h2 < 350) {
			$("#param_arms").animate({
				"height" : "+=350",
			}, 800);
		}
	});

	$("#menu3").click(function() {

		var h3 = parseInt($("#param_head").css("height"));

		$("#param_legs").css("height", "0px");
		$("#param_arms").css("height", "0px");

		if (h3 < 350) {
			$("#param_head").animate({
				"height" : "+=350",
			}, 800);
		}
	});

	$("#loadParams").click(function() {
		$("#black").show('slow', function() {
			$(this).animate({
				"opacity" : 0.85,
			}, 400, function() {
				var l = $("body").width() / 2;
				$("#load_fileparam").show('fast', function() {
					$(this).animate({
						"left" : "+=" + l,
					});
				});

			});
		});
	});

	$("#saveParams").click(function() {

		var contents = "";
		var length = $("form#params input").length;

		for (var i = 0; i < length; i++) {
			if(i == length - 1)
				contents += $("form#params input").eq(i).val();
			else 
				contents += $("form#params input").eq(i).val() + "\n";
		}

		var MIME_TYPE = 'text/plain';

		var bb = new Blob([contents], {
			type : MIME_TYPE
		});

		var a = document.createElement('a');
		a.download = "file.param";
		a.href = window.URL.createObjectURL(bb);
		a.textContent = 'Telecharger fichier parametres';
		a.id = "linkParam";

		a.dataset.downloadurl = [MIME_TYPE, a.download, a.href].join(':');

		$("#linkParam").remove();

		var div = document.getElementById("info_plus");
		div.appendChild(a);

		$("#black").show('slow', function() {
			$(this).animate({
				"opacity" : 0.85,
			}, 400, function() {
				var l = $("body").width() / 2;
				$("#info_plus").show('fast', function() {
					$(this).animate({
						"left" : "+=" + l,
					});
				});

			});
		});

	});

	$("#black").css("height", $("body").height());
	$("#black").css("width", $("body").width());
	$("#info_plus").css("left", "-100px");
	$("#load_fileparam").css("left", "-100px");

	$("#close").click(function() {
		$("#info_plus").hide();
		$("#info_plus").css("left", "-100px");
		$("#black").animate({
			"opacity" : 0
		}, 450, function() {
			$("#black").hide();
		});
		/*
		 $("#info_plus").hide('slow', function() {
		 $(this).css("left", "-100px");
		 $("#black").hide('slow', function() {
		 $(this).css("opacity", 0);
		 });
		 });
		 */
	});

	$("#close2").click(hideLoadParamDialog);

	$("#validateParam").click(function() {

		var content = $("div#messages pre").eq(0).text();
		content = content.split("\n");
		console.log(content);
		if (content.length != 28) {
			alert("File not valid");
			return;
		} else {
			updateParamForms(content);
			$("#close2").trigger("click");
		}
	});

	function updateParamForms(contents){
		var length = $("form#params input").length;

		for (var i = 0; i < length; i++) {
			$("form#params input").eq(i).val(contents[i]);
		}
	}

	function hideLoadParamDialog() {
		$("#load_fileparam").hide();
		$("#load_fileparam").css("left", "-100px");
		$("#black").animate({
			"opacity" : 0
		}, 450, function() {
			$("#black").hide();
		});
	}

});

