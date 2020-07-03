<?php 
use yii\helpers\Html;
$this->params['second'] = isset($this->params['second']) ? $this->params['second'] : '';
$this->params['page'] = isset($this->params['page']) ? $this->params['page']: '';
?>


<li class="<?= ($this->params['page'] == 'Dashboard') ? 'active' : '' ?>">
    <?= Html::a('<i class="fa fa-dashboard"></i> <span class="nav-label">Dashboard</span>', ['/dashboard']) ?>
</li>


<li class="<?= ($this->params['page'] == 'Appointments') ? 'active' : '' ?>">
    <?= Html::a('<i class="fa fa-pencil"></i> <span class="nav-label">Appointments </span>', ['/appointment']) ?>
</li>


<li class="<?= ($this->params['page'] == 'Birthing') ? 'active' : '' ?>">
    <?= Html::a('<i class="fa fa-female"></i> <span class="nav-label">Birthing</span><span class="fa arrow"></span>') ?>
     <ul class="nav nav-second-level collapse">
        <li class="<?= ($this->params['second'] == 'Program') ? 'active' : '' ?>">
		    <?= Html::a('<i class="fa fa-female"></i> <span class="nav-label">Birthing Program</span>', ['/birthing']) ?>
		</li>

		<li class="<?= ($this->params['second'] == 'Checkups') ? 'active' : '' ?>">
		    <?= Html::a('<i class="fa fa-stethoscope"></i> <span class="nav-label">Assessment </span>', ['/birthing-assessment']) ?>
		</li>

		<li class="<?= ($this->params['second'] == 'Intravenous') ? 'active' : '' ?>">
		    <?= Html::a('<i class="fa fa-user-md"></i> <span class="nav-label">Intravenous Fluid </span>', ['birthing-intravenous-fluid/index']) ?>
		</li>

		<li class="<?= ($this->params['second'] == 'Sheet') ? 'active' : '' ?>">
		    <?= Html::a('<i class="fa fa-book"></i> <span class="nav-label">Monitoring Sheet </span>', ['/birthing-monitoring-sheet']) ?>
		</li>

		<li class="<?= ($this->params['second'] == 'Weight') ? 'active' : '' ?>">
		    <?= Html::a('<i class="fa fa-heart"></i> <span class="nav-label">Weight Progress</span>', ['/birthing-weight-progress']) ?>
		</li>

		<li class="<?= ($this->params['second'] == 'Order') ? 'active' : '' ?>">
		    <?= Html::a('<i class="fa fa-info-circle"></i> <span class="nav-label">Physician\'s Order</span>', ['/birthing-physician-order']) ?>
		</li>

		<li class="<?= ($this->params['second'] == 'Newborn') ? 'active' : '' ?>">
		    <?= Html::a('<i class="fa fa-child"></i> <span class="nav-label">Newborn Babies</span>', ['/birthing-newborn']) ?>
		</li>
    </ul>

</li>


<li class="<?= ($this->params['page'] == 'Laboratory') ? 'active' : '' ?>">
    <?= Html::a('<i class="fa fa-heartbeat"></i> <span class="nav-label">Laboratory</span><span class="fa arrow"></span>') ?>
     <ul class="nav nav-second-level collapse">
        <li class="<?= ($this->params['second'] == 'Fecalysis') ? 'active' : '' ?>">
		    <?= Html::a('<i class="fa fa-female"></i> <span class="nav-label">Fecalysis</span>', ['/fecalysis']) ?>
		</li>

		<li class="<?= ($this->params['second'] == 'Urinalysis') ? 'active' : '' ?>">
		    <?= Html::a('<i class="fa fa-stethoscope"></i> <span class="nav-label">Urinalysis </span>', ['/urinalysis']) ?>
		</li>

		<li class="<?= ($this->params['second'] == 'Hematology') ? 'active' : '' ?>">
		    <?= Html::a('<i class="fa fa-user-md"></i> <span class="nav-label">Hematology </span>', ['/hematology']) ?>
		</li>

    </ul>

</li>


<!--<li class="<?= ($this->params['page'] == 'Tb') ? 'active' : '' ?>">-->
<!--    <?= Html::a('<i class="fa fa-calendar"></i> <span class="nav-label">DOTS</span><span class="fa arrow"></span>') ?>-->
<!--     <ul class="nav nav-second-level collapse">-->
<!--        <li class="<?= ($this->params['second'] == 'TbProgram') ? 'active' : '' ?>">-->
<!--		    <?= Html::a('<i class="fa fa-female"></i> <span class="nav-label">TB Program</span>', ['/dots']) ?>-->
<!--		</li>-->
<!--        <li class="<?= ($this->params['second'] == 'ipt') ? 'active' : '' ?>">-->
<!--		    <?= Html::a('<i class="fa fa-female"></i> <span class="nav-label">TB TREATMENT/IPT CARD</span>', ['/dots-tb-treatment']) ?>-->
<!--		</li>-->
<!--        <li class="<?= ($this->params['second'] == 'opd') ? 'active' : '' ?>">-->
<!--		    <?= Html::a('<i class="fa fa-female"></i> <span class="nav-label">OPD Record</span>', ['/dots-opd-record']) ?>-->
<!--		</li>-->
<!--    </ul>-->

<!--</li>-->


<li class="<?= ($this->params['page'] == 'Tb') ? 'active' : '' ?>">
    <?= Html::a('<i class="fa fa-female"></i> <span class="nav-label">TB Program (DOTS) </span>', ['/dots']) ?>
</li>

<li class="<?= ($this->params['page'] == 'Waterlab') ? 'active' : '' ?>">
    <?= Html::a('<i class="fa fa-crosshairs"></i> <span class="nav-label">Water Laboratory</span>', ['/water-lab']) ?>
</li>



<li class="<?= ($this->params['page'] == 'Physical') ? 'active' : '' ?>">
    <?= Html::a('<i class="fa fa-male"></i> <span class="nav-label">Physical</span>', ['/physical']) ?>
</li>



<li class="<?= ($this->params['page'] == 'Dental') ? 'active' : '' ?>">
    <?= Html::a('<i class="fa fa-medkit"></i> <span class="nav-label">Dental</span>', ['/dental']) ?>
</li>


<li class="<?= ($this->params['page'] == 'Medical') ? 'active' : '' ?>">
    <?= Html::a('<i class="fa fa-user-md"></i> <span class="nav-label">Checkups</span>', ['/medical']) ?>
</li>

<li class="<?= ($this->params['page'] == 'Profile') ? 'active' : '' ?>">
    <?= Html::a('<i class="fa fa-user-secret"></i> <span class="nav-label">Profile</span>', ['/profile']) ?>
</li>