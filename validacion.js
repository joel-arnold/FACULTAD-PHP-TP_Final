function validacion(){
    nom = document.formalta.inputnomyape.value;
    mail = document.formalta.inputemail.value;
    direc = document.formalta.inputdirec.value;
    tel = document.formalta.inputTel.value;
    fec = document.formalta.inputfecha.value;
    pass = document.formalta.inputpass.value;

    var regex = new RegExp(/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/);
    var correoValido = regex.test(mail);
    var mensajeVacio = "";
    var mensajeIncorrecto = "";
    var valido = true;

    if(nom=="" || nom == undefined){
        mensajeVacio += "\nNombre y Apellido";
        valido = false;
    }

    if(mail=="" || mail == undefined){
        mensajeVacio += "\nEmail";
        valido = false;
    }

    if(direc=="" || direc== undefined){
        mensajeVacio += "\nDirección";
        valido = false;
    }
    
    if(tel=="" || tel== undefined){
        mensajeVacio += "\nTeléfono";
        valido = false;
    }
    
    if(fec=="" || fec== undefined){
        mensajeVacio += "\nFecha de nacimiento";
        valido = false;
    }
    
    if(pass=="" || pass == undefined ){
        mensajeVacio += "\nContraseña";
        valido = false;
    }

    if(!(mensajeVacio == "")){
        window.alert("Faltan completar los siguientes campos: " + mensajeVacio);
    }
    else{
        if(pass.length < 5 ){
            mensajeIncorrecto += "\nLa contraseña debe tener al menos 5 caracteres.";
            valido = false;    
        }

        if(nom.length > 45 ){
            mensajeIncorrecto += "\nEl nombre no debe superar los 45 caracteres.";
            valido = false;    
        }

        if(mail.length > 45 ){
            mensajeIncorrecto += "\nEl correo electrónico no debe superar los 45 caracteres.";
            valido = false;    
        }

        if(direc.length > 45 ){
            mensajeIncorrecto += "\nLa dirección no debe superar los 45 caracteres.";
            valido = false;    
        }

        if(!correoValido){
            mensajeIncorrecto += "\nEl correo electrónico ingresado no es correcto.";
            valido = false;
        }

        if(!(mensajeIncorrecto == "")){
            window.alert("Existen los siguientes problemas:" + mensajeIncorrecto);
        }        
    }

    if(valido){
        window.alert("Estaba todo bien");
    }
    return valido;

}