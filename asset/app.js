console.log('hello');
const buttonEl = document.querySelector('.btn')
console.log(buttonEl);

let timeout

buttonEl.addEventListener('click', function () {
    const password = document.getElementById('password').textContent.trim()

    navigator.clipboard.writeText(password).then(() => {

        clearInterval(timeout)
        buttonEl.innerHTML = '<i class="fa-solid fa-check"></i>'
        buttonEl.classList.remove('btn-secondary')
        buttonEl.classList.add('btn-primary')

        timeout = setTimeout(() => {
            buttonEl.classList.remove('btn-primary')
            buttonEl.classList.add('btn-secondary')
            buttonEl.innerHTML = '<i class="fa-solid fa-copy"></i>'
        }, 2000)


    })


})
