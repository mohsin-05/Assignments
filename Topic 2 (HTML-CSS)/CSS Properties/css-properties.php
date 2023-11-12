<!DOCTYPE html>
<html>
<head>
	<title>Assignment 2</title>
	<style>

		.property1 {
			writing-mode: vertical-rl;
		}

		h2.a {
		  visibility: visible;
		}

		h2.b {
		  visibility: hidden;
		}

		.property4 {
		  width: 300px;
		  height: 100px;
		  background: red;
		  transition-property: width;
		  transition-duration: 3s;
		}

		.property4:hover {
		  width: 600px;
		}

		p.ex1 {
		  text-emphasis: filled; 
		}

		p.ex2 {
		  text-emphasis: open; 
		}

		p.ex3 {
		  text-emphasis: double-circle red; 
		}

		p.ex4 {
		  text-emphasis: triangle blue; 
		}

		div.a {
		  text-transform: uppercase;
		}

		div.b {
		  text-transform: lowercase;
		}

		div.c {
		  text-transform: capitalize;
		}

		div.d {
		  text-indent: 50px;
		}

		.prop8-1 {
		  text-decoration: overline;
		}

		.prop8-2 {
		  text-decoration: line-through;
		}

		.prop8-3 {
		  text-decoration: underline;
		}

		.prop8-4 {
		  text-decoration: underline overline;
		}

		div.e {
		  background-color: red;
		  width: 100px;
		  aspect-ratio: 5/3;
		}

		table, td, th {
			border: 1px solid black;
			border-collapse: collapse;
		}

		.text {
			column-count: 3;
		}

		.text2 {
		  border: solid black 1px;
		  background-color: lightgoldenrodyellow;
		  column-count: 3;
		  column-gap: 40px;
		}

		.pointer {
			cursor: pointer;
		}

		p.rtl {
		  direction: rtl;
		}

		#q{
			quotes: "'" "'";
		}

		#o{
		  background-color: lightblue;
		  width: 110px;
		  height: 110px;
		  overflow: scroll;
		}

		ul li{
		  list-style-image: url('featured.png');
		  margin-left: 50%;
		}

	</style>
