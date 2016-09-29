<?php	

$type = strip_tags(htmlspecialchars($_POST['type']));
$content = strip_tags(htmlspecialchars($_POST['content']));
$knowledge = strip_tags(htmlspecialchars($_POST['knowledge']));
$present = strip_tags(htmlspecialchars($_POST['present']));
$recommend = strip_tags(htmlspecialchars($_POST['recommend']));
$message = strip_tags(htmlspecialchars($_POST['message']));
	

$to = 'contact@365onlinetraining.com'; 
$email_subject = "365 Online Training Feedback Form:";
$email_body = "You have received a feed from your website contact form.\n\n"."Here are the details:\n\nTraining Program: $type\n\nGrade Course Content: $content\n\nGrade Subject Knowledge: $knowledge\n\nGrade Presentation: $present\n\nFurther Recommendation: $recommend\n\nFurther Suggestions:$message";
$headers = "From: noreply@yourdomain.com\n"; 
mail($to,$email_subject,$email_body,$headers);
return true;			
?>
