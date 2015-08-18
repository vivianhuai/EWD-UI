<h1 class="center">Forms</h1>
<p>Forms are a vital part of our UI for transacting client data. Elite UI allows you to rapidly build advanced, stylish, engaging forms that have an elegant extension for easy validation. See the next section below on how to apply data validation without adding Javascript!</p>

<div class="center">

	<p>You can have multiple icons and single buttons in one form field...</p>

	<div class="mb">
		<div class="ewd field">
			<i class="code"></i>
			<i class="gears"></i>
			<input name="name" type="text" placeholder="Test"/>
			<i class="user"></i>
			<i class="code"></i>
			<a href="#/" class="ewd button label"><i class="pencil"></i>Edit</a>
		</div>
	</div>

	<p class="mt">All fields are inline elements...</p>

	<div class="mb">
		<div class="ewd field">
			<i class="times-circle"></i>
			<input name="name" type="text" placeholder="Test"/>
		</div>
		<div class="ewd field">
			<i class="check-circle"></i>
			<input name="name" type="text" placeholder="Test"/>
		</div>
	</div>

	<p>Fields can be fluid to fill the parent container...</p>

	<div class="mb">
		<div class="ewd field fluid">
			<a href="#/" class="ewd button label"><i class="pencil"></i>Edit</a>
			<input name="name" type="text" placeholder="Test"/>
			<i class="user"></i>
			<a href="#/" class="ewd button"><i class="search"></i></a>
		</div>
	</div>

	<p>You can also have select fields as well...</p>

	<div class="mb">
		<div class="ewd field">
			<i class="gears"></i>
			<select>
			  <option value="volvo">Volvo</option>
			  <option value="saab">Saab</option>
			  <option value="opel">Opel</option>
			  <option value="audi">Audi</option>
			</select>
			<i class="search"></i>
		</div>
	</div>

	<p>Basic check boxes and radio buttons (Fallback support for IE9 and below)...</p>
	
	<div class="mb">
		<label for="c1">
			<input type="checkbox" id="c1" name="cc" />
			Check Input
		</label>
		<br/>
		<label for="rc">
			<input type="radio" id="r1" name="rc" />
			Radio Input
		</label>
	</div>

	<p>Groups of checkboxes and radio buttons...</p>

</div>