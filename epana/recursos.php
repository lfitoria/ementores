
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
    <div class="item-module">
        <a href="mod_1/tic.php#titleancla" class="v-act-1">Las TIC en todos lados y a todas horas</a>
    </div>
  </article>
  <article class="item group1">
    <div class="item-module">
        <a href="mod_1/caras.php?t=m" class="v-act-3">Las dos caras de las TIC</a>
    </div>
  </article>
  <article class="item group1">
    <div class="item-module">
        <a href="mod_1/legion.php#titleancla" class="v-act-5">Conductas violentas en Internet y en Redes Sociales</a>
    </div>
  </article>
  <article class="item group2">
    <div class="item-module">
        <a href="mod_1/infoenlinea.php#titleancla" class="v-act-1">¿Qué es el abuso y la explotación sexual en línea?</a>
    </div>
  </article>
  <article class="item group1">
    <div class="item-module">
        <a href="mod_1/cicatrices.php#titleancla" class="v-act-8">Las cicatrices del abuso sexual</a>
    </div>
  </article> 
  <article class="item group1">
    <div class="item-module">
        <a href="mod_2/decisiones.php#titleancla" class="v2-act-3">Decisiones que te protegen en Internet</a>
    </div>
  </article> 
  <!-- <article class="item group2">
    <div class="item-module">
        <a href="mod_2/acompanar.php#titleancla" class="v2-act-1">Acompañar también es proteger</a>
    </div>
  </article> -->
  
  <article class="item group1">
    <div class="item-module">
        <a href="mod_2/redes_sociales.php#titleancla" class="v2-act-5">“Amistad” en redes sociales ¿Aceptaría estas invitaciones?</a>
    </div>
  </article>
  <article class="item group1">
    <div class="item-module">
        <a href="mod_2/ciber_emociones.php#titleancla" class="v2-act-6">Reconozcamos nuestras emociones en el uso de las TIC</a>
    </div>
  </article>
  <article class="item group2">
    <div class="item-module">
        <a href="mod_2/huelladigital.php#titleancla" class="v2-act-8">Huella digital: nuestro rastro en Internet</a>
    </div>
  </article>
  
  
  <article class="item group1">
    <div class="item-module">
        <a href="/juego" class="v-act-9" target="_blank">Historia interactiva Enredes</a>
    </div>
  </article>
  <!-- <article class="item group1">
    <div class="item-module">
        <a href="mod_3/escuchemos.php#titleancla" class="v3-act-3">​Escuchemos: no siempre tenemos ​la ​razón</a>
    </div>
  </article> -->
  
  <article class="item group2">
    <div class="item-module">
        <a href="mod_3/actuemos.php#titleancla" class="v3-act-5">¡No lo dejemos pasar! Actuemos contra el abuso</a>
    </div>
  </article>
  <!-- <article class="item group3">
    <div class="item-module">
        <a href="mod_3/ruta_denuncia.php#titleancla" class="v3-act-7">¿Cómo denunciar las violencias en línea?</a>
    </div>
  </article> -->
  
  
  
  
  
  
  
  
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
