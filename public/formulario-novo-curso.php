<?php
require __DIR__ . '/../vendor/autoload.php';

$entityManager = (new \Alura\Cursos\Infra\EntityManagerCreator())->getEntityManager();
$repositorioDeCursos = $entityManager->getRepository(\Alura\Cursos\Entity\Curso::class);
$cursos = $repositorioDeCursos->findAll();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="jumbotron">
        <h1>Novo Curso</h1>
    </div>

    <form>
        <div class="form-group">
            <label>Descrição</label>
            <input type="text" id="descricao" class="form-control"/>
        </div>
        <button class="btn btn-primary">Salvar</button>
    </form>

</div>
</body>
</html>

