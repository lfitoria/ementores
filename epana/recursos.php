<?php

include 'db/connection/conexion.php';

$total_act = 12;

$module = 1;

$user = $_SESSION['usuario_id'];

$query = "SELECT step, is_completed FROM activity where user = $user";
// $result = $mysqli->query($query);
// $result_f = mysqli_fetch_array($result);

try {
  $result = $mysqli->query($query);
} catch (Exception $e) {
  echo 'Caught exception: ',  $e->getMessage(), "\n";
}

$values1 = array();
// $row = mysqli_fetch_array($result);
while ($row = mysqli_fetch_array($result)) {
  // echo "<pre>";
  // var_dump($row);
  // echo "</pre>";
  $values1[$row["step"]] = $row["is_completed"];
  // $values1[] = $row;
  // array_push($values1,$row);
}
// $values1[0]["is_completed"] = 1;
// echo "<pre>";
// var_dump($values1);
// var_dump($query);
// var_dump($result);
// var_dump($user);
// echo "</pre>";
// var_dump($query);
// var_dump($user);
//show btn eval
// $query1 = "SELECT step, is_completed FROM activity where user = $user and module = $module";
// $result2 = $mysqli->query($query1);

// $row_cnt = $result2->num_rows;
// $flag_final_act = false;
// if($row_cnt == 12){
// 	$flag_final_act = true;
// }

?>
<head>
    <link href="css/mod1.css" rel="stylesheet" type="text/css" />
</head>
<h2 style="text-align: center;">Filtrar por</h2>
<div class="button-area filters">
  <label class="button">
    <input type="checkbox" value="group1" />ACTIVIDADES INTERACTIVAS
  </label>
  <label class="button">
    <input type="checkbox" value="group2" />VIDEOS
  </label>
  <label class="button">
    <input type="checkbox" value="group3" />INFOGRÁFICOS
  </label>
  <!-- <label class="button">
    <input type="checkbox" value="group4" />Group 4
  </label> -->
</div>

<div class="mnsry_container_box">
<div id="mnsry_container">
  <article class="item group2">
    <div class="item-module <?php if ($values1[1]) : ?>active<?php endif ?>">
        <a href="mod_1/tic.php#titleancla" class="v-act-1">Las tecnologías de información y comunicación (TIC),  en todos lados y a todas horas</a>
    </div>
  </article>
  <article class="item group3">
    <div class="item-module <?php if ($values1[2]) : ?>active<?php endif ?>">
        <a href="mod_1/redes_sociales.php#titleancla" class="v-act-2">Aplicaciones y redes sociales para estar al día</a>
    </div>
  </article>
  <article class="item group1">
    <div class="item-module <?php if ($values1[3]) : ?>active<?php endif ?>">
        <a href="mod_1/caras.php?t=m" class="v-act-3">Las dos caras de las TIC</a>
    </div>
  </article>
  <article class="item group3">
    <div class="item-module <?php if ($values1[5]) : ?>active<?php endif ?>">
        <a href="mod_1/maximo.php#titleancla" class="v-act-4">Sácale el máximo a la Internet</a>
    </div>
  </article>
  <article class="item group1">
    <div class="item-module <?php if ($values1[6]) : ?>active<?php endif ?>">
        <a href="mod_1/legion.php#titleancla" class="v-act-5">Conductas violentas en Internet y en Redes Sociales</a>
    </div>
  </article>
  <article class="item group2">
    <div class="item-module <?php if ($values1[4]) : ?>active<?php endif ?>">
        <a href="mod_1/infoenlinea.php#titleancla" class="v-act-6">¿Qué es el abuso y la explotación sexual en línea?</a>
    </div>
  </article>
  <!-- <article class="item group1">
    <div class="item-module">
        <a href="mod_1/cicatrices.php#titleancla" class="v-act-8">Las cicatrices del abuso sexual</a>
    </div>
  </article> -->
  <!-- <article class="item group1">
    <div class="item-module">
        <a href="mod_1/cicatrices.php#titleancla" class="v-act-8">Las cicatrices del abuso sexual</a>
    </div>
  </article>  -->
  <article class="item group1">
    <div class="item-module <?php if ($values1[8]) : ?>active<?php endif ?>">
        <a href="mod_2/decisiones.php#titleancla" class="v2-act-3">Decisiones que te protegen en Internet</a>
    </div>
  </article> 
  <!-- <article class="item group2">
    <div class="item-module">
        <a href="mod_2/acompanar.php#titleancla" class="v2-act-1">Acompañar también es proteger</a>
    </div>
  </article> -->
  
  <article class="item group1">
    <div class="item-module <?php if ($values1[9]) : ?>active<?php endif ?>">
        <a href="mod_2/redes_sociales.php#titleancla" class="v2-act-5">“Amistad” en redes sociales ¿Aceptaría estas invitaciones?</a>
    </div>
  </article>
  <article class="item group1">
    <div class="item-module <?php if ($values1[7]) : ?>active<?php endif ?>">
        <a href="mod_2/ciber_emociones.php#titleancla" class="v2-act-6">Reconozcamos nuestras emociones en el uso de las TIC</a>
    </div>
  </article>
  <article class="item group2">
    <div class="item-module <?php if ($values1[11]) : ?>active<?php endif ?>">
        <a href="mod_2/huelladigital.php#titleancla" class="v2-act-8">Huella digital: nuestro rastro en Internet</a>
    </div>
  </article>
  
  
  <!-- <article class="item group1">
    <div class="item-module">
        <a href="/juego" class="v-act-9" target="_blank">Historia interactiva Enredes</a>
    </div>
  </article> -->
  <!-- <article class="item group1">
    <div class="item-module">
        <a href="mod_3/escuchemos.php#titleancla" class="v3-act-3">​Escuchemos: no siempre tenemos ​la ​razón</a>
    </div>
  </article> -->
  
  <article class="item group2">
    <div class="item-module <?php if ($values1[12]) : ?>active<?php endif ?>">
        <a href="mod_3/actuemos.php#titleancla" class="v3-act-5">¡No lo dejemos pasar! Actuemos contra el abuso</a>
    </div>
  </article>
  <article class="item group3">
    <div class="item-module <?php if ($values1[10]) : ?>active<?php endif ?>">
        <a href="mod_3/ruta_denuncia.php#titleancla" class="v3-act-7">¿Cómo denunciar las violencias en línea?</a>
    </div>
  </article>
  
  
  
  
  
  
  
  
</div>
</div>


<div id="loading_msg">Cargando recursos disponibles...</div>


<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="https://cdn.rawgit.com/desandro/masonry/master/dist/masonry.pkgd.min.js"></script>
<script src="https://cdn.rawgit.com/digistate/resouces/master/multipleFilterMasonry.js"></script>


<script type="text/javascript">
    
var j$ = jQuery,
    $mContainer = j$("#mnsry_container"),
    $filterButton = j$(".button"),
    $loadingMessage = j$("#loading_msg");
    $params = {
      itemSelector: ".item",
      filtersGroupSelector:".filters"
    // Uncomment below to set the selectorType to use <ul> instead of inputs
    // selectorType: "list"
    };

// After the page is loaded
j$(window).load(function() { 
  // Do mansonry with filtering 
  $mContainer.multipleFilterMasonry($params);
  // Show articles with fadein
  $mContainer.find("article").animate({
      "opacity":1
    }, 1200);
  // Hide loading message
  $loadingMessage.fadeOut();
  
  // Change the filtering button(label) status 
  $filterButton.find("input").change(function(){
    j$(this).parent().toggleClass("active");
  });

  
  

});
</script>
