
<div id="subfooter">
<div class="subfooter-box">
    <!-- <img class="d-none d-sm-block" src="/epana/img/personaje1_footer.png"> -->
<div class="container" >
    <div class="row">
        <div class="col-sm-4 imgsubfo" >
                
                <img class="d-none d-sm-block" src="/epana/img/personajes_footer_rp.png">
        </div>
        <div class="col-sm-5 contact-nube">
            <h2>Contacto</h2>
            <p>Ministerio de Educación de la República Dominica</p>
            <div class="boxcontacto_rp">
                <p><span class="txt-ul">Dirección</span></p>
                <p>Avenida Máximo Gómez esquina Santiago, No.02 Gazcue, Distrito Nacional, República Dominicana.</p>
                <p><span class="txt-ul">Teléfono</span></p>
                <p>809-688-9700</p>
                <p><span class="txt-ul">Correo electrónico</span></p>
                <p><a href="mailto:info@minerd.gob.do">info@minerd.gob.do</a></p>
            </div>
            <!-- <p>Si necesitás más información <br>o querés apoyar esta iniciativa <br>escribinos a<br><strong>
                <a href="mailto:ementores@paniamor.org">ementores@paniamor.org</a></strong>
            </p> -->
        </div>
        <div class="col-sm-2 mailfo">
            <!-- <h2>¡UNETE A...</h2>
            <p>Apuntate a nuestra lista de correos para
ser el primero en enterarte de lo nuevo</p> -->
<img class="d-none d-sm-block" src="/epana/img/personaje1_footer_rp.png">
        </div>
    </div>
</div>
</div>
</div>

<section id="prefooter">
    <div class="container">
            <div class="row logosbottom">
            <div class="row">
                <div class="col">
                    <p class="support-label">Con el apoyo de:</p>
                    <a href="https://www.end-violence.org" target="_blank" rel="noopener noreferrer">
                    <img src="/familias/img/footer/EndViolence_Logo_rp.png" alt="End Violence Against Children" class="img-fluid prefooter-logos">
                    </a>
                </div>
                <div class="col">
                    <p class="support-label">Respaldo institucional de:</p>
                    <div class="res-insti-rp">
                        <a href="https://plan-international.org/es/republica-dominicana" target="_blank">
                        <img src="/familias/img/footer/PLAN.png" alt="End Violence Against Children" class="img-fluid prefooter-logos" style="width: 45%;margin-left: 10px;">
                        </a>
                        <a href="https://www.unicef.org/" target="_blank">
                        <img src="/familias/img/footer/Unicef-logo.png" alt="End Violence Against Children" class="img-fluid prefooter-logos" style="width: 45%;margin-left: 10px;">
                        </a>
                    </div>
                </div>
                <div class="col">
                    <p class="support-label">Una iniciativa de:</p>
                    <a href="http://www.ministeriodeeducacion.gob.do/" target="_blank">
                    <img src="/familias/img/footer/LOGO_MINERD.png" alt="Paniamor" class="img-fluid prefooter-logos" style="width: 40%;">
                    </a>
                </div>
                
            </div>
            </div>
    </div>
</section>

<footer id="footer">
<!--     <div class="container-full footer-bg-1 padding-top-bottom-footer"></div>
    <div class="container-full footer-bg-2 padding-top-bottom-footer"></div> -->
    <div class="footer-bg-3 footer-div-copyright">
    <p class="text-center no-margin-top-bottom text-opensans">Todos los derechos reservados &copy; Ministerio de Educación de la República Dominicana <?= date("Y") ?></p>
    </div>
</footer>

<!-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->



<!-- <h1> Click Me </h1> -->

<!-- <button class="btn btn-default" data-toggle="modal" data-target=".bs-example-modal-lg">Large modal</button> -->

<div class="modal fade modal_encuesta" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">

    <div class="modal-content">
        <div class="modal-head">
                        <button type="button" class="close-m" data-dismiss="modal" aria-label="Close">x</button>
                    </div>
        <h3>¿Qué te parece <img src="/epana/img/epana_survey.png">?</h3>

        <div class="d-none alert-bien">
            <p></p>
            <p></p>
            <p></p>
            <p class="text-center label-small quest-email"><strong> Gracias.</strong></p>
        </div>


      <div id="modal_encuesta" class="carousel slide">


  

  <!-- Wrapper for slides -->

