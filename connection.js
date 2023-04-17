var connection;

function verif_connection(){
    if(sessionStorage.getItem(connection) == 0){
        alert("vous devez être connecter")
    }
    else{
        alert("Vous etes connecter")
    }

}

function edit_connection(){
    sessionStorage.setItem(connection,1);
    verif_connection();
}