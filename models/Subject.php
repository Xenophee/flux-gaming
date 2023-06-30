<?php


class Subject
{

    public string $title;
    public string $img;
    public string $meta_description;
    public string|array $link;


    public function extractXml(string $link, int $articlesNumber): array
    {
        // ----------------------------------------------------------------
        // Possibilité d'utiliser directement cette fonction PHP plutôt que la classe.
        // $url = simplexml_load_file($link);
        // ----------------------------------------------------------------

        // ----------------------------------------------------------------
        // Chargement du fichier
        $url = file_get_contents($link);
        $xml = new SimpleXMLElement($url);
        // ----------------------------------------------------------------

        // ----------------------------------------------------------------
        // Récupération de l'élément à exploiter
        $data = $xml->channel->item;
        // ----------------------------------------------------------------

        // ----------------------------------------------------------------
        // Récupération du nombre d'éléments à exploiter selon le nombre envoyé en paramètre d'entrée de la fonction
        for ($number = 0; $number < $articlesNumber; $number++) {
            $items[] = $data[$number];
        }
        // ----------------------------------------------------------------

        // ----------------------------------------------------------------
        // Récupération, formatage de la date en français et ajout au fichier XML sans écraser la balise d'origine
        foreach ($items as $key => $item) {
            $date = $item->children('dc', true)->date;
            $date = date("d/m/Y", (strtotime($date)));
            $item->addChild('date', $date);
        }
        // ----------------------------------------------------------------

        return $items;
    }
}
