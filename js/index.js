$(function () {
    $(".service").click(function () {
        let id = $(this).attr("id");
        $(".service").removeClass("active");
        $(this).addClass("active");
        $(".description_text").removeClass("active");
        $("#" + id + "_text").addClass("active");
    });
});

$(function () {
    $('a[href^="a"]').click(function () {
        var adjust = 0;
        var speed = 800;
        var href = $(this).attr("href");
        var target = $(href == "a" || href == "" ? 'html' : href);
        var position = target.offset().top + adjust;
        $('body,html').animate({ scrollTop: position }, speed, 'swing');
        return false;
    });
});

$(function () {
    $('#js-hamburger-menu, .navigation__link').on('click', function () {
        $('.navigation').slideToggle(500)
        $('.hamburger-menu').toggleClass('hamburger-menu--open')
    });
});

$(function () {

    let city_data = {
        "SS席": [
        ],
        "S席": [
        ],
        "A席": [
        ],
        "B席": [
        ],
        "C席": [
        ]
    }

    $('select[name="prefecture"]').change(function () {
        let prefecture = $(this).val();
        let cities = city_data[prefecture];
        $('select[name="city"]').html("");
        cities.forEach(element => {
            $('select[name="city"]').append("<option value='" + element + "'>" + element + "</option>")
        });
    })

    $("form").submit(function () {
        let prefecture = $('select[name="prefecture"]').val()
        if (prefecture == "") {
            $(".prefecture_varidation").css("display", "block")
            return false;
        }

        let city = $('select[name="city"]').val()
        if (city == "") {
            $(".city_varidation").css("display", "block")
            return false;
        }

        let tel = $('input[type="tel"]').val();
        if (tel) {
            const regexp = /^0\d{9,10}$/;
            if (!regexp.test(tel)) {
                $(".tel_varidation").css("display", "block")
                return false;
            }
        }
    });
})

$(document).ready(function () {
    var $form = $('#myForm');
    var $submitButton = $('#submitButton');
    var $requiredFields = $form.find('input[required], select[required]');
    var $nameField = $form.find('input[name="name"]');
    var $emailField = $form.find('input[name="email"]');

    function isValidName(name) {
        return name && name.trim().length > 0;
    }

    function isValidEmail(email) {
        var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailPattern.test(email);
    }

    function checkRequiredFields() {
        var allFilled = true;
        var validName = isValidName($nameField.val() || '');
        var validEmail = isValidEmail($emailField.val() || '');

        $requiredFields.each(function () {
            if (!$(this).val().trim()) {
                allFilled = false;
                return false;
            }
        });

        var allValid = allFilled && validName && validEmail;

        $submitButton.prop('disabled', !allValid);
        if (allValid) {
            $submitButton.css('opacity', '1');
        } else {
            $submitButton.css('opacity', '0.5');
        }
    }

    $requiredFields.on('input change', checkRequiredFields);

    checkRequiredFields();
});


$(document).ready(function () {
    $('.service').on('click', function () {
        $('.service').removeClass('active');
        $(this).addClass('active');
    });
});

$(document).ready(function () {
    $('a[href^="#"]').on('click', function (event) {
        event.preventDefault();
        var speed = 800;
        var href = $(this).attr("href");
        var target = $(href === "#" || href === "" ? 'html' : href);
        var position = target.offset().top - ($(window).height() / 2 - target.height() / 2);

        if (href === "#schedule") {
            position = target.offset().top;
        } else if (href === "#service") {
            position = target.offset().top;
        } else if (href === "#contact") {
            position = target.offset().top + 300;
        } else {
            position = target.offset().top;
        }

        $('html, body').animate({ scrollTop: position }, speed, 'swing');
    });
});

$(document).ready(function () {
    $('.service').hover(
        function () {
            $(this).addClass('hover-effect');
        }, function () {
            $(this).removeClass('hover-effect');
        }
    );
});
