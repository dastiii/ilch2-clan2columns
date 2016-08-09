<div class="panel-body">
    <form action="get">
        <select class="form-control languageInput" name="language">
            <?php foreach ($this->getTranslator()->getLocaleList() as $key => $value): ?>
                <?php $sel = ''; ?>
                <?php if ($this->get('language') == $key): ?>
                    <?php $sel = 'selected="selected"'; ?>
                <?php endif; ?>

                <option <?=$sel ?> value="<?=$key ?>"><?=$this->escape($value) ?></option>
            <?php endforeach; ?>
        </select>
    </form>
</div>

<script>
$('.languageInput').change (
    this,
    function () {
        top.location.href = '<?=$this->getCurrentUrl(['language' => '__LANG_PLACEHOLDER__'], false); ?>'
                .replace('__LANG_PLACEHOLDER__', $(this).val());
    }
);
</script>
