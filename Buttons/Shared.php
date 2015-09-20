<h1 class="center">Buttons</h1>
<p>We’ve remastered buttons that are now simplistic and minimal in markup. No more remembering twenty to fifty different combinations, with just a little DOM you can easily produce a range of button combinations.</p>
<div class="center stoptrigger mt lmb">

	<div>

		<div class="mb"><a href="#/" class="ewd button small fill float-right show"><i class="code"></i></a>Single buttons...</div>

		<pre class="mb"><code class="language-markup"><textarea>
<!-- Single buttons use anchor's which must have the classes ewd and buttons.
All other classes are optional -->

<a href="#/" class="ewd button"><i class="pencil"></i></a>
<a href="#/" class="ewd button label"><i class="pencil"></i>Edit</a>
<a href="#/" class="ewd button label right"><i class="pencil"></i>Edit</a>
<a href="#/" class="ewd button">Text</a></textarea></code></pre>

		<a href="#/" class="ewd button"><i class="pencil"></i></a>
		<a href="#/" class="ewd button label"><i class="pencil"></i>Edit</a>
		<a href="#/" class="ewd button label right"><i class="pencil"></i>Edit</a>
		<a href="#/" class="ewd button">Text</a>

	</div>

	<div class="mt">

		<div class="mb"><a href="#/" class="ewd button small fill float-right show"><i class="code"></i></a>Single group of buttons...</div>

	<pre class="mb"><code class="language-markup"><textarea>
<!-- To create a group of buttons first create a div which must have the classes ewd and buttons.
Inside of the div we have anchors which are the individual buttons that make up the group.
You can have all kinds of different button combinations in a single group. -->

<!-- You optionally can define a vertical break point at any of the six resolutions to stack the buttons vertically. -->

<div class="ewd buttons 
	[ vertical-tiny vertical-small vertical-medium vertical-large vertical-huge vertical-massive ]">
	<a class="label" href="#/"><i class="align-left"></i>Left</a>
	<a href="#/"><i class="align-center"></i></a>
	<a class="label right" href="#/"><i class="align-right"></i>Right</a>
</div></textarea></code></pre>

		<div class="ewd buttons vertical-small">
			<a class="label" href="#/"><i class="align-left"></i>Left</a>
			<a href="#/"><i class="align-center"></i></a>
			<a class="label right" href="#/"><i class="align-right"></i>Right</a>
		</div>

	</div>

	<div class="mt">

		<div class="mb"><a href="#/" class="ewd button small fill float-right show"><i class="code"></i></a>You can group, groups of buttons...</div>

		<pre class="mb"><code class="language-markup"><textarea>
<!-- Group's of grouped buttons are extremely flexible including breaking and vertical stacking.
First we have the main div which must have the classes ewd and buttons.
The optional break and vertical classes target all six resolutions.
Break will break up the entire group into smaller single groups.
Vertical will target all group's, vertically stacking the buttons at the specified resolution. -->

<div class="ewd buttons 
	[ break-tiny ... break-massive ] 
	[ vertical-tiny ... vertical-massive ]">
	<!-- Next the inner div is a single button group container. -->
	<div>
		<!-- Finally the anchors which are the buttons within the group. -->
		<a href="#/"><i class="sort-amount-asc"></i></a>
		<a href="#/"><i class="sort-amount-desc"></i></a>
		<a href="#/"><i class="sort-alpha-asc"></i></a>
		<a href="#/"><i class="sort-alpha-desc"></i></a>
	</div>
	<!-- Second group. -->
	<div>
		<!-- Just like a single group you can have multiple button combinations. -->
		<a class="label" href="#/"><i class="home"></i>Left</a>
		<a class="label" href="#/"><i class="cloud"></i>Icon</a>
	</div>
	<!-- Third group. -->
	<div>
		<!-- Here's a group consisting of two right label buttons. -->
		<a class="label right green" href="#/"><i class="bullseye"></i>Right</a>
		<a class="label right" href="#/"><i class="briefcase"></i>Icon</a>
	</div>
