$new_name = date("YmdHis");
$new_name .= mt_tand();
$size = getimge($_FILES['image']['tmp_name']);
case IMAGETYPE_JPEG: $new_name .='.JPEG';
break;
case IMAGETYPE_GIF: $new_name .='.gif';
break;

case IMAGETYPE_PNG: $new_name.= '.png';
break;
defult: header('Location: upload.php');
exit()

