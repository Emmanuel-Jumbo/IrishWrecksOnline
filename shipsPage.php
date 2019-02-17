<?php
	require "header.php";
?>
	<style>
	#shipSearch{
		position: relative;
		display: inline-block ;
		height: 500px;
		width: 100%;
	}


	#shipSearch aside{
		position: absolute;
		width: 50%;
		height: 100%;
	}
	#mapSearch{
		left: 0;
	}
	#tableSearch{
		right: 0;
	}

	.revealContent{
		margin-top: 20px;
		text-align: center;
		overflow: hidden;
		height: 1250px;
	}

	#shipSearch table, #shipSearch img{
		width: 80%;
		margin: auto;
	}

	#shipSearch img{
		width: 1000px;
	}

	



	.revealWrapper{
		position: relative;
		overflow: hidden;
		height: 100%;
	}



	.revealTop{
		width: 100%;
		height: 100%;
		position: absolute;
		top :0;
		background-color: rgba(115,83,186,0.9);
		border-left: 5px solid #2f195f;
		border-right: 5px solid #2f195f;
	}

	.revealTop {
		display: inline;
	}

	.revealTop button
	{
		
		position: absolute;
		top :47%;
		height: 50px;
		width: 40%;
		font-size: 100%;
		left: 30%;
	}




	#customers {
	  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	  border-collapse: collapse;
	  width: 100%;
	}

	#customers td, #customers th {
	  border: 1px solid #ddd;
	  padding: 8px;
	}

	#customers tr:nth-child(even){background-color: #f2f2f2;}

	#customers tr:hover {background-color: #ddd;}

	#customers th {
	  padding-top: 12px;
	  padding-bottom: 12px;
	  text-align: left;
	  background-color: #4CAF50;
	  color: white;
	}

	</style>

	<main>
		<div id="shipSearch">
			<aside id="mapSearch">
				<div id="mapWrapper"class="revealWrapper">
					<div id="mapContent" class="revealContent">
						<img id="imageMap" src="imgs/MapOfIreland.png" alt="MapOfIreland" usemap="#ShipWrecksMap">
						<map name="ShipWrecksMap">
						  <area shape="rect" coords="308,1214,271,1167" alt="KowloonBridge" href="http://www.irishwrecksonline.net/details/KowloonBridge548.htm">
						  <area shape="rect" coords="199,1154,163,1102" alt="BardiniReefer" href="http://www.irishwrecksonline.net/details/BardiniReefer115a.htm">
						  <area shape="rect" coords="496,1112,462,1063" alt="Celtic" href="http://www.irishwrecksonline.net/details/Celtic134.htm">
						  <area shape="rect" coords="419,1136,452,1091" alt="Lusitania" href="http://www.irishwrecksonline.net/details/Lusitania608.htm">
						  <area shape="rect" coords="280,1138,315,1167" alt="Carnavonshire" href="http://www.irishwrecksonline.net/details/Carnavonshire124.htm">
						  <area shape="rect" coords="602,29,633,75" alt="EmpireHeritage" href="http://www.irishwrecksonline.net/details/EmpireHeritage358.htm">
						  <area shape="rect" coords="651,0,609,28" alt="Justicia" href="http://www.irishwrecksonline.net/details/Justicia544ayy.htm">
						  <area shape="rect" coords="874,611,841,563" alt="Shamrock" href="http://www.irishwrecksonline.net/details/Shamrock689.htm">
						  <area shape="rect" coords="850,614,819,660" alt="Leinster" href="http://www.irishwrecksonline.net/details/Leinster555.htm">
						  <area shape="rect" coords="716,67,748,111" alt="Towy" href="http://www.irishwrecksonline.net/details/Towy800.htm">
						  <area shape="rect" coords="835,204,804,248" alt="Clemintine" href="http://www.irishwrecksonline.net/details/Clemintine200.htm">
						  <area shape="rect" coords="864,158,894,202" alt="Thrush" href="http://www.irishwrecksonline.net/details/Thrush775.htm">
						  <area shape="rect" coords="846,142,864,184" alt="StateOfLouisiana" href="http://www.irishwrecksonline.net/details/StateOfLouisiana700.htm">
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
				<div class="revealWrapper">
					<div class="revealContent">
						<table id="customers">
						  <tr>
						    <th>Company</th>
						    <th>Contact</th>
						    <th>Country</th>
						  </tr>
						  <tr>
						    <td>Alfreds Futterkiste</td>
						    <td>Maria Anders</td>
						    <td>Germany</td>
						  </tr>
						  <tr>
						    <td>Berglunds snabbköp</td>
						    <td>Christina Berglund</td>
						    <td>Sweden</td>
						  </tr>
						  <tr>
						    <td>Centro comercial Moctezuma</td>
						    <td>Francisco Chang</td>
						    <td>Mexico</td>
						  </tr>
						  <tr>
						    <td>Ernst Handel</td>
						    <td>Roland Mendel</td>
						    <td>Austria</td>
						  </tr>
						  <tr>
						    <td>Island Trading</td>
						    <td>Helen Bennett</td>
						    <td>UK</td>
						  </tr>
						  <tr>
						    <td>Königlich Essen</td>
						    <td>Philip Cramer</td>
						    <td>Germany</td>
						  </tr>
						  <tr>
						    <td>Laughing Bacchus Winecellars</td>
						    <td>Yoshi Tannamuri</td>
						    <td>Canada</td>
						  </tr>
						  <tr>
						    <td>Magazzini Alimentari Riuniti</td>
						    <td>Giovanni Rovelli</td>
						    <td>Italy</td>
						  </tr>
						  <tr>
						    <td>North/South</td>
						    <td>Simon Crowther</td>
						    <td>UK</td>
						  </tr>
						  <tr>
						    <td>Paris spécialités</td>
						    <td>Marie Bertrand</td>
						    <td>France</td>
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
						document.getElementById("mapContent").style.overflowX = "scroll";
						document.getElementById("mapWrapper").style.overflowY = "scroll";
						topTime = 104;
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