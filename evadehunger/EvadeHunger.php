<html>
<head>
    <title>Evade Hunger</title>
    

    <style>

        body{
    width: 100%;
    height: 100vh;
    margin:0;
    background-color: #18181d;
    color: #f5f6f7;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 20px;
}
.donate {
    background-color: #1c1c2581;
    overflow: hidden;
  }
  .donate:hover {
    background-color: #ddd;
    color: black;
  }

  .topnav a {
    float: right;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
  }

  .topnav a:hover {
    background-color: #ddd;
    color: black;
  }

  .topnav a.active {
    background-color: #04AA6D;
    color: white;
  }
  * {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}
/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
h1,h4,p{
    margin: 1em auto;
    text-align: center;
}
form{
    width: 60vw;
    max-width: 500px;
    min-width: 300px;
    margin: 0 auto;
    padding-bottom: 2em;
}
fieldset{
    border: none;
    padding: 2rem 0 ;
}
label{
    display: block;
    margin:0.5rem 0 ;
}
input, textarea{
    background-color: #1c1c2581;
    color: #ffffff;
    border: 0px solid #1e1e60;
}
fieldset:not(:last-of-type) {
    border-bottom: 3px solid #3b3b4f;
  }

  input,
textarea,
select {
  margin: 20px 0 0 0;
	width: 120%;
  min-height: 3em;
}

.inline{
    width: unset;
    margin: 0 0.5em 0 0;
    vertical-align: middle;
}
input[type="submit"] {
    display: block;
    width: 60%;
    margin: 1em auto;
    height: 2em;
    font-size: 1.1rem;
    background-color: #1c1c25;
    border-color: white;
    min-width: 300px;
  }

  input[type="file"] {
    padding: 1px 2px;
  }
  .about{
width: 80%;
margin-left: 10%;
font-size: medium;
border: 1px ;
padding:20px;
border-radius: 1%;
border-radius: 1%;
background-color: #1c1c25;
  }
  .about2{
width: 30%;
margin-left: 35%;
font-size:medium;
border: 2px;
padding:5px;
border-radius: 1%;
background-color: #1c1c25;
  }


  table.scroll {
    /* width: 100%; */ /* Optional */
    /* border-collapse: collapse; */
    border-spacing: 5px;

  border: 2px solid black;
}

table.scroll tbody,
table.scroll thead { display: block; }

thead tr th {
    height: 30px;
    width: auto;
    line-height: 30px;
    text-align: center;
}

table.scroll tbody {
    height: 150px;
    overflow-y: auto;
    overflow-x: hidden;
    text-align: center;
}

tbody { border-top: 2px solid black; }

tbody td, thead th {
 width: 20%;
    border-right: 1px solid black;
    /* white-space: nowrap; */
}

tbody td:last-child, thead th:last-child {
    border-right: none;
}

    </style>
</head>



<body style="border: #04AA6D;">
 
<div class="topnav">
    <a href="#home">Home</a>
    <a href="#abt">About</a>
    <a href="#contact">Contact</a>
    <a href="#frm">Volunteer</a>
    <h1>EVADE HUNGER</h1>

</div>
<br><br><br>
<div class="slideshow-container" id="home">

    <div class="mySlides fade">
        <img src="https://g-gourav-r.github.io/webopenended/img/1.png" width="100%" height="600">
    </div>

    <div class="mySlides fade">
        <img src="https://g-gourav-r.github.io/webopenended/img/2.png" style="width:100%">
    </div>

    <div class="mySlides fade">
        <img src="https://g-gourav-r.github.io/webopenended/img/3.png" style="width:100%">
    </div>

</div>


<div style="text-align:center">
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
</div>
<br><br><br>



<thead>
    <h4>Top Donors for today</h4>
    <?php
      include("vol.php");
  ?>

</thead>


<br><br><br>

<div class="about" id="abt">
  <center><h3>ABOUT US</h3></center>
  Evade Hunger is a volunteer based, zero-funds organization that works to get surplus food from restaurants and the community to serve less fortunate people.Our local chapters are run by friends and colleagues, who hope to create a difference in their own unique way. For example, restaurants in the neighbourhood Green Park, will contribute to the homeless of the locality, through volunteers who live in Green Park. Our “Robins” are largely students and young working professionals – everyone does this in their free time. The lesser fortunate sections of society we serve include homeless families, orphanages, patients from public hospitals, and old age homes.
</div>
<br><br><br>

<div class="about" id="abt">
  <center><h3>MAKE A DIFFERENCE</h3></center>
  Each one of us has the capacity to make a difference and help lend a helping hand to the less fortunate around us. Your strong intent to make a difference, can take the form of engaging in campaigns for the betterment of the society, volunteering and working directly with communities, supporting fund raising and monetary contributions to the causes of your choice. Be a part of our endeavour to work for the marginalised.
</div>
<br><br><br>

<h1>EVADE HUNGER</h1><br>
<div class="form" id="frm">
<p>Please fill the details, Our Vols will get in touch with you soon !</p>
<form name="frmContact" class="needs-validation " action="contact.php" method="post">
    <fieldset>
        <label for="Fname">First Name: <input type="text" placeholder="Please enter your First Name" name="fname" id="fname" required> </label>
        <label for="Lname">Last Name: <input type="text" placeholder="Please enter your Last Name" name="lname" id="lname" > </label>
        <label for="mail">Email: <input type="email" placeholder="Please enter your email"name="mail" id="mail" required> </label>
        <label for="tel">Phone Number: <input type="text"   placeholder="Please enter your phone number" required name="pno" id="pno" pattern="{8,12}"> </label>
    </fieldset>
    <fieldset>
        <label for="">Amount of Food to be donated : <input type="text" placeholder="Please enter the count per head"name="donno" id="donno"> </label>
        </label>
        <label for="">Address:
            <textarea name="addr" id="add" cols="30" rows="3" placeholder="Please enter your full address" ></textarea>
        </label>
        <label for="">Pincode: <input type="text" placeholder="Please enter your pincode" name="pcode" id="pcode" required> </label>
    </fieldset>
    <input type="submit" value="Donate" class="donate">
</form>
</div>
<br>
<br>



<hr style="display:grid; background-color: #04AA6D;">

<div id="contact" style="padding-left: 8em;">
    <left><h5>~ get in touch<br><br>
    <a href="https://www.facebook.com"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/51/Facebook_f_logo_%282019%29.svg/2048px-Facebook_f_logo_%282019%29.svg.png" width="60" height="50"></a>
    <a href="https://www.linkedin.com"><img src="https://cdn-icons-png.flaticon.com/512/174/174857.png" width="60" height="50"></a>
    </h5></left>  <!--Change the link-->
    
</div>
<br><br><br>



<script>
                let slideIndex = 0;
                showSlides();

                function showSlides() {
                  let i;
                  let slides = document.getElementsByClassName("mySlides");
                  let dots = document.getElementsByClassName("dot");
                  for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                  }
                  slideIndex++;
                  if (slideIndex > slides.length) {slideIndex = 1}
                  for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                  }
                  slides[slideIndex-1].style.display = "block";
                  dots[slideIndex-1].className += " active";
                  setTimeout(showSlides, 5000);
                }
                </script>
</body>
</html>