<section class="bg-white" >


<section class="container pt-5 pb-5">
<?php foreach ($all_posts as $datas) {
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