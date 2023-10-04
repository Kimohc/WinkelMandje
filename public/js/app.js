console.log('connected')

const taak = document.querySelectorAll('.taakitto')

taak.forEach((t) => {
t.addEventListener('click', (e) => {
    e.preventDefault()
    t.classList.toggle('taak-finished')
})})