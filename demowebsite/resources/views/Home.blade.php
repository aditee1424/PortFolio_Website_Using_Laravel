<!---STUDENT NAME: ADITEE DNYANESHWAR DAKHANE-->
<!---UTA ID: 1001745502
UTA CLOUD: http://aditee1411.uta.cloud/Dakhane_portfolio/Home.html-->
<html>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>HOME</title>
<link rel="stylesheet" href="<?php echo asset('css/Portfolio1.css') ?>" type="text/css">
<link rel="stylesheet" href="Portfolio1.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-green.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link href='https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700' rel='stylesheet'>

<head>
      <script>
            /* SITE REFERRED FOR THIS SECTION:https://www.w3schools.com/howto/tryit.asp?filename=tryhow_js_tabs*/
            /*SITE REFERRED FOR THIS SECTION:https://www.w3schools.com/icons/tryit.asp?filename=tryicons_fa-laptop*/
            function openTab(evt, tabName) {
                  var i, tablaptop, falaptop;
                  tablaptop = document.getElementsByClassName("tabcontent");
                  for (i = 0; i < tablaptop.length; i++) {
                        tablaptop[i].style.display = "none";
                  }
                  falaptop = document.getElementById("tablinks");
                  for (i = 0; i < falaptop.length; i++) {
                        falaptop[i].className = falaptop[i].className.replace(" active", "");
                  }
                  document.getElementById(tabName).style.display = "block";
                  evt.currentTarget.className += " active";
            }
            /*SITE REFERRED FOR LOGIN AND SIGN UP FORM:https://www.w3schools.com/howto/tryit.asp?filename=tryhow_css_login_form_modal*/

            // Get the modal
            var modal = document.getElementById('id01');

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                  if (event.target == modal) {
                        modal.style.display = "none";
                  }
            }


            var modal = document.getElementById('id02');

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                  if (event.target == modal) {
                        modal.style.display = "none";
                  }
            }


            /*SITE REFERRED FOR THIS SECTION:https://www.w3schools.com/howto/tryit.asp?filename=tryhow_js_form_steps*/

            var currentTab = 0; // Current tab is set to be the first tab (0)
            showTab(currentTab); // Display the current tab

            function showTab(n) {
                  // This function will display the specified tab of the form...
                  var x = document.getElementsByClassName("tab");
                  x[n].style.display = "block";
                  //... and fix the Previous/Next buttons:
                  if (n == 0) {
                        document.getElementById("prevBtn").style.display = "none";
                  } else {
                        document.getElementById("prevBtn").style.display = "inline";
                  }
                  if (n == (x.length - 1)) {
                        document.getElementById("nextBtn").innerHTML = "Submit";
                  } else {
                        document.getElementById("nextBtn").innerHTML = "Next";
                  }
                  //... and run a function that will display the correct step indicator:
                  fixStepIndicator(n)
            }

            function nextPrev(n) {
                  // This function will figure out which tab to display
                  var x = document.getElementsByClassName("tab");
                  // Exit the function if any field in the current tab is invalid:
                  if (n == 1 && !validateForm()) return false;
                  // Hide the current tab:
                  x[currentTab].style.display = "none";
                  // Increase or decrease the current tab by 1:
                  currentTab = currentTab + n;
                  // if you have reached the end of the form...
                  if (currentTab >= x.length) {
                        // ... the form gets submitted:
                        document.getElementById("regForm").submit();
                        return false;
                  }
                  // Otherwise, display the correct tab:
                  showTab(currentTab);
            }

            function validateForm() {
                  // This function deals with validation of the form fields
                  var x, y, i, valid = true;
                  x = document.getElementsByClassName("tab");
                  y = x[currentTab].getElementsByClassName("admininput");
                  // A loop that checks every input field in the current tab:
                  for (i = 0; i < y.length; i++) {
                        // If a field is empty...
                        if (y[i].value == "") {
                              // add an "invalid" class to the field:
                              y[i].className += " invalid";
                              // and set the current valid status to false
                              valid = false;
                        }
                  }
                  // If the valid status is true, mark the step as finished and valid:
                  if (valid) {
                        document.getElementsByClassName("step")[currentTab].className += " finish";
                  }
                  return valid; // return the valid status
            }

            function fixStepIndicator(n) {
                  // This function removes the "active" class of all steps...
                  var i, x = document.getElementsByClassName("step");
                  for (i = 0; i < x.length; i++) {
                        x[i].className = x[i].className.replace(" active", "");
                  }
                  //... and adds the "active" class on the current step:
                  x[n].className += " active";
            }


            var slideIndex = 1;
            showSlides(slideIndex);


            function currentSlide(n) {
                  showSlides(slideIndex = n);
            }

            function showSlides(n) {
                  var i;
                  var slides = document.getElementsByClassName("mySlides");
                  var dots = document.getElementsByClassName("line");
                  if (n > slides.length) {
                        slideIndex = 1
                  }
                  if (n < 1) {
                        slideIndex = slides.length
                  }
                  for (i = 0; i < slides.length; i++) {
                        slides[i].style.display = "none";
                  }
                  for (i = 0; i < dots.length; i++) {
                        dots[i].className = dots[i].className.replace(" active", "");
                  }
                  slides[slideIndex - 1].style.display = "block";
                  dots[slideIndex - 1].className += " active";
            }
      </script>
