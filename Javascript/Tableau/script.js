// taille=parseInt(prompt("Entrez la taille du tableau voulu : "));
// T=[]
// for (i=0;i<taille;i++){
//     T.push(prompt("Entrez la valeur voulue : "));
//     }
// alert(T)









// function getInteger(){
//     integer=parseInt(prompt("Rentrez un entier : "))
//     return integer
//     }

// function InitTab(nb){
//     T=[]
//     for (i=0;i<nb;i++){
//         T.push(0)
//         }
//     return T
//     }

// function saisieTab(T){
//     length=T.length
//     for (i=0;i<length;i++){
//         T[i]=getInteger()
//         }
//     return T
//     }

// function AfficheTab(T){
//     length=T.length
//     alert(T)
//     }

// function RechercheTab(T){
//     rang=getInteger()
//     alert(T[rang])
//     }

// function InfoTab(T){
//     maximum=T[0]
//     moyenne=0
//     length=T.length
//     for (i=0;i<T.length;i++){
//         if (maximum<T[i]) {
//             maximum=T[i]
//             }
//         moyenne+=T[i]
//         }
//     moyenne/=length
//     moyennestring=moyenne.toString()
//     maximumstring=maximum.toString()
//     alert("Moyenne : " + moyennestring + " Maximum : " + maximumstring)
//     }

// menu=prompt("1- Création du tableau \n 2- Affichage contenu tous les postes\n 3- Affichage contenu d'un poste en particulier\n 4- Moyenne et maximum des postes\n 5- Quitter \n Entrez votre option :")

// while (menu!=5) {
//     if (menu==1) {
//         nb=getInteger()
//         T=InitTab(nb)
//         T=saisieTab(T)
//         alert(T)
//         }
//     else if (T) {
//         if (menu==2) {
//             AfficheTab(T)
//             }
//         else if (menu==3 && T) {
//             RechercheTab(T)
//             }
//         else if (menu==4 && T) {
//             InfoTab(T)
//             }
//         else{
//             alert("Saisie Invalide")
//             }
//         }
//     menu=prompt("1- Création du tableau \n 2- Affichage contenu tous les postes\n 3- Affichage contenu d'un poste en particulier\n 4- Moyenne et maximum des postes\n 5- Quitter \n Entrez votre option :")
//     }











// Tableau=["Emma","Jade","Louise","Alice","Chloé","Lina","Rose","Léa","Pierre Olive du gué des fous","Anna","Mila","Mia","Inès","Ambre","Julia","Lou","Juliette","Agathe","Léna","Iris"]

// prenom=prompt("Quel prénom cherchez vous ?")
// Tableau.splice(Tableau.indexOf(prenom),1)
// Tableau.push(0)
// alert(Tableau)








// tableau=[6,3,2,5,7,8,1,9,4]
// changement=true
// length=tableau.length
// while(changement){
//     changement=false
//     for (i=0;i<length;i++){
//         if(tableau[i] > tableau[i+1]) {
//             [tableau[i],tableau[i+1]]=[tableau[i+1],tableau[i]]
//             changement=true
//             }
//         }
//     }
// alert(tableau)