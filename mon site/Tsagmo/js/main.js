$(document).ready(function(){
	alertify.set('notifier','position','top-right')
	$(".links ul li").click(function(e){
		var lien = $(this).html() ;
		if (lien == "Acceuil") {
			lien = 'index';
		}
		lien += '.html';
		location.assign(lien);
	})

	$(".content div button").click(function(e){
		e.stopPropagation();
		alertify.warning("Désolé ce produit est en rupture de stock");
	})
	$(".menus span").click(function(){
		$(".panier").fadeToggle();
	})
})