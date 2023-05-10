<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>" class="no-js">
<head>
        <!-- Define Charset -->
		<meta charset="<?php bloginfo('charset');?>">
        
        <!-- Title -->
        <title><?php bloginfo( 'name' );?></title>

        <!-- Responsive Metatag -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        
        <meta name="description" content="<?php bloginfo( 'description' );?>">
        <!-- Custom styles -->
    	<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>/css/custom.css">

    	<!-- Bootstrap core CSS -->
    	<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' );?> /css/bootstrap.css">
		
		<!-- Custom fonts -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/font/font-awesome/css/font-awesome.min.css'; ?>" />
         <?php wp_head();?>
</head>

  	<body <?php body_class();?>>
    	<!-- Main Navigation -->
    	<nav id="mainNav" class="navbar navbar-expand-lg navbar-light fixed-top">
        <h2 class="text-center">This is Navigation section</h2>
    </nav>
    <div class="container-fluid">
    	<!-- Header Top Section -->
    	<header class="header-top">
      		<div class="container p-5">
        		<div class="row">
          			<div class="col-lg-6 col-md-6 col-sm-6 text-center">
            		    <!-- <img class="img-fluid" src="img/hero.svg" alt="header image"> -->
            		    <img class="img-fluid" src="<?php echo get_theme_mod('person_image');?>" alt="header image">

          			</div>
          			<div class="col-lg-6 col-md-6 col-sm-6">
						<div class="hello">
							<!-- <h2>hello</h2> -->
                            <h2><?php echo get_theme_mod('welcome_text');?></h2>
						</div>
						<div class="name mt-4">
							<h1><span>I'm </span><span><?php echo get_theme_mod('hero_heading_name');?></span></h1>
							<h5><?php echo get_theme_mod('hero_expertise');?></h5>

						</div>
						<div class="resume mt-4">
							<a href="<?php echo get_theme_mod('hero_btn_url');?>"><?php echo get_theme_mod('hero_btn_text');?>E</a>
						
                        </div>
						<div class="social">
                            <!--
							<a href="https://www.facebook.com/codeanik"><i class="fa fa-facebook" aria-hidden="true"></i></a>
							<a href="https://twitter.com/code_anik"><i class="fa fa-twitter" aria-hidden="true"></i></a>
							<a href="https://www.behance.net/codeanik"><i class="fa fa-behance" aria-hidden="true"></i></a>
							<a href="https://www.linkedin.com/in/codeanik"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
							<a href="https://github.com/CodeAnik"><i class="fa fa-github" aria-hidden="true"></i></a>
							<a href="https://www.instagram.com/codeanik"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            -->
                            <?php if (get_theme_mod('social_media_facebook_link')) : ?>
                                <a href="<?php echo esc_url(get_theme_mod('social_media_facebook_link')); ?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <?php endif; ?>
                            
                            <?php if (get_theme_mod('social_media_twitter_link')) : ?>
                                <a href="<?php echo esc_url(get_theme_mod('social_media_twitter_link')); ?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <?php endif; ?>
                            
                            <?php if (get_theme_mod('social_media_instagram_link')) : ?>
                                <a href="<?php echo esc_url(get_theme_mod('social_media_instagram_link')); ?>" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            <?php endif; ?>
                            
                            <?php if (get_theme_mod('social_media_linkedin_link')) : ?>
                                <a href="<?php echo esc_url(get_theme_mod('social_media_linkedin_link')); ?>" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            <?php endif; ?>

                            <?php if (get_theme_mod('social_media_behance_link')) : ?>
                                <a href="<?php echo esc_url(get_theme_mod('social_media_behance_link')); ?>" target="_blank"><i class="fa fa-behance" aria-hidden="true"></i></a>
                            <?php endif; ?>

                            <?php if (get_theme_mod('social_media_dribble_link')) : ?>
                                <a href="<?php echo esc_url(get_theme_mod('social_media_dribbble_link')); ?>" target="_blank"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                            <?php endif; ?>

                            <?php if (get_theme_mod('social_media_github_link')) : ?>
                                <a href="<?php echo esc_url(get_theme_mod('social_media_github_link')); ?>" target="_blank"><i class="fa fa-github" aria-hidden="true"></i></a>
                            <?php endif; ?>
                            
                            <?php if (get_theme_mod('social_media_youtube_link')) : ?>
                                <a href="<?php echo esc_url(get_theme_mod('social_media_youtube_link')); ?>" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                            <?php endif; ?>
                        </div>
          			</div>
        		</div>
      		</div>
    	</header>
		
        <!-- About Me Section -->
		<section id="about" class="mt-4">
            <div class="container-fluid">
            	<div class="about-me-heading">
                    <h1><span>About</span><span> Me</span></h1>	
                </div>
        	</div>
        	<div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-12 col-sm-12">
                        <div class="about-content mt-4">
                            <p><?php echo esc_html( get_theme_mod( 'about_myself' ) ); ?></p>
                            <p><?php echo esc_html( get_theme_mod( 'about_myself_additional' ) ); ?></p>
                        </div>
                    </div>
                    <div class="offset-lg-1 col-lg-6 col-md-12 col-sm-12">
                        <div class="row">
                            <?php
                            for ( $i = 1; $i <= 2; $i++ ) {
                                $skill_title = get_theme_mod( 'skill_' . $i . '_title' );
                                $skill_icon = get_theme_mod( 'skill_' . $i . '_icon' );
                                if ( ! empty( $skill_title ) && ! empty( $skill_icon ) ) {
                                    ?>
                                    <div class="col-md-6 col-lg-6 col-sm-6 skill mb-2">
                                        <span><img class="img-fluid" src="<?php echo esc_attr( $skill_icon ); ?>" alt="<?php echo esc_attr( $skill_title ); ?>"></span><?php echo esc_html( $skill_title ); ?>
                                    </div>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
				
            
			<!-- <div class="container">
				<div class="row">
					<div class="col-lg-5 col-md-12 col-sm-12">
						<div class="about-content mt-4">
							<p>I'm <b>Anik Khan.</b> I am Website Developer. and I'm very passionate and dedicated to my work.I have a lot of experienceas a professional Website Develop, I have acquired the skills and knowledge necessary to make your project a success. </p>
							<p>To build my career in a challenging environment, where I can utilize my knowledge, skill, and sincerity to achieve desirable goals through a team-based management approach.</p>
                        </div>
					</div>
                    <div class="offset-lg-1 col-lg-6 col-md-12 col-sm-12">
						<div class="row">
							<div class="col-md-6 col-lg-6 col-sm-6 skill mb-2">
								<span><img class="img-fluid" src="img/web-design.png" alt="Web Develop"></span>Web Develop
							</div>
							<div class="col-md-6 col-lg-6 col-sm-6 skill mb-2">
								<span><img class="img-fluid" src="img/app-design.png" alt="Web Develop 1"></span>Web Developer
							</div>
						</div>
						
						<div class="row">
							<div class="col-md-6 col-lg-6 col-sm-6 skill mb-2">
								<span><img class="img-fluid" src="img/graphics-design.png" alt="Graphics Design"></span>Graphics Design
							</div>
							<div class="col-md-6 col-lg-6 col-sm-6 skill mb-2">
								<span><img class="img-fluid" src="img/brand-design.png" alt="Brand Design"></span> Creative Research
							</div>
						</div>
					</div>
				</div>
			</div> -->
		</section>
		

        <!-- My Skills Section -->
        <?php
        // Generate the front-end markup
        function my_skills_frontend_markup() {
            echo '<section id="skill-progress" class="mt-5">';
            echo '<div class="container-fluid">';
            echo '<div class="my-skill-heading">';
            echo '<h1><span>My</span><span> Skills</span></h1>';
            echo '</div>';
            echo '</div>';
            echo '<div class="clearfix"></div>';
            echo '<div class="container mt-4">';
            echo '<div class="row">';

            for ($i = 1; $i <= 20; $i++) {
                $skill_title = get_theme_mod('skill' . $i . '_title', '');
                $skill_level = get_theme_mod('skill' . $i . '_level', 0);

                if (!empty($skill_title) && $skill_level > 0) {
                    echo '<div class="col-md-6 col-lg-6 col-sm-6 mb-4">';
                    echo '<span>' . esc_html($skill_title) . '</span>';
                    echo '<span class="float-right">' . esc_html($skill_level) . '%</span>';
            echo '<div class="skillbar clearfix mb-3" data-percent="' . esc_attr($skill_level) . '">';
            echo '<div class="skillbar-bar"></div>';
            echo '</div>';
            echo '</div>';
                    }
                }

                echo '</div>';
                echo '</div>';
                echo '</section>';
            }

        ?>
        <!-- 		
        <section id="skill-progress" class="mt-5">
        	<div class="container-fluid">
            	<div class="my-skill-heading">
                    <h1><span>My</span><span> Skills</span></h1>	
                </div>
        	</div>
            <div class="clearfix"></div>
            
			<div class="container mt-4">
				<div class="row">
			        <div class="col-md-6 col-lg-6 col-sm-6 mb-4">
                        <span>Wordpress Knowledge</span><span class="float-right">90%</span>
            			<div class="skillbar clearfix mb-3" data-percent="90%">
                            <div class="skillbar-bar"></div>
                        </div>
				    </div>
			        <div class="col-md-6 col-lg-6 col-sm-6 mb-4">
                        <span>Wordpress Theme Customization</span><span class="float-right">80%</span>
            			<div class="skillbar clearfix mb-3" data-percent="80%">
                            <div class="skillbar-bar"></div>
                        </div>
				    </div>
                    <div class="col-md-6 col-lg-6 col-sm-6 mb-4">
                        <span>HTML/CSS/BOOTSTRAP</span><span class="float-right">90%</span>
            			<div class="skillbar clearfix mb-3" data-percent="90%">
                            <div class="skillbar-bar"></div>
                        </div> 
				    </div>
                    <div class="col-md-6 col-lg-6 col-sm-6 mb-4">
                        <span>ReactJs</span><span class="float-right">75%</span>
            			<div class="skillbar clearfix mb-3" data-percent="75%">
                            <div class="skillbar-bar"></div>
                        </div> 
				    </div>
                    <div class="col-md-6 col-lg-6 col-sm-6 mb-4">
                        <span>JavaScript</span><span class="float-right">65%</span>
            			<div class="skillbar clearfix mb-3" data-percent="65%">
                            <div class="skillbar-bar"></div>
                        </div> 
				    </div>
                    <div class="col-md-6 col-lg-6 col-sm-6 mb-4">
                        <span>Python(Basic)</span><span class="float-right">65%</span>
            			<div class="skillbar clearfix mb-3" data-percent="65%">
                            <div class="skillbar-bar"></div>
                        </div> 
				    </div>
                    <div class="col-md-6 col-lg-6 col-sm-6 mb-4">
		            	<span>Graphics Design</span><span class="float-right">90%</span>
						<div class="skillbar clearfix mb-3" data-percent="90%">
		                	<div class="skillbar-bar"></div>
		                </div> 
				    </div>
                    
                    <div class="col-md-6 col-lg-6 col-sm-6 mb-4">
                        <span>OOP (Object Oriented Programming)</span><span class="float-right">70%</span>
            			<div class="skillbar clearfix mb-3" data-percent="70%">
                            <div class="skillbar-bar"></div>
                        </div> 
				    </div>
                    <div class="col-md-6 col-lg-6 col-sm-6 mb-4">
                        <span>Database Managment</span><span class="float-right">75%</span>
            			<div class="skillbar clearfix mb-3" data-percent="75%">
                            <div class="skillbar-bar"></div>
                        </div> 
				    </div>
                    <div class="col-md-6 col-lg-6 col-sm-6 mb-4">
                        <span>Adobe Photoshop</span><span class="float-right">90%</span>
            			<div class="skillbar clearfix mb-3" data-percent="90%">
                            <div class="skillbar-bar"></div>
                        </div> 
				    </div>
		            <div class="col-md-6 col-lg-6 col-sm-6 mb-4">
		                <span>Adobe Illustrator</span><span class="float-right">80%</span>
						<div class="skillbar clearfix mb-3" data-percent="80%">
		                	<div class="skillbar-bar"></div>
		            	</div> 
				    </div>
                    <div class="col-md-6 col-lg-6 col-sm-6 mb-4">
                        <span>MS Office/Powerpoint</span><span class="float-right">90%</span>
            			<div class="skillbar clearfix mb-3" data-percent="90%">
                            <div class="skillbar-bar"></div>
                        </div> 
				    </div>
                    <div class="col-md-6 col-lg-6 col-sm-6 mb-4">
                        <span>Communication Skils</span><span class="float-right">95%</span>
            			<div class="skillbar clearfix mb-3" data-percent="95%">
                            <div class="skillbar-bar"></div>
                        </div> 
				    </div>
                    <div class="col-md-6 col-lg-6 col-sm-6 mb-4">
                        <span>Team Work</span><span class="float-right">95%</span>
            			<div class="skillbar clearfix mb-3" data-percent="95%">
                            <div class="skillbar-bar"></div>
                        </div> 
				    </div>
                    <div class="col-md-6 col-lg-6 col-sm-6 mb-4">
                        <span>Fact-Checking</span><span class="float-right">95%</span>
            			<div class="skillbar clearfix mb-3" data-percent="95%">
                            <div class="skillbar-bar"></div>
                        </div> 
				    </div>
                    <div class="col-md-6 col-lg-6 col-sm-6 mb-4">
                        <span>News Report Researching & Writing</span><span class="float-right">95%</span>
            			<div class="skillbar clearfix mb-3" data-percent="90%">
                            <div class="skillbar-bar"></div>
                        </div> 
				    </div>
				</div>
			</div>
		</section>
		 -->
        <!-- Work Exp Section -->
		<section id="work-exp" class="mt-5">
        	<div class="container-fluid">
            	<div class="work-exp-heading">
                    <h1><span>Work</span><span> Exp.</span></h1>	
                </div>
        	</div>
			<div class="container mt-2">
				<div class="row">
                    <div class="offset-md-1 offset-lg-1 col-md-6 col-lg-4 pt-5 mb-2">
						<img class="img-fluid" src="img/work-exp.png" alt="Work experiance">
					</div>
					<div class="col-md-5 col-lg-7">
						<ul class="list-group vertical-steps">
                            <li class="list-group-item completed">
								<h4>Rumor Scanner</h4> 
								<h5>Fact Checker & Researcher</h5><br>
								<p class="text-justify">Rumor Scanner is a verified signatory of the International Fact-Checking Network (IFCN) and an independent fact-checking entity with an objective to combat misinformation, propaganda campaign & ongoing rumors across digital media. </p>
							</li>
							<li class="list-group-item completed">
								<h4>Bizuz</h4> 
								<h5>Junior Website Developer</h5><br>
								<p class="text-justify">Bizuz is an Online Educational Platform for English Medium. Where you will get video and pdf solutions of past papers which are solved by the expert teachers and theoretical video lectures alongside notes. We are also providing free resources such as past papers. </p>
							</li>
							<li class="list-group-item completed">
								<h4>ICPC - International Collegiate Programming Contest - 2017.</h4> 
								<h5>Volunteer of ICPC 2017</h5><br>
								<p class="text-justify">The two-day long ACM-International Collegiate Programming Contest (ACM-ICPC-2017) was held at the University of Asia Pacific (UAP) permanent campus,Green road,Dhaka.</p>
							</li>
						  	<li class="list-group-item completed">
								<h4>National IT competition for youth with Disabilities 2019.</h4> 
								<h5>Volunteer of NITCYD-19</h5><br>
								<p class="text-justify">The daylong IT competition for differently-abled students was held at the University of Asia Pacific(UAP).Chief Guest: Mr. Junaid Ahmed Palak MP, Honorable State Minister, ICT Division</p>
                            </li>
                            <li class="list-group-item completed">
								<h4>TechTrix Technologies.</h4> 
								<h5>Campus Ambassador & Font-End Developer.</h5>
                            </li>
                            <li class="list-group-item completed">
								<h4>Kovair Software Bangladesh.</h4> 
								<h5>Campus Ambassador</h5>
                            </li>
                            <li class="list-group-item completed">
								<h4>Freelancer at Fiverr & upwork</h4> 
								<h5>Graphics Designer &  Font_End Developer</h5>
							</li>
						</ul>  
					</div>
				</div>
			</div>
		</section>
        
		<!-- My work Section -->
        <section id="my-work" class="mt-3 pt-5">
			<div class="container justify-content-center">
                	<div class="row mb-4">
                        <div class="col-md-12 col-lg-12 col-sm-12 col-12 text-center">	
                            <div class="work-title">
                                <h1><span>My</span><span> Work</span></h1>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-12">
                            <div class="tabs-wrapper"> 
                                <ul class="nav classic-tabs tabs-cyan about-tab justify-content-center" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link waves-light active show" data-toggle="tab" href="#panel51" role="tab" aria-expanded="true" aria-selected="true">Web Design</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link waves-light" data-toggle="tab" href="#panel52" role="tab" aria-expanded="false" aria-selected="false">Web Develop (Back-End)</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link waves-light" data-toggle="tab" href="#panel53" role="tab" aria-expanded="false">Graphic Design</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link waves-light" data-toggle="tab" href="#panel54" role="tab" aria-expanded="false">UI/UX Design</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link waves-light" data-toggle="tab" href="#panel55" role="tab" aria-expanded="false">Marketplace</a>
                                    </li>
                                </ul>
                            </div>
                        </div>	
                    </div>
                                <!-- Website Design Part-->
                    <div class="tab-content about-tab-pane text-center mt-5">
                        <div class="tab-pane fade in active show" id="panel51" role="tabpanel" aria-expanded="true">
                            <div class="row justify-content-center">
                                <div class="col-md-4 col-sm-6 portfolio-item">
                                    <a class="portfolio-link" data-toggle="modal" href="#portfolio1">
                                        <div class="portfolio-hover">
                                            <div class="portfolio-hover-content">
                                                <i class="fa fa-plus fa-3x"></i>
                                            </div>
                                        </div>
                                        <img class="img-fluid" src="img/webd1.jpg" alt="portfolio">
                                    </a>
                                    <div class="portfolio-caption">
                                        <p class="text-muted">Portfolio Website Design</p>
                                    </div>
                                    <!-- The Modal -->
                                    <div class="modal fade" id="portfolio1" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                          
                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Portfolio Web Design</h4>       <!-- Here Project Name -->
                                                    <button type="button" class="close" data-dismiss="modal">×</button>
                                                </div>
                                            
                                                <!-- Modal body -->
                                                <div class="modal-body">
                                                    <img class="img-fluid model-img mt-2 mb-3" src="img/webd1.jpg" alt="portfolio">
                                                    <p class="text-justify">In addition to your portfolio items on your website, it’s a great idea to keep up in your industry. Putting your ideas and thoughts about industry trends out there with a blog is the best way to stay current and prove you’re an innovator and can solve the most complex problems.</p>
                                                    <p class="text-justify">By putting your ideas down on the web you’re documenting them for retrieval by yourself and others. This not only allows you to retrieve those ideas later to help you work on your current project or stay focused, now others can see your ideas and add valuable insights too. Your project or idea becomes infinitely more powerful as more people see it and more are thinking about it.</p>
                                                    <p class="text-justify">If you’ve prepared by securing rights to some of your work (all you have to do is ask!) and put them together into a portfolio website then you’re prepared to start job hunting right away. Just as it’s important to always keep your résumé/CV updated regularly, you should keep a well-maintained portfolio website that shows (not just tells!) all your latest accomplishments.</p>
                                                    <p class="text-justify">Set aside a few hours a month to organize and edit a project to show on your portfolio. It doesn’t take very long and the security it creates for your career is priceless. If you don’t have a tangible object to put on a portfolio website, start a blog documenting your ideas and work beliefs.</p>
                                                    <p class="text-justify"> This website template design for practice & innovative. After all you have to need like this website contact with me.</p>
                                                    <p class="pro-date">Date: August 2019</p>
                                                    <p class="pro-client">Client: Explore </p>
                                                    <p class="pro-category">Category: Website Design </p>
                                                </div>
                                                <!-- Modal Footer -->
                                                <div class="modal-footer">
                                                    <button type="button" class="btn-close" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                                                </div>
                              
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 portfolio-item">
                                    <a class="portfolio-link" data-toggle="modal" href="#web6">
                                        <div class="portfolio-hover">
                                            <div class="portfolio-hover-content">
                                                <i class="fa fa-plus fa-3x"></i>
                                            </div>
                                        </div>
                                        <img class="img-fluid" src="img/DocTime1.png">
                                    </a>
                                    <div class="portfolio-caption">
                                        <p class="text-muted">Doctor Appointment Website</p>
                                    </div>
                                    <!-- The Modal -->
                                    <div class="modal fade" id="web6">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                          
                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Doctor Appointment Website</h4>
                                                    <button type="button" class="close" data-dismiss="modal">×</button>
                                                </div>
                                            
                                                <!-- Modal body -->
                                                <div class="modal-body">
                                                    <img class="img-fluid model-img mt-2 mb-3" src="img/DocTime1.png">
                                                    <img class="img-fluid model-img mt-2 mb-3" src="img/DocTime2.png">
                                                    <img class="img-fluid model-img mt-2 mb-3" src="img/DocTime4.png">
                                                    <p class="text-justify">This type website are available for anyone. If anyone have needed to this type website full free contact with me.</p>
                                                    <p class="pro-date">Date: 1 June 2021</p>
                                                    <p class="pro-client">Client: Explore </p>
                                                    <p class="pro-category">Category: Website Design</p>
                                                </div>
                                                
                                                <!-- Modal Footer -->
                                                <div class="modal-footer">
                                                    <button type="button" class="btn-close" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 portfolio-item">
                                    <a class="portfolio-link" data-toggle="modal" href="#web7">
                                        <div class="portfolio-hover">
                                            <div class="portfolio-hover-content">
                                                <i class="fa fa-plus fa-3x"></i>
                                            </div>
                                        </div>
                                        <img class="img-fluid" src="img/travel1.png">
                                    </a>
                                    <div class="portfolio-caption">
                                        <p class="text-muted">Travelling Website Develop</p>
                                    </div>
                                    <!-- The Modal -->
                                    <div class="modal fade" id="web7">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                          
                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Travelling Website Develop & Design</h4>
                                                    <button type="button" class="close" data-dismiss="modal">×</button>
                                                </div>
                                            
                                                <!-- Modal body -->
                                                <div class="modal-body">
                                                    <img class="img-fluid model-img mt-2 mb-3" src="img/travel1.png">
                                                    <img class="img-fluid model-img mt-2 mb-3" src="img/travel2.png">
                                                    <p class="text-justify">This type website are available for anyone. If anyone have needed to this type website full free contact with me.</p>
                                                    <p class="pro-date">Date: 22 August 2021</p>
                                                    <p class="pro-client">Client: Explore </p>
                                                    <p class="pro-category">Category: Website Design</p>
                                                </div>
                                                
                                                <!-- Modal Footer -->
                                                <div class="modal-footer">
                                                    <button type="button" class="btn-close" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Web Develop Back End Part-->

                        <div class="tab-pane fade" id="panel52" role="tabpanel" aria-expanded="false">
                            <div class="row">
                                <div class="col-md-4 col-sm-6 portfolio-item">
                                    <a class="portfolio-link" data-toggle="modal" href="#portfolio31">
                                        <div class="portfolio-hover">
                                            <div class="portfolio-hover-content">
                                                <i class="fa fa-plus fa-3x"></i>
                                            </div>
                                        </div>
                                        <img class="img-fluid" src="img/8.jpg" alt="portfolio">
                                    </a>
                                    <div class="portfolio-caption">
                                        <p class="text-muted">Any Kinds of Website Develop</p>
                                    </div>
                                    <!-- The Modal -->
                                    <div class="modal fade" id="portfolio31">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                          
                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Any Kinds of Website Develop</h4>         <!-- Project Name Here-->
                                                    <button type="button" class="close" data-dismiss="modal">×</button>
                                                </div>
                                            
                                                <!-- Modal body -->
                                                <div class="modal-body">
                                                    <img class="img-fluid model-img mt-2 mb-3" src="img/8.jpg" alt="portfolio">
                                                    <p>Any type of wensite design & Developing. Example - Wordpress, Newspaper Website, Company Webiste, E-commerce Website, Appointment Website, E-Ticketing Service Etc.</p>
                                                    <p> I using this project for any language if you needed. And also available for native platform web, Android, IOS service. I using most of the languages are JavaScript,ReactJS, NodeJS, MongoDB, Pyhton, PHP, Laravel, Django etc.</p>
                                                    <p class="pro-date">Any Time Hire Me</p>
                                                    <p class="pro-client">Client: Explore </p>
                                                    <p class="pro-category">Category: Website Develop (Back-End)</p>
                                                </div>
                                                
                                                <!-- Modal Footer -->
                                                <div class="modal-footer">
                                                    <button type="button" class="btn-close" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 portfolio-item">
                                    <a class="portfolio-link" data-toggle="modal" href="#web1">
                                        <div class="portfolio-hover">
                                            <div class="portfolio-hover-content">
                                                <i class="fa fa-plus fa-3x"></i>
                                            </div>
                                        </div>
                                        <img class="img-fluid" src="img/bizuz1.PNG">
                                    </a>
                                    <div class="portfolio-caption">
                                        <p class="text-muted">Web Develop in Bizuz</p>
                                    </div>
                                    <!-- The Modal -->
                                    <div class="modal fade" id="web1">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                          
                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Bizuz Website Landing Page</h4>
                                                    <button type="button" class="close" data-dismiss="modal">×</button>
                                                </div>
                                            
                                                <!-- Modal body -->
                                                <div class="modal-body">
                                                    <img class="img-fluid model-img mt-2 mb-3" src="img/webd(2).png">
                                                    <p class="text-justify">Bizuz is an online educational platform that provides the solution to all problems faced by students, by providing both topical and year wise Past Paper Solutions in Video and PDF format.</p>
                                                    <p lass="text-justify">Courses are taken by experienced and expert teachers. You can easily contact with the teachers and your fellow learners in the comment section of the particular course. And also join our facebook group for more help</p>
                                                    <p class="text-justify">Join the largest e-Learning site for International Education Community. Our courses are built keeping all levels of users in mind. Learn from the experts and open up a whole new series of possibilities.</p>
                                                    <p class="text-justify">This type educational website are available for anyone. If anyone have needed to this type website full free contact with me.</p>
                                                    <p class="pro-date">Date: currently work with Bizuz</p>
                                                    <p class="pro-client">Client: Bizuz </p>
                                                    <p class="pro-category">Category: Web Design & Develop</p>
                                                </div>
                                                
                                                <!-- Modal Footer -->
                                                <div class="modal-footer">
                                                    <button type="button" class="btn-close" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                                                </div>
                              
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 portfolio-item">
                                    <a class="portfolio-link" data-toggle="modal" href="#web7">
                                        <div class="portfolio-hover">
                                            <div class="portfolio-hover-content">
                                                <i class="fa fa-plus fa-3x"></i>
                                            </div>
                                        </div>
                                        <img class="img-fluid" src="img/travel1.png">
                                    </a>
                                    <div class="portfolio-caption">
                                        <p class="text-muted">Travelling Website Develop</p>
                                    </div>
                                    <!-- The Modal -->
                                    <div class="modal fade" id="web7">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                          
                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Travelling Website Develop & Design</h4>
                                                    <button type="button" class="close" data-dismiss="modal">×</button>
                                                </div>
                                            
                                                <!-- Modal body -->
                                                <div class="modal-body">
                                                    <img class="img-fluid model-img mt-2 mb-3" src="img/travel1.png">
                                                    <img class="img-fluid model-img mt-2 mb-3" src="img/travel2.png">
                                                    <p class="text-justify">This type website are available for anyone. If anyone have needed to this type website full free contact with me.</p>
                                                    <p class="pro-date">Date: 22 August 2021</p>
                                                    <p class="pro-client">Client: Explore </p>
                                                    <p class="pro-category">Category: Website Design</p>
                                                </div>
                                                
                                                <!-- Modal Footer -->
                                                <div class="modal-footer">
                                                    <button type="button" class="btn-close" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Graphic Design Part-->
                        
                        <div class="tab-pane fade" id="panel53" role="tabpanel" aria-expanded="false">
                            <div class="row">
                                <div class="col-md-4 col-sm-6 portfolio-item">
                                    <a class="portfolio-link" data-toggle="modal" href="#graphics1">
                                        <div class="portfolio-hover">
                                            <div class="portfolio-hover-content">
                                                <i class="fa fa-plus fa-3x"></i>
                                            </div>
                                        </div>
                                        <img class="img-fluid" src="img/Graphic 1.png" alt="portfolio">
                                    </a>
                                    <div class="portfolio-caption">
                                        <p class="text-muted">Graphic 1</p>
                                    </div>
                                    <!-- The Modal -->
                                    <div class="modal fade" id="graphics1">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Project Name</h4>       <!-- Your Project Name -->
                                                    <button type="button" class="close" data-dismiss="modal">×</button>
                                                </div>
                                            
                                                <!-- Modal body -->
                                                <div class="modal-body">
                                                    <img class="img-fluid model-img mt-2 mb-3" src="img/Graphic 1.png" alt="portfolio">
                                                    <p>Use this area to describe your project.</p>
                                                    <p> Contrary to popular belief.</p>
                                                    <p class="pro-date">Date: October 2019</p>
                                                    <p class="pro-client">Client: Explore </p>
                                                    <p class="pro-category">Category: Graphic Design </p>
                                                </div>
                                                
                                                <!-- Modal Footer -->
                                                <div class="modal-footer">
                                                    <button type="button" class="btn-close" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                                                </div>
                              
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 portfolio-item">
                                    <a class="portfolio-link" data-toggle="modal" href="#portfolio14">
                                        <div class="portfolio-hover">
                                            <div class="portfolio-hover-content">
                                                <i class="fa fa-plus fa-3x"></i>
                                            </div>
                                        </div>
                                        <img class="img-fluid" src="img/Graphic 2.png" alt="portfolio">
                                    </a>
                                    <div class="portfolio-caption">
                                        <p class="text-muted">Graphic 2</p>
                                    </div>
                                    <!-- The Modal -->
                                    <div class="modal fade" id="portfolio14">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                          
                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Project Name</h4>       <!-- Your Project Name -->
                                                    <button type="button" class="close" data-dismiss="modal">×</button>
                                                </div>
                                            
                                                <!-- Modal body -->
                                                <div class="modal-body">
                                                    <img class="img-fluid model-img mt-2 mb-3" src="img/Graphic 2.png" alt="portfolio">
                                                    <p>Use this area to describe your project.</p>
                                                    <p> Contrary to popular belief.</p>
                                                    <p class="pro-date">Date: October 2019</p>
                                                    <p class="pro-client">Client: Explore </p>
                                                    <p class="pro-category">Category: Graphic Design </p>
                                                </div>
                                                
                                                <!-- Modal Footer -->
                                                <div class="modal-footer">
                                                    <button type="button" class="btn-close" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                                                </div>
                              
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                            <!-- Application Develop Part-->

                        <div class="tab-pane fade" id="panel54" role="tabpanel" aria-expanded="false">
                            <div class="row">
                                <div class="col-md-4 col-sm-6 portfolio-item">
                                    <a class="portfolio-link" data-toggle="modal" href="#portfolio22">
                                        <div class="portfolio-hover">
                                            <div class="portfolio-hover-content">
                                                <i class="fa fa-plus fa-3x"></i>
                                            </div>
                                        </div>
                                        <img class="img-fluid" src="img/mobile1.png" alt="portfolio">
                                    </a>
                                    <div class="portfolio-caption">
                                        <p class="text-muted">App Design 1</p>
                                    </div>
                                    
                                    <!-- The Modal -->

                                    <div class="modal fade" id="portfolio22">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                          
                                                <!-- Modal Header -->

                                                <div class="modal-header">
                                                    <h4 class="modal-title">Project Name</h4>       <!-- Your Project Name Here -->
                                                    <button type="button" class="close" data-dismiss="modal">×</button>
                                                </div>
                                            
                                                <!-- Modal body -->

                                                <div class="modal-body">
                                                    <img class="img-fluid model-img mt-2 mb-3" src="img/mobile1.png" alt="portfolio">
                                                    <p>Coming Soon</p>
                                                    <p>Coming soon.</p>
                                                    <p class="pro-date">Date: ---</p>
                                                    <p class="pro-client">Client: --- </p>
                                                    <p class="pro-category">Category: App Design</p>
                                                </div>

                                                <!-- Modal Footer -->

                                                <div class="modal-footer">
                                                    <button type="button" class="btn-close" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 portfolio-item">
                                    <a class="portfolio-link" data-toggle="modal" href="#portfolio23">
                                        <div class="portfolio-hover">
                                            <div class="portfolio-hover-content">
                                                <i class="fa fa-plus fa-3x"></i>
                                            </div>
                                        </div>
                                        <img class="img-fluid" src="img/mobile2.png" alt="portfolio">
                                    </a>
                                    <div class="portfolio-caption">
                                        <p class="text-muted">App Develop 2</p>
                                    </div>
                                    <!-- The Modal -->
                                    <div class="modal fade" id="portfolio23">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                          
                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Project Name</h4>       <!-- Your Project Name Here -->
                                                    <button type="button" class="close" data-dismiss="modal">×</button>
                                                </div>
                                            
                                                <!-- Modal body -->
                                                <div class="modal-body">
                                                    <img class="img-fluid model-img mt-2 mb-3" src="img/mobile2.png" alt="portfolio">
                                                    <p>Coming Soon</p>
                                                    <p>Coming Soon</p>
                                                    <p class="pro-date">Date: ----</p>
                                                    <p class="pro-client">Client: --- </p>
                                                    <p class="pro-category">Category: App Design </p>
                                                </div>
                                                
                                                <!-- Modal Footer -->
                                                <div class="modal-footer">
                                                    <button type="button" class="btn-close" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                                                </div>
                              
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="panel55" role="tabpanel" aria-expanded="false">
                            <div class="row">
                                <div class="col-md-4 col-sm-6 portfolio-item">
                                    <a class="portfolio-link" href="https://www.behance.net/">
                                        <img class="img-fluid" src="img/behance.png" alt="behance_account">
                                    </a>
                                    <div class="portfolio-caption">
                                        <p class="text-muted">Visit Behance Profile</p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 portfolio-item">
                                    <a class="portfolio-link" href="https://dribbble.com/">
                                        <img class="img-fluid" src="img/dribbble.png" alt="dribbble_account">
                                    </a>
                                    <div class="portfolio-caption">
                                        <p class="text-muted">Visit Dribbble Profile</p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 portfolio-item">
                                    <a class="portfolio-link" href="https://www.upwork.com/">
                                        <img class="img-fluid" src="img/upwork.png" alt="upwork_account">
                                    </a>
                                    <div class="portfolio-caption">
                                        <p class="text-muted">Visit upwork Profile</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="resume text-center mt-3 mb-2">
                        <a href="portfolio.html">Show More Work</a>
                    </div>
				</div>
		</section>

        <!-- How to Work Section -->

		<section id="how-work" class="mt-5">
			<div class="container">
				<div class="row mb-5">
					<div class="col-md-12 col-lg-12 col-sm-12 col-12 text-center">	
						<div class="how-i-work-title">
							<h1><span>How I</span><span> Work</span></h1>
						</div>
					</div>
				</div>
				
				<div class="step-line">
				<ul>
					<li>
						<img class="img-fluid mb-4" src="img/search.png" alt="search">
						<div class="step  mb-4">
							<img src="img/step-dott.png" alt="step-dott">
						</div>
						<h1>18</h1>
						<h6>Web Develop</h6>
					</li>
					<li>
						<img class="img-fluid mb-4" src="img/mind.png" alt="mind">
						<div class="step  mb-4">
							<img src="img/step-dott.png" alt="step-dott">
						</div>
						<h1>05</h1>
						<h6>Idea & Draft</h6>
					</li>
					<li>
						<img class="img-fluid mb-4" src="img/book.png" alt="book">
						<div class="step  mb-4">
							<img src="img/step-dott.png" alt="step-dott">
						</div>
						<h1>12</h1>
						<h6>Design</h6>
					</li>
					<li>
						<img class="img-fluid last-step-img" src="img/rocket.png" alt="rocket">
						<div class="step mb-4">
							<img src="img/step-dott.png" alt="step-dott">
						</div>
						<h1>08</h1>
						<h6>Launch</h6>
					</li>
				</ul>
			</div>
			</div>
		</section>
		
        <!-- Freelancer Section -->
		<section id="freelance">
			<div class="container">
				<div class="row">
					<div class="col-lg-7 col-md-7 col-sm-7">
						<div class="freelance-text mb-4">
							<h2>I’m Available for <!--  <span>Freelace</span>  --> Work</h2>
						</div>
                        <!--  button comment
						<div class="hire-me">
							<a href="#">HIRE ME NOW</a>
						</div>
                        -->
					</div>
					<div class="col-lg-5 col-md-5 col-sm-5">
						<img class="img-fluid freelancer-img" src="img/freelancer.png" alt="freelancer">
					</div>
				</div>
			</div>
		</section>
		
        <!-- Contact Me Section -->
		<section id="contact-me">
        	<div class="container-fluid mt-5 mb-5">
            	<div class="contact-heading">
                    <h1><span>Contact</span><span> Me</span></h1>	
                </div>
        	</div>
        	
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-6 mb-4">
						<h4><i class="fa fa-phone" aria-hidden="true"></i> +880 1781-043328</h4>
						<h5 class="mb-5"><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:anikse111@gmail.com"> anikse111@gmail.com</a></h5>
						<h6>Address</h6>
						<p>House-333/1, South Paikpara, Kollanpur, Mirpur-1, Dhaka-1216</p>
						<div class="contact-social">
							<a href="https://www.facebook.com/codeanik"><i class="fa fa-facebook" aria-hidden="true"></i></a>
							<a href="https://twitter.com/code_anik"><i class="fa fa-twitter" aria-hidden="true"></i></a>
							<a href="https://www.behance.net/codeanik"><i class="fa fa-behance" aria-hidden="true"></i></a>
							<a href="https://www.linkedin.com/in/codeanik"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
							<a href="https://github.com/CodeAnik"><i class="fa fa-github" aria-hidden="true"></i></a>
							<a href="https://www.instagram.com/codeanik"><i class="fa fa-instagram" aria-hidden="true"></i></a>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 mb-4 home-contact">
						<form role="form" id="contactForm" > 
							<div class="row">
								<div id="msgSubmit" class="messages d-none">
									<div class="alert alert-success alert-dismissable">
										<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>Contact form successfully submitted. Thank you, I will get back to you soon!
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6">
									<div class="form-group">
										<input type="text" class="form-control" id="name" placeholder="Name" required>
									</div>					
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6">
									<div class="form-group">
										<input type="email" class="form-control" id="email" placeholder="Email" required>
								  	</div>
								</div>
								<div class="col-lg-12 col-md-12 col-sm-12">
									<div class="form-group">
									  	<textarea class="form-control" rows="5" id="message" placeholder="Message"></textarea>
									</div>
								</div>
								<div class="col-lg-12 col-md-12 col-sm-12">
									<input type="submit" class="form-btn" Value="SEND">
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>
		
        <!-- Footer -->
		<footer>
			<div class="container">
				<hr>
				<p class="pt-2 pb-2">Copyrights © 2022 Anik-Khan</p>
                <a href="javascript:void(0)" id="return-to-top"><i class="fa fa-chevron-up" aria-hidden="true"></i></a>
			</div>
		</footer>

    	<!-- Bootstrap core JavaScript 
    	<script type="text/javascript" src="js/jquery.min.js"></script>
    	<script type="text/javascript" src="js/bootstrap.min.js"></script>
        -->

        <?php wp_footer(); ?>
        <script>
            (function ($) {
                $(document).ready(function () {
                    var skillsCount = 20; // Maximum number of skills

                    $('#add-new-skill').on('click', function () {
                        // Find the last added skill
                        var lastSkillIndex = $('.skill-title').last().data('index');

                        if (lastSkillIndex < skillsCount) {
                            var newSkillIndex = lastSkillIndex + 1;

                            // Clone the skill fields template
                            var skillFieldsTemplate = $('.skill-fields-template').clone();

                            // Update the index of the new skill fields
                            skillFieldsTemplate.find('.skill-title').attr('data-index', newSkillIndex);
                            skillFieldsTemplate.find('.skill-level').attr('data-index', newSkillIndex);

                            // Remove the hidden class and add the new skill fields to the DOM
                            skillFieldsTemplate.removeClass('skill-fields-template hidden').insertBefore('.skill-fields-template');

                            // Show the new skill fields
                            skillFieldsTemplate.show();
                        }
                    });
                });
            })(jQuery);
        </script>
  	</body>

</html>
