<style>
* {border:0;padding:0;margin:0;}
body 	{ padding-top:50px; margin-left:2em}
.image-centree { display: block; margin-right: auto; margin-left: auto;  }

.couleur {	border: 4px solid #888; width: 10em; height:5em;
			margin:0;
			display:none;
			/*display:inline-block*/}

.zone {
	margin-bottom : 2em; ; /*border : 0.2em green solid;*/ 
	min-width : 164em; 
	clear:left
}

.cellules {	border: 4px solid #888; 
			width: 10em; height:5em;
			float:left; 
			padding-top:1em}
			
.pos {display:none} /*  les div internes de position disparaissent*/

.debut {width: 5em; height:2em;}
.titre {font-weight: bold}


	
/*éviter les débordements de texte sur l'EDT*/
#edt {word-wrap: break-word}
/* et pas de débordement de cellules flottantes
   on a content="" sinon l'élément n'est pas généré. */
.cellules:after {
	content: ""; 
	display: table;
	clear: both;
	overflow:hidden;
}

/*première case : haut-gauche EDT*/
p.hautD {  position:relative; z-index:+3; top:-10px; right:-70px}
p.basG {  position:relative; z-index:+2; top:-10px; right:-5px}
p.barre {
  position:relative;
  top:0%; 
  width:100%;
  padding:0;
  margin:0;
  border:0;
  font-size:0;
  opacity:0.4;
}   

/*.container {min-with:300em}*/

.blue {background: blue;}
.red {background: red;}
.yellow {background: yellow;}
.gray {background: gray;}
.orange {background: orange;}
.gray {background: gray;}
.navy {background: navy;}
.purple {background: purple;}
.lime {background: lime;}
.olive {background: olive;}
.teal {background: teal;}
.silver {background: silver;}
.fuchsia {background: fuchsia;}
.aqua {background: aqua;}

</style>

</head>
<body>

<h1 class="text-center">Grille d'EDT modules/périodes</h1>

<div class="zone" id="btns">
<button class="btn" id="edt">sélection d'un edt</button>
<button class="btn" id="matiere">créer une matière dans l'edt</button>
<button class="btn" id="calculer">calculer les heures</button>
</div>  <!-- fin zone boutons-->

<div class="zone" id="clrs">
<div class="couleur draggable blue">0000</div>
<div class="couleur draggable red">0001</div>
<div class="couleur draggable yellow">0010</div>
<div class="couleur draggable orange">0011</div>
<div class="couleur draggable navy">0100</div>
<div class="couleur draggable lime">0101</div>
<div class="couleur draggable purple">0110</div>
<div class="couleur draggable teal">0111</div>
<div class="couleur draggable silver">1000</div>
<div class="couleur draggable gray">1011</div>
<div class="couleur draggable fuchsia">1011</div>
<div class="couleur draggable aqua">1011</div>
<div class="couleur draggable olive">1110</div>
</div>  <!-- fin zone de choix des couleurs-->


<div class="zone" id="edt">	
	<div class="row"  id="H">
		<div class="cellules titre silver">
				<p class="barre"></p>
				<p class="hautD">période</p> 
				<p class="basG">modules</p>  </div>
		<div class="cellules titre lime">sept-oct (3sem)</div>
		<div class="cellules titre lime">nov-dec (3sem)</div>
		<div class="cellules titre lime">janv-fev (3sem)</div>
		<div class="cellules titre lime">mars (2sem)</div>
		<div class="cellules titre lime">mai(3sem)</div>
		<div class="cellules titre lime">juin-juillet(3sem)</div>
		<div class="cellules total silver">total par module</div>
	</div>
	<div class="row edt">
		<div class="cellules titre draggable blue">
				<p class='mod'>M11</p><p class='pos'>1</p></div>
		<div class="cellules droppable silver"><p class='pos'>1-1</p></div>
		<div class="cellules droppable silver"><p class='pos'>1-2</p></div>
		<div class="cellules droppable silver"><p class='pos'>1-3</p></div>
		<div class="cellules droppable silver"><p class='pos'>1-4</p></div>
		<div class="cellules droppable silver"><p class='pos'>1-5</p></div>
		<div class="cellules droppable silver"><p class='pos'>1-6</p></div>
		<div class="cellules total silver"><p class='tot'>-</p></div>
	</div>
	<div class="row edt">
		<div class="cellules titre draggable purple">
				<p class='mod'>M12</p><p class='pos'>2</p></div>
		<div class="cellules droppable silver"><p class='pos'>2-1</p></div>
		<div class="cellules droppable silver"><p class='pos'>2-2</p></div>
		<div class="cellules droppable silver"><p class='pos'>2-3</p></div>
		<div class="cellules droppable silver"><p class='pos'>2-4</p></div>
		<div class="cellules droppable silver"><p class='pos'>2-5</p></div>
		<div class="cellules droppable silver"><p class='pos'>2-6</p></div>
		<div class="cellules total silver"><p class='tot'>-</p></div>
	</div>
	<div class="row cptV">
		<div class="cellules silver"><p>total/période</p></div>
		<div class="cellules total silver"><p class='tot'>-</p></div>
		<div class="cellules total silver"><p class='tot'>-</p></div>
		<div class="cellules total silver"><p class='tot'>-</p></div>
		<div class="cellules total silver"><p class='tot'>-</p></div>
		<div class="cellules total silver"><p class='tot'>-</p></div>
		<div class="cellules total silver"><p class='tot'>-</p></div>
		<div class="cellules total silver"><p></p></div>
	</div>
  </div>  <!-- fin zone EDT-->


</div>  <!-- fin container -->
</body>
</html>