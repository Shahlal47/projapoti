<div class="umtop">
    <div class="um_box_up"></div>
    <div class="um_box_mid">
        <div class="um_box_mid_content">
            <div class="um_box_mid_content_top">
                <h1><?php echo __('User Group Permissions'); ?></h1>

                <?php echo $this->Form->input("controller", array('empty'=>'--Select Controller--','label' => 'Select Controller', 'class' => 'form-control', 'type' => 'select', 'div' => array('class' => 'form-group'), 'options' => $allControllers, 'value' => $c, "onchange" => "window.location='" . $this->request->webroot . "/userGroupPermissions/index/?c='+(this).value")) ?>
            </div>
            <div class="umhr"></div>
            <div class="um_box_mid_content_mid" id="permissions">
                <?php
                 if(!empty($controllers)){ ?>
                    <input type="hidden" id="BASE_URL" value="<?php echo $this->request->webroot; ?>">
                    <input type="hidden" id="groups" value="<?php echo $groups ?>">
                    <table >
                        <tbody>
                        <tr>
                            <th> <?php echo __("Controller"); ?> </th>
                            <th> <?php echo __("Action"); ?> </th>
                            <th> <?php echo __("Permission"); ?> </th>
                            <th> <?php echo __("Operation"); ?> </th>
                        </tr>
                        <?php
                            $k = 1;
                            foreach($controllers as $key => $value)
                            {
                                if(!empty($value))
                                {
                                    foreach($value as $key_action=>$action)
                                    {
                                            echo $this->Form->create();
                                            echo $this->Form->hidden('controller', array('id' => 'controller' . $k, 'value' => $key));
                                            echo $this->Form->hidden('action', array('id' => 'action' . $k, 'value' => $key_action));
                                            echo "<tr>";
                                            echo "<td>" . $key . "</td>";
                                            echo "<td>" . $key_action . "</td>";
                                            echo "<td>";
                                            foreach($user_groups as $ugname)
                                            {
                                                if(isset($action[$ugname]) && $action[$ugname] == 1)
                                                {
                                                    $checked = true;
                                                } 
                                                else
                                                {
                                                    $checked = false;
                                                }
                                                echo $this->Form->input($ugname, array('id' => $ugname . $k, 'type' => 'checkbox', 'checked' => $checked));
                                            }
                                            echo "</td>";
                                            echo "<td>";
                                            echo $this->Form->button('Update', array('type' => 'button', 'id' => 'mybutton123', 'name' => $k, 'onClick' => 'javascript:update_fields(' . $k . ');', 'class' => 'btn btn-success'));
                                            echo "<div id='updateDiv" . $k . "' align='right'>&nbsp;</div>";
                                            echo "</td>";
                                            echo "</tr>";
                                            echo $this->Form->end();
                                            $k++;
                                    }
                                }
                            } ?>
                    </table>
                <?php } ?>
            </div>
        </div>
    </div>
    <div class="um_box_down"></div>
</div>
<script src="<?php echo $this->request->webroot; ?>assets/admin/layout/scripts/umupdate.js" type="text/javascript"></script>