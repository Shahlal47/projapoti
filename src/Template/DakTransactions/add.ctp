<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Dak Transactions'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Dak Actions'), ['controller' => 'DakActions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Dak Action'), ['controller' => 'DakActions', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Office Organizations'), ['controller' => 'OfficeOrganizations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Office Organization'), ['controller' => 'OfficeOrganizations', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="dakTransactions form large-10 medium-9 columns">
    <?= $this->Form->create($dakTransaction); ?>
    <fieldset>
        <legend><?= __('Add Dak Transaction') ?></legend>
        <?php
            echo $this->Form->input('dak');
            echo $this->Form->input('dak_action_id', ['options' => $dakActions, 'empty' => true]);
            echo $this->Form->input('office_organization_id', ['options' => $officeOrganizations]);
            echo $this->Form->input('decision_taken');
            echo $this->Form->input('transaction_date');
            echo $this->Form->input('sender_action_owner');
            echo $this->Form->input('receiver_action_owner');
            echo $this->Form->input('recipient');
            echo $this->Form->input('attention');
            echo $this->Form->input('created_by');
            echo $this->Form->input('modified_by');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
