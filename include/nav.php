<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<?php
// session_start();
/*  $_SESSION['start'] = array(0=> 'active', 'registered' => time());
if ((time() - $_SESSION['start']['registered']) > (60 * 2)) {
    unset($_SESSION['start']);
    echo "session destroyed";
}
$_SESSION['start'] = time(); */
?>

<header>
    <nav>
        <ul  style="list-style-type: none;">
            <li>
                <a href="index.php?page=accueil" target="_blank" rel="noopener noreferrer">Accueil</a>
            </li>
            <li><a href="index.php?page=contact">contact</a></li>
            <?php if (isset($_SESSION['loginUser']) && $_SESSION['loginUser']===true) { ?>
                <span class="login">
                    <li><a href="index.php?page=logout">logout</a></li>
                    <li><strong><?=$_SESSION['loginUser'] ?></strong></li>
                    <li><a href="index.php?page=users"><i class="fa-regular fa-user" ></i></a></li>
                  <!--   <li><img src="./assets/img/user.png" alt="test the icon" srcset="" ></li> -->
                </span>
            <?php } else { ?>
                <li><a href="index.php?page=inscription">inscription</a></li>
                <li><a href="index.php?page=login">login</a></li>
                <li><a href="index.php?page=admin">show users</a></li>

            <?php } ?>
        </ul>
    </nav>
</header>