<?php namespace Opalo\Core;

// Panel
// Section
// Control
use WP_Customize_Image_Control;
use WP_Customize_Control;
use Opalo\Helpers\InPage;

/**
 * Clase base para la inicializacion de Opalo
 *
 * Esta clase servira como base para inicializar todos los eventos y procesos de
 * Opalo Framework dentro del proyecto
 *
 * @version    Alpha: 0.0.1
 * @since      Class available since Release 0.0.1
 * @author     Feredev <hector1567xd@gmail.com>
 * @package    Opalo Framework
 */

class SettingsUtil {

  protected $wp_customize = null;

  protected $control = null;
  protected $controlData = [];

  protected $section = null;
  protected $sectionData = [];

  protected $setting = null;

  //

  protected $panel = null;
  protected $panelData = [];

  //

  protected $identificator = null;

  //

  protected $priorityInit = 500;

  protected $lastPriorityCtrl = 0;
  protected $lastPrioritySection = 0;
  protected $lastPriorityPanel = 0;

  //


  function __construct($wp_customize) {
    $this->wp_customize = $wp_customize;
  }

  function setIdentificator($identificator = null) {
    $this->identificator = $identificator;
  }


  // Panel

  function setPanelName($string)        { $this->panel = $string; }
  function setPanelTitle($string)       { $this->panelData['title'] = $string; }
  function setPanelDescription($string) { $this->panelData['description'] = $string; }
  function setPanelPriority($int)       { $this->panelData['priority'] = $this->lastPriorityPanel + $this->priorityInit + $int; $this->lastPriorityPanel++; }
  function createPanel($name = null, $title = null, $description = null, $priority = 1) {
    if ($name)        $this->setPanelName($name);
    if ($title)       $this->setPanelTitle($title);
    if ($description) $this->setPanelDescription($description);
    if ($priority)    $this->setPanelPriority($priority);
    return $this->storePanel();
  }
  function storePanel() {
    $this->wp_customize->add_panel($this->panel, $this->panelData);
    return $this;
  }

  // Section

  function setSectionName($string)        { $this->section = $string; }
  function setSectionTitle($string)       { $this->sectionData['title'] = $string; }
  function setSectionPanel($string)       { $this->sectionData['panel'] = $string; }
  function setSectionDescription($string) { $this->sectionData['description'] = $string; }
  function setSectionPriority($int)       { $this->sectionData['priority'] = $this->lastPrioritySection + $this->priorityInit + $int; $this->lastPrioritySection++; }
  function createSection($name = null, $title = null, $priority = 1, $panel = null, $description = null) {

    if ($name)        $this->setSectionName($name);
    if ($title)       $this->setSectionTitle($title);
    if ($description) $this->setSectionDescription($description);
    if ($priority)    $this->setSectionPriority($priority);

    // Si se especifica un panel y si no se usa el anterior
    if ($panel)    $this->setSectionPanel($panel);
    else if ($this->panel) $this->setSectionPanel($this->panel);

    return $this->storeSection();
  }
  function storeSection() {
    $this->wp_customize->add_section($this->section, $this->sectionData);
    return $this;
  }

  // Setting

  function createSetting($name, $default, $refresh = false) {

    $dataSetting = [ 'default'=> $default ];
    if ($refresh) $dataSetting['transport'] = 'refresh';

    $this->setting = $name;

    $this->wp_customize->add_setting($name, $dataSetting );
    return $this;
  }

  // Control

  function setControlName($string)        { $this->control = $string; }
  function setControlLabel($string)       { $this->controlData['label'] = $string; }
  function setControlType($string)        { $this->controlData['type'] = $string; }
  function setControlSection($string)     { $this->controlData['section'] = $string; }
  function setControlSetting($string)     { $this->controlData['settings'] = $string; }
  function setControlDescription($string) { $this->controlData['description'] = $string; }
  function setControlChoices($options)    { $this->controlData['choices'] = $options; }
  function setControlPriority($int)       { $this->controlData['priority'] = $this->lastPriorityCtrl + $this->priorityInit + $int; $this->lastPriorityCtrl++; }
  function createControl($name = null, $title = null, $setting = null, $section = null, $type = 'text', $priority = 1, $description = null, $options = []) {

    if ($name)        $this->setControlName($name);
    if ($title)       $this->setControlLabel($title);
    if ($type)        $this->setControlType($type);
    if ($description) $this->setControlDescription($description);
    if ($options) $this->setControlChoices($options);
    if ($priority)    $this->setControlPriority($priority);

    // Si se especifica un section y si no se usa el anterior
    if ($section)    $this->setControlSection($section);
    else if ($this->section) $this->setControlSection($this->section);

    // Si se especifica un setting y si no se usa el anterior
    if ($setting)    $this->setControlSetting($setting);
    else if ($this->setting) $this->setControlSetting($this->setting);

    return $this->storeControl();

  }

