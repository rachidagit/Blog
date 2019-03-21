function dedans()
{


 //Recupération de la donnée introduite dans le input contenant l'id "article"
 //  
 var content=  document.getElementById("article").value;
 var title= document.getElementById("article").value;
    var xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function() {

    if (xhr.readyState == 4 && xhr.status == 200) {


   //varaibale reponse contiendra la reponse donnée par le serveur
   var reponse=xhr.responseText   ;     
   //injecter dans la div avec id content la reponse
   document.getElementById("Articles").innerHTML += reponse;
   
}

};
  //ouverture de la requete ajax

  xhr.open('POST','articles.add.php');

  xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
 
  var data='content='+content +'&title='+title;
  
    xhr.send(data);
}

var article= JSON.perse(xhr.responseText)
 newarticle.innerHTML = +article.id+"--"+article.title+"--"+article.content+"--";
 articles.insertBefore(newarticle,article.fristChild);