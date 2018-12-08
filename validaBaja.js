function controlVacio(){
    legajo = document.formBajaLegajo.legajo.value;
    if(legajo == "" || legajo == undefined){
        window.alert("Tenés que ingresar un legajo.")
        return false;
    }
    else{
        return true;
    }
}