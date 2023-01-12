<?php

namespace App\DataFixtures;

use App\Entity\Magasin;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        $data =  [
            [
                "id" => "1",
                "name" => "Rep'air Blue Mobile",
                "image" => "Rep'air Blue Mobile.JPG",
                "description" => "Rep'air Blue Mobile11 rue Cadiou, St Paul de Leon    ",
                "postalCode" => "11 rue Cadiou, St Paul de Leon",
                "coordsLatitude" => "48.682045668956",
                "coordsLongitude" => "-3.9870941327534",
                "tel" => "09 73 57 93 05",
                "mail" => "facq.jeangabriel@outlook.com",
                "facebook" => "Rep'air Blue Mobile",
                "instagram" => "Rep'air Blue Mobile",
                "internet" => "rep.fr",
                "createdAt" => "2022-05-14 00:00:00"
            ],
            [
                "id" => "2",
                "name" => "Univers Bleu- répare ton mobile",
                "image" => "univers_bleus_repars.JPG",
                "description" => "Univers Bleu- répare ton mobile48 RUE DE LORIENT À RENNES. ",
                "postalCode" => "48 RUE DE LORIENT À RENNES.",
                "coordsLatitude" => "48.108401493403",
                "coordsLongitude" => "-1.7030789419102",
                "tel" => "02 99 33 72 52",
                "mail" => "contact@icns.fr",
                "facebook" => "Univers Bleu- répare ton mobile",
                "instagram" => "Univers Bleu- répare ton mobile",
                "internet" => "",
                "createdAt" => "2022-05-14 00:00:00"
            ],
            [
                "id" => "3",
                "name" => "La Klinic du Mobile Chaumont",
                "image" => "klinik du mobile chaumont.JPG",
                "description" => "La Klinic du Mobile Chaumont11 Rue Victoire de la Marne, 52000 Chaumont ",
                "postalCode" => "11 Rue Victoire de la Marne, 52000 Chaumont",
                "coordsLatitude" => "48.112042008128",
                "coordsLongitude" => "5.1398324960597",
                "tel" => "06 07 50 52 02",
                "mail" => "reine.elie@orange.fr",
                "facebook" => "La Klinic du Mobile Chaumont",
                "instagram" => "La Klinic du Mobile Chaumont",
                "internet" => "",
                "createdAt" => "2022-05-14 00:00:00"
            ],
            [
                "id" => "4",
                "name" => "Phone fix 34",
                "image" => "phone fix 34.PNG",
                "description" => "Phone fix 3430 rue fusains, 34750 VILLENEUVE LES MAGUELONE ",
                "postalCode" => "30 rue fusains, 34750 VILLENEUVE LES MAGUELONE",
                "coordsLatitude" => "43.537344809099",
                "coordsLongitude" => "3.8603764744518",
                "tel" => "06 50 49 38 38",
                "mail" => "nonooz@icloud.com",
                "facebook" => "Phone fix 34",
                "instagram" => "Phone fix 34",
                "internet" => "",
                "createdAt" => "2022-05-14 00:00:00"
            ],
            [
                "id" => "5",
                "name" => "Spot mobile",
                "image" => "spot mobile.JPG",
                "description" => "Spot mobile45 B RTE NATIONALE 41350 SAINT-GERVAIS-LA-FORET ",
                "postalCode" => "45 B RTE NATIONALE 41350 SAINT-GERVAIS-LA-FORET",
                "coordsLatitude" => "47.56898943836",
                "coordsLongitude" => "1.361991880158",
                "tel" => "07 82 99 62 57",
                "mail" => "spotmobile.fr@gmail.com",
                "facebook" => "Spot mobile",
                "instagram" => "Spot mobile",
                "internet" => "",
                "createdAt" => "2022-05-14 00:00:00"
            ],
            [
                "id" => "6",
                "name" => "Phone express",
                "image" => "phone express.JPG",
                "description" => "Phone express164 Boulevard Saint Loup 13010 Marseille ",
                "postalCode" => "164 Boulevard Saint Loup 13010 Marseille",
                "coordsLatitude" => "43.2839532734",
                "coordsLongitude" => "5.43535076095",
                "tel" => "07 64 36 50 46",
                "mail" => "becharef643@gmail.com",
                "facebook" => "Phone express",
                "instagram" => "Phone express",
                "internet" => "",
                "createdAt" => "2022-05-14 00:00:00"
            ],
            [
                "id" => "7",
                "name" => "Solution Mobile",
                "image" => "solution mobile mulhouse.PNG",
                "description" => "Solution Mobile1 rue de la republique 68100 MULHOUSE ",
                "postalCode" => "1 rue de la republique 68100 MULHOUSE",
                "coordsLatitude" => "47.746141092806",
                "coordsLongitude" => "7.3414079071501",
                "tel" => "06 51 27 47 79",
                "mail" => "saidi.badr@hotmail.fr",
                "facebook" => "Solution Mobile",
                "instagram" => "Solution Mobile",
                "internet" => "",
                "createdAt" => "2022-05-14 00:00:00"
            ],
            [
                "id" => "8",
                "name" => "Solution Mobile",
                "image" => "solution mobile.JPG",
                "description" => "Solution Mobile20 avenue de la république 68000 COLMAR ",
                "postalCode" => "20 avenue de la république 68000 COLMAR",
                "coordsLatitude" => "48.077335258141",
                "coordsLongitude" => "7.3528859322974",
                "tel" => "06 51 27 47 79",
                "mail" => "saidi.badr@hotmail.fr",
                "facebook" => "Solution Mobile",
                "instagram" => "Solution Mobile",
                "internet" => "",
                "createdAt" => "2022-05-14 00:00:00"
            ],
            [
                "id" => "9",
                "name" => "Smartphone-Repair",
                "image" => "smartphone repair.JPG",
                "description" => "Smartphone-Repair39 Rue Ballainvilliers, 63000 Clermont-Ferrand ",
                "postalCode" => "39 Rue Ballainvilliers, 63000 Clermont-Ferrand",
                "coordsLatitude" => "45.774607226066",
                "coordsLongitude" => "3.0873667340583",
                "tel" => "04 43 11 50 50",
                "mail" => "assistance.phonerepair@gmail.com",
                "facebook" => "Smartphone-Repair",
                "instagram" => "Smartphone-Repair",
                "internet" => "",
                "createdAt" => "2022-05-14 00:00:00"
            ],
            [
                "id" => "10",
                "name" => "Phone repair",
                "image" => "phone repaire.JPG",
                "description" => "Phone repair25 place de la libération 63200 Riom ",
                "postalCode" => "25 place de la libération 63200 Riom",
                "coordsLatitude" => "42.703765581043",
                "coordsLongitude" => "9.4522759609288",
                "tel" => "04 73 64 78 89",
                "mail" => "assistance.phonerepair@gmail.com",
                "facebook" => "Phone repair",
                "instagram" => "Phone repair",
                "internet" => "",
                "createdAt" => "2022-05-14 00:00:00"
            ],
            [
                "id" => "11",
                "name" => "CORSICATEL",
                "image" => "corisicatel.JPG",
                "description" => "CORSICATEL2 avenue Emile Sari, 20200 Bastia ",
                "postalCode" => "2 avenue Emile Sari, 20200 Bastia",
                "coordsLatitude" => "42.703765581043",
                "coordsLongitude" => "9.4522759609288",
                "tel" => "06 18 31 95 51",
                "mail" => "corsicatelbastia@gmail.com",
                "facebook" => "CORSICATEL",
                "instagram" => "CORSICATEL",
                "internet" => "",
                "createdAt" => "2022-05-14 00:00:00"
            ],
            [
                "id" => "12",
                "name" => "ITECH 56",
                "image" => "itech 56.PNG",
                "description" => "ITECH 56187 Rue de Belgique, 56100 Lorient ",
                "postalCode" => "187 Rue de Belgique, 56100 Lorient",
                "coordsLatitude" => "47.761745172683",
                "coordsLongitude" => "-3.3875725253868",
                "tel" => "02 97 50 02 79",
                "mail" => "nashcash29@gmail.com",
                "facebook" => "ITECH 56",
                "instagram" => "ITECH 56",
                "internet" => "",
                "createdAt" => "2022-05-14 00:00:00"
            ],
            [
                "id" => "13",
                "name" => "I tech moelan",
                "image" => "itech moelan.JPG",
                "description" => "I tech moelan6 rue de Guilly 29350 Moelan-Sur-Mer ",
                "postalCode" => "6 rue de Guilly 29350 Moelan-Sur-Mer",
                "coordsLatitude" => "47.813990561606",
                "coordsLongitude" => "-3.6300147155938",
                "tel" => "07 49 67 56 67",
                "mail" => "nashcash29@gmail.com",
                "facebook" => "I tech moelan",
                "instagram" => "I tech moelan",
                "internet" => "",
                "createdAt" => "2022-05-14 00:00:00"
            ],
            [
                "id" => "14",
                "name" => "ORDI PHONE",
                "image" => "ordi phone.JPG",
                "description" => "ORDI PHONE76 rte Beaucaire, 30000 Nîmes ",
                "postalCode" => "76 rte Beaucaire, 30000 Nîmes",
                "coordsLatitude" => "43.837976251327",
                "coordsLongitude" => "4.3788992879554",
                "tel" => "04 66 27 06 94",
                "mail" => "ordiphone@hotmail.fr",
                "facebook" => "ORDI PHONE",
                "instagram" => "ORDI PHONE",
                "internet" => "",
                "createdAt" => "2022-05-14 00:00:00"
            ],
            [
                "id" => "15",
                "name" => "Broken",
                "image" => "broken.JPG",
                "description" => "BrokenCarrefour, Chemin du Finosello, 20000 Ajaccio ",
                "postalCode" => "Carrefour, Chemin du Finosello, 20000 Ajaccio",
                "coordsLatitude" => "41.943014305873",
                "coordsLongitude" => "8.7463767878865",
                "tel" => "04 95 21 09 79",
                "mail" => "info@brokenphone.fr",
                "facebook" => "Broken",
                "instagram" => "Broken",
                "internet" => "",
                "createdAt" => "2022-05-14 00:00:00"
            ],
            [
                "id" => "16",
                "name" => "Place des mobiles",
                "image" => "place des mobiles.PNG",
                "description" => "Place des mobiles   Avenue du 8 mai 1945 Intermarché,13700 Marignane ",
                "postalCode" => "Avenue du 8 mai 1945 Intermarché,13700 Marignane",
                "coordsLatitude" => "43.417805390743",
                "coordsLongitude" => "5.2276922456116",
                "tel" => "04 42 09 61 92",
                "mail" => "jeremy@mymobile.fr",
                "facebook" => "Place des mobiles",
                "instagram" => "Place des mobiles",
                "internet" => "",
                "createdAt" => "2022-05-14 00:00:00"
            ],
            [
                "id" => "17",
                "name" => "Arturé répar'phone express",
                "image" => "11 rue des clos.JPG",
                "description" => "Arturé répar'phone express11 rue des clos 91470 Forges les Bains ",
                "postalCode" => "11 rue des clos 91470 Forges les Bains",
                "coordsLatitude" => "42.703765581043",
                "coordsLongitude" => "9.4522759609288",
                "tel" => "06 66 88 23 42",
                "mail" => "arturereparphoneexpress@gmail.com",
                "facebook" => "Arturé répar'phone express",
                "instagram" => "Arturé répar'phone express",
                "internet" => "",
                "createdAt" => "2022-05-14 00:00:00"
            ],
            [
                "id" => "18",
                "name" => "Media-phons",
                "image" => "mediaphons.JPG",
                "description" => "Media-phons33 rue Moulin d'Isnard, 13300 Salon-de-Provence ",
                "postalCode" => "33 rue Moulin d'Isnard, 13300 Salon-de-Provence",
                "coordsLatitude" => "43.640696546857",
                "coordsLongitude" => "5.0967865062143",
                "tel" => "04 42 56 95 60",
                "mail" => "contact@mediaphons.com",
                "facebook" => "Media-phons",
                "instagram" => "Media-phons",
                "internet" => "",
                "createdAt" => "2022-05-14 00:00:00"
            ],
            [
                "id" => "19",
                "name" => "My mobile aix",
                "image" => "my mobile.PNG",
                "description" => "My mobile aix19 Rue Bédarrides, 13100 Aix-en-Provence ",
                "postalCode" => "19 Rue Bédarrides, 13100 Aix-en-Provence",
                "coordsLatitude" => "43.528039218998",
                "coordsLongitude" => "5.4474366319104",
                "tel" => "04 88 29 45 63",
                "mail" => "mymobilaix@gmail.com",
                "facebook" => "My mobile aix",
                "instagram" => "My mobile aix",
                "internet" => "",
                "createdAt" => "2022-05-14 00:00:00"
            ],
            [
                "id" => "20",
                "name" => "ALL Repair",
                "image" => "all repair.PNG",
                "description" => "ALL Repair73 rue de Levis 75017 Paris ",
                "postalCode" => "73 rue de Levis 75017 Paris",
                "coordsLatitude" => "49.181348264711",
                "coordsLongitude" => "2.7499559466622",
                "tel" => "09 83 53 27 47",
                "mail" => "gai@allrepair.fr",
                "facebook" => "ALL Repair",
                "instagram" => "ALL Repair",
                "internet" => "",
                "createdAt" => "2022-05-14 00:00:00"
            ],
            [
                "id" => "21",
                "name" => "GÔNE PHONE",
                "image" => "gone phone.JPG",
                "description" => "GÔNE PHONE31 avenue jean Jaures 69007 Lyon ",
                "postalCode" => "31 avenue jean Jaures 69007 Lyon",
                "coordsLatitude" => "45.751390350422",
                "coordsLongitude" => "4.8459099187141",
                "tel" => "07 81 22 85 47",
                "mail" => "xguillermin@gmail.com",
                "facebook" => "GÔNE PHONE",
                "instagram" => "GÔNE PHONE",
                "internet" => "",
                "createdAt" => "2022-05-14 00:00:00"
            ],
            [
                "id" => "22",
                "name" => "CLINIQUE du MOBILE",
                "image" => "clinique du mobile.JPG",
                "description" => "CLINIQUE du MOBILE28 Rue Elie Berthet, 87000 Limoges ",
                "postalCode" => "28 Rue Elie Berthet, 87000 Limoges",
                "coordsLatitude" => "45.829389671623",
                "coordsLongitude" => "1.2595744303588",
                "tel" => "09 83 38 77 92",
                "mail" => "guillaume@clinique-mobile.fr",
                "facebook" => "CLINIQUE du MOBILE",
                "instagram" => "CLINIQUE du MOBILE",
                "internet" => "",
                "createdAt" => "2022-05-14 00:00:00"
            ],
            [
                "id" => "23",
                "name" => "Point service Mobile Valentine",
                "image" => "point service multi media.JPG",
                "description" => "Point service Mobile Valentine  Route de la sablière 13011 Marseille ",
                "postalCode" => "Route de la sablière 13011 Marseille",
                "coordsLatitude" => "43.294072111282",
                "coordsLongitude" => "5.4763318744429",
                "tel" => "04 91 01 35 61",
                "mail" => "eric@sun-device.comaimie.boyard@sun-device.com",
                "facebook" => "Point service Mobile Valentine",
                "instagram" => "Point service Mobile Valentine",
                "internet" => "",
                "createdAt" => "2022-05-14 00:00:00"
            ],
            [
                "id" => "24",
                "name" => "Coriolis",
                "image" => "coriolis.JPG",
                "description" => "CoriolisRUE BERNARD PALISSY à NEVERS (58000)  ",
                "postalCode" => "RUE BERNARD PALISSY à NEVERS (58000)",
                "coordsLatitude" => "46.986686700109",
                "coordsLongitude" => "3.1728090880753",
                "tel" => "09 86 20 07 39",
                "mail" => "ajmtelecom@hotmail.fr",
                "facebook" => "Coriolis",
                "instagram" => "Coriolis",
                "internet" => "",
                "createdAt" => "2022-05-14 00:00:00"
            ],
            [
                "id" => "25",
                "name" => "Coriolis",
                "image" => "coriolis courriere.JPG",
                "description" => "CoriolisPARC LES CROZES 26270 LORIOL-SUR-DROME ",
                "postalCode" => "PARC LES CROZES 26270 LORIOL-SUR-DROME",
                "coordsLatitude" => "44.758805377075",
                "coordsLongitude" => "4.8372783094224",
                "tel" => "04 75 80 49 96",
                "mail" => "ajmtelecom@hotmail.fr",
                "facebook" => "Coriolis",
                "instagram" => "Coriolis",
                "internet" => "",
                "createdAt" => "2022-05-14 00:00:00"
            ],
            [
                "id" => "26",
                "name" => "ALL REPAIR",
                "image" => "all repair_77_rue_des_Pyrénées .JPG",
                "description" => "ALL REPAIR77 rue des pyrennées 75020 Paris ",
                "postalCode" => "77 rue des pyrennées 75020 Paris",
                "coordsLatitude" => "48.853749904029",
                "coordsLongitude" => "2.4059304073565",
                "tel" => "01 75 51 14 86",
                "mail" => "gai@allrepair.fr",
                "facebook" => "ALL REPAIR",
                "instagram" => "ALL REPAIR",
                "internet" => "",
                "createdAt" => "2022-05-14 00:00:00"
            ],
            [
                "id" => "27",
                "name" => "World of mobile",
                "image" => "world of mobile.PNG",
                "description" => "World of mobile   41 rue de la barre 59800 Lille ",
                "postalCode" => "41 rue de la barre 59800 Lille",
                "coordsLatitude" => "50.638703483409",
                "coordsLongitude" => "3.0564695882221",
                "tel" => "06 46 24 88 18",
                "mail" => "contact@worldofmobile.fr",
                "facebook" => "World of mobile",
                "instagram" => "World of mobile",
                "internet" => "",
                "createdAt" => "2022-05-14 00:00:00"
            ],
            [
                "id" => "28",
                "name" => "MK COM",
                "image" => "mk com 2.JPG",
                "description" => "MK COM225 quai de général Leclerc 84400 APT ",
                "postalCode" => "225 quai de général Leclerc 84400 APT",
                "coordsLatitude" => "43.877021019825",
                "coordsLongitude" => "5.3994354033002",
                "tel" => "04 32 52 04 96",
                "mail" => "mk.com@orange.fr",
                "facebook" => "MK COM",
                "instagram" => "MK COM",
                "internet" => "",
                "createdAt" => "2022-05-14 00:00:00"
            ],
            [
                "id" => "29",
                "name" => "MK COM",
                "image" => "mk com cavaillon.JPG",
                "description" => "MK COM189 cours Sadi Carnot 84300 Cavaillon ",
                "postalCode" => "189 cours Sadi Carnot 84300 Cavaillon",
                "coordsLatitude" => "43.836952989712",
                "coordsLongitude" => "5.0357509474778",
                "tel" => "09 82 51 34 35",
                "mail" => "mk.com@orange.fr",
                "facebook" => "MK COM",
                "instagram" => "MK COM",
                "internet" => "",
                "createdAt" => "2022-05-14 00:00:00"
            ],
            [
                "id" => "30",
                "name" => "MK COM",
                "image" => "mk centre 1.JPG",
                "description" => "MK COM276 boulevard Albin Durand 84200 Carpentras ",
                "postalCode" => "276 boulevard Albin Durand 84200 Carpentras",
                "coordsLatitude" => "44.054717653947",
                "coordsLongitude" => "5.0452562898143",
                "tel" => "09 86 74 05 10",
                "mail" => "mk.com@orange.fr",
                "facebook" => "MK COM",
                "instagram" => "MK COM",
                "internet" => "",
                "createdAt" => "2022-05-14 00:00:00"
            ],
            [
                "id" => "31",
                "name" => "SAVE",
                "image" => "save.JPG",
                "description" => "SAVE   6 avenue Joseph  Clotis, 83400 Hyeres ",
                "postalCode" => "6 avenue Joseph  Clotis, 83400 Hyeres",
                "coordsLatitude" => "43.119970435312",
                "coordsLongitude" => "6.1293709014215",
                "tel" => "04 94 31 81 62",
                "mail" => "yannis.d@renki.org",
                "facebook" => "SAVE",
                "instagram" => "SAVE",
                "internet" => "",
                "createdAt" => "2022-05-14 00:00:00"
            ],
            [
                "id" => "32",
                "name" => "PHONEO",
                "image" => "phoneo.JPG",
                "description" => "PHONEO19 rue Madelaine Vionnet centre commercial Le millénaire Auberviller 93300 ",
                "postalCode" => "19 rue Madelaine Vionnet centre commercial Le millénaire Auberviller 93300",
                "coordsLatitude" => "48.903134575618",
                "coordsLongitude" => "2.375352145823",
                "tel" => "01 41 61 09 16",
                "mail" => "azoulaycedric1@gmail.com",
                "facebook" => "PHONEO",
                "instagram" => "PHONEO",
                "internet" => "",
                "createdAt" => "2022-05-14 00:00:00"
            ],
            [
                "id" => "33",
                "name" => "FIXALLIT",
                "image" => "fixallit.JPG",
                "description" => "FIXALLIT12 Ter Rue Joël le Theule, 78180 Montigny-le-Bretonneux ",
                "postalCode" => "12 Ter Rue Joël le Theule, 78180 Montigny-le-Bretonneux",
                "coordsLatitude" => "48.786049578854",
                "coordsLongitude" => "2.0448872323257",
                "tel" => "09 86 35 42 30",
                "mail" => "contact@fixallit.fr",
                "facebook" => "FIXALLIT",
                "instagram" => "FIXALLIT",
                "internet" => "",
                "createdAt" => "2022-05-14 00:00:00"
            ],
            [
                "id" => "34",
                "name" => "DOCTEUR IT",
                "image" => "docteur it.JPG",
                "description" => "DOCTEUR ITCentre commercial Grand Maine, Allée du Grand Launay 49100 Angers ",
                "postalCode" => "Centre commercial Grand Maine, Allée du Grand Launay 49100 Angers",
                "coordsLatitude" => "47.46905543595",
                "coordsLongitude" => "-0.59239989952599",
                "tel" => "02 41 48 23 11",
                "mail" => "delaunayse@gmail.com",
                "facebook" => "DOCTEUR IT",
                "instagram" => "DOCTEUR IT",
                "internet" => "",
                "createdAt" => "2022-05-14 00:00:00"
            ],
            [
                "id" => "35",
                "name" => "DOCTEUR IT",
                "image" => "docteur it 2.JPG",
                "description" => "DOCTEUR ITFleur d'Eau, Centre Commercial, 62 rue Plantagenêt, 49100 Angers ",
                "postalCode" => "Fleur d'Eau, Centre Commercial, 62 rue Plantagenêt, 49100 Angers",
                "coordsLatitude" => "47.472884652101",
                "coordsLongitude" => "-0.55257446092422",
                "tel" => "09 67 47 61 63",
                "mail" => "delaunayse@gmail.com",
                "facebook" => "DOCTEUR IT",
                "instagram" => "DOCTEUR IT",
                "internet" => "",
                "createdAt" => "2022-05-14 00:00:00"
            ],
            [
                "id" => "36",
                "name" => "FM SERVICES",
                "image" => "fm services.JPG",
                "description" => "FM SERVICES1 Rue Nantaise, 49300 Cholet ",
                "postalCode" => "1 Rue Nantaise, 49300 Cholet",
                "coordsLatitude" => "47.060765236322",
                "coordsLongitude" => "-0.88134786774269",
                "tel" => "02 41 62 59 36",
                "mail" => "contact@fm-services.fr",
                "facebook" => "FM SERVICES",
                "instagram" => "FM SERVICES",
                "internet" => "",
                "createdAt" => "2022-05-14 00:00:00"
            ],
            [
                "id" => "37",
                "name" => "TELADOM",
                "image" => "teladoma.JPG",
                "description" => "TELADOM4 rue Jean Moulin 77289 OTHIS  ",
                "postalCode" => "4 rue Jean Moulin 77289 OTHIS",
                "coordsLatitude" => "49.075012286039",
                "coordsLongitude" => "2.6719888323374",
                "tel" => "06 62 99 39 61",
                "mail" => "reparation.mobile@teladom.fr",
                "facebook" => "TELADOM",
                "instagram" => "TELADOM",
                "internet" => "",
                "createdAt" => "2022-05-14 00:00:00"
            ],
            [
                "id" => "38",
                "name" => "Omega Services",
                "image" => "omega services.JPG",
                "description" => "Omega Services   400 route nationale, 69400 Villefranche-sur-Saône ",
                "postalCode" => "400 route nationale, 69400 Villefranche-sur-Saône",
                "coordsLatitude" => "45.99193454443",
                "coordsLongitude" => "4.7188688610517",
                "tel" => "09 86 60 89 80",
                "mail" => "khaledrandji@gmail.com",
                "facebook" => "Omega Services",
                "instagram" => "Omega Services",
                "internet" => "",
                "createdAt" => "2022-05-14 00:00:00"
            ],
            [
                "id" => "39",
                "name" => "Service Express Mobile",
                "image" => "IMG_6694.PNG",
                "description" => "Service Express Mobile 24 Bd de Creissel, 11100 Narbonne ",
                "postalCode" => "24 Bd de Creissel, 11100 Narbonne",
                "coordsLatitude" => "43.179197023375",
                "coordsLongitude" => "3.0274485646478",
                "tel" => "07 84 95 76 32",
                "mail" => "sasmunosfreres@gmail.com",
                "facebook" => "Service Express Mobile",
                "instagram" => "Service Express Mobile",
                "internet" => "",
                "createdAt" => "2022-05-14 00:00:00"
            ],
            [
                "id" => "40",
                "name" => "Alsace New Tech Services",
                "image" => "alsace new tech.JPG",
                "description" => "Alsace New Tech Services  3 Rue Edouard Richad_COLMAR 68000 ",
                "postalCode" => "3 Rue Edouard Richad_COLMAR 68000",
                "coordsLatitude" => "48.079396985744",
                "coordsLongitude" => "7.3519576611333",
                "tel" => "0977612671",
                "mail" => "alsace.nts68@gmail.com",
                "facebook" => "Alsace New Tech Services",
                "instagram" => "Alsace New Tech Services",
                "internet" => "",
                "createdAt" => "2022-05-14 00:00:00"
            ],
            [
                "id" => "41",
                "name" => "MISTER TEL",
                "image" => "mister tel.PNG",
                "description" => "MISTER TEL  54 Av. Pasteur, 10000 Troyes ",
                "postalCode" => "54 Av. Pasteur, 10000 Troyes",
                "coordsLatitude" => "48.300694105804",
                "coordsLongitude" => "4.0653430764855",
                "tel" => "06 62 25 56 30",
                "mail" => "contact@mister-tel.fr",
                "facebook" => "MISTER TEL",
                "instagram" => "MISTER TEL",
                "internet" => "",
                "createdAt" => "2022-05-14 00:00:00"
            ],
            [
                "id" => "42",
                "name" => "LES REPARATEURS DE  SMARTPHONES",
                "image" => "IMG_6698.JPG",
                "description" => "LES REPARATEURS DE  SMARTPHONES1 Rue du Bas Noyer, C.Cial Art De Vivre, 95610 Eragny Sur Oise ",
                "postalCode" => "1 Rue du Bas Noyer, C.Cial Art De Vivre, 95610 Eragny Sur Oise",
                "coordsLatitude" => "49.03153363692",
                "coordsLongitude" => "2.1029608323356",
                "tel" => "01 34 30 92 48",
                "mail" => "olivier@lesreparateursdesmartphones.com",
                "facebook" => "LES REPARATEURS DE  SMARTPHONES",
                "instagram" => "LES REPARATEURS DE  SMARTPHONES",
                "internet" => "",
                "createdAt" => "2022-05-14 00:00:00"
            ],
            [
                "id" => "43",
                "name" => "PHONE HOUSE CONCEPT",
                "image" => "IMG_6722[1].JPG",
                "description" => "PHONE HOUSE CONCEPT   21 rue de Paris, 62300 Lens ",
                "postalCode" => "21 rue de Paris, 62300 Lens",
                "coordsLatitude" => "50.427961810115",
                "coordsLongitude" => "2.8316731630792",
                "tel" => "09 83 21 57 62",
                "mail" => "phonehouseconcept@gmail.com",
                "facebook" => "PHONE HOUSE CONCEPT",
                "instagram" => "PHONE HOUSE CONCEPT",
                "internet" => "",
                "createdAt" => "2022-05-14 00:00:00"
            ],
            [
                "id" => "44",
                "name" => "LEADER PHONE",
                "image" => "leaderphone.JPG",
                "description" => "LEADER PHONE20 rue de la limande 97351 Matoury ",
                "postalCode" => "20 rue de la limande 97351 Matoury",
                "coordsLatitude" => "4.934991777721",
                "coordsLongitude" => "-52.318768665006",
                "tel" => "+594 594 35 88 80",
                "mail" => "kevinjuste@outlook.fr",
                "facebook" => "LEADER PHONE",
                "instagram" => "LEADER PHONE",
                "internet" => "",
                "createdAt" => "2022-05-14 00:00:00"
            ],
            [
                "id" => "45",
                "name" => "MULTI MOBILE SERVICE",
                "image" => "multi mobile services.JPG",
                "description" => "MULTI MOBILE SERVICE  3 rue battant 25100 BESANCON ",
                "postalCode" => "3 rue battant 25100 BESANCON",
                "coordsLatitude" => "47.240537728346",
                "coordsLongitude" => "6.0202858052793",
                "tel" => "07 69 53 48 51",
                "mail" => "multi.mobile.service@gmail.com",
                "facebook" => "MULTI MOBILE SERVICE",
                "instagram" => "MULTI MOBILE SERVICE",
                "internet" => "",
                "createdAt" => "2022-05-14 00:00:00"
            ],
            [
                "id" => "46",
                "name" => "HIGHTECH SERVICE",
                "image" => "IMG_6723[1].PNG",
                "description" => "HIGHTECH SERVICE4 avenue docteur Noël Franchini 20090 Ajaccio ",
                "postalCode" => "4 avenue docteur Noël Franchini 20090 Ajaccio",
                "coordsLatitude" => "41.934781517028",
                "coordsLongitude" => "8.7538713185729",
                "tel" => "06 60 52 46 26",
                "mail" => "contact@hightech-services.fr",
                "facebook" => "HIGHTECH SERVICE",
                "instagram" => "HIGHTECH SERVICE",
                "internet" => "",
                "createdAt" => "2022-05-14 00:00:00"
            ],
            [
                "id" => "47",
                "name" => "CORIOLIS TELECOM",
                "image" => "coriolis courriere.JPG",
                "description" => "CORIOLIS TELECOM  Galerie cormmercial CORA Rue raoul 62710 COURRIERE ",
                "postalCode" => "Galerie cormmercial CORA Rue raoul 62710 COURRIERE",
                "coordsLatitude" => "50.445647592005",
                "coordsLongitude" => "2.9468868612291",
                "tel" => "03 62 02 01 01",
                "mail" => "michel.pora@powamultimedia.fr",
                "facebook" => "CORIOLIS TELECOM",
                "instagram" => "CORIOLIS TELECOM",
                "internet" => "",
                "createdAt" => "2022-05-14 00:00:00"
            ]
        ];

        foreach ($data as $value) {

                $magasin = new Magasin();

                
                $magasin->setNom($value["name"]);
                $magasin->setImageSrc($value['image']);
                $magasin->setDescription($value['description']);
                $magasin->setCodePostal($value['postalCode']);
                $magasin->setCoordLat($value['coordsLatitude']);
                $magasin->setCoordLon($value['coordsLongitude']);
                $magasin->setTel($value['tel']);
                $magasin->setAdresseMail($value['mail']);
                $magasin->setFacebook($value['facebook']);
                $magasin->setInstagram($value['instagram']);
                $magasin->setInternet($value['internet']);


                $manager->persist($magasin);
            
            }

            $manager->flush();
    }
}
