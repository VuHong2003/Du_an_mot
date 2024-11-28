<?php
require_once '../models/Settings.php';
class SettingController extends Settings
{
    public function index(){
        $settings = $this->getAllSetting();
        $GLOBALS['settings'] = $settings;
        // var_dump($settings); die();
        if(isset($_POST['btn_setting'])){
            foreach ($_POST['settings'] as $id => $content) {
                $this->updateSetting($id, $content);
                header("Location: ?act=setting");
            }
        }
        include '../views/admin/setting/settings.php';
    }
    
}
