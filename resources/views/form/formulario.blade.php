@extends('app')

@section('content')
<div id="wrapper">
    <div>
        <div>
            <input id="buscarCedula" placeholder="Buscar">
        </div>
        <?php if (Session::get('error')) { ?>
            <div class="alert alert-danger" >
                <?php echo Session::get('error') ?>
            </div>
        <?php } ?>
        <section class="panel">
            <div class="panel-body">
                <div id="wizard">
                    <h2>First</h2>
                    <section>
                        <form id="Registro" class="form-horizontal" action="/form/save" name="Registro" method='post'> 
                            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">                
                            <div class="form-group">
                                <input name="data[id]" type="hidden" id="id" placeholder="Numero De Documento"/>
                                <label class="col-lg-2 control-label" type="text"  data-icon="p" >N° Cedula</label>
                                <div class="col-lg-8">
                                    <input name="data[cedula]" class="form-control" type="text" id="cedula" placeholder="Numero De Documento"/>                             
                                </div>
                            </div>
                            <div class="form-group">
                                <label type="text" class="col-lg-2 control-label" data-icon="u">Apellidos</label>                                
                                <div class="col-lg-8">
                                    <input name="data[apellido]" class="form-control" type="text" id="apellido" placeholder="Apellidos"/>  
                                </div>
                            </div>
                            <div class="form-group">
                                <label type="text" class="col-lg-2 control-label" data-icon="u">Nombres</label>
                                <div class="col-lg-8">                                    
                                    <input name="data[nombre]" class="form-control" type="text" id="nombre" placeholder="Nombres"  required data-msg="Inserte un nombre"/> 
                                </div>
                            </div>
                            <div class="form-group">
                                <label name="user" type="text" class="col-lg-2 control-label" data-icon="u">Cargo</label>
                                <div class="col-lg-8">
                                    <input name="data[cargo]" class="form-control" type="text" id="cargo" placeholder="Cargo"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label name="fechaNacimiento" type="text" class="col-lg-2 control-label" data-icon="u">Fecha de Nacimiento</label>
                                <div class="col-lg-8">                                    
                                    <input name="data[fechaNacimiento]" class="form-control" readonly type="text"  id="fechaNacimiento" placeholder="Fecha de Nacimiento"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label name="fechaExpedicion" type="text" class="col-lg-2 control-label" data-icon="u">Fecha de Expedición</label>
                                <div class="col-lg-8">                                    
                                    <input name="data[fechaExpedicion]" class="form-control" readonly type="text"  id="fechaExpedicion" placeholder="Fecha de Expedición"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label name="genero" class="col-lg-2 control-label" type="text"  data-icon="u">Genero</label>
                                <div class="col-lg-8">                                    
                                    <select name="data[genero]" class="form-control" id="genero" type="text" id="genero">
                                        <option></option>  
                                        <option value="M">M</option>
                                        <option value="F">F</option>              
                                    </select>    
                                </div>
                            </div>
                            <div class="form-group">
                                <label name="RH"  type="text" class="col-lg-2 control-label" data-icon="u">RH</label>
                                <div class="col-lg-8">
                                    <select name="data[RH]" class="form-control" id="RH" type="text" id="RH">
                                        <option></option> 
                                        <option value="O">O</option>
                                        <option value="On">O -</option>
                                        <option value="A">A</option>
                                        <option value="An">A -</option>
                                        <option value="B">B</option>
                                        <option value="Bn">B -</option>
                                        <option value="AB">AB</option>
                                        <option value="ABn">AB -</option>                        
                                    </select>   
                                </div>
                            </div>
                            <div class="form-group">                                
                                <label name="EPS" type="text" class="col-lg-2 control-label" data-icon="u">EPS</label>
                                <div class="col-lg-8">                   
                                    <input name="data[EPS]" type="text" class="form-control" id="EPS" placeholder="EPS"/>
                                </div>
                            </div>
                            <div class="form-group">                                
                                <label name="pension" type="text" class="col-lg-2 control-label"  data-icon="u">Pension</label>
                                <div class="col-lg-8">                   
                                    <input name="data[pension]" type="text" class="form-control" id="pension" placeholder="Pension"/>
                                </div>
                            </div>                            

                            <h2>Second</h2>

                            <div class="form-group">
                                <label name="direccion" type="text" class="col-lg-2 control-label"  data-icon="u">Dirección</label>
                                <div class="col-lg-8">                                    
                                    <input name="data[direccion]" type="text" class="form-control" id="direccion"  placeholder="Direccion"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label name="telefono1" type="text" class="col-lg-2 control-label" data-icon="u">Telefono1</label>
                                <div class="col-lg-8">
                                    <input name="data[telefono1]" type="text" class="form-control" id="telefono1"  placeholder="Telefono1"/>                                    
                                </div>
                            </div>
                            <div class="form-group">
                                <label name="telefono2" type="text" class="col-lg-2 control-label" data-icon="u">Telefono2</label>                                    
                                <div class="col-lg-8">
                                    <input name="data[telefono2]" type="text" class="form-control" id="telefono2"  placeholder="Telefono2"/>                                    
                                </div>
                            </div>
                            <div class="form-group">
                                <label name="celular1" type="text" class="col-lg-2 control-label" data-icon="u">Celular1</label>                                   
                                <div class="col-lg-8">                                    
                                    <input name="data[celular1]" type="text" class="form-control" id="celular1"  placeholder="Celular1"/>
                                </div>
                            </div>   
                            <div class="form-group">
                                <label name="celular2" type="text" class="col-lg-2 control-label" data-icon="u">Celular2</label>
                                <div class="col-lg-8">                                    
                                    <input name="data[celular2]" type="text" id="celular2" class="form-control" placeholder="Celular2"/>
                                </div>
                            </div>    
                            <div class="form-group">
                                <label name="estadoCivil" type="text" class="col-lg-2 control-label" data-icon="u">Estado Civil</label>
                                <div class="col-lg-8">                                    
                                    <input name="data[estadoCivil]" type="text" class="form-control" id="estadoCivil"  placeholder="Estado Civil"/>
                                </div>
                            </div>    
                            <div class="form-group">
                                <label name="barrio" type="text" class="col-lg-2 control-label"  data-icon="u">Barrio</label>
                                <div class="col-lg-8">                                    
                                    <input name="data[barrio]" type="text" id="barrio" class="form-control"  placeholder="Barrio"/>
                                </div>
                            </div> 
                            <div class="form-group">
                                <label name="email" type="text" class="col-lg-2 control-label" data-icon="e" >E-mail</label>
                                <div class="col-lg-8">                                    
                                    <input name="data[email]" type="text" class="form-control" id="email" placeholder="E-mail"/>
                                </div>
                            </div> 
                            <div class="form-group">
                                <label name="profesion" type="text" class="col-lg-2 control-label" data-icon="u" >Profesion</label>
                                <div class="col-lg-8">                                    
                                    <input name="data[profesion]" type="text" class="form-control" id="profesion" placeholder="Profesion"/>
                                </div>
                            </div>                 

                            <h2>Third</h2>

                            <div class="form-group">                                
                                <label type="text" class="col-lg-2 control-label" data-icon="u">Examen Medico</label>
                                <div class="col-lg-8">                                    
                                    <select name="data[examenMedico]" class="form-control" id="examenMedico">                        
                                        <option value="1">Si</option>
                                        <option value="0" selected>No</option>              
                                    </select>  
                                </div>
                            </div>
                            <div class="form-group">                                
                                <label type="text" class="col-lg-2 control-label" data-icon="u">Referenciación</label> 
                                <div class="col-lg-8">               
                                    <select name="data[referenciacion]" class="form-control" id="referenciacion">
                                        <option value="1">Si</option>
                                        <option value="0" selected>No</option>
                                    </select> 
                                </div>
                            </div>
                            <div class="form-group">
                                <label type="text" class="col-lg-2 control-label" data-icon="u">Informe Psicologico</label>
                                <div class="col-lg-8">
                                    <select  name="data[informePsicologico]" class="form-control" id="informePsicologico">
                                        <option value="1">Si</option>
                                        <option value="0" selected>No</option>             
                                    </select>  
                                </div>
                            </div>
                            <div class="form-group">
                                <label type="text" class="col-lg-2 control-label" data-icon="u">Entrevista 1</label> 
                                <div class="col-lg-8">
                                    <select  name="data[entrevista1]" class="form-control" id="entrevista1">
                                        <option value="1">Si</option>
                                        <option value="0" selected>No</option>                
                                    </select>                               
                                </div>
                            </div>
                            <div class="form-group">                                
                                <label type="text" class="col-lg-2 control-label" data-icon="u">Certificaciones Laborales</label>
                                <div class="col-lg-8">
                                    <select  name="data[certificadosLaborales]" class="form-control" id="certificadosLaborales">                                    
                                        <option value="1">Si</option>
                                        <option value="0" selected>No</option>             
                                    </select>  
                                </div>
                            </div>
                            <div class="form-group">                                
                                <label type="text" class="col-lg-2 control-label" data-icon="u">Certificados de Estudio </label> 
                                <div class="col-lg-8">                                  
                                    <select  name="data[certificadoEstudio]" class="form-control" id="certificadoEstudio">
                                        <option value="1">Si</option>
                                        <option value="0"  selected>No</option>                 
                                    </select> 
                                </div>
                            </div> 
                            <div class="form-group">                                
                                <label type="text" class="col-lg-2 control-label" data-icon="u">Libreta Militar</label>
                                <div class="col-lg-8">                                                                    
                                    <select  name="data[libretaMilitar]" class="form-control" id="libretaMilitar">
                                        <option value="1">Si</option>
                                        <option value="0"  selected>No</option>                 
                                    </select> 
                                </div>
                            </div> 
                            <div class="form-group">                                
                                <label type="text" class="col-lg-2 control-label" data-icon="u">Pasado Judicial</label> 
                                <div class="col-lg-8">                                                                                                     
                                    <select  name="data[pasadoJudicial]" class="form-control" id="pasadoJudicial">
                                        <option value="1">Si</option>
                                        <option value="0"  selected>No</option>
                                    </select> 
                                </div>
                            </div> 
                            <div class="form-group">                                
                                <label type="text"  data-icon="u" class="col-lg-2 control-label">Fotocopias de Cedula</label>
                                <div class="col-lg-8">                                                                                                     
                                    <select  name="data[fotocopiaCedula]" class="form-control" id="fotocopiaCedula">
                                        <option value="1">Si</option>
                                        <option value="0"  selected>No</option>
                                    </select>   
                                </div>
                            </div> 
                            <div class="form-group">                                
                                <label type="text"  data-icon="u" class="col-lg-2 control-label">Hoja de Vida</label>
                                <div class="col-lg-8">                                                                                                     
                                    <select  name="data[hojaVida]" class="form-control" id="hojaVida">
                                        <option value="1">Si</option>
                                        <option value="0"  selected>No</option>
                                    </select>   
                                </div>
                            </div> 
                            <div class="form-group">                                
                                <label type="text"  data-icon="u" class="col-lg-2 control-label">Certificado EPS</label>
                                <div class="col-lg-8">                                                                                                     
                                    <select  name="data[certificadoEps]" class="form-control" id="certificadoEps">
                                        <option value="1">Si</option>
                                        <option value="0"  selected>No</option>
                                    </select>   
                                </div>
                            </div> 
                            <div class="form-group">                                
                                <label type="text"  data-icon="u" class="col-lg-2 control-label">Certificado AFP</label>
                                <div class="col-lg-8">                                                                                                     
                                    <select  name="data[certificadoAfp]" class="form-control" id="certificadoAfp">
                                        <option value="1">Si</option>
                                        <option value="0"  selected>No</option>
                                    </select>   
                                </div>
                            </div> 
                            <div class="form-group">                                
                                <label type="text"  data-icon="u" class="col-lg-2 control-label">Certificado Pension</label>
                                <div class="col-lg-8">                                                                                                     
                                    <select  name="data[certificadoPension]" id="certificadoPension" class="form-control">
                                        <option value="1">Si</option>
                                        <option value="0"  selected>No</option>
                                    </select>   
                                </div>
                            </div> 
                            <div class="form-group">                                
                                <label type="text"  data-icon="u" class="col-lg-2 control-label">Certificado Laboral</label>
                                <div class="col-lg-8">                                                                                                     
                                    <select  name="data[certificadoLaboral]" id="certificadoLaboral" class="form-control">
                                        <option value="1">Si</option>
                                        <option value="0"  selected>No</option>
                                    </select>   
                                </div>
                            </div> 
                            <div class="form-group">                                
                                <div class="col-lg-8">                                                                                                     
                                    <input type="submit" name="Registro" class="col-lg-2 control-label" value="Guardar" />    
                                </div>
                            </div>                          
                        </form>    
                    </section>
                </div>
            </div>
        </section>                
    </div>
</div>
@endsection
<!--****************************************************** -->


<script src="js/jquery.js"></script>
<script src="bs3/js/bootstrap.min.js"></script>
<script src="js/jquery.steps.js"></script>

<script>
    $(function ()
    {
        $("#wizard").steps({
            headerTag: "h2",
            bodyTag: "section",
            transitionEffect: "slideLeft"
        });

        $("#wizard-vertical").steps({
            headerTag: "h2",
            bodyTag: "section",
            transitionEffect: "slideLeft",
            stepsOrientation: "vertical"
        });
    });
</script>