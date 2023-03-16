<?php
  include('config.php');
//Define the query
$polo= $_POST['polo'];
$genid= $_POST['id'];
$color_body= $_POST['color_body'];
$color_pocket= $_POST['color_pocket'];
$color_bag= $_POST['color_bag'];
$color_sleeve= $_POST['color_sleeve'];
$color_collar= $_POST['color_collar'];
$user_id= $_POST['user_id'];
$data = $polo;
$filename = "images/design/".$genid.".png";
function tf_convert_base64_to_image( $base64_code, $path, $image_name = null ) {
     
    if ( !empty($base64_code) && !empty($path) ) :
 
        // split the string to get extension and remove not required part
        // $string_pieces[0] = to get image extension
        // $string_pieces[1] = actual string to convert into image
        $string_pieces = explode( ";base64,", $base64_code);
 
        /*@ Get type of image ex. png, jpg, etc. */
        // $image_type[1] will return type
        $image_type_pieces = explode( "image/", $string_pieces[0] );
 
        $image_type = $image_type_pieces[1];
 
        /*@ Create full path with image name and extension */
        $store_at = $path.md5(uniqid()).'.'.$image_type;
 
        /*@ If image name available then use that  */
        if ( !empty($image_name) ) :
            $store_at = $path.$image_name.'.'.$image_type;
        endif;
 
        $decoded_string = base64_decode( $string_pieces[1] );
 
        file_put_contents( $store_at, $decoded_string );
 
    endif;
 
}
$sql1="INSERT INTO `designpoloshirt`.`color`(`color_id`,`color_body`,`color_pocket`,`color_bag`,`color_sleeve`,`color_collar`)
VALUES (NULL,'".$color_body."','".$color_pocket."','".$color_bag."','".$color_sleeve."','".$color_collar."')";
if ($conn->query($sql1) === TRUE) {
    $last_id = $conn->insert_id;
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
$sql="INSERT INTO `design` (`design_id`, `design_img`, `color_id`,`user_id`) VALUES ('".$genid."','".$filename."',$last_id,$user_id)";
// echo"$iduser1";
$conn->query($sql);
echo json_encode($polo);   
// Calling function auto generate unique name
tf_convert_base64_to_image( $data, 'images/design/',$genid ); 
printf("%d Row inserted.\n");
?>
