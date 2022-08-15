@extends('layouts.app')

@section('content')
<section id="about" class="section-padding wow fadeIn delay-05s">
    <div class="container">
      <div class="row">
        <div class="col-md-6 text-right">
          <h2 class="title-text">
            Meet<br><span class="deco">Ahmad Syafiq</span> Anuar
          </h2>
        </div>
        <div class="col-md-6 text-left">
          <div class="about-text">
            </br>
			<p>Hello ! My name is Ahmad Syafiq. You can call me Syafiq. I am a programmer and a web developer specializing in back-end and web-based production. I have been doing programming almost 2 years. I still consider myself as a junior as I still have a lot of things to learn. I have experience in PHP, JavaScript, JQuery, C#, MYSQL, MSSQL, Android Studio, and Framework in Laravel & MVC 5</p>
            
            <p>I’m always open to exciting new job opportunities, with my Curriculum Vitae available on request. Please get in touch, it would be great to hear from you.</p>
            <p>&nbsp;</p>
            <ul class="abt-list">
              <li>Three words to describe myself :</li>
              <li>1. Ambitious</li>
              <li>2. Easy-going</li>
              <li>3. Conscientious</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <section id="portfolio" class="section-padding wow fadeInUp delay-05s">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="title text-center">Let's <span class="deco">See</span> My Work</h2>
        </div>
        <div class="col-md-12">
			<h3 class="title text-center"><span class="deco">Current Work</span></h2>
			
			<div class="col-sm-12 col-md-12 col-xs-12">
				<div class="thumbnail" style="border:none;background-color:inherit">
					<div class="col-sm-3 col-md-3 col-xs-12 image-container">
						<img src="img/myweb.png" style="height:180px;width:110%; margin-left:-15px;" />
					</div>

					<div class="col-sm-9 col-md-9 col-xs-12">  
						<h4>My Website</h4>
						<br>
						<p>This website that i publish is not finish yet. I am trying to make more functions and dynamically to add or remove content using database. For now, everything is hard coded and no interaction with database except for the message box.</p>
						<p>This project were develop using Laravel Framework and using MVC technique.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-xs-12">
				<div class="thumbnail" style="border:none;background-color:inherit">
					<div class="col-sm-3 col-md-3 col-xs-12 image-container">
						<img src="img/timesheet.png" style="height:180px;width:110%; margin-left:-15px;" />
					</div>

					<div class="col-sm-9 col-md-9 col-xs-12">  
						<h4>Timesheet Management</h4>
						<br>
						<p>This project was started by me alone as training - mini project for my current company im working at. Currently still doing it.</p>
						<p>This project were develop using c#, MVC 5 Framework and using MVC, Repositary, N-Tier Architecture technique.</p>
					</div>
				</div>
			</div>
		
			<h3 class="title text-center"><span class="deco">Past Work</span></h2>
			
			<div class="col-sm-12 col-md-12 col-xs-12">
				<div class="thumbnail" style="border:none;background-color:inherit">
					<div class="col-sm-3 col-md-3 col-xs-12 image-container">
						<img src="https://via.placeholder.com/200x150/EFEFEF/AAAAAA&text=no+image" style="height:200px;height:180px;width:110%;  margin-left:-15px;" />
					</div>

					<div class="col-sm-9 col-md-9 col-xs-12">  
						<h4>Customer Library</h4>
						<br>
						<p>Customer Library were develop in Warisan IT Consultant. This project main function is to record customer detail, payment and to track the customer details.</p>
						<p>This project were develop using Laravel Framework and using MVC technique.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-xs-12">
				<div class="thumbnail" style="border:none;background-color:inherit">
					<div class="col-sm-3 col-md-3 col-xs-12 image-container">
						<img src="img/ohana.png" style="height:200px;height:180px;width:110%;  margin-left:-15px;" />
					</div>

					<div class="col-sm-9 col-md-9 col-xs-12">  
						<h4>Ohana Diner, Retail and Backoffice</h4>
						<br>
						<p>Ohana Diner is a Food and Beverage(F&B) Point of Sales(POS) system, Ohana Retail is a retail POS system, and Ohana Backoffice is the back-end for these two products for consolidation reports and system managements.</p>
						<p>These three softwares is what I do in my first programming company I work for (Warisan IT Consultant Sdn Bhd). Most of the core function already been write by the senior programmer. I`m only develops new function, enhancements, fixing bugs and debugging</p>
						<p>The main language of this projects is PHP and Javascript.Python also is used in these project to interact with the hardwares. MYSQL is for the DB. This project were done in traditional programmed method without using MVC Pattern.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-xs-12">
				<div class="thumbnail" style="border:none;background-color:inherit">
					<div class="col-sm-3 col-md-3 col-xs-12 image-container">
						<img src="img/eztimetable.png" style="height:200px;height:180px;width:110%;  margin-left:-15px;" />
					</div>

					<div class="col-sm-9 col-md-9 col-xs-12">  
					<h4>Ez Timetable</h4>
					<br>
					<p>This Project were done for my final year project in PUO. The purpose of this project, is to provide an easy way for lecturers to informed their students regarding any changes in the class time table’s studies.This can be done by providing a medium between lecturers and students to communicate with each other more clearly and faster, without any misinformation by third party.</p>
					<p>This Project were programmed using Android Studio for the native app, also PHP and MYSQL were used for the back-end to upload the schedule.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-xs-12">
				<div class="thumbnail" style="border:none;background-color:inherit">
					<div class="col-sm-3 col-md-3 col-xs-12 image-container">
						<img src="https://via.placeholder.com/200x150/EFEFEF/AAAAAA&text=no+image" style="height:200px;height:180px;width:110%;  margin-left:-15px;" />
					</div>

					<div class="col-sm-9 col-md-9 col-xs-12">  
					<h4>E-Books</h4>
					<br>
					<p>This project were done during my study in PUO. The purpose of this project, is to provide an electronic books for the student. This project only have front-end without back-end</p>
					<p>This is a skeleton project. There is no Database implemented in this project. Everything is coded using html and jquery mobile. Back then, i am using phonegap to convert the source into apk form to be install in android.</p>
					</div>
				</div>
			</div>
        </div>
      </div>
    </div>
  </section>
  
  <section id="wtimeline" class="section-padding wow fadeInUp">
	<div class="container">
		<div class="row">
			<div class="container">
				<div class="page-header">
					<h1 id="timeline">Summary of<span class="deco"> my life</span> Timeline</h1>
				</div>
				<ul class="timeline">
					<li class="timeline-inverted">
					  <div class="timeline-badge danger"><i class="fa fa-briefcase"></i></div>
					  <div class="timeline-panel">
						<div class="timeline-heading">
						  <h4 class="timeline-title">Work Experience</h4>
						  <h5 class="timeline-title"><span class="deco"> Mar 2017 → Present </span></h5>
						</div>
						<div class="timeline-body">
						  <p>Technical Consultant at AGTIV Consulting Sdn. Bhd.</p>
						  <p>Develop and debug modules for the company software Online and Onsite traning</p>
						</div>
					  </div>
					</li>
					<li class="timeline">
					  <div class="timeline-badge success"><i class="fa fa-graduation-cap"></i></div>
					  <div class="timeline-panel">
						<div class="timeline-heading">
						  <h4 class="timeline-title">Education [Part-Time]</h4>
						  <h5 class="timeline-title"><span class="deco"> Sep 2016 → Present </span></h5>
						</div>
						<div class="timeline-body">
							<p>Degree in Software Engenieering, Universiti Teknologi Malaysia</p>
						</div>
					  </div>
					</li>
					<li class="timeline-inverted">
					  <div class="timeline-badge danger"><i class="fa fa-briefcase"></i></div>
					  <div class="timeline-panel">
						<div class="timeline-heading">
						  <h4 class="timeline-title">Work Experience</h4>
						  <h5 class="timeline-title"><span class="deco"> Jan 2016 → Mar 2017 </span></h5>
						</div>
						<div class="timeline-body">
						  <p>Application Engineer at Warisan IT Consultant Sdn. Bhd.</p>
						  <p>Develop and debug modules for the company software Online and Onsite traning</p>
						</div>
					  </div>
					</li>
					<li>
					  <div class="timeline-badge info"><i class="fa fa-briefcase"></i></div>
					  <div class="timeline-panel">
						<div class="timeline-heading">
						  <h4 class="timeline-title">Work Experience</h4>
						  <h5 class="timeline-title"><span class="deco"> Jun 2015 → Dec 2015 </span></h5>
						</div>
						<div class="timeline-body">
						  <p>Technical Support/ Sales at PA Communication Solution Sdn. Bhd.</p>
							<p>Troubleshooting hardware, software and network Support customer In-Office and On-Site</p>
						  
						  <!--
						  <hr>
						  <div class="btn-group">
							<button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown">
							  <i class="glyphicon glyphicon-cog"></i> <span class="caret"></span>
							</button>
							<ul class="dropdown-menu" role="menu">
							  <li><a href="#">Action</a></li>
							  <li><a href="#">Another action</a></li>
							  <li><a href="#">Something else here</a></li>
							  <li class="divider"></li>
							  <li><a href="#">Separated link</a></li>
							</ul>
						  </div>
						  -->
						</div>
					  </div>
					</li>
					<li class="timeline-inverted">
					  <div class="timeline-badge success"><i class="fa fa-graduation-cap"></i></div>
					  <div class="timeline-panel">
						<div class="timeline-heading">
						  <h4 class="timeline-title">Education</h4>
						  <h5 class="timeline-title"><span class="deco"> Jun 2012 → Jun 2014 </span></h5>
						</div>
						<div class="timeline-body">
							<p>Diploma in Information Technology (Programming), Ungku Omar Polytechnic</p>
							<p>Awards :- </p>
							<p>Dean List Awards (Semester 1 to Semester 6) <br> Silver Award in Exhibition and Competition of Student Projects JTMK <br> Silver Award in Mobile Apps Development Technology, Exhibition and Competition (#MyAppsTEC2015)</p>
						</div>
					  </div>
					</li>
				</ul>
			</div>
	  
	  <!--
        <h2 class="title text-center">See What Our <span class="deco">Client</span> Are Saying ?</h2>
        <div class="test-sec">
          <div class="col-sm-4">
            <blockquote>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diamsed commodo nibh ante facilisis bibendum dolor feugiat at. </p>
            </blockquote>
            <div class="carousel-info">
              <div class="pull-left"> <span class="testimonials-name">John Doe</span> <span class="testimonials-post">CEO,  Company Inc.</span> </div>
            </div>
          </div>
          <div class="col-sm-4">
            <blockquote>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diamsed commodo nibh ante facilisis bibendum dolor feugiat at. </p>
            </blockquote>
            <div class="carousel-info">
              <div class="pull-left"> <span class="testimonials-name">John Doe</span> <span class="testimonials-post">CEO,  Company Inc.</span> </div>
            </div>
          </div>
          <div class="col-sm-4">
            <blockquote>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diamsed commodo nibh ante facilisis bibendum dolor feugiat at. </p>
            </blockquote>
            <div class="carousel-info">
              <div class="pull-left"> <span class="testimonials-name">John Doe</span> <span class="testimonials-post">CEO,  Company Inc.</span> </div>
            </div>
          </div>
        </div>
	  -->
		</div>
    </div>
  </section>
  
  <section id="contact" class="section-padding wow fadeIn delay-05s">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="contact-sec text-center">
            <h2>Want To <span class="deco">Contact</span> Me?</h2>
            <p>My Email is : asyafiq99@gmail.com</p>
            <p>Or if want me to contact you, please leave a message below.</p>
          </div>
        </div>
        
        <div class="col-md-8 col-md-push-2">
            <div id="errormessage"></div>
            <form action="/contactme" method="post" role="form" class="contactForm">
				{{ csrf_field() }}
                <div class="form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validation"></div>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                    <div class="validation"></div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                    <div class="validation"></div>
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                    <div class="validation"></div>
                </div>
                
                <div class="text-center"><button type="submit" class="btn btn-primary btn-lg">Send Message</button></div>
            </form>
        </div>
        
      </div>
    </div>
  </section>
  
	<div id="message" class="modal fade" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">Message</h4>
				</div>
				<div class="modal-body">
					<p>Your message has been sent. Thank you!</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
  
  
<script src="js/jquery.min.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.bxslider.min.js"></script>
<script src="js/wow.js"></script>
<script src="js/custom.js"></script>

@if(!empty($msg))
	<script>
	$(function() {
		@if($msg == 2)
			$(".modal-body").html("Error in sending message. Please try again later.");
		@endif
		$('#message').modal('show');
	});
	
	$('#message').on('hidden.bs.modal', function () {
		window.location.replace("/");
	});
	</script>
@endif

@endsection


