<?php
    $county = $_GET['county'];
    $href = "#" . county;

?>
<div class="col-sm"><a class="btn btn-outline-dark" data-toggle="collapse" href="<?php $href?>" role="button" aria-expanded="false"><?php $county?></a>
    <div class="collapse" id="Polk">
        <div class="card card-body">
            <?php    
            require('classes/County.php');
            $county = new County();
            echo $county -> getCountySegments($county);
            ?>
        </div>
    </div>
</div>

