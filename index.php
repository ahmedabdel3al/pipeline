    <?php

    use App\AddOneStage;
    use App\Pipe;
    use App\TimesTwoStage;
    use App\User;
    use League\Pipeline\Pipeline;

    require_once 'vendor/autoload.php';

    $pipe = (new Pipe)
        ->line(new TimesTwoStage)
        ->line(new AddOneStage)
        ->via('handle')
        ->process(new User);

    dump($pipe);
