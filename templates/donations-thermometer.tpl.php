<div class="donations_thermometer">
  <div class="gauge gauge-<?php print $size ?>">
    <div class="current-value" id="campaign-progress-current" style="height: <?php print $percent; ?>%;">
      <p><?php print $percent; ?>% </p>
    </div>
  </div>
  <p>
    <span class="donations_thermometer-label"> Current Amount:</span>
    <span class="donations_thermometer-amount"><?php print $currency; ?><?php print number_format($amount); ?></span>
  </p>
  <p><span class="donations_thermometer-label">Target:</span><span class="donations_thermometer-amount"><?php print $currency; ?><?php print number_format($target); ?></span>
  </p>
</div>