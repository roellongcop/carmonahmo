<table class="table table-bordered data">
    <thead>
        <tr>
            <th>INCHARGE</th>
            <!--<th>COMPLAINT</th>-->
            <!--<th>DIAGNOSIS</th>-->
            <!--<th>TREATMENT</th>-->
            <!--<th>STATUS</th>-->
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data as $key => $model) {
            echo $this->render('/dental/_dental', ['model' => $model]);
        } ?>
    </tbody>
</table>