<?php 
                $fields = get_fields();
                if( $fields ): 
                var_dump($fields); ?>
<ul>
  <?php foreach( $fields as $name =>
  $value ): ?>
  <li>
    <b><?php echo $name; ?></b>
    <?php echo $value; ?>
  </li>
  <?php endforeach; ?>
</ul>

<?php endif; ?>
