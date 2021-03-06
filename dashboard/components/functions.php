<?php 


function new_user($loc = 'admin')
{
    if(isset($_POST['btn_add_user']))
    {        
        $opr = new DBOperation();
        $name = strip_tags(htmlspecialchars($_POST['name']));
        $phone = strip_tags(htmlspecialchars($_POST['phone']));
        $email = strip_tags(htmlspecialchars($_POST['email']));
        $password = isset($_POST['password'])? strip_tags(htmlspecialchars($_POST['password'])): "12345";
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
        echo $loc == 'admin'? alert_box($formError, $msg, $result):
             "
            <div class='alert alert-";echo $formError? "danger":"success"; echo" alert-dismissible'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                <strong>$result</strong><br /> $msg.
            </div>
            ";
        

    }
}

function changePassword()
{
    if(isset($_POST['btn_cp']))
    {        
        $opr = new DBOperation();
        // session_start();
        $curp = strip_tags(htmlspecialchars($_POST['curp']));
        $newp = strip_tags(htmlspecialchars($_POST['newp']));
        $conp = strip_tags(htmlspecialchars($_POST['conp']));
        // echo $_SESSION['cur_user_id'];
        // exit();
        if($conp === $newp)
        {
            $result = $opr->changePassword($_SESSION['cur_user_id'], $newp, $curp);
            // echo $result;
            // exit();
            if($result == "INVALID_CURRENT_PASSWORD")
            {
                $msg = "Incoorect password!";
                echo alert_box(true, $msg, $result);
            }else{
                $msg = "Password changes successfully";
                echo alert_box(false, $msg);
                
            }
        }else{
            echo alert_box(true, "Password do not match", "PASSWORD_MATCH_ERROR");

        }
    } 
}

function login()
{
    if(isset($_POST['btn_login']))
    {        
        $opr = new DBOperation();

        $email = strip_tags(htmlspecialchars($_POST['email']));
        $password = strip_tags(htmlspecialchars($_POST['password']));
        $user_type = strip_tags(htmlspecialchars($_POST['user_type']));
        $result = $opr->Login($email, $user_type,  $password);
        // echo "<script>alert('$user_type')</script>";
        // exit();
        if($result == "USER_NOT_REGISTERED")
        {
            $msg = "Account doesn't exist!";
           echo  "
            <div class='alert alert-danger alert-dismissible'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                <strong>$result</strong><br /> $msg.
            </div>
            ";
        }elseif ($result == "PASSWORD_NOT_MATCHED"){
            $msg = "Invalid email or password";
            echo  "
             <div class='alert alert-danger alert-dismissible'>
                 <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                 <strong>Auth Error</strong><br /> $msg.
             </div>
             ";
        }elseif ($result == "INALID_USER_TYPE"){
            $msg = "Selected user type is not valid for this account";
            echo  "
             <div class='alert alert-danger alert-dismissible'>
                 <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                 <strong>Auth Error</strong><br /> $msg.
             </div>
             ";
        }else{
            session_start();
            $_SESSION["cur_user_id"] = $result; 
            $_SESSION['logedIn'] = session_id();
            redirect("dashboard/index.php");
        }

        

    }  
}

function logout()
{
    if(isset($_GET['logout']) && $_GET['logout'] == true){
        session_start();
        ob_start();
        session_unset();
        session_destroy();
        redirect("../auth.php");
    }
}

function redirect($url) {
    ob_start();
    header('Location: '.$url);
    ob_end_flush();
    die();
}

function new_post()
{
    if(isset($_POST['btn_add_post']))
    {      
        // echo "$_FILE"
        $opr = new DBOperation();
        $title = strip_tags(htmlspecialchars($_POST['title']));
        $content = strip_tags(htmlspecialchars($_POST['content']));
        $uid = isset($_SESSION['cur_user_id']) ? $_SESSION['cur_user_id'] : 1;
        $formError = true;
        $file_status =  upload_image("post_img", 'posts');
        if($file_status == "OK")
        {
            $file = htmlspecialchars( basename( $_FILES["post_img"]["name"]));
            $result = $opr->createPost($uid, $title, $content, $file);
            if($result == "POST_ADDED_SUCCESSFULLY")
            {
                $msg = "Post <i><b>'$title'</b></i> added successfuly.";
                $formError = false;
            }elseif ($result == "POST_ADDED_SUCCESSFULLY") {
                $msg = "Post with title <i><b>'$title'</b></i> is already in our records.";
                $formError = true;
            }else{
                $msg = "Unknown error occured, Please try again later.";
                $formError = true;
            }
        }else{
            $msg = $file_status;
            $result = "FILE UPLOAD ERROR";
            $formError = true; 
        }

        echo alert_box($formError, $msg, $result);

    }
}

