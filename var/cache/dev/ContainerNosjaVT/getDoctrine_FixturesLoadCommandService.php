<?php

namespace ContainerNosjaVT;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_FixturesLoadCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'doctrine.fixtures_load_command' shared service.
     *
     * @return \Doctrine\Bundle\FixturesBundle\Command\LoadDataFixturesDoctrineCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/DoctrineCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-fixtures-bundle/Command/LoadDataFixturesDoctrineCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/Loader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/doctrine-bridge/DataFixtures/ContainerAwareLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-fixtures-bundle/Loader/SymfonyFixturesLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/FixtureInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/SharedFixtureInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/AbstractFixture.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-fixtures-bundle/ORMFixtureInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-fixtures-bundle/Fixture.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/OrderedFixtureInterface.php';
        include_once \dirname(__DIR__, 4).'/src/DataFixtures/AnswerFixture.php';
        include_once \dirname(__DIR__, 4).'/src/DataFixtures/AppFixtures.php';
        include_once \dirname(__DIR__, 4).'/src/DataFixtures/CategoryFixture.php';
        include_once \dirname(__DIR__, 4).'/src/DataFixtures/LevelFixture.php';
        include_once \dirname(__DIR__, 4).'/src/DataFixtures/QuestionAnswerFixture.php';
        include_once \dirname(__DIR__, 4).'/src/DataFixtures/QuestionFixture.php';
        include_once \dirname(__DIR__, 4).'/src/DataFixtures/UserFixtures.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-fixtures-bundle/Purger/PurgerFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-fixtures-bundle/Purger/ORMPurgerFactory.php';

        $a = new \Doctrine\Bundle\FixturesBundle\Loader\SymfonyFixturesLoader($container);
        $a->addFixtures([0 => ['fixture' => new \App\DataFixtures\AnswerFixture(), 'groups' => []], 1 => ['fixture' => new \App\DataFixtures\AppFixtures(), 'groups' => []], 2 => ['fixture' => new \App\DataFixtures\CategoryFixture(), 'groups' => []], 3 => ['fixture' => new \App\DataFixtures\LevelFixture(), 'groups' => []], 4 => ['fixture' => new \App\DataFixtures\QuestionAnswerFixture(), 'groups' => []], 5 => ['fixture' => new \App\DataFixtures\QuestionFixture(), 'groups' => []], 6 => ['fixture' => new \App\DataFixtures\UserFixtures(($container->privates['security.user_password_hasher'] ?? $container->load('getSecurity_UserPasswordHasherService'))), 'groups' => []]]);

        $container->privates['doctrine.fixtures_load_command'] = $instance = new \Doctrine\Bundle\FixturesBundle\Command\LoadDataFixturesDoctrineCommand($a, ($container->services['doctrine'] ?? $container->getDoctrineService()), ['default' => new \Doctrine\Bundle\FixturesBundle\Purger\ORMPurgerFactory()]);

        $instance->setName('doctrine:fixtures:load');

        return $instance;
    }
}