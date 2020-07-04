var MC = document.getElementById("MC");
var TF = document.getElementById("TF");
var MW = document.getElementById("MW");
var NUM = document.getElementById("NUM");

function questionType (val) {
    if (val == "MC") {
        MC.classList.remove("d-none");
        TF.classList.add("d-none");
        MW.classList.add("d-none");
        NUM.classList.add("d-none");
        
        document.getElementById("inputQuestionMC").setAttribute("required", true);
        document.getElementById("inputTrueMC").setAttribute("required", true);
        document.getElementById("inputFalseMC1").setAttribute("required", true);
        document.getElementById("inputFalseMC2").setAttribute("required", true);
        document.getElementById("inputFalseMC3").setAttribute("required", true);
        
        document.getElementById("inputQuestionTF").removeAttribute("required");
        
        document.getElementById("inputQuestionMW").removeAttribute("required");
        document.getElementById("inputMW").removeAttribute("required");
        
        document.getElementById("inputQuestionNUM").removeAttribute("required");
        document.getElementById("inputNUM").removeAttribute("required");
        
    } else if (val == "TF") {
        TF.classList.remove("d-none");
        MC.classList.add("d-none");
        MW.classList.add("d-none");
        NUM.classList.add("d-none");
        
        document.getElementById("inputQuestionMC").removeAttribute("required");
        document.getElementById("inputTrueMC").removeAttribute("required");
        document.getElementById("inputFalseMC1").removeAttribute("required");
        document.getElementById("inputFalseMC2").removeAttribute("required");
        document.getElementById("inputFalseMC3").removeAttribute("required");
        
        document.getElementById("inputQuestionTF").setAttribute("required", true);
        
        document.getElementById("inputQuestionMW").removeAttribute("required");
        document.getElementById("inputMW").removeAttribute("required");
        
        document.getElementById("inputQuestionNUM").removeAttribute("required");
        document.getElementById("inputNUM").removeAttribute("required");
        
    } else if (val == "MW") {
        MW.classList.remove("d-none");
        MC.classList.add("d-none");
        TF.classList.add("d-none");
        NUM.classList.add("d-none");
        
        document.getElementById("inputQuestionMC").removeAttribute("required");
        document.getElementById("inputTrueMC").removeAttribute("required");
        document.getElementById("inputFalseMC1").removeAttribute("required");
        document.getElementById("inputFalseMC2").removeAttribute("required");
        document.getElementById("inputFalseMC3").removeAttribute("required");
        
        document.getElementById("inputQuestionTF").removeAttribute("required");
        
        document.getElementById("inputQuestionMW").setAttribute("required", true);
        document.getElementById("inputMW").setAttribute("required", true);
        
        document.getElementById("inputQuestionNUM").removeAttribute("required");
        document.getElementById("inputNUM").removeAttribute("required");
        
    } else if (val == "NUM") {
        NUM.classList.remove("d-none");
        TF.classList.add("d-none");
        MW.classList.add("d-none");
        MC.classList.add("d-none");
        
        document.getElementById("inputQuestionMC").removeAttribute("required");
        document.getElementById("inputTrueMC").removeAttribute("required");
        document.getElementById("inputFalseMC1").removeAttribute("required");
        document.getElementById("inputFalseMC2").removeAttribute("required");
        document.getElementById("inputFalseMC3").removeAttribute("required");
        
        document.getElementById("inputQuestionTF").removeAttribute("required");
        
        document.getElementById("inputQuestionMW").removeAttribute("required");
        document.getElementById("inputMW").removeAttribute("required");
        
        document.getElementById("inputQuestionNUM").setAttribute("required", true);
        document.getElementById("inputNUM").setAttribute("required", true);
        
    }
}