    <?php

    use App\AddOneStage;
    use App\Pipe;
    use App\TimesTwoStage;
    use League\Pipeline\Pipeline;

    require_once 'vendor/autoload.php';
    /*  $pipeline = (new Pipeline)
        ->pipe(new TimesTwoStage)
        ->pipe(new AddOneStage);
 */
    // Returns 21

    $pipe = (new Pipe)
        ->line(new TimesTwoStage)
        ->line(new AddOneStage);
    dump($pipe->process(10));
