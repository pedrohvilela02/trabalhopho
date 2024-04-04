<!DOCTYPE html>
<html>

<body>

    <h2>Tela de login</h2>

    <form action="cadastro.php" method="post">

        <label>Nome:</label>
        <input type="text" name="nome" placeholder="Nome"> <br> <br>
        
        <Label>Data de nascimento:</Label>
        <input type="date"><br> <br>
        
        <label>CPF:</label>
        <input type="text" name="CPF" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" title="Digite o CPF no formato 000.000.000-00" placeholder="Digite seu CPF"><br> <br>


        <label>Senha:</label>
        <input type="password" name="Senha" placeholder="Senha"> <br> <br>
        <input type="submit" value="enviar">

    </form>

    
</body>

</html>