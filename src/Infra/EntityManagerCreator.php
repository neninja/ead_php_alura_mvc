<?php

namespace Alura\Cursos\Infra;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Tools\Setup;

class EntityManagerCreator
{
    public function getEntityManager(): EntityManagerInterface
    {
        $paths = [__DIR__ . '/../Entity'];
        $isDevMode = false;

        $connection = $this->conectaDeAcordoComENV();
        $connection['application_name'] = 'ead_php_alura_doctrine';

        $config = Setup::createAnnotationMetadataConfiguration(
            $paths,
            $isDevMode
        );
        return EntityManager::create($connection, $config);
    }

    private function conectaDeAcordoComENV(): array
    {
        try {
            [
                'driver' => $driver,
                'user' => $user,
                'password' => $password,
                'host' => $host,
                'dbname' => $dbname,
            ] = $_ENV;

            $drivers = [
                'psql' => 'pdo_pgsql'
            ];

            return [
                'driver' => $drivers[$driver],
                'user' => $user,
                'password' => $password,
                'host' => $host,
                // 'port' => '',
                'dbname' => $dbname,
                // 'charset' => '',
                // 'default_dbname' => '',
                // 'sslmode' => '',
                // 'sslrootcert' => '',
                // 'sslcert' => '',
                // 'sslkey' => '',
                // 'sslcrl' => '',
            ];
        } catch (\Throwable $t){
            throw new \Exception("Erro no parce de ENV");
        }
    }
}
