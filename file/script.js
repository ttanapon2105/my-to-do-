const inputBox = document.getElementById("i-box");
const listContainer = document.getElementById("list-container");
const dropdown = document.getElementById("dropdown");

function addTask(){
    let selectedOption = dropdown.options[dropdown.selectedIndex];
    let selectedOptionText = selectedOption.text;
    let selectedOptionClass = selectedOption.className;
    let li = document.createElement("li");
    li.innerHTML = inputBox.value;
    li.textContent = `${selectedOptionText} : ${li.innerHTML}`;
    li.className = selectedOptionClass;
    document.getElementById('list-container').appendChild(li);
    // listContainer.appendChild(li);
    let span =  document.createElement("span");
    span.innerHTML = "\u00d7";
    li.appendChild(span);
    inputBox.value="";
    saveData();    
}

listContainer.addEventListener("click", function(e){
    if(e.target.tagName === "LI"){
        e.target.classList.toggle("checked");        
    }
    else if(e.target.tagName === "SPAN"){
        e.target.parentElement.remove();
        saveData();    
    }
}, false);

function saveData(){
    localStorage.setItem("data", listContainer.innerHTML);
}
function showTask(){
    listContainer.innerHTML = localStorage.getItem("data");
}
showTask();