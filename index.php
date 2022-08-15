
<?php
include("connection.php");
$sql = "select * from crudtable";

$query = $conn->query($sql);


if($query->num_rows > 0){


		while($result = $query->fetch_assoc()){
		
		// echo $result["phone"]."----".$result["pan"]."----".$result["name"]."----".$result["email"]."---".$result["created_at"]."<br>";
		
		}

}else{

echo "No data found";

}


?>












<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="./style.css" />
    <title>Company X interview task</title>
  </head>
  <body>
    <div class="global-container">
      <header class="nav">
        <div class="dp"></div>
        <h2>School name</h2>
      </header>

      <div class="label">
        <div class="person-logo">
          <img src="./images/sigmund-MQ2xYBHImKM-unsplash--1--1.jpg" alt="" />
        </div>
        <div class="person-details">
          <h3>Jessica John jones</h3>
          <p><i class="fas fa-trophy"></i> F51 Garcia</p>
        </div>
      </div>
      <div class="card">
        <div class="card-line1">
          <h2>
            Now pay your <br />
            fee motnhly with @
          </h2>
          <i class="fas fa-star"></i>
        </div>
        <div class="card-line2">
          <h1>0%</h1>
          <p>Interest <br />pre-approved credit line</p>
        </div>
        <div class="card-line3">
          
          <button class="card-button">Sign Up</button>
          <button class="card-button outsidelogin">Login</button>
          <button class="card-button outsideupdate">Update</button>
        </div>
        <div class="card-img">
          <img
            src="./images/intro-section-illustration.png"
            alt="video illustration"
            class="image-fluid"
          />
          </div>
          <?php if(isset($_REQUEST['message'])){
              
              		
              if($_REQUEST['message'] == "success"){
              
              
              echo "<h4 style='color:green'>form subitted successfully</h4>";
              
              
              }else{
              
              
              echo "Something went wrong";
              
              
              }
          
          }
          
          ?>
      </div>
      <!-- Form -->
      <!-- Sign Up -->
      <div class="form-wrapper">
        <form  action="registeractiontwo.php" method="GET" class="actual-form">
          <div class="form-title">
            <h2>Enter your details below</h2>
            <button class="closebody">
              <i class="fas fa-close close"></i>
            </button>
          </div>
          <div class="form-line1">
            <label for="ph-number">Phone Number</label>
            <input
              type="text" name="phone"
              id="ph-number"
              class="phonenumber"
              placeholder="enter mobile number"
            />
            <span class="number-error"></span>
          </div>
          <div class="form-line2">
            <label for="pan-number">PAN Card Number</label>
            <input
              type="text" name="pan"
              id="pan-number"
              class="pancard"
              placeholder="enter PAN"
            />
          </div>
          <div class="form-line3">
            <label for="pan-name">Name as in PAN Card</label>
            <input
              type="text" name="name"
              id="pan-name"
              class="panname"
              placeholder="Enter Name"
            />
          </div>
          <div class="form-line4">
            <label for="email-id">Email</label>
            <input
              type="email"
              id="email-id"
              class="email"
              placeholder="Enter your mail" name="email"
            />
            <span class="email-error"></span>
          </div>
          <div class="form-line5">
            <label for="password">Password</label>
            <input
              type="varchar"
              name="password"
              id="password"
              class="panname"
              placeholder="Enter password"
            />
          </div>
          
          <div class="form-button">
            <button class="cancel">Cancel</button>
            <button class="activate" type="submit" name="submit" value="submit">Create an Account</button>
          </div>
        </form>
      </div>
    </div>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js"
      integrity="sha512-6PM0qYu5KExuNcKt5bURAoT6KCThUmHRewN3zUFNaoI6Di7XJPTMoT6K0nsagZKk2OB4L7E3q1uQKHNHd4stIQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <script src="app.js"></script>
  </body>
</html>
