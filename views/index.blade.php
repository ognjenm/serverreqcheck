@extends(Config::get('serverreqcheck::masterview'))

@section(Config::get('serverreqcheck::contentarea'))
    <h1>Server Status</h1>

    <p>Checking service status on <strong><?php echo $cfg['host']; ?></strong>.</p>
    <h2>Results</h2>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Service</th>
            <th>Status</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach($cfg['services'] as $service){
            echo '<tr>';
            echo '<td class="name">'.$service['name'].'</td>';
            if($ss->checkServer($cfg['host'], $service['port'])){
                echo '<td class="bg-green">Ok</td>';
            }else{
                echo '<td class="bg-red">Not running</td>';
            }
            echo '<td class="description">'.$service['description'].'</td>';
            echo '</tr>';
        }
        ?>
        </tbody>
    </table>
</div>
@stop