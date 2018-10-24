<body>
<head>
    <meta charset="utf-8">
    <title>Test mvc  <?php  echo ($action); ?> </title>
    <link rel="stylesheet" href="./vue/styleCSS/style.css"/>
    <link rel="stylesheet" href="./vue/styleCSS/bootstrap.css"/>
    <link rel="stylesheet" href="./vue/styleCSS/normalize.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<div class="container">
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
		<div class="cellules total silver"><b>total par module</b></div>
	</div>
	<!-- Premiere ligne -->
	<div class="row edt">
		<div class="cellules titre droppable silver"></div>
		<div class="cellules droppable silver"><p class=''>1-1</p></div>
		<div class="cellules droppable silver"><p class=''>1-2</p></div>
		<div class="cellules droppable silver"><p class=''>1-3</p></div>
		<div class="cellules droppable silver"><p class=''>1-4</p></div>
		<div class="cellules droppable silver"><p class=''>1-5</p></div>
		<div class="cellules droppable silver"><p class=''>1-6</p></div>
		<div class="cellules total silver"><p class='tot'>-</p></div>
	</div>
	<!-- <div class="row edt">
		<div class="cellules titre draggable purple">
				<p class='mod'>M12</p><p class='pos'>2</p></div>
		<div class="cellules droppable silver"><p class=''>2-1</p></div>
		<div class="cellules droppable silver"><p class=''>2-2</p></div>
		<div class="cellules droppable silver"><p class=''>2-3</p></div>
		<div class="cellules droppable silver"><p class=''>2-4</p></div>
		<div class="cellules droppable silver"><p class=''>2-5</p></div>
		<div class="cellules droppable silver"><p class=''>2-6</p></div>
		<div class="cellules total silver"><p class='tot'>-</p></div>
	</div> -->
	<div class="row cptV">
		<div class="cellules silver"><p><b>total/période</b></p></div>
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

<!-- JQUERY -->
<script>
$( ".titre" ).click(function() {
	//Fonction Ajax
	$.ajax({
		url : 'localhost/edt/ModuleControlleur/index',
		type : 'GET',
		data : 'id='+id,
		success : function(code_html, statut){
			alert("A Malibu");
		},
		error : function(resultat, statut, erreur){
		},
		complete : function(resultat, statut){
		}
	});
});
</script>
</html>
