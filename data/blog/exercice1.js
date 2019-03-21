function dedans()
{


 //Recupération de la donnée introduite dans le input contenant l'id "commentaire "
 //  
 var comment=  document.getElementById("commentaire").value;

    var xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function() {

    if (xhr.readyState == 4 && xhr.status == 200) {

    
    //varaibale reponse contiendra la reponse donnée par le serveur
     var reponse=xhr.responseText    ;

     //injecter dans la div avec id comments la reponse
     document.getElementById("comments").innerHTML += reponse;
    }

    };
    //ouverture de la requete ajax

    xhr.open('POST','exercice_1.php');

    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');


    // paramettre //Envoi de la requête

     var data='comment='+comment;

    xhr.send(data);
    
}
   

  