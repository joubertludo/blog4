
<section class="container">
<?php foreach ($all_posts as $datas) {
  $CURRENT_PAGE = ($datas['id']);
  $CURRENT_AUTHOR = ($datas['id_aut']);
  // $datePost = gmdate("d/m/y", $datas->date);

    echo "<hr class='featurette-divider'> 
    <div class='row'>
        <div class='col-md-7 bg-secondary p-3 d-flex align-items-center'>
        <div class=' flex-column'>

          <h2>".utf8_encode($datas['title'])."</h2>
          <h5>$datas[firstname] -".date("d-m-Y",strtotime($datas['updated_date']))."</h5>
          <p>".substr($datas['content'],0,200)."...</p>
          <a href='post-$CURRENT_PAGE-$CURRENT_AUTHOR'><p>Lire la suite</p></a>

           
        </div>
        </div>
        <img  src='img/repimg/".$datas['file']."' class='col-md-5 img-fluid'>
      </div>";
  } ?>



   <hr class="featurette-divider">
</section>