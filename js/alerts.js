// Hare UI v.1.0.0

// Alerts

const alertShoot = document.getElementById('alert-shoot')
const alertBox = document.querySelector('.alert')

    alertShoot.addEventListener('click', openAlert)
    alertBox.addEventListener('click', closeAlert)

    var toClose = setInterval(closeAlert, 25000)

    function openAlert() {
            
        alertBox.style.display = 'block'
        return toClose
    }

    function closeAlert() {
            
        alertBox.style.display = 'none'

    }