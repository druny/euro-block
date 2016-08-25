<?= validation_errors(); ?>
<div class="text-center">
    <label for="individual-btn">Физ. лицо</label>
    <input type="radio" name="member_type" id="individual-btn" checked>
    <label for="organization-btn">Юр. лицо</label>
    <input type="radio" name="member_type" id="organization-btn">
</div>

<form action="/register" method="post" class="form-horizontal clearfix registration " id="individual-form"> 
    <input type="hidden" name="member_type" value="1">
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
        <label for="passport"  class="col-sm-3 control-label registration-descr">Серия и номер паспорта:</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="passport" value="<?= set_value('passport'); ?>" id="passport">
        </div>
    </div>

    <div class="form-group">
        <label for="issued_by"  class="col-sm-3 control-label registration-descr">Кем выдан:</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="issued_by" value="<?= set_value('issued_by'); ?>" id="issued_by">
        </div>
    </div>

    <div class="form-group">
        <label for="registration_place"  class="col-sm-3 control-label registration-descr">Место регистрации:</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="registration_place" value="<?= set_value('registration_place'); ?>" id="registration_place">
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
<form action="/register" method="post" class="form-horizontal clearfix registration" id="organization-form"> 
    <input type="hidden" name="member_type" value="2">

    <div class="form-group">
        <label for="email"  class="col-sm-3 control-label registration-descr">E-mail:</label>
        <div class="col-sm-6">
            <input type="email" class="form-control" name="email" value="<?= set_value('email'); ?>" id="email">
        </div>
    </div>

    <div class="form-group">
         <label class="col-sm-3 control-label registration-descr">Форма собственности:</label>
         <div class="col-sm-6">
            <?php foreach ($ownership_types as $ownership_type): ?>
                <div class="">
                    <label for="<?= $ownership_type->type; ?>"><?= $ownership_type->type; ?></label>
                    <input type="radio" class="" name="ownership_type" value="<?= $ownership_type->id; ?>" id="<?= $ownership_type->type; ?>">
                </div>
            <?php endforeach; ?>
        </div>
    </div>


    <div class="form-group">
        <label for="company"  class="col-sm-3 control-label registration-descr">Название компании:</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="company" value="<?= set_value('company'); ?>" id="company">
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
        <label for="phone"  class="col-sm-3 control-label registration-descr">Телефон:</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="phone" value="<?= set_value('phone'); ?>" id="phone">
        </div>
    </div>

    <div class="form-group">
        <label for="legal_address"  class="col-sm-3 control-label registration-descr">Юридический адрес:</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="legal_address" value="<?= set_value('legal_address'); ?>" id="legal_address">
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