  function storeControl() { //choices = ['default' => 'Default']
    if (isset($this->controlData['type']) && $this->controlData['type'] === 'image') {
      $this->wp_customize->add_control(
        new WP_Customize_Image_Control($this->wp_customize, $this->control, $this->controlData)
      );
    }else if (isset($this->controlData['type']) && $this->controlData['type'] === 'select') {
      $this->wp_customize->add_control( new WP_Customize_Control( $this->wp_customize, $this->control, $this->controlData ) );
    }else{
      $this->wp_customize->add_control($this->control, $this->controlData);
    }
    return $this;
  }

  // Control + Setting
  function createControlSettingCustom($setting = null, $default = null, $title = null, $section = null, $type = 'text', $priority = 1) {
    $this->createSetting($setting, $default, false)->createControl('ctrl_'.$setting, $title, $setting, $section, $type, $priority);
  }

  function createControlSettingTxT($setting = null, $default = null, $title = null, $section = null, $priority = 1) {
    $this->createSetting($setting, $default, false)->createControl('ctrl_'.$setting, $title, $setting, $section, 'text', $priority);
  }

  function createControlSettingSelect($setting = null, $default = null, $title = null, $section = null, $priority = 1, $options = []) {
    $this->createSetting($setting, $default, false)->createControl('ctrl_'.$setting, $title, $setting, $section, 'select', $priority, null, $options);
  }

  function createControlSettingImg($setting = null, $default = null, $title = null, $section = null, $priority = 1, $isTemplateUri = true) {
    if ($isTemplateUri) {
      $default = InPage::getTemplateIMGUri().$default;
    }
    $this->createSetting($setting, $default, false)->createControl('ctrl_'.$setting, $title, $setting, $section, 'image', $priority);
  }

  public static function ieArray($data, $key, $default = null) { //Isset Echo Array
    if (isset($data[$key])) return $data[$key];
    return $default;
  }

  function createArrayBased($panels) {
    foreach ($panels as $panelID => $panel) {
      $this->createPanel($panelID, $panel['title'], Self::ieArray($panel,'description'), Self::ieArray($panel,'priority', 1));
      foreach ($panel['sections'] as $sectionID => $section) {
        $this->createSection($sectionID, $section['title'], Self::ieArray($section,'priority', 1), $panelID, Self::ieArray($section,'description'));
        foreach ($section['inputs'] as $inputID => $input) {
          if (Self::ieArray($input,'type') === 'image') {
            $this->createControlSettingImg($inputID, Self::ieArray($input,'default'), $input['title'], $sectionID, Self::ieArray($input,'priority'));
          }else if (Self::ieArray($input,'type') === 'text'){
            $this->createControlSettingTxt($inputID, Self::ieArray($input,'default'), $input['title'], $sectionID, Self::ieArray($input,'priority'));
          }else if (Self::ieArray($input,'type') === 'select'){
            $this->createControlSettingSelect($inputID, Self::ieArray($input,'default'), $input['title'], $sectionID, Self::ieArray($input,'priority'), Self::ieArray($input,'choices',['default' => 'Default']));
          }else{
            $this->createControlSettingCustom($inputID, Self::ieArray($input,'default'), $input['title'], $sectionID, Self::ieArray($input,'type','text'), Self::ieArray($input,'priority'));
          }
        }
      }
    }
  }

  function addInputsArrayBased($inputs, $langs = ['en', 'es']) {
    if ($langs) {
      foreach ($inputs as $inputID => $input)
        foreach ($langs as $lang)
          $this->createControlSettingCustom($inputID.'_'.$lang, Self::ieArray($input,'default'), $input['label'].' ('.$lang.')', $inputs['section'], Self::ieArray($input,'type','text'), Self::ieArray($input,'priority'));
    }else{
      foreach ($inputs as $inputID => $input)
        $this->createControlSettingCustom($inputID, Self::ieArray($input,'default'), $input['label'].' ('.$lang.')', $inputs['section'], Self::ieArray($input,'type','text'), Self::ieArray($input,'priority'));
    }
  }


}
