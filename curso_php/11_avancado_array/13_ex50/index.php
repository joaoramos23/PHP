<?php 
    $pessoas = [
        'João' => 23,
        'Fernando' => 61,
        'Ana' => 2,
        'Beatriz' => 45
    ];
?>

    <table border = 1>
        <tr>
            <th>Nome</th>
            <th>Idade</th>
        </tr>
        <?php foreach($pessoas as $nome => $idade): ?>
            <tr>
                <td>
                    <?= $nome; ?>
                </td>
                <td>
                    <?= $idade; ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>