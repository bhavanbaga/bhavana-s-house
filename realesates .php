	<!DOCTYPE html>
	<html>
	<head>
		<title>realesate</title>
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style type="text/css">*{
  margin: 0px;
  padding: 0px;
  box-sizing: border-box;
}
.logo img{
  max-width: 120px;
  padding: 5px;
  display:block; 
  margin: 2px;
}
header{
  display:flex;
  align-items: center;
  padding:0px;
  background-color:black; 

}
 h1{
   color: #008080;
  text-align:center;
  display:flex; 

}

nav ul {
  list-style: none;
  display:inline-flex;
}

nav li {
  margin-left: 25px;
}

nav a {
  text-decoration: none;
  color:white;
  font-weight:normal;
  font-size: 18px;
  padding: 25px;
}
/*sing*/
.signup-btn,
.signin-btn {
  padding: 8px 16px;
  background-color: #4CAF50;
  color: white;
  text-decoration: none;
  border-radius: 5px;
}

.signup-btn:hover,
.signin-btn:hover {
  background-color: #3e8e41;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  z-index: 1;
}

.dropdown:hover .dropdown-content {
  display: block;
}
/*slide*/
    .slideshow-container {
  position: relative;
  width: 100%;
  height: 500px;
}

.slide {
  display: none;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}

.slide img {
  width: 100%;
  height: 100%;
  object-fit: 100% 100% ;
}

.slide-caption {
  position: absolute;
  bottom: 0;
  left: 0;
  padding: 50px;
  color: #fff;
}

.slide-caption h2 {
  margin: 0;
  font-size: 36px;
}

.slide-caption p {
  margin: 10px 0 0;
  font-size: 50px;
}
/*about us*/
      
     .about-us {
  text-align: center;
  font-size:20px;
}

.block-container {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
}

.block1 {
  width: 400px;
  height: 300px;
  background-color: #f2f2f2;
  margin: 28px;
  border-radius: 65%;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

.block2 {
  width: 500px;
  height: 250px;
  background-color: #d9d9d9;
  margin: 28px;
  border-radius:50px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

.block3 {
  width: 500px;
  height: 250px;
  background-color: #c6e2ff;
  margin: 25px;
  border-radius: 20px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}
/*learn more*/
    
    .about-us a{
      text-decoration: none;
      display: inline-block;
      color:black;
      font-size:40px;
      border:2px solid black;
      padding: 10px 50px;
      border-radius: 50px;
      margin-top:20px; 
    }
  
/*listing property*/
      .im{
          background-color:#FFE4E1;

           }   
     .Listing-properties {
  text-align:center;
  font-size:25px;
         }
    .property-listing {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}

.property-card {
  background-color: #f2f2f2;
  margin: 10px;
  width: 300px;
  border-radius: 15px;
  overflow: hidden;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
}

.property-image {
  height: 200px;
  overflow: hidden;
}

.property-image img {
  max-width: 100%;
  max-height: 100%;
  object-fit: cover;
}

.property-details {
  padding: 20px;
  text-align: center;
}

.property-details h2 {
  margin-top: 0;
}

.property-details p {
  margin-bottom: 5px;
}
/*see more*/
    .see{
      text-align: center;
    }
    .see a{
      text-decoration: none;
      display: inline-block;
      color:black;
      font-size:30px;
      border:2px solid black;
      padding: 10px 50px;
      border-radius: 50px;
      margin-top:20px; 

}


/*how to work*/
  .im2{
    background-color:#EEE8AA  ; 
 
  }
  .sangee {
    text-align: center;
  }
.container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      align-items: center;
      margin: 20px auto;
      max-width: 800px;
    }
    .item {
      flex-basis: 45%;
      margin: 10px;
      padding: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.2);
      text-align: center;
    }
    .item img {
      max-width: 100%;
      height: auto;
    }
    .item h3 {
      margin-top: 10px;
      font-size: 1.2em;
    }
    .item p {
      margin-top: 5px;
      font-size: 0.9em;
    }
  /*service*/
   .siri h2{
    text-align: center;

   }
    .image-block {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}

.image-container {
  position: relative;
  width: 30%;
  margin-bottom: 20px;
  cursor: pointer;
}

