<?php
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
	
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="google-site-verification" content="NJUZ0zbkDp5djqZWK53VE4SkWMwG14kBU05q6Q-Mgpk" />
		<title>Streaming Serg</title>

		<meta name='description' content='' />
		<meta name='keywords' content='' />
		<meta name='robots' content='index,follow,archive' />

		<meta name='geo.position' content=',' />
		<meta name='geo.placename' content='' />
		<meta name='geo.region' content='' />

		<link rel='schema.DC' href='http://purl.org/dc/elements/1.1/' />
		<link rel='schema.DCTERMS' href='http://purl.org/dc/terms/' />
		<meta name='DC.title' content='Streaming Serg' />
		<meta name='DC.subject' content='' />
		<meta name='DC.description' content='' />
		<meta name='DC.publisher' content='' />
		<meta name='DC.date.created' scheme='DCTERMS.W3CDTF' content='2013-03-02T05:19:51-0800' />
		<meta name='DC.date.modified' scheme='DCTERMS.W3CDTF' content='2013-03-02T22:26:52-0800' />
		<meta name='DC.date.valid' scheme='DCTERMS.W3CDTF' content='2013-03-03T00:12:22-0800' />
		<meta name='DC.type' scheme='DCTERMS.DCMIType' content='Text' />
		<meta name='DC.rights' scheme='DCTERMS.URI' content='' />
		<meta name='DC.format' content='text/html' />
		<meta name='DC.identifier' scheme='DCTERMS.URI' content='http://www.humelake.org/' />
		<link rel="stylesheet" type="text/css" href="my_assets/960.css" />
		<link rel="stylesheet" type="text/css" href="my_assets/colorbox.css" />
		<link rel="stylesheet" type="text/css" href="my_assets/full_default.css" />
		<script src="my_assets/javascript.js" type="text/javascript"></script>
		<script src="my_assets/jquery.js" type="text/javascript"></script>
		<script src="http://www.humelake.org/javascripts/jquery/jquery-1.3.2.min.js" type="text/javascript"></script>
		<script src="http://www.humelake.org/javascripts/jquery/outerHTML-1.0.0-min.js" type="text/javascript"></script>
		<script src="http://www.humelake.org/javascripts/jquery/jquery.cycle.all.min.js" type="text/javascript"></script>
		<script src="http://www.humelake.org/javascripts/jquery/colorbox/jquery.colorbox-min.js" type="text/javascript"></script>
		<script src="http://www.humelake.org/javascripts/jquery/tools/tools.tabs-1.0.4.js" type="text/javascript"></script>
		<script src="http://www.humelake.org/javascripts/jquery/tools/tools.tabs.history-1.0.2.js" type="text/javascript"></script>
		<script src="http://www.humelake.org/javascripts/menu.js" type="text/javascript"></script>
		<script src="http://www.humelake.org/javascripts/hume.js?version=20111007" type="text/javascript"></script>

		<script type="text/javascript"> 
		 // var slides = Array('<div style="width:900px;height:600px;background-color:maroon"><h1>Hello</h1></div>','<img src="demo-images/apsm_021.jpg" alt="" width="900" height="600" />','<img src="demo-images/awml_043.jpg" alt="" width="900" height="600" />','<img src="demo-images/bmjg_108.jpg" alt="" width="900" height="600" />','<img src="demo-images/cmeb_004.jpg" alt="" width="900" height="600" />');
			var site_url = $("#sv_projector_source").children().get();
			var slides = Array();

			$(document).ready(function(){
				$("a.colorbox").colorbox({iframe:true, innerWidth:720, innerHeight:405});
			});
		</script>
	</head>
	
	<body class="home">
	
		<!-- This script is from www.javascriptfreecode.com-Coded by: Krishna Eydat.
			 It prevents people from using right click on any of the images -->
		<script LANGUAGE="JavaScript">
			///////////////////////////////////
			function clickIE() {if (document.all) {return false;}}
			function clickNS(e) {if 
			(document.layers||(document.getElementById&&!document.all)) {
			if (e.which==2||e.which==3) {return false;}}}
			if (document.layers) 
			{document.captureEvents(Event.MOUSEDOWN);document.onmousedown=clickNS;}
			else{document.onmouseup=clickNS;document.oncontextmenu=clickIE;}

			document.oncontextmenu=new Function("return false")
			// --> 
		</script>
	
		<script type="text/javascript">
		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-2174074-10']);
		  _gaq.push(['_trackPageview']);

		  (function() {
			var ga = document.createElement('script'); 
			ga.type = 'text/javascript'; 
			ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; 
			s.parentNode.insertBefore(ga, s);
		  })();
		  
		          function edit(id) {
        var node = document.getElementById(id);
        node.style.display = 'none';
        var text = node.innerHTML;
        var childNodeArray = document.getElementById(id).parentNode.childNodes;
        for (var i = 0; i < childNodeArray.length; i++) {
          switch (childNodeArray[i].type) {
          case "button":
            childNodeArray[i].style.display = 'inline';
            break;
          case "text":
            childNodeArray[i].value = text;
            childNodeArray[i].style.display = 'inline';
            break;
          default:
            break;
          }
        }
      }
      function modify(id, save) {
        var node = document.getElementById(id);
        var childNodeArray = document.getElementById(id).parentNode.childNodes;
        node.style.display = 'inline';
        for (var i = 0; i < childNodeArray.length; i++)  {
          switch (childNodeArray[i].type) {
          case "button":
            childNodeArray[i].style.display = 'none';
            break;
          case "text":
            if (save == true) 
              node.innerHTML = childNodeArray[i].value;
            childNodeArray[i].style.display = 'none';
            break;
          default:
            break;
          }
        }
      }
		</script>
		
		<div id="wrapper">
			<div id="logo">
				<a title="Return to homepage" href="SS.php">Streaming Serg</a>
				<h1>Streaming Serg</h1>
			</div>
			
			<div id="header-pushdown"></div>
			
			<div id="header" class="container_12">
				<div id="top-nav">
					<!-- Google Tag Manager -->
					<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-GKR2" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
					<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
					new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
					j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
					'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
					})(window,document,'script','dataLayer','GTM-GKR2');</script>
					<!-- End Google Tag Manager -->

					<!-- begin embeds/_top_nav -->
					<ul class="grid_12">
						<li>
							<a title="Home" href="SS.php">Home</a>
						</li>
						<li>
							<a title="Contact" href="SS_contact.php">Contact</a>
						</li>
						<li>
						<?php
						if (!isset($_SESSION["role"]) | $_SESSION["role"] == "visitor")
							echo '	  		<a title="Login" href="SS_login_page.php?action=login">Login</a>' . PHP_EOL;
						else
						    echo '	  		<a title="Logout" href="SS_login_page.php?action=logout">Logout</a>' . PHP_EOL;
						?>
						</li>
					</ul>
					<!-- end embeds/_top_nav -->
				</div>
				
				<div id="masthead">
					<div id="header-content"></div>
					<div id="header-images-clickable">
						<a href="SS_watercolor.php"><img class="first" src="my_images/Eternal_Bliss.jpg" height="310" width="960" alt="Eternal Bliss"/></a>
						<a href="SS_pencil.php"><img  src="my_images/Falcon_Punch.jpg" height="310" width="960" alt="Falcon Punch"/></a>
						<a href="SS_watercolor.php"><img  src="my_images/Nitrogen_Cycle.jpg" height="310" width="960" alt="Nitrogen Cycle"/></a>
					</div>
				</div>
			</div>
			<div id="content" class="container_12 clearfix">
				<div id="main-column" class="grid_9">