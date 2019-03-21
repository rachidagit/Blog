function dedans()
{


 //***************************** */Recupération de la donnée introduite dans le input contenant l'id "user"**************************************
 //  

 var xhr = new XMLHttpRequest();

 xhr.onreadystatechange = function() {

 if (xhr.readyState == 4 && xhr.status == 200) {

  var reponse=xhr.responseText   ; 

  var newuser = document.createElement("div");
  newuser.setAttribute("id", reponse);
  var parent = document.getElementById("user");
  
var user=JSON.parse(xhr.response);


  var nom=  document.getElementById("nom").value;
  var surname= document.getElementById("surname").value;
  var email= document.getElementById("email").value;
   



 
       
     

        newuser.innerHTML = nom+"--"+surname+"--"+email;
        parent.insertBefore(newuser,parent.fristChild);
   //*************** */varaibale reponse contiendra la reponse donnée par le serveur***************************************************************/
  
   //cleanform();
  
    }
  };
   //    


   //******************************** */injecter dans la div avec id content la reponse********************************************/
   //document.getElementById("nom1").innerHTML += reponse;
   


  //ouverture de la requete ajax

 xhr.open('POST','user.add.php');

  //xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  //xhr.open('POST','user.add.php'); 

  var data = new FormData();
  data.append('nom',document.getElementById('nom').value);
  data.append('surname',document.getElementById('surname').value);
  data.append('email',document.getElementById('email').value);
  xhr.send(data);
}
/////////////////////////////////////////////////////////////////////////////////////////////
/*function deleteuser(id){
  
  //1ere étape : création de l'objet XMLHttpRequest//
var xhr = new XMLHttpRequest();
// AJAX : 2éme étape : création de la fonction de rappel
xhr.onreadystatechange = function() {
  if (xhr.readyState == 4 && xhr.status == 200) {
    var nom=  document.getElementById("nom");
    var surname= document.getElementById("surname");
    nom.removeChild(surname);
    var data = new FormData();

    data.append('id');
    xhr.send(data); 
  }
}
};*/
///////////////////////////////////////////////////////////////////////////////////////////////////////////
function read(id){

  // envoyer une requete ajax ver un fichier user.read.php
  var xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function() {
    if (xhr.readyState == 4 && xhr.status == 200) {
      
      var user =JSON.parse(xhr.response);

     
      document.getElementById("nom").value=user.nom;
      document.getElementById("surname").value=user.surname;
     document.getElementById("email").value=user.email;
      
         
    }
      
   /*user.setAttribute("id", user.id);*/

      
///////////////////////
}
  
  xhr.open('POST','user.read.php');
  var data = new FormData();
  
  data.append('id', id);
  

// envoi de requete
xhr.send(data);

}



///////////////////////////////////////////////////////////////////////////////////////////////////////////
function update(id){

  // envoyer une requete ajax ver un fichier user.update.php
   var xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function() {
    if (xhr.readyState == 4 && xhr.status == 200) {

     
      var user=document.getElementById ('user').value; 
          /*chager le nom de utilisateur*/
      user.removeChild(user);


      var newuser = document.createElement("div");
      var user=JSON.parse(xhr.response);

      newuser.innerHTML=+"<input>'nom'</input>";
      newuser.innerHTML=+"<input>'surname'</input>";
      newuser.innerHTML=+"<input>'email'</input>";
      newuser.innerHTML=+"<input type='submit' value= 'Update' onClick='update("+id+")>";


      newuser.setAttribute("id", user.id);

      users.insertBefore(newuser, users.firstChild);
    }
  };
  xhr.open('POST','user.update.php');


  var data = new FormData();
  data.append('Name', document.getElementById("nom").value);
  data.append('Surname', document.getElementById("surname").value);
  data.append('Email', document.getElementById("email").value);


  xhr.send(data);

}





