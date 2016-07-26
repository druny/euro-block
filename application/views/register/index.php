<?= validation_errors(); ?>
<form action="/register" method="post">
    <label for="identity">Логин:</label>
    <input type="text" name="identity" value="<?= set_value('identity'); ?>" id="identity">
    <br>
    <label for="email">E-mail:</label>
    <input type="email" name="email" value="<?= set_value('email'); ?>" id="email">
    <br>
    <label for="password">Пароль:</label>
    <input type="password" name="password" value="<?= set_value('password'); ?>" id="password">
    <br>
    <label for="password_confirm">Подтвердите пароль:</label>
    <input type="password" name="password_confirm" value="<?= set_value('password_confirm'); ?>" id="password_confirm">
    <br>
    <input type="submit" name="" value="OK">
</form>