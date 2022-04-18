
const buttons = document.querySelectorAll('.details')

buttons.forEach(button => button.addEventListener('click', () => {
    console.log(button.getAttribute('index'))
    axios.get(`/pracownik/${button.getAttribute('index')}`)
        .then((resp) => {
        document.querySelector('.employeeImg').src = `../storage/${resp.data.image}`
        document.querySelector('.name').textContent =  "dr " + resp.data.name + " " + resp.data.lastname
        document.querySelector('.phone').textContent = "nr telefonu: "  + resp.data.phone_num
        document.querySelector('.email').textContent = "adres e-mail: " + resp.data.email
        document.querySelector('.description').textContent = resp.data.description
        })
        .catch(e => console.log(e))
    showEmployee()
}))

const popup = document.querySelector('.showEmployee')
const showEmployee = () => {
    document.querySelector('.navbar').classList.toggle('blur')
    document.querySelector('.footerNav').classList.toggle('blur')
    document.querySelector('footer').classList.toggle('blur')
    document.querySelector('.wrapper').classList.toggle('blur')
    if (popup.classList.contains('active')) {
        popup.classList.toggle('active')
    } else {
        setTimeout(() => {
            popup.classList.toggle('active')
        },400)
    }

}

