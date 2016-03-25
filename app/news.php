<?php 
	
	include "class/model.php";
	$mydb = new Database('localhost','root','','oxuaz');
	$myNews = new News($mydb->connection);  
	$myNews->selectNews();
	// var_dump($myNews->data);


	while($row = $myNews->data->fetch_assoc()){
		echo "id -" .$row['id']."<br>"; 
	}

	// var_dump($myNews->data);
	// foreach ($myNews as $key => $value) {
	// 	for ($i=0; $i <count($key) ; $i++) { 
	// 		echo $key[i];
	// 	}
	// }

 ?>


 <!-- NEWS START HERE -->
      <div class="container">
        <div class="row">

        	
        		

        
          <div class="col m3">
            <div class="card"> 
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="upload/p1.jpg">
              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Bu ilin ilk ay tutulması baş verdi<i class="material-icons right">more_vert</i></span>
                <p><a href="#">Ətraflı</a></p>
              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">Bu ilin ilk ay tutulması baş verdi<i class="material-icons right">close</i></span>
                <p>“Diqqətlə baxsaq görərik ki, ayın işığı bir qədər zəifləyir”</p>
              </div>
            </div>
          </div>
          <div class="col m3">
            <div class="card"> 
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="upload/p2.jpg">
              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Səhər hərraclarında neftin qiyməti ucuzlaşdı<i class="material-icons right">more_vert</i></span>
                <p><a href="#">Ətraflı</a></p>
              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">Səhər hərraclarında neftin qiyməti ucuzlaşdı<i class="material-icons right">close</i></span>
                <p>Son rəqəmlər</p>
              </div>
            </div>
          </div>
          <div class="col m3">
            <div class="card"> 
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="upload/p3.jpg">
              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Ərdoğan: Brüsseldə terror aktı törədən şəxs Türkiyədən deportasiya edilib<i class="material-icons right">more_vert</i></span>
                <p><a href="#">Ətraflı</a></p>
              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">Ərdoğan: Brüsseldə terror aktı törədən şəxs Türkiyədən deportasiya edilib<i class="material-icons right">close</i></span>
                <p>“Belçikalılar həmin şəxsi sərbəst buraxıblar”</p>
              </div>
            </div>
          </div>
          <div class="col m3">
            <div class="card"> 
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="upload/p4.jpg">
              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">«Bakı-Supsa» neft kəmərindən neft oğurlayan şəxslər saxlanılıb<i class="material-icons right">more_vert</i></span>
                <p><a href="#">Ətraflı</a></p>
              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">«Bakı-Supsa» neft kəmərindən neft oğurlayan şəxslər saxlanılıb<i class="material-icons right">close</i></span>
                <p>«Müttəhimlər oğurlanmış nefti Tbilisiyə aparırmışlar»</p>
              </div>
            </div>
          </div>
        </div>        
      </div>
      <!-- NEWS END HERE -->