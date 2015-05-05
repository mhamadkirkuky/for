<?php
mysql_connect("mysql15.000webhost.com", "a6883854_root","1234567890ukh");
mysql_select_db("a6883854_users");
 
echo "<head>\n"; 
echo "<meta http-equiv= Content-Type  content= text/html; charset=utf-8  />\n"; 
echo "<meta name= viewport  content= width=device-width, initial-scale=1.0 >\n"; 
echo "<link href= css/style.css  rel= stylesheet  type= text/css />\n"; 
echo "<link href= css/responsive.css  rel= stylesheet  type= text/css />\n"; 

echo "<script src= js/jquery.min.js ></script>\n"; 
echo "<title>Learning Kurdish language</title>\n"; 
echo "</head>\n"; 
echo "\n"; 
echo "<body>\n"; 










echo "    	<div class= header >\n"; 
echo "        	<div class= container >\n"; 
echo "            	<div class= logo-menu >\n"; 
echo "                	<div class= logo >\n"; 

echo "                    	<h1 style= font-size:50px ><strong><br>
<br>
<br>
Learning Kurdish Language</strong></h1>\n"; 
echo "                    </div>\n"; 
echo "                    <div class= menu >\n"; 
echo "                    <label for= show-menu  class= show-menu >Show Menu</label>\n"; 
echo "					<input type= checkbox  id= show-menu  role= button ></input>\n"; 
echo "                    	<ul class= nav  id= menu >\n"; 
echo "                        	<li><a href= #  class= active >Home</a></li>\n"; 
echo "                            <li><a href= #service >Services</a></li>\n"; 

echo "                            <li><a href= #about >About</a></li>\n"; 
echo "                            <li><a href= login.php >Login</a></li>\n"; 

echo "                        </ul>\n"; 
echo "                    </div>\n"; 
echo "                </div>\n"; 
echo "            </div>\n"; 
echo "        </div>\n"; 



echo "    	<div class= banner >\n"; 
echo "<br>";
echo "        	<div class= container >\n"; 

echo "            	<div class= banner-text >\n"; 

echo "                	<h2 class= tagline ><strong>Learning Kurdish language in an attractive effective ways:</strong> </h2>\n"; 

echo "                    <p class= under-tagline >This website have been developed for the foreigners and tourism that they want to learn Kurdish languages. The website contain many sections like most common words, sentences, quiz and vocabularies </p>\n"; 

echo "                   <a href='login.php' >  <button class= mainbutton >Log in</button> </a>"; 
echo "                   <a href='registration.php'> <button class= mainbutton >Sin Up</button></a>\n"; 
echo"<br>";
echo "                   <a href='#pricePlans'><button class= mainbutton >Get Start</button></a>\n"; 

echo "<br>";
echo "<br>";
echo "<br>";


echo "                </div>\n"; 
echo "            </div>\n"; 
echo "        </div>\n"; 
echo "    <!--------Banner Ends------------>\n"; 

/*------------------------------------------------------------------------------------------------------*/
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<!--[if lt IE 9]>
	<script src="dist/html5shiv.js"></script>
	<![endif]-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" href="style4.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
