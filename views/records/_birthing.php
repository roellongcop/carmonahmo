 <table class="table table-bordered data">
    <thead>
        <tr>
            <th>PATIENT NAME</th>
            <!--<th>COMPLAINT</th>-->
            <!--<th>START OF PREGNANCY</th>-->
            <!--<th>EXPECTED DELIVERY</th>-->
            <!--<th>STATUS</th>-->
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data as $key => $model) {
            echo $this->render('/birthing/_birthing', ['model' => $model]);
        } ?>
    </tbody>
</table>