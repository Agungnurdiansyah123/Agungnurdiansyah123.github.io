$(document).ready(function(){
    $('#nav2').click(function(){
        $('.nav-animation').animate({marginLeft: '103px', width: '40px'}, "slow");
        $('#nav2').addClass('baru');
        $('#nav1').removeClass('baru');
        $('#nav3').removeClass('baru');
        $('#nav4').removeClass('baru');
        $('#nav5').removeClass('baru');
    });
});

$(document).ready(function(){
    $('#nav1').click(function(){
        $('.nav-animation').animate({marginLeft: '5px', width: '80px'}, "slow");
        $('#nav2').removeClass('baru');
        $('#nav1').addClass('baru');
        $('#nav3').removeClass('baru');
        $('#nav4').removeClass('baru');
        $('#nav5').removeClass('baru');
    });
});

$(document).ready(function(){
    $('#nav3').click(function(){
        $('.nav-animation').animate({marginLeft: '163px', width: '40px'}, "slow");
        $('#nav2').removeClass('baru');
        $('#nav1').removeClass('baru');
        $('#nav3').addClass('baru');
        $('#nav4').removeClass('baru');
        $('#nav5').removeClass('baru');
    });
});


$(document).ready(function(){
    $('#nav4').click(function(){
        $('.nav-animation').animate({marginLeft: '223px', width: '82px'}, "slow");
        $('#nav2').removeClass('baru');
        $('#nav1').removeClass('baru');
        $('#nav3').removeClass('baru');
        $('#nav4').addClass('baru');
        $('#nav5').removeClass('baru');
    });
});

$(document).ready(function(){
    $('#nav5').click(function(){
        $('.nav-animation').animate({marginLeft: '321px', width: '69px'}, "slow");
        $('#nav2').removeClass('baru');
        $('#nav1').removeClass('baru');
        $('#nav3').removeClass('baru');
        $('#nav4').removeClass('baru');
        $('#nav5').addClass('baru');
    });
});

$(document).ready(function(){
    let menunav = document.querySelector('.nav-responsive');
    let navscroll = document.querySelector('nav');
    let login = document.querySelector('.login');
        menunav.onclick = function(){
            menunav.classList.toggle('active');
            navscroll.classList.toggle('active');
            login.classList.toggle('active');
        }
    });







