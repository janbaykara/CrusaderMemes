<!DOCTYPE html>
<html>
<head>
	<title>CrusaderMemes</title>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<style>
	/* Generated by Font Squirrel (http://www.fontsquirrel.com) on February 14, 2014 */

	@font-face {
		font-family: 'trajanbold';
		src: url('fonts/trajan_bold-webfont.eot');
		src: url('fonts/trajan_bold-webfont.eot?#iefix') format('embedded-opentype'),
			 url('fonts/trajan_bold-webfont.woff') format('woff'),
			 url('fonts/trajan_bold-webfont.ttf') format('truetype'),
			 url('fonts/trajan_bold-webfont.svg#trajanbold') format('svg');
		font-weight: normal;
		font-style: normal;
	}
		
	html {
		background: black;
	}
	
	#event {
	  margin: 5% auto 0;
	  width: 500px;
	  position: relative;
	}

	#e_image {
	  position: absolute;
	  top: 61px;
	  left: 27px;
	}

	#e_text {
	  position: absolute;
	  top: 260px;
	  left: 80px;
	  width: 350px;
	  font-size: 14pt;
	  font-family: "trajanbold", "serif";
	  letter-spacing: -1px;
	}

	#e_options {
	  width: 476px;
	  margin: 0 auto;
	  position: absolute;
	  top: 438px;
	  left: 14px;
	}

	#e_options ul {
	  list-style: none;
	  padding: 0px !important;
	  margin: 0px auto !important;
	}

	#e_options li.e_option {
	  margin: 0px auto !important;
	  background: url("image.php?r=dOption") no-repeat;
	  height: 18px;
	  padding: 9px 20px;
	  text-transform: uppercase;
	  font-variant: small-caps;
	  font-family: "trajanbold", "serif";
	  letter-spacing: -1px;
	}
	
	ul#event_pictures:before {
	  content: "Choose a new event image";
	  color: white;
	  font-size: 24pt;
	  border-bottom: 1px solid white;
	  display: block;
	  text-align: center;
	  padding-bottom: 15px;
	  margin-bottom: 20px;
	  font-style: italic;
	  font-family: "trajanbold";
	}
	ul#event_pictures {
	  position: fixed;
	  z-index: 999;
	  background: rgba(0,0,0,0.7);
	  width: 100%;
	  height: 100%;
	  display: block;
	  top: 0px;
	  left; 0px;
	}
	ul#event_pictures li {
	  color: white;
	  display: block;
	  float: left;
	  width: 200px;
	  padding: 5px;
	  background: rgba(0,0,0,0.2);
	  margin: 2px;
	  overflow: hidden;
	  font-family: sans-serif;
	  font-size: 12px;
	  cursor: pointer;
	}
	ul#event_pictures li:hover {
	  background: rgba(50,50,50,0.2);
	}
	
	#e_image, #e_text, #e_options li {
		cursor: pointer;
	}
	
	button, input {
	  border: none;
	  background: black;
	  color: #555;
	  padding: 10px;
	  cursor: pointer;
	  display: inline-block !important;
	  clear: none;
	}
	#control_panel {
	  margin-top: 10px;
	  text-align: center;
	}
	
	.small_notice {
	  color: #555;
	  font-size: 11px;
	  font-family: sans-serif;
	  text-align: center;
	  width: 500px;
	display: block;
	}
	
	form {
	  display: inline-block;
	}
	
	body:before {
	  content: "CrusaderMemes";
	  color: #111;
	  font-family: sans-serif;
	  font-weight: bold;
	  font-size: 20pt;
	  text-align: center;
	  width: 100%;
	  display: block;
	  position: absolute;
	  top: 1%;
	  letter-spacing: -3px;
	}
	
	.e_panel_1 { display: none !important }
	.e_panel_2 { margin-top: -80px; }
	.e_panel_3 { margin-top: -50px; }
	
	#options_editor:before {
	  content: "Edit option";
	  color: white;
	  font-size: 24pt;
	  border-bottom: 1px solid white;
	  display: block;
	  text-align: center;
	  padding-bottom: 15px;
	  margin-bottom: 20px;
	  font-style: italic;
	  font-family: "trajanbold";
	}

	#options_editor {
	  position: relative;
		  z-index: 998;
		  background: rgba(0,0,0,0.7);
		  width: 300px;
		  height: 400px;
		  display: block;
		  top: 0px;
			  margin: -700px auto !important;
	  padding: 200px 100px;
	}

	#options_editor span {
	  color: #AAA;
	  font-weight: bold;
	  text-transform: uppercase;
	  font-family: sans-serif;
	  font-size: 12px;
	  float: left;
	  width: 100px;
	  margin-left: -105px;
	  text-align: right;
	  margin-top: 12px;
	  margin-bottom: 3px;
	  clear: left;
	}
	
	#options_editor * {
	  width: 100%;
	  margin: 0px auto;
	  display: inline-block;
	}
	
	#options_editor button, #options_editor input {
		border: 1px solid #222;
		margin-top: -1px;
	}
	
	li.e_option a {
	  float: right;
	  display: block;
	  background: rgba(0,0,0,0.2);
	  padding: 5px 5px 4px 5px;
	  color: white;
	  text-decoration: none;
	  border-radius: 1px;
	  margin: -6px -18px;
	}
	li.e_option a:hover {
	  background: rgba(0,0,0,0.4);
	}
	li.e_option a:active {
	  background: rgba(0,0,0,0.5);
	}
	
	#feedback {
	  color: #555;
	  font-family: sans-serif;
	  text-decoration: none;
	  font-size: 13px;
	  padding-left: 10px;
	}
	
	#tooltip {
	  position: absolute;
	  background: rgba(0,0,0,0.8);
	  color: white;
	  z-index: 999;
	  display: block;
	  max-width: 400px;
	  border: 3px double #AA8844;
	  padding: 10px;
	  font-size: 12px
	  -webkit-transition: 2s;
	}
	</style>
