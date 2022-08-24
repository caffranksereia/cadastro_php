<?php





?>

<!DOCTYPE html>
<html Lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-A-Compartible" content="chrome">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Cadastro de usuario</title>
        <script src="cadastro_script.js"></script>
        <link rel="stylesheet" href="cadastro.css">
    </head>
    <body>
        <div class="cadastro">
            <form action="">
                <label for="">Nome Completo:</label>
                <input type="text">
                <label for="">Email:</label>
                <input type="text">
                <label for="">CPF:</label>
                <input type="text">
            </form>
            <button id="save">Salve</button>
        </div>
        <div class="listar_cadastro">
            <table>
                <tr>
                    <th>Nome Completo:</th>
                    <th>Email:</th>
                    <th>CPF:</th>
                </tr>
                <tr>
                    
                </tr>
                <tr>
                    <td>
                        <button id="deletar">Delete</button> 
                    </td>
                    <td>
                        <button id="Editar">Editar</button>
                    </td>
                         
                </tr>
            </table>
            
        </div>
    </body>
</html>