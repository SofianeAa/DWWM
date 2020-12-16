// var listeprenoms=[]

// var prenom=prompt("Entrez un prénom : ")
// var nbprenoms=1
// listeprenoms.push(prenom)

// while (prenom!="" && prenom !=" ")
//     {
//     prenom=prompt("Entrez un prénom : ")
//     nbprenoms+=1
//     listeprenoms.push(prenom)
//     }

// prenoms=""

// for (i=0;i<=nbprenoms-2;i++)
//     {
//     prenoms.concat(prenoms,listeprenoms[i])
//     }

// alert(nbprenoms-1+" prénoms entrés : " + prenoms)

// var nombre=parseInt(prompt("Entrez un nombre : "));

// listeentiers="";
// for(i=0;i<nombre;i++)
//     {
//     listeentiers=listeentiers.concat(i.toString().concat(" "));
//     }
// alert(listeentiers);

// var somme=0;
// for(i=0;i<nombre;i++)
//     {
//     somme+=i;
//     }
// alert(somme);

// nombre2=parseInt(prompt("Entrez un deuxième nombre : "));
// listeentiers="";
// if (nombre>nombre2)
//     {
//     [nombre,nombre2]=[nombre2,nombre];
//     }
// for(i=nombre+1;i<nombre2;i++)
//     {
//     listeentiers=listeentiers.concat(i.toString().concat(" "));
//     }
// alert(listeentiers);

// nombre=parseInt(prompt("Entrez un nombre : "));
// somme=0
// nb=0
// while(nombre!=0)
//     {
//     nombre=parseInt(prompt("Entrez un nombre : "));
//     somme+=nombre;
//     nb+=1
//     }    
// alert("Somme : "+somme+" Moyenne : "+somme/nb);

// nombre=parseInt(prompt("Entrez un nombre : "));
// somme=nombre;
// min=nombre;
// max=nombre;
// nb=0;
// while(nombre!=0)
//     {
//     nombre=parseInt(prompt("Entrez un nombre : "));
//     somme+=nombre;
//     if (nombre>max)
//         {
//         max=nombre;
//         }
//     else if (nombre<min && nombre !=0)
//         {
//         min=nombre;
//         }
//     nb+=1
//     }
// alert("Somme : "+somme+" Moyenne : "+somme/nb + " Minimum : " + min + " Maximum : " + max);

// N=parseInt(prompt("Entrez un nombre : "));
// X=parseInt(prompt("Entrez le plus grand multiplicateur : "));
// listemultiplies=""
// for(i=1;i<X+1;i++)
//     {
//     alert(N+"x"+i+"="+N*i)
//     }

// var mot=prompt("Ecrivez un mot quelconque : ");
// var listevoyelle=["a","e","i","o","u","y"];
// var length=mot.length;
// var compteur=0;

// for (i=0;i<6;i++)
//     {
//     submot=mot;
//     while (submot.indexOf(listevoyelle[i])!=-1)
//         {
//         compteur+=1
//         pos=submot.indexOf(listevoyelle[i]);
//         submot=submot.substr(pos+1,length-pos);
//         }
//     }
// alert(compteur)

// age=parseInt(prompt("Entrez un âge : "));
// nb20m=0;
// nb41m=0;
// nbp=1;

// while (age<100)
//     {
//     if (age<20)
//         {
//         nb20m+=1;
//         }
//     else if (age<41)
//         {
//         nb41m+=1;
//         }
//     else
//         {
//         nbp+=1
//         }
//     age=parseInt(prompt("Entrez un âge : "));
//     }
// alert("Moins de vingt ans : "+nb20m+" Entre vingt et quarante ans : "+nb41m+" Plus de quarante ans "+nbp)

// nombre=parseInt(prompt("Entrez un nombre : "));
// premier="Vrai"
// for (i=2;i<nombre;i++)
//     {
//     if (nombre%i==0)
//         {
//         premier="Faux";
//         }
//     }

// alert(premier)