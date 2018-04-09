<form action="" method="get">
    <div class="form-group">
        <label for="first_name">Имя</label>
        <input name="first_name" type="text" class="form-control" id="first_name" aria-describedby="first_nameHelp" placeholder=" Введите имя пользователя">
        <small id="first_nameHelp" class="form-text text-muted">Содержит не допустимые символы!</small>
    </div>
    <div class="form-group">
        <label for="middle_name">Отчество</label>
        <input type="text" class="form-control" id="middle_name" aria-describedby="middle_nameHelp" placeholder=" Введите имя пользователя">
        <small id="middle_nameHelp" class="form-text text-muted">Содержит не допустимые символы!</small>
    </div> <div class="form-group">
        <label for="last_name">Фамилия</label>
        <input name="last_name" type="text" class="form-control" id="name" aria-describedby="last_nameHelp" placeholder=" Введите имя пользователя">
        <small id="last_nameHelp" class="form-text text-muted">Содержит не допустимые символы!</small>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Введите email">
        <small id="emailHelp" class="form-text text-muted">Не является email!</small>
    </div>
    <div class="form-group">
        <label for="avatar">Фото</label>
        <input name="foto" type="file" class="form-control-file" id="File">
    </div>
    <div class="form-group">
        <label for="password">Пароль</label>
        <input name="password" type="password" class="form-control" id="password" placeholder="Введите пароль">
    </div>
    <div class="form-group">
        <label for="double_password">Повторите пароль</label>
        <input name="double_password" type="password" class="form-control" id="double_password" placeholder="Повторите пароль">
    </div>

    <button type="submit" class="btn btn-primary">Отправить</button>
</form>