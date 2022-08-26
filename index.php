<?php
include "navbar.php";

   if(isset($_SESSION["useruid"])){
    ?>
<div class="container-fluid">
  <div class="row jumbotron">
    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
      <h1>Hello <?php echo $_SESSION["useruid"] ?>, hope you are doing well today</h1>
      <p>Visit the <a href="profile.php">profile page</a> to update your levels at any time!</p> 
    </div>
  </div>
</div>
<div class="container-fluid padding">
  <div class="row padding ">
    <div class="col-lg-6">
      <h2>Make sure to stay hydrated!</h2>
      <hr id="indexhr">
      <p></p>
      <p>Is it an exercise day? If so head over <a href="recommended.php">there</a> when you're ready to get started.</p>
      <p>Remember the warm up and workout videos can be found below!</p>   
      <p>Visit the <a href="help.php">help</a> page for any questions you might have.</p>
    </div>
    <div class="col-lg-6">
      <img src="img/index/water.webp" class="img-fluid">
    </div>
  </div>
</div>
<hr>

<div class="container-fluid padding">
  <div class="row welcome text-center">
    <div class="col-12">
        <h1 class="display-4">Warm Up Playlist</h1>
        <p class="lead">This is for the recommended routine make sure to that page first!</p>
        <a href="recommended.php"><button class="btn btn-danger">Recommended Routine</button></a>
        <hr>
        <div class="col-12">
          <h1 class="lead">The next video will auto play, click the top right menu to chose the next video sooner</h1>
          <hr>
        </div>
    </div>
  </div>
</div>
<div class="video-container">
<iframe width="1280" height="720" src="https://www.youtube.com/embed/Vwn5hSf3WEg?list=PLmWNDnDz25oIkLrhIYES4OmrlHqtocNQG" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>

  <div class="container-fluid padding">
  <div class="row welcome text-center">
    <div class="col-12">
        <h1 class="display-4">Workout Playlist</h1>
        <hr>
        <div class="col-12">
          <h1 class="lead">This playlist covers all the exercises in their basic form, you may need to find your own for the advanced exercises.</h1>
          <hr>
        </div>
    </div>
  </div>
</div>
  <div class="video-container">
  <iframe width="1280" height="720" src="https://www.youtube.com/embed/aclHkVaku9U?list=PLmWNDnDz25oKbIsGexuge2uvvRVSQaHPI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>
<?php
   }  
   else{
     ?>
<div class="container-fluid">
  <div class="row jumbotron">
    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
      <h1>Sign-Up for more access</h1>
      <p class="lead">Welcome to the Validus fitness application. Validus is latin for Strong, Mighty Powerful this perfectly reflects our aim for our users. We understand that being strong translates into a healthy body which provides you with a great foundation to enjoy more hobbies and in many cases improving your mental health. Many studies link good physical heath with a stronger mind. </p>
        
    </div>
  </div>
</div>
    
<div class="container-fluid" >
  <div class="row" id="colour">
    <div class="col-lg-6">
      <h1 >What to expect from us?</h1>
        <hr id="indexhr">
      <h1 class="lead">Our goal is to make sure you can enjoy life to the full, we understand that not everyone wants to spend hours and hours of their day/week dedicated to fitness. </h1>
      <h1 class="lead">Instead we have created a workout routine that will work to your level and guarantee progress over time, the main component to any fitness journey is understanding that it will take a long time to notice significant progress.</h1>
      <h2>What we Offer?</h2>
        <hr id="indexhr">
<h1 class="lead">We have provided a comprehensive workout routine that focuses on bodyweight resistance training. We also provided sources to many alternative exercises including yoga, hiking and running</h1>
</div>
    <div class="col-lg-6">
      <img src="img/index/time.jpg" class="img-fluid">
    </div>
  </div>
</div>
<hr>

<div class="container-fluid padding">
  <div class="row welcome text-center">
    <div class="col-12">
        <h1 class="display-4">Helping to improve your body and mind </h1>
        <hr>
        <div class="col-12">
          <h1 class="lead">Explore our features</h1>
        </div>
    </div>
  </div>
</div>

<div class="container-fluid padding">
  <div class="row padding">
    <div class="col-md-6 col-lg-4">
      <div class="card">
        <img class="card-imd-top" id="index-img" src="img/index/index1.webp">
          <div class="card-body">
            <h4 class="card-title">Exercises</h4>
            <p class="card-text">Find out the best exercises for your level</p>
            <a href="exercise.php" id="bottom" class="btn btn-outline-info">Find out more</a>
          </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-4">
      <div class="card">
        <img class="card-imd-top" id="index-img" src="img/index/index2.jpg">
          <div class="card-body">
            <h4 class="card-title">Food</h4>
            <p class="card-text"> A diet isn't always the best option, in fact focusing too much on cutting out foods can be shown to demotivate new comers which we not looking to do</p>
            <a href="food.php" id="bottom" class=" btn btn-outline-info">Find out more</a>
          </div>
      </div>
    </div>
    <div class="col-md-12 col-lg-4">
      <div class="card">
        <img class="card-imd-top" id="index-img" src="img/index/index3.png">
          <div class="card-body">
            <h4 class="card-title">What is Validus?</h4>
            <p class="card-text">Learn more about this site and its purpose, from the idea to the creation</p>
            <a href="help.php" id="bottom" class="btn btn-outline-info"> Find out more</a>
          </div>
      </div>
  </div>
</div>
</div>


<hr>

<?php
}
?> 
<hr>
<?php
include "footer.php";
?>