</head>

<body>
      <!-----------------------------------HOME------------------------------------------------------------->
      <!--SITE REFERRED FOR THIs SECTION:https://www.w3schools.com/css/tryit.asp?filename=trycss_navbar_horizontal_float-->
      <!--SITE REFERRED FOR LOGIN AND SIGN UP FORM:https://www.w3schools.com/howto/tryit.asp?filename=tryhow_css_login_form_modal-->
      <div id="wrapper">
            <div class="backgroundimage">
                  <header class="homeheader">
                        <nav class="navpages">
                              <ul>
                                    <li style="padding-right: 100px"><a href="#home"> ADITEE DAKHANE</a></li>
                                    <li style="padding-right: 5px"><a href="#home"> HOME </a> </li>
                                    <li style="padding-right: 5px"><a href="#wrapperabout">ABOUT</a></li>
                                    <li style="padding-right: 5px"><a href="#wrapperabout">SKILLS</a> </li>
                                    <li style="padding-right: 5px"><a href="#wrapperportfolio">PORTFOLIO</a></li>
                                    <li style="padding-right: 5px"><a href="#wrapperworkex">EXPERIENCE</a></li>
                                    <li style="padding-right: 5px"><a href="#blog">BLOG</a></li>
                                    <li style="padding-right: 5px"><a href="#wrapperprices">HIRE ME</a></li>
                                    <li style="padding-right: 5px"><a href="#wrappercontact">CONTACT</a>
                                    </li>
                                    <li style="padding-right: 5px"><a href="#login" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">LOGIN</a></li>
                                    <li style="padding-right: 5px"> <a href="#signup" onclick="document.getElementById('id02').style.display='block'" style="width:auto;">SIGN UP</a></li>
                              </ul>

                        </nav>



                  </header>
                  <div class="middleimage" align="center" style="padding:48px;color:white;font-weight: bold">
                  @foreach ($portfolioimage as $portfolioimage)
                  <?php echo '<img src="data:image/jpeg;base64,' . $portfolioimage->Image . '" style="width:200;height:200" class="portfolioimage"/>';?>
                        <br><br>
                        
                        <h2><b>{{$portfolioimage->Title}}</b></h2>
                        <p>{{$portfolioimage->Jobs}}</p>
                        <a href="#hireme"><button type="button" class="buttons">Hire Me</button></a>
                        <a href="#CV"><button type="button" class="buttons">Download CV</button></a>
                        @endforeach
                  </div>

            </div>
            <footer class="homefooter">
                  <div align="center">
                        <a href="#" class="fa fa-facebook"></a>
                        <a href="#" class="fa fa-linkedin"></a>
                        <a href="#" class="fa fa-instagram"></a>
                  </div>

            </footer>
      </div>

      <!-----------------------------------ABOUT------------------------------------------------------------->
      <!--SITE REFERRED FOR THIS SECTION:https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_progressbar_size-->
      <div id="wrapperabout">
            <header class="contactheader">
                  <nav class="navpages">
                        <ul>
                              <li style="padding-right: 100px"><a href="#wrapper"> ADITEE DAKHANE</a></li>
                              <li style="padding-right: 5px"><a href="#wrapper"> HOME </a> </li>
                              <li style="padding-right: 5px"><a href="#wrapperabout">ABOUT</a></li>
                              <li style="padding-right: 5px"><a href="#wrapperabout">SKILLS</a> </li>
                              <li style="padding-right: 5px"><a href="#wrapperportfolio">PORTFOLIO</a></li>
                              <li style="padding-right: 5px"><a href="#wrapperworkex">EXPERIENCE</a></li>
                              <li style="padding-right: 5px"><a href="#blog">BLOG</a></li>
                              <li style="padding-right: 5px"><a href="#wrapperprices">HIRE ME</a></li>
                              <li style="padding-right: 5px"><a href="#wrappercontact">CONTACT</a></li>
                              <li style="padding-right: 5px"><a href="#login" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">LOGIN</a></li>
                              <li style="padding-right: 5px"> <a href="#signup" onclick="document.getElementById('id02').style.display='block'" style="width:auto;">SIGN UP</a></li>
                        </ul>

                  </nav>

            </header>
            <div class="aboutcontainer">

                  <div class="aboutrow">
                        @foreach ($viewoverall as $viewoverall)
                        <div class="aboutcolumn">
                              <p><b>
                                          <font size="5px">About</font>
                                    </b></p>
                              <p>
                                    <font color="grey">{{$viewoverall->About_Info}}<br>

                                    </font>
                              </p>
                        </div>
                        <div class="aboutcolumn">
                              <p><b>
                                          <font size="5px">Basic Information</font>
                                    </b></p>
                              <p>
                                    <b>Age:</b>
                                    <font color="grey">
                                          &emsp;&emsp;&emsp;&emsp;{{$viewoverall->Age}}
                                    </font><br>
                                    <b>Email:</b>
                                    <font color="grey">
                                          &nbsp;&nbsp;&nbsp;&emsp;&emsp;&nbsp;{{$viewoverall->Email}}
                                    </font><br>
                                    <b>Phone:</b>
                                    <font color="grey">&nbsp;&nbsp;&nbsp;&emsp;&nbsp;&nbsp;{{$viewoverall->Phone}}</font>
                                    <br>
                                    <b>Address:</b>
                                    <font color="grey">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$viewoverall->Address}}</font>
                                    <br>
                                    <b>Language:</b>
                                    <font color="grey">&nbsp;&nbsp;&nbsp;{{$viewoverall->Language}}</font>
                              </p>

                        </div>
                        @endforeach
                  </div>
            </div>
            <div class="aboutheading">
                  <h2>
                        <center><b>Professional Skills</b></center>
                  </h2><br>
            </div>
            <div class="aboutcontainer">

                  <div class="aboutrow">
                        @foreach ($skills as $skills)
                        <div class="aboutcolumn">
                              <p><span class="aboutleft">{{$skills->Language}}</span><span class="aboutright">{{$skills->Percentage}}</span><br></p>
                              <div class="w3-container">
                                    <div class="w3-theme-l3">
                                          <div class="w3-green" style="height:5px;width:{{$skills->Percentage}}%">
                                          </div>
                                    </div><br>
                              </div>
                        </div>
                        @endforeach
                  </div>
            </div>


      </div>


      <!-------------------------------------------------PORTFOLIO------------------------------------------------>
      <!--SITE REFERRED FOR THIS SECTION:https://www.w3schools.com/howto/tryit.asp?filename=tryhow_js_tabs-->
      <!--SITE REFERRED FOR THIS SECTION:https://www.w3schools.com/icons/tryit.asp?filename=tryicons_fa-laptop-->
      <!--SITE REFERRED FOR THIS SECTION: https://templateflip.com/demo/?template=creative-cv-->
      <div id="wrapperportfolio">
            <header class="contactheader">
                  <nav class="navpages">
                        <ul>
                              <li style="padding-right: 100px"><a href="#wrapper"> ADITEE DAKHANE</a></li>
                              <li style="padding-right: 5px"><a href="#wrapper"> HOME </a> </li>
                              <li style="padding-right: 5px"><a href="#wrapperabout">ABOUT</a></li>
                              <li style="padding-right: 5px"><a href="#wrapperabout">SKILLS</a> </li>
                              <li style="padding-right: 5px"><a href="#wrapperportfolio">PORTFOLIO</a></li>
                              <li style="padding-right: 5px"><a href="#wrapperworkex">EXPERIENCE</a></li>
                              <li style="padding-right: 5px"><a href="#blog">BLOG</a></li>
                              <li style="padding-right: 5px"><a href="#wrapperprices">HIRE ME</a></li>
                              <li style="padding-right: 5px"><a href="#wrappercontact">CONTACT</a></li>
                              <li style="padding-right: 5px"><a href="#login" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">LOGIN</a></li>
                              <li style="padding-right: 5px"> <a href="#signup" onclick="document.getElementById('id02').style.display='block'" style="width:auto;">SIGN UP</a></li>
                        </ul>

                  </nav>

            </header>

            <div class="portfolioheading">
                  <h2>
                        <center>Portfolio</center>
                  </h2>
            </div>
            <div class="portfoliotabs">
                  <a class="fa fa-laptop" id="tablinks" aria-hidden="true" onclick="openTab(event, 'webdevelopment')"></a>
                  <a class="fa fa-image" id="tablinks" onclick="openTab(event, 'graphicdesign')"></a>
                  <a class="fa fa-camera" id="tablinks" onclick="openTab(event, 'photography')"></a>
            </div>
            <div class="tabcontent" id="webdevelopment">
          
                  <div class="projectrow1">
                  
                  <?php
                  for($i=0;$i<4;$i++){
                        echo'<div class="project1">';
                        
                              
                  echo '<img src="data:image/png;base64,' . $portfolio[$i]->Image . '" class="image"/>';
                                   echo' <div class="overlay">
                                   <div class="text">
                                   <h2>'.$portfolio[$i]->ProjectTitle.'</h2>
                                   <h5>'.$portfolio[$i]->ProjectType.'</h5>
                             </div>

                                    </div>
                              
                      
                        </div>';
                  }
                        ?>
                        
                       
                  </div>
            </div>
                 
                  
            <div class="tabcontent" id="graphicdesign" style="display:none">
            <div class="projectrow1">
                  
                  <?php
                  for($i=4;$i<8;$i++){
                        echo'<div class="project1">';
                        
                              
                  echo '<img src="data:image/png;base64,' . $portfolio[$i]->Image . '" class="image"/>';
                                   echo' <div class="overlay">
                                   <div class="text">
                                   <h2>'.$portfolio[$i]->ProjectTitle.'</h2>
                                   <h5>'.$portfolio[$i]->ProjectType.'</h5>
                             </div>

                                    </div>
                              
                      
                        </div>';
                  }
                        ?>
                        
                       
                  </div>
                  </div>
           


            <div class="tabcontent" id="photography" style="display: none">
            <div class="projectrow1">
                  
                  <?php
                  for($i=8;$i<12;$i++){
                        echo'<div class="project1">';
                        
                              
                  echo '<img src="data:image/png;base64,' . $portfolio[$i]->Image . '" class="image"/>';
                                   echo' <div class="overlay">
                                       
                                   <div class="text">
                                   <h2>'.$portfolio[$i]->ProjectTitle.'</h2>
                                   <h5>'.$portfolio[$i]->ProjectType.'</h5>
                             </div>
                                    </div>
                              
                      
                        </div>';
                  }
                        ?>
                        
                       
                  </div>
                
                  </div>
            
      </div>
      

      <!-----------------------------------WORK EXPERIENCE------------------------------------------------------------->
      <div id="wrapperworkex">
            <header class="contactheader">
                  <nav class="navpages">
                        <ul>
                              <li style="padding-right: 100px"><a href="#wrapper"> ADITEE DAKHANE</a></li>
                              <li style="padding-right: 5px"><a href="#wrapper"> HOME </a> </li>
                              <li style="padding-right: 5px"><a href="#wrapperabout">ABOUT</a></li>
                              <li style="padding-right: 5px"><a href="#wrapperabout">SKILLS</a> </li>
                              <li style="padding-right: 5px"><a href="#wrapperportfolio">PORTFOLIO</a></li>
                              <li style="padding-right: 5px"><a href="#wrapperworkex">EXPERIENCE</a></li>
                              <li style="padding-right: 5px"><a href="#blog">BLOG</a></li>
                              <li style="padding-right: 5px"><a href="#wrapperprices">HIRE ME</a></li>
                              <li style="padding-right: 5px"><a href="#wrappercontact">CONTACT</a></li>
                              <li style="padding-right: 5px"><a href="#login" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">LOGIN</a></li>
                              <li style="padding-right: 5px"> <a href="#signup" onclick="document.getElementById('id02').style.display='block'" style="width:auto;">SIGN UP</a></li>
                        </ul>

                  </nav>

            </header>
            <div class="headerworkexp">
                  <h2>
                        <font color="black" size="5px">
                              <center><b>Work Experience</b></center>
                        </font>
                  </h2>
            </div>


            <div class="workexrow">
                  @foreach($workexp as $workexp)
                  <div class="workexcolumndate">
                        <h6>
                              <center>{{$workexp->StartMonth}} {{$workexp->StartYear}} - {{$workexp->EndMonth}} {{$workexp->EndYear}}</center>
                        </h6>
                        <h4>
                              <center>{{$workexp->Company}}</center>
                        </h4>
                  </div>
                  <div class="workexcolumn">
                        <h4>{{$workexp->Position}}</h4>
                        <h6>{{$workexp->Description}}</h6>
                  </div>
                  @endforeach
            </div>

      </div>
      <!-----------------------------------------------EDUCATION----------------------------------------------------->

      <div id="wrappereducation">
            <header class="contactheader">
                  <nav class="navpages">
                        <ul>
                              <li style="padding-right: 100px"><a href="#wrapper"> ADITEE DAKHANE</a></li>
                              <li style="padding-right: 5px"><a href="#wrapper"> HOME </a> </li>
                              <li style="padding-right: 5px"><a href="#wrapperabout">ABOUT</a></li>
                              <li style="padding-right: 5px"><a href="#wrapperabout">SKILLS</a> </li>
                              <li style="padding-right: 5px"><a href="#wrapperportfolio">PORTFOLIO</a></li>
                              <li style="padding-right: 5px"><a href="#wrapperworkex">EXPERIENCE</a></li>
                              <li style="padding-right: 5px"><a href="#blog">BLOG</a></li>
                              <li style="padding-right: 5px"><a href="#wrapperprices">HIRE ME</a></li>
                              <li style="padding-right: 5px"><a href="#wrappercontact">CONTACT</a></li>
                              <li style="padding-right: 5px"><a href="#login" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">LOGIN</a></li>
                              <li style="padding-right: 5px"> <a href="#signup" onclick="document.getElementById('id02').style.display='block'" style="width:auto;">SIGN UP</a></li>
                        </ul>

                  </nav>

            </header>
            <div class="headerworkexp">
                  <h2>
                        <font color="black" size="5px">
                              <center><b>Education</b></center>
                        </font>
                  </h2>
            </div>


            <div class="workexrow">
                  @foreach($edu as $edu)
                  <div class="workexcolumndate">
                        <h6>
                              <center>{{$edu->StartMonth}} {{$edu->StartYear}} - {{$edu->EndMonth}} {{$edu->EndYear}}</center>
                        </h6>
                        <h4>
                              <center>{{$edu->Level}}</center>
                        </h4>
                  </div>
                  <div class="workexcolumn">
                        <h4>{{$edu->Degree}}</h4>
                        <h6>{{$edu->School}}</h6>

                  </div>
                  @endforeach
            </div>

      </div>
      <!-----------------------------------------------REFERENCES------------------------------------------------->
      <!--SITE REFERRED FOR THIS SECTION:https://www.w3schools.com/howto/tryit.asp?filename=tryhow_js_slideshow-->
      <div id="wrapperreference">
            <header class="contactheader">
                  <nav class="navpages">
                        <ul>
                              <li style="padding-right: 100px"><a href="#wrapper"> ADITEE DAKHANE</a></li>
                              <li style="padding-right: 5px"><a href="#wrapper"> HOME </a> </li>
                              <li style="padding-right: 5px"><a href="#wrapperabout">ABOUT</a></li>
                              <li style="padding-right: 5px"><a href="#wrapperabout">SKILLS</a> </li>
                              <li style="padding-right: 5px"><a href="#wrapperportfolio">PORTFOLIO</a></li>
                              <li style="padding-right: 5px"><a href="#wrapperworkex">EXPERIENCE</a></li>
                              <li style="padding-right: 5px"><a href="#blog">BLOG</a></li>
                              <li style="padding-right: 5px"><a href="#wrapperprices">HIRE ME</a></li>
                              <li style="padding-right: 5px"><a href="#wrappercontact">CONTACT</a></li>
                              <li style="padding-right: 5px"><a href="#login" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">LOGIN</a></li>
                              <li style="padding-right: 5px"> <a href="#signup" onclick="document.getElementById('id02').style.display='block'" style="width:auto;">SIGN UP</a></li>
                        </ul>

                  </nav>

            </header>
            <div class="referenceheading">
                  <h3>References</h3>
            </div>

            <div class="slideshow">

                  <div class="mySlides fade">
                        <div class="rowreferences">
                              <div>
                                    <img src="reference-image-3.jpg" alt="Avatar" class="imagereference">
                                    <p class="captionimage">Jay Y<br>
                                          <font style="color:gray"><b>CEO/Accenture</b></font>
                                    </p>
                              </div>

                              <div class="feedback">
                                    <p class="clear">
                                          As always great creative thinking for the best solution.Aditee Dakhane is by
                                          far the most Professional
                                          knowlegdeable developer I have worked with. I will hire her again.
                                    </p>
                              </div>
                              <div style="text-align:center">
                                    <span class="line" onclick="currentSlide(1)"></span>
                                    <span class="line" onclick="currentSlide(2)"></span>
                                    <span class="line" onclick="currentSlide(3)"></span>
                              </div>
                        </div>

                  </div>

                  <div class="mySlides fade" style="display:none">

                        <div class="rowreferences">
                              <div>
                                    <img src="reference-image-1.jpg" alt="Avatar" class="imagereference">
                                    <p class="captionimage">AMY T<br>
                                          <font style="color:gray"><b>SSE/ACI</b></font>
                                    </p>
                              </div>

                              <div class="feedback">
                                    <p class="clear">
                                          As always great creative thinking for the best solution.Aditee Dakhane is by
                                          far the most Professional
                                          knowlegdeable developer I have worked with. I will hire her again.
                                    </p>
                              </div>
                              <div style="text-align:center">
                                    <span class="line" onclick="currentSlide(1)"></span>
                                    <span class="line" onclick="currentSlide(2)"></span>
                                    <span class="line" onclick="currentSlide(3)"></span>
                              </div>
                        </div>
                  </div>

                  <div class="mySlides fade" style="display:none">

                        <div class="rowreferences">
                              <div>
                                    <img src="reference-image-2.jpg" alt="Avatar" class="imagereference">
                                    <p class="captionimage">MAC Z<br>
                                          <font style="color:gray"><b>CO/VMware</b></font>
                                    </p>
                              </div>

                              <div class="feedback">
                                    <p class="clear">
                                          As always great creative thinking for the best solution.Aditee Dakhane is by
                                          far the most Professional
                                          knowlegdeable developer I have worked with. I will hire her again.
                                    </p>
                              </div>
                              <div style="text-align:center">
                                    <span class="line" onclick="currentSlide(1)"></span>
                                    <span class="line" onclick="currentSlide(2)"></span>
                                    <span class="line" onclick="currentSlide(3)"></span>
                              </div>
                        </div>
                  </div>


            </div>
            <br>


      </div>

      <!------------------------------------------PRICES------------------------------------------------------------>
      <!--SITE REFERRED FOR THIS SECTION:https://www.w3schools.com/howto/tryit.asp?filename=tryhow_css_profile_card-->
      <div id="wrapperprices">
            <header class="contactheader">
                  <nav class="navpages">
                        <ul>
                              <li style="padding-right: 100px"><a href="#wrapper"> ADITEE DAKHANE</a></li>
                              <li style="padding-right: 5px"><a href="#wrapper"> HOME </a> </li>
                              <li style="padding-right: 5px"><a href="#wrapperabout">ABOUT</a></li>
                              <li style="padding-right: 5px"><a href="#wrapperabout">SKILLS</a> </li>
                              <li style="padding-right: 5px"><a href="#wrapperportfolio">PORTFOLIO</a></li>
                              <li style="padding-right: 5px"><a href="#wrapperworkex">EXPERIENCE</a></li>
                              <li style="padding-right: 5px"><a href="#blog">BLOG</a></li>
                              <li style="padding-right: 5px"><a href="#wrapperprices">HIRE ME</a></li>
                              <li style="padding-right: 5px"><a href="#wrappercontact">CONTACT</a></li>
                              <li style="padding-right: 5px"><a href="#login" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">LOGIN</a></li>
                              <li style="padding-right: 5px"> <a href="#signup" onclick="document.getElementById('id02').style.display='block'" style="width:auto;">SIGN UP</a></li>
                        </ul>

                  </nav>

            </header>
            <div class="headerworkexp">
                  <h2>
                        <font color="black" size="5px">
                              <center><b>Prices</b></center>
                        </font>
                  </h2>
            </div>
            @foreach($prices as $prices)
            <div class="pricecard">
                  <div class="priceimage">
                  <?php echo '<img src="data:image/png;base64,' . $prices->Image . '" style="width:100%" height="40%"/>' ?>
                  </div>
                  <div class="pricedivisions">

                        <h1>{{$prices->Price}}</h1>
                        <h6>{{$prices->JobName}}</h6>
                  </div>
                  <div class="features">
                        <hr style="color: gray">
                        <div style="text-align: left; padding-left: 20px">{{$prices->Service1}}</div>
                        <hr style="color: gray">
                        <div style="text-align: left; padding-left: 20px">{{$prices->Service2}}</div>
                        <hr style="color: gray">
                        <div style="text-align: left; padding-left: 20px">{{$prices->Service3}}</div>
                        <hr style="color: gray">
                        <div style="text-align: left; padding-left: 20px">{{$prices->Service4}}</div>
                        <div class="featurecontact">
                              <hr style="color: gray"><a href="{{$prices->Link}}">
                                    <div style="text-align: left; padding-left: 20px">Contact Us</div>
                              </a>
                        </div>
                  </div>
            </div>
            @endforeach
      </div>

      <!-------------------------------------CONTACT------------------------------------------------------------->
      <!--SITE REFERRED FOR THIS SECTION:https://www.w3schools.com/howto/tryit.asp?filename=tryhow_css_contact_section -->
      <!--SITE REFERRED FOR THIS SECTION:https://www.w3schools.com/howto/tryit.asp?filename=tryhow_css_form_icon-->
      <div id="wrappercontact">
            <div class="backgroundimage">
                  <header class="contactheader" id="cheader">
                        <nav class="navpages">
                              <ul>
                                    <li style="padding-right: 100px"><a href="#wrapper"> ADITEE DAKHANE</a></li>
                                    <li style="padding-right: 5px"><a href="#wrapper"> HOME </a> </li>
                                    <li style="padding-right: 5px"><a href="#wrapperabout">ABOUT</a></li>
                                    <li style="padding-right: 5px"><a href="#wrapperabout">SKILLS</a> </li>
                                    <li style="padding-right: 5px"><a href="#wrapperportfolio">PORTFOLIO</a></li>
                                    <li style="padding-right: 5px"><a href="#wrapperworkex">EXPERIENCE</a></li>
                                    <li style="padding-right: 5px"><a href="#blog">BLOG</a></li>
                                    <li style="padding-right: 5px"><a href="#wrapperprices">HIRE ME</a></li>
                                    <li style="padding-right: 5px"><a href="#wrappercontact">CONTACT</a></li>
                                    <li style="padding-right: 5px"><a href="#login" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">LOGIN</a></li>
                                    <li style="padding-right: 5px"> <a href="#signup" onclick="document.getElementById('id02').style.display='block'" style="width:auto;">SIGN UP</a></li>
                              </ul>

                        </nav>

                  </header>
                  <div class="contactcontainer">
                        <div style="text-align:center">
                              <p><b>
                                          <h3>Contact Me</h3>
                                    </b>
                                    <p>
                        </div>
                        <div class="row">
                              <div class="column">
                                    <p><b>Feel free to contact me</b></p>
                                    <form method="post" action="/usercreate">
                                          <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                                          <div class="input-container">
                                                <i class="	fa fa-user-circle icon"></i>
                                                <input class="input-field" type="text" placeholder="Name" name="username">
                                          </div>


                                          <div class="input-container">
                                                <i class="fa fa-file-text icon"></i>
                                                <input class="input-field" type="text" placeholder="Subject" name="subject">
                                          </div>


                                          <div class="input-container">
                                                <i class="fa fa-envelope icon"></i>
                                                <input class="input-field" type="text" placeholder="E-mail" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                                          </div>

                                          <p>
                                                <font color="grey">Your Message</font>
                                          </p>
                                          <input class="message" name="message" type="message" />




                                          <br> <button type="submit" class="btn">Send</button>
                                    </form>
                              </div>
                              @foreach($viewoverall1 as $viewoverall1)
                              <div class="column">
                                    <p><b>Address</b><br>
                                          <font color="black">{{$viewoverall1->Address}}</font><br><br>
                                          <b>Phone</b><br>
                                          <font color="black">{{$viewoverall1->Phone}}</font><br><br>
                                          <b>Email</b><br>
                                          <font color="black">{{$viewoverall1->Email}}</font><br>


                                    </p>
                              </div>
                              @endforeach
                        </div>
                  </div>


            </div>
            <footer class="contactfooter">
                  <div align="center">
                        <a href="#" class="fa fa-facebook"></a>
                        <a href="#" class="fa fa-linkedin"></a>
                        <a href="#" class="fa fa-instagram"></a>
                  </div>

                  <p><b>
                              <font color="black" size="6px">Aditee D Dakhane</font>
                        </b><br>
                        <font size="2.5px">&copy; Aditee D Dakhane CV.All rights reserved.<br>Design -DiazApps</font>
                  </p>

            </footer>

      </div>

      <!-----------------------------------------------LOGIN----------------------------------------------------->
      <!--SITE REFERRED FOR THIS SECTION:https://www.w3schools.com/howto/tryit.asp?filename=tryhow_css_login_form_modal-->
      <div id="id01" class="modal">

            <form class="modal-content animate" action="/login" method="post">
            <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>"> 
                  <div class="cross">
                        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                  </div>
                  <div class="loginheading">
                        <h2>Log in</h2>
                  </div>
                  <div class="container">
                        <label for="uname">User:</label>
                        <input type="text" name="uname" required>
                  </div>
                  <div class="container1">
                        <label for="psw">Password:</label>
                        <input type="password" name="psw" required>

                  </div>
                  <div class="loginbuttons">
                        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Close</button>
                        <button type="submit">Get in</button>
                  </div>
            </form>        
      </div>
      <!-----------------------------------------------------SIGNUP------------------------------------------------------>
      <!--SITE REFERRED FOR THIS SECTION:https://www.w3schools.com/howto/tryit.asp?filename=tryhow_css_login_form_modal-->
      <div id="id02" class="modal">

            <form class="modal-contentsignup animate" method="post" onSubmit="return validate();" action="/signup">
            <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">      
            <div class="cross">
                        <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
                  </div>
                  <div class="loginheading">
                        <h2>Sign Up</h2>
                  </div>
                  <div class="containername">
                        <label for="name">Name:</label>
                        <input type="text" name="name" pattern="[A-Za-z ]{1,25}" required>
                  </div>
                  <div class="containeremail">
                        <label for="email">Email:</label>
                        <input type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>

                  </div>
                  <div class="container">
                        <label for="uname">User:</label>
                        <input type="text" name="uname" required>
                  </div>
                  <div class="container1">
                        <label for="psw">Password:</label>
                        <input type="password" id="password" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>

                  </div>
                  <div class="containerconfirmpwd">
                        <label for="psw">Confirm Password:</label>
                        <input type="password" id="confirm_password" name="confirmpsw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>

                  </div>
                  <div class="loginbuttons">
                        <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Close</button>
                        <button type="submit" name="submit">Get in</button>
                  </div>
            </form>
           
      </div>


</body>

</html>