<?php
namespace AppBundle\DataFixtures;

use AppBundle\Entity\Film;
use AppBundle\Entity\Comments;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class FilmFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        
        $blackpanther = new Film();
        $blackpanther->setName('BLACK PANTHER');
        $blackpanther->setDuration('2h 15min');
        $blackpanther->setReleaseDate( new \DateTime("2018-02-14"));
        $blackpanther->setDescription('Après les événements qui se sont déroulés dans Captain America : Civil War, T’Challa revient chez lui prendre sa place sur le trône du Wakanda, une nation africaine technologiquement très avancée. Mais lorsqu’un vieil ennemi resurgit, le courage de T’Challa est mis à rude épreuve, aussi bien en tant que souverain qu’en tant que Black Panther. Il se retrouve entraîné dans un conflit qui menace non seulement le destin du Wakanda, mais celui du monde entier…');
        $blackpanther->setImage('cf22b8face7c140b6338807e8ead5bac.png');
        $blackpanther->setVideo('BLACK PANTHER Bande Annonce VF (Nouvelle  2018).mp4');

        $manager->persist($blackpanther);
        $manager->flush();

        $jumanji = new Film();
        $jumanji->setName('JUMANJI');
        $jumanji->setDuration('1h 59min');
        $jumanji->setReleaseDate( new \DateTime("2017-12-20"));
        $jumanji->setDescription('Le destin de quatre lycéens en retenue bascule lorsqu’ils sont aspirés dans le monde de Jumanji. Après avoir découvert une vieille console contenant un jeu vidéo dont ils n’avaient jamais entendu parler, les quatre jeunes se retrouvent mystérieusement propulsés au cœur de la jungle de Jumanji, dans le corps de leurs avatars. Ils vont rapidement découvrir que l’on ne joue pas à Jumanji, c’est le jeu qui joue avec vous… Pour revenir dans le monde réel, il va leur falloir affronter les pires dangers et triompher de l’ultime aventure. Sinon, ils resteront à jamais prisonniers de Jumanji…');
        $jumanji->setVideo('');
        $jumanji->setImage('1f928e1b06b378d9feff058e9d1c783c.png');

        $manager->persist($jumanji);
        $manager->flush();

        $labelleetlabete = new Film();
        $labelleetlabete->setName('LA BELLE ET LA BÊTE');
        $labelleetlabete->setDuration('2h 09min');
        $labelleetlabete->setReleaseDate( new \DateTime("2017-03-22"));
        $labelleetlabete->setDescription('Fin du XVIIIè siècle, dans un petit village français. Belle, jeune fille rêveuse et passionnée de littérature, vit avec son père, un vieil inventeur farfelu. S\'étant perdu une nuit dans la fôret, ce dernier se réfugie au château de la Bête, qui le jette au cachot. Ne pouvant supporter de voir son père emprisonné, Belle accepte alors de prendre sa place, ignorant que sous le masque du monstre se cache un Prince Charmant tremblant d\'amour pour elle, mais victime d\'une terrible malédiction.');
        $labelleetlabete->setVideo('');

        $labelleetlabete->setImage('a7c2c87dbdbdecb7d91f1cc481ce4d58.png');

        $manager->persist($labelleetlabete);
        $manager->flush();

        $sevensisters = new Film();
        $sevensisters->setName('SEVEN SISTERS');
        $sevensisters->setDuration('2h 04min');
        $sevensisters->setReleaseDate( new \DateTime("2017-09-30"));
        $sevensisters->setDescription('2073. La Terre est surpeuplée. Le gouvernement décide d’instaurer une politique d’enfant unique, appliquée de main de fer par le Bureau d’Allocation des Naissances, sous l’égide de Nicolette Cayman. Confronté à la naissance de septuplées, Terrence Settman décide de garder secrète l’existence de ses 7 petites-filles. Confinées dans leur appartement, prénommées d’un jour de la semaine, elles devront chacune leur tour partager une identité unique à l’extérieur, simulant l’existence d’une seule personne : Karen Settman. Si le secret demeure intact des années durant, tout s’effondre le jour où Lundi disparait mystérieusement…');
        $sevensisters->setVideo('');
        $sevensisters->setImage('3f076f997af13800e09a957261f443b1.png');

        $manager->persist($sevensisters);
        $manager->flush();

    }
}