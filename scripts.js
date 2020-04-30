function validar(){
    if(document.form.select.options[select.selectedIndex].value == "" || document.form.select.options[select.selectedIndex].value == null){
        alert("Você não selecionou uma Categoria");
        document.form.select.focus();
        return false;
    }
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
    if(document.form.preco.value <= 0){
        alert("Valor inserido inválido");
        document.form.preco.focus();
        return false;
    }
    if(document.form.quantidade.value == "" || document.form.quantidade.value == null){
        alert("Você não preencheu o campo Quantidade");
        document.form.quantidade.focus();
        return false;
    }
    if(document.form.quantidade.value <= 0){
        alert("Valor inserido inválido");
        document.form.quantidade.focus();
        return false;
    }
    else{
        return true;
    }
}