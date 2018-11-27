function validacion(){
    nom = document.formalta.inputnomyape.value;
    mail = document.formalta.inputemail.value;
    direc = document.formalta.inputdirec.value;
    tel = document.formalta.inputTel.value;
    fec = document.formalta.inputfecha.value;
    pass = document.formalta.inputpass.value;
    var regex = new RegExp(/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/);
    var correoValido = regex.test(mail);

    if(nom=="" || nom == undefined){
        window.alert("Completá el campo Nombre");
        return false;
    }else
    if(mail=="" || mail == undefined){
        window.alert("Completá campo Email");
        return false;

    }else
    if(direc=="" || direc== undefined){
        window.alert("Completá el campo Dirección");
        return false;
    }
    else
    if(tel=="" || tel== undefined){
        window.alert("Completá el campo Teléfono");
        return false;
    }
    else if(fec=="" || fec== undefined){
        window.alert("Por favor, seleccioná una fecha");
        return false;
    }
    else if(pass=="" || pass == undefined ){
        window.alert("Completá el campo Contraseña");
        return false;
    }
    else if(pass.length < 5 ){
        window.alert("La contraseña debe ser mayor a 5 caracteres");
        return false;
    }
    else if(!correoValido){
        window.alert("El correo electrónico ingresado no es correcto");
        return false;
    }
    else{
        //seguir aca
        return true;
    }
}