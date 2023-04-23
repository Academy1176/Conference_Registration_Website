<?php 

//Добавить нового участника в базу данных
function addNewParticipant($name, $family, $pol, $nationality, $company, $jobRole, $birthDate, $email){
    try {
    	//Создание соединения
        $conn = new PDO("mysql:host=localhost;dbname=conference_db", "root", "");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        //Подготовка запроса
        $stmt = $conn->prepare("INSERT INTO participants (name, family, pol, nationality, company, jobRole, birthDate, email) values (:name, :family, :pol, :nationality, :company, :jobRole,:birthDate, :email)");
        
        //Подготовка параметров
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':family', $family);
        $stmt->bindParam(':pol', $pol);
        $stmt->bindParam(':nationality', $nationality);
        $stmt->bindParam(':company', $company);
        $stmt->bindParam(':jobRole', $jobRole);
        $stmt->bindParam(':birthDate', $birthDate);
        $stmt->bindParam(':email', $email);
    
        //Выполнение запроса
        if ($stmt->execute()) {
            //В случае удачного выполнения переход на страницу со списком участников на якорь участника
            header("Location: ViewParticipants.php#$email");
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }    
}

?>