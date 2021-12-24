<?php

    $slyth = getHouseVote("slytherin", $id);
    $gryff = getHouseVote("gryffindor", $id);
    $raven = getHouseVote("ravenclaw", $id);
    $huffle = getHouseVote("hufflepuff", $id);
    $total = $slyth + $gryff + $huffle + $raven; //get total amount of votes and calculate every percentage
    ?>
    <div class="results">
        <div id="first">
            <?php echo "<p class=\"percentage\">". round($gryff/$total*100) . "% Gryffendor!</p>"; ?>
            <?php echo "<p class=\"percentage\">". round($slyth/$total*100) . "% Slytherin!</p>"; ?>
        </div>
        <div id="second">
            <?php echo "<p class=\"percentage\">". round($raven/$total*100) . "% Ravenclaw!</p>"; ?>
            <?php echo "<p class=\"percentage\">". round($huffle/$total*100) . "% Hufflepuff!</p>"; ?>
        </div>
    </div>

    
    


    