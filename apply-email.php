<?php 

$error = ""; $successMessage = "";

if ($_POST) {

    // Validate form items
    if (!$_POST["name"]) {
        $error .= "The student's name is required.<br>";
    }
    if (!$_POST["email"]) {
        $error .= "An email address is required.<br>";
    }
    
    if (!$_POST["nationality"]) {   
        $error .= "The student's age is required.<br>";
    }
    
    if ($_POST['email'] && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) === false) {
        $error .= "The email address is invalid.<br>";
    }

    if(!isset($_FILES['uploaded_file']['name'])){
        $error .= "A resume file is required.<br>";
    }

    // resume file upload
    // Get attachment 
    $name_of_uploaded_file = basename($_FILES['uploaded_file']['name']);

    //get the file extension of the file
    $type_of_uploaded_file = substr($name_of_uploaded_file, strrpos($name_of_uploaded_file, '.') + 1);

    $size_of_uploaded_file =
    $_FILES["uploaded_file"]["size"]/1024;//size in KBs

    // Validate file for type and size
    //Settings
    $max_allowed_file_size = 400; // size in KB

    $allowed_extensions = array("pdf", "doc", "docx", "");

    //Validations for size and type and make sure the file doesn't already exist

    if (file_exists($target_file)) {
        $error .= "Sorry, that file already exists. Try changing the name.<br>";
        $uploadOk = 0;
    } 

    if($size_of_uploaded_file > $max_allowed_file_size ){

    $error .= "\n Size of file should be less than $max_allowed_file_size kB<br>";}

    //------ Validate the file extension -----
    $allowed_ext = false;
    for($i=0; $i<sizeof($allowed_extensions); $i++){
        if(strcasecmp($allowed_extensions[$i],$type_of_uploaded_file) == 0){
            $allowed_ext = true;
        }
    }
    if(!$allowed_ext){
        $error .= "The uploaded file is not a supported file type.<br>";
    }


    //copy the temp. uploaded file to uploads folder
    $uploads = "./uploads/";
    $path_of_uploaded_file = $uploads . $name_of_uploaded_file;
    
    $tmp_path = $_FILES["uploaded_file"]["tmp_name"];
    
    if(is_uploaded_file($tmp_path)){
        if(!copy($tmp_path,$path_of_uploaded_file)){
            $error .= 'Error while copying the uploaded file<br>';
        } 
    }    

        
    if ($error != "") {
    
        $error = '<div class="error"><p>There were error(s) in your form:</p>' . $error . '</div>';
        
    } else {

        // recipient
        $to = 'loobienglish@outlook.com';

        //sender
        $from = $_POST['email'];
        $fromName = $_POST['name'];

        //email subject
        $subject = 'Job application from ' . $_POST['name']; 

        //attachment file path
        $file = $path_of_uploaded_file;

        //email body content
        $htmlContent = '<h1>'. $_POST['name'] .' is applying for a job.</h1><p>Nationality: '. $_POST['nationality'].'</p><p>Email address: '. $_POST['email'] .'</p>';

        //header for sender info
        $headers = "From: $fromName"." <".$from.">";

        //boundary 
        $semi_rand = md5(time()); 
        $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x"; 

        //headers for attachment 
        $headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\""; 

        //multipart boundary 
        $message = "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" .
        "Content-Transfer-Encoding: 7bit\n\n" . $htmlContent . "\n\n"; 

        //preparing attachment
        if(!empty($file) > 0){
            if(is_file($file)){
                $message .= "--{$mime_boundary}\n";
                $fp =    @fopen($file,"rb");
                $data =  @fread($fp,filesize($file));

                @fclose($fp);
                $data = chunk_split(base64_encode($data));
                $message .= "Content-Type: application/octet-stream; name=\"".basename($file)."\"\n" . 
                "Content-Description: ".basename($file)."\n" .
                "Content-Disposition: attachment;\n" . " filename=\"".basename($file)."\"; size=".filesize($file).";\n" . 
                "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
            }
        }
        $message .= "--{$mime_boundary}--";
        $returnpath = "-f" . $from;

        if (@mail($to, $subject, $message, $headers, $returnpath)) {
            
            $successMessage = '<div class="success" >Your message was sent, we\'ll get back to you ASAP!</div>';
            
            
        } else {
            
            $error = '<div class="error"><p><strong>Your message couldn\'t be sent - please try again later</div>';
            
        }

    }

}
?>

