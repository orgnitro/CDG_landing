<?php
    $msgs = [];
	if (isset($_POST['name']) ) {
        if(empty($_POST['name'])) {
            $msgs['name'] = 'Required';
        } else {
            if (!empty($_POST['name'])) {
                $name = "<p>Hello, " . trim(strip_tags($_POST['name'])) . "<br></p>";
            }
            
        }
    }

    // if (isset($_POST['tel']) ) {
    //     if(empty($_POST['tel']) && TELISREQUIRED) {
    //         $msgs['tel'] = MSGSTELERROR;
    //     } else {
    //         if (!empty($_POST['tel'])) {
    //             $tel = "<b>Телефон: </b> " . trim(strip_tags($_POST['tel'])) . "<br>";
    //         }
    //     }
    // }

    if (isset($_POST['email']) ) {
        if(empty($_POST['email'])) {
            $msgs['email'] = 'Required';
        } else {
            if(!empty($_POST['email'])) {
                if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                    $email = trim(strip_tags($_POST['email']));
                } else {
                    $msgs['email'] = 'Required';
                }
            }
        } 
    }

    // if (isset($_POST['text']) ) {
    //     if(empty($_POST['text']) && TEXTISREQUIRED) {
    //         $msgs['text'] = MSGSTEXTERROR;
    //     } else {
    //         if (!empty($_POST['text'])) {
    //             $text = "<b>Сообщение: </b> " . trim(strip_tags($_POST['text'])) . "<br>";
    //         }
    //     }
    // }

    // foreach ($_FILES["files"]["error"] as $key => $error) {
    //     if (!$error == UPLOAD_ERR_OK  && FILEISREQUIRED) {
    //          $msgs['file'] = MSGSFILEERROR;
    //     }
    // }

    // if(empty($_POST['agreement']) && AGGREMENTISREQUIRED) {
    //     $msgs['agreement'] = MSGSAGGREMENTERROR;
    // } else {
    //     if (!empty($_POST['agreement'])) {
    //         $agreement = "<b>Соглашение: </b> пользовательское соглашение принято " . "<br>";
    //     }
    // }

    
    //  if((empty($_POST['email']) && empty($_POST['tel'])) && (!EMAILISREQUIRED && !TELISREQUIRED)) {
    //      $msgs['attantion'] = 'Заполните хотя бы одно контактное поле для связии с вами';
    //  }

	if ($msgs) {
	    echo json_encode($msgs);
		die;
	} else {
        $msgs['success'] = 'Message has been sent';
    }