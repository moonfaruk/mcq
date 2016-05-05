<?php
       $success = $this->session->flashdata('success') ; 
       $error = $this->session->flashdata('error') ;
       if($success){
       ?>
        <div class="alert alert-success" role="alert" data-dismiss="alert" aria-label="Close"><?php echo $success ;?></div>
        <?php } 
       if($error){
       ?>

       <div class="alert alert-danger" role="alert" data-dismiss="alert" aria-label="Close"><?php echo $error ;?></div>
<?php } ?>