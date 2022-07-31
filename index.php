<!DOCTYPE html>
<html>
    <head>
        <title>pagina de requisição GET e POST</title>
    </head>
    <body>
        <form action="page.php" method="post">
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
            <input type="submit" name="inserir" value="Inserir Livro">
        </form>
       
        <form action="page.php" method="get" >
            <input type="submit" name="MostrarTudo" value="Mostrar tudo">
        </form>
        
        <form action="page.php" method="post" >
            <input type="text" name="isbn" placeholder="ISBN">
            <input type="submit" name="PesquisarLivro" value="Pesquisar Livro por ISBN">
        </form>
    </body>
</html>
