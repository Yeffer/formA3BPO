$(document).ready(function(){ 

  jQuery.validator.addMethod("lettersonly", function(value, element) {
  return this.optional(element) || /^[a-z]+$/i.test(value);
}, "Solo letras");
	
$("#Registro").validate({

  
		  rules: {
				cedula:  			{required: true,
	                   	          digits:true, 
						          minlength: 7},

				apellido:          {required: true,
				          			lettersonly: true},  

				nombre:            {required: true,
				          			lettersonly: true},  

				cargo:             {required: true,
				          			lettersonly: true},  

				fechaNacimiento:   {required: true,
				           date: true}, 

				fechaExpedicion:   {required: true,
				           date: true},

				lugarExpedicion:   {required: true,
								          maxlength:70},

				genero:            {required: true,
				          			lettersonly: true}, 

				RH: 		           {required: true,
				          			lettersonly: true},

				EPS:               {required: true,
				          			lettersonly: true}, 

				pension:           {required: true,
				          			lettersonly: true}, 

				direccion:         {required: true,
				          			lettersonly: true},

				telefono1:         {required: true,
								          digits:true, 
								          minlength: 7},

				telefono2:         {required: true,
								          digits:true, 
								          minlength: 7},

				celular1:         {required: true,
								          digits:true, 
								          minlength: 7},

				celular2:         {required: true,
								          digits:true, 
								          minlength: 7},
				estadoCivil:    	{required: true,
								        lettersonly: true},

				barrio:  				  {required: true,
								        lettersonly: true},

				email:             {required: true,
									        email: true},  

				profesion:        {required: true},

		       },

		   messages:{

				cedula:           {required: "<span>Debes Ingresar un numero de documento</span>",
				              digits: "<span>Por favor ingresa solo numeros.</span>",
				              minlength:"<span>Por favor ingresar minimo 7 digitos.</span>"
				              },	

				apellido:            {required: "<span>Debes Ingresar tu apellido</span>",
				          lettersonly:"<span>Debes escribir un apellido valido.</span>"
				          },

				nombre:            {required: "<span>Debes Ingresar tu Nombre</span>",
				          lettersonly:"<span>Debes escribir un nombre valido.</span>"
				          }, 

				cargo:             {required: "<span>Debes Ingresar el cargo correspondiente</span>",
				          lettersonly:"<span>Debes escribir un cargo valido.</span>"
				          }, 

				fechaNacimiento:   {required: "<span>Debes Ingresar fecha de Nacimiento</span>",
				              date: "<span>Error en tu fecha de Nacimiento</span>"},

				fechaExpedicion:   {required: "<span>Debes Ingresar fecha de Expedicion</span>",
				                 date: "<span>Error en tu fecha de Expedicion</span>"},

				lugarExpedicion:   {required: "<span>Debes Ingresar lugar de Expedicion</span>",
				                 date: "<span>Error en lugar de Expedicion</span>"},

				genero:  				   {required: "<span>Debes Ingresar tu genero</span>",
				                 lettersonly:"<span>Debes selecionar un genero.</span>"},

				RH:   		         {required: "<span>Debes Ingresar tu RH</span>",
				          lettersonly:"<span>RH no valido.</span>"
				          }, 

				EPS:   		         {required: "<span>Debes Ingresar tu EPS</span>",
				          lettersonly:"<span>EPS no valido.</span>"
				          }, 

				pension:   		     {required: "<span>Debes Ingresar tu fondo de pensiones</span>",
				          lettersonly:"<span>Fondo de pensiones no valido.</span>"
				          }, 	

				direccion:   		   {required: "<span>Debes Ingresar tu direccion</span>",
				          lettersonly:"<span>Direccion no valido.</span>"
				          }, 

				telefono1:          {required: "<span>Debes Ingresar un numero de telefono</span>",
									  	digits: "<span>Por favor ingresa solo numeros.</span>",
										minlength:"<span>Por favor ingresar minimo 7 digitos.</span>"
										},
				telefono2:          {required: "<span>Debes Ingresar un numero de telefono</span>",
									  	digits: "<span>Por favor ingresa solo numeros.</span>",
										minlength:"<span>Por favor ingresar minimo 7 digitos.</span>"
										},	

				celular1:           {required: "<span>Debes Ingresar un numero de celular</span>",
									  	digits: "<span>Por favor ingresa solo numeros.</span>",
										minlength:"<span>Por favor ingresar minimo 10 digitos.</span>"
										},

				celular2:         {required: "<span>Debes Ingresar un numero de celular</span>",
									  	digits: "<span>Por favor ingresa solo numeros.</span>",
										minlength:"<span>Por favor ingresar minimo 10 digitos.</span>"
										},

				estadoCivil:     {required: "<span>Debes Ingresar tu Estado Civil</span>",
				          lettersonly:"<span>Debes escribir un Estado Civil valido.</span>"
				          },

				barrio:           {required:"<span>Debes Ingresar un barrio."},

				email:             {required: "<span>Debes Ingresar tu Correo Electronico</span>",
				              email:"<span>Por favor ingresa una direccion de correo valida.</span>"                
				              }, 

				profesion:         {required:"<span>Debes Ingresar el Nombre de tu Profesion"},		         

			}
 	 });
});