<?php

namespace App\Command;

use App\Entity\Utilisateurs;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class ImportUserCommand extends Command
{
    protected static $defaultName = 'app:import-user';
    protected static $defaultDescription = 'Import les données des utilisateurs depuis un fichier csv';

    private $entityManager;

    public function __construct(string $name = null, EntityManagerInterface $entityManager)
    {
        parent::__construct($name);
        $this->entityManager = $entityManager;
    }

    protected function configure(): void
    {
        $this
            ->setDescription(self::$defaultDescription)
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);

        $path = dirname(__DIR__)."/Data/import.csv";    
        //$io->setDelimiter(';');
        //$results = $io->fetchAssoc();

        if (!file_exists($path)) {
            $io->error(sprintf('Fichier non trouvé, veuillez vérifier la variable $path=%s', $path));

            return 1;
        }
        $handle = fopen(dirname(__DIR__)."/Data/import.csv", 'r');
        $lineNumber = 1;
        while (($raw_string = fgets($handle)) !== false) {
            // on ignore la premier ligne (l'entête)
            if ($lineNumber === 1) {
                $lineNumber++;
                continue;
            }
            $row = str_getcsv($raw_string);

            $utilisateurs = new Utilisateurs();

            $utilisateurs
            ->setFormation($row[0] ?? '')
            ->setCivilite($row[2] ?? ';')
            ->setNom($row[3] ?? ';')
            ->setPrenom($row[4] ?? ';')
            ->setAdresse($row[5] ?? ';')
            ->setCodePostal($row[6] ?? ';')
            ->setVilles($row[7] ?? ';')
            ->setTelephone($row[8] ?? ';')
            ->setEmail($row[9] ?? ';')
            ->setLogin($row[9] ?? ';')
            ->setPassword('random_password');

            

$this->entityManager->persist($utilisateurs);
        }
        fclose($handle);

        $this->entityManager->flush();

        $io->success('Les données sont bien importées...');

        return 0;
    }
}
