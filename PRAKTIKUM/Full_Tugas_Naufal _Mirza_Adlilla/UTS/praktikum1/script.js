window.onload = function() {
    alert("Assalamualaikum HRD");
};

const profilImg = document.querySelector("img");
profilImg.addEventListener("mouseover", function(){
    this.style.transform = "scale(1.1)";
    this.style.transition = "0.5s";
})

profilImg.addEventListener("mouseleave", function(){
    this.style.transform = "scale(1)";
})