.image {
  width: 100%;
  height: auto;
}

.overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  opacity: 0;
  transition: .5s ease;
  background-color: rgba(0, 0, 0, 0.5);
}

.image-container:hover .overlay {
  opacity: 1;
}

.text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
  width: 100%;
}

@media screen and (max-width: 768px) {
  .image-container {
    width: 45%;
  }
}
    /*rent/sell*/
    /*blogs*/
    .blogs{
      text-align: center;
    }
     .blog-posts {
    
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  margin-top: 50px;
}

.blog-post {
  width: 350px;
  margin: 20px;
  background-color: #fff;
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  overflow: hidden;
}

.blog-post img {
  width: 100%;
  height: auto;
  object-fit: cover;
}

.blog-post-content {
  padding: 20px;
}

.blog-post-content h2 {
  font-size: 24px;
  margin-bottom: 10px;
}

.blog-post-content p {
  font-size: 18px;
  line-height: 1.5;
  margin-bottom: 20px;
}

.blog-post-date {
  font-size: 14px;
  color: #999;
  margin-bottom: 10px;
}

.blog-post-date span {
  font-weight: bold;
}

.read-more {
  display: inline-block;
  padding: 10px 20px;
  background-color: #0066cc;
  color: #fff;
  text-decoration: none;
  border-radius: 5px;
  transition: background-color 0.2s ease-in-out;
}

.read-more:hover {
  background-color: #0052a3;
}
/*last page*/
.footer4{
      background-color: #24262b;
      padding: 70px 0;
    }
    .footer-col{
      width: 25%;
      padding: 0 50px;
    }
    .footer-col h2{
      font-size:18px;
      color:#ffffff;
      text-transform: capitalize;
      margin-bottom:35px;
      font-weight: 500;
      position: relative;
    }
     .footer-col h2::before{
      content:'';
      position: absolute;
      left: 0;
      bottom:-10px;
      background-color: #e91e63;
      height: 2px;
      box-sizing: border-box;
      width: 50px;
     }

.container4{
      max-width: 1170px;
      margin:auto;
    }
    .row{
      display: flex;
      flex-wrap: wrap;
    }
    ul{
       list-style: none;
    }
    .footer-col ul li:not(:last-child){
      margin-bottom:10px;
    }
    .footer-col ul li a{
      font-size:16px;
      text-transform: capitalize;
      color:#ffffff;
      text-decoration: none;
      font-weight: 300;
      color:#bbbbbb;
      display: block;
      transition: all 0.3s ease;
    }
    .footer-col h3 {
      font-size:16px;
      text-transform: capitalize;
      color:#ffffff;
      text-decoration: none;
      font-weight: 300;
      color:#bbbbbb;
      display: block;
      transition: all 0.3s ease;

    }
    .footer-col a{
      font-size:16px;
      color:#ffffff;
      text-decoration: none;
      font-weight: 300;
      color:#bbbbbb;
      transition: all 0.3s ease;

  
    }
    .footer-col ul li a:hover{
      color:#ffffff;
      padding-left:8px; 
    }
    .footer-col a:hover{
      color:#ffffff;
      padding-left:8px; 
    }
    .footer-col h3:hover{
      color:#ffffff;
      padding-left:8px; 
    }
    .footer-col .Social-links a{
      display:inline-block;
      height:40px;
      width:40px;
      background-color: rgba(255,255,255,0.2);
      margin-right: 0 10px 10px 0;
      text-align: center;
      line-height: 40px;
      border-radius: 50%;
      color:#ffffff;
      transition: all 0.5s ease;
    }
    .footer-col .Social-links a:hover{
      color:#24262b;
      background-color: #ffffff;
    }
/*service*/
  #services {
  padding: 50px 0;
  background-color: #f2f2f2;
}

#services h2 {
  margin: 0;
  text-align: center;
}

.services-container {
  display: flex;
  justify-content: space-around;
  align-items: center;
  flex-wrap: wrap;
  max-width: 1200px;
  margin: 50px auto 0 auto;
}

.service {
  text-align: center;
  max-width: 300px;
  padding: 20px;
  margin: 20px;
  background-color: #fff;
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}

