<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Aria is a business focused HTML landing page template built with Bootstrap to help you create lead generation websites for companies and their services.">
    <meta name="author" content="Inovatik">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta property="og:type" content="article" />

    <!-- Website Title -->
    <title>Trekking site</title>
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
	<link href="css/magnific-popup.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	
	<!-- Favicon  -->
    <link rel="icon" href="images/favicon.png">

     <!--Font awesome-->
     <script src="https://kit.fontawesome.com/a9ee362ccc.js" crossorigin="anonymous"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
    function displayTours(tours) {
        const toursContainer = document.getElementById("card-container");

        for (const tour of tours) {
            const tourCard = document.createElement("div");
            tourCard.classList.add("card", "card-image");

            // Create the card content
            tourCard.innerHTML = `
                <div class="card">
                    <div class="card-image">
                        <img class="img-fluid" src="${tour.image1}" alt="alternative">
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">${tour.destination}</h3>
                        
                        <p class="price"> <span>${tour.price}</span> per Person</p>
                        <p class="price"> <span class="total-entries">0/${tour.people_allowed}</span> Registered</p>
                        <p class="price"> <span>${tour.start_date}</span></p>
                        <a class="button-38" role="button" href="enquire.php">Send Enquiry</a>
                        <a class="button-38" role="button" href="form_page.php?title=${encodeURIComponent(tour.destination)}&price=${encodeURIComponent(tour.price)}">Book Now</a>
                    </div>
                    <div class="button-container">
                        <a class="btn-solid-reg page-scroll" href="display_trek.php?title=${encodeURIComponent(tour.destination)}">DETAILS</a>
                    </div> 
                </div>
            `;
            toursContainer.appendChild(tourCard);

            // Fetch total entries for the specific tour
            fetch(`get_total_entries.php?title=${encodeURIComponent(tour.destination)}`)
                .then(response => response.json())
                .then(totalEntries => {
                    // Update the total entries information on the card
                    const totalEntriesSpan = tourCard.querySelector(".total-entries");
                    totalEntriesSpan.textContent = `${totalEntries}/${tour.people_allowed}`;
                })
                .catch(error => console.error("Error:", error));
        }
    }

    // Fetch tours using AJAX and call the displayTours function
    fetch("display_details.php")
        .then(response => response.json())
        .then(tours => {
            displayTours(tours);
        })
        .catch(error => console.error("Error:", error));
});

    </script>
