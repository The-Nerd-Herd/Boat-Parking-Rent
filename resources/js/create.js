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

function forcePageRefreshOnce() {
    // Check if the page has been refreshed before
    if (!sessionStorage.getItem('refreshed')) {
        // If not, refresh the page
        sessionStorage.setItem('refreshed', 'true');
        location.reload(true);
    }
}

function deleteInput() {
    const divId = this.parentElement.parentElement.lastElementChild.id;
    this.parentElement.remove();
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

    minusDiv.className = 'bg-gray-800 text-white w-[4%] mt-2 flex items-center justify-center';
    div.className = 'w-full lg:w-1/2 py-5';
    input.className = 'border-gray-300 bg-gray-100 text-black focus:border-black focus:ring-black rounded-sm shadow-sm w-full';
    minus.innerHTML = '-';

    minusDiv.addEventListener('click', deleteInput);
    input.required = 'required';
    input.autofocus = 'autofocus';
    input.name = `${rootDivId}${returnCount(rootDivId)}`;

    div.appendChild(input);
    div.appendChild(minusDiv);
    minusDiv.appendChild(minus);
    plusDiv.parentElement.insertBefore(div, plusDiv);
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
