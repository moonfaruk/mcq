<?php $this->load->view('common/header');?>

<!-- Being Page Title -->
    <div class="container"><!-- BreadCamp -->
        <div class="page-title clearfix">
            <div class="row">
                <div class="col-md-12">
                    <h6><a href="<?php echo base_url(); ?>">Home</a></h6>
                    <h6><span class="page-active">Ask a Question</span></h6>
                </div>
            </div>
        </div>
    </div>
    <!-- ***************************************************** -->

	<?php $this->load->view('common/message'); ?>

    <!-- ***************************************************** -->
	
	<div class="container">
	    <div class="row">
	        <div class="col-md-8">
	            <div class="row">
	            	<div class="col-md-12">
	            	<!--  ********************************** -->
						<?php echo form_open(); ?>
						<div class="widget-item">
							<h2 class="welcome-text">Ask Your Question</h2>
	                    	<hr>
	                    	<div class="form-group">
	                    		<?php 
	                    		echo form_label('Name', 'name'); 
	                    		echo form_input(array('type' => 'text', 'name' => 'name', 'class' => 'form-control', 'placeholder' => 'Your Full Name'));
	                    		?>
	                    		<span class="label-danger"><?php echo form_error('name'); ?></span>

	                    	</div>

	                    	<div class="form-group">
	                    		<label for="email">Email</label>
	                    		<?php 
	                    		echo form_label('Email', 'email');
	                    		echo form_input(array('type' => 'text', 'name' => 'email', 'class' => 'form-control', 'placeholder' => "Your Email Address"));
	                    		?>
	                    		<span class="mx-gray">* (Required but will not be displayed)</span>
	                    	</div>
							<hr>
	                    	<div class="form-group">
	                    		<?php 
	                    		echo form_label('Question Tittle', 'question_title');
	                    		echo form_input(array('type' => 'text', 'name' => 'question_title', 'class' => 'form-control', 'placeholder' => 'Your Question Tittle'));
	                    		?>
	                    	</div>

							<textarea name="ask_question" id="ask_question" cols="30" rows="10" class="form-control">
								

							</textarea>
							
							<br>
							
							<?php 
							echo form_input(array('type' => 'submit', 'name' => 'submit', 'value' => 'Submit Question', 'class' => 'btn btn-primary pull-right'));
							 ?>
							<br>
							<br>
						</div>
						<?php echo form_open(); ?>

					<!--  ********************************** -->
	            	</div>
	        	</div>
	    	</div>


	    	<div class="col-md-4">
	            <div class="row">
	                <div class="col-md-12">
						<!--  ********************************** -->

						<div class="widget-main">
                    <div class="widget-main-title">
                        <h4 class="widget-title">Upcoming Events</h4>
                    </div> <!-- /.widget-main-title -->
                    <div class="widget-inner">
                        <div class="event-small-list clearfix">
                            <div class="calendar-small">
                                <span class="s-month">Jan</span>
                                <span class="s-date">24</span>
                            </div>
                            <div class="event-small-details">
                                <h5 class="event-small-title"><a href="event-single.html">Nelson Mandela Memorial Tribute</a></h5>
                                <p class="event-small-meta small-text">Cramton Auditorium 9:00 AM to 1:00 PM</p>
                            </div>
                        </div>
                        <div class="event-small-list clearfix">
                            <div class="calendar-small">
                                <span class="s-month">Jan</span>
                                <span class="s-date">24</span>
                            </div>
                            <div class="event-small-details">
                                <h5 class="event-small-title"><a href="event-single.html">OVADA Oxford Open</a></h5>
                                <p class="event-small-meta small-text">Posner Center 4:30 PM to 6:00 PM</p>
                            </div>
                        </div>
                        <div class="event-small-list clearfix">
                            <div class="calendar-small">
                                <span class="s-month">Jan</span>
                                <span class="s-date">24</span>
                            </div>
                            <div class="event-small-details">
                                <h5 class="event-small-title"><a href="event-single.html">Filming Objects And Sculpture</a></h5>
                                <p class="event-small-meta small-text">A70 Cyert Hall 12:00 PM to 1:00 PM</p>
                            </div>
                        </div>
                    </div> <!-- /.widget-inner -->
                </div> <!-- /.widget-main -->

                <div class="widget-main">
                    <div class="widget-main-title">
                        <h4 class="widget-title">Our Gallery</h4>
                    </div>
                    <div class="widget-inner">
                        <div class="gallery-small-thumbs clearfix">
                            <div class="thumb-small-gallery">
                                <a class="fancybox" rel="gallery1" href="images/gallery/gallery1.jpg" title="Gallery Tittle One">
                                    <img src="images/gallery/gallery-small-thumb1.jpg" alt="" />
                                </a>
                            </div>
                            <div class="thumb-small-gallery">
                                <a class="fancybox" rel="gallery1" href="images/gallery/gallery2.jpg" title="Gallery Tittle One">
                                    <img src="images/gallery/gallery-small-thumb2.jpg" alt="" />
                                </a>
                            </div>
                            <div class="thumb-small-gallery">
                                <a class="fancybox" rel="gallery1" href="images/gallery/gallery3.jpg" title="Gallery Tittle One">
                                    <img src="images/gallery/gallery-small-thumb3.jpg" alt="" />
                                </a>
                            </div>
                            <div class="thumb-small-gallery">
                                <a class="fancybox" rel="gallery1" href="images/gallery/gallery4.jpg" title="Gallery Tittle One">
                                    <img src="images/gallery/gallery-small-thumb4.jpg" alt="" />
                                </a>
                            </div>
                            <div class="thumb-small-gallery">
                                <a class="fancybox" rel="gallery1" href="images/gallery/gallery5.jpg" title="Gallery Tittle One">
                                    <img src="images/gallery/gallery-small-thumb5.jpg" alt="" />
                                </a>
                            </div>
                            <div class="thumb-small-gallery">
                                <a class="fancybox" rel="gallery1" href="images/gallery/gallery6.jpg" title="Gallery Tittle One">
                                    <img src="images/gallery/gallery-small-thumb6.jpg" alt="" />
                                </a>
                            </div>
                            <div class="thumb-small-gallery">
                                <a class="fancybox" rel="gallery1" href="images/gallery/gallery7.jpg" title="Gallery Tittle One">
                                    <img src="images/gallery/gallery-small-thumb7.jpg" alt="" />
                                </a>
                            </div>
                            <div class="thumb-small-gallery">
                                <a class="fancybox" rel="gallery1" href="images/gallery/gallery8.jpg" title="Gallery Tittle One">
                                    <img src="images/gallery/gallery-small-thumb8.jpg" alt="" />
                                </a>
                            </div>
                        </div> <!-- /.galler-small-thumbs -->
                    </div> <!-- /.widget-inner -->
                </div> <!-- /.widget-main -->

						<!--  ********************************** -->
	                </div>
	            </div>
            </div>
		</div>
	</div>

<?php $this->load->view('common/footer');?>