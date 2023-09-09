<?php
 require_once "core/init.php";

 if(Input::exists()){
   $validate = new Validate;
   $validation = $validate->check($_POST,array(
    'username'=>array(
        'required' => true,
        'min'=> 4,
        'max ' => 20,
        'unique' => 'users'
    ),
    'password'=> array(
        'required' => true,
         'min'=> 8
    ),
    'password_again'=> array(
        'required' => true,
         'matches' => 'password' 
    ),
    'name'=>array(
        'required'=>true,
        'min'=> 3,
        'max'=> 20
    )
    ));
    if($validation->passed()){
        echo 'Passed';
    }
}
?>
<form action="" method="post" style="padding: 20px;">
    <div class="fields">
        <label for="username">Enter Your UserName</label>
        <input type="text" name="username" id="username" value="<?php Input::get('username'); ?>">
    </div>
    <div class="fields">
        <label for="password">Enter Your Password </label>
        <input type="password" name="password" id="password">
    </div>
    <div class="fields">
        <label for="password_again">Enter Your confirm Password</label>
        <input type="password" name="password_again" id="password_again">
    </div>
    <div class="fields">
        <label for="name">Enter Your Name</label>
        <input type="text" name="name" id="name" value="<?php Input::get('name'); ?>">
    </div>
    <input type="submit" value="Register">
</form>