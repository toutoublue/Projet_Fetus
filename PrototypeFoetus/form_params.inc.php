		<div id="parameter" >
			<form method="post" id="params">
				<h2 style="text-align: left">Parameters:</h2>

				<div id="parameter_button">
					
					<button id="loadParams" class="button" type="button">
						Load Existing Parameters
					</button>
					<br/>		
					<button id="saveParams" class="button" type="button">
						Save Existing Parameters
					</button>
					<br/>
					<button class="button" type="button">
						Generate Skeleton
					</button></br>
					<button class="button" type="button">
						Preview Envelope
					</button></br>
					<button class="button" type="button">
						Generate Fetus
					</button></br>
				</div>

				<div id="age">
					<span style="color: rgb(139, 226, 247);">Foetus age</span>
					<input type="range" name="age" id="age_input" value="32" min="24" max="32" step="1" />
					</br><label id="age_show" >32</label>
				</div>

				<div id="Tab">
					<div class="Menubox">
						<table>
							<th id="menu1" >Legs Parameters</th>
							<th id="menu2" >Arms Parameters</th>
							<th id="menu3" >Head Parameters</th>
						</table>
					</div>

					<div class="Contentbox">

						<div id="param_legs">
							<table>
								<tr>
									<td>angle femur droit sagittal</td>
									<td>
									<input type="number" value="10" min="-360" max="360"/>
									</td>
								</tr>
								<tr>
									<td>angle femur droit coronal</td>
									<td>
									<input type="number" value="10" min="-360" max="360"/>
									</td>
								</tr>
								<tr>
									<td>angle rotation femur droit</td>
									<td>
									<input type="number" min="-360" max="360" value="-20" />
									</td>
								</tr>
								<tr>
									<td>angle femur gauche sagittal</td>
									<td>
									<input type="number" min="-360" max="360" value="120"/>
									</td>
								</tr>
								<tr>
									<td>angle femur gauche coronal</td>
									<td>
									<input type="number" min="-360" max="360" value="10"/>
									</td>
								</tr>
								<tr>
									<td>angle rotation femur gauche</td>
									<td>
									<input type="number" min="-360" max="360" value="0"/>
									</td>
								</tr>
								<tr>
									<td>angle de pliure du genou droit</td>
									<td>
									<input type="number" min="-360" max="360" value="120"/>
									</td>
								</tr>
								<tr>
									<td>angle de pliure du genou gauche</td>
									<td>
									<input type="number" min="-360" max="360" value="10"/>
									</td>
								</tr>
								<tr>
									<td>angle tibia/pied droit</td>
									<td>
									<input type="number" min="-360" max="360" value="0"/>
									</td>
								</tr>
								<tr>
									<td>angle tibia/pied gauche</td>
									<td>
									<input type="number" min="-360" max="360" value="50"/>
									</td>
								</tr>
								<tr>
									<td>anle rotation pied droit</td>
									<td>
									<input type="number" min="-360" max="360" value="50"/>
									</td>
								</tr>
								<tr>
									<td>anle rotation pied gauche</td>
									<td>
									<input type="number" min="-360" max="360" value="90"/>
									</td>
								</tr>
							</table>
						</div>

						<div id="param_arms">
							<table>
								<tr>
									<td>angle humerus droit sagittal</td>
									<td>
									<input type="number" min="-360" max="360" value="90"/>
									</td>
								</tr>
								<tr>
									<td>angle humerus gauche sagittal</td>
									<td>
									<input type="number" min="-360" max="360" value="0"/>
									</td>
								</tr>
								<tr>
									<td>angle humerus droit coronal</td>
									<td>
									<input type="number" min="-360" max="360" value="0"/>
									</td>
								</tr>
								<tr>
									<td>angle humerus gauche coronal</td>
									<td>
									<input type="number" min="-360" max="360" value="0"/>
									</td>
								</tr>
								<tr>
									<td>angle rotation humerus droit</td>
									<td>
									<input type="number" min="-360" max="360" value="0"/>
									</td>
								</tr>
								<tr>
									<td>angle rotation humerus gauche</td>
									<td>
									<input type="number" min="-360" max="360" value="20"/>
									</td>
								</tr>
								<tr>
									<td>angle de pliure du coude droit</td>
									<td>
									<input type="number" min="-360" max="360" value="20"/>
									</td>
								</tr>
								<tr>
									<td>angle de pliure du coude gauche</td>
									<td>
									<input type="number" min="-360" max="360" value="0"/>
									</td>
								</tr>
								<tr>
									<td>angle main/cubitus droit</td>
									<td>
									<input type="number" min="-360" max="360" value="0"/>
									</td>
								</tr>
								<tr>
									<td>angle main/cubitus gauche</td>
									<td>
									<input type="number" min="-360" max="360" value="80"/>
									</td>
								</tr>
								<tr>
									<td>anle rotation main droit</td>
									<td>
									<input type="number" min="-360" max="360" value="80"/>
									</td>
								</tr>
								<tr>
									<td>anle rotation main gauche</td>
									<td>
									<input type="number" min="-360" max="360" value="180"/>
									</td>
								</tr>
							</table>
						</div>

						<div id="param_head">
							<table>
								<tr>
									<td>angle tete sagittal</td>
									<td>
									<input type="number" min="-360" max="360" value="180"/>
									</td>
								</tr>
								<tr>
									<td>angle tete coronal</td>
									<td>
									<input type="number" min="-360" max="360" value="0"/>
									</td>
								</tr>
								<tr>
									<td>angle tete axial</td>
									<td>
									<input type="number" min="-360" max="360" value="0"/>
									</td>
								</tr>
							</table>
						</div>
					</div>
				</div>

			</form>
		</div>
		<div style="clear: both;"></div>