$(window).on('load', function () {
    $('.preloader').addClass('complete')
})

$(function () {
    $("#datepicker").datepicker();
});

const slideValue = document.getElementById('spanSlide1');
const inputSlider = document.getElementById('slideFixo');
inputSlider.oninput = (() => {
    let value = inputSlider.value;
    slideValue.textContent = value;
    slideValue.style.left = (value) + "%";
    slideValue.classList.add("show");
});
inputSlider.onblur = (() => {
    slideValue.classList.remove("show");
});

const slideValue2 = document.getElementById('spanSlide2');
const inputSlider2 = document.getElementById('slideVariavel');
inputSlider2.oninput = (() => {
    let value = inputSlider2.value;
    slideValue2.textContent = value;
    slideValue2.style.left = (value) + "%";
    slideValue2.classList.add("show");
});
inputSlider2.onblur = (() => {
    slideValue2.classList.remove("show");
});

const slideValue3 = document.getElementById('spanSlide3');
const inputSlider3 = document.getElementById('slideLazer');
inputSlider3.oninput = (() => {
    let value = inputSlider3.value;
    slideValue3.textContent = value;
    slideValue3.style.left = (value) + "%";
    slideValue3.classList.add("show");
});
inputSlider3.onblur = (() => {
    slideValue3.classList.remove("show");
});

const slideValue4 = document.getElementById('spanSlide4');
const inputSlider4 = document.getElementById('slideInvestimento');
inputSlider4.oninput = (() => {
    let value = inputSlider4.value;
    slideValue4.textContent = value;
    slideValue4.style.left = (value) + "%";
    slideValue4.classList.add("show");
});
inputSlider4.onblur = (() => {
    slideValue4.classList.remove("show");
});

