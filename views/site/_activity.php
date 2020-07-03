<section class="offered-service-area " id="act">
    <div class="container">
        <div class="row ">
            <div class="col-lg-12"><br>
                <h1 class="schedule-title">Schedule of Activities</h1><br>

                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>Activities</th>
                            <th>Day</th>
                            <th>Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($activities as $activity) : ?>
                        <tr>
                            <td><?= $activity->name ?></td>
                            <td><?= $activity->day ?></td>
                            <td><?= $activity->time ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>    

            </div>

        </div>
    </div>  
</section>