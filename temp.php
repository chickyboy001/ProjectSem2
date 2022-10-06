<?php  
            if (isset($error['username'])) {?>
                <div class="alert alert-danger" style="top: 155px; position: absolute; z-index: 5; width: auto; right: 0px;" role="alert">
                    <?php echo $error['username']?>
                </div>
            <?php } else if (isset($error['password'])) {?>
                <div class="alert alert-danger" style="top: 155px; position: absolute; z-index: 5; width: auto; right: 0px;" role="alert">
                    <?=$error['password']?>
                </div>
            <?php } else if (isset($error['full_name'])) {?>
                <div class="alert alert-danger" style="top: 155px; position: absolute; z-index: 5; width: auto; right: 0px;" role="alert">
                    <?=$error['full_name']?>
                </div>
            <?php } else if (isset($error['username_exist'])) {?>
                <div class="alert alert-danger" style="top: 155px; position: absolute; z-index: 5; width: auto; right: 0px;" role="alert">
                    <?=$error['username_exist']?>
                </div>
            <?php }
        ?>
        hiển thị tên đăng nhập sau khi đăng nhập
        <?php
                                                if (!empty($_SESSION['user'])) {?>
                                                    <li>
                                                        <button type="button" class="login-btn">
                                                            <i class="fa fa-user" aria-hidden="true"></i>
                                                            <?=$_SESSION['user']['username']?>
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <button type="button" class="login-btn">
                                                            <i class="fa fa-user" aria-hidden="true"></i>
                                                            <a href="?controller=logout" style="color: #fff">
                                                                Logout
                                                            </a>
                                                        </button>
                                                    </li>
                                                <?php } else {?>
                                                    <li>
                                                        <button type="button" class="login-btn" data-toggle="modal" data-target="#signup">
                                                            <i class="fa fa-user" aria-hidden="true"></i>
                                                            Signup
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <button type="button" class="login-btn" data-toggle="modal" data-target="#myModal">
                                                            <i class="fa fa-user" aria-hidden="true"></i>Login
                                                        </button>
                                                    </li>
                                                <?php }
                                            ?>