import axios from "axios";
import Swal from "sweet-alert";

function deletePost(id) {
    Swal.fire({
      title: 'Êtes-vous sûr de vouloir supprimer ce poste?',
      text: "Cette action est irréversible!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Oui, supprimer!'
    }).then((result) => {
      if (result.value) {
        axios.delete(`/posts/${id}`)
        .then(response => {
          Swal.fire(
            'Supprimé!',
            'Le poste a été supprimé.',
            'success'
          );
          document.getElementById(`post-${id}`).remove();
        })
        .catch(error => {
          console.log(error);
        });
      }
    });
  }

  function deleteHistory(id){
    Swal.fire({
        title: "Etes de vous sûr de vouloir supprimer ce poste?",
        text: "Cette action est irréversible!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: "Oui, supprimer!",
    }).then(result => {
        if(result.value){
            axios.delete(`/histories/${id}`)
            .then(response => {
                Swal.fire(
                    'Supprimé',
                    "L'histoire a été supprimé",
                    'success'
                );
                document.getElementById(`post-${id}`).remove();
            })
            .catch(error => {
                console.log(error);
                Swal.fire(
                    'Echec',
                    "Erreur lors de la suppression",
                    'success'
                );
            })
        }
    })
  }

  function deleteCitation(){
    Swal.fire({
        title: "Êtes-vous sûr de vouloir supprimer cette citation?",
        text: "Cette action est irréversible!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: "Oui, supprimmer!",
    }).then(result => {
        axios.delete(`/citations/${id}`)
        .then(response => {
            Swal.fire(
                'Supprimé',
                "La citation a été supprimé",
                'success'
            )
            document.getElementById(`post-${id}`).remove();
        })
        .catch(error => {
            console.log(error);
            Swal.fire(
                'Echec',
                "Erreur lors de la suppression",
                'success'
            );
        })
    })
  }
