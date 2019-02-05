
<section class="container bg-info">
    
<table class='table '>
 <thead>
   <tr>
     <th scope='col'>Catégorie</th>
     <th scope='col'>Nombre de posts</th>
     <th scope='col'>Premier article publié</th>
     <th scope='col'>Date</th>
   </tr>
 </thead>
 <tbody>
<?php foreach ($search_all_categories as $datas) {
 echo" 
   <tr>
     <th scope='row'>".utf8_encode($datas['name'])."</th>
     <td>".utf8_encode($datas['count(*)'])."</td>
     <td>".utf8_encode($datas['title'])."</td>
     <td>".utf8_encode($datas['updated_date'])."</td>
   </tr>
   
 ";


  } ?>
</tbody>
</table>


   <hr class="featurette-divider">
</section>

