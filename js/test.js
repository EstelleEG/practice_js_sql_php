//-- Boucle for --------------------------------------
// TODO Que va afficher l'extrait de code ci-dessous ?

let myArrayac = ["pomme", "poire", "prune"];

for (let i = 0; i < myArray.length; i++) {
    console.log(i);
    console.log(myArray[i]);
}

  //REPONSE : FOR crée une boucle qui va exécuter une instruction sur toute la longueur (.length) de mon tableau
    // J'incremente de +1 à chaque boucle 
    // 'i' affiche le numero d'index du tableau (le 1er index sera 0, et non 1) à chaque boucle et 'myArray[i]' itère sur tous les fruits et les affiche
    // Le resultat sera : 0 pomme 1 poire 2 prune

//######################################################





//-- Méthode array.forEach -----------------------------
// TODO Que va afficher l'extrait de code ci-dessous ?

let myArray2 = ["pomme", "poire", "prune"];

myArray2.forEach((fruit, index) => {
    console.log(index);
    console.log(fruit);
});

 //REPONSE : La methode FOREACH execute la fonction sur chaque element de mon tableau, j'afficherai donc l'index et le fruit des 3 elements du tableau
// Le resultat sera : 0 pomme 1 poire 2 prune

//#######################################################





//-- Objet javascript -----------------------------------
// TODO Que va afficher l'extrait de code ci-dessous ?

let myObject = {
    fruit : ["pomme", "poire", "prune" ]
};

myObject.fruit.push("fraise");

console.log(myObject.fruit[3]);

//REOONSE : avec la methode push, je push 'fraise' à l'index 3 du tableau
//Avec console.log, j’affiche le fruit qui est en index 3 de mon tableau
//le resulat sera : 'fraise'

//#######################################################





//-- Méthode getElements -----------------------------------
// TODO Que fait l'extrait de code ci-dessous ?

let links = document.getElementsByClassName("link");

for (let i = 0; i < links.length; i++) {
    let link = links[i];
    link.style.color = "#000000";
}

// REPONSE : avec getElementsByClassName, je recupere mon element (links) par sa classe 'link'
// avec for et .length, je fais ca sur tous les links de mon tableau
// et j'applique du style, la couleur #000000 sur chaque link.


//#########################################################



//-- Méthode addEventListener -----------------------------
// TODO Que fait l'extrait de code ci-dessous ?

let sendFormButton = document.getElementById("send-form");

sendFormButton.addEventListener("click", (event) => {
    event.preventDefault();
});

// REPONSE : avec la methode 'getElementById', je recupere mon element qui porte l'id 'send-form' et je lui ajoute un evenement  avec 'addEventListener'
// avec la methode 'preventDefault', j'annule cet evenement de 'click'
//#########################################################