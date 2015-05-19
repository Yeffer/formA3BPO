/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function(){    
    
    $( "#buscarCedula" ).autocomplete({
      	  source: "searchUser",
	  minLength: 3,
	  select: function(event, ui) {
	  	$('#buscarCedula').val(ui.item.cedula);                
                $('#id').val(ui.item.id);
                $('#cedula').val(ui.item.cedula);
                $('#apellido').val(ui.item.apellido);
                $('#nombre').val(ui.item.nombre);
                $('#cargo').val(ui.item.cargo);
                $('#fechaNacimiento').val(ui.item.fechaNacimiento);
                $('#fechaExpedicion').val(ui.item.fechaExpedicion);
                $('#lugarExpedicion').val(ui.item.lugarExpedicion);
                $('#genero').val(ui.item.genero);
                $('#RH').val(ui.item.RH);
                $('#EPS').val(ui.item.EPS);
                $('#pension').val(ui.item.Pension);
                $('#direccion').val(ui.item.direccion);
                $('#telefono1').val(ui.item.telefono1);
                $('#telefono2').val(ui.item.telefono2);
                $('#celular1').val(ui.item.celular1);
                $('#celular2').val(ui.item.celular2);
                $('#estadoCivil').val(ui.item.estadoCivil);
                $('#barrio').val(ui.item.barrio);
                $('#email').val(ui.item.email);
                $('#profesion').val(ui.item.profesion);
                $('#examenMedico').val(ui.item.examenMedico);
                $('#referenciacion').val(ui.item.referenciacion);
                $('#informePsicologico').val(ui.item.informePsicologico);
                $('#entrevista1').val(ui.item.entrevista1);
                $('#certificadosLaborales').val(ui.item.certificadosLaborales);
                $('#certificadoEstudio').val(ui.item.certificadoEstudio);
                $('#libretaMilitar').val(ui.item.libretaMilitar);
                $('#fotocopiaCedula').val(ui.item.fotocopiaCedula);
                $('#hojaVida').val(ui.item.hojaVida);
                $('#certificadoEps').val(ui.item.certificadoEps);
                $('#certificadoAfp').val(ui.item.certificadoAfp);
                $('#certificadoPension').val(ui.item.certificadoPension);
                $('#certificadoLaboral').val(ui.item.certificadoLaboral);
                $('#pasadoJudicial').val(ui.item.pasadoJudicial);
                $('#fecha').val(ui.item.fecha);
	  }

    });
    var options={
                width:800,
                height:900,
                movement:'horizontal',
                next_button:true,
                prev_button:true,
                button_placement:'bottom',
                submit_button:false,
                submit_class:'',
                next_class:'',
                prev_class:'',
                error_class:'error',
                input_error_class:'',
                error_element:'p',
                texts:{
                        next:'next',
                        prev:'prev',
                        submit:'submit'
                      },
                speed:400,               
                slide_on_url:true,
            }
   $('#Registro').jFormslider(options);
  
});
