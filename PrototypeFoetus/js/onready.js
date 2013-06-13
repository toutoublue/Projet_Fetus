$(document).ready(function() {

	$(window).resize(function() {
		console.log('You resized the window!');
		$("#black").css("height", $(document).height());
		$("#black").css("width", $(document).width());
	});

	/* Multi language */
	install_switch($("#buttons"), // menu
	$("body"), // scope
	//'<a href="#">$lang</a>'  	// template
	'<a href="#"  title="$lang" ><img class="lang-button" src="images/$lang.jpg" alt="$lang" /></a>');
	//template

	$("button:disabled").addClass("mydisabled");

	//Mis à jour age
	$('#age_input').change(function() {
		$('#age_show').text($(this).val());
	});

	//Close Param Windows
	$("#closeParam").click(function() {
		$("#parameter").animate({
			width : 0,
			opacity : 0
		}, 300, function() {
			//$("#parameter").hide();
			$("#openParam").fadeIn();
			$("#viewer").addClass("viewerOnly");
		});
		//$(document).css("height", "900px");
		$(this).hide();
	});
	$("#openParam").click(function() {

		$("#parameter").animate({
			width : "300px",
			opacity : 1
		}, 300, function() {

			$("#closeParam").fadeIn();
			$("#viewer").removeClass("viewerOnly");
		});
		//$(document).css("height", "auto");
		$(this).hide();
	});

	//zoom
	
/*
	
	disableDraggingFor(document.getElementById("zoom-img"));
	

	function disableDraggingFor(element) {
		// this works for FireFox and WebKit in future according to http://help.dottoro.com/lhqsqbtn.php
		element.draggable = false;
		// this works for older web layout engines
		element.onmousedown = function(event) {
			event.preventDefault();
			return false;
		};
	}
*/
	//Onglets
	$("#onglet1").click(function() {

		$("#onglet1, #onglet2").css("top", "-50px");
		$(this).css("top", "-46px").removeClass("ongletPassive");
		$("#onglet2").addClass("ongletPassive");

		$("#generParam").show();
		$("#colorParam").hide();

	});
	$("#onglet2").click(function() {

		$("#onglet1, #onglet2").css("top", "-50px");
		$(this).css("top", "-46px").removeClass("ongletPassive");
		$("#onglet1").addClass("ongletPassive");

		$("#colorParam").show();
		$("#generParam").hide();

	});

	$("#menu1").click(function() {

		$("#menu1, #menu2, #menu3, #menu4").css("top", "0px");
		$(this).css("top", "3px");

		var h1 = parseInt($("#param_legs").css("height"));
		var h2 = parseInt($("#param_arms").css("height"));

		$("#param_arms").hide().css("height", "0px");
		$("#param_head").hide().css("height", "0px");
		$("#fetal_tissues").hide().css("height", "0px");

		if (h1 < 400) {
			$("#param_legs").show().animate({
				"height" : "+=400",
			}, 800);
		}
	});

	$("#menu2").click(function() {

		$("#menu1, #menu2, #menu3, #menu4").css("top", "0px");
		$(this).css("top", "3px");

		var h1 = parseInt($("#param_legs").css("height"));
		var h2 = parseInt($("#param_arms").css("height"));

		$("#param_legs").hide().css("height", "0px");
		$("#param_head").hide().css("height", "0px");
		$("#fetal_tissues").hide().css("height", "0px");

		if (h2 < 400) {
			$("#param_arms").show().animate({
				"height" : "+=400",
			}, 500);
		}
	});

	$("#menu3").click(function() {

		$("#menu1, #menu2, #menu3, #menu4").css("top", "0px");
		$(this).css("top", "3px");

		var h3 = parseInt($("#param_head").css("height"));

		$("#param_legs").hide().css("height", "0px");
		$("#param_arms").hide().css("height", "0px");
		$("#fetal_tissues").hide().css("height", "0px");

		if (h3 < 400) {
			$("#param_head").show().animate({
				"height" : "+=400",
			}, 500);
		}
	});

	$("#menu4").click(function() {

		$("#menu1, #menu2, #menu3, #menu4").css("top", "0px");
		$(this).css("top", "3px");

		var h4 = parseInt($("#fetal_tissues").css("height"));

		$("#param_legs").hide().css("height", "0px");
		$("#param_arms").hide().css("height", "0px");
		$("#param_head").hide().css("height", "0px");

		if (h4 < 400) {
			$("#fetal_tissues").show().animate({
				"height" : "+=400",
			}, 500);
		}
	});

	// Select Your Color Tissues
	$('.mycolorSelector1').ColorPicker({
		color : '#0000ff',
		onShow : function(colpkr) {
			$(colpkr).fadeIn(500);
			return false;
		},
		onHide : function(colpkr) {
			$(colpkr).fadeOut(500);
			return false;
		},
		onChange : function(hsb, hex, rgb) {
			$('.mycolorSelector1 div').css('backgroundColor', '#' + hex);
		},
		onSubmit : function(hsb, hex, rgb, el) {
			$(el).val(hex);
			$(el).ColorPickerHide();
		}
	});
	$('.mycolorSelector2').ColorPicker({
		color : '#0000ff',
		onShow : function(colpkr) {
			$(colpkr).fadeIn(500);
			return false;
		},
		onHide : function(colpkr) {
			$(colpkr).fadeOut(500);
			return false;
		},
		onChange : function(hsb, hex, rgb) {
			$('.mycolorSelector2 div').css('backgroundColor', '#' + hex);
		},
		onSubmit : function(hsb, hex, rgb, el) {
			$(el).val(hex);
			$(el).ColorPickerHide();
		}
	});
	$('.mycolorSelector3').ColorPicker({
		color : '#0000ff',
		onShow : function(colpkr) {
			$(colpkr).fadeIn(500);
			return false;
		},
		onHide : function(colpkr) {
			$(colpkr).fadeOut(500);
			return false;
		},
		onChange : function(hsb, hex, rgb) {
			$('.mycolorSelector3 div').css('backgroundColor', '#' + hex);
		},
		onSubmit : function(hsb, hex, rgb, el) {
			$(el).val(hex);
			$(el).ColorPickerHide();
		}
	});
	$('.mycolorSelector4').ColorPicker({
		color : '#0000ff',
		onShow : function(colpkr) {
			$(colpkr).fadeIn(500);
			return false;
		},
		onHide : function(colpkr) {
			$(colpkr).fadeOut(500);
			return false;
		},
		onChange : function(hsb, hex, rgb) {
			$('.mycolorSelector4 div').css('backgroundColor', '#' + hex);
		},
		onSubmit : function(hsb, hex, rgb, el) {
			$(el).val(hex);
			$(el).ColorPickerHide();
		}
	});
	$('.mycolorSelector5').ColorPicker({
		color : '#0000ff',
		onShow : function(colpkr) {
			$(colpkr).fadeIn(500);
			return false;
		},
		onHide : function(colpkr) {
			$(colpkr).fadeOut(500);
			return false;
		},
		onChange : function(hsb, hex, rgb) {
			$('.mycolorSelector5 div').css('backgroundColor', '#' + hex);
		},
		onSubmit : function(hsb, hex, rgb, el) {
			$(el).val(hex);
			$(el).ColorPickerHide();
		}
	});
	$('.mycolorSelector6').ColorPicker({
		color : '#0000ff',
		onShow : function(colpkr) {
			$(colpkr).fadeIn(500);
			return false;
		},
		onHide : function(colpkr) {
			$(colpkr).fadeOut(500);
			return false;
		},
		onChange : function(hsb, hex, rgb) {
			$('.mycolorSelector6 div').css('backgroundColor', '#' + hex);
		},
		onSubmit : function(hsb, hex, rgb, el) {
			$(el).val(hex);
			$(el).ColorPickerHide();
		}
	});

	$(".loadParams").click(function() {
		$("#black").css("height", $(document).height());
		$("#black").css("width", $(document).width());

		$("#black").show().animate({
			"opacity" : 0.85,
		}, 400, function() {
			var l = $("body").width() / 2 - 150;
			$("#load_fileparam").show('fast', function() {
				$(this).animate({
					"left" : "+=" + l,
				});
			});

		});
	});

	$(".saveParams").click(function() {

		$("#black").css("height", $(document).height());
		$("#black").css("width", $(document).width());

		var lang_tmp = $(this).attr("lang");
		var contents = "";
		var length = $("form#params input").length;

		for (var i = 0; i < length; i++) {
			if (i == length - 1)
				contents += $("form#params input").eq(i).val();
			else
				contents += $("form#params input").eq(i).val() + "\n";
		}
		generateButtonSaveParam(lang_tmp, contents);

		$("#black").show().animate({
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

	$(".saveOff").click(function() {

		$("#black").css("height", $(document).height());
		$("#black").css("width", $(document).width());

		$("#black").show().animate({
			"opacity" : 0.85,
		}, 400, function() {
			var l = parseInt($("body").width()) / 2 - 200;
			$("#info_off").show('fast', function() {
				$(this).animate({
					"left" : "+=" + l,
				});
			});

		});
	});

	/*
	 $("#linkParam").bind("click",function(){
	 $("im#close").trigger("click");
	 });
	 */

	$("#annul-button").click(function() {
		$("#close").trigger("click");
	});

	$("#annul-button-off").click(function() {
		$("#closeOff").trigger("click");
	});

	$("#info_plus").css("left", "-100px");
	$("#load_fileparam").css("left", "-100px");

	$("#close").click(function() {
		$("#info_plus").hide();
		$("#info_plus").css("left", "-100px");
		clearBlack();
	});

	$("#close2").click(hideLoadParamDialog);

	$("#closeOff").click(function() {
		$("#info_off").hide();
		$("#info_off").css("left", "-100px");
		clearBlack();
	});

	$("#validateParam").click(function() {

		var content = $("div#messages pre").eq(0).text();
		content = content.split("\n");
		//console.log(content);
		if (content.length != 28) {
			alert("File not valid");
			return;
		} else {
			updateParamForms(content);
			$("#close2").trigger("click");
		}
	});

	function updateParamForms(contents) {
		var length = $("form#params input").length;

		for (var i = 0; i < length; i++) {
			$("form#params input").eq(i).val(contents[i]);
		}
	}

	function hideLoadParamDialog() {
		$("#load_fileparam").hide();
		$("#load_fileparam").css("left", "-100px");

		clearBlack();
	}


	$("img#help").click(function() {
		//$("#black").show().animate({
		//	"opacity" : 0.85
		//}, 350, function() {
		$("#help-general").fadeIn();
		//});
	});

	$("#close3").click(function() {
		$("#help-general").hide();
		/*$("#black").animate({
		 "opacity" : 0
		 }, 450, function() {
		 $("#black").hide();
		 });*/
	});

	// insertion help parameters
	for (var i = 0; i < $("input.paramF").length; i++) {
		$("input.paramF").eq(i).after("<img src='images/question2.png' alt='?' class='help-param' title='Click for info' />");
	}

	$(".help-param").bind("click", function() {
		
		var m = $(this).prev().attr("min");
		var M = $(this).prev().attr("max");
		
		alert("FR: Pour ce paramètre les valeurs limites sont:\nmin = "+m+"\nMAX = "+M+"\n\nEN : For this parameter the boundary are:\nmin = "+m+"\nMAX = "+M );
	});

	// insertion help buttons
	$("#parameter_button br").before("<img src='images/question-button.png' alt='?' class='help-button' title='Click for info' />");

	$(".help-button").bind("click", function() {
		var my = $(this).prev().attr("class");
		
		if(my.indexOf("saveOff") != -1 )
 			alert("FR : Sauvegarde des maillages constituants les différents tissus foetaux ainsi que ceux se rapportant au reste de l'UFU si celle-ci a été générée.\nLe format de sauvegarde est le .off.\n\nEN : Save the 3D mesh files constituting the various fetal tissues and UFU file also if this one has been generated.\nThese files are saved in the .off format.");
 		else if (my.indexOf("loadParam") != -1)
			alert("FR: Le bouton 'Charger paramètres' permet de mettre à jour l'interface Web avec l'ensemble des paramètres (28 angles pour les bras, jambes, tête et un pour l’âge du fœtus). Ces valeurs de paramètres sont enregistrées sur l'espace disque de l'utilisateur.\n\n EN:  The 'Load parameters' button allows to update the Web interface foetus with ALL parameters (i.e.: 28 angle parameters for its head, legs & arms and one parameter for its age). These parameter values are saved on the user local disk.");
		else if (my.indexOf("saveParam") != -1)
			alert("FR: Ce bouton permet d'enregistrer sur l'espace disque utilisateur l'ensemble des paramètres (28 angles pour les bras, jambes, tête et un pour l’âge du fœtus).\n\nEN: This button allows to save on the user local disk ALL parameters ((i.e.: 28 angle parameters for its head, legs & arms and one parameter for its age).");
		else if (my.indexOf("genSkeleton") != -1)
			alert("FR: Ce bouton permet de générer le squelette du fœtus avec l'ensemble des paramètres affichés sur l'interface Web.\nL'activation de ce bouton gèlera entièrement l'interface Web jusqu'à obtention du fichier de maillage pour visualisation.\nLe gel de l'interface Web peut durer plusieurs minutes (15 min maximum).\nL'activation de ce bouton actionnera ensuite les boutons 'générer aperçu enveloppe' et 'générer fœtus' lors de la visualisation du squelette du fœtus.");
		else if (my.indexOf("prevEnvelope") != -1)
			alert("FR: Ce bouton  permet de générer l'aperçu de l'enveloppe du fœtus avec l'ensemble des paramètres affichés sur l'interface Web.\nL'activation de ce bouton gèlera entièrement l'interface Web jusqu'à obtention du fichier de maillage pour visualisation.\nLe gel de l'interface Web peut durer plusieurs minutes (15 min maximum).");
		else if (my.indexOf("generateF") != -1)	
			alert("FR: Ce bouton permet de générer le fœtus avec l'ensemble des paramètres affichés sur l'interface Web.\nL'activation de ce bouton gèlera entièrement l'interface Web jusqu'à obtention du fichier de maillage pour visualisation.\nLe gel de l'interface Web peut durer plusieurs minutes (15 min maximum). ");
		else if (my.indexOf("genUFU") != -1)	
			alert("FR: Ce bouton permet de générer l'Utero-Fetal Unit (UFU) avec l'ensemble des paramètres affichés sur l'interface Web.\nL'activation de ce bouton gèlera entièrement l'interface Web jusqu'à obtention du fichier de maillage pour visualisation.\nLe gel de l'interface Web peut durer plusieurs minutes (15 min maximum). ");
	});

	$("#viewer").append("<img src='images/help-canvas.png' alt='?' id='help-canvas' title='Click for info' />");

	$("#help-canvas").bind("click", function() {
		
		alert("FR: Cette fenêtre représente le rendu d’une scène 3D d’un fœtus à différentes semaines de son évolution entre 14 et 32 semaines (le pas d’incrément est d’une semaine).\n Le fœtus 3D est représenté par l’importation de maillages caractérisant la géométrie du fœtus depuis un serveur distant. Le fœtus 3D peut interagir avec l’utilisateur via la souris et avec son environnement avec les paramètres de l’interface web.");
	});

	//Button Generate Skeleton
	// Init

	$(".genSkeleton").click(function() {

		$("#black").css("height", $(document).height());
		$("#black").css("width", $(document).width());

		$("#black").show().animate({
			"opacity" : 0.85,
		}, 400)
		.append("<img class='loading' style='margin-top:100px; width: 150px;' src='loading.gif' alt='loading...' /><br/>");
		
		var lang = $(this).attr("lang");

		$("button.prevEnvelope, button.generateF").removeClass("mydisabled").removeAttr("disabled");

		var contents = "";
		var length = $("form#params input").length;

		for (var i = 0; i < length; i++) {
			if (i == length - 1)
				contents += $("form#params input").eq(i).val();
			else
				contents += $("form#params input").eq(i).val() + "\n";
		}

		var session_id = $("#sessionID").val();

		$.ajax({
			type : "POST",
			url : "server.php",
			data : {
				sessionID : session_id,
				param : contents
			}
		}).done(function(data) {
			clearBlack();
			// read and generation of the scene 3D
			readOFF(data);

			generateButtonSaveOff(lang, data);
			$("button.saveOff").removeClass("mydisabled").removeAttr("disabled");
			//console.log(data);
			//init("Envelope.dae");
			//saveFileOFF();
			//done
			//clearBlack();

		}).fail(function() {
			alert("Error..");

			clearBlack();
		});

	});

	function readOFF(offData) {

		setTimeout(function() {
			readOFF_from_string(offData, mesh);
			setTimeout(function() {
				handleLoadedMesh(mesh);
				loading.textContent = "";
			}, 0);
			loading.textContent = "Handling OBJ...";
			loading.style.backgroundColor = "#fab";
		}, 0);
		loading.textContent = "Loading OBJ...";
		loading.style.backgroundColor = "#5f4";

	}

	// Button Generate Fetus
	$(".generateF").click(function() {

		var lang_tmp = $(this).attr("lang");

		if (lang_tmp == "fr") {
			if (confirm('Vous etes sur que vous voulez générer le foetus?\nCette operation peut prendre certains minutes.')) {

				$.ajax({
					type : "POST",
					url : "server.php",
					data : {
						sessionID : "11515f151f5efwefweew5f1",
						param : "0 25 23 56 85 23"
					}
				}).done(function(data) {

					// read and generation of the scene 3D
					//readOFF(data);
					console.log(data);
					//saveFileOFF();
					//done
				}).fail(function() {
					alert("Error..");
				});

			} else {
				// Do nothing!
			}
		} else if (lang_tmp == "en") {
			if (confirm('Are you sure you want to gererate the fetus?\nIt could take some minutes.')) {

			} else {
				// Do nothing!
			}
		}
	});

	// init interface
	setTimeout(function() {

		$("body").fadeIn();

		$("#viewer").show().animate({
			"left" : "60px",
			"opacity" : 1
		}, 500);

		$("#parameter").show().animate({
			"right" : "60px",
			"opacity" : 1
		}, 500);

		$("#stats").css("z-index", "4");

	}, 500);

	function generateButtonSaveParam(lang, contents) {

		var MIME_TYPE = 'text/plain';

		var bb = new Blob([contents], {
			type : MIME_TYPE
		});

		var a = document.createElement('a');
		a.download = "file.param";
		a.href = window.URL.createObjectURL(bb);
		if (lang == "fr") {
			a.textContent = "Enregistre Sous";
		} else if (lang == "en") {
			a.textContent = "Save As";
		}
		a.className = "mybutton-1 linkParam";
		a.dataset.downloadurl = [MIME_TYPE, a.download, a.href].join(':');

		$(".linkParam").remove();

		var div = document.getElementById("info_plus");
		div.appendChild(a);

	}

	function generateButtonSaveOff(lang, contents) {

		var MIME_TYPE = 'text/plain';

		var bb = new Blob([contents], {
			type : MIME_TYPE
		});

		var a = document.createElement('a');
		a.download = "file.off";
		a.href = window.URL.createObjectURL(bb);
		if (lang == "fr") {
			a.textContent = "Enregistre Sous";
		} else if (lang == "en") {
			a.textContent = "Save As";
		}
		a.className = "mybutton-1 off_file";
		a.dataset.downloadurl = [MIME_TYPE, a.download, a.href].join(':');

		$(".off_file").remove();

		var div = document.getElementById("info_off");
		div.appendChild(a);
	}

	function clearBlack() {
		$("#black").animate({
			"opacity" : 0
		}, 300, function() {
			$("#black").hide();
		});

		$("#black img.loading").remove();
	}

});

