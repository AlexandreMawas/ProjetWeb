<?php $this->layout = true;
?>

<div class="text-center"><h2 class="text-primary"><?php echo "HALL OF FAME" ?></h2></div><html>
    <h2>
        <?php echo ("Classement par catégorie :"); ?>
    </h2>

    <table class="table table-striped">
        <?php
        $cpt = 0;
        foreach ($sport as $value) {
            //pr($value['Log']['log_type']);
            echo '<tr> <th colspan = "3" > <h4 class="badgetitre">' . ($value['Log']['log_type']) . '</h4> </th> </tr>';
            echo '<tr class="success">';
            echo '<th class="col-md-3"><div class="text-center">  Place </div></th>';
            echo '<th class="col-md-3"><div class="text-center">  Membre </div></th>';
            echo '<th class="col-md-3"><div class="text-center">  Points </div></th>';
            echo '</tr>';

            foreach ($rank as $value2) {
                // pr($value2['Log']['log_type']);

                if ($value2['Log']['log_type'] == $value['Log']['log_type']) {

                    $cpt++;

                    echo '<tr>';
                    echo '<td><div class="text-center">' . $cpt . '</div></th>';
                    echo '<td><div class="text-center">' . $value2['Log']['member_id'] . '</div></td>';
                    echo '<td><div class="text-center">' . $value2['Log']['log_value'] . '</div></td>';
                    echo '</tr>';
                }
                //echo '<td>' . $rank[$value][$cpt - 1]['Log']['log_value'] . '</td>';
            }
            $cpt = 0;
        }
        ?>
    </table>
