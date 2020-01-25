<!-- This file is used to markup the public-facing widget. -->


<P>
    <?php if (strlen(trim($weekdays))>0): ?>
    <span class="business-weekdays"> <strong> Monday-Friday:</strong>
        </span>
    <?php echo $weekdays; ?>
    <?php endif; ?>
</P>

<P>
    <?php if (strlen(trim($saturdays))>0): ?>
    <span class="business-weekdays"><strong>Saturdays:</strong></span>
    <?php echo $saturdays; ?>
    <?php endif; ?>
</P>


<P>
    <?php if (strlen(trim($sundays))>0): ?>
    <span class="business-weekdays"><strong>Sundays:</strong></span>
    <?php echo $sundays; ?>
    <?php endif; ?>
</P>