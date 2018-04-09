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
print_r(Config::getInstance()->getParams('db'));

?>