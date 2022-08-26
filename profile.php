<?php
include_once "navbar.php";
include "hidden/functions.hdn.php"; // calling functions
include 'hidden/dbh.hdn.php'; //connection file

$pairs = GetLevels($conn, $_SESSION['username']); //fetching user details, function retrieves the level

$xp = 0;

//hints section
$pairNames = array("Squat", "Pull-up", "Hinge", "Dip", "Push-up", "Row");
$pairIntegers = array();//hints array

for($i = 0; $i < 3; $i++) // looping through the three pairs
  for($j = 0; $j < 2; $j++) // select individual levels per pair
  {
    // "35", "12", "21"
    // 3+5 = 8, 8 + 1 + 2 = 11, 11 + 2 + 1 = 14

    // using intval to convert string to integer
    // i is counting the pairs value, then j is separating each value and adding them to the xp variable. 
    $xp += intval($pairs[$i][$j]); 
    // storing each pair digit as integer into an array
    array_push($pairIntegers, intval($pairs[$i][$j])); 
    // "35" => (3, 5), "12" => (3, 5, 1, 2), "21" => (3, 5, 1, 2, 2, 1)
  }



$name = $_SESSION['username']; //Logged in username is assigned to name variable

/* the xp determines the user level,
   this is done by calculating the percentage of the progressions.
   Examples:
   Level 2 (50%) and Level 3 (50%) is Level 3 with 15 experience points.
   Level 2 (33%) and Level 3 (67%) is Level 3 with 16 experience points.
   the level is increased once the user reaches 50% or more of the higher level.
*/

if($xp >= 27) {$lvl = 5;}
else if ($xp >= 21) {$lvl=4;} 
else if ($xp >= 15) {$lvl=3;} 
else if ($xp >= 9) {$lvl=2;} 
else if ($xp >= 6) {$lvl=1;} 
else {$lvl=0;} 

//the images have been placed into an array and assigned to the badges variable
$badges = array("0.png", "1.png", "2.png", "3.png", "4.png", "5.png");
$img = array();
//the loop checks user level and allocates the appropriate badge in the img variable
for($i = 0; $i < 6; $i++)
{
  if(0 == $lvl)
  {
    array_push($img, "img/profile/badges/".$badges[$i]);
    break;
  }

  if($i != 0 && $i <= $lvl)
    array_push($img, "img/profile/badges/".$badges[$i]); 
}

// displays the information
echo"
<div class='container-fluid'>
        <div class='row jumbotron'>
          <div class='col-sm-12'>
          <h1>Your Badge Collection</h1>
          <hr id='indexhr'>";
            for($i = 0; $i < count($img); $i++)
              echo "<img src='".$img[$i]."' id='badge' class='image-fluid''/>";
echo " <hr>
          <button class='btn btn-success col-sm-12'>Congratulations $name you are level $lvl with $xp experience points</button>
        </div>
        </div>
        </div>
