<?= validation_errors(); ?>
<form action="/register" method="post" class="form-horizontal clearfix registration"> 
    <div class="form-group">
         <label for="identity"  class="col-sm-3 control-label registration-descr">Логин:</label>
         <div class="col-sm-6">
            <input type="text" class="form-control" name="identity" value="<?= set_value('identity'); ?>" id="identity">
        </div>
    </div>

    <div class="form-group">
        <label for="email"  class="col-sm-3 control-label registration-descr">E-mail:</label>
        <div class="col-sm-6">
            <input type="email" class="form-control" name="email" value="<?= set_value('email'); ?>" id="email">
        </div>
    </div>

    <div class="form-group">
        <label for="first_name"  class="col-sm-3 control-label registration-descr">Имя:</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="first_name" value="<?= set_value('first_name'); ?>" id="first_name">
        </div>
    </div>

    <div class="form-group">
        <label for="last_name"  class="col-sm-3 control-label registration-descr">Фамилия:</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="last_name" value="<?= set_value('last_name'); ?>" id="last_name">
        </div>
    </div>

    <div class="form-group">
        <label for="company"  class="col-sm-3 control-label registration-descr">Компания:</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="company" value="<?= set_value('company'); ?>" id="company">
        </div>
    </div>

    <div class="form-group">
        <label for="phone"  class="col-sm-3 control-label registration-descr">Телефон:</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="phone" value="<?= set_value('phone'); ?>" id="phone">
        </div>
    </div>
    
    <div class="form-group">
        <label for="password"  class="col-sm-3 control-label registration-descr">Пароль:</label>
        <div class="col-sm-6">
            <input type="password" class="form-control" name="password" value="<?= set_value('password'); ?>" id="password">
        </div>
    </div>

    <div class="form-group">
        <label for="password_confirm"  class="col-sm-3 control-label registration-descr">Подтвердите пароль:</label>
        <div class="col-sm-6">
            <input type="password" class="form-control" name="password_confirm" value="<?= set_value('password_confirm'); ?>" id="password_confirm">
        </div>
    </div>
     <div class="col-sm-offset-3 col-sm-9">
        <input type="submit"  class="btn btn-default " name="" value="OK">
    </div>

</form>