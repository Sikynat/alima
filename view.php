<?php
    include ("conn.php");
    $pag = $_GET['id'];
    $consulta = "SELECT * FROM livros WHERE id = '$pag'";
    $con = $mysqli->query($consulta) or die($mysqli->error);



    $fire = mysqli_query($mysqli, $consulta);
    $data = mysqli_fetch_array($fire);
    $res = $data['foto'];
    $res = explode(" ",$res);
    $count = count($res)-1;
    for($i=0;$i<=$count;++$i)
    $position = 0;

?>

<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imovel</title>
    <link rel="stylesheet" href="css/view.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
</head>
<body>
<header>
        <div class="nav-bar">
            <a href="index.php" class="logo">Arthur Lima</a>
            <div class="navigation">
                <div class="nav-items">
                    <div class="nav-close-btn"></div>
                     <a href="index.php">Home</a>
                     <a href="index.php#about">Sobre</a>
                     <a href="index.php#contos">Contos</a>
                </div>
            </div>
            <div class="nav-menu-btn"></div>
        </div>
    </header>
    </header>

     <div class="section">
     <?php while($dado = $con->fetch_array()){ ?>
                <div class="container">
                    <div class="content-section">
                    
                        <div class="title">
                            <h1><?php echo $dado["titulo"];?></h1>
                        </div>
                        <div class="content">
                          
                            
                            <p><?php echo $dado["texto"];?></p>
                            </div>
                        </div>
                    </div>
                    <div class="image-section">
                        
                    </div>
                </div>
                <?php } ?>
            </div>
            
            <script src="js/main.js"></script>
</body>
</html>

Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aperiam vero nam, consequatur odit aliquam, saepe facilis corporis sequi porro enim esse laudantium in quos possimus repudiandae iste aut fugiat distinctio.