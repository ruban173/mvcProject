<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="first_name">Имя</label>
        <input value="<?=$this->model->first_name?>" name="first_name" type="text" class="form-control  <?=$this->model->printValidateInput("first_name")?>" id="first_name" aria-describedby="first_nameHelp" placeholder=" Введите имя пользователя">
        <?=$this->model->printValidateMessage("first_name")?>

    </div>
    <div class="form-group">
        <label for="middle_name">Отчество</label>
        <input  value="<?=$this->model->middle_name?>" name="middle_name" type="text" class="form-control <?=$this->model->printValidateInput("middle_name")?>" id="middle_name" aria-describedby="middle_nameHelp" placeholder=" Введите имя пользователя">
        <?=$this->model->printValidateMessage("middle_name")?>
    </div> <div class="form-group">
        <label for="last_name">Фамилия</label>
        <input  value="<?=$this->model->last_name?>"name="last_name" type="text" class="form-control <?=$this->model->printValidateInput("last_name")?>" id="last_name" aria-describedby="last_nameHelp" placeholder=" Введите имя пользователя">
        <?=$this->model->printValidateMessage("last_name")?>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input  value="<?=$this->model->email?>"name="email" type="email" class="form-control <?=$this->model->printValidateInput("email")?>" id="email" aria-describedby="emailHelp" placeholder="Введите email">
        <?=$this->model->printValidateMessage("email")?>
    </div>
    <div class="form-group">
        <label for="photo">Фото</label>
        <input name="photo" type="file" class="form-control  <?=$this->model->printValidateInput("photo")?>"  id="photo" aria-describedby="photolHelp"">
        <?=$this->model->printValidateMessage("photo")?>
    </div>

    <div class="form-group">
        <label for="password">Пароль</label>
        <input  value="<?=$this->model->password?>" name="password" type="password" class="form-control <?=$this->model->printValidateInput("password")?>" id="password" placeholder="Введите пароль">
        <?=$this->model->printValidateMessage("password")?>
    </div>
    <div class="form-group">
        <label for="double_password">Повторите пароль</label>
        <input name="double_password" type="password" class="form-control <?=$this->model->printValidateInput("double_password")?>" id="double_password" placeholder="Повторите пароль">
        <?=$this->model->printValidateMessage("double_password")?>
    </div>

    <button type="submit" class="btn btn-primary">Отправить</button>
</form>
<?
print_r($this)
?>