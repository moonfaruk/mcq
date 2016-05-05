    <?php
       $success = $this->session->flashdata('success') ; 
       $error = $this->session->flashdata('error') ;
       if($success){
       ?>
       <div class="container"><!-- BreadCamp -->
	        <div class="page-title clearfix">
	            <div class="row">
	                <div class="col-md-12">
	        			<div class="alert alert-success" role="alert" data-dismiss="alert" aria-label="Close"><?php echo $success ;?></div>
	        		</div>
	        	</div>
	        </div>
       </div>
        <?php } 
       if($error){
       ?>
		<div class="container"><!-- BreadCamp -->
	        <div class="page-title clearfix">
	            <div class="row">
	                <div class="col-md-12">
       					<div class="alert alert-danger" role="alert" data-dismiss="alert" aria-label="Close"><?php echo $error ;?></div>
       				</div>
	        	</div>
	        </div>
       </div>	
<?php } ?>