$(document).ready(function(){

	$(".img-thumbnail").click(function(){

		var img = $('#modalImg');
		var descripcion = $('#descripcion');

		$("#infoModal").modal();

		descripcion.append(this.title);

		
		img.attr('src',this.src);

	});

});