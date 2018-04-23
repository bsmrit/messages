<?php

require 'components/header.php';

?>


<form action="index.php?page=edit" method="post">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1>Message Entry</h1>
                <div class="form-group">
                    <textarea class="form-control" name="message"><?php echo $record['body']?></textarea>
                </div>
                <button type="submit" class="form-control btn btn-primary">Edit</button>
            </div>
        </div>
    </div>
</form>

<?php require 'components/footer.php'; ?>
