<h1 class="center">Forms</h1>
<p>Forms are a vital part of our UI for transacting client data. Elite UI allows you to rapidly build advanced, stylish, engaging forms that have an elegant extension for easy validation. See the next section below on how to apply data validation without adding Javascript!</p>

<div class="center">
	<div>
		<p>You can have multiple icons and single buttons in one form field... <a href="#" class="ewd button show fill float-right"><i class="code"></i></a></p>

		<pre class="mb"><code class="language-markup"><textarea>
<!-- This is a simple field with icons, a text label and even a button icon -->
<div class="ewd field">
	<i class="code"></i>
	<i class="gears"></i>
	<input name="name" type="text" placeholder="Test"/>
	<i>Text</i>
	<i class="code"></i>
	<a href="#/" class="ewd button label"><i class="pencil"></i>Edit</a>
</div></textarea></code></pre>
		<div class="mb">
			<div class="ewd field">
				<i class="code"></i>
				<i class="gears"></i>
				<input name="name" type="text" placeholder="Test"/>
				<i>Text</i>
				<i class="code"></i>
				<a href="#/" class="ewd button label"><i class="pencil"></i>Edit</a>
			</div>
		</div>
	</div>
	<div>
		<p class="mt">All fields are inline elements... <a href="#" class="ewd button show fill float-right"><i class="code"></i></a></p>
		<pre class="mb"><code class="language-markup"><textarea>
<!-- These fields will stack up against each other... -->
<div class="ewd field">
	<i class="user"></i>
	<input name="name" type="text" placeholder="Test"/>
</div>
<div class="ewd field">
	<i class="gears"></i>
	<input name="name" type="text" placeholder="Test"/>
</div></textarea></code></pre>
		<div class="mb">
			<div class="ewd field">
				<i class="user"></i>
				<input name="name" type="text" placeholder="Test"/>
			</div>
			<div class="ewd field">
				<i class="gears"></i>
				<input name="name" type="text" placeholder="Test"/>
			</div>
		</div>
	</div>
	<div>
		<p class="mt">Rounded field's... <a href="#" class="ewd button show fill float-right"><i class="code"></i></a></p>
		<pre class="mb"><code class="language-markup"><textarea>
<!-- By simply adding the class of rounded you will get a completely different looking field... -->
<div class="ewd field rounded">
	<i class="times-circle"></i>
	<input name="name" type="text" placeholder="Test"/>
</div></textarea></code></pre>
		<div class="mb">
			<div class="ewd field rounded">
				<i class="times-circle"></i>
				<input name="name" type="text" placeholder="Test"/>
			</div>
		</div>
	</div>
	<div>
		<p>Fields can be fluid to fill the parent container... <a href="#" class="ewd button show fill float-right"><i class="code"></i></a></p>
		<pre class="mb"><code class="language-markup"><textarea>
<!-- By adding the fluid class your field will grow to fill the parents content area... -->
<div class="ewd field fluid">
	<a href="#/" class="ewd button label"><i class="pencil"></i>Edit</a>
	<input name="name" type="text" placeholder="Test"/>
	<i class="user"></i>
	<a href="#/" class="ewd button"><i class="search"></i></a>
</div></textarea></code></pre>
		<div class="mb">
			<div class="ewd field fluid">
				<a href="#/" class="ewd button label"><i class="pencil"></i>Edit</a>
				<input name="name" type="text" placeholder="Test"/>
				<i class="user"></i>
				<a href="#/" class="ewd button"><i class="search"></i></a>
			</div>
		</div>
	</div>
	<div>
		<p class="mt">You can also have fields with the fill and flat style's... <a href="#" class="ewd button show fill float-right"><i class="code"></i></a></p>
		<pre class="mb"><code class="language-markup"><textarea>
<!-- By adding the class of fill or flat you will get a completely different looking field... -->
<div class="ewd field fill">
	<i class="times-circle"></i>
	<input name="name" type="text" placeholder="Test"/>
</div>
<div class="ewd field flat">
	<i class="check-circle"></i>
	<input name="name" type="text" placeholder="Test"/>
</div>
<!--  Rounded fill and flat style's...  -->
<div class="ewd field rounded fill">
	<i class="times-circle"></i>
	<input name="name" type="text" placeholder="Test"/>
</div>
<div class="ewd field rounded flat">
	<i class="check-circle"></i>
	<input name="name" type="text" placeholder="Test"/>
</div></textarea></code></pre>
		<div class="mb">
			<div class="ewd field fill">
				<i class="times-circle"></i>
				<input name="name" type="text" placeholder="Test"/>
			</div>
			<div class="ewd field flat">
				<i class="check-circle"></i>
				<input name="name" type="text" placeholder="Test"/>
			</div>
			<div class="ewd field rounded fill">
				<i class="times-circle"></i>
				<input name="name" type="text" placeholder="Test"/>
			</div>
			<div class="ewd field rounded flat">
				<i class="check-circle"></i>
				<input name="name" type="text" placeholder="Test"/>
			</div>
		</div>
	</div>
	<div class="lmb">
		<p class="mt">All different colors, fill and flat style's as well... <a href="#" class="ewd button show fill float-right"><i class="code"></i></a></p>
		<pre class="mb"><code class="language-markup"><textarea>
