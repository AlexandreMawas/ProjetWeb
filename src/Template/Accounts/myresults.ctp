<?php $this->layout = true;
?>

<div class="text-center"><h2 class="text-primary"><?php echo "MES RÉSULTATS" ?></h2></div>
        <div class ="btn">
            <?php echo $this->Html->link('Ajouter un résultat', array('controller' => 'Accounts', 'action' => 'addresult')); ?></div>


        <h2>
            Liste de tous mes résultats : 
        </h2>

        <table class="table table-striped">
            <?php
            $cpt = 0;
            if ($res == 0) {
                echo '<tr>';
                echo 'Aucun résultat';
                echo '</tr>';
            }
            echo '<tr>';
            echo '<th class="col-md-3"><div class="text-center">  Date </div></th>';
            echo '<th class="col-md-3"><div class="text-center"> Type </div></th>';
            echo '<th class="col-md-3"><div class="text-center"> Valeur </div></th>';
            echo '</tr>';
            if ($res != 0) {
                foreach ($res as $value) {
                    echo '<tr>';
                    echo '<td><div class="text-center">' . $res[$cpt]['Log']['date'] . '</div></td>';
                    echo '<td><div class="text-center">' . $res[$cpt]['Log']['log_type'] . '</div></td>';
                    echo '<td><div class="text-center">' . $res[$cpt]['Log']['log_value'] . '</div></td>';
                    echo '</tr>';
                    $cpt++;
                }
            }
            ?>
        </table>
