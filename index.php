<?php
   session_start();
//Mostrar os livros
   if (isset($_POST['mostrar'])){
      header('Location https://igorbecker.herokuapp.com/page.php');
   }

//Inserir livros
   if (isset ($_POST['nomeAutor'])){
            $_SESSION['Livro'][] = jason_encode($_POST);
            echo ('Livro Inserido');
   }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>pagina de requisição GET e POST</title>
    </head>
    <body>
        <form method="post">
            <input type="text" name="nomeAutor" placeholder="Nome autor">
            <br>
            <input type="text" name="sobrenome" placeholder="Sobrenome autor">
            <br>
            <input type="text" name="titulo" placeholder="Título do livro">
            <br>
            <input type="text" name="editora" placeholder="Editora">
            <br>
            <input type="text" name="cidade" placeholder="Cidade da publicação">
            <br>
            <input type="text" name="ano" placeholder="Ano da publicação">
            <br>
            <input type="text" name="paginas" placeholder="Quantidade de páginas">
            <br>
            <input type="text" name="isbn" placeholder="ISBN">
            <br>
            <input type="text" name="assuntos" placeholder="Assuntos abordados no livro">
            <br>
            <input type="submit" naome="inserir" value="Inserir Livro">
        </form>
       
        <form action="page.php" method="post" >
            Preencher para mostrar <br>
            <input type="submit" name="MostrarTudo" value="Mostrar tudo">
        </form>
    </body>
</html>
