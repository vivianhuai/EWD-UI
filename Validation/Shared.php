<h1 class="center">Strict Validation</h1>
<p>Elite UI extends the simple form with advanced validation and there's no need for you to write any Javascript! All validation is strictly applied which'll prevent the user from inputting invalid data into a field. Truly this is modelled after the AngularJS type of validation with no Javascript having to be written at all!</p>
<div class="ewd row desktop-2 padding-desktop-55 padding-massive-35 huge-1" style="border:none; padding:0;">
	<div class="center" style="border:none;">
		<p>Text &amp; special characters only:</p>
		<div class="ewd field fluid mb">
			<i class="font"></i>
			<input name="name" type="text" data-text="true"/>
		</div>
		<p>Text [A to Z] [0 to 9] characters only:</p>
		<div class="ewd field fluid mb">
			<i class="font"></i>
			<input name="name" type="text" data-pure-text="true"/>
		</div>
		<p>Purist text [A to Z] characters only:</p>
		<div class="ewd field fluid mb">
			<i class="font"></i>
			<input name="name" type="text" data-purist-text="true"/>
		</div>
		<p>Max [5] length:</p>
		<div class="ewd field fluid mb">
			<i class="text-width"></i>
			<input name="name" type="text" data-max-length="5"/>
		</div>
		<p>Min [5] length:</p>
		<div class="ewd field fluid mb">
			<i class="minus"></i>
			<input name="name" type="text" data-min-length="5"/>
		</div>
		<p>Min [5] and max [10] length:</p>
		<div class="ewd field fluid mb">
			<i class="crop"></i>
			<input name="name" type="text" data-min-length="5" data-max-length="10"/>
		</div>
		<p>Lowercase only:</p>
		<div class="ewd field fluid mb">
			<i class="level-down"></i>
			<input name="name" type="text" data-lowercase="true" />
		</div>
		<p>Uppercase only:</p>
		<div class="ewd field fluid mb">
			<i class="text-height"></i>
			<input name="name" type="text" data-uppercase="true" />
		</div>
		<p>No whitespace:</p>
		<div class="ewd field fluid mb">
			<i class="lock"></i>
			<input name="name" type="text" data-nospaces="true" />
		</div>
	</div>
	<div class="center" style="border:none;">
		<p>Integer only:</p>
		<div class="ewd field fluid mb">
			<i>1</i>
			<input name="name" type="text" data-int="true" />
		</div>
		<p>Floating point number:</p>
		<div class="ewd field fluid mb">
			<i>1.0</i>
			<input name="name" type="text" data-float="true" />
		</div>
		<p>Max number:</p>
		<div class="ewd field fluid mb">
			<i>500</i>
			<input name="name" type="text" data-float="true" data-max-number="500" />
		</div>
		<p>Min number:</p>
		<div class="ewd field fluid mb">
			<i>200</i>
			<input name="name" type="text" data-float="true" data-min-number="200" />
		</div>
		<p>Min and max floating point numbers:</p>
		<div class="ewd field fluid mb">
			<i>200.5 - 500.7</i>
			<input name="name" type="text" data-float="true" data-min-number="200.5" data-max-number="500.7" />
		</div>
	</div>
</div>