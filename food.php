<?php
include "navbar.php";

  if(isset($_SESSION["useruid"])){
    ?>
<section>
  <div class="container-fluid">
    <div class="row jumbotron" id="food">
      <div class="col-xs-12">
        <h1>What should I eat</h1>
          <h1 class="lead">Unfortunately <?php echo $_SESSION["useruid"] ?>, we cannot tell you what is right for you as it is often specific to each person. We do provide plenty of general information which should help you make an informed decision when it comes to eating right</h1>
            <h4  id="warning">*We are not medical experts this page is a guide only, the advice we give is from developers research</h4>
      </div>
    </div>
  </div>
</section>
<div class="container-fluid">
  <div class="row padding ">
    <div class="col-lg-6">
      <h2>Macronutrients (Macros)</h2>
        <hr id="indexhr">
          <p class="lead">What are macros and how can they help you? </p>
            <p class="lead">There's three categories of nutrients you eat the most to get energy:
              <ul class="lead">
                <li>Protein</li>
                <li>Carbohydrates</li>
                <li>Fats</li>
              </ul>
                <p class="lead">When you're counting macros it's the grams of proteins, carbs and fat that you're consuming</p>
                <h3>Calories Still Matter</h3>
                <p class="lead">It is comparable to counting calories but takes it a step further by allowing it to be more flexible than focusing on just calories. However, calories still matter the idea is it shows how calories are not all made equal.</p>
                <p class="lead">For example, let’s say you have a calorie goal of 2,000 a day. One gram of protein is 4 calories. So if you eat 125 g of protein, you’re eating 500 calories from protein, leaving you 1,500 calories to split between your fat and carbs.</p>
                <p class="lead">Calculate your macros here</p>
                  <a href="https://www.calculator.net/macro-calculator.html" target="_blank"><button class="btn btn-danger col-sm-12 col-lg-6 col-xl-3 mb-3">Macros</button></a>   
    </div>
    <div class="col-lg-6">
      <img src="img/food/macro.jpg" class="img-fluid">
    </div>
  </div>
</div>
<div class="container-fluid">
  <h1>This video might help</h1>
    <div class="video-container">
      <iframe width="1280" height="720" src="https://www.youtube.com/embed/7HXkkanqPKA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</div>
<?php }  
  else{?>
    <section>
      <div class="container-fluid">
        <div class="row jumbotron">
          <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
            <h1>Food</h1>
              <p class="lead">We won't tell you what to eat, instead we try to provide information which will help you inform your decision on what you want to eat.</p>
                <h4 id="warning">*We are not medical experts this page is a guide only, the advice we give is from developers research</h4>
          </div>
        </div>
      </div>
    </section>
<div class="container-fluid">
  <div class="row padding ">
    <div class="col-lg-6">
      <h2>Macronutrients (Macros)</h2>
        <hr id="indexhr">
        <p class="lead">What are macros and how can they help you? </p>
        <p>There's three categories of nutrients you eat the most to get energy:</p>
        <ul>
          <li>Protein</li>
          <li>Carbohydrates</li>
          <li>Fats</li>
        </ul> 
        <p>When you're counting macros it's the grams of proteins, carbs and fat that you're consuming</p>
        <h3>Calories Still Matter</h3>
        <p>It is comparable to counting calories but takes it a step further by allowing it to be more flexible than focusing on just calories. However, calories still matter the idea is it shows how calories are not all made equal.</p>

        <p>For example, let’s say you have a calorie goal of 2,000 a day. One gram of protein is 4 calories. So if you eat 125 g of protein, you’re eating 500 calories from protein, leaving you 1,500 calories to split between your fat and carbs.</p>
        <p>Sign up to calculate your macros</p>
        <a href="#"><button class="btn btn-warning col-sm-12 col-lg-6 col-xl-3 mb-3" data-toggle="modal" data-target="#signupModal">Sign Up</button></a>   
    </div>
    <div class="col-lg-6">
      <img src="img/food/macro.jpg" class="img-fluid">
    </div>
  </div>
</div>
<div class="container-fluid">
  <h1>This video might help</h1>
    <div class="video-container">
      <iframe width="1280" height="720" src="https://www.youtube.com/embed/7HXkkanqPKA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</div>
<?php
  }
  ?> 
    
<hr>
<?php
include "footer.php";
?>
