<?php
//session_start();
session_destroy();

// WE CANNOT USE if we already PRINTED something
// header('Location: ' . config('site_url') . '/');
?>
<script type="text/javascript">
    location.href = '<?php echo config('site_url') . '/index.php' ?>';
</script>
