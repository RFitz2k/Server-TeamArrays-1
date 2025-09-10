<?php
// INSERT DATA HERE.
$members = [
	[
		"name"=> "AJ Schulte",
		"role"=> "Video Game Developer",
		"email"=> "ajschulte91@gmail.com",
		"phoneNumber"=> "(859) 609-5647",
		"linkedIn"=> "aj-schulte",
		"github"=> "AJ-Schulte",
		"website"=> "false",
		"summary"=> "Student currently attending Northern Kentucky University double majoring in Applied Software Engineering and Japanese, expected graduation - May 2028. Effective communicator, team player and able to lead when needed and follow when required.",
		"workExperience" => [
			[
				"positionName"=> "Client Support Specialist",
				"companyName"=> "EMP Hosting",
				"time"=> "2024 - Present",
				"role-description"=> "Currently work on fixing support tickets for clients. Handle organization of incoming payments. Manage applications that fail for customers",
				"techUsed"=> [
					""
				]
			],
			[
				"positionName"=> "Administrative Support",
				"companyName"=> "Choice Podiatry",
				"time"=> "2020 - 2022",
				"role-description"=> "Pulled, organized, and created new patient files. Disinfected patient rooms.",
				"techUsed"=> [
					""
				]
			]
		],
		"skillsTools" => [
			"Java",
			"C#",
			"Javascript",
			"Node.js",
			"HTML/CSS"
		],
		"others"=> [
			"Microsoft Office",
			"Code Review",
			"Git/Github",
			"Unit Testing",
			"Visual Studio",
			"Unity"
		],
		"education"=> [
			[
				"degree"=> "BS in Applied Software Engineering & Japanese",
				"college"=> "Northern Kentucky University",
				"time"=> "2024 - 2028"
			],
			[
				"degree"=> "BS in Computer Science/Game Development",
				"college"=> "Murray State University",
				"time"=> "2023 - 2024"
			]
		],
		"awards"=> "false",
		"languages"=> [
			[
				"language"=> "English",
				"proficiency"=> "Native"
			],
			[
				"language"=> "Japanese",
				"proficiency"=> "Professional"
			]
		],
		"interests"=> [
			"Gaming",
			"Anime",
			"Reading"
		],
		"projects"=> [
			[
				"projectName"=> "Dark Disciple (Game)",
				"projectDesc"=> "A game created in a group of 3 while at Murray State University.",
				"projectLink"=> "https://github.com/AJ-Schulte/DarkDisciple",
				"projectImage"=> "DarkDisciple_Title.png"
			],
			[
				"projectName"=> "Personal Decktracking Site",
				"projectDesc"=> "Website that was made for personal use to keep track of my decks for card games that I play.",
				"projectLink"=> "https://github.com/AJ-Schulte/FinalProjectIndividual",
				"projectImage"=> "mtgSymbol.png"
			],
			[
				"projectName"=> "DeckBuilding Site for Union Arena",
				"projectDesc"=> "Created during Full-Stack Application Development course. The site is a deck-builder for the card game Union Arena (includes database).",
				"projectLink"=> "https://github.com/AJ-Schulte/ASE220-FinalProject",
				"projectImage"=> "unionarenaicon.png"
			]
		]
	],
	[
		"name"=> "Joseph Gallucci",
		"role"=> "",
		"email"=> "",
		"phoneNumber"=> "",
		"linkedIn"=> "",
		"github"=> "",
		"website"=> "",
		"summary"=> "",
		"workExperience" => [
			[
				"positionName"=> "",
				"companyName"=> "",
				"time"=> "",
				"role-description"=> "",
				"techUsed"=> [
					"",
					"",
					""
				]
			],
			[
				"positionName"=> "",
				"companyName"=> "",
				"time"=> "",
				"role-description"=> "",
				"techUsed"=> [
					"",
					"",
					""
				]
			]
		],
		"skillsTools" => [
			"",
			"",
			""
		],
		"others"=> [
			"",
			"",
			""
		],
		"education"=> [
			[
				"degree"=> "",
				"college"=> "",
				"time"=> ""
			],
			[
				"degree"=> "",
				"college"=> "",
				"time"=> ""
			]
		],
		"awards"=> [
			[
				"awardName"=> "",
				"awardDesc"=> ""
			]
		],
		"languages"=> [
			"",
			""
		],
		"interests"=> [
			"",
			"",
			""
		],
		"projects"=> [
			[
				"projectName"=> "",
				"projectDesc"=> "",
				"projectLink"=> "",
				"projectImage"=> ""
			]
		]
	],
	[
		"name"=> "Riley Fitzgerald",
		"role"=> "",
		"email"=> "",
		"phoneNumber"=> "",
		"linkedIn"=> "",
		"github"=> "",
		"website"=> "",
		"summary"=> "",
		"workExperience" => [
			[
				"positionName"=> "",
				"companyName"=> "",
				"time"=> "",
				"role-description"=> "",
				"techUsed"=> [
					"",
					"",
					""
				]
			],
			[
				"positionName"=> "",
				"companyName"=> "",
				"time"=> "",
				"role-description"=> "",
				"techUsed"=> [
					"",
					"",
					""
				]
			]
		],
		"skillsTools" => [
			"",
			"",
			""
		],
		"others"=> [
			"",
			"",
			""
		],
		"education"=> [
			[
				"degree"=> "",
				"college"=> "",
				"time"=> ""
			],
			[
				"degree"=> "",
				"college"=> "",
				"time"=> ""
			]
		],
		"awards"=> [
			[
				"awardName"=> "",
				"awardDesc"=> ""
			]
		],
		"languages"=> [
			"",
			""
		],
		"interests"=> [
			"",
			"",
			""
		],
		"projects"=> [
			[
				"projectName"=> "",
				"projectDesc"=> "",
				"projectLink"=> "",
				"projectImage"=> ""
			]
		]
	]
]
?>
<!DOCTYPE html>
<html lang="en"> 
<head>
    <title><?= $members[$_GET['index']]['name'] ?>'s Resume</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Your name's resume">
    <meta name="author" content="Your name">    
    <link rel="shortcut icon" href="favicon.ico"> 
    
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    
    <!-- FontAwesome JS-->
	<script defer src="assets/fontawesome/js/all.min.js"></script>
       
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/pillar-1.css">


