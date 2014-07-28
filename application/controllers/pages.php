<?php

class Pages extends CI_Controller
{

	public function view($page = 'home')
	{
		if ( ! file_exists('application/views/pages/'.$page.'.php') )
		{
			// Whoops, we don't have a page for that!
			show_404() ;
		}
		
		$this->load->helper('url') ;
		
		
		if( $page == 'home')
		{
			$data['title'] = "Breyer Studios | Responsive Web Design | Denver, CO" ; // Capitalize the first letter
			$data['extraCSS'] = '<link rel="stylesheet" type="text/css" href="assets/js/slick/slick.css"/> 
								<link rel="stylesheet" type="text/css" href="assets/js/slick/slick.css"/>
								<script src="assets/js/foundation.min.js"></script>
								' ; 
			$data['extraCSSBottom'] = '<script type="text/javascript" src="assets/js/foundation/foundation.equalizer.js"></script>' ; 
			$this->load->view('templates/header', $data) ;	
			$this->load->view('templates/navbar', $data) ;		
			$this->load->view('pages/home', $data) ;
			$this->load->view('templates/footer', $data) ;
		}
		else if( $page == 'services')
		{
			$data['title'] = "Our Services | Bryer Studios" ; // Capitalize the first letter
			$data['extraCSS'] =  '	<link rel="stylesheet" href="assets/css/animations.css">
									<script type="text/javascript" src="assets/js/parallax/jquery.parallax-1.1.3.js"></script>
    								<script type="text/javascript" src="assets/js/parallax/jquery.scrollTo-1.4.2-min.js"></script>
									<script type="text/javascript" src="assets/js/smoothScroll/smoothScroll.js"></script>
									<script type="text/javascript" src="assets/js/animation/animate.js"></script>
									<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>
									<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/plugins/ScrollToPlugin.min.js"></script>
    								<script type="text/javascript">
										$(document).ready(function(){
											
											
											//.parallax(xPosition, speedFactor, outerHeight) options:
											//xPosition - Horizontal position of the element
											//inertia - speed to move relative to vertical scroll. Example: 0.1 is one tenth the speed of scrolling, 2 is twice the speed of scrolling
											//outerHeight (true/false) - Whether or not jQuery should use its outerHeight option to determine when a section is in the viewport
											
											$("#intro").parallax("50%", 0.1);
											$("#second").parallax("50%", 0.1);
											$(".bg").parallax("50%", 0.6);
											$("#third").parallax("50%", 0.3);
											$("#fourth").parallax("50%", 0.4);
										})
										</script>
										<script type="text/javascript">
											$(function(){	
										
												var $window = $(window);
												var scrollTime = .3;
												var scrollDistance = 50;
										
												$window.on("mousewheel DOMMouseScroll", function(event){
											
													event.preventDefault();	
											
													var delta = event.originalEvent.wheelDelta/120 || -event.originalEvent.detail/3;
													var scrollTop = $window.scrollTop();
													var finalScroll = scrollTop - parseInt(delta*scrollDistance);
											
													TweenMax.to($window, scrollTime, {
														scrollTo : { y: finalScroll, autoKill:true },
															ease: Power1.easeOut,
															overwrite: 5							
													});
												});
											});
										</script>
										' ;  
			$data['extraCSSBottom'] = '' ;
			$this->load->view('templates/header', $data) ;	
			$this->load->view('templates/navbar', $data) ;		
			$this->load->view('pages/services', $data) ;
			$this->load->view('templates/footer', $data) ;
		}
		else if( $page == 'pricing')
		{
			$data['title'] = "Pricing | Bryer Studios" ; // Capitalize the first letter
			$data['extraCSS'] = '' ; 
			$data['extraCSSBottom'] =  ' ' ;
			$this->load->view('templates/header', $data) ;	
			$this->load->view('templates/navbar', $data) ;		
			$this->load->view('pages/pricing', $data) ;
			$this->load->view('templates/footer', $data) ;
		}
		else if( $page == 'about')
		{
			$data['title'] = "About Us | Bryer Studios" ; // Capitalize the first letter
			$data['extraCSS'] = '' ; 
			$data['extraCSSBottom'] =  ' ' ;
			$this->load->view('templates/header', $data) ;	
			$this->load->view('templates/navbar', $data) ;		
			$this->load->view('pages/about', $data) ;
			$this->load->view('templates/footer', $data) ;
		}
		else if( $page == 'contact')
		{
			$data['title'] = "Contact Us | Bryer Studios" ; // Capitalize the first letter
			$data['extraCSS'] = '' ; 
			$data['extraCSSBottom'] =  ' ' ;
			$this->load->view('templates/header', $data) ;	
			$this->load->view('templates/navbar', $data) ;		
			$this->load->view('pages/contact', $data) ;
			$this->load->view('templates/footer', $data) ;
		}
		else if( $page == 'mail')
		{
			$data['title'] = " " ; // Capitalize the first letter	
			$this->load->view('pages/mail', $data) ;
			
		}
		else if( $page == 'contact_success')
		{
			$data['title'] = "Contact Us | Bryer Studios" ; // Capitalize the first letter
			$data['extraCSS'] = '' ; 
			$data['extraCSSBottom'] =  ' ' ;
			$this->load->view('templates/header', $data) ;	
			$this->load->view('templates/navbar', $data) ;		
			$this->load->view('pages/contact_success', $data) ;
			$this->load->view('templates/footer', $data) ;
		}
		
		
	}

}