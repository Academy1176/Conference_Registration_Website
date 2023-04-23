<?php
$errorMessage = '';

//При нажатии на кнопку отправить данные проверяются, затем вызывается функция обработки из ModelRegister
if (isset($_POST['submitButton'])) {
    //Проверка на заполнение всех полей
    if (empty($_POST['name']) || empty($_POST['family']) || empty($_POST['pol']) || empty($_POST['nationality']) || empty($_POST['company']) || empty($_POST['birthDate']) || empty($_POST['email'])) {
        $errorMessage = 'Не все поля анкеты заполнены';
    }
    else{
        //Переменные берутся из пользовательской формы
        $name = $_POST['name'];
        $family = $_POST['family'];
        $pol = $_POST['pol'];
        $nationality = $_POST['nationality'];
        $company = $_POST['company'];
        $jobRole = $_POST['jobRole'];
        $birthDate = $_POST['birthDate'];
        $email = $_POST['email'];
        //Передача данных в модель
        ModelRegister_AddNewParticipant($name, $family, $pol, $nationality, $company, $jobRole, $birthDate, $email);   
    }
}
?>