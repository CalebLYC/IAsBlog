import axios from 'axios';

function likePost(node, id) {
  axios.post('/posts/like', {id})
    .then((likeNumber) => {
      node.innerHTML = `<img src='../img/isLiked.png' width='20' height='20'/>  <small class='field'>${likeNumber}</small>`;
      node.onclick = () => dislikePost(node, id);
    })
    .catch(error => {
        console.error(error);
        alert("Erreur survenue!");
    });
}

function dislikePost(node, id) {
  axios.post('/posts/dislike', {id})
    .then((likeNumber) => {
      node.innerHTML = `<i class='bi bi-heart like-icon'></i>  <small class='field'>${likeNumber}</small>`;
      node.onclick = () => likePost(node, id);
    })
    .catch(error => {
        console.error(error);
        alert("Erreur survenue!");
    });
}


function likeHistory(node, id) {
    axios.post('/histories/like', {id})
      .then((likeNumber) => {
        node.innerHTML = `<img src='../img/isLiked.png' width='20' height='20'/>  <small class='field'>${likeNumber}</small>`;
        node.onclick = () => dislikeHistory(node, id);
      })
      .catch(error => {
          console.error(error);
          alert("Erreur survenue!");
      });
  }

  function dislikeHistory(node, id) {
    axios.post('/histories/dislike', {id})
      .then((likeNumber) => {
        node.innerHTML = `<i class='bi bi-heart like-icon'></i>  <small class='field'>${likeNumber}</small>`;
        node.onclick = () => likeHistory(node, id);
      })
      .catch(error => {
          console.error(error);
          alert("Erreur survenue!");
      });
  }


function likeCitation(node, id) {
    axios.post('/citations/like', {id})
      .then((likeNumber) => {
        node.innerHTML = `<img src='../img/isLiked.png' width='20' height='20'/>  <small class='field'>${likeNumber}</small>`;
        node.onclick = () => dislikeCitation(node, id);
      })
      .catch(error => {
          console.error(error);
          alert("Erreur survenue!");
      });
  }

  function dislikeCitation(node, id) {
    axios.post('/citations/dislike', {id})
      .then((likeNumber) => {
        node.innerHTML = `<i class='bi bi-heart like-icon'></i>  <small class='field'>${likeNumber}</small>`;
        node.onclick = () => likeCitation(node, id);
      })
      .catch(error => {
          console.error(error);
          alert("Erreur survenue!");
      });
  }

/*function like(node, id, like){
    node.innerHTML = `<img src='../img/isLiked.png' width='20' height='20'/>  <small class='field'>${like+1}</small>`;
    node.onclick = () => dislike(node, id, like+1);
 }

  function dislike(node, id, like){
    node.innerHTML = `<i class='bi bi-heart like-icon'></i>  <small class='field'>${like-1}</small>`;
    node.onclick = () => like(node, id, like-1);
  }*/

/*
let likeNode = {
    button: document.getElementById('like-post'),
    state:false
}

likeNode.button.onclick = (e)=>{
    e.preventDefault();
    likeOrDislike();
}

function likeOrDislike(){
    if(likeNode.state){
        likeNode.button.innerHTML = '<i class="bi bi-heart like-icon">';
        likeNode.state = false;
    }else{
        likeNode.button.innerHTML = '<img src="../isLiked.png" width="20" height="20"/>';
        likeNode.state = true;
    }
}
*/