";
?>
</div>
<hr>  
<div class="container-fluid">

  <h1>Please Enter Your Current Levels</h1>
    <p>This can be updated any time</p>
      <form action="hidden/level.hdn.php" method="POST">
        <div class="form-row"> 
            <label for="p1-1" class="col-sm-12 col-lg-1 col-form-label">Pair 1:</label>
                <div class="col-md-12 col-lg-3">
                  <select name="p1-1" class="form-control is-valid" required>
                    <option value="" selected disabled hidden>Squat Progression</option>
                    <option value="1">Level 1: Assisted squat</option>
                    <option value="2">Level 2: Squat</option>
                    <option value="3">Level 3: Bulgarian Split Squat</option>
                    <option value="4">Level 4: Beginner Shrimp Squat</option>
                    <option value="5">Level 5: Intermediate Shrimp Squat</option>            
                  </select>
                </div>         
              <div class="form-group col-md-12 col-lg-3">
                <select name="p1-2" class="form-control is-valid" required>
                  <option value="" selected disabled hidden>Pull-up Progression</option>
                  <option value="1">Level 1: Scapular Pulls</option>
                  <option value="2">Level 2: Arch Hangs</option>
                  <option value="3">Level 3: Negative Pull-ups</option>
                  <option value="4">Level 4: Pull-ups</option>
                  <option value="5">Level 5: Weighted Pull-ups</option>              
                </select>
              </div>
        </div>
      <!--Pair 2-->
        <div class="form-row"> 
              <label for="weight" class="col-sm-12 col-lg-1 col-form-label">Pair 2:</label>
                  <div class="col-md-12 col-lg-3">
                    <select name="p2-1" class="form-control is-valid" required>
                      <option value="" selected disabled hidden> Hinge Progression</option>
                      <option value="1">Level 1: Romanian Deadlift</option>
                      <option value="2">Level 2: Single Legged Deadlift</option>
                      <option value="3">Level 3: Banded Nordic Curl Negatives</option>
                      <option value="4">Level 4: Banded Nordic Curl</option>
                      <option value="5">Level 5: Nordic Curl</option>            
                    </select>
                  </div>         
              <div class="form-group col-md-12 col-lg-3">
                <select name="p2-2" class="form-control is-valid" required>
                  <option value="" selected disabled hidden>Dips Progression</option>
                  <option value="1">Level 1: Parallel Bar Support Hold</option>
                  <option value="2">Level 2: Negative Dips</option>
                  <option value="3">Level 3: Parallel Bar Dips</option>
                  <option value="4">Level 4: Weighted Dips</option>            
                </select>
              </div>
        </div>
        <!--Pair 3-->
        <div class="form-row"> 
          <label for="p3-1" class="col-sm-12 col-lg-1 col-form-label">Pair 3:</label>
            <div class="col-md-12 col-lg-3">
              <select name="p3-1" class="form-control is-valid" required>
              <option value="" selected disabled hidden>Push-up Progression</option>
              <option value="1">Level 1: Vertical Push-up</option>
              <option value="2">Level 2: Incline Push-up</option>
              <option value="3">Level 3: Full Push-up</option>
              <option value="4">Level 4: Diamond Push-up</option>
              <option value="5">Level 5: Pseudo Planche Push-up</option>            
</select>
            </div>         
        <div class="form-group col-md-12 col-lg-3">
        <select name="p3-2" class="form-control is-valid" required>
          <option value="" selected disabled hidden>Row Progression</option>
          <option value="1">Level 1: Vertical Rows</option>
          <option value="2">Level 2: Incline Rows</option>
          <option value="3">Level 3: Horizontal Rows</option>
          <option value="4">	Level 4: Wide Rows</option>      
          <option value="5">	Level 5: Weighted Inverted Rows</option>           
</select>
        </div>
  </div>
      <hr>
        <button type-="submit" class="btn btn-info col-md-12 col-lg-7" name="submit" id="goals-btn" class="form-control">Submit Levels</button>              
        <hr>                  
        </form>
    </div>

</div>
<?php
?>


<?
/*
for($i = 0; $i < count($pairIntegers); $i++)
{
  echo "<h1>Pair ";
  if($i == 0) echo "One";
  if($i == 2) echo "Two";
  if($i == 4) echo "Three";
  echo "</h1>";

  if($pairIntegers[$i] == $pairIntegers[$i + 1])
    echo "<p>The ".$pairNames[$i]." Progression is looking stronger than ".$pairNames[$i + 1]." Progression.</p><p>Make sure each movement is being done in an 1,0,X,O tempo <a href='help.php' target='#q4'>learn more</a>.</p> <p>Keep it up your ".$pairNames[$i + 1]."'s will improve over time</p>";

  else if($pairIntegers[$i] == $pairIntegers[$i + 1])
  {
    echo $pairNames[$i]." Progression and ".$pairNames[$i + 1]." Progression looking good.";
    if($lvl != 5)
      echo " (Tip: Push to next level)";
  }
  
  else
    echo $pairNames[$i]." Progression are better than ".$pairNames[$i+1]." Progression (Tip: Work on ".$pairNames[$i+1].")";

    // without (0, 1) -> (1, 2) -> (2, 3) -> (3, 4) -> (4, 5)
  $i++; // ending the pair (0, 1) -> (2, 3) -> (4, 5)
}
*/

include "footer.php";