<h3><?php echo __('Raw Email Headers'); ?></h3>
<b><a class="close" href="#"><i class="icon-remove-circle"></i></a></b>
<hr/>

<pre style="max-height: 300px; overflow-y: scroll">
<?php echo $headers; ?>
</pre>

<hr>
<p class="full-width">
    <span class="buttons pull-right">
        <input type="button" name="cancel" class="close"
            value="<?php echo __('Close'); ?>">
    </span>
</p>