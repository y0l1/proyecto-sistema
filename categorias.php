<!DOCTYPE html>
<html lang="en">
<?php require '../../includes/_db.php' ?>
<?php require '../../includes/_header.php' ?>
<body>
    <div class="row">
        <div class="col-sm-4">
<a class="catprendas" href="productosCategoria.php?categoria=<?php echo 'prendas'?>">
TIENDA1
</a>
        </div>
<div class="col-sm-4">
<a class="catpantalones" href="productosCategoria.php?categoria=<?php echo 'pantalones'?>">
TIENDA2
</a>
</div> 

<div class="col-sm-4">
<a class="catchompas" href="productosCategoria.php?categoria=<?php echo 'chompas'?>">
TIENDA3
</a>
</div>
</div>
</body>
<?php require '../../includes/_footer.php' ?>
</html>
<html>
        <head>
                <style>
                        .catprendas {
                                background: pink;
                                color: blueviolet;
                                font-weight: bold;
                                padding: 60px;
                                border: 4px solid rgb(238, 13, 148);
                                border-radius: 6px;
                                text-align:center;
                                width: 90%;
                                margin: 20px;
                                display: inline-block;
                                font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
                        }
                        .catpantalones {
                                background: #ed06e2;
                                color: #1230f4;
                                font-weight: bold;
                                padding: 60px;
                                border: 4px solid rgb(222 163 199);
                                border-radius: 6px;
                                text-align:center;
                                width: 90%;
                                margin: 20px;
                                display: inline-block;
                                font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
                        }
                        .catchompas {
                                background: #49de09;
                                color: firebrick;
                                font-weight: bold;
                                padding: 60px;
                                border: 4px solid #eae70e;
                                border-radius: 6px;
                                text-align:center;
                                width: 90%;
                                margin: 20px;
                                display: inline-block;
                                font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
                        }
                        
                        
                </style>
        </head>
</html>