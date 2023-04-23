<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="../resources/styles.css">
    <title>Список участников</title>
</head>
<body>
    <?php include('templates/header.php')?>

<div class="pageContainer">


    <section class="bg-success py-3">
        <div class="container px-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-6">
                    <div class="text-center my-3">
                        <img class="mb-3" src="../resources/logo.png" width="40%">
                        <h1 class="display-6 fw-bolder text-white mb-3">Конференция 2023</h1>
                        <h2 class="display-6 text-white mb-4">23.06 - 30.06</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="bg-light py-5 contact" id="application">
        <div class="container px-5 px-5">
            <div class="text-center mb-5">
                <h2 class="fw-bolder text-dark">Список участников</h2>
                
            </div>
            <div class="row justify-content-center ">
                <div class="col-12 col-lg-9 px-0">
                    <table class="table table-striped table-hover  ">
                        <thead class="bg-success text-light round-corners">
                            <tr>
                            <th scope="col">№</th>
                            <th scope="col">Имя Фамилия</th>
                            <th scope="col">Организация</th>
                            <th scope="col">E-mail</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <th scope="row">1</th>
                            <td>Олег Павлов</td>
                            <td>Otto</td>
                            <td><a href="mailto:mail@example.ru">mail@example.ru</td>
                            </tr>
                            <tr>
                            <th scope="row">2</th>
                            <td>Анна Соколова</td>
                            <td>Thornton</td>
                            <td><a href="mailto:mail2@example.ru">mail2@example.ru</td>
                            </tr>
                            <tr>
                            <th scope="row">3</th>
                            <td>Михаил Леонтьев</td>
                            <td>the Bird</td>
                            <td><a href="mailto:mail3@example.ru">mail3@example.ru</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>


</div><!--/container-->

    <?php include('templates/footer.php')?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>