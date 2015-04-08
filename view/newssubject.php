<?php session_start(); session_unset(); ?>

<?php foreach ($result as $subj) {?>
            <p><a href="/onenews.php?id=<?php echo $subj['id']; ?>" ><?php echo $subj['date']; ?>&nbsp;<span>|</span>&nbsp;<?php echo $subj['subject']; ?></a></p>
<?php } ?>



