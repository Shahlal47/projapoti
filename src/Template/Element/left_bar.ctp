<!-- BEGIN SIDEBAR -->
	<?php
		$session = $this->request->session();
		$menu_items = $session->read('menu_items');
		$selected_module = $session->read('module_id');
	?>
	<div class="page-sidebar-wrapper">
		<div class="page-sidebar navbar-collapse collapse">
			<ul class="page-sidebar-menu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
				<li class="start active ">
					<a href="<?= $this->request->webroot;?>dashboard/dashboard">
					<i class="icon-home"></i>
					<span class="title">Dashboard</span>
					</a>
				</li>
				<?php if(!empty($loggedUser['user_type_id']) && $loggedUser['user_type_id'] <= 2){?>
				<li class=" ">
					<a href="javascript:;">
						<i class="icon-home"></i>
						<span class="title">Menu Manager</span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="<?= $this->request->webroot;?>menus/index">
								<i class="icon-plus"></i> 
								<span class="title">Menu List</span>
							</a>	
						</li>
						<li>
							<a href="<?= $this->request->webroot;?>userGroupPermissions/index">
								<i class="icon-plus"></i> 
								<span class="title">Access Control</span>
							</a>	
						</li>
					</ul>
				</li>
				<?php
				}
				if(!empty($selected_module) && $selected_module == 1){?>
				<li class=" ">
					<a href="javascript:;">
						<i class="icon-home"></i>
						<span class="title">Module Information</span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="<?= $this->request->webroot;?>moduleInfos/add">
								<i class="icon-plus"></i> 
								<span class="title">Add Module</span>
							</a>	
						</li>
						<li>
							<a href="<?= $this->request->webroot;?>moduleInfos/index">
								<i class="icon-plus"></i>
								<span class="title">Module List</span>
							</a>	
						</li>
					</ul>
				</li>
				<?php }?>
				
				<?php foreach($menu_items[1] as $main_menu_id=>$main_menu){
				?>
				<li>
					<?php 
					if(isset($menu_items[2][$main_menu_id]) && !empty($menu_items[2][$main_menu_id])){
					?>
					<a href="<?= $this->request->webroot;?>"><i class="icon-briefcase"></i><span class="title"><?= $main_menu->menu_name;?></span><span class="arrow "></span></a>
					<ul class="sub-menu">
					<?php foreach ($menu_items[2][$main_menu_id] as $sub_menu){?>
						<li>
							<?php if(isset($menu_items[3][$main_menu_id][$sub_menu->id]) && !empty($menu_items[3][$main_menu_id][$sub_menu->id])){?>
							<a href="javascript:;">
							<i class="icon-globe"></i> <?= $sub_menu->menu_name;?> <span class="arrow"></span>
							</a>
							<ul class="sub-menu">
								<?php foreach ($menu_items[3][$main_menu_id][$sub_menu->id] as $menu){?>
								<li>
									<a href="<?php echo $this->request->webroot.''.$menu->menu_controller.'/'.$menu->menu_action;?>"><i class="icon-tag"></i><?= $menu->menu_name;?></a>
								</li>
								<?php }?>
							</ul>
							<?php }else{?>
							<a href="<?php echo $this->request->webroot.''.$sub_menu->menu_controller.'/'.$sub_menu->menu_action;?>"><i class="icon-home"></i> <?php echo $sub_menu->menu_name;?> <span class="arrow"></span></a>
							<?php }?>
						</li>
						<?php }?>
					</ul>
					<?php }else{?>
							<a href="<?php echo $this->request->webroot.''.$main_menu->menu_controller.'/'.$main_menu->menu_action;?>"><i class="icon-home"></i> <?php echo $main_menu->menu_name;?> <span class="arrow"></span></a>
							<?php }?>
				</li>
				<?php }?>
			</ul>
			<!-- END SIDEBAR MENU -->
		</div>
	</div>
	<!-- END SIDEBAR -->