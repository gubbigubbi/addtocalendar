<?php 
class MyPlugin{
  
      private $my_plugin_screen_name;
      private static $instance;
       /*......*/
  
      static function GetInstance()
      {
          
          if (!isset(self::$instance)) {
              self::$instance = new self();
          }
          return self::$instance;
      }
      
      public function PluginMenu() {
            $this->my_plugin_screen_name = add_menu_page(
                  'Add to Calendar Options', 
                  'WP Add to Calendar', 
                  'manage_options',
                  __FILE__, 
                  array($this, 'RenderPage'), 
                  'dashicons-calendar-alt'
            );
      }
      
      public function initSettings() {
        register_setting('add-to-calendar-settings-group', 'client-id');      
      }
      public function RenderPage() {
       ?>
       <div class='wrap'>
        <h2>Add to Calendar Options</h2>
       </div>
       
        <form method="post" action="options.php">
            <?php settings_fields( 'add-to-calendar-settings-group' ); ?>
            <?php do_settings_sections( 'add-to-calendar-settings-group' ); ?>
            <table class="form-table">
                <tr valign="top">
                <th scope="row">Client ID</th>
                <td><input type="text" name="client-id" value="<?php echo esc_attr( get_option('client-id') ); ?>" /></td>
                </tr>
            </table>
            
            <?php submit_button(); ?>
        
        </form>
       
       <?php
      }

      public function InitPlugin() {
           add_action('admin_menu', array($this, 'PluginMenu'));
           add_action('admin_init', array($this, 'initSettings'));
      }
  
 }
 
$MyPlugin = MyPlugin::GetInstance();
$MyPlugin->InitPlugin();