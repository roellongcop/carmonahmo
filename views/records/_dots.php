<table class="table table-bordered data">
    <thead>
        <tr>
            <th>PATIENT NAME</th>
            <!--<th>DATE OF REQUESTED</th>-->
            <!--<th>NAME OF COLLECTION UNIT</th>-->
            <!--<th>AGE</th>-->
            <!--<th>TELEPHONE NUMBER</th>-->
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data as $key => $model) {
            echo $this->render('/dots/_dots', ['model' => $model]);
        } ?>
    </tbody>
</table>