.service i {
  font-size: 50px;
  margin-bottom: 20px;
  color: #333;
}

.service h3 {
  margin: 0;
  font-size: 24px;
  color: #333;
}

.service p {
  margin: 20px 0 0 0;
  font-size: 18px;
  color: #666;
}
    </style>
	</head>
	<body>
        <header> 	
		<div class="logo">
			<img src="https://dcassetcdn.com/design_img/legacy/22014_138043_6087_thumbnail.jpg" alt="my logo">
		</div>
		<nav>
			<ul>
			    <li><a href="http://localhost/realesates%20.php">Home</a></li>
				<li><a href="http://localhost/about2.php">About us</a></li>
				<li><a href="http://localhost/realEstate-PHP/">search property</a></li>
                <li><a href="#">Gallary</a></li>
        		<li><a href="#">Listings</a></li>
         		<li><a href="file:///F:/Sublime%20Text%203/service2.html">service</a></li>
                <li><a href="#">Blogs</a></li>
         		<li><a href="http://localhost/RealEstate-PHP/contact.php">contact us</a></li>
         	   <li><a href="http://localhost/RealEstate-PHP/register.php" class="signup-btn">Register</a></li>
               <li><a href="http://localhost/RealEstate-PHP/login.php" class="signin-btn">Login</a></li>
            </ul>
	   </nav>
	   </header>
	<!--slice house-->
        <div class="slideshow-container">
  <div class="slide">
    <img src="https://pohligbuilders.com/wp-content/uploads/2019/08/ModernCraftsman06-Featured-Image-2000x1082.jpg" alt="image1">
    <div class="slide-caption">
     <h2>Find the Property for rent ,sell.buy</h2>
     <h4>we deal with differnt kides of properties.<br/>No matter wha you need-a house,an apartment or falt fine a good option on out website.<br/>Thoushand of offers and best prices and guranteed</h4>	
    	
      <p>Get Your Dream House.</p>
    </div>
  </div>
  <div class="slide">
    <img src="http://cdn.home-designing.com/wp-content/uploads/2020/04/modern-home-on-the-coast.jpg" alt="image2">
    <div class="slide-caption">
      <h3>Somtimes the key to happiness<br/>
      is Finding The key to the right <br/> home Let me help you look for it</h3>	
      <p>Get Your Dream House.</p>
    </div>
  </div>

  <div class="slide">
    <img src="https://nococustomhomes.com/wp-content/uploads/2021/12/dsc_0188-edit-scaled.jpeg" alt="image3">
    <div class="slide-caption">
      <h3>Somtimes the key to happiness<br/>
      is Finding The key to the right <br/> home Let me help you look for it</h3>	
      <p>Get Your Dream House.</p>
    </div>
  </div>
</div>  <hr/>      
<!--about us-->
       <div class="about-us">
  <h2><u>About Us</u></h2>
  <div class="block-container">
    <div class="block1">
      <h3>Property listings</h3>
      <p>Provide detailed information on each property for sale or rent, including photos, descriptions, amenities, and pricing.</p>
    </div>
    <div class="block2">
      <h3>Property management</h3>
      <p>Offer services to landlords and property owners, such as tenant screening, rent collection, maintenance, and repair.</p>
    </div>
    <div class="block3">
      <h3>Market data</h3>
      <p> Share local real estate market trends, including median home prices, inventory levels, days on market, and other relevant data.</p>
    </div>
  </div>
</div><br/>
 <!--listing property-->
 <div class="im">
  <div class="Listing-properties">
  <h2>Listing properties </h2></div><br/>
 <div class="property-listing">
  <div class="property-card">
    <div class="property-image">
      <img src="https://thumbs.dreamstime.com/b/classic-house-flower-garden-751996.jpg" alt="Property Image">
    </div>
    <div class="property-details">
      <h2>Property already sold </h2>
      <p>Location: City visakhapatnam, Gajuwaka</p>
      <p>Price: 2000000</p>
    </div>
  </div>

  <div class="property-card">
    <div class="property-image">
      <img src="https://www.acubecreators.com/wp-content/uploads/2021/05/Modern-Contemporary-House-Designs-1.jpeg" alt="Property Image">
    </div>
    <div class="property-details">
      <h2>Property already rented</h2>
      <p>Location: City srikakulem </p>
      <p>Price: 20000</p>

    </div>
  </div>
  <div class="property-card">
    <div class="property-image">
      <img src="https://www.acubecreators.com/wp-content/uploads/2021/05/Simple-Contemporary-House-In-Kerala-1.jpg" alt="Property Image">
    </div>
    <div class="property-details">
      <h2>Property already buyed</h2>
      <p>Location: City Hyderabad</p>
      <p>Price: 2500000</p>

    </div>
  </div>
