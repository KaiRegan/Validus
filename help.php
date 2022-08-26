<?php
include "navbar.php";

if(isset($_SESSION["useruid"])){
    ?>
<div class="container-fluid">
    <div class="row jumbotron">
        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
            <h1>Hello  <?php echo $_SESSION["useruid"] ?>,</h1>
            <p class="lead">let us help you today, below is a list of frequently asked questions. From exercise form to nutrition advice we hope we can find the solution to your question. </p>
            <p class="lead">Can't find what you're looking for? feel free to send me an email.</p>
            <button class="btn btn-outline-info" href="#" data-toggle="modal" data-target="#contact"> Contact</button> 

<div class="modal fade" id="contact" tabindex="-1" role="dialog" aria-labelledby="contact" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <a href="index.php"> <img id="form-logo" src="img/branding/logoForm" alt=""></a>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form action="https://formspree.io/f/mknknrkw" method="POST" id="validus-form">
                <div class="form-group">
                    <label for="name">First Name</label>
                    <input type="text" class="form-control" name="firstname" id="name">
                    <label for="email">Email address</label required>
                    <input type="email" name="email" class="form-control" id="email">
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea class="form-control" name="message" id="message" rows="3"></textarea>
                </div>
                <button class="btn btn-warning" type="submit">Submit</button>
            </form>
            <hr>
                <div id="status"></div>
            </div>
        </div>
    </div>
</div>


<script>
    var form = document.getElementById("validus-form");
    
    async function handleSubmit(event) {
      event.preventDefault();
      var status = document.getElementById("status");
      var data = new FormData(event.target);
      fetch(event.target.action, {
        method: form.method,
        body: data,
        headers: {
            'Accept': 'application/json'
        }
      }).then(response => {
        status.innerHTML = "Thanks for your submission! Check your emails for a response";
        form.reset()
      }).catch(error => {
        status.innerHTML = "Oops! There was a problem submitting your form"
      });
    }
    form.addEventListener("submit", handleSubmit)
</script>


        </div>
    </div>
</div>
    <?php 
    }
    else{ 
        ?>
<div class="container-fluid">
    <div class="row jumbotron">
        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
            <h1>What can we Help You With?</h1>
            <p class="lead">Below are a list of questions our users often have </p>
            <p class="lead">Can't find what you're looking for? feel free to send me an email.</p>
            <button class="btn btn-outline-info" href="#" data-toggle="modal" data-target="#contact"> Contact</button> 

<div class="modal fade" id="contact" tabindex="-1" role="dialog" aria-labelledby="contact" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <a href="index.php"> <img id="form-logo" src="img/branding/logoForm" alt=""></a>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form action="https://formspree.io/f/mknknrkw" method="POST" id="validus-form">
                <div class="form-group">
                    <label for="name">First Name</label>
                    <input type="text" class="form-control" name="firstname" id="name">
                    <label for="email">Email address</label required>
                    <input type="email" name="email" class="form-control" id="email">
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea class="form-control" name="message" id="message" rows="3"></textarea>
                </div>
                <button class="btn btn-warning" type="submit">Submit</button>
            </form>
            <hr>
                            <div id="status"></div>
            </div>
        </div>
    </div>
</div>


<script>
    var form = document.getElementById("validus-form");
    
    async function handleSubmit(event) {
      event.preventDefault();
      var status = document.getElementById("status");
      var data = new FormData(event.target);
      fetch(event.target.action, {
        method: form.method,
        body: data,
        headers: {
            'Accept': 'application/json'
        }
      }).then(response => {
        status.innerHTML = "Thanks for your submission!";
        form.reset()
      }).catch(error => {
        status.innerHTML = "Oops! There was a problem submitting your form"
      });
    }
    form.addEventListener("submit", handleSubmit)
</script>

        </div>
    </div>
</div>

<?php
} 
?>
<section>
<div class="container-fluid">
    <h1>Routine Questions & Answers all thanks to <a href="https://www.reddit.com/r/bodyweightfitness/wiki/kb/recommended_routine" target="_blank">r/bodyweightfitness</a></h1>
        <button class="col-lg-12 btn btn-info" data-toggle="collapse" data-target="#q1">What routine should I do?</button>
            <div id="q1" class="collapse">
                <div class="container-fluid padding">
                    <div class="row">
                        <div class="col-sm-12">
                            <ul> 
                                <li>
                                If your goals are strength-based, hypertrophy-based (growing muscle size) or fat loss, do the <a href="recommended.php">Recommended Routine (RR)</a>. Note that diet is a very important factor if you're looking to build muscle and/or lose fat. 
                                </li>
                                <br>
                               
                                <br>
                                <li>
                                If you need a gentler introduction to bodyweight fitness, or a more general routine that will balance strength and skills check out <a href="move.php" target="_blank"></a>Move.</li>
                                <br>
                                <li>
                                If you just want to generally "get fit" or "move more" with minimal time/setup try our <a href="minimalist.php" target="_blank">Minimalist Routine</a>.
                                </li>
                                <br>
                                <li>
                                If you are looking to improve endurance, take a look at the question about improving situp/pushup/pullup numbers below.
                                </li>
                            </ul>
                            <div class="close"> <button class="btn btn-danger" data-toggle="collapse"  data-target="#q1">Close</button><div>                        
                        </div>
                    </div>
                </div> 
            </div>
        </div>
