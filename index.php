<?php

    $paginas = ['home' =>'Minha página home aqui!','sobre'=>'Estou na página sobre', 'contato'=>'<form><input type="text" placeholder="Seu nome..." /></form>','FAQ'=>'perguntas frequentes','Loja'=>'conteúdo loja'];

?>
<!doctype html>
<html>
<head>
    <title>Web site dinamico PHP</title>
    <style type="text/css">
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        header{
            background-color:#069;
            padding:8px 10px;
            text-origin: center;
        }

        a{
            display: inline_block;
            margin:0 10px;
            color: white;
            font-size: 17px;
        }

        section{
            max-width: 960px;
            margin: 20px auto;
            padding: 0 2%;
        }

        h2{
            background-color: #069;
            color: white;
            padding: 8px;
        }

        p{
            color: back;
            margin-top:10px;
            font-size: 16px;
        }
    
    </style>
</head>
    <body>
        <header>
        <?php
            foreach ($paginas as $key => $value){
                echo '<a href="?page='.$key.'">'.ucfirst($key).'</a>';
            }
            ?>
        </header>
        <section>
            <h2><?php

            $pagina = (isset($_GET['page']) ? $_GET['page'] : 'home');
            
            if(!array_key_exists($pagina, $pagina)){
                $pagina = 'home';
            }

            echo ucfirst($pagina);

            ?></h2>
            <p><?php echo $paginas[$pagina]; ?></p>
        </section>
    </body>

</html>