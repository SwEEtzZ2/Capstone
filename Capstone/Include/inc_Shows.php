<div class ="dynamic_content"><center><p>More Shows Coming Soon</p></center>
	<div class = "tab">
		<button class="tablinks" onclick="openShows(event,'One Punch Man')"><img src="Images/OnePunchMan.jpg"/></button>
		<button class="tablinks" onclick="openShows(event,'Fairy Tale')"><img src="Images/FairyTailIcon.jpg"/></button>
		<button class="tablinks" onclick="openShows(event,'Seven Deadly Sins')"><img src="Images/SevenDeadlySins.jpg"/></button>
		<button class="tablinks" onclick="openShows(event,'DragonBall Z')"><img src="Images/DragonBallZ.jpg"/></button>
		<button class="tablinks" onclick="openShows(event,'Bleach')"><img src="Images/Bleach.jpg"/></button>
		<button class="tablinks" onclick="openShows(event,'One Piece')"><img src="Images/OnePiece.jpg"/></button>
		<button class="tablinks" onclick="openShows(event,'Naruto')"><img src="Images/Naruto.jpg"/></button>
	</div>
	<div id="Fairy Tale" class="tabcontent">
		<p><iframe width="400" height="315" src="https://www.youtube.com/embed/sAxbI5FoWbk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</br>Season 1 Episode 1</p>
		<p><iframe width="400" height="315" src="https://www.youtube.com/embed/6tjFX3n_p2o" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</br>Season 1 Episode 2</p>
		<p><iframe width="400" height="315" src="https://www.youtube.com/embed/TfulJ4IkYfQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</br>Season 1 Episode 3</p>
		<p>
	</div>
	<div id = "Seven Deadly Sins" class = "tabcontent">
		<p><iframe width="300" height="315" src="https://www.youtube.com/embed/XBkCGiq7myE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		 </br>Season 1 Episode 1 </p>
		<p><iframe width="300" height="315" src="https://www.youtube.com/embed/Dp-O8XTYxbE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</br> Season 1 Episode 2</p>
		<iframe width="300" height="315" src="https://www.youtube.com/embed/GxalhEk1Cbg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	</div>
	<div id = "One Punch Man" class ="tabcontent">
		<p><iframe width="560" height="315" src="https://www.youtube.com/embed/8ivsT2WUb9o" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</br> Season 1 Episode 1</p>
		<p> 
	</div>
	<div id ="DragonBall Z" class="tabcontent">
		<p>Videos Coming Soon</p>
	</div>
	<div id="Bleach" class="tabcontent">
		<p> Videos Coming Soon</p>
	</div>
	<div id="One Piece" class="tabcontent">
		<p> Video Coming Soon</p>
	</div>
	<div id="Naruto" class="tabcontent">
		<p> Videos Coming Soon</p>
	</div>

<script>
		function openShows(evt, ShowsName) {
		var i, tabcontent, tablinks;
		tabcontent = document.getElementsByClassName("tabcontent");
		for (i = 0; i < tabcontent.length; i++) {
			tabcontent[i].style.display = "none";
		}
		tablinks = document.getElementsByClassName("tablinks");
		for (i = 0; i < tablinks.length; i++) {
			tablinks[i].className = tablinks[i].className.replace(" active", "");
		}
		document.getElementById(ShowsName).style.display = "block";
		evt.currentTarget.className += " active";
	}
</script>
<script>
	$(document).ready(function(){
	  $("button").click(function(){
		$(".tablinks").hide();
	  });
	});
</script>
</div>
