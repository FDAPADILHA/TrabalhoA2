function validar(){
    if(document.form.nome.value == "" || document.form.nome.value == null){
        alert("Você não preencheu o campo Nome");
        document.form.nome.focus();
        return false;
    }
    if(document.form.preco.value == "" || document.form.preco.value == null){
        alert("Você não preencheu o campo Preço");
        document.form.preco.focus();
        return false;
    }
    if(document.form.preco.value < 0){
        alert("Valor inserido inválido");
        document.form.preco.focus();
        return false;
    }
    
    
    
else{
    return true;
}
}