</section>

<section>
<hr>
<div class="container-fluid">
    <h2>I can't do the recommended routine because I have nowhere to do pullups / rows / dips!</h2>
        <button class="col-lg-12 btn btn-info" data-toggle="collapse" data-target="#q2">Check out these useful tips</button>
            <div id="q2" class="collapse">
                <div class="container-fluid padding">
                    <div class="row">
                        <div class="col-sm-12">
                        <br>
                        <ul> 
                            <li>
                            Pull-ups: Seriously, no excuses on this one. There are no alternatives to pullups, and they're very important, so buy a pullup bar, find a tree, or find a staircase with some space under it. You could also get rings and hang them from somewhere (there are many places if you look). One user even adapted the <a href="https://www.reddit.com/r/bodyweightfitness/comments/60q33b/using_the_bed_sheet_method_for_rows_and_pullups/" target="_blank"> "bedsheet" trick intended for rows... for pullups!. This thread by</a> /u/RockRaiders goes over a lot of alternatives you can use. The options are limitless.
                            </li>
                            <br>
                            <li>
                            Rows: You can do incline rows using nothing but a bedsheet and closed door. Check out the video below to see how, it's safe I have used it!
                            </li>
                            <br>
                            <li>
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/rloXYB8M3vU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></li>
                            <br>
                            <li>
                            A stick across two chairs may work as well.
                            </li>
                            <br>
                            <li>
                            You could also get rings.
                            </li>
                            <br>
                            <li>
                            There are a lot of ideas to be found on Reddit <a href="https://www.reddit.com/r/bodyweightfitness/comments/28jm7r/technique_thursday_horizontal_rows_and_pulling/" target="_blank">here</a> and <a href="https://www.reddit.com/r/bodyweightfitness/comments/857cqj/no_idea_where_to_do_pullups_and_rows_here_are/" target="_blank">here</a> one. Be creative.
                            </li>
                            <br>
                            <li>
                            Dips: A counter top which makes a 90 degree angle is suitable, as are the backs of two sturdy chairs, or two boxes next to eachother. Again, use your imagination.
                            </li>
                            </ul>
                            <div class="close"> <button class="btn btn-danger" data-toggle="collapse"  data-target="#q2">Close</button><div>
                        </div>
                    </div>
                </div>
            </div>
</div>
</section>
<hr>
<section>
<div class="container-fluid">
        <h2>Is my routine good?</h2>
        <button class="col-lg-12 btn btn-info" data-toggle="collapse" data-target="#q3">Find Out More</button>
            <div id="q3" class="collapse">
                <div class="container-fluid padding">
                    <div class="row">
                        <div class="col-sm-12">
                        <br>
                        <ul> 
                            <li>Is it the recommended routine? If the answer to that question is yes, why the f**k are you asking? If it isn't, here's a checklist, divided into two sections based on goals.
                            </li>
                            <br>
                            <li>
                            Any good routine MUST have some form of progression. You can increase weights, increase reps and sets, go to harder progressions, and things like these. If you keep doing the same routine, you are not going to get stronger, bigger, more endurance, etc.
                            </li>
                        </ul>
                            <div class="close"> <button class="btn btn-danger" data-toggle="collapse"  data-target="#q3">Close</button><div>
                    </div>
                </div>
            </div>
        </div>          
</section>
<hr>
<section>
<div class="container-fluid">
    <h2>Tempo</h2>
    <button class="col-lg-12 btn btn-info" data-toggle="collapse" data-target="#q4">What Does Tempo Look Like?</button>
        <div id="q4" class="collapse">
            <div class="container-fluid padding">
                <div class="row">
                    <div class="col-sm-12">
                    <br>
                    <p>So 10X0 means 1 'mississippi' second duration on the way down, no pause at the bottom, eXplode up and no pause at the top. When "exploding up", if the actual movement is slow, that's okay, it's the intent that matters.</p>
                    <div class="close"> <button class="btn btn-danger" data-toggle="collapse"  data-target="#q4">Close</button><div>
                </div>
            </div>
        </div>
    </div>
</div>                
</section>
<br>
 <?php
include "footer.php";
?>