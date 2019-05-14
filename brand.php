<?php include "./header.php"; ?>
<?php

session_start();
    
if(!(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true)){

    header("location: login.php");
    exit;
}

$page = 0;
$title = "About Us";
$pic = "./img/laptop-2.png";
$icon = "far fa-address-card";
if (isset($_GET["id"])){
    $page = $_GET["id"];
    switch ($page){
        case 1: {
            $title = "Gifts & Awared";
            $pic = "./img/laptop.png";
            $icon = "fas fa-gifts";
        }
            break;
        case 2: {
            $title = "Onsite Service";
            $pic = "./img/laptop-2.png";
            $icon = "fas fa-home";
        }
            break;
        case 3: {
            $title = "Proactive automated support featuring SupportAssist";
            $pic = "./img/camlens.png";
            $icon = "fas fa-medkit";
        }
            break;
        case 4: {
            $title = "Seminer & Product breafing";
            $pic = "./img/cam.png";
            $icon = "fas fa-qrcode";
        }
            break;
        case 5: {
            $title = "Gaming Zone";
            $pic = "./img/laptop.png";
            $icon = "fas fa-gamepad";
        }
            break;
        case 6: {
            $title = "Photography Solutions";
            $pic = "./img/camlens.png";
            $icon = "fas fa-camera";
        }
            break;
        case 7: {
            $title = "System Application Development";
            $pic = "./img/laptop-2.png";
            $icon = "fas fa-laptop-code";
        }
            break;
        case 8: {
            $title = "Expert Assistant";
            $pic = "./img/cam.png";
            $icon = "fas fa-tools";
        }
            break;
        default:
        header("location: about.php");
    }
}
?>

<div class="banner">
    <div class="banner-image-container"><img style="margin-left: 10px;margin-top: 10px;" src= "<?php echo $pic; ?>" ></div>
    <div class="banner-icon-container-right"><i class="<?php echo $icon; ?>" ></i></div>
    <div class="banner-title">
      <span><?php echo $title; ?></span>
    </div>
    <div class="banner-subtitle">
      <span>Get the most out of your technology with our services.</span>
    </div>
    <div class="banner-subtitle">
        <span>Powered by <a href="https://cse.pstu.ac.bd/">CSE PSTU</a>.</span>
      </div>
</div>
<div class="left-content">
<div>
    <h2>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...</h2>
