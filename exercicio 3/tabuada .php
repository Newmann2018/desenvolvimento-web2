<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela - Alunos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body container-fluid">
<h1 class="text-center mt-1">Tabuada do 1 ao 10</h1>
<div class="row mt-4">
    <div class="col-12">
        <table class="table table-light table-hover table-striped table-bordered">
            <thead class="text-center">
                <tr class="text-center">
                    <td>Multipliocado</td>
                    <td>Multipliocador</td>
                    <td>Resultado</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php for ($i = 1; $i <= 10; $i++) { ?></td>
                    <td> <?php for ($j = 1; $j <= 10; $j++) { ?></td><br>
                    <td><?php echo($i . "x" . $j . "=" . $i * $j); ?></td><br>
                    <?php
                    }?><br> 
                     <?php
                    }?>
                </tr>
                </tbody>
        </table>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>