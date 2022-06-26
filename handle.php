<?php 

if($_FILES) {
    $total = count($_FILES['files']['name']);

    // Loop through each file
    for( $i=0 ; $i < $total ; $i++ ) {
    
      //Get the temp file path
      $tmpFilePath = $_FILES['files']['tmp_name'][$i];
    
      //Make sure we have a file path
      if ($tmpFilePath != ""){
        //Setup our new file path
        $ext = end((explode(".", $_FILES["files"]["name"][$i])));
        $newFilePath = "./img/upload/" . time() . '_' . random_int(0, 500) . '.' . $ext;
    
        //Upload the file into the temp dir
        if(move_uploaded_file($tmpFilePath, $newFilePath)) {
            header("location:/?page=thankYou");
        }
      }
    }
}
?>