</div></textarea></code></pre>

		<div class="ewd buttons break-huge vertical-medium">
			<div>
				<a href="#/"><i class="sort-amount-asc"></i></a>
				<a href="#/"><i class="sort-amount-desc"></i></a>
				<a href="#/"><i class="sort-alpha-asc"></i></a>
				<a href="#/"><i class="sort-alpha-desc"></i></a>
			</div>
			<div>
				<a class="label" href="#/"><i class="home"></i>Left</a>
				<a class="label" href="#/"><i class="cloud"></i>Icon</a>
			</div>
			<div>
				<a class="label right green" href="#/"><i class="bullseye"></i>Right</a>
				<a class="label right" href="#/"><i class="briefcase"></i>Icon</a>
			</div>
		</div>

	</div>

	<div class="mt">

		<div class="mb"><a href="#/" class="ewd button small fill float-right show"><i class="code"></i></a>Change the color scheme of buttons, groups and groups of grouped buttons...</div>

		<pre class="mb"><code class="language-markup"><textarea>
<!-- Change the color scheme by adding the class gray, invert, yellow, red, green or blue.
Here's a single labeled button with a yellow color scheme. -->
<a href="#/" class="ewd button label yellow"><i class="gratipay"></i>Yellow</a>

<!-- Next we can change the color scheme of a group of buttons. -->
<div class="ewd buttons yellow">
	<a class="label" href="#/"><i class="align-left"></i>Left</a>
	<a href="#/"><i class="align-center"></i></a>
	<a class="label right" href="#/"><i class="align-right"></i>Right</a>
</div>

<!-- Finally we can change the color scheme of groups of grouped buttons. -->
<div class="ewd buttons yellow">
	<div>
		<a href="#/"><i class="sort-amount-asc"></i></a>
		...
	</div>
	<div>
		...
	</div>
</div>

</textarea></code></pre>

		<a href="#/" class="ewd button label"><i class="gratipay"></i>Default</a>
		<a href="#/" class="ewd button label gray"><i class="github-square"></i>Gray</a>
		<a href="#/" class="ewd button label invert"><i class="reply-all"></i>Inverted</a>
		<a href="#/" class="ewd button label yellow"><i class="warning"></i>Yellow</a>
		<a href="#/" class="ewd button label red"><i class="exclamation-circle"></i>Red</a>
		<a href="#/" class="ewd button label green"><i class="check-circle-o"></i>Green</a>
		<a href="#/" class="ewd button label blue"><i class="twitter"></i>Blue</a>

	</div>

	<div class="mt">

		<div class="mb"><br/><a href="#/" class="ewd button small fill float-right show"><i class="code"></i></a>Fill color scheme...</div>

		<pre class="mb"><code class="language-markup"><textarea>
<!-- By using the combination of class fill with a color class we get a varied effect.
Here's a single labeled button with a filled yellow color scheme. -->
<a href="#/" class="ewd button label fill yellow"><i class="gratipay"></i>Yellow</a>

<!-- Next we can also apply this to a single group. -->
<div class="ewd buttons fill yellow">
	<a class="label" href="#/"><i class="align-left"></i>Left</a>
	<a href="#/"><i class="align-center"></i></a>
	<a class="label right" href="#/"><i class="align-right"></i>Right</a>
</div>

<!-- Finally we can also apply this to groups of grouped buttons. -->
<div class="ewd buttons fill yellow">
	<div>
		<a href="#/"><i class="sort-amount-asc"></i></a>
		...
	</div>
	<div>
		...
	</div>