</head>
<body>

	<h1 class="property1">1. This property shows text verticaly.</h1>

	<h1 class="property2">2. The visibility Property</h1>
	<h2 class="a">This heading is visible</h2>
	<h2 class="b">This heading is hidden</h2>

	<h1 class="property3">3. The user-select Property</h1>
	<div>The text of this div element cannot be selected. If you double-click, the text will not be highlighted.</div>

	<h1 class="property4">4. The transition-duration Property</h1>
	<p>The transition-duration property specifies how many seconds (s) or milliseconds (ms) a transition effect takes to complete.</p>

	<h1 class="property5">5. The text-emphasis Property</h1>
	<p>The text-emphasis property is used to apply emphasis marks to text.</p>
	<p class="ex1">This is some text.</p>
	<p class="ex2">This is some text.</p>
	<p class="ex3">This is some text.</p>
	<p class="ex4">This is some text.</p>

	<h1 class="property6">6. The text-transform Property</h1>
	<h2>text-transform: uppercase:</h2>
	<div class="a">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>

	<h2>text-transform: lowercase:</h2>
	<div class="b">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>

	<h2>text-transform: capitalize:</h2>
	<div class="c">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>

	<h1 class="property7">7. The text-indent Property</h1>
	<div class="d">
		<p>The text-indent property specifies the indentation of the first line in a text-block.</p>
	</div>

	<h1 class="property8">8. CSS text-decoration Property</h1>
	<p>The text-decoration property specifies the decoration added to text.</p>
	<h3 class="prop8-1">This is heading 1</h3>
	<h3 class="prop8-2">This is heading 2</h3>
	<h3 class="prop8-3">This is heading 3</h3>
	<h3 class="prop8-4">This is heading 4</h3>

	<h1 class="property9">9. Aspect-ratio property</h1>
	<p>The aspect-ratio property allows you to define the ratio between width and height of an element.</p>
	<div class="e">Hello</div>

	<h1 class="property10">10. CSS border-collapse Property</h1>
	<p>The border-collapse property sets whether table borders should collapse into a single border or be separated as in standard HTML.</p>
	<h2>border-collapse: collapse:</h2>
	<table>
		<tr>
			<th>Firstname</th>
			<th>Lastname</th>
		</tr>
		<tr>
			<td>Mohsin</td>
			<td>Sahito</td>
		</tr>
	</table>

	<h1 class="property11">11. The column-count Property</h1>
	<p>The column-count property defines the number of columns an element is divided into.</p>
	<div class="text">
		Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius.
	</div>

	<h1 class="property12">12. The column-gap Property</h1>
	<p>The column-gap property defines the gap between the columns of the element.</p>
	<div class="text2">
		Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius.
	</div>

	<h1 class="property13">13. CSS cursor Property</h1>
	<p>The cursor property specifies the mouse cursor to be displayed when pointing over an element.</p>
	<p class="pointer">pointer</p>

	<h1 class="property14">14. The direction Property</h1>
	<p>The direction property specifies the text direction/writing direction within a block-level element.</p>
	<p class="rtl">This text goes from right to left.</p>


	<h1 class="property15">15. The outline-color Property</h1>
	<p style="outline-style: solid; outline-color: coral;">The outline-color can be specified with a color name.</p>

	<h1 class="property16">16. The opacity Property</h1>
	<p style="opacity: 0.5;">When using the opacity property to add transparency to the background of an element, all of its child elements become transparent as well.</p>

	<h1 class="property17">17. CSS outline Property</h1>
	<p style="outline: 5px dotted green;">An outline is a line that is drawn around elements, outside the borders, to make the element "stand out".</p>

	<h1 class="property18">18. CSS outline-offset Property</h1>
	<p style="outline: 4px solid red; outline-offset: 15px;">The outline-offset property adds space between the outline and the edge or border of an element.</p>

	<h1 class="property19">19. CSS quotes Property</h1>
	<p id="q">The quotes property sets the type of quotation marks for quotations.</p>

	<h1 class="property20">20. Rotate property</h1>
	<p style="rotate: 30deg;">The rotate property allows you to rotate elements.</p>

	<h1 class="property21">21. CSS scale Property</h1>
	<p style="scale: 2;">The scale property allows you to change the size of elements.</p>

	<h1 class="property22">22. The text-align-last Property</h1>
	<p style="text-align-last: right;">The text-align-last property specifies how to align the last line of a text. Notice that the text-align-last property sets the alignment for all last lines within the selected element.</p>

	<h1 class="property23">23. CSS text-decoration-thickness Property</h1>
	<p style="text-decoration: underline solid red 50%;">The text-decoration-thickness property specifies the thickness of the decoration line.</p>

	<h1 class="property24">24. CSS resize Property</h1>
	<p style="resize: both; overflow: auto;">The resize property defines if (and how) an element is resizable by the user.</p>

	<h1 class="property25">25. CSS pointer-events Property</h1>
	<p style="pointer-events: none;"><a href="#">The</a> pointer-events property defines whether or not an element reacts to pointer events.</p>

	<h1 class="property26">26. The overflow Property</h1>
	<p id="o">The overflow property specifies whether to clip content or to add scrollbars when an element's content is too big to fit in a specified area.</p>

	<h1 class="property27">27. The overflow-wrap Property</h1>
	<p>The overflow-wrap property specifies whether or not the browser can break lines with long words, if they overflow the container.</p>
	<p style="width: 150px; overflow-wrap: break-word;">thisisaveryveryveryveryveryverylongword. The long word will not break and wrap to the next line</p>

	<h1 class="property28">28. The overflow-x Property</h1>
	<p style="width: 40px; overflow-x: scroll;">The overflow-x property specifies whether to clip the content, add a scroll bar, or display overflow content of a block-level element, when it overflows at the left and right edges</p>

	<h1 class="property29">29. The overflow-y Property</h1>
	<p style="width: 200px;height: 40px; overflow-y: scroll;">The overflow-y property specifies whether to clip the content, add a scroll bar, or display overflow content of a block-level element, when it overflows at the top and bottom edges.</p>

	<h1 class="property30">30. CSS font-stretch Property</h1>
	<p>The list-style-image property replaces the list-item marker with an image.</p>
	<ul>
	  <li>Coffee</li>
	  <li>Tea</li>
	  <li>Coca Cola</li>
	</ul>	

</body>
</html>