<?php ob_start(); ?>
  <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
    <div class="mainContent mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-left text-white overflow-hidden">
      <div class="my-3 py-3 row">
        <div class="col-sm">
          <h2 class="display-5 font-weight-light">Reviews</h2>
          <p class="lead font-weight-medium gradient2">As you already know, Galactitrek is a state-of-the-art space tourism agency but don't just take that from us, because we have thousands of reviews that share the same sentiment. Here are just a few samples,</p>

          <iframe src="/hr.html" width="100%" height="70px" frameborder="0" height="auto" id="planet"
            style="overflow: hidden;"></iframe>
    
    <div class="border rounded review review">
      <h2>Elon Musk</h2>
      <div class="stars">
        <img src="/star-fill.svg" class="invertedIcon"></img>
        <img src="/star-fill.svg" class="invertedIcon"></img>
        <img src="/star-fill.svg" class="invertedIcon"></img>
        <img src="/star-fill.svg" class="invertedIcon"></img>
        <img src="/star-fill.svg" class="invertedIcon"></img>
      </div>
      <br>
      
      <i class="bi bi-quote"><img src="/quote.svg" class="invertedIcon"></img>I admit, Galactitrek is pretty solid. I went with their Executive suite on the largest ship at the time and found everything to be super high-quality. Even the boarding process is fun, maybe even better than my own company.<img src="/quote.svg" class="invertedIcon" style="transform: rotate(180deg);"></img></i>
      <p class="normal">Elon Reeve Musk - May 19, 2284, Paris Space Peace Conference</p>
    </div>
    <br>
    <div class="border rounded review review">
      <h2>Anonymous reviewer</h2>
      <div class="stars">
        <img src="/star-fill.svg" class="invertedIcon"></img>
        <img src="/star-fill.svg" class="invertedIcon"></img>
        <img src="/star-fill.svg" class="invertedIcon"></img>
        <img src="/star-fill.svg" class="invertedIcon"></img>
        <img src="/star-half.svg" class="invertedIcon"></img>
      </div>
      <br>
      
      <i class="bi bi-quote"><img src="/quote.svg" class="invertedIcon"></img>Overall, just great. The only issue is that it can sometimes be packed in certain areas so make sure you reserve a seat where needed.<img src="/quote.svg" class="invertedIcon" style="transform: rotate(180deg);"></img></i>
      <p class="normal">Anonymous - December 3, 2642</p>
    </div>
    
    
        </div>
        <div class="col-sm align-items-center justify-content-center">
          <iframe src="/3D/reviews.html" seamless width="100%" frameborder="0" height="500px" id="planet"
            style="
      flow: hidden;"></iframe>
      
      <div class="border rounded review review">
      <h2>Anonymous reviewer</h2>
      <div class="stars">
        <img src="/star-fill.svg" class="invertedIcon"></img>
        <img src="/star-fill.svg" class="invertedIcon"></img>
        <img src="/star-fill.svg" class="invertedIcon"></img>
        <img src="/star-fill.svg" class="invertedIcon"></img>
        <img src="/star-fill.svg" class="invertedIcon"></img>
      </div>
      <br>
      
      <i class="bi bi-quote"><img src="/quote.svg" class="invertedIcon"></img>I used to hate Galactitrek because of their scandalous doings; however, going on their newest ship, I don't care about that anymore.<img src="/quote.svg" class="invertedIcon" style="transform: rotate(180deg);"></img></i>
      <p class="normal">Anonymous - Feburary 12, 2768</p>
    </div>
        </div>

      </div>
    </div>
  </div>
<?php $content = ob_get_clean();
include "parent.php"; ?>