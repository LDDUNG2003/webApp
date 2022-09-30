<?php include './localsystem/index.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="shortcut icon" href="./style/img/logotitle.png" type="image/x-icon">
    <?php include './htmlFile/cssLink.html'?>
</head>
<body>
    <div id="preloder">
        <div class="loader"></div>
    </div>
    <?php include './htmlFile/header.html'?>
    <?php include './htmlFile/menusection.html'?>
    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
                    <?php foreach($viewsCategories as $viewItem):?>
                        <div class="col-lg-3">
                            <div class="categories__item set-bg" data-setbg="./style/img/<?php echo $viewItem['image']?>">
                                <h5><a href="<?php echo $viewItem["href"] ?>"><?php echo $viewItem['title'] ?></a></h5>
                            </div>
                        </div>
                    <?php endforeach?>
                </div>
            </div>
        </div>
    </section>
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                        <?php ?>
                </div>
            </div>
        </div>
    </section>
    <?php include './htmlFile/footer.html'?>
    <?php include './htmlFile/jsLink.html'?>
</body>
</html>