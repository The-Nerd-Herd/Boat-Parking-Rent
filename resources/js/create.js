let inputCount = 0;

window.addEventListener('load', function () {
    const addButton = document.getElementById('add');
    addButton.addEventListener('click', addInput);

});


// Deleting the input which were clicked on
function deleteInput() {
    this.parentElement.remove();
    inputCount--;
    updateInputCount();
}

// Updating the input for PHP
function updateInputCount() {
    const input = document.getElementById('inputCount');
    input.value = inputCount;
}

function addInput() {
    // incrementing the global variable
    inputCount++;

    // creating new dom elements
    const formContent = document.getElementById('formContent');
    const input = document.createElement('input');
    const div = document.createElement('div');
    const minusDiv = document.createElement('div');
    const minus = document.createElement('p');


    // adding css to the elements
    minusDiv.className = "bg-gray-800 text-white w-[4%] mt-2 flex items-center justify-center"
    div.className = "w-full lg:w-1/2";
    input.className = " border-gray-300  bg-gray-100 text-black focus:border-black  focus:ring-black rounded-sm shadow-sm w-full"
    minus.innerHTML = '-';

    // adding function for deleting
    minusDiv.addEventListener('click', deleteInput)

    // conf shit
    input.required = "required";
    input.autofocus = "autofocus";

    // naming input so we can refere to it
    input.name = "input" + inputCount;

    // appending
    div.appendChild(minusDiv);
    minusDiv.appendChild(minus);
    formContent.appendChild(div).appendChild(input);
    updateInputCount();
}
