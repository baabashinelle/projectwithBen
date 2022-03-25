<?php 


function page_nav($title)
{
    return "
    <section class='content-header'>
        <h1>
        $title
        <small>Control panel</small>
        </h1>
        <ol class='breadcrumb'>
        <li><a href='#'><i class='fa fa-dashboard'></i> Home</a></li>
        <li class='active'>$title</li>
        </ol>
    </section>
    ";
}

?>