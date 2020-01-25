<!-- This file is used to markup the public-facing widget. -->


<P>
    <?php if (strlen(trim($phone))>0): ?>
    <span class="business-info"><i class="fa fa-phone"></i> </span>
    <a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a>

    <?php endif; ?>
</P>

<P>
    <?php if (strlen(trim($email))>0): ?>
    <span class="business-info">
    <i class="fa fa-envelope"></i> </span>
    <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
    <?php endif; ?>
</P>


<P>
    <?php if (strlen(trim($address))>0): ?>
    <span class="business-info"><i class="fa fa-map-marker"></i></span>
    <?php echo $address; ?>
    <?php endif; ?>
</P>

