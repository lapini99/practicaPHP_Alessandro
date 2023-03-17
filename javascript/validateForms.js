function addGameForm() {
    let name = document.getElementById("name").value.trim();
        let author = document.getElementById("author").value.trim();
        let description = document.getElementById("description").value.trim();
        let image = document.getElementById("image").value.trim();
        let video = document.getElementById("video").value.trim();
        
        if (name === "" || author === "" || description === "" || image === "" || video === "") {
            alert("Por favor, complete todos los campos");
            return false;
        }
        
        //Comprobar si la url contiene watch y lo modifica por embed
        if (video.indexOf("watch") > -1) {
            video = video.replace("watch", "embed");
            document.getElementById("video").value = video; // Actualiza el input de tipo video
        }
        
        return true;
}

function registerForm() {
    var user = document.forms["register"]["user"].value;
    var email = document.forms["register"]["mail"].value;
    var pwd = document.forms["register"]["pwd"].value;
    
    if (user == "" || email == "" || pwd == "") {
      alert("Todos los campos son requeridos");
      return false;
    }
    
    var emailRegex = /^\S+@\S+\.\S+$/;
    if (!emailRegex.test(email)) {
      alert("Correo inválido");
      return false;
    }
    
    return true;
}