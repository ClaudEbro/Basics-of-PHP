<?php require __DIR__ .'/class/resolver.php'; ?>

<?php var_dump($_GET); ?>
<?php var_dump($_POST); ?>

<?php (new resolver(__DIR__, 'inc', 'header'))->requireFile() ?>

<?php
    $data = $_POST;
    $title ='';
    
    $name = isset($data['name']) ? $data['name'] : '';
    $age = isset($data['age']) ? $data['age'] : '';
    $hobby = isset($data['hobby']) ? $data['hobby'] : '';


    if($name && $age && $hobby) {
        $title = sprintf('<h1>%s who is %s years enjoys %s.</h1>', $name, $age, $hobby);
    }
    
?>

<?php echo $title ?>

<form method="post">
    <input name="name" placeholder="Your name" required value = "<?php echo $name ?>" />
    <input name="age" placeholder="Your age" value = "<?php echo $age ?>" />
    <?php if (!$age && count($_POST)) { ?>
        <span style = "color : red">You must give your name.</span>
    <?php } ?>
    <input name="hobby" placeholder="Your hobby" value = "<?php echo $hobby ?>" />

    <button type="submit">Submit</button>
</form>

</body>
</html>

<?php (new resolver(__DIR__, 'inc', 'footer'))->requireFile() ?>