</div>

                
<div class="property-listing">
  <div class="property-card">
    <div class="property-image">
      <img src="http://keralahomedesignz.com/wp-content/uploads/2022/05/hOME-19-web.jpg" alt="Property Image">
    </div>
    <div class="property-details">
      <h2>Property already buyed</h2>
      <p>Location: City 1, State 1</p>
      <p>Price: 3000000</p>
    </div>
  </div>


  <div class="property-card">
    <div class="property-image">
      <img src="https://i.ytimg.com/vi/j0vLtkQDNis/maxresdefault.jpg" alt="Property Image">
    </div>
    <div class="property-details">
      <h2>Property already sold</h2>
      <p>Location: City visakhapatnam</p>
      <p>Price: 2000000</p>
    </div>
  </div>


  <div class="property-card">
    <div class="property-image">
      <img src="https://thumbs.dreamstime.com/b/best-house-design-images-best-house-images-latest-house-images-design-beautiful-exterior-home-pictures-new-home-design-images-172723149.jpg" alt="Property Image">
    </div>
    <div class="property-details">
      <h2>Property already rented</h2>
      <p>Location: City visakhapatnam</p>
      <p>Price:150000</p>
    </div>
  </div>
</div>
<div class="see">
<a href="http://localhost/RealEstate-PHP/property.php">see more</a></div></div><hr/><br/>
 <!--contact us-->

	
 <!--how to work-->
 <div class="im2">
 <div class="sangee"><h2>How to work</h2></div> 
 <div class="container">
    <div class="item">
      <img src="https://assets.nobroker.in/static/img/listing/search.jpg" alt="Image 1">
      <h3>Simple Listing Process</h3>
      <p>As an owner you can list your property in a few minutes.<br/> Just fill out our super simple form. Your property will go live after verification.</p>
    </div>
    <div class="item">
      <img src="https://assets.nobroker.in/static/img/listing/phonecall.jpg" alt="Image 2">
      <h3>Tenant Selects Property and Schedules an Appointment</h3>
      <p>If a tenant likes your property they will request for your contact details. <br/>Both parties will receive contact information and then arrange for a visit.</p>
    </div>
    <div class="item">
      <img src="https://assets.nobroker.in/static/img/listing/shakeHands.jpg" alt="Image 3">
      <h3>Deal Closure</h3>
      <p>Owner and tenant meet to close the deal directly. NoBroker can help create a rental agreement and deliver it to your doorstep.</p>
    </div></div></div>
 <!--Gallery-->
 <div class="siri"><h2> Gallary</h2></div><br/><br/>
 <div class="image-block">
  <div class="image-container">
    <img src="https://www.bhg.com/thmb/H9VV9JNnKl-H1faFXnPlQfNprYw=/1799x0/filters:no_upscale():strip_icc()/white-modern-house-curved-patio-archway-c0a4a3b3-aa51b24d14d0464ea15d36e05aa85ac9.jpg" alt="Image 1" class="image">
    <div class="overlay">
      <div class="text">find rent house</div>
    </div>
  </div>
  <div class="image-container">
    <img src="https://www.houseyog.com/res/planimages/hp1049-th-50324-hy149-planthumb.jpg" alt="Image 2" class="image">
    <div class="overlay">
      <div class="text">buy your dream house</div>
    </div>
  </div>
  <div class="image-container">
    <img src="https://stylesatlife.com/wp-content/uploads/2021/03/Best-House-Elevation-Designs.jpg" alt="Image 3" class="image">
    <div class="overlay">
      <div class="text">sell your property</div>
    </div>
  </div>
