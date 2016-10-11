<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Image Type'), ['action' => 'edit', $imageType->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Image Type'), ['action' => 'delete', $imageType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $imageType->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Image Type'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Image Type'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="imageType view large-9 medium-8 columns content">
    <h3><?= h($imageType->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($imageType->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($imageType->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Width') ?></th>
            <td><?= $this->Number->format($imageType->width) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Height') ?></th>
            <td><?= $this->Number->format($imageType->height) ?></td>
        </tr>
    </table>
</div>