</div></textarea></code></pre>

		<a href="#/" class="ewd button label fill"><i class="gratipay"></i>Default</a>
		<a href="#/" class="ewd button label fill gray"><i class="github-square"></i>Gray</a>
		<a href="#/" class="ewd button label fill invert"><i class="reply-all"></i>Inverted</a>
		<a href="#/" class="ewd button label fill yellow"><i class="warning"></i>Yellow</a>
		<a href="#/" class="ewd button label fill red"><i class="exclamation-circle"></i>Red</a>
		<a href="#/" class="ewd button label fill green"><i class="check-circle-o"></i>Green</a>
		<a href="#/" class="ewd button label fill blue"><i class="twitter"></i>Blue</a>

	</div>

	<div class="mt">

		<div class="mb"><a href="#/" class="ewd button small fill float-right show"><i class="code"></i></a>Optionally rounded...</div>

		<pre class="mb"><code class="language-markup"><textarea>
<!-- By adding the class rounded we can round the edges of a single button, 
group of buttons or group of grouped buttons.
Here's an example of a single button. -->
<a href="#/" class="ewd button rounded"><i class="pencil"></i></a>


<!-- We can also use the same class on a single group of buttons.
Note that vertical stacking will disable rounded corners. -->
<div class="ewd buttons rounded">
	...
</div>

<!-- Also we can round the corners of groups of grouped buttons.
Also if you break the groups up this will also work.
Note that vertical stacking will disable rounded corners. -->
<div class="ewd buttons rounded">
	<div>
		...
	</div>
	<div>
		...
	</div>
</div></textarea></code></pre>

		<a href="#/" class="ewd button rounded"><i class="pencil"></i></a>
		<div class="ewd buttons rounded">
			<a href="#/" class="label"><i class="pencil"></i>Edit</a>
			<a href="#/" class="label right"><i class="pencil"></i>Edit</a>
		</div>

	</div>

	<div class="mt">

		<div class="mb"><a href="#/" class="ewd button small fill float-right show"><i class="code"></i></a>Optionally animated...</div>

		<pre class="mb"><code class="language-markup"><textarea>
<!-- We can use the class animate on either a button, group of buttons, or groups of grouped buttons.
This will animate labeled icons in and out of view. -->
<a href="#/" class="ewd button fill gray label animate"><i class="pencil"></i>Edit</a>

<!-- Animate a group of buttons -->
<div class="ewd buttons fill gray animate">
	<a href="#/" class="label"><i class="pencil"></i>Edit</a>
	...
</div>

<!-- Animate labeled icons within group's of grouped buttons. -->
<div class="ewd buttons animate">
	<div>
		<a href="#/" class="label"><i class="pencil"></i>Edit</a>
		...
	</div>
	<div>
		...
	</div>
</div></textarea></code></pre>

		<a href="#/" class="ewd button fill gray label animate"><i class="pencil"></i>Edit</a>
		<div class="ewd buttons fill gray animate">
			<a href="#/" class="label"><i class="pencil"></i>Edit</a>
			<a href="#/" class="label right"><i class="pencil"></i>Edit</a>
		</div>

	</div>

	<div class="mt">

		<div class="mb"><a href="#/" class="ewd button small fill float-right show"><i class="code"></i></a>Optionally disabled...</div>

		<pre class="mb"><code class="language-markup"><textarea>
<!-- You can add the class disabled to a single button, group of buttons and group of grouped buttons.
This will stop all events on anchor's via CSS. -->
<a href="#/" class="ewd button label disabled"><i class="bell"></i>Disabled</a>

<!-- Disable a group of buttons. -->
<div class="ewd buttons disabled">
	<a href="#/" class="label"><i class="inbox"></i>Stop</a>
	<a href="#/" class="label right"><i class="cloud-upload"></i>Stop</a>
</div>

<!-- Disable groups of grouped buttons. -->
<div class="ewd buttons disabled">
	<div>
		...
	</div>
	<div>
		...
	</div>
</div></textarea></code></pre>

		<a href="#/" class="ewd button label disabled"><i class="bell"></i>Disabled</a>
		<div class="ewd buttons disabled">
			<a href="#/" class="label"><i class="inbox"></i>Stop</a>
			<a href="#/" class="label right"><i class="cloud-upload"></i>Stop</a>
		</div>

	</div>

	<div class="mt">

		<div class="mb"><a href="#/" class="ewd button small fill float-right show"><i class="code"></i></a>Various sizes with optional animation...</div>

		<pre class="mb"><code class="language-markup"><textarea>
