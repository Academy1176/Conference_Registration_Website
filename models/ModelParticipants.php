<?php 

//Вернуть массив с участниками из базы данных
function ModelParticipants_GetParticipants(){
    try {
    	//Создание соединения
        $conn = new PDO("mysql:host=localhost;dbname=conference_db", "root", "");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        //Подготовка запроса
        $sql = 'SELECT name, family, company, email FROM participants';
        $stmt = $conn->query($sql);

        //Сохранение результата в массив
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        //Если результат не пустой, вернуть массив с результатом
        if ($results)
        {
            $participants = $results;
        }
        //Иначе вернуть 0
        else{
            $participants = 0;
        }

        //возврат функции
        return $participants;

        
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }    
}

?>