</head>
<body data-spy="scroll" data-target=".fixed-top">
    
    <!-- Preloader -->
	<div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->
    

    <!-- Navbar -->
    <nav class="navbar navbar-expand-md navbar-dark navbar-custom fixed-top">
        <!-- Text Logo - Use this if you don't have a graphic logo -->
        <a class="navbar-brand logo-text page-scroll" href="index.html">Trekk</a>

        <!-- Image Logo -->
        <!--<a class="navbar-brand logo-image" href="index.html"><img src="images/logo.svg" alt="alternative"></a>-->
        
        <!-- Mobile Menu Toggle Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>
        <!-- end of mobile menu toggle button -->

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#header">HOME <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#intro">ABOUT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#services">UPCOMING TREKKS AND EVENTS</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#projects">GALLERY AND REVIEWS</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#projects">APPROVALS</a>
                </li>

                

                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#contact">CONTACT</a>
                </li>
            </ul>
          
        </div>
    </nav> <!-- end of navbar -->
    <!-- end of navbar -->


    <!-- Header -->
    <header id="header" class="header">
        <div class="header-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-container">
                            <h1><span id="js-rotating">ADVENTURES, TREKKING, EXPLORATION</span></h1>
                            <p class="p-heading p-large">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Obcaecati magnam quae atque adipisci? Accusamus placeat rerum libero magnam nesciunt, nostrum ipsum, earum facere at corporis minus animi, blanditiis laudantium? Consectetur.</p>
                            <a class="btn-solid-lg page-scroll" href="#intro">LEARN MORE</a>
                        </div>
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of header-content -->
    </header> <!-- end of header -->
    <!-- end of header -->


    <!-- Intro -->
    <div id="intro" class="basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="text-container">
                        <div class="section-title">ABOUT</div>
                        <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h2>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ea quo modi reiciendis debitis quae nostrum praesentium! In aperiam vel nemo. Minus reprehenderit excepturi tenetur illo laborum dicta est mollitia quod.</p>
                        <p class="testimonial-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta commodi placeat  Praesentium, officiis!</p>
                        
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-7">
                    <div class="image-container">
                        <img class="img-fluid" src="images/intro-office.jpg" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    <!-- end of intro -->


    <!-- Description -->
    <div class="cards-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    
                    <!-- Card -->
                    <div class="card">
                        <span class="fa-stack">
                            <span class="hexagon"></span>
                            <i class="fas fa-binoculars fa-stack-1x"></i>
                        </span>
                        <div class="card-body">
                            <h4 class="card-title">Adventures</h4>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto magnam perspiciatis pariatur ex sequi commodi in. Ipsa minima autem et ab numquam quas quam suscipit, atque iure sint deleniti quibusdam.</p>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <span class="fa-stack">
                            <span class="hexagon"></span>
                            <i class="fas fa-list-alt fa-stack-1x"></i>
                        </span>
                        <div class="card-body">
                            <h4 class="card-title">Trekking</h4>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sed, odit voluptatum maxime animi aliquam adipisci ab nulla, numquam praesentium tenetur nihil ipsam? Voluptatibus fugiat minus quidem non velit accusantium inventore!</p>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <span class="fa-stack">
                            <span class="hexagon"></span>
                            <i class="fas fa-chart-pie fa-stack-1x"></i>
                        </span>
                        <div class="card-body">
                            <h4 class="card-title">Exploration</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus vitae id provident placeat enim? Ad nesciunt quidem corrupti, unde quos cumque, eius asperiores minus dolorum laboriosam dolor ut tempora dicta?</p>
                        </div>
                    </div>
                    <!-- end of card -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-1 -->
    <!-- end of description -->

     <!-- About -->
     <div id="about" class="counter">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-xl-6">
                    <div class="image-container">
                        <img class="img-fluid" src="images/about.jpg" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-7 col-xl-6">
                    <div class="text-container">
                        <div class="section-title">ABOUT</div>
                        <h2>We're Passionate About Delivering best experiences</h2>
                        <p>Our goal is to provide trekking and adventure trips at the appropriate time so you experience places and moments like never before</p>
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Everything we recommend is foolproof and legitimate</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">You will have an experienceof lifetime by choosing our services</div>
                            </li>
                        </ul>

                        <!-- Counter -->
                        <div id="counter">
                            <div class="cell">
                                <div class="counter-value number-count" data-count="231">1</div>
                                <div class="counter-info">No of<br>Trekks</div>
                            </div>
                            <div class="cell">
                                <div class="counter-value number-count" data-count="121">1</div>
                                <div class="counter-info">Happy<br>Customers</div>
                            </div>
                            <div class="cell">
                                <div class="counter-value number-count" data-count="159">1</div>
                                <div class="counter-info">Good<br>Reviews</div>
                            </div>
                        </div>
                        <!-- end of counter -->

                    </div> <!-- end of text-container -->      
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of counter -->
    <!-- end of about -->


    <!-- Services -->
    <div id="services" class="cards-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">Treks</div>
                    <h2>Choose The Treks<br> According To Your Needs</h2>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">
                    
                    
                    <div id="card-container" class="card-container"></div>

                    <!-- end of card -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-2 -->
    <!-- end of services -->
    


    

    <!-- Projects -->
	<div id="projects" class="filter">
		<div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">Gallery</div>
                    <h2>Here are some pictures of previous trekks</h2>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">
                    <!-- Filter -->
                   
                    <div class="grid">
                        <div class="element-item development">
                            <a class="popup-with-move-anim" href="#project-1"><div class="element-item-overlay"><span>ladakh</span></div><img src="images/project-1.jpg" alt="alternative"></a>
                        </div>
                        <div class="element-item development">
                            <a class="popup-with-move-anim" href="#project-2"><div class="element-item-overlay"><span>Uttarakhand</span></div><img src="images/project-2.jpg" alt="alternative"></a>
                        </div>
                        <div class="element-item design development marketing">
                            <a class="popup-with-move-anim" href="#project-3"><div class="element-item-overlay"><span>Sikkim</span></div><img src="images/project-3.jpg" alt="alternative"></a>
                        </div>
                        <div class="element-item design development marketing">
                            <a class="popup-with-move-anim" href="#project-4"><div class="element-item-overlay"><span>Himalayas</span></div><img src="images/project-4.jpg" alt="alternative"></a>
                        </div>
                        <div class="element-item design development marketing seo">
                            <a class="popup-with-move-anim" href="#project-5"><div class="element-item-overlay"><span>Kerala</span></div><img src="images/project-5.jpg" alt="alternative"></a>
                        </div>
                        <div class="element-item design marketing seo">
                            <a class="popup-with-move-anim" href="#project-6"><div class="element-item-overlay"><span>Coorg</span></div><img src="images/project-6.jpg" alt="alternative"></a>
                        </div>
                        <div class="element-item design marketing">
                            <a class="popup-with-move-anim" href="#project-7"><div class="element-item-overlay"><span>Mussorie</span></div><img src="images/project-7.jpg" alt="alternative"></a>
                        </div>
                        <div class="element-item design marketing">
                            <a class="popup-with-move-anim" href="#project-8"><div class="element-item-overlay"><span>Dehradun</span></div><img src="images/project-8.jpg" alt="alternative"></a>
                        </div>
                    </div> <!-- end of grid -->
                    <!-- end of filter -->
                    
                </div> <!-- end of col -->
            </div> <!-- end of row -->
		</div> <!-- end of container -->
    </div> <!-- end of filter -->
    <!-- end of projects -->


    <!-- Project Lightboxes -->
    <!-- Lightbox -->
    <div id="project-1" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-8">
                <img class="img-fluid" src="images/project-1.jpg" alt="alternative">
            </div> <!-- end of col -->
            <div class="col-lg-4">
                <h3>ladakh</h3>
                <hr class="line-heading">
               
                <p>Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current needs</p>
                <p>By offering the best professional services and quality products in the market. Don't hesitate and get in touch with us.</p>
                
                <a class="btn-outline-reg mfp-close as-button" href="#projects">BACK</a> 
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->

    <!-- Lightbox -->
    <div id="project-2" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-8">
                <img class="img-fluid" src="images/project-2.jpg" alt="alternative">
            </div> <!-- end of col -->
            <div class="col-lg-4">
                <h3>Uttarakhand</h3>
                <hr class="line-heading">
                
                <p>Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current needs</p>
                <p>By offering the best professional services and quality products in the market. Don't hesitate and get in touch with us.</p>
                <div class="testimonial-container">
                    
                </div>
                <a class="btn-outline-reg mfp-close as-button" href="#projects">BACK</a> 
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->

    <!-- Lightbox -->
    <div id="project-3" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-8">
                <img class="img-fluid" src="images/project-3.jpg" alt="alternative">
            </div> <!-- end of col -->
            <div class="col-lg-4">
                <h3>Sikkim</h3>
                <hr class="line-heading">
                
                <p>Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current needs</p>
                <p>By offering the best professional services and quality products in the market. Don't hesitate and get in touch with us.</p>
                <div class="testimonial-container">
                    
                </div>
                <a class="btn-outline-reg mfp-close as-button" href="#projects">BACK</a> 
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->

    <!-- Lightbox -->
    <div id="project-4" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-8">
                <img class="img-fluid" src="images/project-4.jpg" alt="alternative">
            </div> <!-- end of col -->
            <div class="col-lg-4">
                <h3>Himalayas</h3>
                <hr class="line-heading">
                
                <p>Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current needs</p>
                <p>By offering the best professional services and quality products in the market. Don't hesitate and get in touch with us.</p>
                <div class="testimonial-container">
                    
                </div>
                <a class="btn-outline-reg mfp-close as-button" href="#projects">BACK</a> 
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->

    <!-- Lightbox -->
    <div id="project-5" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-8">
                <img class="img-fluid" src="images/project-5.jpg" alt="alternative">
            </div> <!-- end of col -->
            <div class="col-lg-4">
                <h3>Kerala</h3>
                <hr class="line-heading">
                
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error iure sunt tempora. Consectetur unde quos magni, nesciunt, doloribus reprehenderit perspiciatis libero dicta possimus, delectus dolore odio laudantium culpa ipsam iure.</p>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatum laboriosam sed architecto mollitia! Quos a vel excepturi, quia adipisci fuga, consequatur sequi nostrum vero porro doloremque reiciendis voluptatum sint pariatur?</p>
                <div class="testimonial-container">
                    
                </div>
                <a class="btn-outline-reg mfp-close as-button" href="#projects">BACK</a> 
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->

    <!-- Lightbox -->
    <div id="project-6" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-8">
                <img class="img-fluid" src="images/project-6.jpg" alt="alternative">
            </div> <!-- end of col -->
            <div class="col-lg-4">
                <h3>Coorg</h3>
                <hr class="line-heading">
                
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum harum dolores quisquam alias, libero provident unde qui optio? A omnis culpa, nihil maiores cumque ipsa officiis? Deserunt id placeat delectus?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, neque ut. Sequi qui aliquam eaque labore minus quasi doloremque repudiandae suscipit a, totam quisquam quaerat officiis omnis temporibus. Deleniti, ipsa.</p>
                <div class="testimonial-container">
                    
                </div>
                <a class="btn-outline-reg mfp-close as-button" href="#projects">BACK</a> 
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->

    <!-- Lightbox -->
    <div id="project-7" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-8">
                <img class="img-fluid" src="images/project-7.jpg" alt="alternative">
            </div> <!-- end of col -->
            <div class="col-lg-4">
                <h3>Mussorie</h3>
                <hr class="line-heading">
                
                <p>Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current needs</p>
                <p>By offering the best professional services and quality products in the market. Don't hesitate and get in touch with us.</p>
                <div class="testimonial-container">
                    
                </div>
                 <a class="btn-outline-reg mfp-close as-button" href="#projects">BACK</a> 
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->

    <!-- Lightbox -->
    <div id="project-8" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-8">
                <img class="img-fluid" src="images/project-8.jpg" alt="alternative">
            </div> <!-- end of col -->
            <div class="col-lg-4">
                <h3>Dehradun</h3>
                <hr class="line-heading">
                
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corporis iure incidunt harum doloribus nemo ab obcaecati praesentium pariatur asperiores non numquam, quae quia sit eos ipsa minima optio accusantium consectetur.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas laborum accusamus exercitationem facere voluptatum possimus ducimus aut aspernatur. Vitae eveniet labore consectetur est voluptatum porro dignissimos saepe ducimus molestiae eligendi?</p>
                <div class="testimonial-container">
                    
                </div>
                <a class="btn-outline-reg mfp-close as-button" href="#projects">BACK</a> 
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->
    <!-- end of project lightboxes -->


    

   

    <!-- Testimonials -->
    <div class="slider">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Here are some some customer reviews</h2>
                    <p class="p-heading">Our previous clients have had womderful experiences and they've made sure they made it clear to all of y'all</p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">
                <div class="video-placeholder">
                        <!-- Add your YouTube video embed code here -->
                        <iframe width="100%" height="315" src="https://www.youtube.com/watch?v=hld4uaO1MDE" frameborder="0" allowfullscreen></iframe>
                    </div>

                    <!-- Card Slider -->
                    <div class="slider-container">
                        <div class="swiper-container card-slider">
                            <div class="swiper-wrapper">
                                
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="images/testimonial-1.jpg" alt="alternative">
                                        <div class="card-body">
                                            <div class="testimonial-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium necessitatibus fuga velit quae sit earum hic doloremque, harum assumenda, dolor, illo quia aperiam quis voluptate fugit soluta suscipit provident ut?</div>
                                            <div class="testimonial-author">Jude Thorn</div>
                                        </div>
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
        
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="images/testimonial-2.jpg" alt="alternative">
                                        <div class="card-body">
                                            <div class="testimonial-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, veniam maiores corporis iure repudiandae deserunt, ad quo velit, voluptas quaerat unde obcaecati voluptatem. Perferendis, dolor consectetur illo dolorem harum esse?</div>
                                            <div class="testimonial-author">Marsha Singer</div>
                                        </div>
                                    </div>        
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
        
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="images/testimonial-3.jpg" alt="alternative">
                                        <div class="card-body">
                                            <div class="testimonial-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Incidunt atque suscipit, vel, similique soluta ipsum iure illo ad maxime laboriosam beatae obcaecati vero blanditiis explicabo, corrupti molestias eligendi asperiores voluptates.</div>
                                            <div class="testimonial-author">Roy Smith</div>
                                        </div>
                                    </div>        
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
        
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="images/testimonial-4.jpg" alt="alternative">
                                        <div class="card-body">
                                            <div class="testimonial-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum inventore optio ducimus similique nemo veritatis dolore iste ipsum veniam voluptas, pariatur saepe quas tempore aspernatur consequuntur quidem, eos dolorem beatae!</div>
                                            <div class="testimonial-author">Ronald Spice</div>
                                        </div>
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
        
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="images/testimonial-5.jpg" alt="alternative">
                                        <div class="card-body">
                                            <div class="testimonial-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vitae debitis nemo ipsam temporibus officia, hic quaerat molestiae cum itaque quam quidem, sed nulla. Ad voluptas doloribus tempore porro, alias quo?</div>
                                            <div class="testimonial-author">Lindsay Rune</div>
                                        </div>
                                    </div>        
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
        
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="images/testimonial-6.jpg" alt="alternative">
                                        <div class="card-body">
                                            <div class="testimonial-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quos incidunt deserunt nisi fuga quae impedit nemo magnam consequuntur placeat. Placeat quo nihil cum unde excepturi architecto magnam nemo! Dolorum, ea.</div>
                                            <div class="testimonial-author">Ann Black</div>
                                        </div>
                                    </div>        
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
                            
                            </div> <!-- end of swiper-wrapper -->
        
                            <!-- Add Arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <!-- end of add arrows -->
        
                        </div> <!-- end of swiper-container -->
                    </div> <!-- end of slider-container -->
                    <!-- end of card slider -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of slider -->
    <!-- end of testimonials -->

   

    <!-- Contact -->
    <div id="contact" class="form-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <div class="section-title">CONTACT</div>
                        <h2>Get In Touch Using The Form</h2>
                        <p>You can stop by our office for a cup of coffee and just use the contact form below for any questions and inquiries</p>
                        <ul class="list-unstyled li-space-lg">
                            <li class="address"><i class="fas fa-map-marker-alt"></i>#123 , ABC Street , Bengaluru , India</li>
                            <li><i class="fas fa-phone"></i><a href="tel:003024630820">+91 98420 22126</a></li>
                            <li><i class="fas fa-phone"></i><a href="tel:003024630820">+91 72022 41128</a></li>
                            <li><i class="fas fa-envelope"></i><a href="mailto:example@gmail.com">example@gmail.com</a></li>
                        </ul>
                        
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    
                    <!-- Contact Form -->
                    <form id="contactForm" data-toggle="validator" data-focus="false">
                        <div class="form-group">
                            <input type="text" class="form-control-input" id="cname" name="name" required>
                            <label class="label-control" for="cname">Name</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control-input" id="cemail" name="email" required>
                            <label class="label-control" for="cemail">Email</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        
                        <div class="form-group">
                            <textarea class="form-control-textarea" id="cmessage" name="message" required></textarea>
                            <label class="label-control" for="cmessage">Your message</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        
                        <div class="form-group">
                            <button type="submit" class="form-control-submit-button">SUBMIT MESSAGE</button>
                        </div>
                        <div class="form-message">
                            <div id="cmsgSubmit" class="h3 text-center hidden"></div>
                        </div>
                    </form>
                    <!-- end of contact form -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of form-2 -->
    <!-- end of contact -->


    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="text-container about">
                        <h4>Few Words About trek</h4>
                        <p class="white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum commodi dolorum aliquam porro enim vero dolores facere, quisquam accusantium voluptatum nulla omnis quis quae assumenda, corporis tempora, fugiat recusandae accusamus.</p>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-md-6">
                    <div class="text-container">
                        <h4>Visit us on our social media</h4>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <span class="hexagon"></span>
                                <i class="fab fa-facebook-f fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <span class="hexagon"></span>
                                <i class="fab fa-twitter fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <span class="hexagon"></span>
                                <i class="fab fa-pinterest fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <span class="hexagon"></span>
                                <i class="fab fa-instagram fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <span class="hexagon"></span>
                                <i class="fab fa-linkedin-in fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <span class="hexagon"></span>
                                <i class="fab fa-behance fa-stack-1x"></i>
                            </a>
                        </span>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div>
        </div> <!-- end of container -->
    </div> <!-- end of footer -->  
    <!-- end of footer -->
    
    	
    <!-- Scripts -->
    <script src="js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="js/morphext.min.js"></script> <!-- Morphtext rotating text in the header -->
    <script src="js/isotope.pkgd.min.js"></script> <!-- Isotope for filter -->
    <script src="js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="js/scripts.js"></script> <!-- Custom scripts -->

    <script>
    document.addEventListener("DOMContentLoaded", function () {
        const contactForm = document.getElementById("contactForm");
        const msgSubmit = document.getElementById("cmsgSubmit");

        contactForm.addEventListener("submit", function (event) {
            event.preventDefault();

            const formData = new FormData(contactForm);

            fetch("save_contact.php", {
                method: "POST",
                body: formData,
            })
            .then(response => response.text())
            .then(responseText => {
                msgSubmit.textContent = responseText;
                msgSubmit.classList.remove("hidden");
                alert("Thanks for contacting us!!")
                contactForm.reset(); // Clear form fields
            })
            .catch(error => {
                console.error("Error:", error);
                msgSubmit.textContent = "An error occurred while submitting the message.";
                msgSubmit.classList.remove("hidden");
            });
        });
    });
</script>
</body>
</html>