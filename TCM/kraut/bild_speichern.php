<?php
        session_start();
        if ($_SESSION['benutzername'] == FALSE) {
            echo "<p>Du kannst dich <a href='/TCM/index.php'>hier</a> einloggen.</p>";    
            exit;
        }
        // Wenn ein Formular mit einem Dateifeld namens 'image' 
        // an dieses Script geschickt wurde...
       if(isset($_FILES['image'])){
          
          // Im Array $errors werden ggf. Fehlermeldungen gesammelt
          $errors= array();
          
          // Hier werden die einzelnen Informationen zur Datei 
          // in einzelne Variablen gespeichert
          $file_name = $_FILES['image']['name'];
          $file_size =$_FILES['image']['size'];
          $file_tmp =$_FILES['image']['tmp_name'];
          $file_type=$_FILES['image']['type'];
          
          // Hier wird die Dateiendung in die Variable $file_ext gespeichert
          $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
          
          // Hier werden die erlaubtem Dateiendungen festgelegt
          $extensions= array("jpeg","jpg","png");
          
          // Um dann hier zu prüfen, ob die Dateiendung der hochgeladenen
          // Datei zu den erlaubten Endungen gehört
          if(in_array($file_ext,$extensions)=== false){
             $errors[]="Bitte verwenden Sie nur JPG oder PNG Dateien.";
          }
          
          // Hier kann man in Bytes angeben, wie groß die Datei 
          // maximal sein darf
          if($file_size > 2000000){
             $errors[]='Die Datei darf nicht größer als 2 MB sein';
          }
          
          // Hier wird zufällig eine nummer zwischen 1000 
          // und 9999 ausgewürfelt und vorne an den Dateinamen 
          // angefügt (um den Dateinamen eindeutig zu machen)
          $einzigartiger_dateiname = rand(1000,9999) . "-" . $file_name;
          
          // Wenn das $errors Array jetzt noch leer ist 
          // (es also keinen Fehler gab)
          if(empty($errors)==true){
             // Wird die Datei im Dateisystem auf dem Server gespeichert
             move_uploaded_file($file_tmp,"../images/".$einzigartiger_dateiname);
             // und eine Erfolgsmeldung angezeigt.
    
          }
          else {
             // Ansonsten werde die im $errors Array gesammelten Fehler 
             // angezeigt.
             print_r($errors);
          }
        } 
        //else {
        //    $einzigartiger_dateiname = "";
        //}
?>
