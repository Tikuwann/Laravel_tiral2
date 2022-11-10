
<?php
function validation($request){//$?POST連想配列
  $errors=[];

  if (empty($request['name']) || 20 < mb_strlen($request['name'])){
      $errors[]='Enter your name under 20 Words.';
    }

    if (empty($request['email']) || !filter_var($request['email'],FILTER_VALIDATE_EMAIL)){
        $errors[]='Enter your MailAddress correctly.';
    }

    if (!empty($request['url'])){
        if(!filter_var($request['url'],FILTER_VALIDATE_URL)){
        $errors[]='Enter your URL correctly.';}
    }

    if (!isset($request['gender'])){
        $errors[]='Chose your Gender.';

    }
    if (empty($request['age']) || 6< $request['age']){
        $errors[]='Chose your age from the list.';
    }


    if (empty($request['contact']) || 10 > mb_strlen($request['contact'])){
        $errors[]='Enter at least 10 word into the text in the box .';

    }
    if(empty($request['caution']) || $request['caution']  === "1"){
    return $errors;
    }

}

?>
