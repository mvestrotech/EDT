		var baseurl = window.location.origin + window.location.pathname;
		if (baseurl.charAt(baseurl.length - 1) == "/") {
			baseurl = baseurl.slice(0, -1);
		}

		/*
		* Handler sur click sur le bouton "Générer EDT"
		*/
		$("#start").one('click', function () {
			var nb_col = 0;
				//Récupération des périodes
				$.get(baseurl + "?controle=PeriodeController&action=index", function (data, status) {
				var object = JSON.parse(data);
				var cpt = object.length;
				nb_col = cpt+1;
				var id_tot = cpt +1;
				//Insertion de la colonne des totaux par module
				$('<div class="cellules total silver" id=titretotm-'+(cpt+1)+'><p><b>Total par Module</b></p></div>').insertAfter($('#titre'));
				for (var o in object) {
					var item = object[o];
					$('<div class="cellules titre lime" id=' + cpt + '>' + item.periode + ' (' + item.diff + ' sem)</div>').insertAfter($('#titre'))
					//Insertion de la ligne pour les totaux par période
					$('<div class="cellules total silver text-center" id=tot-'+cpt+'>0</div>').insertAfter($('#titre_total_periode'))
					cpt = cpt - 1;
				}
			})
			//Récupération des modules
			$.get(baseurl + "?controle=ModuleController&action=index", function (data, status) {
				var object = JSON.parse(data);
				for (var o in object) {
					var item = object[o];
					//Insertion des modules dans le tableau
					$('<div class="row edt" id= row' + item.id + '>' +
						'<div class="cellules titre droppable silver" id=' + item.id + '>' + item.nom + '</div>').insertAfter($('#H'));
					//Insertion de la colonne des totaux par module
					for (var i=1;i<nb_col;i++){
						$('#row' + item.id).append('<div class="cellules titre droppable silver" id=' + item.id + '-' + i + '></div>');
					}
					$('#row' + item.id).append('<div class="cellules total silver text-center" id=totm-' + item.id +'>0</div>');
					//Insertion des modules dans le select
					$('#select_module').append('<option id=' + item.id + '>' + item.nom + '</option>');
				}
			});
		});

		/*
		* Handler du select module
		*/
		$('#select_module').change(function () {
			var id = $(this).children(":selected").attr("id");
			$.get(baseurl + "?controle=MatiereController&action=showByModule&id=" + id, function (data, status) {
				var object = JSON.parse(data);
				$('#label_matiere').css("display", "block");
				$()
				$("#select_matiere").css("display", "block");
				for (var o in object) {
					var item = object[o];
					$('#select_matiere').append('<option id=' + item.id + '>' + item.nom + '</option>');
				}
				$('#select_module').prop('disabled', 'disabled');
			});
		});

		/*
		* Handler du select matiere
		*/
		$('#select_matiere').change(function () {
			//Récupération des périodes
			$.get(baseurl + "?controle=PeriodeController&action=index", function (data, status) {
				var object = JSON.parse(data);
				$('#label_periode').css("display", "block");
				$("#select_periode").css("display", "block");
				for (var o in object) {
					var item = object[o];
					$('#select_periode').append('<option id=' + item.id + '>' + item.periode + '(' + item.diff + 'sem)</option>');
				}
				$('#select_matiere').prop('disabled', 'disabled');
			});
		});

		/*
		* Handler du select periode
		*/
		$('#select_periode').change(function () {
			$("#validate").css("display", "block");
		});
		/*
		* Handler sur bouton de validation
		*/
		$('#validate').click(function () {
			id_module = $('#select_module').children(":selected").attr("id");
			id_matiere = $('#select_matiere').children(":selected").attr("id");
			id_periode = $('#select_periode').children(":selected").attr("id");
			$.get(baseurl + "?controle=MatiereController&action=show&id=" + id_matiere, function (data, status) {
				var item = JSON.parse(data);
				/*
				* Cette partie est assez compliqué j'ai donc mit un fichier .txt pour expliquer mon algorithme.
				*/

				//Si on veut ajouter à la première case
				if (id_periode == 1) {
					//Si la div est vide mais existe
					if ($('#' + id_module + '-' + id_periode).is(':empty')) {
						$('#' + id_module + '-' + id_periode).html('<p id="matiere">'+item.label+'</p>');
						calculateTotal(id_periode,item.nbHeure);
						calculateTotalM(id_module,item.nbHeure);
						id_div = '#'+id_module+'-'+id_periode;
						id_p = '#matiere'
						getInfo(id_div);
					}
					//La div existe mais n'est pas vide, on doit donc concaténer le texte
					else if ($('#' + id_module + '-' + id_periode).length) {
						var old_text = $('#' + id_module + '-' + id_periode).html();
						$('#' + id_module + '-' + id_periode).html(old_text + '<p id="matiere">'+item.label+'</p>');
						calculateTotal(id_periode,item.nbHeure);
						calculateTotalM(id_module,item.nbHeure);
						id_div = '#'+id_module+'-'+id_periode;
						id_p = '#matiere'
						getInfo(id_div);
					}
					//La div n'existe pas, on doit donc la créer				
					else {
						$('#row' + id_module).append('<div class="cellules titre droppable silver" id=' + id_module + '-' + id_periode + '>' +'<p id="matiere">'+item.label + '</p></div>');
						calculateTotal(id_periode,item.nbHeure);
						calculateTotalM(id_module,item.nbHeure);
						id_div = '#'+id_module+'-'+id_periode;
						id_p = '#matiere'
						getInfo(id_div);
					}
				}
				else {
					for (var i = 1; i < id_periode; i++) {
						//Si la div n'existe pas on la créer 
						if ($('#' + id_module + '-' + i).length == 0) {
							$('#row' + id_module).append('<div class="cellules titre droppable silver" id=' + id_module + '-' + i + '></div>');
						}
					}
					//Si la div est vide mais existe
					if ($('#' + id_module + '-' + i).is(':empty')) {
						$('#' + id_module + '-' + id_periode).html('<p id="matiere">'+item.label+'</p>');
						calculateTotal(id_periode,item.nbHeure);
						calculateTotalM(id_module,item.nbHeure);
						id_div = '#'+id_module+'-'+id_periode;
						id_p = '#matiere'
						getInfo(id_div);
					}
					//La div existe mais n'est pas vide on doit donc concaténer le texte
					else if ($('#' + id_module + '-' + id_periode).length) {
						var old_text = $('#' + id_module + '-' + id_periode).html();
						$('#' + id_module + '-' + id_periode).html(old_text + '<p id="matiere">'+item.label+'</p>');
						calculateTotal(id_periode,item.nbHeure);
						calculateTotalM(id_module,item.nbHeure);
						id_div = '#'+id_module+'-'+id_periode;
						id_p = '#matiere'
						getInfo(id_div);
					}
					//La div n'existe pas on doit donc créer la div
					else {
						$('#row' + id_module).append('<div class="cellules titre droppable silver" id=' + id_module + '-' + id_periode + '>' + '<p id="matiere">'+item.label +'</p>'+ '</div>');
						calculateTotal(id_periode,item.nbHeure);
						calculateTotalM(id_module,item.nbHeure);
						id_div = '#'+id_module+'-'+id_periode;
						id_p = '#matiere'
						getInfo(id_div);
					}
				}
			});
			$(this).css("display", "none");
			$("#reload_page").css("display", "block");
		});
		/*
		* Handler du bouton d'ajout d'une nouvelle matière
		*/
		$('#reload_page').click(function () {
			$('#label_matiere').css("display", "none");
			$('#select_matiere').removeAttr('disabled');
			$("#select_matiere").css("display", "none");
			$('#select_matiere').children('option:not(:first)').remove();
			$('#select_matiere option:contains("Matiere")').prop('selected', true);

			$('#label_periode').css("display", "none");
			$('#select_periode').css("display", "none");
			$('#select_periode').children('option:not(:first)').remove();

			$(this).css("display", "none");
			$('#select_module').removeAttr('disabled');
			$('#select_module option:contains("Module")').prop('selected', true);
		});
		/*
		* Fonction permettant de mettre à jour le contenu du total correspondant à la période sélectionné
		*/
		function calculateTotal(id_periode, nbHeure){
			var old_total  = $('#tot-'+id_periode).html();
			var old_total_int = parseInt(old_total);
			nbHeure = parseInt(nbHeure);
			var new_total = old_total_int + nbHeure;
			$('#tot-'+id_periode).empty();
			$('#tot-'+id_periode).html(new_total);
		}
		/*
		* Fonction permettant de mettre à jour le contenu du total correspondant au module sélectionné
		*/
		function calculateTotalM(id_module,nbHeure){
			var old_total  = $('#totm-'+id_module).html();
			var old_total_int = parseInt(old_total);
			nbHeure = parseInt(nbHeure);
			var new_total = old_total_int + nbHeure;
			$('#totm-'+id_module).empty();
			$('#totm-'+id_module).html(new_total);
		}
		function getInfo(id_div){
			$(id_div).find('p').click(function(){
				var label = $('p').text();
				alert(label);
				// $.get(baseurl + '?controle=MatiereController&action=showByLabel&id="'+label+'"', function (data, status) {
				// 	var obj = JSON.parse(data);
				// 	alert("Nom complet: "+obj.nom);
				// });
			})
		}