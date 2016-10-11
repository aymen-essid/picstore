<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $imageType->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $imageType->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Image Type'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="imageType form large-9 medium-8 columns content">
    <?= $this->Form->create($imageType) ?>
    <fieldset>
        <legend><?= __('Edit Image Type') ?></legend>
        <?php
            echo $this->Form->input('width');
            echo $this->Form->input('height');
            echo $this->Form->input('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
