let roomWidth, roomHeight, plateWidth, plateheight, minCut, button, directionArr, direction;
button = document.querySelector(".calc-form__submit");
function calculateFloor(roomWidth, roomHeight, plateWidth, plateHeight, direction){
    if(isNaN(roomWidth) || isNaN(roomHeight) || isNaN(plateWidth) || isNaN(plateHeight)){
        let body, modal;
        body = document.querySelector("body");
        modal = document.querySelector(".calc-error");
        closeBtn = document.querySelector(".calc-error__close");
        body.style.overflow = "hidden";
        body.style.height = "unset";
        modal.classList.add("show");
        modal.style.height = window.innerHeight + "px";
        modal.style.top = window.scrollY + "px";
        document.addEventListener("click", function(e){
            if(e.target.classList.contains("calc-error__close") || e.target.classList.contains("calc-error__submit")){
                body.removeAttribute("style");
                modal.classList.remove("show");
            }
        });
    }
    else{
        let roomSquare, panelSquare, reserve, allSquare, panelsCount, result;
        result = document.getElementById("result");
        roomSquare = roomWidth * roomHeight;
        panelSquare = plateWidth * plateHeight;
        reserve = roomWidth * plateWidth * Math.sqrt(2);
        allSquare = roomSquare + reserve;
        panelsCount = allSquare / panelSquare;
        switch(direction){
            case "0": panelsCount += panelsCount * 0.07; 
                    break;
            case "45": panelsCount += panelsCount * 0.15;  
                    break;
            case "90": panelsCount += panelsCount * 0.07;
                    break;
            default: panelsCount += panelsCount * 0.07; 
                    break;
        }
        panelsCount = Math.ceil(panelsCount);
        result.innerHTML = panelsCount;
    }
}
button.addEventListener("click", function(e){
    roomWidth = parseFloat(document.getElementById("room-width").value);
    roomHeight = parseFloat(document.getElementById("room-height").value);
    plateWidth = parseFloat(document.getElementById("panel-width").value);
    plateHeight = parseFloat(document.getElementById("panel-height").value);
    directionArr = document.querySelectorAll(".checkbox-direction");
    for(i=0; i<directionArr.length; i++){
        if(directionArr[i].checked){
            direction = directionArr[i].value;
            break;
        }
    }
    calculateFloor(roomWidth, roomHeight, plateWidth, plateHeight, direction);
});