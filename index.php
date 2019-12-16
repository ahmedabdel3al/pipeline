    <?php

    use App\AddOneStage;
    use App\Pipe;
    use App\TimesTwoStage;
    use League\Pipeline\Pipeline;

    require_once 'vendor/autoload.php';

    $pipe = (new Pipe)
        ->line(new TimesTwoStage)
        ->line(new AddOneStage);
    // ->via('handle');

    dump($pipe->process(10));
