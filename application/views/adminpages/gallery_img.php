<?php
$all_gallery_img = $all_gallery_imgs['gallery_img'];
$gallery_imgs = json_decode($all_gallery_img,true);
$gallery_array_length = count($gallery_imgs);  
?>
<section class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                         <div class="row">
                         <?php   
                         for ($i=0; $i < $gallery_array_length; $i++) { 
                         ?>
                           <div class="col-md-3 col-6">
                             <div class="gallery-image">
                               <a href="<?= base_url($gallery_imgs[$i]); ?>"  data-lightbox="image-1" data-title="" >
                                 <img src="<?= base_url($gallery_imgs[$i]); ?>" alt="gallery1" class="img-fluid zoom">
                               </a>
                             </div>
                           </div>
                        <?php   }  ?>   
                        <div class="clearfix"></div>
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