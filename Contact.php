<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <style type="text/css">
    
nav {
width:450px;
margin:0 auto;
list-style:none;
}
nav li {
float:left;
}
nav a {
display:block;
text-align:center;
width:150px; /* fixed width */
text-decoration:none; 
}
    

/* mouse over link */
a:hover {
    color: red;
}

  </style>
</head>
<body>

<br>
<p align="center" style="font-size:20px;">PRIYANSHI YADAV</p>
<div align="center">
<nav class="navbar  ">
<div class="container" style=" width: 500px;">
<div class="row">
<div class="col-md-12">

<ul class="nav nav-pills">
  <li ><a href="Home.php"> Home</a></li>
  <li ><a href="About.php"> About Me</a></li>
  <li class="active"><a href="Contact.php"> Contact Me</a></li>
  </ul>


  




</div>
</div>
  
</div>
</nav>
</div>

    <div class="container">
      <div class="row">

        
      </div><!-- .row -->

      <div >

        <div class="col-sm-6 col-sm-offset-3" class="row">
          <div class="jumbotron" style="margin-top: 20px;">
           <p style="color: red; font-size: 16px; ">
          <?php

 
  
          <form id="contact-form" role="form" action="sm.php" method="POST">
            <div >
              <div >
                <label >Name</label>
                <input type="text" id="c_name" class="form-control" name="c_name" placeholder="Name">
              </div>

              <div >
                <label >Email</label>
                <input type="email" id="c_email" class="form-control" name="c_email" placeholder="E-mail">
              </div>

              <div >
              <label >Message</label>
                <textarea class="form-control" id="c_message" name="message" rows="7" placeholder="Message"></textarea>
              </div></p>

              <button type="submit" name="sub" class="btn-danger btn-lg btn-block wow fadeInUp" >Send Message</button>
            </div>
            
          </form>
          </div>
        </div>

      </div> 
      
      </div>

</body>
</html>
