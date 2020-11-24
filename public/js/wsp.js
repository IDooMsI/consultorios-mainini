function whatsapp() {
    var name = document.getElementById('name').value
    var speciality = document.getElementById('speciality').value
    var consult = document.getElementById('consult').value
    window.location.href = 'https://api.whatsapp.com/send?phone=5491123390903&text=Buenos dias. Mi Nombre es: ' + name + ", Especialidad: " + speciality + ", Consulta: " + consult
}