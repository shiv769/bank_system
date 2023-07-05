<?php $this->load->view('website/includes/menu1.php'); ?>
<style type="text/css">
.gell_img_size{
  height: 150px;
  width: 150px;
}
</style>	

	<section class="comp">
		<div class="container">
			<h2 class="wow slideInLeft" data-wow-duration="2s" style="color:rgb(41, 31, 109);font-weight: bold; text-align: center;">All Your Photos</h2><hr style="border:1px solid rgb(255 0 0)">
			<div class="row">
				<div class="col-md-12">
					<div class="compde">
						<form action="<?=  base_url('website/save_gallery') ?>" method="post" enctype="multipart/form-data">
              <div class="input_fields_wrap row mb-2">
                 <div class="col-md-4 mt-4">
                 	<!-- <label class="input_field_title">Your Images</label> -->
		                 <center> <img src="<?= base_url('assets/website/images/img/upload.png'); ?>" alt="Select image" id="showPreviewLogo1" class="zoom gell_img_size" onclick="clickFocus(1)" >  </center>
									   <div class="input_box">
                     </div>
								 <input type="file" name="image[]" id="clickMeImage1" class="form-control mt-3" onchange="readURL1(this);" accept="image/*"  >
								 </div>
							</div>
               <hr>
              <button class="add_field_button btn btn-secondary mb-1">Add More</button>
               <input class="form-control btn btn-success" type="Submit" value="Submit">

              </div>
							
						</form>	
					</div>
  				</div>	
			</div>
		</div>
	</section>	

    
	<?php $this->load->view('website/includes/footer'); ?>
  <?php $this->load->view('website/includes/footer-links.php'); ?>

