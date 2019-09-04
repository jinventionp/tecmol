<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class PermissionsComponent extends Component {

    public function getPermissionsModule($profiles, $controller) {
        $permissionModule = array();
        if (!empty($profiles)):
            foreach ($profiles as $profile):
                if (!empty($profile['Module'])):
                    foreach ($profile['Module'] as $module):
                        if ($module['controller_name'] == $controller):
                            $permissionModule = $module;
                            break;
                        endif;
                    endforeach;
                endif;
            endforeach;
        endif;
        //pr($permissionModule);
        return $permissionModule;
    }
    
}

?>
