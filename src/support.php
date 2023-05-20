<?php ob_start(); ?>
    <div class="d-md-flex flex-md-equal my-md-3 pl-md-3">
        <div class="mainContent mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-left text-white overflow-hidden">
            <div class="my-3 py-3 row">
                <div>
                    <h2 class="display-5 font-weight-light">Support Disclaimer:</h2>
                    <p class="lead font-weight-medium">Jokes on you we are filthy rich, we don't need your money, why do you think we would give you support? The website works on my machine anways!</p>

                    <h2 class="display-5 font-weight-light"></h2>
                </div>
                <div class="col-sm">
                </div>

            </div>
        </div>
    </div>
<?php $content = ob_get_clean();
include "parent.php"; ?>