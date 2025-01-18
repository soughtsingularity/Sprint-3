# Descripción
Els patrons de disseny són solucions a problemes recurrents en la construcció del software. Hi ha multitud de patrons de software catalogat, 
aprendrem l'aplicació d'alguns dels més importants en PHP.

## ✔️	 Nivel 1

### Ejercicio 1

#### Singleton
Tens la següent definició de classe que pretén modelar al famós personatge de Tigger dels llibres "Winnie The Pooh" d'A A. Milne:

Arxiu: tigger.php
```
class Tigger {

       private function __construct() {
               echo "Building character..." . PHP_EOL;
       }

       public function roar() {
               echo "Grrr!" . PHP_EOL;
       }

}
```

Sembla raonable esperar que només hi hagi un objecte Tigger (després de tot, ell és l'únic!), però la implementació actual permet tenir múltiples objectes Tigger diferents:

Refactoritzar la classe Tigger en un Singleton considerant els següents punts:

- Defineix el mètode getInstance () que no tingui arguments. Aquesta funció és responsable de crear una instància de la classe Tigger només una vegada i tornar aquesta única instància cada vegada que es crida.
- Imprimeix en pantalla múltiples vegades el rugit de Tigger.
- Afegeix un mètode getCounter () que retorni el nombre de vegades que Tigger ha realitzat rugits.

### Ejercicio 2
#### Dependency Injection

Imagina que ets una persona que està a punt de sortir de casa per anar a estudiar/treballar. Abans de sortir de casa necessitaràs portar la cartera, les claus de casa, potser les claus del cotxe/moto o la targeta del transport públic, i l'smartphone.

Fes una programa que simuli aquesta lògica fent servir el patró d'injecció de dependències.

## ✔️	Nivel 2

### Ejercicio 1
#### Adapter
El següent problema va ser adaptat de [FREEMAN] pàg. 238-240.

Suposa que tens les següents dues classes de PHP.

Arxiu: poultry.php

```
class Duck {

       public function quack() {
              echo "Quack \n";
       }

       public function fly() {
              echo "I'm flying \n";
       }
}

class Turkey {

       public function gobble() {
              echo "Gobble gobble \n";
       }

       public function fly() {
       echo "I'm flying a short distance \n";
       }
}

```

Vols que els seus galls d'indi es comportin com ànecs, de manera que has d'aplicar el adapter pattern. En el mateix arxiu, escriu una classe anomenada TurkeyAdapter i assegura't que tingui en compte el següent:

La traducció de l'quack entre classes és fàcil: simplement crida al mètode Gobble quan sigui apropiat.

Encara que ambdues classes tenen un mètode fly, els galls dindis només poden volar a ratxes curtes, no poden volar llargues distàncies com els ànecs. Per mapejar entre el mètode fly d'un ànec i el mètode del gall dindi, s'ha de trucar al mètode fly del gall dindi cinc vegades per compensar-ho.

Prova la teva classe amb el següent codi:

Arxiu: index.php

```

function duck_interaction($duck) {
       $duck->quack();
       $duck->fly();
}

$duck = new Duck;
$turkey = new Turkey;
$turkey_adapter = new TurkeyAdapter($turkey);
echo "The Turkey says...\n";
$turkey->gobble();
$turkey->fly();
echo "The Duck says...\n";
duck_interaction($duck);
echo "The TurkeyAdapter says...\n";
duck_interaction($turkey_adapter);

Output
The expected output is as follows:
The Turkey says...
Gobble gobble
I'm flying a short distance
The Duck says...
Quack
I'm flying
The TurkeyAdapter says...
Gobble gobble
I'm flying a short distance
I'm flying a short distance
I'm flying a short distance
I'm flying a short distance
I'm flying a short distance

```
### Ejercicio 2
#### Facade

Quan rentem els plats (a mà), generalment agafem una peça a rentar, l'ensabonem, l'aclarim i la col·loquem a l'assecador.

Aquests passos queden totalment automatitzats amb un rentaplats automàtic on, bàsicament posem una pastilla o gel rentador, prenem el botó "on" i es procedeix a aquests passos de manera automàtica. 
Implementa aquesta lògica fent servir el patró Facade.

## ✔️	 Nivel 3
### Ejercicio 1
#### Strategy

Pensa en la següent funció simple amb el nom couponGenerator que genera diferents cupons per a diferents tipus d'automòbils. Per a aquells que estan interessats a comprar un BMW ofereix un cupó diferent del d'aquells que estiguin interessats a comprar un Mercedes.

El cupó té en compte els següents factors per ponderar la taxa de descompte:

- És possible que desitgem oferir un descompte durant una recessió en la compra d'automòbils. En el nostre codi se li denomina a aquest atribut com isHighSeason.
- És possible que desitgem oferir un descompte quan l'estoc d'automòbils a la venda sigui massa gran. En el nostre codi se li denomina a aquest atribut com bigStock.

```
function cupounGenerator($car) {

       $discount = 0;
       $isHighSeason = false;
       $bigStock = true;

       if($car == "bmw"){
           if(!$isHighSeason) {$discount += 5;}
          if($bigStock) {$discount += 7;}
       } else if($car == "mercedes") {
          if(!$isHighSeason) {$discount += 4;}
          if($bigStock) {$discount += 10;}
       
       }
       return $cupoun = "Get {$discount}% off the price of your new car.";
}
echo cupounGenerator("bmw");

```
Segons les consideracions anteriors necessitem utilitzar el patró strategy perquè donada la marca d'un automòbil, el nostre programa calculi el descompte.

Assegura't de tenir en compte el següent:

- Cal crear una funció anomenada addSeasonDiscount que afegeix un descompte quan les vendes baixen.
- Cal crear una funció anomenada addStockDiscount que afegeix un descompte quan l'inventari és massa gran.

Ja que els cupons varien segons cada tipus d'automòbil, l'ideal seria convocar aquestes funcions en classes separades. Pel que serà necessari implementar les classes bmwCuoponGenerator i mercedesCuoponGenerator.

De fet, com els mètodes anteriors per a cada cupó tenen el mateix nom; és necessari crear la interfície carCouponGenerator que obligui a totes les classes que la implementin a usar-los, incloses les que acabem d'escriure i les que ens agradaria afegir en el futur.

Imprimeix per pantalla el resultat del cupó per a les dues marques de cotxe (BMW i Mercedes).

### Ejercicio 2
#### Observer

Imagina que hem d'implementar un mecanisme per notificar als mentors i mentores que ha entrat una nova tasca al Moodle. Fes un programa que implementi el patró Observer de tal manera que cada cop que es generi una nova entrega al Moodle, avisi als mentors/es d'aquesta entrega.

# Proyecto PHP Básico

## 💻 Tecnologías Utilizadas

- PHP 7.4 o superior

## 🔑 Requisitos

- PHP 7.4 o superior instalado en tu sistema

## ☕ Instalación

1. Clona el repositorio en tu máquina local:
   ```sh
   git clone https://github.com/soughtsingularity/Sprint-3/tree/main/Entrega_0_Patterns

2. Navega al directorio del proyecto:

```cd tu_repositorio```

## ⏩ Ejecución

### Desde la terminal

1. Navega al direcorio del proyecto

```cd_tu_repositorio```

2. Busca y ejecuta el archivo index.php para cada uno de los ejercicios