<?php $TO = "antonin.solacroup@gmail.com"; $h = "From: geniemec4l@site.com" . $TO; $message = ""; while (list($key, $val) = each($HTTP_POST_VARS)) 
{ $message .= "$key : $val\n"; } mail($TO, $subject, $message, $h); Header("Location: https://geniemec4l.netlify.app/gmcontact"); ?>