<script type="text/javascript">
  $(document).ready(function() {
  var max_fields  = 100;   //maximum input boxes allowed
  var wrapper   = $(".input_fields_wrap");    //Fields wrapper
  var add_button  = $(".add_field_button");    //Add button ID
  var x = 1;  //initlal text box count
  $(add_button).click(function(e){   //on add input button click
    e.preventDefault();
    if(x < max_fields){    //max input box allowed
      x++;   


    var imagetemplate = '<div class="col-md-4"> <center> <img src="<?= base_url('assets/website/images/img/upload.png'); ?>" alt="Select image" id="showPreviewLogo'+ x +'" class="zoom gell_img_size" onclick="clickFocus('+ x +')" width="50%" style="margin-bottom: 20px;margin-top: 20px;">  </center> <input type="file" name="image[]" id="clickMeImage'+ x +'" class="form-control" onchange="readURL'+ x +'(this);" accept="image/*"><hr><a href="#" class="remove_field">Remove</a></div>';

   $(wrapper).append(imagetemplate);     //add input box
          
           }
  });
  $(wrapper).on("click",".remove_field", function(e){    //user click on remove text
      e.preventDefault(); $(this).parent('div').remove();  x--;
  })
});
</script>
	<script>
	

		// function readURL1(input){
		// 	if(input.files && input.files[0]){
		// 		var reader = new FileReader();
		// 		reader.onload= function (a){
		// 			$('#showPreviewLogo'+1).attr('src',a.target.result);
		// 		};
		// 		reader.readAsDataURL(input.files[0]);
		// 	}
		// }
       
    //     for(var i = 1; i <= 100; i++) {

	  // function clickFocus(vbl){
	  // 		$('#clickMeImage'+vbl).click();
	  // 	}

    //      var Readurl = "readURL"+i; 
 	  //        	function +Readurl+ (input){
	  //        		if(input.files && input.files[0]){
	  //        			var reader = new FileReader();
	  //        			reader.onload= function (a){
	  //        				$('#showPreviewLogo'+ i).attr('src',a.target.result);
	  //        			};
	  //        			reader.readAsDataURL(input.files[0]);
	  //        		}
	  //        	}
    //     }

    </script>

	<script type="text/javascript">				
			function clickFocus(vbl){
			$('#clickMeImage'+vbl).click();
		        }



		   function readURL1(input){
			    if(input.files && input.files[0]){
				     var reader = new FileReader();
				     reader.onload= function (a){
					$('#showPreviewLogo'+1).attr('src',a.target.result);
			     	};
				reader.readAsDataURL(input.files[0]);
			}
		}

		   function readURL2(input){
			    if(input.files && input.files[0]){
				     var reader = new FileReader();
				     reader.onload= function (a){
					$('#showPreviewLogo'+2).attr('src',a.target.result);
			     	};
				reader.readAsDataURL(input.files[0]);
			}
		}

		   function readURL3(input){
			    if(input.files && input.files[0]){
				     var reader = new FileReader();
				     reader.onload= function (a){
					$('#showPreviewLogo'+3).attr('src',a.target.result);
			     	};
				reader.readAsDataURL(input.files[0]);
			}
		}

		   function readURL4(input){
			    if(input.files && input.files[0]){
				     var reader = new FileReader();
				     reader.onload= function (a){
					$('#showPreviewLogo'+4).attr('src',a.target.result);
			     	};
				reader.readAsDataURL(input.files[0]);
			}
		}

		   function readURL5(input){
			    if(input.files && input.files[0]){
				     var reader = new FileReader();
				     reader.onload= function (a){
					$('#showPreviewLogo'+5).attr('src',a.target.result);
			     	};
				reader.readAsDataURL(input.files[0]);
			}
		}

		   function readURL6(input){
			    if(input.files && input.files[0]){
				     var reader = new FileReader();
				     reader.onload= function (a){
					$('#showPreviewLogo'+6).attr('src',a.target.result);
			     	};
				reader.readAsDataURL(input.files[0]);
			}
		}

		   function readURL8(input){
			    if(input.files && input.files[0]){
				     var reader = new FileReader();
				     reader.onload= function (a){
					$('#showPreviewLogo'+8).attr('src',a.target.result);
			     	};
				reader.readAsDataURL(input.files[0]);
			}
		}

		   function readURL9(input){
			    if(input.files && input.files[0]){
				     var reader = new FileReader();
				     reader.onload= function (a){
					$('#showPreviewLogo'+9).attr('src',a.target.result);
			     	};
				reader.readAsDataURL(input.files[0]);
			}
		}

		   function readURL10(input){
			    if(input.files && input.files[0]){
				     var reader = new FileReader();
				     reader.onload= function (a){
					$('#showPreviewLogo'+10).attr('src',a.target.result);
			     	};
				reader.readAsDataURL(input.files[0]);
			}
		}

		   function readURL11(input){
			    if(input.files && input.files[0]){
				     var reader = new FileReader();
				     reader.onload= function (a){
					$('#showPreviewLogo'+11).attr('src',a.target.result);
			     	};
				reader.readAsDataURL(input.files[0]);
			}
		}

		   function readURL12(input){
			    if(input.files && input.files[0]){
				     var reader = new FileReader();
				     reader.onload= function (a){
					$('#showPreviewLogo'+12).attr('src',a.target.result);
			     	};
				reader.readAsDataURL(input.files[0]);
			}
		}

		   function readURL13(input){
			    if(input.files && input.files[0]){
				     var reader = new FileReader();
				     reader.onload= function (a){
					$('#showPreviewLogo'+13).attr('src',a.target.result);
			     	};
				reader.readAsDataURL(input.files[0]);
			}
		}

		   function readURL14(input){
			    if(input.files && input.files[0]){
				     var reader = new FileReader();
				     reader.onload= function (a){
					$('#showPreviewLogo'+14).attr('src',a.target.result);
			     	};
				reader.readAsDataURL(input.files[0]);
			}
		}

		   function readURL15(input){
			    if(input.files && input.files[0]){
				     var reader = new FileReader();
				     reader.onload= function (a){
					$('#showPreviewLogo'+15).attr('src',a.target.result);
			     	};
				reader.readAsDataURL(input.files[0]);
			}
		}

		   function readURL16(input){
			    if(input.files && input.files[0]){
				     var reader = new FileReader();
				     reader.onload= function (a){
					$('#showPreviewLogo'+16).attr('src',a.target.result);
			     	};
				reader.readAsDataURL(input.files[0]);
			}
		}
   function readURL17(input){
			    if(input.files && input.files[0]){
				     var reader = new FileReader();
				     reader.onload= function (a){
					$('#showPreviewLogo'+17).attr('src',a.target.result);
			     	};
				reader.readAsDataURL(input.files[0]);
			}
		}

   function readURL18(input){
			    if(input.files && input.files[0]){
				     var reader = new FileReader();
				     reader.onload= function (a){
					$('#showPreviewLogo'+18).attr('src',a.target.result);
			     	};
				reader.readAsDataURL(input.files[0]);
			}
		}
   
      function readURL19(input){
			    if(input.files && input.files[0]){
				     var reader = new FileReader();
				     reader.onload= function (a){
					$('#showPreviewLogo'+19).attr('src',a.target.result);
			     	};
				reader.readAsDataURL(input.files[0]);
			}
		}


   function readURL20(input){
			    if(input.files && input.files[0]){
				     var reader = new FileReader();
				     reader.onload= function (a){
					$('#showPreviewLogo'+20).attr('src',a.target.result);
			     	};
				reader.readAsDataURL(input.files[0]);
			}
		}
   
      function readURL21(input){
			    if(input.files && input.files[0]){
				     var reader = new FileReader();
				     reader.onload= function (a){
					$('#showPreviewLogo'+21).attr('src',a.target.result);
			     	};
				reader.readAsDataURL(input.files[0]);
			}
		}

     function readURL22(input){
			    if(input.files && input.files[0]){
				     var reader = new FileReader();
				     reader.onload= function (a){
					$('#showPreviewLogo'+22).attr('src',a.target.result);
			     	};
				reader.readAsDataURL(input.files[0]);
			}
		}
 
    function readURL23(input){
			    if(input.files && input.files[0]){
				     var reader = new FileReader();
				     reader.onload= function (a){
					$('#showPreviewLogo'+23).attr('src',a.target.result);
			     	};
				reader.readAsDataURL(input.files[0]);
			}
		}

     function readURL24(input){
			    if(input.files && input.files[0]){
				     var reader = new FileReader();
				     reader.onload= function (a){
					$('#showPreviewLogo'+24).attr('src',a.target.result);
			     	};
				reader.readAsDataURL(input.files[0]);
			}
		}


     function readURL25(input){
			    if(input.files && input.files[0]){
				     var reader = new FileReader();
				     reader.onload= function (a){
					$('#showPreviewLogo'+25).attr('src',a.target.result);
			     	};
				reader.readAsDataURL(input.files[0]);
			}
		}

   function readURL26(input){
			    if(input.files && input.files[0]){
				     var reader = new FileReader();
				     reader.onload= function (a){
					$('#showPreviewLogo'+26).attr('src',a.target.result);
			     	};
				reader.readAsDataURL(input.files[0]);
			}
		}


   function readURL27(input){
			    if(input.files && input.files[0]){
				     var reader = new FileReader();
				     reader.onload= function (a){
					$('#showPreviewLogo'+27).attr('src',a.target.result);
			     	};
				reader.readAsDataURL(input.files[0]);
			}
		}

 function readURL28(input){
			    if(input.files && input.files[0]){
				     var reader = new FileReader();
				     reader.onload= function (a){
					$('#showPreviewLogo'+28).attr('src',a.target.result);
			     	};
				reader.readAsDataURL(input.files[0]);
			}
		}
   function readURL29(input){
			    if(input.files && input.files[0]){
				     var reader = new FileReader();
				     reader.onload= function (a){
					$('#showPreviewLogo'+29).attr('src',a.target.result);
			     	};
				reader.readAsDataURL(input.files[0]);
			}
		}
		 function readURL30(input){
			    if(input.files && input.files[0]){
				     var reader = new FileReader();
				     reader.onload= function (a){
					$('#showPreviewLogo'+30).attr('src',a.target.result);
			     	};
				reader.readAsDataURL(input.files[0]);
			}

		}
   function readURL31(input){
			    if(input.files && input.files[0]){
				     var reader = new FileReader();
				     reader.onload= function (a){
					$('#showPreviewLogo'+31).attr('src',a.target.result);
			     	};
				reader.readAsDataURL(input.files[0]);
			}
		}

  function readURL32(input){
			    if(input.files && input.files[0]){
				     var reader = new FileReader();
				     reader.onload= function (a){
					$('#showPreviewLogo'+32).attr('src',a.target.result);
			     	};
				reader.readAsDataURL(input.files[0]);
			}
		}

  function readURL33(input){
			    if(input.files && input.files[0]){
				     var reader = new FileReader();
				     reader.onload= function (a){
					$('#showPreviewLogo'+33).attr('src',a.target.result);
			     	};
				reader.readAsDataURL(input.files[0]);
			}
		}


		 function readURL34(input){
			    if(input.files && input.files[0]){
				     var reader = new FileReader();
				     reader.onload= function (a){
					$('#showPreviewLogo'+34).attr('src',a.target.result);
			     	};
				reader.readAsDataURL(input.files[0]);
			}
		}
		 function readURL35(input){
			    if(input.files && input.files[0]){
				     var reader = new FileReader();
				     reader.onload= function (a){
					$('#showPreviewLogo'+35).attr('src',a.target.result);
			     	};
				reader.readAsDataURL(input.files[0]);
			}
		}
		 function readURL36(input){
			    if(input.files && input.files[0]){
				     var reader = new FileReader();
				     reader.onload= function (a){
					$('#showPreviewLogo'+36).attr('src',a.target.result);
			     	};
				reader.readAsDataURL(input.files[0]);
			}
		}
		 function readURL37(input){
			    if(input.files && input.files[0]){
				     var reader = new FileReader();
				     reader.onload= function (a){
					$('#showPreviewLogo'+37).attr('src',a.target.result);
			     	};
				reader.readAsDataURL(input.files[0]);
			}
		}
		 function readURL38(input){
			    if(input.files && input.files[0]){
				     var reader = new FileReader();
				     reader.onload= function (a){
					$('#showPreviewLogo'+38).attr('src',a.target.result);
			     	};
				reader.readAsDataURL(input.files[0]);
			}
		}
		 function readURL39(input){
			    if(input.files && input.files[0]){
				     var reader = new FileReader();
				     reader.onload= function (a){
					$('#showPreviewLogo'+39).attr('src',a.target.result);
			     	};
				reader.readAsDataURL(input.files[0]);
			}
		}
		 function readURL40(input){
			    if(input.files && input.files[0]){
				     var reader = new FileReader();
				     reader.onload= function (a){
					$('#showPreviewLogo'+40).attr('src',a.target.result);
			     	};
				reader.readAsDataURL(input.files[0]);
			}
		}
		 function readURL41(input){
			    if(input.files && input.files[0]){
				     var reader = new FileReader();
				     reader.onload= function (a){
					$('#showPreviewLogo'+41).attr('src',a.target.result);
			     	};
				reader.readAsDataURL(input.files[0]);
			}
		}
		 function readURL42(input){
			    if(input.files && input.files[0]){
				     var reader = new FileReader();
				     reader.onload= function (a){
					$('#showPreviewLogo'+42).attr('src',a.target.result);
			     	};
				reader.readAsDataURL(input.files[0]);
			}
		}
		 function readURL43(input){
			    if(input.files && input.files[0]){
				     var reader = new FileReader();
				     reader.onload= function (a){
					$('#showPreviewLogo'+43).attr('src',a.target.result);
			     	};
				reader.readAsDataURL(input.files[0]);
			}
		}
		 function readURL44(input){
			    if(input.files && input.files[0]){
				     var reader = new FileReader();
				     reader.onload= function (a){
					$('#showPreviewLogo'+44).attr('src',a.target.result);
			     	};
				reader.readAsDataURL(input.files[0]);
			}
		}
		 function readURL45(input){
			    if(input.files && input.files[0]){
				     var reader = new FileReader();
				     reader.onload= function (a){
					$('#showPreviewLogo'+45).attr('src',a.target.result);
			     	};
				reader.readAsDataURL(input.files[0]);
			}
		}
		 function readURL46(input){
			    if(input.files && input.files[0]){
				     var reader = new FileReader();
				     reader.onload= function (a){
					$('#showPreviewLogo'+46).attr('src',a.target.result);
			     	};
				reader.readAsDataURL(input.files[0]);
			}
		}
		 function readURL47(input){
			    if(input.files && input.files[0]){
				     var reader = new FileReader();
				     reader.onload= function (a){
					$('#showPreviewLogo'+47).attr('src',a.target.result);
			     	};
				reader.readAsDataURL(input.files[0]);
			}
		}
		 function readURL48(input){
			    if(input.files && input.files[0]){
				     var reader = new FileReader();
				     reader.onload= function (a){
					$('#showPreviewLogo'+48).attr('src',a.target.result);
			     	};
				reader.readAsDataURL(input.files[0]);
			}
		}
		 function readURL49(input){
			    if(input.files && input.files[0]){
				     var reader = new FileReader();
				     reader.onload= function (a){
					$('#showPreviewLogo'+49).attr('src',a.target.result);
			     	};
				reader.readAsDataURL(input.files[0]);
			}
		}
		 function readURL50(input){
			    if(input.files && input.files[0]){
				     var reader = new FileReader();
				     reader.onload= function (a){
					$('#showPreviewLogo'+50).attr('src',a.target.result);
			     	};
				reader.readAsDataURL(input.files[0]);
			}
		}
		 function readURL51(input){
			    if(input.files && input.files[0]){
				     var reader = new FileReader();
				     reader.onload= function (a){
					$('#showPreviewLogo'+51).attr('src',a.target.result);
			     	};
				reader.readAsDataURL(input.files[0]);
			}
		}
		 function readURL52(input){
			    if(input.files && input.files[0]){
				     var reader = new FileReader();
				     reader.onload= function (a){
					$('#showPreviewLogo'+52).attr('src',a.target.result);
			     	};
				reader.readAsDataURL(input.files[0]);
			}
		}
		 function readURL53(input){
			    if(input.files && input.files[0]){
				     var reader = new FileReader();
				     reader.onload= function (a){
					$('#showPreviewLogo'+53).attr('src',a.target.result);
			     	};
				reader.readAsDataURL(input.files[0]);
			}
		}
		 function readURL54(input){
			    if(input.files && input.files[0]){
				     var reader = new FileReader();
				     reader.onload= function (a){
					$('#showPreviewLogo'+54).attr('src',a.target.result);
			     	};
				reader.readAsDataURL(input.files[0]);
			}
		}
		 function readURL55(input){
			    if(input.files && input.files[0]){
				     var reader = new FileReader();
				     reader.onload= function (a){
					$('#showPreviewLogo'+55).attr('src',a.target.result);
			     	};
				reader.readAsDataURL(input.files[0]);
			}
		}
		 function readURL56(input){
			    if(input.files && input.files[0]){
				     var reader = new FileReader();
				     reader.onload= function (a){
					$('#showPreviewLogo'+56).attr('src',a.target.result);
			     	};
				reader.readAsDataURL(input.files[0]);
			}
		}
		 function readURL57(input){
			    if(input.files && input.files[0]){
				     var reader = new FileReader();
				     reader.onload= function (a){
					$('#showPreviewLogo'+57).attr('src',a.target.result);
			     	};
				reader.readAsDataURL(input.files[0]);
			}
		}

		 function readURL58(input){
			    if(input.files && input.files[0]){
				     var reader = new FileReader();
				     reader.onload= function (a){
					$('#showPreviewLogo'+58).attr('src',a.target.result);
			     	};
				reader.readAsDataURL(input.files[0]);
			}
		}

		 function readURL59(input){
			    if(input.files && input.files[0]){
				     var reader = new FileReader();
				     reader.onload= function (a){
					$('#showPreviewLogo'+59).attr('src',a.target.result);
			     	};
				reader.readAsDataURL(input.files[0]);
			}
		}

		 function readURL60(input){
			    if(input.files && input.files[0]){
				     var reader = new FileReader();
				     reader.onload= function (a){
					$('#showPreviewLogo'+60).attr('src',a.target.result);
			     	};
				reader.readAsDataURL(input.files[0]);
			}
		}

		 function readURL61(input){
			    if(input.files && input.files[0]){
				     var reader = new FileReader();
				     reader.onload= function (a){
					$('#showPreviewLogo'+61).attr('src',a.target.result);
			     	};
				reader.readAsDataURL(input.files[0]);
			}
		}

		 function readURL62(input){
			    if(input.files && input.files[0]){
				     var reader = new FileReader();
				     reader.onload= function (a){
					$('#showPreviewLogo'+62).attr('src',a.target.result);
			     	};
				reader.readAsDataURL(input.files[0]);
			}
		}
		 function readURL63(input){
			    if(input.files && input.files[0]){
				     var reader = new FileReader();
				     reader.onload= function (a){
					$('#showPreviewLogo'+63).attr('src',a.target.result);
			     	};
				reader.readAsDataURL(input.files[0]);
			}
		}
		 function readURL64(input){
			    if(input.files && input.files[0]){
				     var reader = new FileReader();
				     reader.onload= function (a){
					$('#showPreviewLogo'+64).attr('src',a.target.result);
			     	};
				reader.readAsDataURL(input.files[0]);
			}
		}
		 function readURL65(input){
			    if(input.files && input.files[0]){
				     var reader = new FileReader();
				     reader.onload= function (a){
					$('#showPreviewLogo'+65).attr('src',a.target.result);
			     	};
				reader.readAsDataURL(input.files[0]);
			}
		}
		 function readURL66(input){
			    if(input.files && input.files[0]){
				     var reader = new FileReader();
				     reader.onload= function (a){
					$('#showPreviewLogo'+66).attr('src',a.target.result);
			     	};
				reader.readAsDataURL(input.files[0]);
			}
		}
		 function readURL67(input){
			    if(input.files && input.files[0]){
				     var reader = new FileReader();
				     reader.onload= function (a){
					$('#showPreviewLogo'+67).attr('src',a.target.result);
			     	};
				reader.readAsDataURL(input.files[0]);
			}
		}
		 function readURL68(input){
			    if(input.files && input.files[0]){
				     var reader = new FileReader();
				     reader.onload= function (a){
					$('#showPreviewLogo'+68).attr('src',a.target.result);
			     	};
				reader.readAsDataURL(input.files[0]);
			}
		}
		 function readURL69(input){
			    if(input.files && input.files[0]){
				     var reader = new FileReader();
				     reader.onload= function (a){
					$('#showPreviewLogo'+69).attr('src',a.target.result);
			     	};
				reader.readAsDataURL(input.files[0]);
			}
		}
		 function readURL70(input){
			    if(input.files && input.files[0]){
				     var reader = new FileReader();
				     reader.onload= function (a){
					$('#showPreviewLogo'+70).attr('src',a.target.result);
			     	};
				reader.readAsDataURL(input.files[0]);
			}
		}
				 function readURL71(input){
			    if(input.files && input.files[0]){
				     var reader = new FileReader();
				     reader.onload= function (a){
					$('#showPreviewLogo'+71).attr('src',a.target.result);
			     	};
				reader.readAsDataURL(input.files[0]);
			}
		}
				 function readURL72(input){
			    if(input.files && input.files[0]){
				     var reader = new FileReader();
				     reader.onload= function (a){
					$('#showPreviewLogo'+72).attr('src',a.target.result);
			     	};
				reader.readAsDataURL(input.files[0]);
			}
		}
				 function readURL73(input){
			    if(input.files && input.files[0]){
				     var reader = new FileReader();
				     reader.onload= function (a){
					$('#showPreviewLogo'+73).attr('src',a.target.result);
			     	};
				reader.readAsDataURL(input.files[0]);
			}
		}
				 function readURL74(input){
			    if(input.files && input.files[0]){
				     var reader = new FileReader();
				     reader.onload= function (a){
					$('#showPreviewLogo'+74).attr('src',a.target.result);
			     	};
				reader.readAsDataURL(input.files[0]);
			}
		}
				 function readURL75(input){
			    if(input.files && input.files[0]){
				     var reader = new FileReader();
				     reader.onload= function (a){
					$('#showPreviewLogo'+75).attr('src',a.target.result);
			     	};
				reader.readAsDataURL(input.files[0]);
			}
		}
				 function readURL76(input){
			    if(input.files && input.files[0]){
				     var reader = new FileReader();
				     reader.onload= function (a){
					$('#showPreviewLogo'+76).attr('src',a.target.result);
			     	};
				reader.readAsDataURL(input.files[0]);
			}
		}
				 function readURL77(input){
			    if(input.files && input.files[0]){
				     var reader = new FileReader();
				     reader.onload= function (a){
					$('#showPreviewLogo'+77).attr('src',a.target.result);
			     	};
				reader.readAsDataURL(input.files[0]);
			}
		}
						 function readURL78(input){
			    if(input.files && input.files[0]){
				     var reader = new FileReader();
				     reader.onload= function (a){
					$('#showPreviewLogo'+78).attr('src',a.target.result);
			     	};
				reader.readAsDataURL(input.files[0]);
			}
		}
						 function readURL79(input){
			    if(input.files && input.files[0]){
				     var reader = new FileReader();
				     reader.onload= function (a){
					$('#showPreviewLogo'+79).attr('src',a.target.result);
			     	};
				reader.readAsDataURL(input.files[0]);
			}
		}
		function readURL80(input){
			    if(input.files && input.files[0]){
				     var reader = new FileReader();
				     reader.onload= function (a){
					$('#showPreviewLogo'+80).attr('src',a.target.result);
			     	};
				reader.readAsDataURL(input.files[0]);
			}
		}	
			function readURL81(input){
			    if(input.files && input.files[0]){
				     var reader = new FileReader();
				     reader.onload= function (a){
					$('#showPreviewLogo'+81).attr('src',a.target.result);
			     	};
				reader.readAsDataURL(input.files[0]);
			}
		}		
			function readURL82(input){
			    if(input.files && input.files[0]){
				     var reader = new FileReader();
				     reader.onload= function (a){
					$('#showPreviewLogo'+82).attr('src',a.target.result);
			     	};
				reader.readAsDataURL(input.files[0]);
			}
		}		
				function readURL83(input){
			    if(input.files && input.files[0]){
				     var reader = new FileReader();
				     reader.onload= function (a){
					$('#showPreviewLogo'+83).attr('src',a.target.result);
			     	};
				reader.readAsDataURL(input.files[0]);
			}
		}	
				function readURL84(input){
			    if(input.files && input.files[0]){
				     var reader = new FileReader();
				     reader.onload= function (a){
					$('#showPreviewLogo'+84).attr('src',a.target.result);
			     	};
				reader.readAsDataURL(input.files[0]);
			}
		}	
				function readURL85(input){
			    if(input.files && input.files[0]){
				     var reader = new FileReader();
				     reader.onload= function (a){
					$('#showPreviewLogo'+85).attr('src',a.target.result);
			     	};
				reader.readAsDataURL(input.files[0]);
			}
		}	
			function readURL86(input){
			  if(input.files && input.files[0]){
		     var reader = new FileReader();
		     reader.onload= function (a){
			$('#showPreviewLogo'+86).attr('src',a.target.result);
			   	};
		reader.readAsDataURL(input.files[0]);
			}
		}	
				function readURL87(input){
			  if(input.files && input.files[0]){
		     var reader = new FileReader();
		     reader.onload= function (a){
			$('#showPreviewLogo'+87).attr('src',a.target.result);
			   	};
		reader.readAsDataURL(input.files[0]);
			}
		}	
				function readURL88(input){
			  if(input.files && input.files[0]){
		     var reader = new FileReader();
		     reader.onload= function (a){
			$('#showPreviewLogo'+88).attr('src',a.target.result);
			   	};
		reader.readAsDataURL(input.files[0]);
			}
		}							
	</script>


</body>
</html>