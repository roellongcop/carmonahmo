<table class="table table-bordered data">
    <thead>
        <tr>
            <th>PATIENT</th>
            <!--<th>DATE </th>-->
            <!--<th>COMPLAINT</th>-->
            <!--<th>STATUS</th>-->
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data as $key => $model) {
            echo $this->render('/medical/_medical', ['model' => $model]);
        } ?>    
    </tbody>
</table>