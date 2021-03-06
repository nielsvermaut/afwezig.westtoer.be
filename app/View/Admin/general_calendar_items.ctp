<div class="row">
    <div class="col-md-3">
        <?php echo $this->element('admin/base_admin_menu');?>
    </div>
    <div class="col-md-9">
        <h2 class="first">Algemene feestdagen beheren</h2>
        <?php echo $this->Form->create('Request', array('url' => array('controller' => 'admin', 'action' => 'GeneralCalendarItems')));?>
        <div class="row">
            <div class="col-md-8">
                <?php if(!empty($requests)){echo $this->Request->tableRequests($requests, 'general');};?>
            </div>
            <div class="col-md-4">
                <div class="well flat">
                    <?php echo $this->Form->input('name', array('label' => false, 'class' => 'form-control', 'placeholder' => 'Naam van de feestdag'));?>
                    <div class="row">
                        <div class="col-md-8 formspaced-left spaced">
                            <input class="form-control" name="data[Request][start_date]" type="text" placeholder="Start" value="" id="RequestStartDate">
                        </div>
                        <div class="col-md-4 formspaced-right spaced">
                            <?php echo $this->Form->input('start_time', array('label' => false, 'class' => 'form-control', 'options' => array(
                                array('name' => 'AM', 'value' => 'AM'),
                                array('name' => 'PM', 'value' => 'PM'),
                            )));?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 formspaced-left spaced">
                            <input class="form-control" name="data[Request][end_date]" type="text" placeholder="Einde" value="" id="RequestEndDate">
                        </div>
                        <div class="col-md-4 formspaced-right spaced">
                            <?php echo $this->Form->input('end_time',  array('label' => false, 'class' => 'form-control', 'options' => array(
                                array('name' => 'PM', 'value' => 'PM'),
                                array('name' => 'AM', 'value' => 'AM'),
                            )));?>
                        </div>
                    </div>
                    <?php echo $this->Form->input('type',  array('label' => false, 'class' => 'form-control spaced', 'options' => array(
                        array('name' => 'Feestdag', 'value' => '0'),
                        array('name' => 'Brugdag', 'value' => '1'),
                        array('name' => 'Dienstvrijstelling', 'value' => 2)
                    )));?>
                    <?php echo $this->Form->submit('Verstuur', array('class' => 'btn btn-primary fullwidth'));?>
                    <?php echo $this->Form->end();?>
                </div>
            </div>
        </div>

    </div>
</div>


<?php echo $this->Html->script('Requests/add.js');?>