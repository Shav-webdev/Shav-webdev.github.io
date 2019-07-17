jQuery(document).ready(function() {
    //slick carousel
    jQuery('.slick-carousel').slick({
        asNavFor: '.slider-nav',
        autoplay: false,
        infinity: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true
    });
    jQuery('.slider-nav').slick({
        asNavFor: '.slick-carousel',
        centerMode: true,
        centerPadding: '5px',
        arrows: false,
        slidesToShow: 6,
        slidesToScroll: 1,
        dots: false,
        focusOnSelect: true,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    infinite: true,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    centerMode: false,
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 480,
                settings: {
                    centerMode: false,
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });

   // $(".navbar").css("width", $(window).width() + "px")

});

function validateInputField(inputField, helpText) {
    let minLength = 1;
    let maxLength = 36;
    if ((inputField.value.length < minLength) || (inputField.value.length > maxLength)) {
        if (helpText != null ){
            helpText.innerHTML = "Please enter a value " + minLength + " to " + maxLength + " characters in length.";
        }
        return false;
    }
    else {
        if (helpText != null ){
            helpText.innerHTML = "";
        }
        return true;
    }
}



function validateRegEx(regex, inputStr, helpText, helpMessage) {
    if (!regex.test(inputStr)){
        if (helpText != null)
            helpText.innerHTML = helpMessage;
        return false;
    }
    else {
        if (helpText != null ){
            helpText.innerHTML = "";
        }
        return true;
    }
}

function validateEmail(inputField, helpText) {
    if (!validateInputField(inputField, helpText))
        return false;

return validateRegEx(/^[\w.-_+]+@[\w-]+(\.\w{2,4})+$/, inputField.value, helpText, "Invalid email address. Valid e-mail can contain only latin letters, numbers, '@' and '.'");
}



function changeLangToRus() {
    let navbarListLangRus = ["главная", "галерея", "мои навыки", "контакты", "войти", "регистрация"];
    let nodeParent = document.getElementsByTagName("ul")[0];
    let nodeChild = document.getElementsByTagName("ul")[0].childNodes[1];
    for (let i = 0; i < nodeParent.length; i += 2) {
        for (let j = 0; j < navbarListLangRus.length; j++) {
            if (i === 9) continue;
            nodeChild = document.getElementsByTagName("ul")[0].childNodes[i];
            nodeChild.childNodes[1].textContent = navbarListLangRus[j];
        }
    }
}














