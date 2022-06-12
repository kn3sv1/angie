<ul class="menu">
    <li <?php echo $page == 'home' ? 'class="active"': ''; ?>><a href="index.php?page=home">Home</a></li>
    <li <?php echo $page == 'paphos' ? 'class="active"': ''; ?>><a href="index.php?page=paphos">Paphos</a></li>
    <li <?php echo $page == 'limassol' ? 'class="active"': ''; ?>><a href="index.php?page=limassol">Limassol</a></li>
    <li <?php echo $page == 'larnaka' ? 'class="active"': ''; ?>><a href="index.php?page=larnaka">Larnaka</a></li>
    <li <?php echo $page == 'admin' ? 'class="active"': ''; ?>><a style="color:green;font-size:25px" href="index.php?page=admin">Admin [private area]</a></li>
</ul>