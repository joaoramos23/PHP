<?php
    $arr = [
        'João' => 8,
        'Maria' => 2,
        'Jose' => 5,
        'Marcos' => 2,
        'Marcelo' => 10,
    ];

    arsort($arr);
    ?>
    <table border = 1>
        <tr>
            <th>Nome</th>
            <th>Pontuação</th>
        </tr>
            <?php foreach($arr as $nome => $pontuacao):?>
        <tr>
            <td><?= $nome; ?></td>
            <td><?= $pontuacao; ?></td> 
        </tr>        
            <?php endforeach;?>
    </table>