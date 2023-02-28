<?php
    include_once "beckend.php";   
?>

<h1>
    SEJA BEM-VINDO AO NOSSO SITE!
</h1>
<p><?=$nome?> veja as nossas ofertas.</p>

<h2>
    Confira nossos principais produtos: 
</h2>
<p> 
    <?php 
        foreach($produtos as $produto){

            if($i == $qntdProd){
                echo $produto . ".";
            }

            else{
                echo $produto . ", ";
            }
            $i++;
        }
    ?>
</p>

<p> 
<ul>
    <?php foreach($produtos as $produto): ?>
    <li><?= $produto; ?></li>
    <?php endforeach; ?>
</ul>
</p>

