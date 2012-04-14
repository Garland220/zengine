<?php

?>
<br />
<center id="characterSheet">
<table id="">
	<tr rowspan="2">
		<td colspan="4">
			<table id="characterHeader">
				<tr>
					<td colspan="2"><input type="text" id="name" name="name" /></td>
					<td colspan="2"><input type="text" id="player" name="player" /></td>
					<td><input type="text" id="skillGained" name="skillGained" style="width: 100px;" /></td>
					<td><input type="text" id="skillSpent" name="skillSpent" style="width: 100px;" /></td>
					<td><input type="text" id="skillSpent" name="skillSpent" style="width: 100px;" /></td>
				</tr>
				<tr class="labels">
					<td colspan="2"><label for="name">Character Name</label></td>
					<td colspan="2"><label for="player">Player Name</label></td>
					<td><label for="skillGained">Skill Points Gained</label></td>
					<td><label for="SkillGained">Skill Points Spent</label></td>
					<td><label for="SkillGained">Skill Points Left</label></td>
				</tr>
				<tr>
					<td><input type="text" id="gender" name="gender" placeholder="e.g: Male" style="width: 85px;" /></td>
					<td><input type="text" id="age" name="age" placeholder="e.g: 17" style="width: 50px;" /></td>
					<td><input type="text" id="height" name="height" placeholder="e.g: 5&#039;3&quot;" style="width: 65px;" /></td>
					<td><input type="text" id="weight" name="weight" placeholder="e.g: 140lbs" style="width: 65px;" /></td>
					<td><input type="text" id="skinColor" name="skinColor" placeholder="e.g: Tan" style="width: 100px;" /></td>
					<td><input type="text" id="hairColor" name="hairColor" placeholder="e.g: Blonde" style="width: 100px;" /></td>
					<td><input type="text" id="eyeColor" name="eyeColor" placeholder="e.g: Blue" style="width: 100px;" /></td>
				</tr>
				<tr class="labels">
					<td><label for="age">Gender</label></td>
					<td><label for="age">Age</label></td>
					<td><label for="age">Height</label></td>
					<td><label for="age">Weight</label></td>
					<td><label for="skinColor">Skin Color</label></td>
					<td><label for="hairColor">Hair Color</label></td>
					<td><label for="eyeColor">Eye Color</label></td>
				</tr>
			</table>
		</td>
	</tr>
	<tr>
		<td style="" width="180">
			<table class="characterStats" cellspacing="0" style="">
				<tr class="labels" style="text-align: center;">
					<th>Stat</th>
					<th>Score</th>
					<th>Mod</th>
					<th>Bonus</th>
				</tr>
				<tr>
					<td><div class="label">Body</div></td>
					<td><input type="text" class="stat" id="bodyScore" name="bodyScore" placeholder="0" maxlength="4" /></td>
					<td><input type="text" class="stat" placeholder="0" maxlength="4" /></td>
					<td><input type="text" class="stat" placeholder="0" maxlength="4" /></td>
				</tr>
				<tr>
					<td><div class="label">Mind</div></td>
					<td><input type="text" class="stat" id="mindScore" name="mindScore" placeholder="0" maxlength="4" /></td>
					<td><input type="text" class="stat" placeholder="0" maxlength="4" /></td>
					<td><input type="text" class="stat" placeholder="0" maxlength="4" /></td>
				</tr>
				<tr>
					<td><div class="label">Agility</div></td>
					<td><input type="text" class="stat" id="agilityScore" name="agilityScore" placeholder="0" maxlength="4" /></td>
					<td><input type="text" class="stat" placeholder="0" maxlength="4" /></td>
					<td><input type="text" class="stat" placeholder="0" maxlength="4" /></td>
				</tr>
			</table>
		</td>
		<td>
			<table class="characterStats" cellspacing="0" style="">
				<tr class="labels" style="text-align: center;">
					<td>
						<div>Max</div>
						<div>Current</div>
						<div>Max</div>
						<div>Current</div>
					</td>
				</tr>
				<tr>
					<td>
						<div class="label">HP</div>
						<input type="text" class="stat" id="hpMax" name="hpMax" placeholder="0" maxlength="4" />
						<input type="text" class="stat" id="hpCurrent" name="hpCurrent" placeholder="0" maxlength="4" />
						<div class="label">OPP</div>
						<input type="text" class="stat" id="oppMax" name="oppMax" placeholder="0" maxlength="4" />
						<input type="text" class="stat" id="oppCurrent" name="oppCurrent" placeholder="0" maxlength="4" />
					</td>
				</tr>
				<tr>
					<td>
						<div class="label">AC</div>
						<input type="text" class="stat" placeholder="10" maxlength="4" />
						<div> = 10</div>
						<div> + <input type="text" class="stat" id="armorAC" name="armorAC" placeholder="0" maxlength="4" /></div>
						<div> + <input type="text" class="stat" id="shieldAC" name="shieldAC" placeholder="0" maxlength="4" /></div>
						<div> + <input type="text" class="stat" id="sizeAC" name="sizeAC" placeholder="0" maxlength="4" /></div>
						<div> + <input type="text" class="stat" id="miscAC" name="miscAC" placeholder="0" maxlength="4" /></div>
				</tr>
				<tr class="labels" style="text-align: center;">
					<th></th>
					<th>Total</th>
					<th></th>
					<th>Armor</th>
					<th>Shield</th>
					<th>Size</th>
					<th>Misc</th>
				</tr>
			</table>
		</td>
	</tr>
	<tr>
		<td valign="top">
			<div class="label">Feats</div>
			<div>
				<ul id="skills">
					
				</ul>
			</div>
		</td>
		<td valign="top">
			<div class="label">Inventory</div>
			<ul id="inventory"></ul>
			<br class="clear" />
			<br />
			<div id="Weight" class="labels" style="text-align: right;">Total Weight: <span id="currentTotalWeight">0</span> lbs</div>
		</td>
	</tr>
	<tr>
		<td valign="top" colspan="2">
			<div class="label">Skills</div>
			<div>
				<ul id="skills">
					
				</ul>
			</div>
		</td>
	</tr>
	<tr>
		<td colspan="2"><br />
			<textarea placeholder="description" id="characterDescription" style="width: 700px; height: 200px;"></textarea>
		</td>
	</tr>
	<tr>
		<td>
			<input type="button" id="saveCharacter" name="saveCharacter" style="border:1px solid black; background: #ccc;" value="save" />
		</td>
	</tr>
</table>
</center>
<br />