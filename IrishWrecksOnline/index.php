<?php
	require "header.php";
?>

	<main>
		<div class="imgContainer" id="homeImgContainer">
			<div class="imgFacts">
				<h2>#WrecksFound</h2><br>
				<h3>3534</h3>	
			</div>
		</div>
		<div class="bottomHomePage">
			<h1 class="title">Featured Shipwrecks</h1>
			<aside>
				<div class="infoBlock">
					<div class="infoImg">
						<a href="SYClemintine.php"><img src="imgs/SYClemintine_Main.jpg">
						<div class="learnMore">Learn More</div></a>
					</div>
					<div class="infoText">
						<h2 class="title">S.Y. Clemintine</h2>
						<p>Explore the wreck of the S.Y. Clemeintine, an excellent dive for beginners.</p>
					</div>
				</div>
				<div class="infoBlock">
					<div class="infoImg">
						<a href="MVBardiniReefer.php"><img src="imgs/MVBardiniReefer_Main.jpg">
						<div class="learnMore">Learn More</div></a>
					</div>
					<div class="infoText">
						<h2 class="title">M.V. Bardini Reefer</h2>
						<p>Cut your teeth in the world of diving on the near intact wreck of the M.V. Bardini Reefer, perfect for the experienced novice.</p>
					</div>
				</div>
				<div class="infoBlock">
					<div class="infoImg">
						<a href="RMSJusticia.php"><img src="imgs/RMSJusticia_Main.jpg">
						<div class="learnMore">Learn More</div></a>
						
					</div>
					<div class="infoText">
						<h2 class="title">R.M.S. Justicia</h2>
						<p>A true challenge for the most experienced divers, the wreck of the R.M.S. Justicia offers one of the most spectacular sights off the irish coast.</p>
					</div>
				</div>
			</aside>
		</div>
		<script type="text/javascript">
			var bgImageArray = ["imgs/wreck1.jpg", "imgs/wreck2.jpg", "imgs/wreck3.jpeg"],
				secs = 3;
			bgImageArray.forEach(function(img){
    			new Image().src = img; 
    		// caches images, avoiding white flash between background replacements
			});

function backgroundSequence() {
	window.clearTimeout();
	var k = 0;
	for (i = 0; i < bgImageArray.length; i++) {
		setTimeout(function(){ 
			document.getElementById("homeImgContainer").style.background = "url("+ bgImageArray[k] + ")";
			document.getElementById("homeImgContainer").style.backgroundSize ="cover";
			document.getElementById("homeImgContainer").style.backgroundPosition ="50% 50%";
		if ((k + 1) === bgImageArray.length) { setTimeout(function() { backgroundSequence() }, (secs * 1000))} else { k++; }			
		}, (secs * 1000) * i)	
	}
}
backgroundSequence();
		</script>
		<?php
		require "footer.php";
		?>
	</main>
