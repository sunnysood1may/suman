/*--------------------------
  preloader
  ---------------------------- */
$(window).on('load', function () {
    var pre_loader = $('#preloader');
    pre_loader.fadeOut('0.5s', function () {
        $(this).remove();
    });
});

$(document).on('click', '.main-menu-item > a', function (e) {
    $('.main-menu-item > a').removeClass('active');
    $(this).addClass('active');
});

$(document).on('click', '.sidebar-mobile-menu', function (e) {
    $('.x-grid-view').addClass('overflow_hidden');
    $('.menu-backdrop.fade').fadeIn('speed', function () {
        $('#menu.side-nav').addClass('side-nav-active');
        $('.menu-backdrop.fade').addClass('in');
        $('#menu.side-nav').removeClass('side-nav-inactive');
    });
});

$(document).on('click', '.close-mobile-menu', function (e) {
    $('.x-grid-view').removeClass('overflow_hidden');
    $('.menu-backdrop.fade').fadeOut('speed', function () {
        $('#menu.side-nav').addClass('side-nav-inactive');
        $('.menu-backdrop.fade').removeClass('in');
        $('#menu.side-nav').removeClass('side-nav-active');
    });
});

/*** Email validate ***/
function validateEmail(email) {
    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    return emailReg.test( email );
}

/*** Password validate ***/
function validatePassword(pass) {
    var passReg = /^(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/;
    return passReg.test( pass );
}

function validateLogin() {
    var error = 0;

    if($("#email_login").val().length < 1)
    {
        $("#login-error-email").removeClass('d-none');
        error = 1;
    }

    if($("#password_login").val().length < 1)
    {
        $("#login-error-password").removeClass('d-none');
        error = 1;
    }

    if(error == 1)
        return false;
}

function login()
{
    var error = 0;
    if($("#email_login").val().length < 1)
    {
        $("#login-error-email").removeClass('d-none');
        error = 1;
    }

    if($("#password_login").val().length < 1)
    {
        $("#login-error-password").removeClass('d-none');
        error = 1;
    }

    if(error == 0)
    {
        // $('.login-content').LoadingOverlay('show');
        $(body).append('<div id="preloader"></div>');

        var email = $('#email_login').val();
        var password = $('#password_login').val();

        $.ajax({
            type: "POST",
            url: "../admin/login",
            data : {
                email: email,
                password: password
            },
            success: function(response){       
                // $('.login-content').LoadingOverlay('show');
                var pre_loader = $('#preloader');
                //var res = JSON.parse(response);
                //if(res.length > 0 && res[0].status != undefined && res[0].msg != undefined && res[1].url != undefined){
                    if(response == "success"){     
                        /*swal(response, {
                            icon: "success",
                            buttons: false,
                            timer: 1500,
                        });*/
                        //setTimeout(function(){ 
                        location.href = "../admin/dashboard";
                        //}, 1000);
                    }else{ 
                        alert(response);
                        pre_loader.fadeOut('0.5s', function () {    $(this).remove();   });
                        /*swal(response, {
                            icon: "error",
                            buttons: false,
                            timer: 1500,
                        });*/
                    }
                //}
            }
        });
    }

    return false;
}

$(document).on('keypress', '.login-form input', function (e) {
    if(e.which == 13) {
        login();
    }
});

$(document).on('click', '#login_button', function () {
    login();
});