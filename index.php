<?php
require __DIR__ . '/crud_products.php';
?>
<!DOCTYPE html>
<link rel="stylesheet" href="my-styles/my.style.sheet.css">
<!--<link rel="stylesheet" href="bootstrap-5.3.2-dist/css/bootstrap.min.css">
<script src="bootstrap-5.3.2-dist/js/bootstrap.min.js"></script>-->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <section>
        <table border="1" class="table">
            <thead>
                <tr>
                    <?php
                    $intestazioni = new product();
                    foreach ($intestazioni->getAtributtes() as $intestazione) {
                    ?>
                        <th scope="col"> <?php echo $intestazione; ?></th>
                    <?php
                    }

                    ?>
                </tr>
            </thead>
            <tbody>

                <?php
                foreach ($products_readable as $details_product) {
                ?>
                    <tr>
                        <td> <?php echo $details_product->getId(); ?> </td>
                        <td> <?php echo $details_product->getName(); ?> </td>
                        <td> <?php echo $details_product->getType(); ?> </td>
                        <td> <?php echo $details_product->getRegularPrice(); ?> </td>
                        <td> <?php echo $details_product->getDescription(); ?> </td>
                        <td> <?php echo $details_product->getShortDescription(); ?> </td>
                        <td> <?php var_dump($details_product->getCategories()); ?> </td>
                        <td>
                            <div>
                                <img src="<?php echo ((array)$details_product->getImages()[0])['src']; ?>" alt="images">
                            </div>
                        </td>
                    </tr>
                <?php
                }
                ?>

            </tbody>
        </table>
    </section>

</body>

</html>