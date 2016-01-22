<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
        <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE9" />
		<meta name="robots" content="index,follow" />
		<meta name="description" content="Jeremy bernard cv 2013 " />
		<meta name="keywords" content="Jeremy bernard cv 2013" />
		<title>Jérémy Bernard</title>
		
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        
        <link rel="stylesheet" type="text/css" media="all" href="css/site.css" />
        <link rel="stylesheet" type="text/css" href="css/prettyPhoto.css" />
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
</head>
	<body>
				<div id="header">
			<div id="headerbar">
            
          </div>
			<div id="headertop" style=" text-align:center">
            <span style="color:#999;font-size:11px">Ce site est optimisé pour les navigateurs récents, <a target="_blank" style="color:#CCC" href="http://browser-update.org/update.html">pensez à mettre votre navigateur à jour. </a></span>
            </div>
			<div id="flag" class="green" style="z-index:99999;">
				<div id="middle"></div>
				<div id="leftbottom" class="bgcolor"></div>
				<div id="rightbottom" class="bgcolor"></div>
				<h1>Pauline Fressenon CV 2013</h1>
				<ul id="menu">
                	<li id="01"><a href="#start">Accueil</a></li>
					<li id="02"><a href="#what">Mon book</a></li>
					<li id="03"><a href="#why">Mon C.V. 2013</a></li>
					<li id="04"><a href="#how">Me contacter</a></li>
				</ul>
			</div>
		</div>
		<div id="start" class="page">
			<div class="next" style="text-align:center">
            Portfolio
            <a href="#what"><div id="picto_book">&nbsp;</div></a>
            </div>
		</div>
		<div class="page"  id="what">
            
				<?php include("portfolio.php"); ?>
        		
           
		</div>
		<div id="why" class="page" style="width:530px">
        <div style="width:300px;float:left">
			<h2>Curriculum Vitae</h2>
			<p>Télécharger mon CV au format PDF</p>
<img src="images/arrow_telecharger.png" />
        </div>
        <a target="_blank" href="cv_jeremyB_2013.pdf" title="Voir mon CV"><div class="cv"></div></a>
            </div>
		</div>
		<div id="how" class="page" style="width:417px">

<?php include("inc_contact.php"); ?>
		</div>
		<div id="footer">
			<p><a href="#start" id="start-btn">Retour à l'accueil</a> - <a href="#license" id="license-btn"><strong style="font-size:14px;color:#eb463c">My resume tag cloud</strong></a> - Mis à jour le 29/06/2013</p>
			<div id="license" style="font-size:11px">
				<p><strong>Expérience de 5 ans en agence de communication - Bonne maîtrise de la suite Adobe  - Graphiste - Webdesigner Intégrateur web (HTML/CSS/jQuery) - Développeur web (PHP/MySQL) - Utilisation de CMS (SPIP/WordPress/Joomla)  Responsive design (BOOTSTRAP de Twitter) -  Vidéo graphiste - monteur vidéo - Storyboarder
</p>


			</div>
		</div>
<script type="text/javascript" src="js/cssrefresh.js"></script>
        <script type="text/javascript" src="js/jquery.isotope.min.js"></script>
        <script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
		<script type="text/javascript" language="javascript" src="js/site.js"></script>
<script>
//Portfolio
	var $container = $('.portfolio');
	$container.isotope({
		filter: '*',
		animationOptions: {
			duration: 750,
			easing: 'linear',
			queue: false,
		}
	});

	$('nav.primary ul a').click(function(){
		var selector = $(this).attr('data-filter');
		$container.isotope({
			filter: selector,
			animationOptions: {
				duration: 750,
				easing: 'linear',
				queue: false,
			}
		});
	  return false;
	});

	var $optionSets = $('nav.primary ul'),
	       $optionLinks = $optionSets.find('a');
	 
	       $optionLinks.click(function(){
	          var $this = $(this);
		  // don't proceed if already selected
		  if ( $this.hasClass('selected') ) {
		      return false;
		  }
	   var $optionSet = $this.parents('nav.primary ul');
	   $optionSet.find('.selected').removeClass('selected');
	   $this.addClass('selected'); 
	});
</script>

<script>
//prettyPhoto 
jQuery(document).ready(function(){
	jQuery('a[data-gal]').each(function() {
	    jQuery(this).attr('rel', jQuery(this).data('gal'));
	});  	
	jQuery("a[data-rel^='prettyPhoto']").prettyPhoto({animationSpeed:'slow',theme:'light_square',slideshow:false,overlay_gallery: false,social_tools:false,deeplinking:false});
}); 
</script>



</body>
</html>
