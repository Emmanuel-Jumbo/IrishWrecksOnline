<?php
	require "header.php";
?>


	<main>
		<ul class="breadcrumb">
			  <li><a href="index.php">Home</a></li>
			  <li>Ships</li>
			</ul>
		<h3 id="searchTitleText"></h3>
		<div id="shipSearch">
			<aside id="mapSearch">
				<div id="mapWrapper"class="revealWrapper">
					<div id="mapContent" class="revealContent">
						<img id="imageMap" src="imgs/MapOfIreland.png" alt="MapOfIreland" usemap="#ShipWrecksMap">
						<map name="ShipWrecksMap">
						  <area shape="rect" coords="308,1214,271,1167" alt="KowloonBridge" href="MVKowloonBridge.php">
						  <area shape="rect" coords="199,1154,163,1102" alt="BardiniReefer" href="MVBardiniReefer.php">
						  <area shape="rect" coords="496,1112,462,1063" alt="Celtic" href="SSCeltic.php">
						  <area shape="rect" coords="419,1136,452,1091" alt="Lusitania" href="SSLusitania.php">
						  <area shape="rect" coords="280,1138,315,1167" alt="Carnavonshire" href="SVCarnavonshire.php">
						  <area shape="rect" coords="602,29,633,75" alt="EmpireHeritage" href="SSEmpireHeritage.php">
						  <area shape="rect" coords="651,0,609,28" alt="Justicia" href="RMSJusticia.php">
						  <area shape="rect" coords="874,611,841,563" alt="Shamrock" href="SSShamrockII.php">
						  <area shape="rect" coords="850,614,819,660" alt="Leinster" href="RMSLeinster.php">
						  <area shape="rect" coords="716,67,748,111" alt="Towy" href="SSTowy.php">
						  <area shape="rect" coords="835,204,804,248" alt="Clemintine" href="SYClemintine.php">
						  <area shape="rect" coords="864,158,894,202" alt="Thrush" href="SSThrush.php">
						  <area shape="rect" coords="846,142,864,184" alt="StateOfLouisiana" href="SSStateOfLouisiana.php">
						</map>
					</div>
					<div id="mapTop" class="revealTop">
						<div>
							<button id="mapSearchButton" onclick="revealSearch(false)">Search by Map</button>
						</div>
					</div>
				</div>
			</aside>
			<aside id="tableSearch">
				<div id="tableWrapper" class="revealWrapper">
					<div id="tableContent" class="revealContent">
						<table>
							<tr>
								<th id="topLeftTable">
									Name
								</th>
								<th>
									Vessel Type
								</th>
								<th>
									Date Of Loss
								</th>
								<th>
									Cause Of Loss
								</th>
								<th id="topRightTable">
									Location
								</th>
							</tr>
							<tr onclick="document.location='SSShamrockII.php'" style="cursor:pointer">
								<td>
									S.S. Shamrock II
								</td>
								<td>
									Cargo Steamer
								</td>
								<td>
									5th May 1918
								</td>
								<td>
									Ran Ashore
								</td>
								<td>
									Co. Dublin
								</td>
							</tr>
							<tr onclick="document.location='SSLusitania.php'" style="cursor:pointer">
								<!--<a href="http://www.irishwrecksonline.net/details/Lusitania608.htm"></a>-->
								<td>
									S.S. Lusitania
								</td>
								<td>
									Liner
								</td>
								<td>
									7th May 1915
								</td>
								<td>
									Torpedoed
								</td>
								<td>
									Co. Cork
								</td>
							</tr>
							<tr onclick="document.location='SSEmpireHeritage.php'" style="cursor:pointer">
								<!--<a href="http://www.irishwrecksonline.net/details/EmpireHeritage358.htm"></a>-->
								<td>
									S.S. Empire Heritage
								</td>
								<td>
									Steam Tanker
								</td>
								<td>
									8th September 1944
								</td>
								<td>
									Torpedoed
								</td>
								<td>
									Co. Donegal
								</td>
							</tr>
							<tr onclick="document.location='SSCeltic.php'" style="cursor:pointer">
								<!--<a href="http://www.irishwrecksonline.net/details/Celtic134.htm"></a>-->
								<td>
									S.S. Cletic
								</td>
								<td>
									Liner
								</td>
								<td>
									10th December 1928
								</td>
								<td>
									Struck Rocks
								</td>
								<td>
									Co. Cork
								</td>
							</tr>
							<tr onclick="document.location='SSStateOfLouisiana.php'" style="cursor:pointer">
								<!--<a href="http://www.irishwrecksonline.net/details/StateOfLouisiana700.htm"></a>-->
								<td>
									S.S. State of Louisiana
								</td>
								<td>
									3 Masted Steamer
								</td>
								<td>
									24th December 1878
								</td>
								<td>
									Struck Rocks
								</td>
								<td>
									Co. Antrim
								</td>
							</tr>
							<tr onclick="document.location='SSThrush.php'" style="cursor:pointer">
								<!--<a href=http://www.irishwrecksonline.net/details/Thrush775.htm"></a>-->
								<td>
									S.S. Thrush
								</td>
								<td>
									Salvage Steamer
								</td>
								<td>
									11th April 1917
								</td>
								<td>
									Foundered
								</td>
								<td>
									Co. Antrim
								</td>
							</tr>
							<tr onclick="document.location='SSTowy.php'" style="cursor:pointer">
								<!--<a href="http://www.irishwrecksonline.net/details/Towy800.htm"></a>-->
								<td>
									S.S. Towy
								</td>
								<td>
									Steam Coater
								</td>
								<td>
									20th June 1930
								</td>
								<td>
									Holed
								</td>
								<td>
									Co. Antrim
								</td>
							</tr>
							<tr onclick="document.location='SVCarnavonshire.php'" style="cursor:pointer">
								<!--<a href="http://www.irishwrecksonline.net/details/Carnavonshire124.htm"></a>-->
								<td>
									S.V. Carnavonshire
								</td>
								<td>
									3 Masted Sail Ship
								</td>
								<td>
									11th April 1896
								</td>
								<td>
									Struck Rocks
								</td>
								<td>
									Co. Cork
								</td>
							</tr>
							<tr onclick="document.location='SYClemintine.php'" style="cursor:pointer">
								<!--<a href="http://www.irishwrecksonline.net/details/Clemintine200.htm"></a>-->
								<td>
									S.Y. Clemintine
								</td>
								<td>
									Steam Yacht
								</td>
								<td>
									1918 Approx.
								</td>
								<td>
									Foundered
								</td>
								<td>
									Co. Antrim
								</td>
							</tr>
							<tr onclick="document.location='RMSLeinster.php'" style="cursor:pointer">
								<!--<a href="http://www.irishwrecksonline.net/details/Leinster555.htm"></a>-->
								<td>
									R.M.S. Leinster
								</td>
								<td>
									Steamer
								</td>
								<td>
									10th October 1918
								</td>
								<td>
									Torpedoed
								</td>
								<td>
									Co. Dublin
								</td>
							</tr>
							<tr onclick="document.location='RMSJustica.php'" style="cursor:pointer">
								<!--<a href="http://www.irishwrecksonline.net/details/Justicia544ayy.htm"></a>-->
								<td>
									R.M.S. Justicia
								</td>
								<td>
									White Star Liner
								</td>
								<td>
									19th July 1918
								</td>
								<td>
									Torpedoed
								</td>
								<td>
									Co. Donegal
								</td>
							</tr>
							<tr onclick="document.location='MVKowloonBridge.php'" style="cursor:pointer">
								<!--<a href="http://www.irishwrecksonline.net/details/KowloonBridge548.htm"></a>-->
								<td>
									M.V. Kowloon Bridge
								</td>
								<td>
									Super Bulk Carrier
								</td>
								<td>
									22nd November 1986
								</td>
								<td>
									Ran Aground In Gale
								</td>
								<td>
									Co. Cork
								</td>
							</tr>
							<tr onclick="document.location='MVBardiniReefer.php'" style="cursor:pointer">
								<!--<a href="http://www.irishwrecksonline.net/details/BardiniReefer115a.htm"></a>-->
								<td id="bottomLeftTable">
									M.V. Bardini Reefer
								</td>
								<td>
									Motor Coaster
								</td>
								<td>
									15th December 1982
								</td>
								<td>
									Fire And Explosion
								</td>
								<td id="bottomRightTable">
									Co. Cork
								</td>
							</tr>
						</table>
					</div>
					<div id="tableTop" class="revealTop">
						<button id="tableSearchButton" onclick="revealSearch(true)">Search By Table</button>
					</div>
				</div>	
			</aside>
		</div>
		<?php
			require "footer.php";
		?>



		<script type="text/javascript">

		function revealSearch(isTable)
		{

			var id = setInterval(animate, 3);
			var topTime = 0;
			var searchTime = 50;
			function animate()
			{

				var width = 50 +(50-searchTime);
				var moveOut = width - 50;
				if(searchTime !=-1)
				{
					if(topTime == 100)
					{

						topTime = 104;
						document.getElementById("searchTitleText").style.display = "inline-block";
						
						if(isTable)
						{
							document.getElementById("tableWrapper").style.overflowY = "scroll";
							document.getElementById("tableContent").style.overflowX = "scroll";
							document.getElementById("searchTitleText").innerHTML = "Click on a row to view more info about the ship." ;
						}else
						{
							document.getElementById("mapContent").style.overflowX = "scroll";
							document.getElementById("mapWrapper").style.overflowY = "scroll";
							document.getElementById("searchTitleText").innerHTML = "Click on a pin to view more information about the ship." ;
						}
					}

					if(!isTable)
					{
						document.getElementById("mapSearch").style.width = ""+width+"%";
						document.getElementById("tableSearch").style.right = ""+(-moveOut)+"%";
						document.getElementById("mapTop").style.left = ""+(-topTime)+"%";
					}
					else
					{
						document.getElementById("tableSearch").style.width = ""+width+"%";
						document.getElementById("mapSearch").style.left = ""+(-moveOut)+"%";
						document.getElementById("tableTop").style.right = ""+(-topTime)+"%";
					}
 
					topTime += 2;
					searchTime--;
				}

			}


		}
	</script>
	</main>