<?php
require_once __DIR__ . "/../classes/Product.php";
require_once __DIR__ . "/../classes/Category.php";

$dog = new Dogs();
$cat = new Cats();
$bear = new Bears();

$productsList =  [
    
    new Toys(
        _name: 9,
        _category: $dog->getIcon(),
        _img: "https://arcaplanet.vtexassets.com/arquivos/ids/273507/yes-gioco-per-cane-palla-snack-rosso.jpg?v=1781482875",
        _price: 6
        
    ),
    
    new Toys(
        _name: "I tuoi sentimenti",
        _category: $cat->getIcon(),
        _img: "https://img.freepik.com/premium-photo/young-female-pointing-with-finger_1301-1012.jpg",
        _price: 70
    ),
    new Toys(
        _name: "Peluche per Cane Wild Procione",
        _category: $dog->getIcon(),
        _img: "https://arcaplanet.vtexassets.com/arquivos/ids/260714/lovedi-gioco-cane-peluche-wild-procione.jpg?v=1781603532",
        _price: 12
    ),
    new Toys(
        _name: "Albero secolare per la schiena",
        _category: $bear->getIcon(),
        _img: "https://www.uomoenatura.it/wp-content/uploads/2018/03/IL-GRANDE-FAGGIO-.jpg",
        _price: 1400
    ),
    
    new Toys(
        _name: "Tiragraffi Livia Rosa Antico",
        _category: $cat->getIcon(),
        _img: "https://arcaplanet.vtexassets.com/arquivos/ids/265339/trixie-tiragraffi-livia-rosa-antico-64cm.jpg?v=1781644833",
        _price: 23
    ),
    new Toys(
        _name: "Salmone Giocattolo",
        _category: $bear->getIcon(),
        _img: "https://www.edilioparodi.com/easyUp/store/1251_100205_cp18.jpg",
        _price: 40
    ),
    
    new Houses(
        _name: "La tua tenda",
        _category: $bear->getIcon(),
        _img: "https://www.campeggiosentinella.it/wp-content/uploads/2022/02/campeggio-salento-tende.jpg",
        _price: 150
    ),
    
    new Houses(
        _name: "Cuccia Igloo Mimì per Gatto",
        _category: $cat->getIcon(),
        _img: "https://arcaplanet.vtexassets.com/arquivos/ids/272899/trixie-cuccia-per-gatto-grotta.jpg?v=1781270382",
        _price: 37
    ),
    new Houses(
        _name: "Grotta Mazzarese",
        _category: $bear->getIcon(),
        _img: "https://www.santamariaalbagno.info/wp-content/uploads/2021/03/d9867b50-87ae-4b3d-91b5-7623a42e4b62.jpg",
        _price: 1400
    ),
    new Houses(
        _name: "Cuccia Rettangolare Calliope Petrolio",
        _category: $dog->getIcon(),
        _img: "https://arcaplanet.vtexassets.com/arquivos/ids/269646/lovedi-cuccia-rettangolare-calliope-petrolio.jpg?v=1781599892",
        _price: 76
    ),
    new Houses(
        _name: "Cuccia Igloo Tipi",
        _category: $cat->getIcon(),
        _img: "https://arcaplanet.vtexassets.com/arquivos/ids/265863/trixie-cuccia-igloo-tipi-per-gatto-e-cane.jpg?v=1780207300",
        _price: 62
    ),
    
    new Houses(
        _name: "Cuccia esterna per Cani Eco Lodge",
        _category: $dog->getIcon(),
        _img: "https://arcaplanet.vtexassets.com/arquivos/ids/225622/p-a-y--canile-eco-lodge-medium.jpg?v=1781603511",
        _price: 90
    ),
    
    new Foods(
        _name: "Natural Trainer Gatto Sterilised Salmone",
        _category: $cat->getIcon(),
        _img: "https://arcaplanet.vtexassets.com/arquivos/ids/248329/trainer-natural-gatto-sterilized-salmone.jpg?v=1781629878",
        _price: 10
    ),
    new Foods(
        _name: "Virtus Dog Adult Patè 400G",
        _category: $dog->getIcon(),
        _img: "https://arcaplanet.vtexassets.com/arquivos/ids/275454/Virtus-Dog-400gr_hunting-formula-cinghiale.jpg?v=1781644387",
        _price: 3
    ),
    
    new Foods(
        _name: "Salmone Norvegese",
        _category: $bear->getIcon(),
        _img: "https://www.mercatodelmare.it/wp-content/uploads/2020/04/filenameWEB_190-1.jpg",
        _price: 70
    ),
    
    new Foods(
        _name: "Felix Le Ghiottonerie Multipack 80X85G",
        _category: $cat->getIcon(),
        _img: "https://arcaplanet.vtexassets.com/arquivos/ids/266561/felix-le-ghiottonerie-multipack-80x85g.jpg?v=1781645625",
        _price: 30
    ),
    
    new Foods(
        _name: "Alveare pieno di ottimo miele",
        _category: $bear->getIcon(),
        _img: "https://www.igieneambiente.com/wp-content/uploads/2020/03/asportazione-alveare-torino.jpg",
        _price: 15
    ),
    new Foods(
        _name: "Monge All Breeds Adult Salmone e Riso",
        _category: $dog->getIcon(),
        _img: "https://arcaplanet.vtexassets.com/arquivos/ids/270797/Monge-All-Breeds-Adult-Salmone-e-Riso-12Kg.jpg?v=1781644138",
        _price: 50
    ),
    
    
    
];
