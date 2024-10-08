<?php
/**
 * Thay đổi logo trang đăng nhập và đổi màu nền
 */
function tp_custom_logo()
{ ?>
    <style type="text/css">
        a:focus {
            box-shadow: none !important;
        }

        a {
            text-decoration: none;
        }

        body.login {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            background: linear-gradient(90deg, rgba(23, 27, 98, 1) 0%, rgba(87, 30, 193, 1) 35%, rgba(22, 169, 186, 1) 100%);
            padding-right: 15px;
            padding-left: 15px;
            margin-right: auto;
            margin-left: auto;
            width: 1170px;
        }

        body.login>#login-left {
            width: 35% !important;
            margin: auto 0 !important;
            height: max-content;
            background-image: url(<?php echo get_template_directory_uri() . '/images/sw-logo.svg'; ?>);
            background-repeat: no-repeat;
            background-size: contain;
            background-position: top;
            padding: 80px;
        }

        body.login>div#login {
            width: 30% !important;
            margin: auto 30px !important;
            background-color: #fff;
            border-radius: 10px;
            height: max-content;
            padding: 15px 0 0;
        }

        body.login>div#login h1 {
            display: none;
        }

        body.login>div#login form {
            margin: 0;
            padding: 40px 25px 0;
            border: none;
            position: relative;
        }

        body.login>div#login form:before {
            content: 'Vào Quản Trị';
            position: absolute;
            font-size: 24px;
            left: 50%;
            top: 0;
            transform: translateX(-50%);
        }

        body.login>div#login form p:first-child input {
            border-radius: 20px;
            padding: 0 15px;
        }

        body.login>div#login form .user-pass-wrap .wp-pwd input {
            border-radius: 20px;
            padding: 0 15px;
        }

        body.login>div#login form p.forgetmenot {
            width: 100%;
            margin: 0px 0px 15px;
        }

        body.login>div#login form p.submit input {
            width: 100%;
            height: 40px;
            background: #1abc9c;
            border: none;
            border-radius: 30px;
            box-shadow: none;
            text-shadow: none;
        }

        body.login>div#login p:first-child {
            text-align: left;
        }

        body.login>div#login p {
            text-align: center;
        }


        #login-left .logo {
            margin: 0 auto 15px;
        }

        #login-left .logo a {
            color: #fff;
            font-size: 14px;
            opacity: 0.6;
            letter-spacing: 1px;
            font-weight: 300;
            margin: 15px 0;
            text-align: justify;
        }

        #login-left .content-login-left {
            color: #fff;
            opacity: 0.8;
        }

        #login-left .content-login-left .login-name-ver {
            display: flex;
            align-items: center;
        }

        #login-left .content-login-left .login-name-ver .name {
            font-size: 28px;
            width: 50%;
        }

        #login-left .content-login-left .login-name-ver .ver {
            font-size: 14px;
            opacity: 0.6;
            width: 50%;
            text-align: right;
        }

        #login-left .content-login-left .description {
            font-size: 14px;
            opacity: 0.6;
            letter-spacing: 1px;
            font-weight: 300;
            margin: 15px 0;
            text-align: justify;
        }

        #login-left .content-login-left .epal-support ul {
            list-style: none;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding: 15px 0;
            border: 1px solid #80808066;
            border-left: none;
            border-right: none;
        }

        #login-left .content-login-left .epal-support ul li {
            padding: 5px 20px;
        }

        #login-left .content-login-left .epal-support ul li a {
            color: #fff;
            text-transform: uppercase;
            text-decoration: none;
        }

        #login-left .content-login-left .social ul {
            display: flex;
            justify-content: center;
            list-style: none;
            padding: 20px;
        }

        #login-left .content-login-left .social ul li {
            width: 15px;
            height: 15px;
            margin: 0 15px;
        }

        #login-left .content-login-left .social ul li a {
            color: #fff;
            outline: none;
        }

        .submit input:hover,
        a:hover {
            opacity: 0.8;
        }

        #login-left .content-login-left .social ul li a img {
            height: 100%;
            object-fit: cover;
        }

        #login-left .content-login-left .logo-epal-bottom {
            text-align: center;
            margin-top: 10px;
        }

        #login-left .content-login-left .logo-epal-bottom a {
            color: transparent;
        }

        #login-left .content-login-left .logo-epal-bottom a img {
            max-width: 100px;
            height: auto;
            margin: 0 7px 10px;
        }

        @media screen and (max-width: 1199px) {
            body.login {
                width: 970px;
                margin: 20px auto;
            }

            body.login>#login-left {
                width: 40% !important;
            }

            body.login>div#login {
                width: 35% !important;
            }
        }

        @media screen and (max-width: 991px) {
            body.login {
                width: 750px;
            }

            body.login>div#login {
                width: 40% !important;
                margin: auto 15px !important;
            }

            body.login>#login-left {
                width: 45% !important;
                margin: auto 0 !important;
                padding: 30px 30px 10px;
            }

            #login-left .content-login-left .login-name-ver .name {
                font-size: 24px;
            }

            #login-left .content-login-left .logo-epal-bottom a img {
                max-width: 80px;
            }

        }

        @media screen and (max-width: 767px) {
            body.login {
                width: auto;
                padding: 0;
                height: auto;
                flex-direction: column-reverse;
            }

            body.login>#login-left {
                width: 60% !important;
                margin: 10px auto 0 !important;
            }

            body.login>div#login {
                width: 50% !important;
                margin: 0 auto 20px !important;
            }
        }

        @media screen and (max-width: 575px) {
            body.login>#login-left {
                width: 80% !important;
            }

            body.login>div#login {
                width: 60% !important;
            }
        }

        @media screen and (max-width: 450px) {
            body.login>div#login {
                width: 70% !important;
            }
        }
    </style>
    <div id="login-left">
        <div class="logo" style="overflow: hidden">
            <a href="#" style="display: flex; align-items:center;">
                <img style="width:150px; height: 40px; object-fit: cover;"
                    src="<?php echo get_template_directory_uri() . '/images/sw-no-bg.png'; ?>">
                <span>STARTUP WEBSITE</span>
            </a>
        </div>
        <div class="content-login-left">
            <div class="login-name-ver">
                <div class="name">
                    SW WP CMS
                </div>
                <div class="ver">
                    ver 7.0.0
                </div>
            </div>
            <div class="description">
                Đăng nhập quản trị website chuyên nghiệp trên nền tảng CMS Wordpress, Được xây dựng bởi Startup Website.
            </div>
            <div class="epal-support">
                <ul>
                    <li>
                        <a href="https://epal.vn/lien-he/" target="_blank">
                            Liên Hệ
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
<?php }

add_action('login_enqueue_scripts', 'tp_custom_logo'); ?>