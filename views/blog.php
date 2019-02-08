<!-- <section class="bg-white" >
<div class="container pt-4">
<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Trier par auteurs</a>
    <a class="dropdown-item" href="#">Trier par catégories</a>
    <a class="dropdown-item" href="#">Dernier article</a>
  </div>
</div>
</div> -->
<section class="container pt-5 pb-5">
<div class="text-danger pb-3">
 <?php echo $message; ?>
</div>
<?php foreach ($all_posts_order as $datas) {
  $CURRENT_PAGE = ($datas['id']);
  $CURRENT_AUTHOR = ($datas['id_aut']);
  // $datePost = gmdate("d/m/y", $datas->date);

    echo "
    <div class='row shadow p-3 mb-5 bg-white rounded'>
        <div class='col-md-7 border-right border-info p-3  d-flex align-items-center'>
          <div class=' flex-column'>

            <h2>".utf8_encode($datas['title'])."</h2>
            <h5>$datas[firstname] -".date("d-m-Y",strtotime($datas['updated_date']))."</h5>
            <p>".substr($datas['content'],0,200)."...</p>
            <a href='post-$CURRENT_PAGE-$CURRENT_AUTHOR'><p>Lire la suite</p></a>

           
          </div>
        </div>
        <img  src='img/repimg/".$datas['file']."' class='col-md-5'>
    </div>";
  } ?>



  
</section>
</section>