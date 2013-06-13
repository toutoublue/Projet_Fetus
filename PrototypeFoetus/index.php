<?php
include 'session.inc.php';
?>

<! DOCTYPE html>
<html>
	<head>
		<title>3D WEB Application </title>

		<meta charset="utf-8">

		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/styles.css">
		<link rel="stylesheet" media="screen" type="text/css" href="css/colorpicker.css" />
		<link rel="stylesheet" href="css/webviewer.css" type="text/css" media="screen">

		<script src="js2/mesh_request.js" type="text/javascript"></script>
		<script src="js2/gl-matrix.js" type="text/javascript"></script>
		<script src="js2/epsilon.js" type="text/javascript"></script>
		<script src="js2/trackball.js" type="text/javascript"></script>
		<script src="js2/findpos.js" type="text/javascript"></script>
		<script src="js2/per_face_normals.js" type="text/javascript"></script>
		<script src="js2/per_vertex_normals.js" type="text/javascript"></script>
		<script src="js2/getUnique.js" type="text/javascript"></script>
		<script src="js2/remove_unreferenced.js" type="text/javascript"></script>
		<script src="js2/stats.js" type="text/javascript"></script>
		<script src="js2/webgl-debug.js" type="text/javascript"></script>
		<script src="js2/webgl-utils.js" type="text/javascript"></script>
		<script src="js2/readOFF.js" type="text/javascript"></script>
		<script src="js2/webviewer.js" type="text/javascript"></script>

		<!-- For now put shaders here, but eventually should be loaded by request:
		http://stackoverflow.com/questions/4878145/javascript-and-webgl-external-scripts
		-->
		<script id="per-fragment-lighting-fs" type="x-shader/x-fragment">
			precision mediump float;

			varying vec2 vTextureCoord;
			varying vec3 vTransformedNormal;
			varying vec4 vPosition;

			uniform float uAlpha;
			uniform float uMaterialShininess;

			uniform bool uShowSpecularHighlights;
			uniform bool uUseLighting;
			uniform bool uUseTextures;

			uniform vec3 uAmbientColor;

			uniform vec3 uPointLightingLocation;
			uniform vec3 uPointLightingSpecularColor;
			uniform vec3 uPointLightingDiffuseColor;

			uniform sampler2D uSampler;

			void main(void) {
			vec3 lightWeighting;
			if (!uUseLighting) {
			lightWeighting = vec3(1.0, 1.0, 1.0);
			} else {
			//vec3 lightDirection = normalize(uPointLightingLocation - vPosition.xyz);
			vec3 lightDirection = vec3(0,0,1);
			vec3 normal = normalize(vTransformedNormal);

			float specularLightWeighting = 0.0;
			if (uShowSpecularHighlights) {
			vec3 eyeDirection = normalize(-vPosition.xyz);
			vec3 reflectionDirection = reflect(-lightDirection, normal);

			specularLightWeighting = pow(max(dot(reflectionDirection, eyeDirection), 0.0), uMaterialShininess);
			}

			float diffuseLightWeighting = max(dot(normal, lightDirection), 0.0);
			lightWeighting = uAmbientColor
			+ uPointLightingSpecularColor * specularLightWeighting
			+ uPointLightingDiffuseColor * diffuseLightWeighting;
			}

			vec4 fragmentColor;
			if (uUseTextures) {
			fragmentColor = texture2D(uSampler, vec2(vTextureCoord.s, vTextureCoord.t));
			} else {
			fragmentColor = vec4(1.0, 1.0, 1.0, 1.0);
			}
			gl_FragColor = vec4(fragmentColor.rgb * lightWeighting, fragmentColor.a*uAlpha);
			}
		</script>

		<script id="per-fragment-lighting-vs" type="x-shader/x-vertex">
			attribute vec3 aVertexPosition;
			attribute vec3 aVertexNormal;
			attribute vec2 aTextureCoord;

			uniform mat4 uMVMatrix;
			uniform mat4 uPMatrix;
			uniform mat3 uNMatrix;

			varying vec2 vTextureCoord;
			varying vec3 vTransformedNormal;
			varying vec4 vPosition;

			void main(void) {
			vPosition = uMVMatrix * vec4(aVertexPosition, 1.0);
			gl_Position = uPMatrix * vPosition;
			vTextureCoord = aTextureCoord;
			vTransformedNormal = uNMatrix * aVertexNormal;
			}
		</script>

	</head>
	<body onload='webGLStart("webviewer_canvas","webviewer_error");' onunload="">
		<div id="info_plus">
			<img id="close" src="images/close.png" alt="close" title="ferme la fenetre" />
			<p lang="en" style="text-align: justify;">
				You are saving a file .param containing all the parameter of the fetus.
			</p>
			<p lang="fr" style="text-align: justify;">
				Vous etes en train de sauvegarder un fichier .param contenant toutes les parametrès du fœtus.
			</p>

			<img style="margin-bottom: 15px;" src="images/download.png" alt="download" title="" />
			<br />
			<a id="annul-button" class="mybutton-1">
			<spam lang="en">
				Annul
			</spam>
			<spam lang="fr">
				Annuler
			</spam></a>
		</div>

		<div id="info_off"><img id="closeOff" src="images/close.png" alt="close" title="ferme la fenetre" />
			<h3 lang="fr">Fichier Squelette.off</h3>
			<h3 lang="en">File Skelette.off</h3>

			<p lang="en" style="text-align: justify;">
				You are saving a file .off containing all the infomation of the grid of the scene 3D.
			</p>
			<p lang="fr" style="text-align: justify;">
				Vous etes en train de sauvegarder un fichier .off contenant le maillage de la scène 3D.
			</p>

			<img style="margin-bottom: 15px;" src="images/download.png" alt="download" title="" />
			<br />
			<a id="annul-button-off" class="mybutton-1">
			<spam lang="en">
				Annul
			</spam>
			<spam lang="fr">
				Annuler
			</spam></a>
		</div>

		<div id="help-general">
			<div style="width:900px; margin:0 auto; height:600px;">
				<h1 lang="fr" style="margin-top: 50px;">Aide en Ligne <img src="images/help.png" alt="" /></h1>
				<h1 lang="en" style="margin-top: 50px;">Help General Info <img src="images/help.png" alt="" /></h1>

				<img id="close3" src="images/close.png" alt="close" title="ferme la fenetre" />
				<object data="help/help-on-line.pdf" type="application/pdf" width="100%" height="100%">

					<p lang="en">
						It appears you don't have a PDF plugin for this browser.
						No biggie... you can <a href="help/help-on-line.pdf">click here to
						download the PDF file.</a>
					</p>
					<p lang="fr">
						A paremment, vous n'avez pas installé le plugin PDF sur votre browser.
						Vous pouvez <a href="help/help-on-line.pdf">cliquer ici pour télécharger le fichier PDF.</a>
					</p>

				</object>
			</div>
		</div>
		<div id="load_fileparam">
			<img id="close2" src="images/close.png" alt="close" title="ferme la fenetre" />
			<form id="upload" action="upload.php" method="POST" enctype="multipart/form-data">

				<fieldset>

					<input type="hidden" id="MAX_FILE_SIZE" name="MAX_FILE_SIZE" value="300000" />

					<div>
						<label for="fileselect">
							<spam lang="fr">
								Fichier .param à télécharger:
							</spam>
							<spam lang="en">
								File .param to upload:
							</spam></label>
						<input type="file" id="fileselect" name="fileselect[]" multiple="multiple" />
						<div id="filedrag">
							<p lang="en">
								or drop file here
							</p>
							<p lang="fr">
								ou drop le fichier ici
							</p>
						</div>
					</div>

					<div id="submitbutton">
						<button lang="en" type="submit">
							Upload File
						</button>
						<button lang="fr" type="submit">
							Télécharger Fichier
						</button>
					</div>

				</fieldset>

			</form>

			<div id="progress"></div>

			<div id="messages">
				<p lang="en">
					Status Messages
				</p>
				<p lang="fr">
					Statut Messages
				</p>
			</div>

			<div id="validateParam">
				<button lang="en" class="mybutton-1" type="button">
					Upload Parameters
				</button>
				<button lang="fr" class="mybutton-1" type="button">
					Mis à jour Paramètres
				</button>
			</div>
		</div>
		<div id="black"></div>
		<h1 lang="en" id="title">3D foetus generation</h1>
		<h1 lang="fr" id="title">Génération de fœtus 3D </h1>
		<input type="hidden" val="<?php echo session_id(); ?>" id="sessionID"/>
		<span id="buttons"></span>

		<img id="help" src="images/help.png" alt="download" title="Help" />
		<div id="page-container" >
			<?php
			include 'form_params.inc.php';
			?>

			<div id="viewer">
				<div id="loadingtext"></div>
				<img id="zoom-img" src="images/zoom-vert.png" title="zoom" alt="zoom"/>
				<canvas id="webviewer_canvas" style='width:720px;'></canvas>
				<div id="webviewer_error"></div>
			</div>
			<div style="clear: both;"></div>
		</div>
		<div id="footer">
			<img src="images/tpt.gif" alt="logo" width="60px" style="float:right; padding: 7px;">
			<p>
				Telecom Paristech 2013 - INF380
			</p>
			<p>
				Experts: Sylvie Vignes, Sonia Dahdouh & Isabelle Bloch
			</p>
			<p>
				Equipe: Hervé DANIEL, Matteo GARIGLIO, Maxime DE MIJOLLA, Yiqing YUAN, Xue TANG
			</p>
		</div>

	</body>

	<!-- Faster scrits loading -->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js2/libs/jqueryui-1.10.0/jquery-ui.min.js"></script>
	<script type="text/javascript" src="js/Switcher/jquery.cookie.js" ></script>
	<script type="text/javascript" src="js/Switcher/jquery.lang-switcher.js" ></script>
	<script type="text/javascript" src="js/onready.js"></script>
	<script type="text/javascript" src="js/filedrag.js"></script>
	<script type="text/javascript" src="js/html5slider.js"></script>
	<script type="text/javascript" src="js/colorpicker.js"></script>

</html>