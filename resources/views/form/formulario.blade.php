@extends('app')

@section('content')
<div id="wrapper">
    <div id="login" class="animate form">

        <div>
            <input id="buscarCedula" placeholder="Buscar">
        </div>
        <?php if (Session::get('error')) { ?>
            <div class="alert alert-danger" >
                <?php echo Session::get('error') ?>
            </div>
        <?php } ?>
        <div id="container_demo" >
        <div class="animate form" id="login">
            <form id="Registro" action="/form/save" name="Registro" method='post'> 
                <ul class="formulario">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                    <li>
                        <h1>Datos Personales</h1> 
                        <p> 
                            <input name="data[id]" type="hidden" id="id" placeholder="Numero De Documento"/>
                            <label type="text"  data-icon="p" >N° Cedula</label>
                            <input name="data[cedula]" type="text" id="cedula" placeholder="Numero De Documento"/>
                        </p>
                        <p> 
                            <label type="text"  data-icon="u">Apellidos</label>
                            <input name="data[apellido]" type="text" id="apellido" placeholder="Apellidos"/>
                        </p>
                        <p> 
                            <label type="text"  data-icon="u">Nombres</label>
                            <input name="data[nombre]" type="text" id="nombre" placeholder="Nombres"  required data-msg="Inserte un nombre"/>
                        </p> 
                        <p> 
                            <label name="user" type="text"  data-icon="u">Cargo</label>
                            <input name="data[cargo]" type="text" id="cargo" placeholder="Cargo"/>
                        </p>
                        <p> 
                            <label name="fechaNacimiento" type="text"  data-icon="u">Fecha de Nacimiento</label>
                            <input name="data[fechaNacimiento]" readonly type="text"  id="fechaNacimiento" placeholder="Fecha de Nacimiento"/>
                        </p>                             
                        <p> 
                            <label name="fechaExpedicion" type="text"  data-icon="u">Fecha de Expedición</label>
                            <input name="data[fechaExpedicion]" readonly type="text"  id="fechaExpedicion" placeholder="Fecha de Expedición"/>
                        </p>
                        <p> 
                            <label name="genero" type="text"  data-icon="u">Genero</label>
                            <select name="data[genero]" id="genero" type="text" id="genero">
                                <option></option>  
                                <option value="M">M</option>
                                <option value="F">F</option>              
                            </select>                                    
                        </p>                                                            

                        <p> 
                            <label name="RH"  type="text" data-icon="u">RH</label>
                            <select name="data[RH]" id="RH" type="text" id="RH">
                                <option></option> 
                                <option value="O">O+</option>
                                <option value="On">O-</option>
                                <option value="A">A+</option>
                                <option value="An">A-</option>
                                <option value="B">B+</option>
                                <option value="Bn">B-</option>
                                <option value="AB">AB+</option>
                                <option value="ABn">AB-</option>                        
                            </select>                                     
                        </p>
                        <p> 
                            <label name="EPS" type="text"  data-icon="u">EPS</label>
                            <input name="data[EPS]" type="text" id="EPS" placeholder="EPS"/>
                        </p>
                        <p> 
                            <label name="pension" type="text"  data-icon="u">Pension</label>
                            <input name="data[pension]" type="text"  id="pension" placeholder="Pension"/>
                        </p>
                    </li>                                                           
                    <li>
                        <p> 
                            <label name="direccion" type="text"  data-icon="u">Dirección</label>
                            <input name="data[direccion]" type="text" id="direccion"  placeholder="Direccion"/>
                        </p>
                        <p> 
                            <label name="telefono1" type="text"  data-icon="u">Telefono1</label>
                            <input name="data[telefono1]" type="text" id="telefono1"  placeholder="Telefono1"/>
                        </p>
                        <p> 
                            <label name="telefono2" type="text"  data-icon="u">Telefono2</label>
                            <input name="data[telefono2]" type="text" id="telefono2"  placeholder="Telefono2"/>
                        </p>
                        <p> 
                            <label name="celular1" type="text"  data-icon="u">Celular1</label>
                            <input name="data[celular1]" type="text" id="celular1"  placeholder="Celular1"/>
                        </p>
                        <p> 
                            <label name="celular2" type="text"  data-icon="u">Celular2</label>
                            <input name="data[celular2]" type="text" id="celular2"  placeholder="Celular2"/>
                        </p> 
                        <p> 
                            <label name="estadoCivil" type="text"  data-icon="u">Estado Civil</label>
                            <input name="data[estadoCivil]" type="text" id="estadoCivil"  placeholder="Estado Civil"/>
                        </p>
                        <p> 
                            <label name="barrio" type="text"  data-icon="u">Barrio</label>
                            <input name="data[barrio]" type="text" id="barrio"  placeholder="Barrio"/>
                        </p>                                 
                        <p> 
                            <label name="email" type="text"  data-icon="e" >E-mail</label>
                            <input name="data[email]" type="text" id="email" placeholder="E-mail"/>
                        </p>
                        <p> 
                            <label name="profesion" type="text"  data-icon="u" >Profesion</label>
                            <input name="data[profesion]" type="text" id="profesion" placeholder="Profesion"/>
                        </p>                                 
                    </li>                          

                    <!-- ****************************************************************************************************  -->
                    <li>       
                        <h1>Confirmar</h1> 
                        <p> 
                            <label type="text"  data-icon="u">Examen Medico</label>
                            <select name="data[examenMedico]" id="examenMedico">                        
                                <option value="1">Si</option>
                                <option value="0" selected>No</option>              
                            </select>                                    
                        </p> 
                        <p>
                            <label type="text"  data-icon="u">Referenciación</label> 
                            <select name="data[referenciacion]" id="referenciacion">
                                <option value="1">Si</option>
                                <option value="0" selected>No</option>
                            </select>                                    
                        </p> 
                        <p> 
                            <label type="text"  data-icon="u">Informe Psicologico</label>
                            <select  name="data[informePsicologico]" id="informePsicologico">
                                <option value="1">Si</option>
                                <option value="0" selected>No</option>             
                            </select>                                     
                        </p> 
                        <p>
                            <label type="text"  data-icon="u">Entrevista 1</label> 
                            <select  name="data[entrevista1]" id="entrevista1">
                                <option value="1">Si</option>
                                <option value="0" selected>No</option>                
                            </select>                                    
                        </p> 
                        <p> 
                            <label type="text"  data-icon="u">Certificaciones Laborales</label>
                            <select  name="data[certificadosLaborales]" id="certificadosLaborales">
                                 <option value="1">Si</option>
                                <option value="0"  selected>No</option>               
                            </select>                                     
                        </p> 
                        <p>
                            <label type="text"  data-icon="u">Certificados de Estudio </label> 
                            <select  name="data[certificadoEstudio]" id="certificadoEstudio">
                                <option value="1">Si</option>
                                <option value="0"  selected>No</option>                 
                            </select>                                     
                        </p> 
                        <p> 
                            <label type="text"  data-icon="u">Libreta Militar</label>
                            <select  name="data[libretaMilitar]" id="libretaMilitar">
                                <option value="1">Si</option>
                                <option value="0"  selected>No</option>                 
                            </select>                                    
                        </p> 
                        <p>
                            <label type="text"  data-icon="u">Pasado Judicial</label> 
                            <select  name="data[pasadoJudicial]" id="pasadoJudicial">
                               <option value="1">Si</option>
                               <option value="0"  selected>No</option>
                            </select>                                     
                        </p>  
                        <p> 
                            <label type="text"  data-icon="u">Fotocopias de Cedula</label>
                            <select  name="data[fotocopiaCedula]" id="fotocopiaCedula">
                                 <option value="1">Si</option>
                                 <option value="0"  selected>No</option>
                            </select>                                     
                        </p>  
                        <p> 
                            <label type="text"  data-icon="u">Hoja de Vida</label>
                            <select  name="data[hojaVida]" id="hojaVida">
                                <option value="1">Si</option>
                                <option value="0"  selected>No</option>
                            </select>                                     
                        </p>  
                        <p> 
                            <label type="text"  data-icon="u">Certificado EPS</label>
                            <select  name="data[certificadoEps]" id="certificadoEps">
                                <option value="1">Si</option>
                                <option value="0"  selected>No</option>
                            </select>                                     
                        </p>                              
                        <p> 
                            <label type="text"  data-icon="u">Certificado AFP</label>
                            <select  name="data[certificadoAfp]" id="certificadoAfp">
                                <option value="1">Si</option>
                                <option value="0"  selected>No</option>            
                            </select>                                     
                        </p>    
                            <p> 
                            <label type="text"  data-icon="u">Certificado Pension</label>
                            <select  name="data[certificadoPension]" id="certificadoPension">
                                <option value="1">Si</option>
                                <option value="0"  selected>No</option>            
                            </select>                                     
                        </p> 
                            <p> 
                            <label type="text"  data-icon="u">Certificado Laboral</label>
                            <select  name="data[certificadoLaboral]" id="certificadoLaboral">
                                <option value="1">Si</option>
                                <option value="0"  selected>No</option>            
                            </select>                                     
                        </p> 
                        <p  class="login button">                                     
                            <input type="submit" name="Registro" value="Guardar" />                                 
                        </p>                                                           
                    </li> 
                </ul>
            </form>  
        </div>
        </div>

    </div>
</div>
@endsection

