<!doctype html>
<html>
<head>
</style>
	<meta charset=utf-8>
	<title>Slides and Structure</title>
	<style>

	body {
		width: 600px;
		margin: auto;
		font-family: sans-serif;
	}

	#contact {
		background: #e3e3e3;
		padding: 1em 2em;
		position: relative;
	}

	.js #contact {
		position: absolute;
		top: 0;
		width: inherit;
		display: none;
	}

	#contact h2 { margin-top: 0; }

	#contact ul { padding: 0; }

	#contact li {
		list-style: none;
		margin-bottom: 1em;
	}

	/* Close button on form */
	.close {
		position: absolute;
		right: 10px;
		top: 10px;
		font-weight: bold;
		font-family: sans-serif;
		cursor: pointer;
	}

	/* Form inputs */
	input, textarea { width: 100%; line-height: 2em;}
	input[type=submit] { width: auto;  }
	label { display: block; text-align: left; }

	</style>
</head>
<body>


<article>
	<h1>Contact us</h1>


	<p>
 For any query related to counselling
 process contact us.
	</p>


	<p>
     In our mail and give us  feedback about the system effective ness.
     mail us for any details related to counselling system onlincounselling2014@gmail.com
	</p>
</article>

<div id="contact">
	<h2>Contact us</h2>
	<form action="#">
		<ul>
			<li>
				<label for="name">Name: </label>
	 			<input name="name" id="name">
			</li>

			<li>
				<label for="email">Email Address: </label>
		 		<input name="email" id="email">
			</li>

			<li>
				<label for="comments">message</label>
				<textarea name="comments" id="comments" cols="30" rows="10"></textarea>
			</li>
			<li>
				<input type="submit" value="Submit">
			</li>
		</ul>
	</form>
</div>

<script src="jquery-1.7.1.js"></script>


<script>

(function() {

$('html').addClass('js');

var contactForm = {

	container: $('#contact'),

	config: {
		effect: 'slideToggle',
		speed: 500
	},

	init: function(config) {
		$.extend(this.config, config);

		$('<button></button>', {
			text: 'Contact us'
		})
			.insertAfter( 'article:first' )
			.on( 'click', this.show );
	},

	show: function() {
		var cf = contactForm,
			container = cf.container,
			config = cf.config;

		if ( container.is(':hidden') ) {
			contactForm.close.call(container);
			container[config.effect](config.speed);
		}
	},

	close: function() {
		var $this = $(this), // #contact
			config = contactForm.config;

		if ( $this.find('span.close').length ) return;

		$('<span class=close>X</span>')
			.prependTo(this)
			.on('click', function() {
				// this = span
				$this[config.effect](config.speed);
			})
	}
};

contactForm.init({
	// effect: 'fadeToggle',
	speed: 300
});

})();

</script>

</body>
</html>











