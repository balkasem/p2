<?php
require 'helpers.php';
require 'index-logic.php';
?>


<!doctype html>
<html>
<head>
    <link href='css/main.css' rel='stylesheet' >
    <title>Bill Splitter</title>
    <meta charset='utf-8'>
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'
          rel='stylesheet' integrity='sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm'
          crossorigin='anonymous'>

</head>
<body>
<div class='container' >
    <form method='POST' action='index.php'>
        <h1> Bill Splitter </h1>
        <div class='form-group required'>
            <label class='col-sm-6 control-label' >
                Split how many ways?
                <input type='text' name='waysNumber' value='<?= $form->prefill('waysNumber', '') ?>'>
            </label>
            <br/>
            <label class='col-sm-6 control-label'>
                How much was the tab?
                <input type='text' name='tabValue' value='<?= $form->prefill('tabValue', '') ?>' >
            </label>
            <br/>
            <label  class='col-sm-6 control-label'>
                How was the service?
                <select name='serviceQuality' >
                    <option value="5"
                        <?php
                        if (isset($_POST['serviceQuality']) && $_POST['serviceQuality'] == '5')
                            echo 'selected= "selected"';
                        ?>
                    >Fine</option>
                    <option value="10"
                        <?php
                        if (isset($_POST['serviceQuality']) && $_POST['serviceQuality'] == '10')
                            echo 'selected= "selected"';
                        ?>
                    >Good</option>

                    <option value="18"
                        <?php
                        if (isset($_POST['serviceQuality']) && $_POST['serviceQuality'] == '18')
                            echo 'selected= "selected"';
                        ?>
                    >Amazing</option>
                </select>
            </label>
            <br/>
            <label class='col-sm-2'>
                Round Up ?
            </label>
            <input type='checkbox' name='RoundUp' value='1' <?= ($roundUp) ? 'checked' : '' ?> >
            <br/>
            <div class='col-sm-1'>
                <input type='submit' value='Calculate' class='btn btn-primary' >
            </div>
            <br/>
        </div>
    </form>
    <div class='col-sm-12 result' >  Everyone Owes $<?= $calResults ?>  </div>
    <?php
    if ($form->hasErrors):
        ?>
        <div class='alert alert-danger'>
            <ul>
                <?php
                foreach ($errors as $error):
                    ?>
                    <li><?= $error ?></li>
                <?php
                endforeach;
                ?>
            </ul>
        </div>
    <?php
    endif;
    ?>
</div>
</body>
</html>