<!-- The default size doesn't require any class.
However you also have 3 other sizes massive, large and small.
These sizes can be on a single button, group of buttons or group of grouped buttons.
All sizes can be optionally animated. -->

<a href="#/" class="ewd button [ massive large small ] [ animate ] label "><i class="bell"></i>Size</a>

<!-- Group of buttons. -->
<div class="ewd buttons [ massive large small ] [ animate ] "></div>

<!-- Group of grouped buttons. -->
<div class="ewd buttons [ massive large small ] [ animate ]">
	<div>
		...
	</div>
	<div>
		...
	</div>
</div></textarea></code></pre>

		<a href="#/" class="ewd button label "><i class="bell"></i>Default</a>
		<a href="#/" class="ewd button label right"><i class="bell"></i>Default</a><br class="tablet break"/> 
		<a href="#/" class="ewd button label animate"><i class="bell"></i>Default</a>
		<a href="#/" class="ewd button label animate right"><i class="bell"></i>Default</a>
		<br/><br/>
		<a href="#/" class="ewd button label massive"><i class="bell"></i>Massive</a>
		<a href="#/" class="ewd button label right massive"><i class="bell"></i>Massive</a><br class="tablet break"/> 
		<a href="#/" class="ewd button label animate massive"><i class="bell"></i>Massive</a>
		<a href="#/" class="ewd button label animate massive right"><i class="bell"></i>Massive</a>
		<br/><br/>
		<a href="#/" class="ewd button label large"><i class="bell"></i>Large</a>
		<a href="#/" class="ewd button label right large"><i class="bell"></i>Large</a><br class="tablet break"/>
		<a href="#/" class="ewd button label animate large"><i class="bell"></i>Large</a>
		<a href="#/" class="ewd button label right animate large"><i class="bell"></i>Large</a>
		<br/><br/>
		<a href="#/" class="ewd button label small"><i class="bell"></i>Small</a>
		<a href="#/" class="ewd button label right small"><i class="bell"></i>Small</a><br class="tablet break"/>
		<a href="#/" class="ewd button label animate small"><i class="bell"></i>Small</a>
		<a href="#/" class="ewd button label right animate small"><i class="bell"></i>Small</a>

	</div>

	<div class="mt">
		
		<div class="mb"><a href="#/" class="ewd button small fill float-right show"><i class="code"></i></a>Toggle buttons, groups and groups of buttons...</div>

		<pre class="mb"><code class="language-markup"><textarea>
<!-- Toggle a single button with animation. -->
<a href="#/" class="ewd button fill gray label animate toggle"><i class="pencil"></i>Toggle</a>

<!-- Toggle buttons with animation in a single group. -->
<div class="ewd buttons fill gray animate toggle">
	<a href="#/" class="label"><i class="pencil"></i>Option 1</a>
	<a href="#/" class="label right"><i class="pencil"></i>Option 2</a>
</div>

<!-- Toggle groups of grouped buttons with animation. -->
<div class="ewd buttons fill gray animate">
	<div>
		...
	</div>
	<div>
		...
	</div>
</div></textarea></code></pre>

		<a href="#/" class="ewd button fill gray label animate toggle"><i class="pencil"></i>Toggle</a>

		<div class="ewd buttons fill gray animate toggle">
			<a href="#/" class="label"><i class="pencil"></i>G1</a>
			<a href="#/" class="label right"><i class="pencil"></i>G2</a>
		</div>

		<br/>
		<br/>

		<div class="ewd buttons fill gray animate toggle">
			<div>
				<a href="#/" class="label"><i class="pencil"></i>Opt 1</a>
				<a href="#/" class="label right"><i class="pencil"></i>Opt 2</a>
			</div>
			<div>
				<a href="#/" class="label"><i class="pencil"></i>Opt 3</a>
				<a href="#/" class="label right"><i class="pencil"></i>Opt 4</a>
			</div>
		</div>

	</div>

</div>