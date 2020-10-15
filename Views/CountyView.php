<?php
    require('classes/County.php');

function createView($href, $countyNoSpace, $countyName, $viewCount) {
    $county = new County();
    $segments = $county -> getCountySegments($countyName);

    return "
<div><a class=\"btn btn-outline-dark segmentButton mb-2 ml-2\" data-toggle=\"collapse\" href=\"$href\" role=\"button\" aria-expanded=\"false\">$countyName</a>
    <div class=\"collapse\" id=\"$countyNoSpace\">
        <div class=\"card card-body segmentCard\">
            $segments 
        </div>
    </div>
</div>";
}

    $dbc = mysqli_connect('localhost', 'lisa', 'bacon', 'iceage');
            $countyQuery = "SELECT DISTINCT county FROM segmentinfo";
            $result = $dbc->query($countyQuery)
                    or die(mysqli_error($dbc));
            $viewCount = 1;
            while ($row = mysqli_fetch_array($result)) {
                //echo "<button class=\"btn btn-dark ml-2 ml-2 mt-2\">$row[0]</button>";
                $county = $row[0];
                $countyName = $row[0];
                $countyNoSpace = str_replace(' ', '-', $county);
                $countyNoSpace = str_replace('&', '', $countyNoSpace);
                $href = "#" . $countyNoSpace;
                echo createView($href, $countyNoSpace, $countyName, $viewCount);
                $viewCount ++;
            }

?>