</div>
<!--rent/sell-->
<!--service-->
	<section id="services">
  <h2>Our Services</h2>
  <div class="services-container">
    <div class="service">
      <i class="fas fa-home"></i>
      <h3>Property Listing</h3>
      <p>We provide a wide range of properties for sale rent or buy, from apartments to villas and commercial spaces.</p>
    </div>
    <div class="service">
      <i class="fas fa-users"></i>
      <h3>Professional Experts</h3>
      <p>Our team of experienced and knowledgeable  are here to assist you with all your real estate needs.</p>
    </div>
    <div class="service">
      <i class="fas fa-building"></i>
      <h3>Property Management</h3>
      <p>We offer property management services to ensure your investment is taken care of and generates maximum returns.</p>
    </div>
    <div class="service">
      <i class="fas fa-hands-helping"></i>
      <h3>Customer Support</h3>
      <p>We pride ourselves on providing excellent customer service and support to all our clients.</p>
    </div>
  </div>
</section><br/><br/>
<!--blogs-->
<div class="blogs"><h2>Blogs<h2></div>

<section class="blog-posts">
  <article class="blog-post">
    <img src="https://karnatakabank.com/sites/default/files/inline-images/img-apna-ghar_0.jpg" alt="Blog Post Image">
    <div class="blog-post-content">
      <h2>Blog Post Title</h2>
      <p class="blog-post-date">Published on <span>January 1, 2022</span></p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
      <a href="#" class="read-more">Read More</a>
    </div>
  </article>
  
  <article class="blog-post">
    <img src="https://www.cdc.gov/nceh/features/protect-home-radon/images/house_radon_socialmedia_600px.jpg?_=13583" alt="Blog Post Image">
    <div class="blog-post-content">
      <h2>Blog Post Title</h2>
      <p class="blog-post-date">Published on <span>January 1, 2022</span></p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
      <a href="#" class="read-more">Read More</a>
    </div>
  </article>
  
  <article class="blog-post">
    <img src="https://texashomeownerassistance.com/wp-content/uploads/2022/07/about-pic-2.jpg" alt="Blog Post Image">
    <div class="blog-post-content">
      <h2>Blog Post Title</h2>
      <p class="blog-post-date">Published on <span>January 1, 2022</span></p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
      <a href="#" class="read-more">Read More</a>
    </div>
  </article>
</section>
<!--last page-->
<footer class="footer4">
		<div class="container4">
			<div class="row">
				<div class="footer-col">
				<h2>Get Your Dream House</h2>
				<ul>
					<li><a href="http://localhost/realesates%20.php">Home</a></li>
					<li><a href="#">About Us</a></li>
					<li><a href="#">Rent House</a></li>
					<li><a href="http://localhost/realEstate-PHP/">search Property</a></li>
					<li><a href="#">Blogs</a></li>
					<li><a href="#">Listing Property</a></li>
					<li><a href="#">Service</a></li>
				</ul>
				</div>
				<div class="footer-col">
				<h2>Contact Us</h2>
			    <h3>Email:<a href="bhavanabaga@gmail.com">bhavanabaga@gmail.com</a></h3><br/>
				<h3><p>Phone Number:7995675055</p></h3><br/>
				<p><h3>Address:Visakhapatanam,main road</p></h3><br/>
				</div>
				<div class="footer-col">
				<h2>Follow Us</h2>
				<div class="Social-links">
					<a href="#"><i class="fab fa-facebook-f"></i></a>
					<a href="#"><i class="fab fa-twitter"></i></a>
					<a href="#"><i class="fab fa-instagram"></i></a>
					<a href="#"><i class="fab fa-linkedin-in"></i></a>	
				</div>
				</div>
			</div>
		</div>	
	</footer>
  


<script>var signupBtn = document.querySelector('.signup-btn');
var signinBtn = document.querySelector('.signin-btn');

signupBtn.addEventListener('click', function() {
  alert('Register button clicked!');
});

signinBtn.addEventListener('click', function() {
  alert('Log in button clicked!');
});
   let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("slide");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {
    slideIndex = 1;
  }
  slides[slideIndex - 1].style.display = "block";
  setTimeout(showSlides, 2000); // Change image every 5 seconds
}
//service
</script>

	</body>
	</html>