</head> 

<body>
    <article class="resume-wrapper text-center position-relative">
		<?php /* Only the following line changed from the file in the previous assignment */ ?>
		<div class="mb-4"><a href="index.php" class="btn btn-primary">Back to index</a></div>
	    <div class="resume-wrapper-inner mx-auto text-start bg-white shadow-lg">
		    <header class="resume-header pt-4 pt-md-0">
			    <div class="row">
				    <div class="col-block col-md-auto resume-picture-holder text-center text-md-start">
				        <img class="picture" src="assets/images/<?= $_GET['index'] ?>.jpg" alt="">
				    </div><!--//col-->
				    <div class="col">
					    <div class="row p-4 justify-content-center justify-content-md-between">
						    <div class="primary-info col-auto">
							    <h1 class="name mt-0 mb-1 text-white text-uppercase text-uppercase"><?= $members[$_GET['index']]['name'] ?></h1>
							    <div class="title mb-3"><?= $members[$_GET['index']]['role'] ?></div>
							    <ul class="list-unstyled">
								    <li class="mb-2"><a class="text-link" href="#"><i class="far fa-envelope fa-fw me-2" data-fa-transform="grow-3"></i><?= $members[$_GET['index']]['email'] ?></a></li>
								    <li><a class="text-link" href="#"><i class="fas fa-mobile-alt fa-fw me-2" data-fa-transform="grow-6"></i><?= $members[$_GET['index']]['phoneNumber'] ?></a></li>
							    </ul>
						    </div><!--//primary-info-->
						    <div class="secondary-info col-auto mt-2">
							    <ul class="resume-social list-unstyled">
					                <li class="mb-3"><a class="text-link" href="#"><span class="fa-container text-center me-2"><i class="fab fa-linkedin-in fa-fw"></i></span>linkedin.com/in/<?= $members[$_GET['index']]['linkedIn'] ?></a></li>
					                <li class="mb-3"><a class="text-link" href="#"><span class="fa-container text-center me-2"><i class="fab fa-github-alt fa-fw"></i></span>github.com/<?= $members[$_GET['index']]['github'] ?></a></li>
									<?php if($members[$_GET['index']]['website'] != 'false') : ?>
									<li><a class="text-link" href="#"><span class="fa-container text-center me-2"><i class="fas fa-globe"></i></span><?= $members[$_GET['index']]['website'] ?></a></li>
									<?php endif ?>
							    </ul>
						    </div><!--//secondary-info-->
					    </div><!--//row-->
					    
				    </div><!--//col-->
			    </div><!--//row-->
		    </header>
		    <div class="resume-body p-5">
			    <section class="resume-section summary-section mb-5">
				    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Summary</h2>
				    <div class="resume-section-content">
					    <p class="mb-0"><?= $members[$_GET['index']]['summary'] ?></p>
				    </div>
			    </section><!--//summary-section-->
			    <div class="row">
				    <div class="col-lg-9">
					    <section class="resume-section experience-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Work Experience</h2>
						    <div class="resume-section-content">
							    <div class="resume-timeline position-relative">
								    <article class="resume-timeline-item position-relative pb-5">
									    
									    <div class="resume-timeline-item-header mb-2">
										    <div class="d-flex flex-column flex-md-row">
										        <h3 class="resume-position-title font-weight-bold mb-1">Lead Developer</h3>
										        <div class="resume-company-name ms-auto">Startup Hub</div>
										    </div><!--//row-->
										    <div class="resume-position-time">2023 - Present</div>
									    </div><!--//resume-timeline-item-header-->
									    <div class="resume-timeline-item-desc">
										    <p>Role description goes here ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Donec pede justo, fringilla vel.</p>
										    <h4 class="resume-timeline-item-desc-heading font-weight-bold">Technologies used:</h4>
										    <ul class="list-inline">
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill">Angular</span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill">Python</span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill">jQuery</span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill">Webpack</span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill">HTML/SASS</span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill">PostgresSQL</span></li>
										    </ul>
									    </div><!--//resume-timeline-item-desc-->

								    </article><!--//resume-timeline-item-->
							    </div><!--//resume-timeline-->
						    </div>
					    </section><!--//projects-section-->
				    </div>
				    <div class="col-lg-3">
					    <section class="resume-section skills-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Skills &amp; Tools</h2>
						    <div class="resume-section-content">
						        <div class="resume-skill-item">
							        <ul class="list-unstyled mb-4">
								        <li class="mb-2">
								            <div class="resume-skill-name">Angular</div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 98%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
							        </ul>
						        </div><!--//resume-skill-item-->
						        <div class="resume-skill-item">
						            <h4 class="resume-skills-cat font-weight-bold">Others</h4>
						            <ul class="list-inline">
							            <li class="list-inline-item"><span class="badge badge-light">DevOps</span></li>
						            </ul>
						        </div><!--//resume-skill-item-->
						    </div><!--resume-section-content-->
					    </section><!--//skills-section-->
					    <section class="resume-section education-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Education</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled">
								    <li class="mb-2">
								        <div class="resume-degree font-weight-bold">MSc in Computer Science</div>
								        <div class="resume-degree-org">University College London</div>
								        <div class="resume-degree-time">2013 - 2014</div>
								    </li>
							    </ul>
						    </div>
					    </section><!--//education-section-->
					    <section class="resume-section reference-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Awards</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled resume-awards-list">
								    <li class="mb-2 ps-4 position-relative">
								        <i class="resume-award-icon fas fa-trophy position-absolute" data-fa-transform="shrink-2"></i>
								        <div class="resume-award-name">Award Name Lorem</div>
								        <div class="resume-award-desc">Award desc goes here, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo.</div>
								    </li>
							    </ul>
						    </div>
					    </section><!--//interests-section-->
					    <section class="resume-section language-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Languages</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled resume-lang-list">
								    <li class="mb-2"><span class="resume-lang-name font-weight-bold">English</span> <small class="text-muted font-weight-normal">(Native)</small></li>
								    <li class="mb-2 align-middle"><span class="resume-lang-name font-weight-bold">French</span> <small class="text-muted font-weight-normal">(Professional)</small></li>
								    <li><span class="resume-lang-name font-weight-bold">Spanish</span> <small class="text-muted font-weight-normal">(Professional)</small></li>
							    </ul>
						    </div>
					    </section><!--//language-section-->
					    <section class="resume-section interests-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Interests</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled">
								    <li class="mb-1">Climbing</li>
								    <li class="mb-1">Snowboarding</li>
								    <li class="mb-1">Cooking</li>
							    </ul>
						    </div>
					    </section><!--//interests-section-->
					    
				    </div>
			    </div><!--//row-->
				<section class="resume-section experience-section mb-5">
					<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Projects</h2>
					<div class="row mt-4">
					<!-- PUT LOOP HERE  -->
						<div class="col-md-4">
							<div class="card">
								<img src="path-to-project-image1.jpg" alt="Project 1" class="card-img-top">
								<div class="card-body">
									<h5 class="card-title">Project 1</h5>
									<p class="card-text">Brief description of Project 1.</p>
									<a href="btn btn-outline-primary" href="#">Go to link</a>
								</div>
							</div>
						</div>
					</div>
				</section><!--//projects-section-->
		    </div><!--//resume-body-->
		    
		    
	    </div>
    </article> 

    
    <footer class="footer text-center pt-2 pb-5">
	    <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
        <small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart"></i> by Your names</small>
    </footer>

    

</body>
</html> 

