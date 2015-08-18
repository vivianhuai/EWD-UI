<h1 class="center">Grid System</h1>

<p>The grid system provides a standard grid, divisional grid and a table layout grid. The traditional grid is defined by the main parent and then child elements have classes applied to them for their column span. We also have divisional grids and grid rows that divide the child columns up for different resolutions. The table layout grid which does require DOM breakpoints allows advanced alignment that could not have been done with traditional methods such as matching column heights and vertical content alignment.</p>

<div class="center no-margin">
	<div>

		<p>Here's a grid system that only uses three resolutions but you can have up to six resolutions if you wish...</p>
		
		<a href="#" class="ewd button show label"><i class="code"></i>View Source</a>

		<pre><code class="language-markup"><textarea>
<!-- You must apply the ewd and grid classes, default grid span column is 16 -->
<div class="ewd grid [ desktop-1 ... desktop-16 ] 
			  [ massive-1 ... massive-15 ]
			  [ huge-1 ... huge-15 ]
			  [ large-1 ... large-15 ]
			  [ medium-1 ... medium-15 ]
			  [ small-1 ... small-15 ]
			  [ tiny-1 ... tiny-15 ]">
	<!-- Define your grid here... -->
</div>
<!-- The code here -->
<div class="ewd grid desktop-16 massive-8 medium-4">
	<div class="row">
		<div></div>....
	</div>
</div></textarea></code></pre>

		<div class="mt ewd grid desktop-16 massive-8 medium-4">
			<div class="row">
				<div><br/></div>
				<div><br/></div>
				<div><br/></div>
				<div><br/></div>
				<div><br/></div>
				<div><br/></div>
				<div><br/></div>
				<div><br/></div>
				<div><br/></div>
				<div><br/></div>
				<div><br/></div>
				<div><br/></div>
				<div><br/></div>
				<div><br/></div>
				<div><br/></div>
				<div><br/></div>
			</div>
		</div>
	</div>
</div>

<div class="center">
	<div>
	
		<p>Here's a row that overrides the default division of the main grid...</p>

		<a href="#" class="ewd button show label"><i class="code"></i>View Source</a>

		<pre><code class="language-markup"><textarea>
<div class="ewd grid desktop-16 massive-8 medium-4">
	<div class="row">
		<div></div>...
	</div>
	<!-- Here is where we override the default grid, now desktop is 6, massive 2 and medium 1 -->
	<div class="row desktop-6 massive-2 medium-1">
		<div></div>...
	</div>
</div></textarea></code></pre>

		<div class="mt ewd grid desktop-16 massive-8 medium-4">
			<div class="row">
				<div><br/></div>
				<div><br/></div>
				<div><br/></div>
				<div><br/></div>
				<div><br/></div>
				<div><br/></div>
				<div><br/></div>
				<div><br/></div>
				<div><br/></div>
				<div><br/></div>
				<div><br/></div>
				<div><br/></div>
				<div><br/></div>
				<div><br/></div>
				<div><br/></div>
				<div><br/></div>
			</div>
			 <div class="row desktop-6 massive-2 medium-1">
				<div><br/></div>
				<div><br/></div>
				<div><br/></div>
				<div><br/></div>
				<div><br/></div>
				<div><br/></div>
			</div>
		</div>

	</div>
</div>

<div class="center">
	<div>
		
		<p>Next we have the ability to change the dimensions of the columns within the grid...</p>

		<a href="#" class="ewd button show label"><i class="code"></i>View Source</a>

		<pre><code class="language-markup"><textarea>
<div class="ewd grid">
	<div class="row">
		<div class="desktop-10 massive-5 medium-10"><br/></div>
		<div class="desktop-6 massive-10 medium-5"><br/></div>
	</div>
</div></textarea></code></pre>

		<div class="mt ewd grid">
			<div class="row">
				<div class="desktop-10 massive-5 medium-10"><br/></div>
				<div class="desktop-6 massive-10 medium-5"><br/></div>
			</div>
		</div>

	</div>
</div>

<div class="center">
	<div>
		
		<p>Finally, for the standard grid system you could just have a divisional row on it's own or define column specific sizes...</p>

		<a href="#" class="ewd button show label"><i class="code"></i>View Source</a>

		<pre><code class="language-markup"><textarea>
<!-- the row must have the ewd class -->
<div class="ewd row desktop-6 massive-3 medium-2">
	<div></div>...
</div>
<div class="ewd row">
	<div class="desktop-10 massive-5 medium-10"></div>
	<div class="desktop-6 massive-10 medium-5"></div>
</div></textarea></code></pre>

		<div class="mt ewd row desktop-6 massive-3 medium-2">
			<div><br/></div>
			<div><br/></div>
			<div><br/></div>
			<div><br/></div>
			<div><br/></div>
			<div><br/></div>
		</div>
		<br/>
		<div class="ewd row">
			<div class="desktop-10 massive-5 medium-10"><br/></div>
			<div class="desktop-6 massive-10 medium-5"><br/></div>
		</div>

	</div>
