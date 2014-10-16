<ul>
    <li>
        <input type="text" name="username" id="username" class="text" maxlength="30" placeholder="邮箱/用户名" value="<?php if(isset($_COOKIE['saved_name'])) echo $_COOKIE['saved_name']; ?>">
    </li>
    <li>
        <!--<input type="password" name="txtpwd" id="txtpwd" class="text" maxlength="20" placeholder="">-->
        <input type="password" name="password" id="password" class="text" maxlength="20" placeholder="密码">
    </li>
    <li>
        <input type="checkbox" id="remember" name="remember" value="1">
        记住用户名
        <span>
            |
        </span>
        <a href="/module/user/register.php" class="btn-register">
            立即注册
        </a>
    </li>
    <li class="btn-list">
        <input type="button" value=" " class="btn-login">
    </li>
</ul>