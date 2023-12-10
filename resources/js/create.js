
// CSS of the elements
let minusDivClass = 'bg-gray-800 text-white w-[4%] mt-2 flex items-center justify-center';
let mainDivClass = 'w-full  py-5';
let inputDivClass = "flex gap-5";
let inputFieldClass = 'border-gray-300 mt-5 bg-gray-100 text-black focus:border-black focus:ring-black rounded-sm shadow-sm w-full';


// Counts of the inputs for the database
let inputCounts = {
    year: 0,
    month: 0,
    day: 0,
    special: 0,
    additional: 0,
};

function initialize() {
    ['year', 'month', 'day', 'special', 'additional'].forEach(id => {
        const element = document.getElementById(id);
        element.addEventListener('click', () => {
            addInput(id);
            updateInputCount();
        });
    });
}
function deleteInput() {
    const divId = this.parentElement.parentElement.parentElement.firstElementChild.lastElementChild.id;
    console.log(divId);
    this.parentElement.parentElement.remove();
    decreaseInputNumber(divId);
    updateInputCount();
}

function updateInputCount() {
    Object.keys(inputCounts).forEach(id => {
        const element = document.getElementById(`${id}Count`);
        element.value = inputCounts[id];
    });
}

function addInput(rootDivId) {
    increaseInputNumber(rootDivId);

    const plusDiv = document.getElementById(rootDivId);
    const div = document.createElement('div');
    const minusDiv = document.createElement('div');
    const minus = document.createElement('p');
    const input = document.createElement('input');
    const price = document.createElement('input');
    const inputDiv= document.createElement('div');

    minusDiv.className = minusDivClass;
    div.className = mainDivClass;
    inputDiv.className = inputDivClass;
    input.className = inputFieldClass;
    price.className =  inputFieldClass;
    minus.innerHTML = '-';

    minusDiv.addEventListener('click', deleteInput);
    input.required = 'required';
    input.autofocus = 'autofocus';
    input.name = `${rootDivId}${returnCount(rootDivId)}`;
    price.name = `${rootDivId}Price${returnCount(rootDivId)}`;


    inputDiv.appendChild(input);
    if (rootDivId !== "additional") inputDiv.appendChild(price);
    div.appendChild(inputDiv);
    inputDiv.appendChild(minusDiv);
    minusDiv.appendChild(minus);
    plusDiv.parentElement.parentElement.appendChild(div, plusDiv);
}

function increaseInputNumber(input) {
    inputCounts[input]++;
}

function decreaseInputNumber(input) {
    inputCounts[input]--;
}

function returnCount(input) {
    return inputCounts[input];
}

window.addEventListener('load', initialize);