</head>
<?
	if(isset($_GET['i']))
		$e_image = $_GET['i'];
	else
		$e_image = "Courtiers_looking_scandalized.dds";
		
	if(isset($_GET['b']))
		$e_text = $_GET['b'];
	else
		$e_text = "Your rendevous with the coffee machine has ended in tears. It's broken and can't be used. Heresy!";
		
	if(isset($_GET['o'])) {
		$e_options = explode("###",$_GET['o']);
		//array_filter($linksArray);
		
		// Split into TEXT : HOVER : URL
		$i=0; 
		while($i <= count($e_options) - 1)
		{
			$e_options[$i] = explode("@@@",$e_options[$i]);
			$i++;
		} 
	} else {
		$e_options = [
			["Give it a good tumble",null,null],
			["Have the peasants fill it with rocks",null,null],
			["I will deal with this myself!",null,null]
		];
	}
	print_r($e_options);
?>
<body>
<div id="wrapper">
	<ul id='event_pictures'></ul>
	<div id="event">
		<div class='small_notice'>
			Click the image, text and options to change them. Or give 'em a good tumble.
		</div>
		<img id="e_panel" src="image.php?r=dPanel" />
		<img id="e_image" data-img-name='<?=$e_image ?>' src="image.php?r=event_pictures/<?=$e_image ?>" />
		<div id="e_text"><?=$e_text ?></div>
		<? 
		switch(count($e_options)) {
			case 1: break;
			case 2: ?><img id="e_panel_extension" class='e_panel_2' src="image.php?r=dExtensionBottom" /><? break;
			case 3: ?><img id="e_panel_extension" class='e_panel_3' src="image.php?r=dExtensionBottom" /><? break;
		}
		?>
		<div id="e_options">
			<ul>
			<?
			foreach($e_options as $option) {
			?>
				<li data-url="<?=$option[2]?>" title="<?=$option[1]?>" class="e_option"><?=$option[0] ?></li>
			<?
			}
			?>
			</ul>
		</div>
		<div id="control_panel">
			<button id="share_url" data-clipboard-text="http://jan.baykara.co.uk/projects/crusadermemes/" title="Click to copy me.">Share URL</button>
			<form id='reset_event' action="http://jan.baykara.co.uk/projects/crusadermemes">
				<input type="submit" value="Reset">
			</form>
			<a id='feedback' href='https://docs.google.com/forms/d/1KKSqa65KSPCEgGuWi26p0RMxfRnFjt_2JgBaXlFhwpU/viewform'>Feedback</a>
			<!--<button id="random_event">User Created Events</button>-->
			<span class='small_notice'>Viewing user created events temporarily disabled, due to obscene content.</span>
		</div>
		<div id='debug_bin'></div>
	</div>
