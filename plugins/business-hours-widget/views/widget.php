<!-- This file is used to markup the public-facing widget. -->
<?php if( strlen( trim( $monday_friday)) > 0) :?>
    <p>
        <span class="day-of-week">
            Monday - Friday
        </span>
    </p>
    <p>
        <?php echo $monday_friday?>
    </p>
<?php endif;?>
<?php if( strlen( trim( $saturday)) > 0) :?>
    <p>
        <span class="day-of-week">
            Saturday
        </span>
    </p>
    <p>
        <?php echo $saturday?>
    </p>
<?php endif;?>
<?php if( strlen( trim( $sunday)) > 0) :?>
    <p>
        <span class="day-of-week">
            Sunday
        </span>
    </p>
    <p>
        <?php echo $sunday?>
    </p>
<?php endif;?>