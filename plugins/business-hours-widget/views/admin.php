<!-- This file is used to markup the administration form of the widget. -->

<div class="widget-content">
   <p><label for="<?php echo $this->get_field_id('title'); ?>">Title:</label>
		<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>">
   </p>

   <p><label for="<?php echo $this->get_field_id('weekdays'); ?>">Weekdays:</label>
		<input class="widefat" id="<?php echo $this->get_field_id('weekdays'); ?>" name="<?php echo $this->get_field_name('weekdays'); ?>" type="text" value="<?php echo $weekdays; ?>">
   </p>


   <p><label for="<?php echo $this->get_field_id('saturdays'); ?>">Saturdays:</label>
		<input class="widefat" id="<?php echo $this->get_field_id('saturdays'); ?>" name="<?php echo $this->get_field_name('saturdays'); ?>" type="text" value="<?php echo $saturdays; ?>">
   </p>


   <p><label for="<?php echo $this->get_field_id('sundays'); ?>">Sundays:</label>
		<input class="widefat" id="<?php echo $this->get_field_id('sundays'); ?>" name="<?php echo $this->get_field_name('sundays'); ?>" type="text" value="<?php echo $sundays; ?>">
   </p>


</div>
