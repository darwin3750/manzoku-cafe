<?php if ($title == "BRINGING JAPANESE CUISINE TO YOUR TASTEBUDS")
    {
        echo 
        '<div class="card" style="width: 95%; margin-left:auto; margin-right:auto;">
            <div class="card-body" >
            <h5 class="card-title">'.$title.'</h5>
            '.$description.'
            </div>
        </div>';
    }
   else 
    {
        echo 
        '<div class="col-sm-4 d-flex mt-5 mx-auto">
            <div class="col">
                <div class="card h-100">
                <div class="card-body ">
                    <h5 class="card-title">'.$title.'</h5>
                    <p class="card-text">'.$description.'</p>
                </div>
                </div>
            </div>
        </div>';
    }
?>