</div>
<script>
	$('#event_pictures, #options_editor').hide();
	
	$('#e_text').mouseup(function() {
		var newEText = prompt("Enter new event body text",$(this).text());
		if (newEText != null) {
			$(this).text(newEText);
		}
	});
	
	var testing = false;
	
	function cLog(t) {
		if(testing = true) {
			console.log(t);
		}
	}
	
	function toolTip(t) {
		var toolTip = $("<div/>").attr("id","tooltip");
		toolTip.html(t);
		$('body').append(toolTip);
	}
	
	function optionsEditor(thisOption) {
		var optionsEditor = $("<div/>").attr("id", "options_editor");
		optionsEditor.html('<form><span>Text</span><input data-description="Text" type="text" id="opt_text" value="'+thisOption.text()+'">'+
        '<br><span>Hovertext</span><input data-description="Hovertext" type="text" id="opt_hover" value="'+thisOption.attr("title")+'">'+
        '<br><span>Link URL</span><input data-description="Link URL" type="text" id="opt_link" value="'+thisOption.attr("data-url")+'">'+
        '<br><input type="submit" value="Apply changes"></form>'+
		'<br><button id="opt_delete">Delete this option</button>'+
		'<br><button id="opt_add">Add another option</button>');
		$('#wrapper').append(optionsEditor);
	}
	
	function checkOptions() {
		if($("#e_options li").size() == 1) {
			$('#e_panel_extension').removeClass();
			$('#e_panel_extension').addClass('e_panel_1');
		} else if ($("#e_options li").size() == 2) {
			$('#e_panel_extension').removeClass();
			$('#e_panel_extension').addClass('e_panel_2');
		} else {
			$('#e_panel_extension').removeClass();
			$('#e_panel_extension').addClass('e_panel_3');
		}
	}
	
	$('#e_options').on('mouseup', 'li.e_option', function(e) {
		if (this !== e.target) return;
	
		var thisOption = $(this);
		
		optionsEditor(thisOption);
		$('#opt_text').focus();
		
		$('#options_editor input[type=submit]').click(function(event) {
			event.preventDefault();
			
			// Option text
			if($('#options_editor #opt_text').val() != 'undefined' || $('#options_editor #opt_text').val() != null) {
				thisOption.text($('#options_editor #opt_text').val());
			}
			// Option hover
			if($('#options_editor #opt_hover').val() != 'undefined' || $('#options_editor #opt_hover').val() != null) {
				thisOption.attr('title',$('#options_editor #opt_hover').val());
			}
			// Option link
			if($('#options_editor #opt_link').val() != 'undefined' || $('#options_editor #opt_link').val() != null) {
				thisOption.attr('data-url',$('#options_editor #opt_link').val());
			}
			
			$('#options_editor').remove();
		});
			
		$('#options_editor #opt_delete').mouseup(function(event) {
			if($("#e_options li").size() > 1) {
				thisOption.remove();
				checkOptions();
				$('#options_editor').remove();
			} else {
				alert("I can't let you remove all the options, squire!");
			}
		});
			
		$('#options_editor #opt_add').mouseup(function(event) {
			if($("#e_options li").size() < 3) {
				thisOption.clone().appendTo( "#e_options ul" );
				checkOptions();
				$('#options_editor').remove();
			} else {
				alert("Maximum of three options, youngling. Move along...");
			}
		});		
		
		$(document).keyup(function(e) {
			if (e.keyCode == 27) { 
				$('#options_editor').remove();
			}
		});
	});
	
	$('#e_options').on({
		mouseenter: function () {
			if($(this).attr('data-url').length > 9) {
				$(this).append('<a class="option_link" href="'+$(this).attr("data-url")+'" target="_blank">Go</a>');
			}
			if($(this).attr('title').length > 9) {
				$(this).data('title', $(this).attr('title'));
				$(this).removeAttr('title');
				
				toolTip($(this).data('title'));
				
				var currentMousePos = { x: -1, y: -1 };
				$(document).mousemove(function(event) {
					currentMousePos.x = event.pageX + 15;
					currentMousePos.y = event.pageY + 15;
					$('#tooltip').attr("style","top: "+currentMousePos.y+"px; left: "+currentMousePos.x+"px;");
				});
			}
		},
		mouseleave: function () {
			$('#e_options li .option_link').remove();
			if($(this).data('title') != null) $(this).attr('title', $(this).data('title'));
			$('#tooltip').remove();
		}
	}, 'li.e_option');
	
	$('#e_image').mouseup(function() {
		$.ajax({
		  url: "img/event_pictures/",
		  success: function(data){
			 $(data).find("a:contains(.dds)").each(function(){
				// will loop through 
				var images = $(this).attr("href");
				$('<li>').html(images).appendTo($('#event_pictures'));
				$('#event_pictures').show();
			 });
				
			$('#event_pictures li').mouseup(function() {
				var newImageURL = "image.php?r=event_pictures/"+$(this).text();
				$("#e_image").attr("data-img-name",$(this).text());
				$("#e_image").attr("src",newImageURL);
				$('#event_pictures').empty();
				$('#event_pictures').hide();
			});
		  }
		});
	});
	
	$('#share_url').mouseup(function() {
		// Body Text
		var bodyText = encodeURIComponent($('#e_text').text());
		// Options
		var options = "###";
		$.each($('#e_options li'), function() {
			if($(this).attr("title")) 
				var evtHover = $(this).attr("title"); else var evtHover = '';
			if($(this).attr("data-url")) 
				var evtURL = $(this).attr("data-url"); else var evtURL = '';
			options += "###"+$(this).text()+'@@@'+evtHover+'@@@'+evtURL;
		});
		options = encodeURIComponent(options.substring(6));
		// Image
		var image = encodeURIComponent($('#e_image').attr('data-img-name'));
		
		var shareURL = "http://jan.baykara.co.uk/projects/crusadermemes/?b="+bodyText+"&o="+options+"&i="+image;
		$(this).attr("data-clipboard-text",shareURL);
		
		$.get( "tinyurl.php?u="+encodeURIComponent(shareURL), function( data ) {
			var tinyURL = data;
			prompt ("Here's your share link, squire. Give it a good tumble.", tinyURL);
		});
	});
	
	$('#random_event').click(function() {
		$.get("memelog.txt", function(memelog) {
			var urls = memelog.split("\n");
			var idx = Math.floor(urls.length * Math.random());
			window.open(urls[idx],'_top');
		});
	});
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-47411407-1', 'baykara.co.uk');
  ga('send', 'pageview');
</script>
</body>
</html>