function new_site()
{
    if(isset($_POST['btn_add_site']))
    {      
        // echo "$_FILE"
        $opr = new DBOperation();
        $name = strip_tags(htmlspecialchars($_POST['name']));
        $location = strip_tags(htmlspecialchars($_POST['location']));
        $about = strip_tags(htmlspecialchars($_POST['about']));
        $uid = isset($_SESSION['cur_user_id']) ? $_SESSION['cur_user_id'] : 1;
        $formError = true;
        $date = date("y-m-d h:i:s");
        $file_status =  upload_image("site_img");
        if($file_status == "OK")
        {
            $file = htmlspecialchars( basename( $_FILES["site_img"]["name"]));
            $result = $opr->newSite($uid, $name, $location, $about, $date, $file );
            if($result == "SITE_ADDED_SUCCESSFULLY")
            {
                $msg = "Site <i><b>'$name'</b></i> added successfuly.";
                $formError = false;
            }elseif ($result == "SITE_ALREADY_EXIST") {
                $msg = "Site with name <i><b>'$name'</b></i> is already in our records.";
                $formError = true;
            }else{
                $msg = "Unknown error occured, Please try again later.";
                $formError = true;
            }
        }else{
            $msg = $file_status;
            $result = "FILE UPLOAD ERROR";
            $formError = true; 
        }

        echo alert_box($formError, $msg, $result);

    }
}

function upload_image($file, $dir = 'sites')
{
    $target_dir = "./uploads/$dir/";
    $target_file = $target_dir . basename($_FILES[$file]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
      $check = getimagesize($_FILES[$file]["tmp_name"]);
      if($check !== false) {
        // echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
      } else {
        return  "File is not an image.";
        $uploadOk = 0;
      }
    }
    
    // Check if file already exists
    if (file_exists($target_file)) {
     return  "Sorry, file already exists.";
      $uploadOk = 0;
    }
    
    // Check file size
    // if ($_FILES[$file]["size"] > 5000000) {
    //   return "Sorry, your file is too large.";
    //   $uploadOk = 0;
    // }
    
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
      return  "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
      $uploadOk = 0;
    }
    
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk === 1) {
      if (move_uploaded_file($_FILES[$file]["tmp_name"], $target_file)) {
        // echo "The file ". htmlspecialchars( basename( $_FILES[$file]["name"])). " has been uploaded.";
        return "OK";
      }
    }

    // return $message;
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
                <td><img src = './uploads/sites/".$site['img']."' width = '60' alt = '".$site['id']."' /></td>
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

function get_btn($st, $id)
{
    echo "
    <form method = 'post' class='btn-group'>
    <input type = 'hidden' name = 'id' value = '$id' />
    <!-- <input type = 'hidden' name = 'status' value = '$st' /> -->
    <button type='submit' name = 'activate_post_btn' class='btn btn-"; echo $st == 0? "danger":"success"; echo "'>"; echo $st == 0? "Approve":"Approved"; echo "</button>
  </form>
    ";
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
                <td><img src = './uploads/posts/".$post['img']."' width = '60' alt = '".$post['id']."' /></td>
                <td>".$post['title']."</td>
                <td>".html_entity_decode($post['content'])."</td>
                <td style = 'width: 100px;'>";echo get_btn($post['status'], $post['id']); echo"</td>
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

function activate_post()
{
    if(isset($_POST['activate_post_btn']))
    {
        // $status = $_POST['status'];
        
        $id = $_POST['id'];
        $tb = "post";
        $opr = new DBOperation();
        $res = $opr->activate($tb, $id);
        // echo "<script>alert('$res')</script>"; exit();
        if($res == "TOGGLED_SUCCESSFULLY")
        {
            echo "<meta http-equiv='refresh' content='0'>";
        }

    }
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