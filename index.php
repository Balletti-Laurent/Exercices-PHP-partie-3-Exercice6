<!DOCTYPE html>
<html>
    <head lang="fr">
        <meta charset="utf-8">
        <title>Exercice 6</title>
    </head>
    <body>
        <div>
            <?php
            $count = 20;
            while ($count >= 0)
            {
                echo '<p>' .$count. ' C\'est presque bon.</p>';
                $count--;
            }
            ?>
        </div>
    </body>
</html>