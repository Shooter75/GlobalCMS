<link href="<?=base_url().'assets/widgets/locations.css'?>" rel="stylesheet">
<script src="<?=base_url().'assets/js/interact.js'?>"></script>
<script src="<?=base_url().'assets/js/script.js'?>"></script>
<div class="container body">
    <div class="row col-xs-9">
        <div class="row col-xs-12 widgets-list">
            <?php foreach ($available_widgets as $available_widget):?>
                <div id="widget" class="draggable drag-drop" title="<?=$available_widget->path?>">#<?=$available_widget->name?></div>
            <?php endforeach;?>
            <a href="/widgets/install" class="row col-xs-12 btn btn-success">Add new widgets</a>
        </div>
    </div>
    <div class="row col-xs-3">
        <?php $this->load->view('settings/widgets/view_sidebar', ['categories' => $categories]);?>
    </div>
<?php $this->load->view('settings/widgets/view_footer', ['widgets' => $widgets]); ?>