</div>    
<div class="content-text">
        
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed sem ac mauris lobortis ultrices. Pellentesque cursus ante ultricies risus cursus dictum. Ut consectetur erat id vehicula consectetur. Morbi ornare dui sit amet sem pulvinar viverra. Fusce malesuada vitae sem sit amet porta. Nulla congue ipsum pharetra magna molestie porttitor. Integer sollicitudin lacinia dignissim. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

    <p>Vivamus id erat vel augue euismod consectetur vel nec mauris. Sed mi neque, luctus a consectetur tincidunt, lacinia sed lacus. Integer id elit felis. Maecenas suscipit ac lorem nec posuere. Nulla rhoncus facilisis elit at tincidunt. Donec placerat ornare tempus. Aliquam erat volutpat. Praesent nec risus enim. Praesent in purus et tellus vehicula mattis vitae elementum erat. Sed efficitur maximus maximus. Donec dapibus dui ut feugiat sodales. Suspendisse potenti. Duis eget nisi enim. Mauris imperdiet vehicula augue, at pharetra nunc volutpat in. Duis pellentesque elit diam. Suspendisse potenti.</p>

    <p>Nullam faucibus, urna ullamcorper condimentum euismod, tortor mauris vehicula libero, sit amet tempus dui est ut felis. Phasellus fermentum orci leo, eget molestie quam iaculis sit amet. Morbi egestas ipsum quis tincidunt blandit. Maecenas dapibus, nibh viverra lobortis consequat, tellus metus luctus dui, eu faucibus magna magna in arcu. Aliquam hendrerit accumsan nisi. Nam pretium leo a tortor accumsan, sed tempor metus dignissim. Quisque mi erat, egestas sit amet tincidunt ac, sollicitudin in erat. Duis molestie cursus nisi, sit amet gravida risus molestie mattis. Vivamus ante orci, imperdiet ac suscipit eget, iaculis quis enim. Curabitur quis enim in odio commodo ultricies auctor sit amet ex. Morbi ac efficitur mi.</p>

    <p>Sed rutrum, risus nec pretium accumsan, sem neque congue urna, eu blandit lectus leo nec magna. Duis in tellus sit amet sapien condimentum pulvinar ut sed velit. Ut volutpat quam est, quis congue urna fringilla sit amet. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nibh justo, suscipit vel posuere ut, sodales eleifend diam. Vestibulum turpis enim, rhoncus quis nulla eu, euismod ultricies purus. Vivamus maximus mauris id libero fringilla, ut cursus arcu venenatis. Vivamus ut mi lacus.</p>

    <p>Fusce et mattis nisl. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ligula ligula, suscipit eu commodo sed, suscipit et odio. Morbi finibus ex consectetur, hendrerit metus rhoncus, volutpat urna. Nullam non eros non elit convallis posuere a quis nibh. Duis faucibus metus sed dui egestas, non commodo odio scelerisque. Pellentesque ornare ex eu nisi mollis egestas. Donec felis augue, faucibus ut ipsum ut, malesuada laoreet neque. Integer mauris odio, dapibus a iaculis accumsan, sollicitudin porta purus. Nunc eget vehicula quam. Maecenas vestibulum velit mauris, nec ornare neque lobortis sit amet. Nunc mattis ex sit amet dui ultrices consequat.</p>
</div>
</div>
<div class="bundle-content-container" style="width: 277px;float: right;background: rgba(0,0,255,0.15);">
    <div class="bundle-content"> 
        <a href="./brand.php?id=1">
            <div class="bundle-icon"><i class="fas fa-gifts"></i></div>
            <div class=bundle-text><span>Gifts & Awared</span></div>
        </a>
    </div> 
    <div class="bundle-content"> 
        <a href="./brand.php?id=2">
            <div class="bundle-icon"><i class="fas fa-home"></i></div>
            <div class=bundle-text><span>Onsite Service</span></div>
        </a>
    </div>
    <div class="bundle-content"> 
        <a href="./brand.php?id=3">
            <div class="bundle-icon"><i class="fas fa-medkit"></i></div>
            <div class=bundle-text style="padding-top: 28px;"><span>Proactive automated support featuring SupportAssist</span></div>
        </a>
   </div>
    <div class="bundle-content"> 
        <a href="./brand.php?id=4">
            <div class="bundle-icon"><i class="fas fa-qrcode"></i></div>
            <div class=bundle-text style="padding-top: 32px;"><span>Seminer & Product breafing</span></div>
        </a>
    </div>
    <div class="bundle-content"> 
        <a href="./brand.php?id=5">
            <div class="bundle-icon"><i class="fas fa-gamepad"></i></div>
            <div class=bundle-text><span>Gaming Zone</span></div>
        </a>
   </div>
    <div class="bundle-content"> 
        <a href="./brand.php?id=6">
            <div class="bundle-icon"><i class="fas fa-camera"></i></div>
            <div class=bundle-text><span>Photography Solutions</span></div>
        </a>
   </div>
    <div class="bundle-content"> 
        <a href="./brand.php?id=7">
            <div class="bundle-icon"><i class="fas fa-laptop-code"></i></div>
            <div class=bundle-text style="padding-top: 32px;"><span>System Application Development</span></div>
        </a>
   </div>
    <div class="bundle-content"> 
        <a href="./brand.php?id=8">
            <div class="bundle-icon"><i class="fas fa-tools"></i></div>
            <div class=bundle-text><span>Expert Assistant</span></div>
        </a>
   </div>
</div>
<?php include "./footer.php"; ?>