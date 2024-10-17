<?php
// Query to fetch the plans
$query = "SELECT * FROM hm2_plans";
$result = mysqli_query($conn, $query);

// Check if there are any results
if (mysqli_num_rows($result) > 0) {
    // Loop through each plan
    while ($row = mysqli_fetch_assoc($result)) {
        // Extract the plan data
        $plan_id = $row['id'];
        $plan_name = $row['name'];
        $min_deposit = number_format($row['min_deposit'], 2);
        $max_deposit = number_format($row['max_deposit'], 2);
        $percent = $row['percent'];

        // Template starts here
        ?>
        <div class="col-lg-3 mb-30">
            <div class="package-card text-center bg_img"
                 data-background="assets/templates/bit_gold/images/bg/bg-4.png">
                <h4 class="package-card__title base--color mb-2"><?php echo $plan_name; ?></h4>

                <ul class="package-card__features mt-4">
                    <li>Return <?php echo $percent; ?>%</li>
                    <li>Every Day</li>
                    <li>For 160 Days</li>
                    <li>Total <?php echo $percent * 160; ?>% + <span class="badge badge-success">Capital</span></li>
                </ul>
                <div class="package-card__range mt-5 base--color"> $<?php echo $min_deposit; ?> - $<?php echo $max_deposit; ?>
                </div>
                <a href="javascript:void(0)" data-toggle="modal" data-target="#depoModal"
                   data-resource="{&quot;id&quot;:<?php echo $plan_id; ?>,&quot;name&quot;:&quot;<?php echo $plan_name; ?>&quot;,&quot;minimum&quot;:&quot;<?php echo $min_deposit; ?>&quot;,&quot;maximum&quot;:&quot;<?php echo $max_deposit; ?>&quot;,&quot;interest&quot;:&quot;<?php echo $percent; ?>&quot;}"
                   class="cmn-btn btn-md mt-4 investButton">Invest Now</a>
            </div><!-- package-card end -->
        </div>
        <?php
        // Template ends here
    }
} else {
    echo "No plans available.";
}
?>
