  <!-- Content Header (Page header) -->
<section class="content content-header box box-warning">
    <h1> Advanced Form Elements <small>Preview</small></h1>

          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Forms</a></li>
            <li class="active">Advanced Elements</li>
          </ol>

	<div class="row">
		<div class="col-xs-12">
			<div class="box-header">
				<a href="<?php echo base_url(); ?>/category/index" class="btn btn-primary pull-right">View Category</a>
			</div>
		</div>
	</div>
	 <?php
       $success = $this->session->flashdata('success') ; 
       $error = $this->session->flashdata('error') ;
       if($success){
       ?>
        <div class="alert alert-success" role="alert"><?php echo $success ;?></div>
        <?php } 
       if($error){
       ?>

       <div class="alert alert-danger" role="alert"><?php echo $error ;?></div>

       <?php } ?>

	<div class="row">
		<div class="box box-warning">
			<div class="box-body">

				<?php echo form_open_multipart("");?>
				
					<div class="box-header with-border">
	                  <h3 class="box-title">Add New Category Form</h3>
	                </div><!-- /.box-header -->
					<div class="col-md-4">
						<div class="form-group">
	                      <label>Category Name</label>
	                      <?php 		                      
						    $form_input = array(
						        'name' => 'name',
						        'type' => 'text',
						        'class' =>'form-control ', 
						        'value' => $name, 
						        'required' => 'required',
						        'placeholder'=>'Category Name'
						    );
						    echo form_input($form_input); 
						    ?>
	                    </div>
					</div>


					<div class="col-md-4">
						<div class="form-group">
	                      <label>Serial</label>
	                      <?php 		                      
						    $form_input = array(
						        'name' => 'serial',
						        'type' => 'text',
						        'class' =>'form-control ', 
						        'value' => $serial, 
						        'required' => 'required',
						        'placeholder'=>'Category Serial'
						    );
						    echo form_input($form_input); 
						    ?>
	                    </div>
					</div>

					<div class="col-md-4">
						<div class="form-group">
	                      <label>Select Category Image </label>
	                      <?php 		                      
						    $form_input = array(
						        'name' => 'category_image',
						        'type' => 'file',
						        'class' =>'form-control ', 
						        'value' => $category_image, 
						        'placeholder'=>'Category Image'
						    );
						    echo form_input($form_input); 
						    ?>
	                    </div>
					</div>

			
					<div class="col-md-12">
						<hr>
						<?php
						$form_input = array(
				        'name' => 'submit',
				        'class' =>'btn btn-success pull-right', 
				        'value' => $submit
				    	);
						 echo form_submit($form_input); 
						?>	
					</div>
									
				
			</div>

        </div><!-- /.box-body -->
  	</div><!-- /.box -->
</section>

<script src="http://localhost/serabazarbd/admin/plugins/jQuery/jQuery-2.1.4.min.js"></script>

<script type="text/javascript">
	$(document).ready(function(){

		// $( window ).load(function() {
  //       	var category_type = $("input[name='category_type']:checked").val();
	 //        var category_type = parseInt(category_type);
        	
	 //        if(category_type==1){

	 //            $("#sub_category").removeClass("display_none");
	 //            $("#sub_category").addClass("display_block");
	 //        }
	 //    });

	    
  //       $(".box.box-warning").on('change', 'input', function(){
	 //        var category_type = $("input[name='category_type']:checked").val();
	 //        var category_type = parseInt(category_type);
  //       if (category_type==0) {
  //           $("#sub_category").removeClass("display_block");
  //           $("#sub_category").addClass("display_none");
  //       }else if(category_type==1){
  //           $("#sub_category").removeClass("display_none");
  //           $("#sub_category").addClass("display_block");
  //       }

	 //    });

        
	});
</script>