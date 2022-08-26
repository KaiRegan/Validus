<?php
include "navbar.php";

   if(isset($_SESSION["useruid"])){
      ?>
<section>
  <div class="container-fluid">
    <div class="row jumbotron" id="food">
      <div class="col-xs-12">
        <h1>Losing Weight</h1>
        <p class="lead">So <?php echo $_SESSION["useruid"] ?>, do you want to lose weight? </p>
        <p class="lead">Well it is important to understand that weight loss should not be rushed, 0.5-2 pounds per week is the recommended range. That means to lose 28lbs or 2 stone will take between 56-14 weeks (1 year and 2 weeks - 3 months and 2 weeks ) </p>
        <h4  id="warning">*We are not medical experts this page is a guide only, the advice we give is from developers research</h4>
      </div>
    </div>
  </div>
</section>
<?php
    }else{?>
<div class="container-fluid">
  <div class="row jumbotron" id="food">
    <div class="col-xs-12">
      <h1>Losing Weight</h1>
      <p class="lead">So do you want to lose weight? </p>
      <p class="lead">Well it is important to understand that weight loss should not be rushed, 0.5 - 2 pounds per week is the recommended range. That means to lose 28lbs or 2 stone will take between 56-14 weeks (1 year and 2 weeks - 3 months and 2 weeks ) </p>
      <h4  id="warning">*We are not medical experts this page is a guide only, the advice we give is from developers research</h4>
    </div>
  </div>
</div>

<?php
}
?>
<hr>

<div class="container-fluid">
    <div class="row padding ">
      <div class="col-lg-6">
        <h1>Realistic Goals</h1>
        <hr id="indexhr">
        <p class="lead">The reason we want to tell you in layman's terms how long weight loss takes is because most 'fad' diets will promise fast results. These are often unrealistic and cause long term damage as they are so damanding people will fall back to their old habits. </p>
        <p class="lead"> A BBC article explains this further if you are interested click <a href="https://www.bbc.co.uk/news/health-14882832" target="_blank">here</a>. </p>
        <h1>Don't Worry!</h1>
        <p class="lead">We might be coming across very negative, we can promise that weight loss is achievable but we want to make sure you're aware of the realistic time scale. If you follow the <a href="recommended.php">recommended routine</a> you will start to notice results after 4 weeks and people should start noticing results after 12 weeks (3 months) provided your diet is in check!</p>
      </div>
      <div class="col-lg-6">
        <img src="img/food/real.png" class="img-fluid">
      </div>
    </div>
  </div>
<div class="container-fluid padding">
  <div class="row welcome text-center">
    <div class="col-12">
      <h1 class="display-4">Diet Diet Diet...</h1>
      <hr>
    </div>
  </div>
</div>

<div class="container-fluid padding">
  <div class="row padding ">
    <div class="col-lg-6">
      <h2>So whats my diet?</h2>
      <p class="lead">Diets are a little more tricky than workouts, there's so many variables that come into play.</p>
      <p class="lead">What we offer is information that can help inform what you should look to eat but important to remember it can vary from person to person. </p>
    </div>
    <div class="col-lg-6">
      <h2>Calories in vs calories out</h2>
      <p class="lead">We can confidently say that calories going in have to be less than the calories out, this has been evidenced in many trials. However calories are not a perfect measurement check out our <a href="food.php">macro's</a> page to learn more about calorie intake.</p>
      <p class="lead">Our workouts will only work if diet and sleep is in check. Check out <a href="https://www.purewow.com/food/macro-meal-prep-recipes">this list</a> of easy meals for achieving your daily macros. </p>
    </div>
  </div>
</div>

<?php
include "footer.php";
?>
