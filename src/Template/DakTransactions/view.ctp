<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Dak Transaction'), ['action' => 'edit.ctp', $dakTransaction->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Dak Transaction'), ['action' => 'delete', $dakTransaction->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dakTransaction->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Dak Transactions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Dak Transaction'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Dak Actions'), ['controller' => 'DakActions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Dak Action'), ['controller' => 'DakActions', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Office Organizations'), ['controller' => 'OfficeOrganizations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Office Organization'), ['controller' => 'OfficeOrganizations', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="dakTransactions view large-10 medium-9 columns">
    <h2><?= h($dakTransaction->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Dak Action') ?></h6>
            <p><?= $dakTransaction->has('dak_action') ? $this->Html->link($dakTransaction->dak_action->, ['controller' => 'DakActions', 'action' => 'view', $dakTransaction->dak_action->]) : '' ?></p>
            <h6 class="subheader"><?= __('Office Organization') ?></h6>
            <p><?= $dakTransaction->has('office_organization') ? $this->Html->link($dakTransaction->office_organization->id, ['controller' => 'OfficeOrganizations', 'action' => 'view', $dakTransaction->office_organization->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Decision Taken') ?></h6>
            <p><?= h($dakTransaction->decision_taken) ?></p>
            <h6 class="subheader"><?= __('Recipient') ?></h6>
            <p><?= h($dakTransaction->recipient) ?></p>
            <h6 class="subheader"><?= __('Attention') ?></h6>
            <p><?= h($dakTransaction->attention) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($dakTransaction->id) ?></p>
            <h6 class="subheader"><?= __('Dak') ?></h6>
            <p><?= $this->Number->format($dakTransaction->dak) ?></p>
            <h6 class="subheader"><?= __('Sender Action Owner') ?></h6>
            <p><?= $this->Number->format($dakTransaction->sender_action_owner) ?></p>
            <h6 class="subheader"><?= __('Receiver Action Owner') ?></h6>
            <p><?= $this->Number->format($dakTransaction->receiver_action_owner) ?></p>
            <h6 class="subheader"><?= __('Created By') ?></h6>
            <p><?= $this->Number->format($dakTransaction->created_by) ?></p>
            <h6 class="subheader"><?= __('Modified By') ?></h6>
            <p><?= $this->Number->format($dakTransaction->modified_by) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Transaction Date') ?></h6>
            <p><?= h($dakTransaction->transaction_date) ?></p>
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($dakTransaction->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($dakTransaction->modified) ?></p>
        </div>
    </div>
</div>
