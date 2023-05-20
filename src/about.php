<?php ob_start(); ?>
  <div class="d-md-flex flex-md-equal my-md-3 pl-md-3">
    <div class="mainContent mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-left text-white overflow-hidden">
      <div class="my-3 py-3 row">
        <div>
          <h2 class="display-5 font-weight-light">About</h2>
          <p class="lead font-weight-medium">This website was created for the 2023 National Technology Student
            Association Webmaster competition.</p>
          <h2 class="display-5 font-weight-light">Sources</h2>
          <p class="lead font-weight-medium">This website uses the Bootstrap web framework and the three.js JavaScript
            library for displaying 3d graphics.</p>
          <p class="lead font-weight-medium">The 3d models were made using <a href="https://www.blender.org/"
              class="gradient1">Blender</a>.</p>
          <p class="lead font-weight-medium">The logo was made using the SF Alien Encounters font, which we have a
            free, non-profit use <a href="/Non-Profit Personal Use End User License Agreement.pdf"
              class="gradient1">license</a> for.</p>
          <p class="lead font-weight-medium">For the planet textures, we used the game <a
              href="https://www.simplerockets.com/" class="gradient1">Juno New Orgins's</a> built in planet creator
            and we extracted the textures from there. For unchanged planets, Earth and Venus, we used <a
              href="https://www.solarsystemscope.com/textures/" class="gradient1">this website</a>.</p>
            <h2 class="display-5 font-weight-light">Created by Campbell County High School WebMaster Team</h2>
            <p class="lead font-weight-medium">Team consists of Nathan Mills, Bjoern Petersen and Nathan Feiler</p>

          <h2 class="display-5 font-weight-light"></h2>
        </div>
        <div class="col-sm">
        </div>

      </div>
    </div>
  </div>
<?php $content = ob_get_clean();
include "parent.php"; ?>