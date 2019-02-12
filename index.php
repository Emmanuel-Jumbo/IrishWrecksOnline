<?php
	require "header.php";
?>

	<main>
		<div id="homeImgContainer">
			<script>

				var i = 0;
				var pictures = [];
				var timing = 2500;


				pictures[0] = 'wreck1.jpg'
				pictures[1] = 'wreck2.jpg'
				pictures[2] = 'wreck3.jpg'
				pictures[3] = 'wreck4.jpg'

			    function SlideShow(){
			    	document.Image.src = images[i];

			    if( i < images.length -1){
			    	i++;
			     }	else{
			     	i = 0;
			     }

			     setTimeout("SlideShow()", timing) 

			    }	

			    window.onload = SlideShow;
			</script>

			<img name="Image" width="600" height="300">


			<div class="imgFacts">
				<h2>WrecksFound</h2><br>
				<h3>3534</h3>	
			</div>
		</div>
		<div class="bottomHomePage">
			<h1 class="title">Stupid ShipWrecks</h1>
			<aside>
				<div class="infoBlock">
					<div class="infoImg">
						<img src="imgs/wreck2.jpg">
					</div>
					<div class="infoText">
						<h2 class="title">Title</h2>
						<p>This is a paragraph. Muhahahaha. I am evil</p>
					</div>
				</div>
				<div class="infoBlock">
					<div class="infoImg">
						<img src="imgs/wreck2.jpg">
					</div>
					<div class="infoText">
						<h2 class="title">Title</h2>
						<p>This is a paragraph. Muhahahaha. I am evil</p>
					</div>
				</div>
				<div class="infoBlock">
					<div class="infoImg">
						<img src="imgs/wreck2.jpg">
					</div>
					<div class="infoText">
						<h2 class="title">Title</h2>
						<p>This is a paragraph. Muhahahaha. I am evil</p>
					</div>
				</div>
			</aside>
		</div>
		<?php
		require "footer.php";
		?>
	</main>
