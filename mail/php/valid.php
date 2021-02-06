<?php
    $msgs = [];
	if (isset($_POST['name']) ) {
        if(empty($_POST['name'])) {
            $msgs['name'] = "Required";
        } else {
            if (!empty($_POST['name'])) {
                $name = "<span>Hello, </span>" . trim(strip_tags($_POST['name'])) . "<br>";
            }
            
        }
    }

    if (isset($_POST['email']) ) {
        if(empty($_POST['email'])) {
            $msgs['email'] = "Required";
        } else {
            if(!empty($_POST['email'])) {
                if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                    $email = trim(strip_tags($_POST['email']));
                } else {
                    $msgs['email'] = "Required";
                }
            }
        } 
    }

	if ($msgs) {
	    echo json_encode($msgs);
		die;
	} else {
        $msgs['success'] = 'Message has been sent';
    }