<div id="encuesta">
  <div class="carousel-inner">
    <div class="carousel-item active">
        <div class="form-group email-input">
            <p class="text-center label-small quest-email"><strong> ¿Te gusta este sitio?</strong></p>
            <div class="row">
              <div class="col"><input type="radio" name="q1" value="1" class="q s1" id="q1-1"><label for="q1-1">1</label>
                </div>
              <div class="col"><input type="radio" name="q1" value="2" class="q s2" id="q1-2"><label for="q1-2">2</label>
                </div>
              <div class="col"><input type="radio" name="q1" value="3" class="q s3" id="q1-3"><label for="q1-3">3</label>
                </div>
              <div class="col"><input type="radio" name="q1" value="4" class="q s4" id="q1-4"><label for="q1-4">4</label>
                </div>
              <div class="col"><input type="radio" name="q1" value="5" class="q s5" id="q1-5"><label for="q1-5">5</label>
                </div>
            </div>
            <p class="small d-none" id="warone">Debés elegir una de las opciones.</p>
            
        </div>
        
    </div> <!-- 1 -->
    <div class="carousel-item ">
        <div class="form-test">
            <p class="text-center label-small quest-email"><strong>¿Se lo compartirías a tus amig@s?</strong></p>
            <div class="d-flex">
              <input type="radio" name="q2" value="1" class="q s1" id="q2-1" ><label for="q2-1" class="col">Claro</label>
              <input type="radio" name="q2" value="2" class="q s2" id="q2-2"><label for="q2-2" class="col">Tal vez luego</label>
              <input type="radio" name="q2" value="3" class="q s3" id="q2-3"><label for="q2-3" class="col">No lo creo</label>
            </div>
            <p class="small d-none text-center" id="wartwo">Debés elegir una de las opciones.</p>
        </div> 
    </div> <!-- 2 -->
     <div class="carousel-item ">
        <div class="form-group email-input">
            <p class="text-center label-small quest-email"><strong> ¿Qué aprendiste hoy que compartirías con tus panas?</strong></p>
              <textarea rows="4" name="q3"></textarea>
              <p class="small d-none text-center" id="wartree">Recordá completar este espacio.</p>
        </div> 
        <div class="d-flex justify-content-center">

            <input type="hidden" value="<?php
        if(isset($_SESSION['usuario_id'])){
            echo $_SESSION['usuario_id'];
            }else{
                echo 1;
            } 
        ?>" name="user_id">

        <button type="submit" form="encuesta" id="submit" class="">Enviar</button>
    </div>

    </div> <!-- 3 -->
    


  </div>

</div>


  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#modal_encuesta" data-slide-to="0" class="active"></li>
    <li data-target="#modal_encuesta" data-slide-to="1"></li>
    <li data-target="#modal_encuesta" data-slide-to="2"></li>
  </ol>
</div>
    </div> <!-- modal content -->
  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


    <script type="text/javascript">
        

        $(document).ready(function() {

            var user = $("input#session").val();
            console.log("encuesta-modal"+user);
            if (user != "") {
                //$(".encuesta-modal").addClass("d-none");
            }
          // $('.modal_encuesta').carousel({
          //     cycle: false,
          //     wrap:false
          // })
          $("#modal_encuesta").carousel('pause');
        });

        // if ( $('input[name=q1]').change() ){
        //     $("#modal_encuesta").carousel('next');
        // }
        $('input[name=q1]').click(function(){
            $("#modal_encuesta").carousel("next");
          });
        $('input[name=q2]').click(function(){
            $("#modal_encuesta").carousel("next");
          });
        // if ( $('input[name=q2]').change() ){
        //     $("#modal_encuesta").carousel('next');
        // } 


         $('#submit').on('click', function(){


            var q1 = $('input[name=q1]:checked').val();
            var q2 = $('input[name=q2]:checked').val();
            var q3 = $('textarea:input[name=q3]').val();
            var user_id = $('input[name=user_id]').val();
            console.log(q1);
            console.log(q2);
            console.log(q3);
            console.log(user_id);

            if (user_id == undefined || user_id == "") {
                user_id == 1;
            }

            if (q1 == undefined) {
                // alert("falta q1");
                $("#modal_encuesta").carousel(0);
                $("p#warone").removeClass("d-none");
            }else if(q2 == undefined){
                $("#modal_encuesta").carousel(1);
                $("p#wartwo").removeClass("d-none");
            }else if(q3 == ""){
                $("#modal_encuesta textarea").focus();
                $("p#wartree").removeClass("d-none");
            }else{

                $.ajax({
                    type: "POST",
                    url: 'https://ementores.org/epana/db/user/insertar_encuesta.php',
                    data: {q1 : q1, q2 : q2, q3 : q3, user_id : user_id}
                }).done(function (data) {
                    if (data["last_id"] == false){
                        // alert("falso");
                    }else{
                        // alert("no entra en falso");
                        $("#modal_encuesta").addClass("d-none");
                        $(".alert-bien.d-none").removeClass("d-none");
                        setTimeout(function(){
                          $('.modal_encuesta').modal('hide');
                        }, 1300);
                        
                    }
                });

                // boorar
                // fin
            }


            // $.ajax({
            //     type: "POST",
            //     url: 'db/user/insert_survey.php',
            //     data: {q1 : q1, q2 : q2, q3 : q3}
            // });
        });
    </script>