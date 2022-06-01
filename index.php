<?php

    use Ingredients\Chocolat;
    use Ingredients\Chantilly;
    use Ingredients\Caramel;

    require_once ('libraries/autoload.php');

    $expresso = new \Boissons\Expresso(); 
    echo $expresso->getDescription(). " €" . $expresso->cout();
    echo '<br>';

    $sumatra = new \Boissons\Sumatra(); 
    $sumatra = new Chocolat($sumatra);
    $sumatra = new Chocolat($sumatra);
    $sumatra = new Chantilly($sumatra);
    echo $sumatra->getDescription(). " €" . $sumatra->cout();
    echo '<br>';

    $colombia = new \Boissons\Colombia(); 
    $colombia = new Caramel($colombia);
    $colombia = new Chocolat($colombia);
    $colombia = new Chantilly($colombia);
    echo $colombia->getDescription(). " €" . $colombia->cout();
    echo '<br>';
?>