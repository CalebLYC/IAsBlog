document.getElementById('post-image-button').addEventListener('click', (e)=>{
    e.preventDefault();
    document.getElementById('post-image').click();
});

document.getElementById('post-image').addEventListener('change', (e)=>{
    let file = e.target.files[0];
    console.log(file.type)
    showFile(file);
});

function showFile(file){
    let autorizedTypes = ['image/png', 'image/jpeg', 'image/jpg'];
    if(autorizedTypes.includes(file.type)){
        let fileReader = new FileReader();
        fileReader.readAsDataURL(file);
        fileReader.onload = ()=>{
            let url = fileReader.result;
            document.getElementById('img').setAttribute('src', url);
        }
    }else{
        alert("Type de fichier invalide");
    }
}