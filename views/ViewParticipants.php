<?php include('../models/ModelParticipants.php')?>
<?php include('../controllers/ControllerParticipants.php')?>

<!DOCTYPE html>
<html lang="ru">
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
                            <?php
                                //Если есть участники, вывести информацию
                                if ($participantsArray != 0){
                                    $i = 1;
                                    
                                    ?>
                                        <?php
                                        foreach ($participantsArray as $row) {
                                        ?>
                                            <tr>
                                                <th scope="row"><?php echo $i?></th>
                                                <td><?php echo $row['name'], " ", $row['family'];?></td>
                                                <td><?php echo $row['company']?></td>
                                                <td id="<?php echo $row['email']?>">
                                                    <a href="mailto:<?php echo $row['email']?>">
                                                        <?php echo $row['email']?>
                                                    </a>    
                                                </td>
                                            </tr>
                                        <?php
                                        $i++;
                                        }    
                                }
                                //Иначе вывести сообщение, что участников нет
                                else{
                                    ?>
                                    <td></td>
                                    <td>Участников нет</td>
                                    <td></td>
                                    <td></td>
                                    <?php
                                }
                            ?>
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