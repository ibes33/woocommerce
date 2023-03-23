<?php
get_header();
?>

page

<?php
$page_title = get_the_title();
echo $page_title;
the_content();
get_footer();
?>