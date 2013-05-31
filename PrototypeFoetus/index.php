<! DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/styles.css">

		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/ajaxfileupload.js"></script>
		<script type="text/javascript" src="js/onready.js"></script>

		

	</head>
	<body>
		<div id="info_plus">
			<img id="close" src="images/close.png" alt="close" title="ferme la fenetre" />
			<img  src="images/download.png" alt="download" title="" />
			<br />
		</div>
		
		<div id="load_fileparam">
			<img id="close2" src="images/close.png" alt="close" title="ferme la fenetre" />
			<form id="upload" action="upload.php" method="POST" enctype="multipart/form-data">

				<fieldset>

					<input type="hidden" id="MAX_FILE_SIZE" name="MAX_FILE_SIZE" value="300000" />

					<div>
						<label for="fileselect">Files to upload:</label>
						<input type="file" id="fileselect" name="fileselect[]" multiple="multiple" />
						<div id="filedrag">
							or drop files here
						</div>
					</div>

					<div id="submitbutton">
						<button type="submit">
							Upload Files
						</button>
					</div>

				</fieldset>

			</form>

			<div id="progress"></div>

			<div id="messages">
				<p>
					Status Messages
				</p>
			</div>
			
			<div id="validateParam">
						<button type="button">
							Upload Parameters
						</button>
			</div>
		</div>

		<div style="display: none;">
			<br/>
			<img id="loading" src="images/loading.gif" style="display:none;">
			<form name="form" action="" method="POST" enctype="multipart/form-data">
				<table cellpadding="0" cellspacing="0" class="tableForm">

					<thead>
						<tr>
							<th>Please select a file and click Upload button</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>
							<input id="fileToUpload" type="file" name="fileToUpload" class="input">
							</td>
						</tr>
					</tbody>
					<tfoot>
						<tr>
							<td>
							<button class="button" id="buttonUpload" onclick="return ajaxFileUpload();">
								Upload
							</button></td>
						</tr>
					</tfoot>

				</table>
			</form>
		</div>
		</div>
		<div id="black"></div>

		<h1 id="title">Foetus 3D Viewer</h1>
		<img id="help" src="images/help.png" alt="download" title="Aide en ligne" />
		<div id="viewer" >

			<canvas id="scene3d" width="600" height="600">
				Your browsen doesn't support CANVAS. Sorry
			</canvas>

			<script>
				function loadImages(sources, callback) {
					var images = {};
					var loadedImages = 0;
					var numImages = 0;
					// get num of sources
					for (var src in sources) {
						numImages++;
					}
					for (var src in sources) {
						images[src] = new Image();
						images[src].onload = function() {
							if (++loadedImages >= numImages) {
								callback(images);
							}
						};
						images[src].src = sources[src];
					}
				}

				var canvas = document.getElementById('scene3d');
				var context = canvas.getContext('2d');

				var sources = {
					baby : 'images/baby.jpg'
				};

				loadImages(sources, function(images) {
					context.drawImage(images.baby, 0, 0, 600, 600);
				});

			</script>
		</div>

		<?php
		include 'form_params.inc.php';
		?>

		<div id="footer">
			<img src="images/tpt.gif" alt="logo" width="60px" style="float:right; padding: 5px;">
			<p>
				Telecom Paristech 2013 - INF380
			</p>
			<p>
				Experts: Sylvie Vignes, Sonia Dahdouh
			</p>
			<p>
				Equipe: Hervé DANIEL, Matteo GARIGLIO, Maxime DE MIJOLLA, Yiqing YUAN, Xue TANG
			</p>
		</div>
		<script type="text/javascript" src="js/filedrag.js"></script>
	</body>

</html>