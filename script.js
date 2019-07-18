jQuery(document).ready(function() {
    //slick carousel
    jQuery(".slick-carousel").slick({
        asNavFor: ".slider-nav",
        autoplay: false,
        infinity: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true
    });
    jQuery(".slider-nav").slick({
        asNavFor: ".slick-carousel",
        centerMode: true,
        centerPadding: "5px",
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
        ]
    });

   // $(".navbar").css("width", $(window).width() + "px")

});

//validation input field

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


//validation input field via regex

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
    //validate email input

    function validateEmail(inputField, helpText) {
        if (!validateInputField(inputField, helpText)) {
            return false;
        }
    return validateRegEx(/^[\w.-_+]+@[\w-]+(\.\w{2,4})+$/, inputField.value, helpText, "Invalid email address. Valid e-mail can contain only latin letters, numbers, '@' and '.'");
}



/*function changeLangToRus(e) {
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
}*/

const translations = {
    'en': {
        "home": "Home",
        "gallery": "Gallery",
        "my_skills": "Skills",
        "contacts": "Contacts",
        "sign_in": "Sign in",
        "sign_up": "sign up",
        "header-smart": "Smart person, clear code",
        "web-dev": "Web programming",
        "web-dev-tech": "Web development technologies",
        "mod-sign_up": "Sign up",
        "modal_form_name": "Full name",
        "modal_form_email": "Email",
        "modal_form_pass": "Password",
        "modal_form_repeat-pass": "Repeat password",
        "f-text": " By creating an account, I agree to shav.blog.am’s Terms of Use and Privacy Policy.",
        "mod-btn-reg": "Register",
    },
    'ru': {
        "home": "главная",
        "gallery": "галерея",
        "my_skills": "навыки",
        "contacts": "контакты",
        "sign_in": "войти",
        "sign_up": "регистрация",
        "header-smart": "Умный человек, понятный код",
        "web-dev": "Веб программирование",
        "web-dev-tech": "Технологии веб-разработки",
        "mod-sign_up": "Регистрация",
        "modal_form_name": "ФИО",
        "modal_form_email": "Эл. адрес",
        "modal_form_pass": "Пароль",
        "modal_form_repeat-pass": "Повторите пароль",
        "f-text": " Создавая аккаунт, я согласен с Условиями использования и политикой конфиденциальности shav.blog.am.",
        "mod-btn-reg": "Регистрация",



    },
    'hy': {
        "home": "Գլխավոր",
        "gallery": "Պատկերասրահ",
        "my_skills": "հմտություններ",
        "contacts": "կապ",
        "sign_in": "մուտք",
        "sign_up": "գրանցում",
        "header-smart": "Խելացի մարդ, հստակ կոդ",
        "web-dev": "Վեբ ծրագրավորում",
        "web-dev-tech": "Վեբ զարգացման տեխնոլոգիաները",
        "modal_form_name": "Ամբողջական անունը",
        "modal_form_email": "էլ. հասցե",
        "modal_form_pass": "Գաղտնաբառը",
        "modal_form_repeat-pass": "Կրկնեք գաղտնաբառը",
        "f-text": " Գրանցվելով, ես համաձայնում եմ shav.blog.am- ի Օգտագործման պայմաններին եւ գաղտնիության քաղաքականությանը:",
        "mod-btn-reg": "Գրանցում",
    }
};

function fillNavContent(lang) {
    const obj = translations[lang];
    Object.keys(obj).forEach((el) => {
        document.querySelectorAll('.' + el + '-tr')[0].innerHTML = obj[el];
    })
}

fillNavContent('en');

document.querySelector('.lang').addEventListener('click', (event) => {
    fillNavContent(event.target.getAttribute('data-lang'));
});













