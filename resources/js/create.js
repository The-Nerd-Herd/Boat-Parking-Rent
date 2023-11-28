let yearCount = 0;
let monthCount = 0;
let dayCount = 0;
let specialCount = 0;
let additionalCount = 0;


window.addEventListener('load', function () {
    const year = this.document.getElementById('year')
    year.addEventListener('click', () => {
        addInput('year');
    })
    const month = this.document.getElementById('month')
    month.addEventListener('click', () => {
        addInput('month');
    })
    const day = this.document.getElementById('day')
    day.addEventListener('click', () => {
        addInput('day');
    })
    const special = this.document.getElementById('special')
    special.addEventListener('click', () => {
        addInput('special');
    })
    const additional = this.document.getElementById('additional')
    additional.addEventListener('click', () => {
        addInput('additional');
    })

});


// Deleting the input which were clicked on
function deleteInput(divRoot) {
    const divId = this.parentElement.parentElement.lastElementChild.id
    this.parentElement.remove();
    decreaseInputNumber(divId)
    updateInputCount();
}

// Updating the input for PHP
function updateInputCount() {
    const year = document.getElementById('yearCount');
    const month = document.getElementById('monthCount');
    const day = document.getElementById('dayCount');
    const special = document.getElementById('specialCount');
    const additional = document.getElementById('additionalCount');
    year.value = yearCount;
    month.value = monthCount;
    day.value = dayCount;
    special.value = specialCount;
    additional.value = additionalCount;
}

function addInput(rootDivId) {


    const plusDiv = document.getElementById(rootDivId)
    // console.log(plusDiv);
    // incrementing the global variable
    increaseInputNumber(rootDivId);
    // creating new dom elements
    const input = document.createElement('input');
    const div = document.createElement('div');
    const minusDiv = document.createElement('div');
    const minus = document.createElement('p');


    // adding css to the elements
    minusDiv.className = "bg-gray-800 text-white w-[4%] mt-2 flex items-center justify-center"
    div.className = "w-full lg:w-1/2 py-5";
    input.className = " border-gray-300  bg-gray-100 text-black focus:border-black  focus:ring-black rounded-sm shadow-sm w-full"
    minus.innerHTML = '-';

    // adding function for deleting
    minusDiv.addEventListener('click', deleteInput)

    // conf shit
    input.required = "required";
    input.autofocus = "autofocus";

    // naming input so we can refere to it
    input.name = rootDivId + returnCount(rootDivId);

    // appending
    div.appendChild(input)
    div.appendChild(minusDiv);
    minusDiv.appendChild(minus);
    plusDiv.parentElement.insertBefore(div, plusDiv)
    // rootDiv.appendChild(div).appendChild(input);
    updateInputCount();
}

function increaseInputNumber(input) {
    switch (input) {
        case "year":
            yearCount++;
            break;
        case "month":
            monthCount++;
            break;
        case "day":
            dayCount++;
            break;
        case "special":
            specialCount++;
            break;
        case "additional":
            additionalCount++;
            break;
        default:
            break;
    }
}

function decreaseInputNumber(input) {
    switch (input) {
        case "year":
            yearCount--;
            break;
        case "month":
            monthCount--;
            break;
        case "day":
            dayCount--;
            break;
        case "special":
            specialCount--;
            break;
        case "additional":
            additionalCount--;
            break;
        default:
            break;
    }
}


function returnCount(input) {
    switch (input) {
        case "year":
            return yearCount;
            break;
        case "month":
            return monthCount;
            break;
        case "day":
            return dayCount;
            break;
        case "special":
            return specialCount;
            break;
        case "additional":
            return additionalCount;
            break;
        default:
            break;
    }
}
