<ul class="menu">
    <li <?php echo $page == 'home' ? 'class="active"': ''; ?>><a href="index.php?page=home">Home</a></li>
    <li <?php echo $page == 'paphos' ? 'class="active"': ''; ?>><a href="index.php?page=paphos">Paphos</a></li>
    <li <?php echo $page == 'limassol' ? 'class="active"': ''; ?>><a href="index.php?page=limassol">Limassol</a></li>
    <li <?php echo $page == 'larnaka' ? 'class="active"': ''; ?>><a href="index.php?page=larnaka">Larnaka</a></li>
    <li <?php echo $page == 'admin' ? 'class="active"': ''; ?>><a style="color:green;font-size:25px" href="index.php?page=admin">Admin [private area]</a></li>
</ul>

<a href="index.php?page=fav_limassol"><h2 style="color:#789aeb;text-align: center;padding-top: 20px"><?php echo $page == 'limassol' ? 'Favourite cats of Limassol': ''; ?></h2></a>
<a href="index.php?page=fav_paphos"><h2 style="color: #789aeb;text-align: center;padding-top: 20px"><?php echo $page == 'paphos' ? 'Favourite cats of Paphos': ''; ?></h2></a>
<a href="index.php?page=fav_larnaka"><h2 style="color: #789aeb;text-align: center;padding-top: 20px"><?php echo $page == 'larnaka' ? 'Favourite cats of Larnaka': ''; ?></h2></a>
