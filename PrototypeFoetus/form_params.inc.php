<div id="parameter" >

	<div id="onglet1">
		<h5 lang="fr">Génération
		<br />
		fœtus</h5><h5 lang="en">Fetus
		<br />
		Creation</h5>
	</div>
	<div id="onglet2" class="ongletPassive">
		<h5 lang="fr">Visualisation et
		<br />
		Sauvegarde</h5><h5 lang="en">Viewer and
		<br/>
		Saving</h5>
	</div>

	<div id="generParam">
		<div id="parameter_button">

			<button lang="en" style="width: 150px" class="mybutton-1 loadParams" type="button">
				Import parameters
			</button>
			<button lang="fr" style="width: 150px" class="mybutton-1 loadParams" type="button">
				Charger paramètres
			</button>

			<br/>
			<button lang="en" style="width: 150px" class="mybutton-1 saveParams" type="button">
				Save parameters
			</button>
			<button lang="fr" style="width: 150px" class="mybutton-1 saveParams" type="button">
				Sauvegarder paramètres
			</button>

			<br/>
			<button lang="en" style="width: 150px" class="mybutton-1 genSkeleton" type="button">
				Generate skeleton
			</button>
			<button lang="fr" style="width: 150px" class="mybutton-1 genSkeleton" type="button">
				Générer squelette
			</button>
			<br/>
			<button lang="en" style="width: 150px" class="mybutton-1 prevEnvelope" type="button" disabled>
				Preview envelope
			</button>
			<button lang="fr" style="width: 150px" class="mybutton-1 prevEnvelope" type="button" disabled>
				Générer aperçu enveloppe
			</button>
			<br/>
			<button lang="en" style="width: 150px" class="mybutton-1 generateF" type="button" disabled>
				Generate fetus
			</button>
			<button lang="fr" style="width: 150px" class="mybutton-1 generateF" type="button" disabled>
				Générer fœtus
			</button>
			<br/>

			<button lang="en" style="width: 150px" class="mybutton-1 genUFU" type="button" disabled>
				Generate UFU
			</button>
			<button lang="fr" style="width: 150px" class="mybutton-1 genUFU" type="button" disabled>
				Générer UFU
			</button>
			<br/>

		</div>

		<div id="age">
			<span lang="en" style="color: rgb(139, 226, 247); text-shadow: 1px 1px 0 rgba(0, 0, 0, 0.8);">Fetus age</span>
			<span lang="fr" style="color: rgb(139, 226, 247); text-shadow: 1px 1px 0 rgba(0, 0, 0, 0.8);">Age du fœtus </span>
			<input type="range" style="width: 100px; cursor: pointer;" name="age" id="age_input" value="32" min="14" max="32" step="1" />
			</br><label id="age_show" >32</label>
			</br>
			<span lang="en" style="font-size: 20px; color: rgb(139, 226, 247); text-shadow: 1px 1px 0 rgba(0, 0, 0, 0.8);">Weeks</span>
			<span lang="fr" style="font-size: 20px; color: rgb(139, 226, 247); text-shadow: 1px 1px 0 rgba(0, 0, 0, 0.8);">Semaines</span>
		</div>
		<div style="clear: both"></div>
		<h2 lang="en" style="text-align: left; margin:10px 0; text-shadow: 1px 1px 0 rgba(163, 163, 163, 0.8);">Parameters:</h2>
		<h2 lang="fr" style="text-align: left; margin:10px 0; text-shadow: 1px 1px 0 rgba(163, 163, 163, 0.8);">Paramètres:</h2>
		<div id="Tab">
			<div class="Menubox">
				<table>
					<th id="menu3" >
					<spam lang="en">
						Head
					</spam>
					<spam lang="fr">
						Tête
					</spam></th>
					<th id="menu1" >
					<spam lang="en">
						Legs
					</spam>
					<spam lang="fr">
						Jambes
					</spam></th>
					<th id="menu2" >
					<spam lang="en">
						Arms
					</spam>
					<spam lang="fr">
						Bras
					</spam>
				</table>
			</div>

			<div class="Contentbox">

				<div id="param_head">
					<table>
						<tr>
							<!-- 0ème param -->
							<td><span lang="fr">angle tête sagittal</span><span lang="en">Head sagittal angle</span></td>
							<td style="min-width: 65px;" >
							<input class="paramF" type="number" min="-180" max="180" value="10"/>
							</td>
						</tr>
						<tr>
							<!-- 1ème param -->
							<td><span lang="fr">angle tête coronal</span><span lang="en">Head coronal angle</span></td>
							<td>
							<input class="paramF" type="number" min="-180" max="180" value="10"/>
							</td>
						</tr>
						<tr>
							<!-- 2ème param -->
							<td><span lang="fr">angle tête axial</span><span lang="en">Head axial angle</span></td>
							<td>
							<input class="paramF" type="number" min="-180" max="180" value="-20"/>
							</td>
						</tr>
					</table>
				</div>

				<div id="param_legs">
					<table>
						<tr>
							<!-- 3ème param -->
							<td><span lang="fr">angle fémur droit sagittal</span><span lang="en">right femur sagittal angle</span></td>
							<td style="min-width: 65px;" >
							<input class="paramF" type="number" value="120" min="0" max="180"/>
							</td>
						</tr>
						<tr>
							<!-- 4ème param -->
							<td><span lang="fr">angle fémur droit coronal</span><span lang="en">right femur coronal angle</span></td>
							<td>
							<input class="paramF" type="number" value="10" min="-45" max="10"/>
							</td>
						</tr>
						<tr>
							<!-- 5ème param -->
							<td><span lang="en">right femur rotation angle</span><span lang="fr">angle rotation fémur droit</span></td>
							<td >
							<input class="paramF" type="number" min="-180" max="180" value="0" />
							</td>
						</tr>
						<tr>
							<!-- 6ème param -->
							<td><span lang="fr">angle fémur gauche sagittal</span><span lang="en">left femur rotation angle</span></td>
							<td>
							<input class="paramF" type="number" min="0" max="180" value="120"/>
							</td>
						</tr>
						<tr>
							<!-- 7ème param -->
							<td><span lang="fr">angle fémur gauche coronal</span><span lang="en">left femur coronal angle</span></td>
							<td>
							<input class="paramF" type="number" min="-45" max="45" value="10"/>
							</td>
						</tr>
						<tr>
							<!-- 8ème param -->
							<td><span lang="fr">angle rotation fémur gauche</span><span lang="en">left femur rotation angle</span></td>
							<td>
							<input class="paramF" type="number" min="-180" max="180" value="0"/>
							</td>
						</tr>
						<tr>
							<!-- 9ème param -->
							<td><span lang="fr">angle de pliure du genou droit</span><span lang="en">right knee bend angle</span></td>
							<td>
							<input class="paramF" type="number" min="-180" max="180" value="50"/>
							</td>
						</tr>
						<tr>
							<!-- 10ème param -->
							<td><span lang="fr">angle de pliure du genou gauche</span><span lang="en">left knee bend angle</span></td>
							<td>
							<input class="paramF" type="number" min="-180" max="180" value="50"/>
							</td>
						</tr>
						<tr>
							<!-- 11ème param -->
							<td><span lang="fr">angle tibia/pied droit</span><span lang="en">right tibia/foot angle</span></td>
							<td>
							<input class="paramF" type="number" min="0" max="180" value="90"/>
							</td>
						</tr>
						<tr>
							<!-- 12ème param -->
							<td><span lang="fr">angle tibia/pied gauche</span><span lang="en">left tibia/foot angle</span></td>
							<td>
							<input class="paramF" type="number" min="0" max="180" value="90"/>
							</td>
						</tr>
						<tr>
							<!-- 13ème param -->
							<td><span lang="fr">angle rotation pied droit</span><span lang="en">right foot rotation angle</span></td>
							<td>
							<input class="paramF" type="number" min="-180" max="180" value="0"/>
							</td>
						</tr>
						<tr>
							<!-- 14ème param -->
							<td><span lang="fr">angle rotation pied gauche</span><span lang="en">left foot rotation angle</span></td>
							<td>
							<input class="paramF" type="number" min="-180" max="180" value="0"/>
							</td>
						</tr>
					</table>
				</div>

				<div id="param_arms">
					<table>
						<tr>
							<!-- 15ème param -->
							<td><span lang="fr">angle humérus droit sagittal</span><span lang="en">right humerus sagittal angle</span></td>
							<td style="min-width: 65px;" >
							<input class="paramF" type="number" min="-180" max="180" value="0"/>
							</td>
						</tr>
						<tr>
							<!-- 16ème param -->
							<td><span lang="fr">angle humérus gauche sagittal</span><span lang="en">left humerus sagittal angle</span></td>
							<td>
							<input class="paramF" type="number" min="-180" max="180" value="0"/>
							</td>
						</tr>
						<tr>
							<!-- 17ème param -->
							<td><span lang="fr">angle humérus droit coronal</span><span lang="en">right humerus coronal angle</span></td>
							<td>
							<input class="paramF" type="number" min="-180" max="180" value="20"/>
							</td>
						</tr>
						<tr>
							<!-- 18ème param -->
							<td><span lang="fr">angle humérus gauche coronal</span><span lang="en">left humerus coronal angle</span></td>
							<td>
							<input class="paramF" type="number" min="-180" max="180" value="20"/>
							</td>
						</tr>
						<tr>
							<!-- 19ème param -->
							<td><span lang="fr">angle rotation humérus droit</span><span lang="en">right humerus rotation angle</span></td>
							<td>
							<input class="paramF" type="number" min="-180" max="180" value="0"/>
							</td>
						</tr>
						<tr>
							<!-- 20ème param -->
							<td><span lang="fr">angle rotation humérus gauche</span><span lang="en">left humerus rotation angle</span></td>
							<td>
							<input class="paramF" type="number" min="-180" max="180" value="0"/>
							</td>
						</tr>
						<tr>
							<!-- 21ème param -->
							<td><span lang="fr">angle de pliure du coude droit</span><span lang="en">right elbow bend angle</span></td>
							<td>
							<input class="paramF" type="number" min="0" max="180" value="80"/>
							</td>
						</tr>
						<tr>
							<!-- 22ème param -->
							<td><span lang="fr">angle de pliure du coude gauche</span><span lang="en">left elbow bend angle</span></td>
							<td>
							<input class="paramF" type="number" min="0" max="180" value="80"/>
							</td>
						</tr>
						<tr>
							<!-- 23ème param -->
							<td><span lang="fr">angle main/cubitus droit</span><span lang="en">right hand/cubitus angle</span></td>
							<td>
							<input class="paramF" type="number" min="90" max="270" value="180"/>
							</td>
						</tr>
						<tr>
							<!-- 24ème param -->
							<td><span lang="fr">angle main/cubitus gauche</span><span lang="en">left hand/cubitus angle</span></td>
							<td>
							<input class="paramF" type="number" min="90" max="270" value="180"/>
							</td>
						</tr>
						<tr>
							<!-- 25ème param -->
							<td><span lang="fr">angle rotation main droit</span><span lang="en">right hand rotation angle</span></td>
							<td>
							<input class="paramF" type="number" min="-90" max="90" value="0"/>
							</td>
						</tr>
						<tr>
							<!-- 26ème param -->
							<td><span lang="fr">angle rotation main gauche</span><span lang="en">left hand rotation angle</span></td>
							<td>
							<input class="paramF" type="number" min="-90" max="90" value="0"/>
							</td>
						</tr>
					</table>
				</div>

			</div>
		</div>
	</div>
	<div id="colorParam">
		<br />
		<label style='margin:10px 0;' ><span lang="fr">Charger maillage (.off):</span><span lang="en">Load mesh file (.off):</span>
			<input id="file" type="file" onchange="submitLocalFile()">
		</label>
		<br />
		<input type="hidden" id="lighting" checked />

		<input type="hidden" id="shininess" value="32.0" />

		<input type="hidden" id="lightPositionX" value="-10.0" />

		<input type="hidden" id="lightPositionY" value="4.0" />

		<input type="hidden" id="lightPositionZ" value="200.0" />

		<input type="hidden" id="specularR" value="0.8" />

		<input type="hidden" id="specularG" value="0.8" />

		<input type="hidden" id="specularB" value="0.8" />

		<input type="hidden" id="ambientR" value="0.2" />

		<input type="hidden" id="ambientG" value="0.2" />

		<input type="hidden" id="ambientB" value="0.2" />

		<input type="hidden" id="blending" checked />
		</br>
		<div style="text-align: center;">
			<button lang="en" style="width: 150px" id="" class="mybutton-1 saveOff" type="button" disabled>
				Save meshes
			</button>
			<button lang="fr" style="width: 150px" id="" class="mybutton-1 saveOff" type="button" disabled>
				Sauvegarder maillages
			</button>
			<img id="saveMesh" src="images/question-button.png" alt="?" class="help-button" title="FRA : Sauvegarde des maillages constituants les différents tissus foetaux ainsi que ceux se rapportant au reste de l'UFU si celle-ci a été générée.Le format de sauvegarde est le .off.">

		</div>
		<div id="fetal_tissues">

			<h3 lang="en">Modify Tissues' color</h3><h3 lang="fr">Modifier la couleur des tissus foetaux</h3>
			<table style="border: 0; padding: 10px; text-align: right;">
				<tr>
					<td>R: <td>
					<input style="width:60px;" type="number" id="diffuseR" value="0.8" step="0.05" max="1" min="0"/>
				</tr>
				<tr>
					<td>G: <td>
					<input style="width:60px;" type="number" id="diffuseG" value="0.8" step="0.05" max="1" min="0"/>
				</tr>
				<tr>
					<td>B: <td>
					<input style="width:60px;" type="number" id="diffuseB" value="0.8" step="0.05" max="1" min="0"/>
				</tr>

				<tr>
					<td><span lang="fr">Transparence</span><span lang="en">Transparency</span>: <td>
					<input style="width:60px;" type="number" id="alpha" value="0.5" step="0.05" max="1" min="0"/>
				</tr>
			</table>

			<div class="mycolorSelector1 mycolorSelector" id="col1">
				<p lang="en">
					Envelope
				</p>
				<p lang="fr">
					Enveloppe
				</p>
				<div style="background: #cc97be;"></div>
			</div>
			<div class="mycolorSelector2 mycolorSelector" id="col2">
				<p lang="en">
					Lungs
				</p>
				<p lang="fr">
					Poumons
				</p>
				<div style="background: #b0e0a6;"></div>
			</div>
			<div class="mycolorSelector3 mycolorSelector" id="col3">
				<p lang="en">
					Bones
				</p>
				<p lang="fr">
					Os
				</p>
				<div style="background: #e8b55d;"></div>
			</div>
			<div class="mycolorSelector4 mycolorSelector"  id="col4">
				<p lang="en">
					Brain
				</p>
				<p lang="fr">
					Tête
				</p>
				<div style="background: #b7eef0;"></div>
			</div>
			<div class="mycolorSelector5 mycolorSelector mydisabled" id="col5">
				<p lang="en">
					Amniotic Liquid
				</p>
				<p lang="fr">
					Liquide Amniotique
				</p>
				<div style="background: #ff9ef4;"></div>
			</div>
			<div class="mycolorSelector6 mycolorSelector mydisabled" id="col6">
				<p lang="en">
					Uterus
				</p>
				<p lang="fr">
					Utérus
				</p>
				<div style="background: #d9d9d9;"></div>
			</div>
		</div>
	</div>
</div>
<div id="closeParam">
	<img src="images/close-par.png" alt="close"  />
	<span class="hidden" lang="en">Hide Settings</span>
	<span class="hidden" lang="fr">Cache
		<br/>
		Configurations</span>
</div>
<div id="openParam">
	<img src="images/open-par.png" alt="open" />
	<span lang="en">Show Settings</span>
	<span lang="fr">Montre
		<br/>
		Configurations</span>
</div>