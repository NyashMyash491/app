let totals = document.querySelector('.totals_hidden');
let crosses = document.querySelectorAll('.cross')
let elems = document.querySelectorAll('.buy-btn')
let amount = document.querySelector('#quantity')
elems.forEach(elem => {
    elem.onclick = function () {
        totals.classList.remove('totals_hidden')
    }
})

let checkCross = () => {
    let crosses = document.querySelectorAll('.cross')
    crosses.forEach(cross => {
        if (amount.innerText == 1) {
            totals.classList.add('totals_hidden')
        }
    })
}