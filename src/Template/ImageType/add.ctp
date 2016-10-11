<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Image Type'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="imageType form large-9 medium-8 columns content">
    <?= $this->Form->create($imageType) ?>
    <fieldset>
        <legend><?= __('Add Image Type') ?></legend>
        <?php
            echo $this->Form->input('width');
            echo $this->Form->input('height');
            echo $this->Form->input('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
