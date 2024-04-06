<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 2</title>
</head>
<body>
    <form action="" method="POST">
        
        <?php
        for ($i = 0; $i < 7; $i++) {
            echo '<input type="number" name="valores[]">';
        }
        ?>

        <button type="submit">Ok </buttontype>;
    </form>

    <?php
        if (isset($_POST['valores'])) {
            $vetor = $_POST ['valores'];
            var_dump($vetor);
        }
    ?>  


    
</body>
</html>