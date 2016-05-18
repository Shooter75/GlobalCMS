<div class="container body">
    <div class="row col-xs-9">
        <div class="single-post">
            <div class="col-xs-12">
                <h2 class="col-xs-9">
                    <?php echo $single_post->post_title; ?>
                </h2>
                <h3 class="col-xs-3 text-right">
                    <a href="" title="Come back" class="glyphicon glyphicon-step-backward" onclick="window.history.back();"></a>
                    <?php if($current_user->role->access_lvl> 5) : ?>
                        <a href="/admin/post_edit/<?php echo $single_post->post_id;?>" title="Edit Post" class="glyphicon glyphicon-edit" ></a>
                    <?php endif;?>
                </h3>
            </div>
            <article class="">
                <?php if($single_post->post_attachment == '') : ?>
                    <img class="col-xs-4 img-thumbnail" src="<?=base_url('assets\uploads\welcome.jpg')?>">
                <?php else : ?>
                    <img class="col-xs-4 img-thumbnail" src="<?=base_url("assets\\uploads\\".$single_post->post_attachment)?>">
                <?php endif;  ?>
                <p class="col-xs-8">
                    <?php echo $single_post->post_body; ?>
                </p>
            </article>
            <div class="col-xs-9">
                <p class="popover-title container">
                    Posted by <b><?php echo anchor('users/single/'.$single_post->post_author_name,$single_post->post_author_name);?></b> at <u><?php echo $single_post->post_date; ?></u> in <b><?php echo $single_post->category_name;?></b>
                </p>
            </div>
        </div>
    </div>
    <section>

    </section>
    <div class="row col-xs-3">
        <div class="sidebar">
            <h3>Some information</h3>
            <p>Some information</p>
        </div>
    </div>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?=base_url().'assets/js/bootstrap.min.js'?>"></script>
</body>
</html>