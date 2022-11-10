<?php

use PhpParser\Node\Expr\Isset_;

session_start();

require 'validation.php';


header('X-FRAME-OPTIONS:DENY');

if(!empty($_POST)){
    echo '<pre>';
    var_dump($_POST);
    echo '</pre>';
}


function h($str)
{
    return htmlspecialchars($str, ENT_QUOTES,'UTF-8');
}


$pageflag = 0;
$errors = validation($_POST);



if(!empty($_POST['btn_confirm']) && empty($errors)){
$pageflag = 1;
}

if(!empty($_POST['btn_submit'])){
$pageflag = 2;
}



?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <h1>Hello, world!</h1>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->


<?php if($pageflag === 0) : ?>
<?php
if(!Isset($_SESSION['csrfToken'])){
$csrfToken = bin2hex(random_bytes(64));
$_SESSION['csrfToken'] = $csrfToken;
}
$token = $_SESSION['csrfToken'];
?>
入力画面
<?php if(!empty($errors)&& !empty($_POST['btn_confirm'])):?>
        <?php echo    '<ul>' ;?>
            <?php
            foreach($errors as $error){
               echo '<li>'.$error.'</li>';
            }
            ?>
        <?php echo    '</ul>' ;?>
    <?php endif ;?>
            <div class="row">
            <div class="col-6">
<form method="POST" action="input.php">
    <div class="form-group">
    <lavel for="name">Name</lavel>
    <input type="text" class="form-group" id="name" name="name" value="<?php if(!empty($_POST['name'])){echo h($_POST['name']) ; }?>" required>
            </div>




<lavel for="email">Mail</lavel>
<input type="text" class="form-group" id="email" name="email" value="<?php if(!empty($_POST['email'])){echo h($_POST['email']) ; }?>" required>
</div>


<div class="form-group">


    <lavel for="url">Homepage</lavel>
    <input type="url" class="form-group" id="url" name="url" value="<?php if(!empty($_POST['url'])){echo h($_POST['url']) ; }?>">

</div>



<div class="row">
<div class="form-group">

Gender
<div class="form-check form-check-inline" >
  <input class="form-check-input" type="radio" name="gender" id="gender1" value="1"<?php if(!empty($_POST['gender']) && $_POST['gender'] === '1'){ echo 'checked';} ?> >
  <label class="form-check-label" for="gender1">Male</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="gender" id="gender2" value="2" <?php if(!empty($_POST['gender']) && $_POST['gender'] === '2'){ echo 'checked';} ?>>
  <label class="form-check-label" for="gender2">Female</label>
</div>
<div class="form-check form-check-inline" >
  <input class="form-check-input" type="radio" name="gender" id="3" value="3" <?php if(!empty($_POST['gender']) && $_POST['gender'] === '3'){ echo 'checked';} ?>>
  <label class="form-check-label" for="3">Other</label>
</div>
</div>
</div>

<div class="row">
<div clas="col-6">

            <div class="form-group">
            <div class="row">
<div clas="col-6">

        <label for="age">Age</label>
        <select class="form-control" id="age" name="age" required >
        <option value='0'<?php if(!empty($_POST['age']) && $_POST['age'] === '0') { echo 'selected';} ?>>Select one</option>
        <option value="1"<?php if(!empty($_POST['age']) && $_POST['age'] === '1') { echo 'selected';} ?>>〜19</option>
        <option value="2"<?php if(!empty($_POST['age']) && $_POST['age'] === '2') { echo 'selected';} ?>>20〜29</option>
        <option value="3"<?php if(!empty($_POST['age']) && $_POST['age'] === '3') { echo 'selected';} ?>>30〜39</option>
        <option value="4"<?php if(!empty($_POST['age']) && $_POST['age'] === '4') { echo 'selected';} ?>>40〜49</option>
        <option value="5" <?php if(!empty($_POST['age']) && $_POST['age'] === '5') { echo 'selected';} ?>>50〜59</option>
        <option value="6" <?php if(!empty($_POST['age']) && $_POST['age'] === '6') { echo 'selected';} ?>>60〜</option>
        </select>
        </div>
        </div>

        </div>
</div>


    <div class="row">
            <div class="col-12">

    TEXTForm
    <br>
    <textarea name="contact">
    <?php if(!empty($_POST['contact'])){echo h($_POST['contact']) ; }?>
    </textarea>
        </div> </div>

        <div class="row">
            <div class="col-12">
    <div class="form-check">
<input class="form-check-input" type="checkbox" name="caution" value="" id="flexCheckDefault">
<label class="form-check-label" for="flexCheckDefault">
    OK
  </label>
</div></div></div>

<input type="hidden" name="csrf" value="<?php echo h($token);?>">


<br>

<div class="col">

<input class="btn btn-primary" type="submit" name="btn_confirm" ></button>
<input type="hidden" name="csrf" value="<?php echo h($token);?>">
</form>
        </div>

<?php endif; ?>

<?php if($pageflag === 1) : ?>
    <?php if($_POST['csrf']=== $_SESSION['csrfToken']):?>
    <form method="POST" action="input.php">

    <h1>確認画面</h1>
    Name :
    <?php echo h($_POST['name']);?>
    <br>

    Mail :
    <?php echo h($_POST['email']);?>
    <br>
    <br>
    HomePage :
    <?php echo h($_POST['url']); ?>

    <br>
    Gender :
    <?php
    if($_POST['gender'] == '0'){ echo h("Male");}
    if($_POST['gender'] == '1'){ echo h("Female");}
    if($_POST['gender'] == '2'){ echo h("Other");}

    ?>

    <br>
    Age :
    <?php
    if($_POST['age'] == '1'){ echo h("〜19");}
    if($_POST['age'] == '2'){ echo h("20〜29");}
    if($_POST['age'] == '3'){ echo h("30〜39");}
    if($_POST['age'] == '4'){ echo h("40〜49");}
    if($_POST['age'] == '5'){ echo h("50〜59");}
    if($_POST['age'] == '6'){ echo h("60〜");}

    ?>

    <br>
    TEXTForm
    <br>
    <br>
    <?php echo h($_POST['contact']); ?>
    <br>




    <input type="submit" name="back" value="Back">
    <input type="submit" name="btn_submit" value="Submit">
    <input type="hidden" name="name" value="<?php echo h($_POST['name']);?>">
    <input type="hidden" name="email" value="<?php echo h($_POST['email']);?>">
    <input type="hidden" name="url" value="<?php echo h($_POST['url']);?>">
    <input type="hidden" name="gender" value="<?php echo h($_POST['gender']);?>">
    <input type="hidden" name="age" value="<?php echo h($_POST['age']);?>">
    <input type="hidden" name="contact" value="<?php echo h($_POST['contact']);?>">

    <input type="hidden" name="csrf" value="<?php echo h($token);?>">
    </form>
    <?php endif; ?>

    <?php if($_POST['csrf'] != $_SESSION['csrfToken']):?>

    Error:Please Re-enter from the beginning.
    <a href="http://localhost:8000/input.php">Click Here</a>

    <?php endif; ?>

<?php endif; ?>

<?php if($pageflag === 2) : ?>
    <br>

送信完了
<?php unset($_SESSION['csrfToken']); ?>
<?php endif; ?>







</body>
</html>
