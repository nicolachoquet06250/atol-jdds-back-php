<?php


namespace Atol\jdds\back\controllers;


use Atol\jdds\back\lib\annotations\Routes;
use Atol\jdds\back\lib\Controller;

#[Routes(
    baseUrl: '/jdds',
    baseName: 'jdds'
)]
class JddsController extends Controller
{
    public function __construct() {}

    public function get() {
        header('Content-Type: application/json');

        echo <<<JSON
            {
              "dev": [
                {
                  "type": "PRO",
                  "nd": "0129776546",
                  "email": "principal8.professionnel@orange.fr",
                  "password": "Passwd01",
                  "case": "fin diag MER CTCB HO"
                },
                {
                  "type": "PRO",
                  "nd": "0149336429",
                  "email": "principal18.professionnel@orange.fr",
                  "password": "Passwd01",
                  "case": "fin diag MER CTCB HNO"
                },
                {
                  "type": "RES",
                  "nd": "0192100002",
                  "email": "tb2-lis40.ms-g1r2-1@orange.fr",
                  "password": "Passwd01",
                  "case": "CTCB HO"
                },
                {
                  "type": "RTC",
                  "nd": "0100000005",
                  "case": "Exception technique  technique certifyContract"
                },
                {
                  "type": "RTC",
                  "nd": "0100000004",
                  "case": "Réponse soap vide certifyContract"
                },
                {
                  "type": "RTC",
                  "nd": "0100000003",
                  "case": "KO format certifyContract"
                },
                {
                  "type": "RTC",
                  "nd": "0100000002",
                  "case": "KO fonctionnel certifyContract"
                },
                {
                  "type": "RTC",
                  "nd": "0100000001",
                  "case": "KO technique certifyContract  (Alige d'erreur)"
                },
                {
                  "type": "RTC",
                  "nd": "0100000007",
                  "case": "si num client= 1100000007, OK<br>si num client= 2100000007, KO_TECHNIQUE<br>sinon (autres valeurs), KO_FONCTIONNEL"
                },
                {
                  "type": "RTC",
                  "nd": "0200000014",
                  "case": "Erreur 105 (codeProfil = RTC_DERCO_EN_COURS)"
                },
                {
                  "type": "RTC",
                  "nd": "0200000006",
                  "case": "Erreur 105 (codeProfil = RTC_CLIENT_PRO)"
                },
                {
                  "type": "RTC",
                  "nd": "0200000007",
                  "case": "Erreur 105 (codeProfil = RTC_OFFRE_PRO)"
                },
                {
                  "type": "RES",
                  "nd": "0100015025",
                  "email": "christophe.ourkhia@orange.fr",
                  "password": "Passwd1",
                  "case": "Identification via ND HD Orange RES,<br>Mode résolution IAR"
                },
                {
                  "type": "PRO",
                  "nd": "0129771387",
                  "email": "principal45.professionnel@orange.fr",
                  "password": "Passwd01",
                  "case": "Identification via ND HD Orange PRO,<br>Mode résolution IAR<br><b>(mettre 4 en commentaire pour la prise de RDV)</b>"
                },
                {
                  "type": "SOSH",
                  "nd": "0116445946",
                  "email": " principal52.framboise@orange.fr",
                  "password": "Passwd1",
                  "case": "Identification via ND SOSH 4P, Mode résolution IAR"
                },
                {
                  "type": "RES",
                  "nd": "0120163050",
                  "email": "scareg2r2c3.ieppdc010-pri@wanadoo.fr",
                  "password": "Passwd1",
                  "case": "Erreur 105 recupererListeMotif  (HD_EN_COURS_LIVRAISON)"
                }
              ],
              "rec": [
                {
                  "type": "PRO",
                  "nd": "0129776546",
                  "email": "principal8.professionnel@orange.fr",
                  "password": "Passwd01",
                  "case": "fin diag MER CTCB HO"
                },
                {
                  "type": "PRO",
                  "nd": "0149336429",
                  "email": "principal18.professionnel@orange.fr",
                  "password": "Passwd01",
                  "case": "fin diag MER CTCB HNO"
                },
                {
                  "type": "RES",
                  "nd": "0192100002",
                  "email": "tb2-lis40.ms-g1r2-1@orange.fr",
                  "password": "Passwd01",
                  "case": "CTCB HO"
                },
                {
                  "type": "RES",
                  "nd": "0100015025",
                  "email": "christophe.ourkhia@orange.fr",
                  "password": "Passwd1",
                  "case": "Identification via ND HD Orange RES,<br>Mode résolution IAR"
                },
                {
                  "type": "PRO",
                  "nd": "0129771387",
                  "email": "principal45.professionnel@orange.fr",
                  "password": "Passwd01",
                  "case": "Identification via ND HD Orange PRO,<br>Mode résolution IAR<br><b>(mettre 4 en commentaire pour la prise de RDV)</b>"
                },
                {
                  "type": "SOSH",
                  "nd": "0116445946",
                  "email": " principal52.framboise@orange.fr",
                  "password": "Passwd1",
                  "case": "Identification via ND SOSH 4P, Mode résolution IAR"
                },
                {
                  "type": "RES",
                  "nd": "0120163050",
                  "email": "scareg2r2c3.ieppdc010-pri@wanadoo.fr",
                  "password": "Passwd1",
                  "case": "Erreur 105 recupererListeMotif  (HD_EN_COURS_LIVRAISON)"
                }
              ],
              "preprod": [],
              "prod": []
            }
        JSON;

    }
}