<?php

require('../../config.php');
require_once('../../lib/moodlelib.php');

require_login();

//get our config
$def_config = get_config('block_ksh_block');

$usercontext = context_user::instance($USER->id);
$PAGE->set_course($COURSE);
$PAGE->set_url('/blocks/ksh_block/view.php');
$PAGE->set_heading($SITE->ksh_block);
$PAGE->set_pagelayout($def_config->pagelayout);
$PAGE->set_title(get_string('pluginname', 'block_ksh_block'));
$PAGE->navbar->add(get_string('pluginname', 'block_ksh_block'));


// start output to browser
echo $OUTPUT->header();
echo $OUTPUT->heading(get_string('pluginname', 'block_ksh_block'),2);


echo '<div><h3 style="color: '. $def_config->namecolour .'">' . ksh_block($USER) . '</h3></div>';
echo '<p>Hello ' . $def_config->firstname . '</p>';
echo '<div><h3>' . get_string('welcome', 'block_ksh_block') . ksh_block($USER) . '</h3></div>';

echo '<br>' . $OUTPUT->user_picture($USER);

//send footer out to browser
echo $OUTPUT->footer();
return;


	