<?php
               while (have_rows('student-test') ) : the_row(); 
               $image = get_sub_field('student-images');
               ?>
  <?php the_sub_field('name');?>

    <img src="<?php echo $image['url']; ?>">

               <?php  endwhile; ?>

 

  <h3><?php the_field('secondary_header_title');?></h3>






  CREATE TABLE `wp_survey` (
`id` int(11) NOT NULL auto_increment,
`vehicle_type` varchar(100) NOT NULL default '',
`monthly_budget` varchar(100) NOT NULL default '',
`address` varchar(100) NOT NULL default '',
`city` varchar(100) NOT NULL default '',
`province` varchar(100) NOT NULL default '',
`postal_code` varchar(100) NOT NULL default '',
`first_name` varchar(100) NOT NULL default '',
`last_name` varchar(100) NOT NULL default '',
`email` varchar(100) NOT NULL default '',
`phone` varchar(100) NOT NULL default '',
`birth_month` varchar(100) NOT NULL default '',
`birth_day` varchar(100) NOT NULL default '',
`birth_year` varchar(100) NOT NULL default '',
`rent_or_own` varchar(100) NOT NULL default '',
`monthly_payment` varchar(100) NOT NULL default '',
`employment_status` varchar(100) NOT NULL default '',
`income_source` varchar(100) NOT NULL default '',
`employer` varchar(100) NOT NULL default '',
`job_title` varchar(100) NOT NULL default '',
`monthly_income` varchar(100) NOT NULL default '',
`on_job_3_months` varchar(100) NOT NULL default '',
`cosigner` varchar(100) NOT NULL default '',
PRIMARY KEY  (`id`),
 KEY `type` (`vehicle_type`)
) DEFAULT CHARSET=utf8;
