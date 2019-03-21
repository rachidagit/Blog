

function getArticle(){

    $.post({    url: "acceuil.php",   
    dataType: "json",    
    success: function( article ) {   
        console.log(article);
        $("#card1").html(article.title);
        $("#p1").html(article.content)
        
    }
        
});

}

function clone(){
    $("#card").clone().insertAfter("#card");
  };
  
  
var i= $("#card").clone()
for (i = 0; i < 3; i++) {
 //achaque iteration je recomence le clonage
    function clone(){

      $("#card1").html(article[i].title);
      $("#p1").html(article[i].conten);
    
  // Ceci sera exécuté 3 fois
  // À chaque éxécution, la variable "i" augmentera de 1
  // Lorsque'elle sera arrivée à 3, le boucle se terminera.
  console.log(i);
    }
}
  