<!-- Change the field color by adding the class of either invert, gray, yellow, red, green, blue... -->
<div class="ewd field [ invert, gray, yellow, red, green, blue ]">
	<i class="gear"></i>
	<input name="name" type="text" placeholder="Inverted"/>
</div>
<!-- Add the fill class which can also be used with a color class... -->
<div class="ewd field [ fill ] [ invert, gray, yellow, red, green, blue ]">
	<i class="gear"></i>
	<input name="name" type="text" placeholder="Inverted"/>
</div>
<!-- Add the flat class which can also be used with a color class... -->
<div class="ewd field [ flat ] [ invert, gray, yellow, red, green, blue ]">
	<i class="gear"></i>
	<input name="name" type="text" placeholder="Inverted"/>
</div></textarea></code></pre>
		<div class="ewd row desktop-3 noTableColor">
			<div>
				<div class="ewd field">
					<i class="gear"></i>
					<input name="name" type="text" placeholder="Default"/>
				</div>
				<br/>
				<br/>
				<div class="ewd field invert">
					<i class="gear"></i>
					<input name="name" type="text" placeholder="Inverted"/>
				</div>
				<br/>
				<br/>
				<div class="ewd field gray">
					<i class="edit"></i>
					<input name="name" type="text" placeholder="Gray"/>
				</div>
				<br/>
				<br/>
				<div class="ewd field yellow">
					<i class="exclamation-triangle"></i>
					<input name="calendar" type="text" placeholder="Yellow"/>
				</div>
				<br/>
				<br/>
				<div class="ewd field red">
					<i class="times-circle"></i>
					<input name="name" type="text" placeholder="Red"/>
				</div>
				<br/>
				<br/>
				<div class="ewd field green">
					<i class="bell"></i>
					<input name="name" type="text" placeholder="Green"/>
				</div>
				<br/>
				<br/>
				<div class="ewd field blue">
					<i class="twitter"></i>
					<input name="name" type="text" placeholder="Blue"/>
				</div>
			</div>
			<div>
				<div class="ewd field fill">
					<i class="gear"></i>
					<input name="name" type="text" placeholder="Default"/>
				</div>
				<br/>
				<br/>
				<div class="ewd field fill invert">
					<i class="gear"></i>
					<input name="name" type="text" placeholder="Inverted"/>
				</div>
				<br/>
				<br/>
				<div class="ewd field fill gray">
					<i class="edit"></i>
					<input name="name" type="text" placeholder="Gray"/>
				</div>
				<br/>
				<br/>
				<div class="ewd field fill yellow">
					<i class="exclamation-triangle"></i>
					<input name="calendar" type="text" placeholder="Yellow"/>
				</div>
				<br/>
				<br/>
				<div class="ewd field fill red">
					<i class="times-circle"></i>
					<input name="name" type="text" placeholder="Red"/>
				</div>
				<br/>
				<br/>
				<div class="ewd field fill green">
					<i class="bell"></i>
					<input name="name" type="text" placeholder="Green"/>
				</div>
				<br/>
				<br/>
				<div class="ewd field fill blue">
					<i class="twitter"></i>
					<input name="name" type="text" placeholder="Blue"/>
				</div>
			</div>
			<div>
				<div class="ewd field flat">
					<i class="gear"></i>
					<input name="name" type="text" placeholder="Default"/>
				</div>
				<br/>
				<br/>
				<div class="ewd field flat invert">
					<i class="gear"></i>
					<input name="name" type="text" placeholder="Inverted"/>
				</div>
				<br/>
				<br/>
				<div class="ewd field flat gray">
					<i class="edit"></i>
					<input name="name" type="text" placeholder="Gray"/>
				</div>
				<br/>
				<br/>
				<div class="ewd field flat yellow">
					<i class="exclamation-triangle"></i>
					<input name="calendar" type="text" placeholder="Yellow"/>
				</div>
				<br/>
				<br/>
				<div class="ewd field flat red">
					<i class="times-circle"></i>
					<input name="name" type="text" placeholder="Red"/>
				</div>
				<br/>
				<br/>
				<div class="ewd field flat green">
					<i class="bell"></i>
					<input name="name" type="text" placeholder="Green"/>
				</div>
				<br/>
				<br/>
				<div class="ewd field flat blue">
					<i class="twitter"></i>
					<input name="name" type="text" placeholder="Blue"/>
				</div>
			</div>
		</div>
	</div>

	<!--<p>You can also have select fields as well...</p>

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
	</div>-->

</div>