</head>
<body>
<p>Sections of the webiste for learning Kurdish Language</p>
	<section id="pricePlans">
		<ul id="plans">
			<li class="plan">
				<ul class="planContainer">
					<li class="title"><h2>Vocabulary</h2></li>
					<li class="price"><p><span>Learning Vocabularies</span></p></li>
					<li>
						<ul class="options">
							<li>more than <span>150 different words</span></li>
							<li>more than <span>7 section of vocabulary</span></li>
							<li>Sounds<span>for each words</span></li>
							<li>and more.... </li>
							
						</ul>
					</li>
					<li class="button"><a href="vo.php">Get Start</a></li>
				</ul>
			</li>

			<li class="plan">
				<ul class="planContainer">
					<li class="title"><h2 class="bestPlanTitle">Sentences </h2></li>
					<li class="price"><p class="bestPlanPrice">Learning Sentences</p></li>
					<li>
						<ul class="options">
							<li>more than <span>common sentences</span></li>
							<li>more than <span>8 section of common sentence </span></li>
							<li>and more..... </li>
							
						</ul>
					</li>
					<li class="button"><a class="bestPlanButton" href="sentence.php">Get Start</a></li>
				</ul>
			</li>

			<li class="plan">
				<ul class="planContainer">
					<li class="title"><h2>Quiz</h2></li>
					<li class="price"><p>Making<span>Quiz</span></p></li>
					<li>
						<ul class="options">
							<li>three levels<span>of Quizzes</span></li>
							<li>level one <span>beginners</span></li>
							<li>level two <span>intermediate</span></li>
							<li>level three <span>advance</span></li>
							<li>and more...<span>of Quizes </span></li>
						</ul>
					</li>
					<li class="button"><a href="#">Get Start</a></li>
				</ul>
			</li>

			<li class="plan">
				<ul class="planContainer">
					<li class="title"><h2>Not</li>
					<li class="price"><p>$40/<span>month</span></p></li>
					<li>
						<ul class="options">
							<li>2x <span>option 1</span></li>
							<li>Free <span>option 2</span></li>
							<li>Unlimited <span>option 3</span></li>
							<li>Unlimited <span>option 4</span></li>
							<li>1x <span>option 5</span></li>
						</ul>
					</li>
					<li class="button"><a href="#">Purchase</a></li>
				</ul>
			</li>
		</ul> <!-- End ul#plans -->
		
	</section>
</body>
</html>




<?php
echo "    <!--------Contact Starts--------->\n"; 
echo "    	<div class= contact  id= contact >\n"; 
echo "        	<div class= container >\n"; 
echo "            	<div class= section-head >\n"; 
echo "                	<h3>Get In <span>Touch</span></h3>\n"; 
echo "                </div>\n"; 
echo "                <div class= contact-section >\n"; 
echo "            		<div class= contact-form >\n"; 
echo "                		<form>\n"; 
echo "                    		<input type= text  name= Name  placeholder= Name  />\n"; 
echo "                        	<input type= email  name= email  placeholder= Email />\n"; 
echo "                        	<textarea placeholder= Message  rows= 6 ></textarea>\n"; 
echo "                        	<button type= submit  class= submit >Send Message</button>\n"; 
echo "                   		</form>\n"; 
echo "                	</div>\n"; 
echo "                	<div class= contact-details >\n"; 
echo "                		<p class= address >123689 Pathway, London<br>\n"; 
echo "                            England\n"; 
echo "                        </p>\n"; 
echo "                        <p class= tel >+18965478954</p>\n"; 
echo "                        <p class= mail >info@exemplary.com</p>\n"; 
echo "                	</div>\n"; 
echo "                </div>\n"; 
echo "            </div>\n"; 
echo "        </div>\n"; 
echo "    <!--------Contact Ends----------->\n"; 
echo "    \n"; 
echo "    <!--------Footer Starts---------->\n"; 
echo "    	<div class= footer >\n"; 
echo "        	<div class= container >\n"; 
echo "            	<div class= infooter >\n"; 
echo "                <p class= copyright >developed by Mhamad Saifadeen 2015  </p>\n"; 
echo "            	</div>\n"; 
echo "            <ul class= socialmedia >\n"; 
echo "                <li><a href=  ><i class= icon-twitter ></i></a></li>\n"; 
echo "                <li><a href=  ><i class= icon-facebook ></i></a></li>\n"; 
echo "                <li><a href=  ><i class= icon-dribbble ></i></a></li>\n"; 
echo "                <li><a href=  ><i class= icon-linkedin ></i></a></li>\n"; 
echo "                <li><a href=  ><i class= icon-instagram ></i></a></li>\n"; 
echo "            </ul>\n"; 
echo "            </div>\n"; 
echo "        </div>\n"; 
echo "    <!--------Footer Ends------------>\n"; 
echo "</body>\n"; 
echo "</html>\n"; 
echo "\n";
?>