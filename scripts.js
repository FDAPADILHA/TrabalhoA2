function validar(){
    if(document.form.nome.value=="" || document.form.nome.value== null){
        alert("Você não preencheu o campo Nome");
        return false;
    }else{
        return true;
    }
}