<?php 


function new_user()
{
    if(isset($_POST['btn_add_user']))
    {        
        $opr = new DBOperation();
        $name = strip_tags(htmlspecialchars($_POST['name']));
        $phone = strip_tags(htmlspecialchars($_POST['phone']));
        $email = strip_tags(htmlspecialchars($_POST['email']));
        $password = "12345";
        $user_type = strip_tags(htmlspecialchars($_POST['user_type']));
        $formError = true;
        $result = $opr->addUser($name, $email, $phone, $password, $user_type);
        if($result == "USER_ADDED_SUCCESSFULLY")
        {
            $msg = "User <i><b>'$name'</b></i> added successfuly.";
            $formError = false;
        }elseif ($result == "USER_ALREADY_EXIST") {
            $msg = "User with email <i><b>'$email'</b></i> is already in our records.";
            $formError = true;
        }else{
            $msg = "Unknown error occured, Please try again later.";
            $formError = true;
        }
        echo alert_box($formError, $msg, $result);

    }
}

function get_user()
{
    $opr = new DBOperation();
    $result = $opr->getAllRecord("users");
    if($result != "NO_DATA")
    {
        foreach ($result as $user) {
            // $uty;
            echo"
            <tr>
                <td>".$user['id']."</td>
                <td>".$user['name']."</td>
                <td>".$user['email']."</td>
                <td> ".$user['phone']."</td>
                <td>".$opr->singlerecord("utypes", $user['user_type'], "id")['name']."</td>
            </tr>
            ";
        }
    }else{
        echo "
        <tr>
            <td colspan ='5'>No Records found</td>
        </tr>
        ";
    }
}
function get_sites()
{

    $opr = new DBOperation();
    $result = $opr->getAllRecord("site");
    if($result != "NO_DATA")
    {
        foreach ($result as $site) {
            // $uty;
            echo"
            <tr>
                <td>".$site['id']."</td>
                <td>".$site['name']."</td>
                <td>".$site['location']."</td>
                <td>".$site['about']."</td>
                <td> ".$site['date']."</td>
            </tr>
            ";
        }
    }else{
        echo "
        <tr>
            <td colspan ='5'>No Records found</td>
        </tr>
        ";
    }

}
function get_posts()
{

    $opr = new DBOperation();
    $result = $opr->getAllRecord("post");
    if($result != "NO_DATA")
    {
        foreach ($result as $post) {
            // $uty;
            echo"
            <tr>
                <td>".$post['id']."</td>
                <td>".$post['title']."</td>
                <td>".$post['content']."</td>
                <td>".$post['status']."</td>
                <td> ".$post['date_added']."</td>
            </tr>
            ";
        }
    }else{
        echo "
        <tr>
            <td colspan ='5'>No Records found</td>
        </tr>
        ";
    }

}
function alert_box($isError, $msg, $title_msg = null)
{
    
    if($title_msg != null)
    {
        $title = $title_msg;
    }else{
        $title = $isError? "ERROR": "SUCCESS";
    }
    $box_type = $isError? "danger": "success";

    
    return "
    <div class='box box-$box_type box-solid'>
        <div class='box-header with-border'>
        <h3 class='box-title'>$title</h3>
        <div class='box-tools pull-right'>
            <button type='button' class='btn btn-box-tool' data-widget='remove'><i class='fa fa-times'></i></button>
        </div>
        </div>
        <div class='box-body'>
        $msg
        </div>
    </div>
    ";
}
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