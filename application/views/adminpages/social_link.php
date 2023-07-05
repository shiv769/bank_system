<?php
$sociallink = $card_social_link['social_link'];
$links = json_decode($sociallink,true);
// echo "<pre>";
// print_r($links);die;
?>
<section class="content">
      <div class="container-fluid">
    	<div class="row">
        	<div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                         <div class="row">
                                <div class="col-md-12 col-lg-12 table-responsive">
                                <table class="table data-table table-bordered text-center">
                                 <thead>
                                   <tr>    
                                       <th>#</th>  
                                       <th> facebook Link </th>  
                                       <th> Twitter Link </th>  
                                       <th> Instagram Link </th> 
                                       <th> Linkedin Link </th>  
                                       <th> Youtube Link </th> 
                                       <th> Pinterest Link </th> 
                                       <th> Youtube Video (1) </th>      
                                       <th> Youtube Video (2) </th>                                  
                                   </tr>
                                 </thead>
                                 <tbody>
                                    <?php if(!empty($links)){  $i=0; 
                                     foreach($links as $link){ $i++;  ?>
                                   <tr>
                                    <th><?= $i; ?></th>
                                    <td><?= $link['d_fb']; ?></td>
                                    <td><?= $link['d_twitter']; ?></td>
                                    <td><?= $link['d_instagram']; ?></td>
                                    <td><?= $link['d_linkedin']; ?></td>
                                    <td><?= $link['d_youtube']; ?></td>
                                    <td><?= $link['d_pinterest']; ?></td>
                                    <td><?= $link['d_yt_vid1']; ?></td>
                                    <td><?= $link['d_yt_vid2']; ?></td>
                                  </tr>
                                     <?php  }  }  ?>
                                 </tbody>
                                </table>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </div>
  </section>    
<script>
  $(document).ready(function(e){
     var table=$('.data-table').DataTable({
         scrollCollapse: true,
         autoWidth: false,
         responsive: true,
         columnDefs: [{
             targets: "no-sort",
             orderable: false,
         }],
         "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
         "language": {
             "info": "_START_-_END_ of _TOTAL_ entries",
             searchPlaceholder: "Search"
         },
     });
  }); 
</script>