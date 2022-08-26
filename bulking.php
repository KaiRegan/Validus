<?php
include "navbar.php";
 
   if(isset($_SESSION["useruid"])){
?>
<section>
<div class="container-fluid">
  <div class="row jumbotron" id="food">
      <div class="col-xs-12">
        <h1>Bulking </h1>
        <p class="lead">So <?php echo $_SESSION["useruid"] ?>, ready to make some gains!</p>
        <p class="lead">Well it is important to understand that just like weight loss when bulking you should not rush the process, 0.5-2 pounds per week is the recommended range. That means to gain 28lbs or 2 stone will take between 56-14 weeks (1 year and 2 weeks - 3 months and 2 weeks ) </p>
        <h4  id="warning">*We are not medical experts this page is a guide only, the advice we give is from developers research</h4>
      </div>
  </div>
</div>
<div class="container-fluid">
  <div class="row padding ">
    <div class="col-lg-6">
      <h1>Realistic Goals</h1>
      <hr id="indexhr">
      <p class="lead">A realistic goal could be 1 pound per week but remeber this won't be all muscle as long as you have a healthy balanced diet and follow our If you follow the <a href="recommended.php">recommended routine</a> you will start to notice results after 4 weeks and people should start noticing results after 12 weeks (3 months) provided your diet is in check!</p>
    </div>
    <div class="col-lg-6">
      <img src="img/food/real.png" class="img-fluid">
    </div>
  </div>
</div>
</section>
    <?php
    }
    else {?>
<div class="container-fluid">
  <div class="row jumbotron" id="food">
      <div class="col-xs-12">
        <h1>Bulking </h1>
        <p class="lead">So are you ready to make crazy some gains!</p>
        <p class="lead">Well it is important to understand that just like weight loss when bulking you should not rush the process, 0.5-2 pounds per week is the recommended range. That means to gain 28lbs or 2 stone will take between 56-14 weeks (1 year and 2 weeks - 3 months and 2 weeks ) </p>
        <h4  id="warning">*We are not medical experts this page is a guide only, the advice we give is from developers research</h4>
      </div>
  </div>
</div>
<?php
}
?>
<hr>

<div class="container-fluid padding">
  <div class="row welcome text-center">
    <div class="col-12">
      <h1 class="display-4">Eat Eat Eat...</h1>
<hr>
    </div>
  </div>
</div>

<div class="container-fluid padding">
  <div class="row padding ">
    <div class="col-lg-6">
      <h2>So how do I get big?</h2>
      <p class="lead">If you are looking to put on weight you're not eating enough. While it's important to understand healthy vs unhealthy calories especially fats. You need to start eating a minimum of three full meals per day to see results.</p>
      <p class="lead">What we offer is information that can help inform what you should look to eat but it is important to remember this can vary from person to person. </p>
    </div>
    <div class="col-lg-6">
      <h2>Clean foods vs dirty foods</h2>
      <p class="lead">A rule of thumb is 80% of your diet should be clean foods (veg, leafy greens, whole grains, lean protein and full fats) and 20% can be 'dirty foods' like donuts, milkshakes or a personal favorite cheese cake.  </p>
      <p class="lead">Our workouts will only work if diet and sleep is in check. Check out the <a href="recommended.php">recommended routine</a> to know where to start with exercises. </p>
    </div>
</div>

<div class="container-fluid padding">
  <div class="row welcome text-center">
    <div class="col-12">
      <h1 class="display-4">Meal Prep</h1>
<hr>
  </div>
</div>

<div class="container-fluid padding">
    <div class="row padding ">
      <div class="col-lg-6">
        <h2>Breakfast</h2>
        <div class="video-container">
          <iframe width="1280" height="720" src="https://www.youtube.com/embed/ZcYM6Dfh4oY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </diV>
      <div class="col-lg-6">
        <h2>Lunch and Supper</h2>
          <div class="video-container">
            <iframe width="1280" height="720" src="https://www.youtube.com/embed/xsdzaovXoWo?list=PLmWNDnDz25oIT5B9hT9W-CU5hbEYYtwXl" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
      </div>
    </div>
</div>
</div>
</div>
<hr>

<?
include "footer.php";
?>
