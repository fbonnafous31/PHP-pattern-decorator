<?php

    use App\Caramel;
    use App\Sumatra;
    use App\Chocolat;
    use App\Colombia;
    use App\Expresso;
    use App\Chantilly;
    require_once ('autoload.php');

    $expresso = new Expresso(); 
    echo $expresso->getDescription(). " €" . $expresso->cout();
    echo '<br>';

    $sumatra = new Sumatra(); 
    $sumatra = new Chocolat($sumatra);
    $sumatra = new Chocolat($sumatra);
    $sumatra = new Chantilly($sumatra);
    echo $sumatra->getDescription(). " €" . $sumatra->cout();
    echo '<br>';

    $colombia = new Colombia(); 
    $colombia = new Caramel($colombia);
    $colombia = new Chocolat($colombia);
    $colombia = new Chantilly($colombia);
    echo $colombia->getDescription(). " €" . $colombia->cout();
    echo '<br>';
?>