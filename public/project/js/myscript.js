$(document).ready(function(){
	if(window.innerWidth > 768) {
		$('.dropdown').hover(
			function () {
				$(this).children('.dropdown-menu').slideDown(200);
			},
			function () {
				$(this).children('.dropdown-menu').slideUp(200);
			}
		);
	}
	// $('.dropdown-menu').hover(
	// 	function(){
	// 		$(this).children('.li').background(#0F94FE)
	// 	},
	// 	function(){

	// 	};
	// );
});
	 
$(document).ready(function(e){
    $('.search-panel .dropdown-menu').find('a').click(function(e) {
        e.preventDefault();
        var param = $(this).attr("href").replace("#","");
        var concept = $(this).html();
        $('.search-panel span#search_concept').html(concept);
        $('.input-group #search_param').val(param);
    });
});


