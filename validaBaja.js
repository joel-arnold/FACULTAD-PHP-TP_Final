function aceptaBaja() {
    nombrecito = document.formBaja.nombreElegido.value;
    legajito = document.formBaja.legajo.value;

    if(confirm("¿Segurito?")) {
    return true;
    }
    else {
    return false;
    }
}