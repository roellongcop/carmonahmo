<table class="table table-bordered data">
    <thead>
        <tr>
            <th>PATIENT NAME</th>
            <!--<th>SAMPLING COLLECTED BY</th>-->
            <!--<th>SAMPLING DATE AND TIME</th>-->

        </tr>
    </thead>
    <tbody>
        <?php foreach ($data as $key => $model) {
            echo $this->render('/water-lab/_waterlab', ['model' => $model]);
        } ?>
    </tbody>
</table>