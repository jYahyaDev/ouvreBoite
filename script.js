//SELECTEUR

/* let randomDice = Math.floor(Math.random() * 12 + 1);
 */
// Variable nombre de dé + Nombre de face
/* let nbrDes;
let nbrFace; */

//Bouton

let btnLancer = document.querySelector('button');
let resultat;
//

/* function result() {
  nbrDes = document.querySelector('.nbrDes').value;
  nbrFace = document.querySelector('.nbrFace').value;
  let hasarDe = Math.floor(Math.random() * nbrFace + 1) * nbrDes;
  resultat.push(hasarDe);
} */

let afficheResult = document.querySelector('.result');

//Event

btnLancer.addEventListener('click', function (e) {
  e.preventDefault();
  let nbrDes = document.querySelector('.nbrDes').value;
  let nbrFace = document.querySelector('.nbrFace').value;
  let hasarDe = Math.floor(Math.random() * nbrFace + 1) * nbrDes;
  resultat = hasarDe;
  afficheResult.textContent = `You choose ${nbrDes} and ${nbrFace} the result is ${hasarDe}`;
});

/* btnLancer.addEventListener('click', function () {
  let nbrDes = document.querySelector('.nbrDes').value;
  let nbrFace = document.querySelector('.nbrFace').value;
  let hasarDe = Math.floor(Math.random() * nbrFace + 1);
  resultat.push(hasarDe);
  affiche();
});
 */
