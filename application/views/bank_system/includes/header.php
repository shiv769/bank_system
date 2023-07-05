<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Bank System</title>


<?php if($this->session->flashdata('msg')!==NULL){ ?>
  <script> alert("<?= $_SESSION['msg']; ?>"); </script>      
<?php  unset($_SESSION['msg']);   } ?>
<?php if($this->session->flashdata('err_msg')!==NULL){  ?>
  <script> alert("<?= $_SESSION['err_msg']; ?>"); </script>      
<?php  unset($_SESSION['err_msg']);  }  ?>



      </head>
  <body>



