
<section class="container">
<?php foreach ($all_posts as $datas) {
  $CURRENT_PAGE = ($datas['id']);
  // $datePost = gmdate("d/m/y", $datas->date);

    echo "<hr class='featurette-divider'> 
    <div class='row'>
        <div class='col-md-7 bg-secondary p-3 d-flex align-items-center'>
        <div class=' flex-column'>

          <h2>".utf8_encode($datas['title'])."</h2>
          <h5>$datas[firstname] - $datas[updated_date]</h5>
          <p>$datas[content]</p>
          <a href='index.php?page=article&id=$CURRENT_PAGE'><p>Lire la suite</p></a>

           
        </div>
        </div>
        <img src='https://picsum.photos/500/500".$datas['file']."' class='col-md-5 img-fluid'>
      </div>";
  } ?>



   <hr class="featurette-divider">
</section>