</div>

<div>
	<div>
		<hr class="lmt" />
		
		<h1 class="center">Padding</h1>
		
		<p>Padding is important for separating content between columns. Sometimes you require more or less padding and you may wish to change the padding depth depending upon different screen resolutions. You have a range in pixels with each value incremented by 5, so for example 10, 15, 20 ... all the way to ... 85. We're just using three resolutions with three padding options each, but in reality you have massive, huge, large, medium, small and tiny.</p>
		
		<div class="center">

			<div class="ewd buttons toggle" data-remove-class="padding-desktop-35 padding-desktop-45 padding-desktop-55">
				<i class="icon desktop"></i>
				<a data-class="padding-desktop-35" href="#">35</a>
				<a data-class="padding-desktop-45" href="#">45</a>
				<a data-class="padding-desktop-55" class="active" href="#">55</a>
			</div>

			<div class="ewd buttons toggle" data-remove-class="padding-massive-20 padding-massive-25 padding-massive-30">
				<i class="icon tablet"></i>
				<a data-class="padding-massive-20" href="#">20</a>
				<a data-class="padding-massive-25" class="active" href="#">25</a>
				<a data-class="padding-massive-30" href="#">30</a>
			</div>

			<div class="ewd buttons toggle" data-remove-class="padding-medium-10 padding-medium-15 padding-medium-20">
				<i class="icon mobile"></i>
				<a data-class="padding-medium-10" class="active" href="#">10</a>
				<a data-class="padding-medium-15" href="#">15</a>
				<a data-class="padding-medium-20" href="#">20</a>
			</div>

			<a href="#" class="ewd button show fill"><i class="code"></i></a>

		</div>

		<pre><code class="language-markup"><textarea>
<!-- Full grid example -->
<div class="ewd grid desktop-2 padding-desktop-55">
	<div class="row">
		<div></div>
		<div></div>
	</div>
	<!-- Row overide optional-->
	<div class="row padding-desktop-25">
		<!-- Cell overide as well -->
		<div class="padding-desktop-10"></div>
		<div></div>
	</div>
</div>
<!-- 
	Single grid row example.... 
-->
<div class="ewd row 
			desktop-4 padding-desktop-55 
			massive-2 padding-massive-25 
			medium-1 padding-medium-10">
	<div></div>
	<div></div>
	<!-- You may also overide padding via cells-->
	<div class="padding-desktop-10"></div>
	<div></div>
</div></textarea></code></pre>

		<div class="options">
			<div class="ewd row desktop-4 padding-desktop-55 massive-2 padding-massive-25 medium-1 padding-medium-10">
				<div><br/></div>
				<div><br/></div>
				<div><br/></div>
				<div><br/></div>
			</div>
		</div>

	</div>
</div>

<div>
	<div>
		
		<hr class="lmt" />
		
		<h1 class="center">Flex / Table Grid</h1>
		
		<p>The flex grid is extremely powerful for layouts in modern browsers with none of the drawbacks, even in older browsers with no JS! This works in all modern browsers except for opera mini and internet explorer 9, however the flex grid will fallback to the table layout automatically. This gives a very similar feel with the ability to align content vertically, match column heights, column pushing and padding to name a few but not as powerful as the flex API. Note the fallback requires extra DOM but it is optional.</p>

		<div>

			<div class="center">

				<p>No styling tricks here! Column heights match even when rows are divided up...</p>

				<a href="#" class="ewd button show label"><i class="code"></i>View Source</a>

			</div>

			<pre><code class="language-markup"><textarea>
<!-- You must provide classes for all six resolutions for fallback support.
If your just planning to only support the flex box model, you only need to include classes for specific resolutions-->
<div class="ewd grid flex desktop-4 massive-3 huge-2 medium-2 small-1 tiny-1">
	<div class="row">
		<div>Cell 1</div>
		<div class="break"></div>
		<!-- You must provide a break div for fallback support such as ie 10 & 9 -->
		<div>Cell 2</div>
		<div class="break"></div> ...
		<!-- For the last cell don't include break as it's not necessary -->
		<div>Cell 8</div>
	</div>
</div></textarea></code></pre>

			<div class="mt ewd grid flex desktop-4 massive-3 huge-2 medium-2 small-1 tiny-1">
				<div class="row">
					<div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce condimentum, diam sit amet ultricies ultricies, neque turpis maximus justo, sit amet ullamcorper ante mauris sed quam.</div>
					<div class="break"></div>
					<div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce condimentum</div>
					<div class="break"></div>
					<div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce condimentum</div>
					<div class="break"></div>
					<div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce condimentum</div>
					<div class="break"></div>
					<div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce condimentum</div>
					<div class="break"></div>
					<div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce condimentum, diam sit amet ultricies ultricies, neque turpis maximus justo, sit amet ullamcorper ante mauris sed quam.</div>
					<div class="break"></div>
					<div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce condimentum</div>
					<div class="break"></div>
					<div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce condimentum</div>
				</div>
			</div>

		</div>

	</div>
