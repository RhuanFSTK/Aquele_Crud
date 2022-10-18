/* Função em JS para manipulação do DOM */
function get_data (nome, id){
    
    document.getElementById('nome_pessoa').innerHTML = nome;
    document.getElementById('nome').value = nome;
    document.getElementById('id').value = id;
    
    
}