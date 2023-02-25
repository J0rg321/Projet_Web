const sliderValue = document.querySelector("span");
const inputSlider = document.querySelector("input");
inputSlider.oninput = (() =>{
    let value = inputSlider.value;
    sliderValue.textContent = value;
    sliderValue.style.left = (value/2) + "%";
    sliderValue.classList.add("show");
})
inputSlider.onblur = (()=>{
    sliderValue.classList.remove("show");
});