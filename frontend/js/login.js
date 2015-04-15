$(document).ready(function(){
	  $("#page").load("frontend/pages/login.html", function login(){ 
      $('#slider').slider({full_width: true});


      //Link Registro
      $('#registro').click(load('frontend/pages/registro.html'))
    });
});

