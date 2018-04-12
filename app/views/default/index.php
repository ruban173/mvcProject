<form action="" method="get">

    <div class="form-group">
        <label for="name">Имя</label>
        <input type="text" class="form-control" id="name" aria-describedby="nameHelp" placeholder=" Введите имя пользователя">
        <small id="emailHelp" class="form-text text-muted">Содержит не допустимые символы!</small>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Введите email">
        <small id="emailHelp" class="form-text text-muted">Не является email!</small>
    </div>
    <div class="form-group">
        <label for="text">Комментарий</label>
        <textarea name="text" class="form-control" id="text" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Отправить</button>
</form>

<?
//$user=new User();
/*$user->first_name="Алексей";
$user->middle_name="Николаевич";
$user->last_name="Форкин";
$user->email="email@email.ru";
$user->type="user";
$user->password="123456";
$user->double_password="123456";
$user->foto="foto";
$user->status="Активен";*/

$user=new LoginForm;
$user->email="email@email.ru";

$user->password="123456";
$user->_remembe=true;
print_r($user->login());

//print_r($user->validate());

//print_r($user->errorMessages);

  //  $user->create();



//print_r(Config::getInstance()->getParams('db'));

?>