<?php ob_start(); ?>
  <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
    <div class="mainContent mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-left text-white overflow-hidden">
      <div class="my-3 py-3 row" >
    <div class="col-sm">
      
    <h2 class="display-5 font-weight-light">Speed</h2>
    <p class="lead">At Galactitrek, we bring the universe to you. That's right, unlike other companies, our warp drive uses patented technology that works by bringing the universe to you. This means our ships can go faster than any other warp drive. For example, our fastest ship <a href="ships.php#AllureOfTheStars">Allure of the Stars</a> can travel at about 1 million times the speed of light.</p>
    
    <h2 class="display-5 font-weight-light">Comfort</h2>
    <p class="lead gradient2">Also, at Galactitrek, we provide the highest quality comfort so that you can enjoy your interstellar voyage in maximum relaxation. We also have 24/7 personal AI assistants so that you can have every need taken care of.</p>
    
    <h2 class="display-5 font-weight-light">Price</h2>
    <p class="lead">Lastly, at Galactitrek, we offer some of the best pricing in the world for our ships. Unlike Astrotours or SpaceX, we actually sell our rooms at a slight loss. We do this so that everyone can get a chance at experiencing space.</p>
    
    <h2 id="personal" class="display-5 font-weight-light" style="color: yellow">Personal Ship</h2>
      <p class="lead gradient2">If you can afford it, this will certainly be the best option for you. You can plot your own course, and make your own specialized adventure with this ship. Being the size of a medium-sized apartment building, this ship is the ultimate experience for anyone looking to explore the universe.</p>
      <iframe src="../3D/smallShip.html" seamless width="100%" frameborder="0" height="500px" id="planet"></iframe>

    </div>
    <div class="col-sm">
      <h2 id="odyssey" class="display-5 font-weight-light" style="color: yellow">Odyssey of the Stars</h2>
      <p class="lead gradient2">The Odyssey of The Stars is our biggest ship, built in 2770, this ship has all the amenities you could possibly want. This ship is the first of our ships to have a full olympic stadium and in 2778, we will host the Olympics.</p>
      <iframe src="../3D/biggestShip.html" seamless width="100%" frameborder="0" height="500px" id="planet"></iframe>
      
      <h2 id="voyage" class="display-5 font-weight-light" style="color: yellow">Voyage of the Stars</h2>
      <p class="lead">The Voyage of The Stars is a medium-sized ship, built in 2752, this ship is one of our most reasonable priced ship. While this ship isn't our biggest, this has a great sailing range of 500,000 light years, meaning you can go practacally anywhere in the galaxy</p>
      <iframe src="../3D/mediumShip.html" seamless width="100%" frameborder="0" height="500px" id="planet"></iframe>
    </div>
    
      </div>
    </div>
  </div>
<?php $content = ob_get_clean();
include "parent.php"; ?>