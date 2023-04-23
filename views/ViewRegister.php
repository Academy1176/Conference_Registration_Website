<?php include('../models/ModelRegister.php')?>
<?php include('../controllers/ControllerRegister.php')?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="../resources/styles.css">
    <title>Регистрация на конференцию</title>
</head>
<body>
    <?php include('templates/header.php')?>


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
                <h2 class="fw-bolder text-dark">Регистрация</h2>
                <p class="lead mb-0 text-dark">Для участия заполните анкету.</p>
            </div>
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-6">
                    <form method="POST">

                        <div class="form-floating mb-3">
                            <input class="form-control" name="name" type="text" required>
                            <label for="name">Имя</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input class="form-control" name="family" type="text" required>
                            <label for="family">Фамилия</label>
                        </div>

                        <select class="form-select mb-3" name="pol">
                            <option value="2">Выберите пол</option>
                            <option value="0">Женский</option>
                            <option value="1">Мужской</option>
                            <option value="2">Не указывать</option>
                        </select>

                        <div class="form-floating mb-3">
                            <input class="form-control" name="nationality" type="text" required>
                            <label for="nationality">Национальность</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input class="form-control" name="company" type="text" required>
                            <label for="company">Название организации</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input class="form-control" name="jobRole" type="text" required>
                            <label for="jobRole">Должность</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input class="form-control" name="birthDate" type="date" min="1900-01-01" max="2006-01-01" required>
                            <label for="birthDate">Дата рождения</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input class="form-control" name="email" type="email" required>
                            <label for="email">Электронная почта</label>
                        </div>


                        <div class="d-grid">
                            <button class="btn btn-success btn-lg" id="submitButton" type="submit" name="submitButton">Отправить</button>
                            <p><?php echo $errorMessage;?></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <?php include('templates/footer.php')?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>