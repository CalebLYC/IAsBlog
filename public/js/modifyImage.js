document.getElementById("post-image-button").addEventListener("click", function(e){
    e.preventDefault();
    // Récupère l'input de type "file"
    var input = document.getElementById("postImage");

    // Affiche la boîte de dialogue d'ouverture de fichier pour l'utilisateur
    input.click();

    // Ajoute un écouteur d'événement pour détecter lorsque l'utilisateur sélectionne un fichier
    input.addEventListener("change", function(){
        // Récupère le fichier sélectionné
        var file = input.files[0];
        // Vérifie si le fichier sélectionné est une image
        showImage(file);
    });
});

function showImage(file){
    // Récupère l'image à afficher
    var img = document.getElementById("img");

    let extensions = ['png,', 'jpg', 'jpeg'];
    if(file.type.match("image.*")){
        // Crée un lecteur de fichier
        var reader = new FileReader();

        // Ajoute un écouteur d'événement pour détecter lorsque le fichier est chargé
        reader.addEventListener("load", function(){
            // Modifie la source de l'image pour afficher le fichier sélectionné
            img.src = reader.result;
        });

        // Commence à lire le fichier
        reader.readAsDataURL(file);
    }else{
        alert("Type de fichier invalide");
    }
}
