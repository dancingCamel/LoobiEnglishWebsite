<?php $error = ""; $successMessage = "";

if ($_POST) {
    
    if (!$_POST["name"]) {
        
        $error .= "The student's name is required.<br>";
        
    }
    
    if (!$_POST["age"]) {
        
        $error .= "The student's age is required.<br>";
        
    }
    

    if (!$_POST["tel"]) {
        
        $error .= "Your telephone number is required.<br>";
        
    }
    
    
    if ($error != "") {
        
        $error = '<div class="error"><p>There were error(s) in your form:</p>' . $error . '</div>';
        
    } else {

        $emailTo = "loobienglish@outlook.com";
        
        $subject = "Demo application for " . $_POST['name'];
        
        $content = "Student name: ". $_POST['name']. ". Age: " . $_POST['age']. ". <p>Xiaoqu: " . $_POST["xiaoqu"] . ". Tel: " . $_POST['tel'];
        
        $headers = "From: loobienglish.com";
        
        if (mail($emailTo, $subject, $content, $headers)) {
            
            $successMessage = '<div class="success" >Your message was sent, we\'ll get back to you ASAP!</div>';
            
            
        } else {
            
            $error = '<div class="error"><p><strong>Your message couldn\'t be sent - please try again later</div>';
            
        }
        
    }
    
    
    
}
?>