function validacion(){
    nom = document.inputnomyape.formalta.value;
    mail = document.inputemail.formalta.value;
    direc = document.inputdirec.formalta.value;
    tel = document.inputTel.formalta.value;
    fec = document.inputfecha.formalta.value;
    pass = document.inputpass.formalta.value;

    if(nom=="" || nom == undefined){
        window.alert("Completar todos los campos");
        return false;
    }else
    if(mail=="" || mail == undefined){
        window.alert("Complete campo email");
        return false;

    }else
    if(direc=="" || direc== undefined){
        window.alert("Complete campo Dirección");
        return false;
    }
    else
    if(tel=="" || tel== undefinded){
        window.alert("Compelte campo Teléfono");
        return false;
    }
    else if(fec=="" || fec== undefinded){
        window.alert("Por favor seleccione una fecha");
        return false;
    }
    else if(pass=="" || pass == undefined ){
        window.alert("Complete campo Contraseña");
        return false;
    }
    else if(pass.length < 5 ){
        window.alert("Contraseña debe ser mayor a 5 caracteres");
        return false;
    }
    
        //<div class="alert alert-warning alert-dismissible" role="alert">
          //  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            //Alumno registrado con exito
        //</div>
}