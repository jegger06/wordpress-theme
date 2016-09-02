// javascript functionalities
// $.noConflict();
jQuery(document).ready(function($){

	$(document).on('click','.open-search a', function(e){
		e.preventDefault();
		// console.log('click on the open search');
		$('.search-form-container').slideToggle(300);
	});

});