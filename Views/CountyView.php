<?php
    require('classes/County.php');

function createView($href, $countyRow) {
    $county = new County();
    $segments = $county -> getCountySegments($countyRow);

    return "
<div class=\"col-sm\"><a class=\"btn btn-outline-dark\" data-toggle=\"collapse\" href=\"$href\" role=\"button\" aria-expanded=\"false\">$countyRow</a>
    <div class=\"collapse\" id=\"$href\">
        <div class=\"card card-body\">
            $segments 
        </div>
    </div>
</div>";
 
}

    $dbc = mysqli_connect('localhost', 'lisa', 'bacon', 'iceage');
            $countyQuery = "SELECT DISTINCT county FROM segmentinfo";
            $result = $dbc->query($countyQuery)
                    or die(mysqli_error($dbc));
            while ($row = mysqli_fetch_array($result)) {
                //echo "<button class=\"btn btn-dark ml-2 ml-2 mt-2\">$row[0]</button>";
                $county = $row[0];
                $href = "#" . $county;
                echo createView($href, $county);
            }

?>