</div>

<div class="mt">
	<div>

		<p class="center">We can align content vertically even in the fallback grid system...</p>

		<div class="center"><a href="#" class="ewd button show label"><i class="code"></i>View Source</a></div>

		<pre><code class="language-markup"><textarea>
<!--  You can have vertical alignment set on the grid -->
<div class="ewd grid flex [ middle top bottom ] desktop-4 massive-4 huge-2 medium-2 small-1 tiny-1">
		<div class="row">
			<div class="middle">I'm aligned in the middle</div>
			<div class="break"></div>
			<div class="top">I'm aligned to the top</div>
			<div class="break"></div>
			<div class="bottom">I'm aligned to the bottom</div>
			<div class="break"></div>
			<div>I'm a larger column...</div>
		</div>
		<!-- You can set alignment on the row which overrides the main grid alignment -->
		<div class="row [ middle top bottom ]">
			<!-- Cell always overrides row and grid vertical alignment -->
			<div class=" [ middle top bottom ]">Cell 1</div>
			<div class="break"></div>...
		</div>
</div></textarea></code></pre>

	<div class="mt ewd grid flex desktop-4 massive-4 huge-2 medium-2 small-1 tiny-1 demo-style">
		<div class="row">
			<div class="middle">I'm aligned in the middle of the Y or vertical axis</div>
			<div class="break"></div>
			<div class="top">I'm aligned to the top</div>
			<div class="break"></div>
			<div class="bottom">I'm aligned to the bottom</div>
			<div class="break"></div>
			<div>I'm a larger column to demonstrate the power of the flex grid and the control it offers to everyone! I'm a larger column to demonstrate the power of the flex grid and the control it offers to everyone! I'm a larger column to demonstrate the power of the flex grid and the control it offers to everyone!</div>
		</div>
	</div>

	</div>
</div>

<div class="mt">
	<div>

		<p class="center">We can align content vertically even in the fallback grid system...</p>

		<div class="center"><a href="#" class="ewd button show label"><i class="code"></i>View Source</a></div>

		<pre><code class="language-markup"><textarea>
<!--  This example shows division row overrides -->
<div class="ewd grid flex desktop-4 massive-4 huge-2 medium-2 small-1 tiny-1">
	<!-- Row overrides column widths on desktop and massive resolution -->
	<div class="row desktop-2 massive-2 huge-1">
		<div>I'm some content</div>
		<div class="break"></div>
		<div>I'm aligned to the bottom</div>
		<div class="break"></div>
		<div class="middle">I'm aligned in the middle of the Y or vertical axis</div>
		<div class="break"></div>
		<div>I'm a larger column to demonstrate</div>
	</div>
</div></textarea></code></pre>

	<div class="mt ewd grid flex desktop-4 massive-4 huge-2 medium-2 small-1 tiny-1 demo-style">
		<div class="row desktop-2 massive-2 huge-1">
			<div>I'm some content</div>
			<div class="break"></div>
			<div>I'm aligned to the bottom</div>
			<div class="break"></div>
			<div class="middle">I'm aligned in the middle of the Y or vertical axis</div>
			<div class="break"></div>
			<div>I'm a larger column to demonstrate the power of the flex grid and the control it offers to everyone! I'm a larger column to demonstrate the power of the flex grid and the control it offers to everyone! I'm a larger column to demonstrate the power of the flex grid and the control it offers to everyone!</div>
		</div>
	</div>

	</div>
</div>

<div class="mt">
	<div>

		<p class="center">With flex we can override with cell specific classes and push is available with the table fallback...</p>

		<div class="center"><a href="#" class="ewd button show label"><i class="code"></i>View Source</a></div>

		<pre><code class="language-markup"><textarea>
<div class="ewd grid flex">
	<div class="row">
		<div class="desktop-6 massive-10 medium-15">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce condimentum, diam sit amet ultricies ultricies.</div>
		<div class="break"></div>
		<div class="desktop-10 massive-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce condimentum, diam sit amet ultricies ultricies.</div>
	</div>
</div></textarea></code></pre>

	<div class="mt ewd grid flex demo-style">
		<div class="row">
			<div class="desktop-6 massive-10 medium-15">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce condimentum, diam sit amet ultricies ultricies.</div>
			<div class="break"></div>
			<div class="desktop-10 massive-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce condimentum, diam sit amet ultricies ultricies.</div>
		</div>
	</div>

	</div>
</div>